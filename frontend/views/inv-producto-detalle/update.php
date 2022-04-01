<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\InvProductoDetalle */

$this->title = 'Update Inv Producto Detalle: ' . $model->inv_producto_detalle_id;
$this->params['breadcrumbs'][] = ['label' => 'Inv Producto Detalles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->inv_producto_detalle_id, 'url' => ['view', 'id' => $model->inv_producto_detalle_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inv-producto-detalle-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
