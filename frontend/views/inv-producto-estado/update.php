<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\InvProductoEstado */

$this->title = 'Update Inv Producto Estado: ' . $model->inv_producto_estado_id;
$this->params['breadcrumbs'][] = ['label' => 'Inv Producto Estados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->inv_producto_estado_id, 'url' => ['view', 'id' => $model->inv_producto_estado_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inv-producto-estado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
