<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\GenTasaCambioBcv */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gen-tasa-cambio-bcv-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'gen_tasa_cambio_bcv_usd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gen_tasa_cambio_bcv_eur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gen_tasa_cambio_bcv_fecha')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
