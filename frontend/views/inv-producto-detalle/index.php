<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\InvProductoDetalleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inv Producto Detalles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inv-producto-detalle-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Inv Producto Detalle', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'inv_producto_detalle_id',
            'inv_producto_detalle',
            'inv_producto_detalle_descripcion',
            'inv_producto_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
