<?php
namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Log;
use DB;
use Redirect;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Request;
use Route;
use Input;
use URL;
use File;

class eShipperController extends Controller
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

  public function testRequest()
  {

    $post_string = '<?xml version="1.0" encoding="UTF-8"?>
      <EShipper xmlns="http://www.eshipper.net/XMLSchema" username="'.$this->username.'" password="'.$this->password.'" version="3.0.0">
        <QuoteRequest serviceId="0" stackable="true" >

          <From id="1" company="CAD MicroSolutions Inc." address1="30 International Blvd" address2="Unit #1" city="Etobicoke" state="ON" country="CA" zip="M9W1A2" email="contact@cadmicro.com" />

          <To company="" address1="650 CIT Drive"
          city="Niagara Falls" state="ON" zip="M5H2L2" country="CA" />

          <Packages type="Package">
            <Package length="15" width="10" height="12"
            weight="10" type="Pallet" freightClass="70"
            nmfcCode="123456" insuranceAmount="0.0"
            codAmount="0.0" description="desc."/>
            <Package length="15" width="10" height="10"
            weight="5" type="Pallet" freightClass="70"
            insuranceAmount="0.0" codAmount="0.0"
            description="desc."/>
          </Packages>
        </QuoteRequest>
      </EShipper>';

      $arr = $this->sendXmlOverPost($this->url,$post_string);

      foreach($arr['QuoteReply']['Quote'] as $key=> $a){
        print_r($a['@attributes']);
        echo "<br/><br/>";
      }
  }

  private function sendXmlOverPost($url, $xml) {
  	$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt ($ch, CURLOPT_HTTPHEADER, Array("Content-Type: text/xml"));
    curl_setopt($ch, CURLOPT_POST, 1 );
    curl_setopt($ch, CURLOPT_POSTFIELDS,$xml);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

  	$result = curl_exec($ch);

    if(curl_errno($ch)) {
      return curl_error($ch);
    }else{
      curl_close($ch);
      return $this->xmlStringToArray($result);
    }
  }

  private function xmlStringToArray($xml){
    $xmlResponse = trim($xml);
    $xmlData = simplexml_load_string($xmlResponse);
    $json = json_encode($xmlData);
    return json_decode($json,true);
  }
}
