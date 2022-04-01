<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\InvProductoCategoriaJerarquia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inv-producto-categoria-jerarquia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'inv_producto_categoria_jerarquia_padre')->textInput() ?>

    <?= $form->field($model, 'inv_producto_categoria_jerarquia_hijo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
