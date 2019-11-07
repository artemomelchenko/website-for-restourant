<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/all.min.css',
        'css/adminlte.min.css',
        '//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
        '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700',

    ];
    public $js = [
        'js/adminlte.js',
        'js/demo.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
