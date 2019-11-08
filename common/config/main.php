<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'formatter' => [
            'class' => 'yii\i18n\Formatter',
//            'defaultTimeZone' => 'Europe/Kiev',
            'timeZone' => 'Etc/GMT+0',
//            'dateFormat' => 'd MMMM yyyy',
//            'datetimeFormat' => 'd-M-Y H:i:s',
//            'timeFormat' => 'H:i:s',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
