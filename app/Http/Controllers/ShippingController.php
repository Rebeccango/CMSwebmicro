<?php
namespace App\Http\Controllers;

use Log;
use DB;
use Redirect;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Request;
use Route;
use Validator;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use Response;
use Cookie;
use Illuminate\Contracts\Cookie\Factory;
use App\Http\Controllers\StoreController;
use Shippo;
use Shippo_CarrierAccount;
use Shippo_Shipment;
use Shippo_Address;
use Shippo_Transaction;
use App\Http\Controllers\PackingController;
use SimpleXMLElement;

class ShippingController extends Controller
{
  private $url;
  private $username;
  private $password;

  public function __construct()
  {
    $this->url = env('ESHIPPER_URL');
    $this->username = env('ESHIPPER_USERNAME');
    $this->password = env('ESHIPPER_PASSWORD');
  }

  public function eShipperQuote($packages, $to)
  {
      foreach ($to as $k => $t) {
          $to[$k] = str_replace("'", "&#39;", utf8_decode($t));
          $to[$k] = htmlspecialchars($t);
      }

      $post_string = '<?xml version="1.0" encoding="UTF-8"?><EShipper xmlns="http://www.eshipper.net/XMLSchema" username="'.env('ESHIPPER_USERNAME').'" password="'.env('ESHIPPER_PASSWORD').'" version="3.0.0">';

      $post_string .= '<QuoteRequest serviceId="0" stackable="true"><From id="1" company="CAD MicroSolutions Inc." address1="30 International Blvd" address2="Unit #1" city="Etobicoke" state="ON" country="CA" zip="M9W1A2" email="contact@cadmicro.com"/><To company="'.$to['company'].'" address1="'.$to['street1'].'" address2="'.$to['street2'].'" city="'. $to['city'] .'" state="'.$to['state'].'" zip="'.$to['zip'].'" email="'.$to['email'].'" phone="'.$to['phone'].'" country="'.$to['country'].'"/>';

      $post_string .= '<Packages type="Package">';
      foreach($packages as $package){
        $post_string .='<Package length="'.$package['length'].'" width="'.$package['width'].'" height="'.$package['height'].'" weight="'.$package['weight'].'" insuranceAmount="0.0" />';
      }
      $post_string .='</Packages></QuoteRequest></EShipper>';

      $arr = $this->sendXmlOverPost(env('ESHIPPER_URL'),$post_string);
      $rates = array();
      $errors = array();
      if(isset($arr['ErrorReply'])){
        foreach($arr['ErrorReply']['Error'] as $error){
          $errors []= $error['Message'];
        }
      }else{
        if(isset($arr['QuoteReply'])){
          foreach($arr['QuoteReply']['Quote'] as $key=> $a){
            $rate = $a['@attributes'];
            if(isset($rate['deliveryDate'])){
              $rate['deliveryDate'] = str_replace("-","",$rate['deliveryDate']);
              $now = time();
              $delivery = strtotime($rate['deliveryDate']);
              $rate['estimatedDays'] = round(($delivery - $now) / (60 * 60 * 24));
            }else{
              $rate['estimatedDays'] = 0;
            }
            $rates []= (object)$rate;
          }
        }else{
          if(!empty($arr[0])){
            $errors[] = $arr[0];
          }else{
            $errors[] = $arr;
          }
        }
      }

      return (object)array('rates'=>$rates, 'errors'=>(object)$errors, 'string'=>$post_string);
  }

  private function nextBusinessDay(){
    $tmpDate = date('Y-m-d');
    $holidays = ['2019-02-08', '2019-04-19', '2019-04-22', '2019-05-20', '2019-07-01', '2019-08-05', '2019-09-02', '2019-10-14', '2019-12-25', '2019-12-26', '2020-01-01'];
    $i = 1;
    $nextBusinessDay = date('Y-m-d', strtotime($tmpDate . ' +' . $i . ' Weekday'));

    while (in_array($nextBusinessDay, $holidays)) {
        $i++;
        $nextBusinessDay = date('Y-m-d', strtotime($tmpDate . ' +' . $i . ' Weekday'));
    }

    return $nextBusinessDay;
  }

  public function eShipperShipRequest($packages, $to)
  {
    $nextBusinessDay = $this->nextBusinessDay();

    foreach ($to as $k => $t) {
      $to[$k] = str_replace("'", "&#39;", utf8_decode($t));
      $to[$k] = htmlspecialchars($t);
    }

    $post_string = '<?xml version="1.0" encoding="UTF-8"?>
      <EShipper xmlns="http://www.eshipper.net/XMLSchema" username="'.$this->username.'" password="'.$this->password.'" version="3.0.0">
        <ShippingRequest serviceId="'.$to['serviceid'].'" scheduledShipDate="'.$nextBusinessDay.'" stackable="true">
          <From id="1" company="CAD MicroSolutions Inc." address1="30 International Blvd" address2="Unit #1" phone="4162130533" city="Etobicoke" state="ON" country="CA" zip="M9W1A2" email="contact@cadmicro.com" attention="Alix Kesten"/><To company="'.$to['company'].'" address1="'.$to['street1'].'" address2="'.$to['street2'].'" city="' . $to['city'] .'" state="'.$to['state'].'" zip="'.$to['zip'].'" email="'.$to['email'].'" phone="'.$to['phone'].'" country="'.$to['country'].'"  attention="'.$to['name'].'" /><Packages type="Package">';

          $post_string .= '<Pickup contactName="Debra Brown or Alix Kesten" phoneNumber="416-213-0533" pickupDate="'.$nextBusinessDay.'" pickupTime="10:00" closingTime="16:30" location="Main Door"/>';

          foreach($packages as $package){
            $post_string .='<Package length="'.$package['length'].'" width="'.$package['width'].'" height="'.$package['height'].'"
                          weight="'.$package['weight'].'" insuranceAmount="0.0"/>';
          }
          $post_string .='</Packages><Payment type="3rd Party" /><Reference name="orderid" code="'.$to['orderid'].'" />
        </ShippingRequest>
      </EShipper>';

      $arr = $this->sendXmlOverPost($this->url,$post_string);

      $rates = array();
      $errors = null;
      if(isset($arr['ErrorReply'])){
        $errors = array();
        foreach($arr['ErrorReply']['Error'] as $error){
          $errors []= $error['Message'];
        }
        // $errors = (object)$errors;
      }

      return (object)array('response'=>$arr, 'errors'=>$errors);
  }

  public function eShipperPrintableLabels($orderId)
  {
    $shipping = $this->eShipperOrderInfoRequest($orderId);

    $file = base64_decode($shipping->response['OrderInformationReply']['Labels']);

    return response($file, 200, [
       'Content-Type' => 'application/pdf',
       'Content-Disposition' => 'inline; filename="'.$filename.'"'
   ]);
  }

  public function eShipperOrderInfoRequest($orderId)
  {
    $post_string = '<?xml version="1.0" encoding="UTF-8"?>
      <es:EShipper xmlns:es="http://www.eshipper.net/XMLSchema" username="'.$this->username.'" password="'.$this->password.'" version="3.1.0">
        <OrderInformationRequest>
          <Order orderId="'.$orderId.'" detailed="true"/>
        </OrderInformationRequest>
      </es:EShipper>';

      $arr = $this->sendXmlOverPost($this->url,$post_string);

      $errors = null;
      if(isset($arr['ErrorReply'])){
        $errors = array();
        foreach($arr['ErrorReply']['Error'] as $error){
          $errors []= $error['Message'];
        }
      }

      return (object)array('response'=>$arr, 'errors'=>$errors);
  }

  private function sendXmlOverPost($url, $xml) {

    $headers = array(
        "Content-type: text/xml",
        "Content-length: " . strlen($xml),
        "Connection: close",
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt ($ch, CURLOPT_HTTPHEADER,  $headers);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

    $result = curl_exec($ch);

    if(curl_errno($ch)) {
      return curl_error($ch);
    }else{
      curl_close($ch);
      return $this->xmlStringToArray($result);
    }
  }

  private function xmlStringToArray($xml){
    libxml_use_internal_errors(true);

    $xmlData = new SimpleXMLElement(str_replace(array("\n","\r"), " ", $xml));
    $errors = array();

    if ($xmlData === false) {
        $errors[] = "Failed loading XML\n";
        foreach(libxml_get_errors() as $error) {
            $errors[] = $error;
        }
    }

    $json = json_encode($xmlData);
    return json_decode($json,true);
  }

  function getFullEstimate($products, $checkout_details, $coupon = null, $couponProducts = null)
  {
    $toAddress =  array(
         'name' => $checkout_details['ship_firstname'] . " " . $checkout_details['ship_lastname'],
         'street1' => $checkout_details['ship_address_1'],
         'street2' => isset($checkout_details['ship_address_2']) ? $checkout_details['ship_address_2'] : "",
         'city' => $checkout_details['ship_city'],
         'state' => $checkout_details['ship_province'],
         'zip' => strtolower(preg_replace('/\s+/', '', $checkout_details['ship_postal'])),
         'company'=> isset($checkout_details['ship_org']) ? $checkout_details['ship_org'] : "",
         'country' => 'CA',
         'phone' => isset($checkout_details['ship_tel']) ? $checkout_details['ship_tel'] : "",
         'email' => isset($checkout_details['email']) ? $checkout_details['email'] : "",
         'serviceid' =>isset($checkout_details['rate_id']) ? $checkout_details['rate_id'] : "",
         'orderid'=>isset($checkout_details['order_id']) ? $checkout_details['order_id'] : ""
    );

    $numShipItems = 0;
    $packingCoupon = null;
    $couponQuote = null;

    foreach($products as $k=>$pProd){
        if($pProd->shippable == 0){
          unset($products[$k]);
          break;
        }
    }
    $products = array_values($products);

    $couponProducts_ship = array();
    if(isset($coupon) && isset($couponProducts) ){
      if(isset($coupon->type) && $coupon->type == "SHIPPING") {
        $products_temp = $products;
        $couponProducts_temp = $couponProducts;

        foreach($products_temp as $k=>$pProd){
          $add = false;
          foreach($couponProducts_temp as $cp=>$cProd){
            if ($cProd->uid === $pProd->uid){
              $add = false;
              break;
            }else{
              $add = true;
            }
          }
          if($add){
            $couponProducts_ship[] = $pProd;
          }
        }

        //Calculate shipping for client without the items with coupons applied
        if($numShipItems = count($couponProducts_ship) > 0){

          //Additional Packages
          foreach( $couponProducts_ship as $k => $prod){
            if($prod->additional_packages != ""){
              $additionalPackages = json_decode($prod->additional_packages);
              if(count($additionalPackages)){
                foreach($additionalPackages as $aPackage){
                  $aPackage = $aPackage[0];
                  $additionalPackage = [
                    'id'=> $prod->id,
                    'title'=>'Additional Package: '.$prod->title,
                    'width'=> (float)$aPackage->width,
                    'height'=>(float)$aPackage->height,
                    'depth'=>(float)$aPackage->depth,
                    'weight'=>(float)$aPackage->weight,
                    'hasOwnBox'=>(int)($aPackage->ownBox == "on" ? 1 : 0),
                    'shipIndividual'=>(int)($aPackage->shipIndividual == "on" ? 1 : 0),
                    'insurance'=>(float)$aPackage->insurance,
                    'shippable'=>1,
                  ];
                  $couponProducts_ship[] = (object)$additionalPackage;
                }
              }
            }
          }

          $packingCoupon = (new PackingController())->pack_items($couponProducts_ship);
          $parcelsCoupon = $packingCoupon['parcels'];
          $boxesCoupon = $packingCoupon['boxes'];
          $couponQuote = $this->eShipperQuote($parcelsCoupon, $toAddress);
        }
      }else{
        $numShipItems = count($products);
      }
    }else{
      $numShipItems = count($products);
    }

    //additional packages
    foreach( $products as $k => $prod){
      if($prod->additional_packages != ""){
        $additionalPackages = json_decode($prod->additional_packages);
        if(count($additionalPackages)){
          foreach($additionalPackages as $aPackage){
            $aPackage = $aPackage[0];
            $additionalPackage = [
              'id'=> $prod->id,
              'title'=>'Additional Package: '.$prod->title,
              'width'=> (float)$aPackage->width,
              'height'=>(float)$aPackage->height,
              'depth'=>(float)$aPackage->depth,
              'weight'=>(float)$aPackage->weight,
              'hasOwnBox'=>(int)($aPackage->ownBox == "on" ? 1 : 0),
              'shipIndividual'=>(int)($aPackage->shipIndividual == "on" ? 1 : 0),
              'insurance'=>(float)$aPackage->insurance,
              'shippable'=>1,
            ];
            $products[] = (object)$additionalPackage;
          }
        }
      }
    }

    $packing = (new PackingController())->pack_items($products);
    $parcels = $packing['parcels'];
    $boxes = $packing['boxes'];


    $shippingQuote = $this->eShipperQuote($parcels, $toAddress);

    //return ["shippingQuote" => $shippingQuote];


    //if(empty($shippingQuote->errors))
  //  {
    $finalRates = array();

    if(!empty($shippingQuote->rates)){
      foreach($shippingQuote->rates as $rate){
        $rate->totalCharge = number_format($rate->totalCharge, 2, '.', '');
        $finalRates[]= $rate;
      }
    }

    //dd($couponProducts,  $coupon);
    if($couponProducts != null && isset($coupon) && $coupon->type == "SHIPPING"){
      if(isset($couponQuote)){
        if(!empty($couponQuote->rates)){
          $finalRates = array();
          foreach($couponQuote->rates as $rate){
            $rate->totalCharge = number_format($rate->totalCharge, 2, '.', '');
            $finalRates[]= $rate;
          }
        }
      }
      if($numShipItems == 0 && count($couponProducts) > 0){
        $free_shipping = (object)array("serviceId"=>"free", "serviceName"=>' ', 'transitDays'=>"N/A", 'totalCharge'=> "0.00", 'carrierName' => 'Free Shipping');
        array_unshift($finalRates, $free_shipping);
      }
    }

     $free_shipping = (object)array("serviceId"=>"free", "serviceName"=>' ', 'transitDays'=>"N/A", 'totalCharge'=> "0.00", 'carrierName' => 'Free Shipping');

    if(count($parcels)  == 0){
      $free_shipping = (object)array("serviceId"=>"free", "serviceName"=>' ', 'transitDays'=>"N/A", 'totalCharge'=> "0.00", 'carrierName' => 'Free Shipping');
      array_unshift($finalRates, $free_shipping);
    }

    return array(
                  "parcels"=>$boxes,
                  "shippingQuote"=>$finalRates,
                  "errors"=>$shippingQuote->errors,
                  "string"=>$shippingQuote->string
                );
  }

  function doShipping($products, $checkout_details)
  {
    $toAddress =  array(
         'name' => $checkout_details['ship_firstname'] . " " . $checkout_details['ship_lastname'],
         'street1' => $checkout_details['ship_address_1'],
         'street2' => isset($checkout_details['ship_address_2']) ? $checkout_details['ship_address_2'] : "",
         'city' => $checkout_details['ship_city'],
         'state' => $checkout_details['ship_province'],
         'zip' => strtolower(preg_replace('/\s+/', '', $checkout_details['ship_postal'])),
         'company'=> isset($checkout_details['ship_org']) && $checkout_details['ship_org'] != "" ? $checkout_details['ship_org'] : $checkout_details['ship_firstname'] . " " . $checkout_details['ship_lastname'],
         'country' => 'CA',
         'phone' => isset($checkout_details['ship_tel']) ? $checkout_details['ship_tel'] : "",
         'email' => isset($checkout_details['email']) ? $checkout_details['email'] : "",
         'serviceid' =>$checkout_details['ship_method'],
         'orderid'=>$checkout_details['order_id']
     );

    $items = array();

    foreach($products as $product){
      for($i=0;$i<$product->quantity;$i++){
        $items[]= DB::table('products')->where('id','=',$product->item_id)->first();
      }
    }

    foreach($items as $k => $prod){
      if($prod->additional_packages != ""){
        $additionalPackages = json_decode($prod->additional_packages);
        if(count($additionalPackages)){
          foreach($additionalPackages as $aPackage){
            $aPackage = $aPackage[0];
            $additionalPackage = [
              'id'=> $prod->id,
              'title'=>'Additional Package: '.$prod->title,
              'width'=> (float)$aPackage->width,
              'height'=>(float)$aPackage->height,
              'depth'=>(float)$aPackage->depth,
              'weight'=>(float)$aPackage->weight,
              'hasOwnBox'=>(int)($aPackage->ownBox == "on" ? 1 : 0),
              'shipIndividual'=>(int)($aPackage->shipIndividual == "on" ? 1 : 0),
              'insurance'=>(float)$aPackage->insurance,
              'shippable'=>1,
            ];
            $items[] = (object)$additionalPackage;
          }
        }
      }
    }

    $packing = (new PackingController())->pack_items($items);
    $parcels = $packing['parcels'];
    $boxes = $packing['boxes'];

    $shippingQuote = null;
    if(count($parcels) > 0){
      $shippingQuote = $this->eShipperShipRequest($parcels, $toAddress);
    }

    return (object)array(
                  "parcels"=>$boxes,
                  "response"=>$shippingQuote != null ? $shippingQuote->response : null,
                  "errors"=>$shippingQuote != null ? $shippingQuote->errors : null
                );
  }
}
