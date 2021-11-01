<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class PreviewEventsAction extends AbstractAction
{
    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'events';
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
        return route('calendar-event', ["id" => $data->id]);
    }
}
