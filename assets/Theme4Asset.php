<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class Theme4Asset extends AssetBundle
{
	public $basePath = '@webroot';
	public $baseUrl = '@web';
	public $css = [
		'assets/theme4/style.css',
	    'css/custom.css?v=3'
	];
	public $js = [
		'assets/theme4/js/bootstrap.bundle.min.js',
	    'assets/theme4/js/tiny-slider.js',
	    'assets/theme4/js/glightbox.min.js+aos.js+navbar.js+counter.js+custom.js.pagespeed.jc.B7bFTsJZUK.js',
	    'assets/theme4/js/custom.js',
	];
	public $depends = [
		//'yii\web\YiiAsset',
		//'yii\bootstrap\BootstrapAsset',
	];
}
