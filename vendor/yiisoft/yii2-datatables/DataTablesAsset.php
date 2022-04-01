<?php
/**
 * @copyright Federico Nicolás Motta
 * @author Federico Nicolás Motta <fedemotta@gmail.com>
 * @license http://opensource.org/licenses/mit-license.php The MIT License (MIT)
 * @package yii2-widget-datatables
 */
namespace fedemotta\datatables;
use yii\web\AssetBundle;

/**
 * Asset for the DataTables JQuery plugin
 * @author Federico Nicolás Motta <fedemotta@gmail.com>
 */
class DataTablesAsset extends AssetBundle 
{
    public $basePath = '@webroot';
    public $baseUrl  = '@web'; 

    public $css = [
        "/avila/backend/web/datatables/datatables/css/jquery.dataTables.css",
    ];

    public $js = [
        "/avila/backend/web/datatables/datatables/js/jquery.dataTables.js",
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}