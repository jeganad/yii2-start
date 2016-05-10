<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Class JquerySlimScroll
 * @package common\assets
 * @author Eugene Terentev <eugene@terentev.net>
 */
class JquerySlimScroll extends AssetBundle
{
    public $sourcePath = '@bower/slimscroll';
    public $js = [
        'jquery.slimscroll.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
