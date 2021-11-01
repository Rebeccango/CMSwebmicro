<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Filesystem\Factory as Storage;
use Illuminate\Filesystem\Filesystem;
use Input;
use Validator;
use Redirect;
use Session;
use DB;
use File;
use Image;

class GalleryController extends Controller {

  public function external_image() {
    $pid = Input::get('product_id');
    $image = Input::get('image');
    $success="false";
    $msg = "";
    $product =  DB::table('products')
                  ->where('id','=',$pid);

    $images = $product->value('images');

    if($images !=""){
      $images .= "," . $image;
    }else{
      $images = $image;
    }

    $product->update(['images' => $images]);

    return array('success'=>"true",'msg'=>"Success");
  }

  public function delete() {
    $pid = Input::get('product_id');
    $remove = Input::get('image');
    $external = Input::get('external');
    $success="false";
    $msg = "";
    $product =  DB::table('products')
                  ->where('id','=',$pid);

    if($external == "false" || $external == false) {
      if(file_exists(public_path().'/storage/store/item_'.$pid.'/'.$remove)){
        if(unlink(public_path().'/storage/store/item_'.$pid.'/'.$remove)){
          unlink(public_path().'/storage/store/item_'.$pid.'/thumb_'.$remove);
          $msg = "Successfully deleted the file!";
        }else{
          $msg = "Error deleting the file!";
        }
      }else{
          $msg = "File does not exist! It has been removed.";
      }
    }

    $images2 = "";
    $images=$product->value('images');
    foreach(explode(",",$images) as $img){
      if ($images2 != "") $images2.=",";
      if($img != $remove){
        $images2.=$img;
      }
    }
    $images2 = rtrim($images2,",");
    $images2 = ltrim( $images2,",");
    $images2 = str_replace(",,",",", $images2);
    $product->update(['images' => $images2]);
    $success="true";

    return array('success'=>$success,'msg'=>$msg);
  }

  public function uniquename() {
    $name = Input::get('name');
    $ext = Input::get('ext');
    $filename = md5($name . time() . uniqid()).'.'.$ext;
    return array("name"=>$filename);
  }

	public function multiple_upload() {
    // getting all of the post data
    $files = Input::file('files');
    // Making counting of uploaded images
    $file_count = count($files);
    $success="false";
    $msg = "";
    $file_validated[] = null;
    $file_cancelled[] = null;
    $skip = false;

    $pid = Input::get('product_id');

    $product =  DB::table('products')
                  ->where('id','=',$pid);
    $images=$product->value('images');

    if($images != ""){
      foreach(explode(",",$images) as $img){
        $file_validated[] = $img;
      }
    }

    // start count how many uploaded
    if ($file_count > 0){
      $uploadcount = 0;
      $i = 1;
      $acceptedFiles = Input::get('accept');
      if($images != ""){
        $acceptedFiles .= ",".$images;
      }else{
        $acceptedFiles .= $images;
      }
      foreach($files as $file) {
        $proceed = false;
        $filename = "";
        $rules = array('file' => 'required|mimes:png,gif,jpeg,mp4,mp3,avi,mov'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
        $validator = Validator::make(array('file'=> $file), $rules);

        if( Input::get('new')) {
          $old = Input::get('old');
          foreach($old as $k=>$old){
              if ($old == $file->getClientOriginalName()){
                $filename= Input::get('new')[$k];
                break;
              }
          }

          foreach(explode(",",$acceptedFiles) as $accept){
            if ($accept == $filename){
              $proceed = true;
              break;
            }
          }
        }

        if($proceed && ($filename != "")){
          //$filename = $file->getClientOriginalName();
          if($validator->passes()){
            $destinationPath = public_path() . '/storage/store/item_'.$pid.'/';
            $upload_success = $file->move($destinationPath, $filename);
            $this->generateThumbnail($destinationPath, $filename, 200, 200, 90);
            $uploadcount++;
            $file_validated[] = $filename;
            if($images != "" || $i != $file_count){
              $images.=",";
            }
            $images.=$filename;
          }else{
            $file_cancelled[] = $filename;
          }
          $i++;
        }else{
          $skip = true;
        }
      }

      $sorted_images = "";
      $images2 = explode(",",$images);
      $new = Input::get('new');
      if($images != ""){$acceptedFiles .= ",".$images;}
      else{ $acceptedFiles = $images; }
      if($new) {
        foreach($new as $img){
          foreach(explode(",",$acceptedFiles) as $accept){
            if($img == $accept){
              $proceed = false;
              break;
            }
          }
          if($proceed && $img != ""){
            if ($sorted_images != ""){
              $sorted_images .=",";
            }
            foreach($file_validated as $valid){
              if ($valid == $img){
                $sorted_images .= $img;
                break;
              }
            }
          }
        }
      }

      if($sorted_images == "") {
        $sorted_images = $images;
      }
      $sorted_images = rtrim($sorted_images,",");
      $sorted_images = ltrim( $sorted_images,",");
      $sorted_images = str_replace(",,",",", $sorted_images);

      $product->update(['images' => $sorted_images]);

      if($uploadcount == $file_count){
      //  Session::flash('success', 'Upload successfully');
        $success="true";
        //return Redirect::to('upload');
      }
      else {
        $success="false";
        if($skip){
          $success="true";
        }else{
          $msg = "There was a problem updating the gallery!";
        }
        //return Redirect::to('upload')->withInput()->withErrors($validator);
      }
    }else{
      $sorted_images = "";
      $success="true";

      $new = Input::get('new');
      foreach($new as $img){
        if ($sorted_images != ""){
          $sorted_images .=",";
        }
        $sorted_images .= $img;
      }

      $product->update(['images' => $sorted_images]);
    }

    return array('success'=>$success,'msg'=>$msg, 'validated_files'=>$file_validated, 'cancelled_files'=>$file_cancelled);
  }


  function generateThumbnail($destination, $filename, $width, $height, $quality = 90)
  {
    $img = Image::make($destination . $filename);
    // resize image instance

    $img->resize(null, 300, function ($constraint) {
        $constraint->aspectRatio();
    });

    $img->save($destination . 'thumb_'.$filename);
  }

  function isUploaded($itemid,$filename){
    return false;
  }
}
