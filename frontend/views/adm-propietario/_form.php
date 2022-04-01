<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\AdmPropietario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="adm-propietario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'adm_propietario_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adm_propietario_apellido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adm_propietario_identificacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adm_propietario_tipo_identificacion')->textInput() ?>

    <?= $form->field($model, 'adm_propietario_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adm_propietario_operadora_a')->textInput() ?>

    <?= $form->field($model, 'adm_propietario_telefono_principal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adm_propietario_operadora_b')->textInput() ?>

    <?= $form->field($model, 'adm_propietario_telefono_secundario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adm_propietario_estado')->textInput() ?>

    <?= $form->field($model, 'adm_propietario_tipo')->textInput() ?>

    <?= $form->field($model, 'adm_propietario_documentacion_a')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adm_propietario_documentacion_b')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adm_propietario_documentacion_c')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adm_propietario_direccion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'adm_propietario_fecha_cre')->textInput() ?>

    <?= $form->field($model, 'adm_propietario_fecha_upd')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
