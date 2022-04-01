<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\AdmEmpresa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="adm-empresa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'adm_empresa_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adm_empresa_identificacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adm_empresa_identificacion_tipo')->textInput() ?>

    <?= $form->field($model, 'adm_empresa_direccion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'adm_empresa_estado')->textInput() ?>

    <?= $form->field($model, 'adm_empresa_propietario')->textInput() ?>

    <?= $form->field($model, 'adm_empresa_tipo')->textInput() ?>

    <?= $form->field($model, 'adm_empresa_tlf_oper')->textInput() ?>

    <?= $form->field($model, 'adm_empresa_telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adm_empresa_cre')->textInput() ?>

    <?= $form->field($model, 'adm_empresa_upd')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
