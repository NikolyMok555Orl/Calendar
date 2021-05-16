<?php

namespace app\components\calendar;

use yii\web\AssetBundle;

/**
 * Class SvgMapWidgetAsset
 * @package ghopper\svgmap
 */
class CalendarWidgetAsset extends AssetBundle
{
    //public $sourcePath;



    public $css = [
        'css/calendar.css'
    ];

   
    public function init()
    {
        parent::init();
        $this->sourcePath = __DIR__ . '/src';
    }
}