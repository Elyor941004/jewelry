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
class TemplateAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/fontawesome.css',
        'css/fontawesome.min.css',
        'css/revslider.css',
        'css/owl.carousel.css',
        'css/owl.theme.css',
        'css/jquery.bxslider.css',
        'css/jquery.mobile-menu.css',
        'css/style.css',
        'css/responsive.css',
    ];
     public $js = [
        'js/jquery.min.js',
        'js/fontawesome.js',
        'js/fontawesome.min.js',
        'js/main.js',
        'js/bootstrap.min.js',
        'js/parallax.js',
        'js/revslider.js',
        'js/common.js',
        'js/jquery.bxslider.min.js',
        'js/owl.carousel.min.js',
        'js/jquery.mobile-menu.min.js',
        'js/countdown.js',
    ];
    public $depends = [
       // 'yii\web\YiiAsset',
       // 'yii\bootstrap\BootstrapAsset',
    ];
}
