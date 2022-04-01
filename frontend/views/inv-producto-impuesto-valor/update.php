<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\InvProductoImpuestoValor */

$this->title = 'Update Inv Producto Impuesto Valor: ' . $model->inv_producto_impuesto_valor_id;
$this->params['breadcrumbs'][] = ['label' => 'Inv Producto Impuesto Valors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->inv_producto_impuesto_valor_id, 'url' => ['view', 'id' => $model->inv_producto_impuesto_valor_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inv-producto-impuesto-valor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
