<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\AdmPropietarioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="adm-propietario-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'adm_propietario_id') ?>

    <?= $form->field($model, 'adm_propietario_nombre') ?>

    <?= $form->field($model, 'adm_propietario_apellido') ?>

    <?= $form->field($model, 'adm_propietario_identificacion') ?>

    <?= $form->field($model, 'adm_propietario_tipo_identificacion') ?>

    <?php // echo $form->field($model, 'adm_propietario_email') ?>

    <?php // echo $form->field($model, 'adm_propietario_operadora_a') ?>

    <?php // echo $form->field($model, 'adm_propietario_telefono_principal') ?>

    <?php // echo $form->field($model, 'adm_propietario_operadora_b') ?>

    <?php // echo $form->field($model, 'adm_propietario_telefono_secundario') ?>

    <?php // echo $form->field($model, 'adm_propietario_estado') ?>

    <?php // echo $form->field($model, 'adm_propietario_tipo') ?>

    <?php // echo $form->field($model, 'adm_propietario_documentacion_a') ?>

    <?php // echo $form->field($model, 'adm_propietario_documentacion_b') ?>

    <?php // echo $form->field($model, 'adm_propietario_documentacion_c') ?>

    <?php // echo $form->field($model, 'adm_propietario_direccion') ?>

    <?php // echo $form->field($model, 'adm_propietario_fecha_cre') ?>

    <?php // echo $form->field($model, 'adm_propietario_fecha_upd') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
