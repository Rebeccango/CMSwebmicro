<?php namespace App\Http\Controllers;
use Input;
use Validator;
use Redirect;
use Session;
use DB;
use Illuminate\Http\Request;
use Route;
use Exception;

class AppController extends Controller
{

  private $key;
  private $iv;
  public $cipher = "AES-128-CBC";

  public function __construct(){
    $this->key = env('ENCRYPTION_KEY');
    $this->iv = env('ENCRYPTION_IV');
  }

  private function encrypt($data, $options=0){
    return openssl_encrypt($data, $this->cipher, $this->key, $options, $this->iv);
  }

  private function decrypt($data, $options=0){
    return openssl_decrypt($data, $this->cipher, $this->key, $options, $this->iv);
  }

  public function post(Request $request)
  {
    try {
      $ciphertext = $request->get('data');

      if($request->has('version')){
        $version = $request->get('version');
      }else{
        $version = "";
      }

      if($request->has('bdate')){
        $buffer_date = $request->get('bdate');
      }else{
        $buffer_date = "";
      }

      $jsonData = $this->decrypt($ciphertext);

      $data = (array) json_decode($jsonData, TRUE);

      $log = "";
      $status_code = "";

      $jsonValidate = $this->json_validate($request);
      if(!$request->all()){
        $log = $jsonValidate["string"];
        $status_code = $jsonValidate["code"];
      }

      if($log == "OK") {
        $jsonValidate = $this->json_validate($jsonData);
        $log = $jsonValidate["string"];
        $status_code = $jsonValidate["code"];
      }

      $customer = isset($data['customer']) ? $data['customer'] : "";

      $addin_name = isset($data['addin_name']) ? $data['addin_name'] : "";

      $addin_version = isset($data['addin_version']) ? $data['addin_version'] : "";

      $machine_name = isset($data['machine_name']) ? $data['machine_name'] : "";

      $domain = isset($data['domain']) ? $data['domain'] : "";

      $username = isset($data['username']) ? $data['username'] : "";

      $str_1 = isset($data['str_1']) ? $data['str_1'] : "";

      $str_2 = isset($data['str_2']) ? $data['str_2'] : "";

      DB::table('app_activities')->insert(
        [
          'customer'=> $customer,
          'addin_name'=> $addin_name,
          'addin_version'=> $addin_version,
          'machine_name'=> $machine_name,
          'username'=> $username,
          'str_1'=> $str_1,
          'str_2'=> $str_2,
          'domain'=> $domain,
          'bf'=> $buffer_date == "" ? 0 : 1,
          'created_at' => $buffer_date != "" ? $buffer_date : date("Y-m-d H:i:s"),
          'ip'=> getIp(),
          'log'=> $status_code == "OK" ? "" : $log ." DATA: ". $request . " JSON: " . $jsonData
        ]
      );

      echo $status_code;

    } catch (Exception $e) {
      //  echo 'Caught exception: ',  $e->getMessage(), "\n";

        $ciphertext = $request->get('data');

        $jsonData = $this->decrypt($ciphertext);

        $log = "";
        $status_code = "";

        $jsonValidate = $this->json_validate($request);
        if(!$request->all()){
          $log = $jsonValidate["string"];
          $status_code = $jsonValidate["code"];
        }

        if($log == "OK") {
          $jsonValidate = $this->json_validate($jsonData);
          $log = $jsonValidate["string"];
          $status_code = $jsonValidate["code"];
        }

        DB::table('app_activities')->insert(
          [
            'ip'=> getIp(),
            'log'=> $log ." DATA: ". $request . " JSON: " . $jsonData
          ]
        );
    }
  }


  public function parseMissingData(){
    $activity = DB::table('app_activities')->where('addin_name', '')->get();
    foreach($activity as $act){
      $f = explode('"data" :', $act->log);
      if(!empty($f) && count($f) > 1){
        echo explode('"',$f[1])[1];
        echo "<br><br>";
      }
    }
  }

  public function usage(Request $request)
  {
    try {
      $ciphertext = $request->get('data');

      if($request->has('version')){
        $version = $request->get('version');
      }else{
        $version = "";
      }

      if($request->has('bdate')){
        $buffer_date = $request->get('bdate');
      }else{
        $buffer_date = "";
      }

      $jsonData = $this->decrypt($ciphertext);

      $data = (array) json_decode($jsonData, TRUE);

      $log = "";
      $status_code = "";

      $jsonValidate = $this->json_validate($request);
      if(!$request->all()){
        $log = $jsonValidate["string"];
        $status_code = $jsonValidate["code"];
      }

      if($log == "OK") {
        $jsonValidate = $this->json_validate($jsonData);
        $log = $jsonValidate["string"];
        $status_code = $jsonValidate["code"];
      }

      $customer = isset($data['customer']) ? $data['customer'] : "";

      $addin_name = isset($data['addin_name']) ? $data['addin_name'] : "";

      $addin_version = isset($data['addin_version']) ? $data['addin_version'] : "";

      $machine_name = isset($data['machine_name']) ? $data['machine_name'] : "";

      $message = isset($data['message']) ? $data['message'] : "";

      $username = isset($data['username']) ? $data['username'] : "";

      DB::table('app_usages')->insert(
        [
          'customer'=> $customer,
          'addin_name'=> $addin_name,
          'addin_version'=> $addin_version,
          'machine_name'=> $machine_name,
          'username'=> $username,
          'message'=> $message,
          'bf'=> $buffer_date == "" ? 0 : 1,
          'created_at' => $buffer_date != "" ? $buffer_date : date("Y-m-d H:i:s"),
          'ip'=> getIp(),
          'log'=> $status_code == "OK" ? "" : $log ." DATA: ". $request . " JSON: " . $jsonData
        ]
      );

      echo $status_code;

    } catch (Exception $e) {
      //  echo 'Caught exception: ',  $e->getMessage(), "\n";

        $ciphertext = $request->get('data');

        $jsonData = $this->decrypt($ciphertext);

        $log = "";
        $status_code = "";

        $jsonValidate = $this->json_validate($request);
        if(!$request->all()){
          $log = $jsonValidate["string"];
          $status_code = $jsonValidate["code"];
        }

        if($log == "OK") {
          $jsonValidate = $this->json_validate($jsonData);
          $log = $jsonValidate["string"];
          $status_code = $jsonValidate["code"];
        }

        DB::table('app_activities')->insert(
          [
            'ip'=> getIp(),
            'log'=> $log ." DATA: ". $request . " JSON: " . $jsonData
          ]
        );
      }
    }

  // public function getIp(){
  //     foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
  //         if (array_key_exists($key, $_SERVER) === true){
  //             foreach (explode(',', $_SERVER[$key]) as $ip){
  //                 $ip = trim($ip); // just to be safe
  //                 if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
  //                     return $ip;
  //                 }
  //             }
  //         }
  //     }
  // }

  public function is_entitled(Request $request)
  {
        $ciphertext = $request->get('data');

        if($request->has('version')){
          $version = $request->get('version');
        }else{
          $version = "";
        }

        $jsonData = $this->decrypt($ciphertext);

        $data = (array) json_decode($jsonData, TRUE);

    //add decryption + encryption on reply
        $entitlement_date="";

        $log = "";
        $jsonValidate = $this->json_validate($request);
        $log = $jsonValidate["string"];
        $status_code = $jsonValidate["code"];

        $id = "";
        $addin_name = isset($data['addin_name']) ? $data['addin_name'] : "";

        $addin_version = isset($data['addin_version']) ? $data['addin_version'] : "";

        $domain = isset($data['domain']) ? $data['domain'] : "";

        $customer = isset($data['customer']) ? $data['customer'] : "";

        $machine_name = isset($data['machine_name']) ? $data['machine_name'] : "";

        $username = isset($data['username']) ? $data['username'] : "";

        $type = isset($data['type']) ? $data['type'] : "";

        $ip = getIp();
        $entitlement_date = "";


          try {

          $entitlement = DB::table('app_entitlements')
          ->where('customer','=',$customer)
          ->where('addin_name','=',$addin_name)
          ->first();

          if(!empty($entitlement)){
            $status_code = "OK";
          }else{
            $status_code = "NTFD";
          }

          if(version_compare($addin_version,$entitlement->addin_version, '<=')){
            $status_code = "OK";
          }else{
            $status_code = "FVER";
          }

          //
          // if($entitlement->count()) {
          //   foreach($entitlement as $ent){
          //     if(version_compare($addin_version,$ent->addin_version, '<=')){
          //       $entitlement = $ent;
          //       break;
          //     }
          //   }
          // }else{
             $entitlement_date = isset($entitlement->entitlement_date) ? $entitlement->entitlement_date : "";
          // }

          if($status_code == "OK" || $status_code == "FVER"){
            if(time() < strtotime($entitlement_date)){
              $status_code = "OK";
            }else{
              $status_code = "EXP";
            }
          }

          DB::table('app_activations')->insert(
            [
              'customer'=> $customer,
              'addin_name'=> $addin_name,
              'addin_version'=> $addin_version,
              'machine_name'=> $machine_name,
              'username'=> $username,
              'status'=>$status_code,
              'type'=>$type,
              'ip'=>$ip
            ]
          );

          $id = DB::getPdo()->lastInsertId();

          // $entitlement_date = isset($entitlement->entitlement_date) ? $entitlement->entitlement_date : "";


                  echo json_encode(array(
                    'STATUS' => $status_code,
                    'DATE' => $entitlement_date,
                    'ID' => $id
                  ));
        } catch (Exception $e) {
          $status_code = "500";
          echo json_encode(array(
            'ERROR' => 'Caught exception: ',  $e->getMessage(), "\n
            \n". ($log != "" ? 'JSON Log:\n' . $log : "")
          ));
        }

  }

  public function activity()
  {
    $activity = DB::table('app_activities')->get();
     return view('pages.app.activity')->with(['activity'=>$activity]);
  }

  function json_validate($string)
  {
      // decode the JSON data
      $result = json_decode($string);
      $code = "OK";
      // switch and check possible JSON errors
      switch (json_last_error()) {
          case JSON_ERROR_NONE:
              $error = ''; // JSON is valid // No error has occurred
              $code = "OK";
              break;
          case JSON_ERROR_DEPTH:
              $error = 'The maximum stack depth has been exceeded.';
              $code = "JSON_ERROR_DEPTH";
              break;
          case JSON_ERROR_STATE_MISMATCH:
              $error = 'Invalid or malformed JSON.';
              $code = "JSON_ERROR_STATE_MISMATCH";
              break;
          case JSON_ERROR_CTRL_CHAR:
              $error = 'Control character error, possibly incorrectly encoded.';
              $code = "JSON_ERROR_CTRL_CHAR";
              break;
          case JSON_ERROR_SYNTAX:
              $error = 'Syntax error, malformed JSON.';
              $code = "JSON_ERROR_SYNTAX";
              break;
          // PHP >= 5.3.3
          case JSON_ERROR_UTF8:
              $error = 'Malformed UTF-8 characters, possibly incorrectly encoded.';
              $code = "JSON_ERROR_UTF8";
              break;
          // PHP >= 5.5.0
          case JSON_ERROR_RECURSION:
              $error = 'One or more recursive references in the value to be encoded.';
              $code = "JSON_ERROR_RECURSION";
              break;
          // PHP >= 5.5.0
          case JSON_ERROR_INF_OR_NAN:
              $error = 'One or more NAN or INF values in the value to be encoded.';
              $code = "JSON_ERROR_INF_OR_NAN";
              break;
          case JSON_ERROR_UNSUPPORTED_TYPE:
              $error = 'A value of a type that cannot be encoded was given.';
              $code = "JSON_ERROR_UNSUPPORTED_TYPE";
              break;
          default:
              $error = 'Unknown JSON error occured.';
              $code = "UNKWN_JSON_ERROR";
              break;
      }

      if ($error !== '') {
          // throw the Exception or exit // or whatever :)
          return array("code"=>$code, "string"=>$error . $string);
      }

      // everything is OK
      return array("code"=>$code, "string"=>"OK");
  }

}
