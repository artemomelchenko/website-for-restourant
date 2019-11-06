<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '//fonts.googleapis.com/css?family=Montserrat|Playfair+Display&display=swap&subset=cyrillic',
        // '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',
        // '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css',
        // '//cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/css/datepicker.min.css',

        'css/site.css',

    ];
    public $js = [
        'js/slider.js',
        '//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js',
        '//cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/datepicker.min.js',
        '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js',
        '//cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js',
        '//cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.js'
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
