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
    public $baseUrl = '@web';
    public $css = [
        "css/font-awesome/css/font-awesome.min.css",
        "css/fontastic.css",
        "css/grasp_mobile_progress_circle-1.0.0.min.css",
        "css/jquery.mCustomScrollbar.css",
        "css/style.default.css",

//        'css/site.css',
        'css/custom.css',

    ];
    public $js = [
        "js/bootstrap.min.js",
        "js/jquery.cookie.js",
        "js/grasp_mobile_progress_circle-1.0.0.min.js",
        "js/jquery.validate.min.js",
        "js/jquery.mCustomScrollbar.concat.min.js",
        "js/front.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
