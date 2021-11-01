<?php

namespace App\FormFields;

use TCG\Voyager\FormFields\AbstractHandler;

class MetaTags extends AbstractHandler
{
    protected $codename = 'Meta Tags';

    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        return view('formfields.metatags', [
            'row' => $row,
            'options' => $options,
            'dataType' => $dataType,
            'dataTypeContent' => $dataTypeContent,
        ]);
    }
}
