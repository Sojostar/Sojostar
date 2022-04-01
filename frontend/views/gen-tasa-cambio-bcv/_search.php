<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\GenTasaCambioBcvSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gen-tasa-cambio-bcv-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'gen_tasa_cambio_bcv_id') ?>

    <?= $form->field($model, 'gen_tasa_cambio_bcv_usd') ?>

    <?= $form->field($model, 'gen_tasa_cambio_bcv_eur') ?>

    <?= $form->field($model, 'gen_tasa_cambio_bcv_fecha') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
