<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap4\Tabs;

/* @var $this yii\web\View */
/* @var $model frontend\models\InvProducto */
/* @var $form yii\widgets\ActiveForm */

//$model->inv_producto_costo_moneda = $model->isNewRecord ? 2 : $model->inv_producto_costo_moneda;
//$this->registerCssFile('@web/tema/css/plugins/cropper/cropper.min.css');

//$this->registerJsFile('@web/tema/js/plugins/cropper/cropper.min.js');
//$this->registerJsFile('@web/tema/js/plugins/cropper/prueba.js');
$this->registerJsFile('@web/js/bs-custom-file-input.js');

$this->registerJs(
    "$(document).ready(function () {
  bsCustomFileInput.init()
}) "
);
?>

<div class="col-lg-12">
    <div class="tabs-container">

    <?php $form = ActiveForm::begin(); ?>
        <?php
        echo Tabs::widget([
    'items' => [
        [
            'label' => 'Identificacion',
            'content' => $this->render('_form_001', ['model' => $model, 'form' => $form, 'categoria' => $categoria, 'unidad_venta' => $unidad_venta]),
            'active' => true
        ],
        [
            'label' => 'Costo',
            'content' => $this->render('_form_002', ['model' => $model, 'form' => $form,'valor_impuesto' => $valor_impuesto, 'moneda' => $moneda]),
        ],
        [
            'label' => 'Caracteristicas',
            'content' => $this->render('_form_003', ['model' => $model, 'form' => $form]),
        ],
    ],
]);
?>
</div>

  

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
