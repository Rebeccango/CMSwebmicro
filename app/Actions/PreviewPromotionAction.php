<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class PreviewPromotionAction extends AbstractAction
{
    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'promotions';
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
        $data = json_decode($this->data, false);
        return route('promotion', ["product" => \App\Company::find($data->product_family)->slug, "id" => $data->id, "slug" => $data->slug]);
    }
}
