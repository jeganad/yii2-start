<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'theme/admin/assets/globals/css/plugins.css',
        'css/site.css'
    ];
    public $js = [
        'theme/admin/assets/globals/plugins/modernizr/modernizr.min.js',
        'theme/admin/assets/globals/js/global-vendors.js',
        'theme/admin/assets/globals/js/pleasure.js',
        'theme/admin/assets/admin/js/layout.js'
    ];
    public $depends = [
        'backend\assets\AppAsset',
        'backend\assets\Flot',
//        'backend\assets\FontAwesome',
        'backend\assets\JquerySlimScroll',
    ];
}