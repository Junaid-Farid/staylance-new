<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/vendor/fontawesome/css/font-awesome.min.css',
        'css/vendor/simple-line-icons/css/simple-line-icons.css',
        'css/vendor/animate.css/animate.min.css',
        'css/vendor/whirl/dist/whirl.css',
        'css/vendor/weather-icons/css/weather-icons.min.css',
        'css/app/css/app.css',
        'css/Croppie-master/croppie.css',
    ];
    public $js = [
        'js/vendor/modernizr/modernizr.js',
        'js/vendor/jQuery-Storage-API/jquery.storageapi.js',
        'js/vendor/jquery.easing/js/jquery.easing.js',
        'js/vendor/animo.js/animo.js',
        'js/vendor/slimScroll/jquery.slimscroll.min.js',
        'js/vendor/screenfull/dist/screenfull.js',
        'js/vendor/jquery-classyloader/js/jquery.classyloader.min.js',
        'js/vendor/moment/min/moment-with-locales.min.js',
        'js/vendor/moment/min/moment-with-locales.min.js',
        'js/app/js/app.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
