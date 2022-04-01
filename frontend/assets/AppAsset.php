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
        'tema/css/bootstrap.min.css',
        'tema/font-awesome/css/font-awesome.css',
        'tema/css/animate.css',
        'tema/css/style.css',
        'tema/datatables/datatables.min.css',
    ];
    public $js = [
        'tema/js/jquery-3.1.1.min.js',
        'tema/js/popper.min.js',
        'tema/js/bootstrap.min.js',
        'tema/js/plugins/metisMenu/jquery.metisMenu.js',
        'tema/js/plugins/slimscroll/jquery.slimscroll.min.js',
        'tema/js/inspinia.js',
        'tema/js/plugins/pace/pace.min.js',
        'tema/datatables/datatables.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
