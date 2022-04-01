<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\InvProductoEstado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inv-producto-estado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'inv_producto_estado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inv_producto_estado_descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adm_empresa_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
