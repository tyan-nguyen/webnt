<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\themes\zero\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class IndexAssets extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //Bootstrap
        'ntweb/plugins/bootstrap/bootstrap.min.css',
        //FontAwesome
        'ntweb/plugins/fontawesome/css/all.min.css',
        //Animation
        'ntweb/plugins/animate-css/animate.css',
        //slick Carousel
        'ntweb/plugins/slick/slick.css',
        'ntweb/plugins/slick/slick-theme.css',
        //Colorbox
        'ntweb/plugins/colorbox/colorbox.css',
        //Template styles
        'ntweb/css/theme.css',
        'ntweb/css/style.css',
        'ntweb/css/custom.css'
    ];
    public $js = [
        //initialize jQuery Library
        'ntweb/plugins/jQuery/jquery.min.js',
        //Bootstrap
        'ntweb/plugins/bootstrap/bootstrap.min.js',
        //Slick Carousel
        'ntweb/plugins/slick/slick.min.js',
        'ntweb/plugins/slick/slick-animation.min.js',
        //Color box
        'ntweb/plugins/colorbox/jquery.colorbox.js',
        //shuffle
        'ntweb/plugins/shuffle/shuffle.min.js',
        //Template custom
        'ntweb/js/script.js'
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
