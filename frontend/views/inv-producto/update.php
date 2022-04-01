<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\InvProducto */

$this->title = 'Actualizar Producto: ' . $model->inv_producto_id;
$this->params['breadcrumbs'][] = ['label' => 'Inv Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->inv_producto_id, 'url' => ['view', 'id' => $model->inv_producto_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="row">


    <?= $this->render('_form', [
        'model' => $model,
        'unidad_venta' => $unidad_venta,
        'valor_impuesto' => $valor_impuesto,
        'moneda' => $moneda,
        'categoria' => $categoria,
    ]) ?>

</div>
