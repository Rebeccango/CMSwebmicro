<?php

namespace App\Actions;

use App\Resource;
use TCG\Voyager\Actions\AbstractAction;

class PreviewResourceAction extends AbstractAction
{
    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'resources';
    }

    public function getTitle()
    {
        return 'Preview';
    }

    public function getIcon()
    {
        return 'voyager-eye';
    }

    public function getPolicy()
    {
        return 'read';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-success pull-right',
            'style' => 'margin-right:5px',
            'target' => '_blank'
        ];
    }

    public function getDefaultRoute()
    {
        if($this->data != null){
            $data = json_decode($this->data, false);
            return route('resources.resource', ["id" => Resource::find($data->id)->id, "slug" => $data->slug]);
        }
    }
}
