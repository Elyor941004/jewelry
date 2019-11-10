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

class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'vendor/bootstrap/css/bootstrap.min.css',
        'vendor/fonts/circular-std/style.css',
        'libs/css/style.css',
        'vendor/fonts/fontawesome/css/fontawesome-all.css',
        'vendor/charts/chartist-bundle/chartist.css',
        'vendor/charts/morris-bundle/morris.css',
        'vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css',
        'vendor/charts/c3charts/c3.css',
        'vendor/fonts/flag-icon-css/flag-icon.min.css',

    ];
    public $js = [
        'vendor/jquery/jquery-3.3.1.min.js',
        'vendor/bootstrap/js/bootstrap.bundle.js',
        'vendor/slimscroll/jquery.slimscroll.js',
        'libs/js/main-js.js',
        'vendor/charts/chartist-bundle/chartist.min.js',
        'vendor/charts/sparkline/jquery.sparkline.js',
        'vendor/charts/morris-bundle/raphael.min.js',
        'vendor/charts/morris-bundle/morris.js',
        'vendor/charts/c3charts/c3.min.js',
        'vendor/charts/c3charts/d3-5.4.0.min.js',
        'vendor/charts/c3charts/C3chartjs.js',
        'libs/js/dashboard-ecommerce.js',
    ];
    public $depends = [
         // 'yii\web\YiiAsset',
         // 'yii\bootstrap\BootstrapAsset',
    ];
}
