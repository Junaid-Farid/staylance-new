<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',
        'css/staylance.css',
//        'css/custom.css',
        'css/font-awesome-4.5.0/css/font-awesome.min.css',
        'css/jquery.placecomplete.css',
        'css/select2.min.css',
        'css/theme-css/main.css',
        'css/theme-css/pretty-photo.css',
    ];
    public $js = [
        'js/angular.min.js',
        'js/custom.js',
        'js/jquery.cropit.js',
        'js/select2.min.js',
        'js/jquery.placecomplete.js', 
//        'assets/theme/freelancer.js',
//        'assets/theme/cbpAnimatedHeader.js',
//        'assets/theme/cbpAnimatedHeader.min.js',
//        'assets/theme/classie.js',
//        'assets/theme/contact_me.js',
//        'assets/theme/jqBootstrapValidation.js',
//        'assets/theme/jqBootstrapValidation.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\web\JqueryAsset',
    ];
    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );

}
