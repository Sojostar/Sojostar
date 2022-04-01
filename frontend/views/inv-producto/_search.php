<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\InvProductoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inv-producto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'inv_producto_id') ?>

    <?= $form->field($model, 'inv_producto_nombre') ?>

    <?= $form->field($model, 'inv_producto_np') ?>

    <?= $form->field($model, 'inv_producto_ns') ?>

    <?= $form->field($model, 'inv_producto_unidad') ?>

    <?php // echo $form->field($model, 'inv_producto_impuesto_valor') ?>

    <?php // echo $form->field($model, 'inv_producto_vence') ?>

    <?php // echo $form->field($model, 'inv_producto_vence_fecha') ?>

    <?php // echo $form->field($model, 'inv_producto_costo') ?>

    <?php // echo $form->field($model, 'inv_producto_costo_moneda') ?>

    <?php // echo $form->field($model, 'inv_producto_precio') ?>

    <?php // echo $form->field($model, 'inv_producto_precio_moneda') ?>

    <?php // echo $form->field($model, 'inv_producto_cantidad_actual') ?>

    <?php // echo $form->field($model, 'inv_producto_cantidad_minima') ?>

    <?php // echo $form->field($model, 'inv_producto_cantidad_media') ?>

    <?php // echo $form->field($model, 'inv_producto_estado') ?>

    <?php // echo $form->field($model, 'inv_producto_ubicacion') ?>

    <?php // echo $form->field($model, 'logistica_producto_fecha_fabricacion') ?>

    <?php // echo $form->field($model, 'inv_producto_comentario') ?>

    <?php // echo $form->field($model, 'inv_producto_imagen') ?>

    <?php // echo $form->field($model, 'adm_empresa_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
