<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\InvProductoImpuestoValor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inv-producto-impuesto-valor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'inv_producto_impuesto_valor_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inv_producto_impuesto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inv_producto_impuesto_valor_detalle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adm_empresa_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
