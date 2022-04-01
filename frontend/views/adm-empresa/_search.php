<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\AdmEmpresaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="adm-empresa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'adm_empresa_id') ?>

    <?= $form->field($model, 'adm_empresa_nombre') ?>

    <?= $form->field($model, 'adm_empresa_identificacion') ?>

    <?= $form->field($model, 'adm_empresa_identificacion_tipo') ?>

    <?= $form->field($model, 'adm_empresa_direccion') ?>

    <?php // echo $form->field($model, 'adm_empresa_estado') ?>

    <?php // echo $form->field($model, 'adm_empresa_propietario') ?>

    <?php // echo $form->field($model, 'adm_empresa_tipo') ?>

    <?php // echo $form->field($model, 'adm_empresa_tlf_oper') ?>

    <?php // echo $form->field($model, 'adm_empresa_telefono') ?>

    <?php // echo $form->field($model, 'adm_empresa_cre') ?>

    <?php // echo $form->field($model, 'adm_empresa_upd') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
