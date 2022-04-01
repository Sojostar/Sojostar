<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\InvProductoUnidad */

$this->title = 'Update Inv Producto Unidad: ' . $model->inv_producto_unidad_id;
$this->params['breadcrumbs'][] = ['label' => 'Inv Producto Unidads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->inv_producto_unidad_id, 'url' => ['view', 'id' => $model->inv_producto_unidad_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inv-producto-unidad-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
