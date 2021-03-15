<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/themes';
    public $css = [

        "assets/css/bootstrap.min.css",
        "assets/css/icons.min.css",
        "assets/css/app.min.css",

        '../libs/toastr/css/toastr.min.css',
        '../css/site.css',
    ];
    public $js = [
        // "assets/libs/jquery/jquery.min.js",
        // "assets/libs/bootstrap/js/bootstrap.bundle.min.js",
        // "assets/libs/metismenu/metisMenu.min.js",
        // "assets/libs/simplebar/simplebar.min.js",
        // "assets/libs/node-waves/waves.min.js",
        // "assets/libs/apexcharts/apexcharts.min.js",

        // "assets/js/pages/dashboard-2.init.js",

        // "assets/js/app.js",


        '../libs/toastr/js/toastr.min.js',
        '../js/site.js',
        '../js/hotkeys.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // // 'yii\bootstrap4\BootstrapAsset',
    ];
}
