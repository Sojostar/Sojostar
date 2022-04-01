<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\InvProducto */

$this->title = 'Agregar Producto';
$this->params['breadcrumbs'][] = ['label' => 'Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
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
