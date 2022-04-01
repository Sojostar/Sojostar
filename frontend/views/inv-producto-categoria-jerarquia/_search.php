<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\InvProductoCategoriaJerarquiaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inv-producto-categoria-jerarquia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'inv_producto_categoria_jerarquia_id') ?>

    <?= $form->field($model, 'inv_producto_categoria_jerarquia_padre') ?>

    <?= $form->field($model, 'inv_producto_categoria_jerarquia_hijo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
