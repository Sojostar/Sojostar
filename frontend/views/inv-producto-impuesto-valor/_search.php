<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\InvProductoImpuestoValorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inv-producto-impuesto-valor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'inv_producto_impuesto_valor_id') ?>

    <?= $form->field($model, 'inv_producto_impuesto_valor_nombre') ?>

    <?= $form->field($model, 'inv_producto_impuesto') ?>

    <?= $form->field($model, 'inv_producto_impuesto_valor_detalle') ?>

    <?= $form->field($model, 'adm_empresa_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
