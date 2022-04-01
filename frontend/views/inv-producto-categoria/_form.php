<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\InvProductoCategoria */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inv-producto-categoria-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'inv_producto_categoria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inv_producto_categoria_descripcion')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
