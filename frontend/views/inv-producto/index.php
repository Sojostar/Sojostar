<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\grid\DataTables;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\InvProductoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->registerJs(
    "$(document).ready(function() {
    $('#example').DataTable();
} );"
);
/*
$this->registerJsFile(
    '@web/js/datatable_esp.js'
);
*/

$this->title = 'Productos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-content  p-md">
    <p>
        <?= Html::a('Agregar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= DataTables::widget([
        'dataProvider' => $dataProvider,
        'options' => ['class' => 'display responsive nowrap',],
        'columns' => [

            [
                'attribute' => 'inv_producto_id',
                'label' => 'Codigo',
            ],
            [
                'attribute' => 'inv_producto_imagen',
                'format' => 'html',
                'label' => 'Foto',
                'value' => function ($data) {
                    return Html::img($data['inv_producto_imagen'],
                        ['width' => '60px']);
                },
            ],
            [
                'attribute' => 'inv_producto_nombre',
                'label' => 'Producto',
            ],
            'inv_producto_np',
            'inv_producto_ns',
            //'inv_producto_unidad',
            //'inv_producto_impuesto_valor',
            //'inv_producto_vence',
            //'inv_producto_vence_fecha',
            //'inv_producto_costo',
            //'inv_producto_costo_moneda',
            [
                'attribute' => 'inv_producto_precio',
                'label' => 'Precio',
            ],
            //'inv_producto_precio_moneda',
            //'inv_producto_cantidad_actual',
            //'inv_producto_cantidad_minima',
            //'inv_producto_cantidad_media',
            [
                'attribute' => 'inv_producto_categoria',
                'value'     => 'invProductoCategoria.inv_producto_categoria',
                'label' => 'Categoria',
            ],
            //'inv_producto_ubicacion',
            //'logistica_producto_fecha_fabricacion',
            //'inv_producto_comentario',
            //'inv_producto_imagen',
            //'adm_empresa_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>
    </div>
    </div>
</div>
</div>
