<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\InvProductoDetalleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inv-producto-detalle-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'inv_producto_detalle_id') ?>

    <?= $form->field($model, 'inv_producto_detalle') ?>

    <?= $form->field($model, 'inv_producto_detalle_descripcion') ?>

    <?= $form->field($model, 'inv_producto_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
