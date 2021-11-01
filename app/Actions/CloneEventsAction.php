<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class CloneEventsAction extends AbstractAction
{
    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'events';
    }

    public function getTitle()
    {
        return 'Clone';
    }

    public function getIcon()
    {
        return 'voyager-move';
    }

    public function getPolicy()
    {
        return 'delete';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-dark pull-right',
            'style' => 'margin-right:5px',
        ];
    }

    public function getDefaultRoute()
    {
				$dataType = \json_decode($this->dataType, false);
        $data = json_decode($this->data, false);
        return route('voyager.'.$dataType->slug.'.create', ['copy'=>$data->id]);
    }
}
