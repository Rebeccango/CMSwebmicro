<?php

namespace App\Actions;

use App\Landing;
use TCG\Voyager\Actions\AbstractAction;

class PreviewLandingsAction extends AbstractAction
{
    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'landings';
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
        return route('landing', ["slug" => $data->slug]);
    }
}
