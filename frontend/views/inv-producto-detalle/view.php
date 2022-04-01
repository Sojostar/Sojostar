<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\InvProductoDetalle */

$this->title = $model->inv_producto_detalle_id;
$this->params['breadcrumbs'][] = ['label' => 'Inv Producto Detalles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="inv-producto-detalle-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->inv_producto_detalle_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->inv_producto_detalle_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'inv_producto_detalle_id',
            'inv_producto_detalle',
            'inv_producto_detalle_descripcion',
            'inv_producto_id',
        ],
    ]) ?>

</div>
