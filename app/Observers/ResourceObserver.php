<?php

namespace App\Observers;

use App\Resource;
use imagick;

class ResourceObserver
{
    /**
     * Handle the resource "created" event.
     *
     * @param  \App\Resource  $resource
     * @return void
     */
    public function created(Resource $resource)
    {

    }

    /**
     * Handle the resource "updated" event.
     *
     * @param  \App\Resource  $resource
     * @return void
     */
    public function updated(Resource $resource)
    {

    }

    public function saving(Resource $resource)
    {
        // if(app()->environment() !== 'production'){
        //     return;
        // }
        // return;
        $supported_image = array('jpg','jpeg','png');

        if(!$resource->thumbnail && $resource->file) {
            $fileObj = json_decode($resource->file);
            if(isset($fileObj[0])){
                $fileObj =  $fileObj[0];
                $pathInfo = pathinfo($fileObj->download_link);
                if($pathInfo['extension'] == "pdf")
                {
                    try
                    {
                        $pdfThumb = new imagick();
                        $pdfThumb->readImage(\storage_path('app/public/' . $pathInfo['dirname'] . '/' . $pathInfo['filename'] . '.' . $pathInfo['extension'] . '[0]'));
                        $pdfThumb->setImageResolution(72, 72);
                        $pdfThumb->setImageFormat('jpg');
                        $pdfThumb->setImageBackgroundColor('#ffffff');
                        $pdfThumb->scaleimage(
                            800, 800, true
                            // $pdfThumb->getImageHeight() / 4
                        );
                        // $pdfThumb->setImageAlphaChannel(imagick::ALPHACHANNEL_REMOVE);

                        if ($pdfThumb->getImageAlphaChannel()) {
                            // Remove alpha channel
                            $pdfThumb->setImageAlphaChannel(imagick::ALPHACHANNEL_REMOVE);

                            // Merge layers
                            $pdfThumb->mergeImageLayers(imagick::LAYERMETHOD_FLATTEN);
                        }

                        // $pdfThumb = $pdfThumb->mergeImageLayers(imagick::LAYERMETHOD_FLATTEN);
                        $thumbnailSavePath = $pathInfo['dirname'] . '/' . $pathInfo['filename'] . '.jpg';
                        \Storage::put('public/'. $thumbnailSavePath, $pdfThumb->getImageBlob());
                        $resource->update(['thumbnail'=>$thumbnailSavePath]);
                    } catch (Exception $e) {
                        echo 'Caught exception: ', $e->getMessage(), "\n";
                    }
                }
                elseif(in_array($pathInfo['extension'], $supported_image)){
                    try
                    {
                        $pdfThumb = new imagick();
                        $pdfThumb->readImage(\storage_path('app/public/' . $pathInfo['dirname'] . '/' . $pathInfo['filename'] . '.' . $pathInfo['extension']));
                        $pdfThumb->setResolution(72, 72);
                        $pdfThumb->setImageFormat($pathInfo['extension']);
                        $pdfThumb->scaleimage(
                            800, 800, true
                            // $pdfThumb->getImageHeight() / 4
                        );
                        $thumbnailSavePath = $pathInfo['dirname'] . '/' . $pathInfo['filename'] . '.'. $pathInfo['extension'];
                        \Storage::put('public/'. $thumbnailSavePath, $pdfThumb->getImageBlob());
                        $resource->update(['thumbnail'=>$thumbnailSavePath]);
                    } catch (Exception $e) {
                        echo 'Caught exception: ', $e->getMessage(), "\n";
                    }
                }
            }
        }
    }

    /**
     * Handle the resource "deleted" event.
     *
     * @param  \App\Resource  $resource
     * @return void
     */
    public function deleted(Resource $resource)
    {
        //
    }

    /**
     * Handle the resource "restored" event.
     *
     * @param  \App\Resource  $resource
     * @return void
     */
    public function restored(Resource $resource)
    {
        //
    }

    /**
     * Handle the resource "force deleted" event.
     *
     * @param  \App\Resource  $resource
     * @return void
     */
    public function forceDeleted(Resource $resource)
    {
        //
    }
}
