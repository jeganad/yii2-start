<?php
/**
 * @link https://github.com/borodulin/yii2-excanvas
 * @copyright Copyright (c) 2015 Andrey Borodulin
 * @license https://github.com/borodulin/yii2-excanvas/blob/master/LICENSE
 */
namespace conquer\excanvas;


class ExcanvasAsset extends \yii\web\AssetBundle
{
    public $js = [
            'excanvas.min.js',
    ];
    
    public $jsOptions = [
            'condition'=>'lte IE 8',
    ];
    
    public function init()
    {
        $this->sourcePath = dirname(__FILE__) . '/assets';
        parent::init();
    }
    
}