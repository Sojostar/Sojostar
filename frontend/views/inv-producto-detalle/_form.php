<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\InvProductoDetalle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inv-producto-detalle-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'inv_producto_detalle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inv_producto_detalle_descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inv_producto_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
