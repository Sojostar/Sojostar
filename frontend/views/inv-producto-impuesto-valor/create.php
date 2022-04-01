<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\InvProductoImpuestoValor */

$this->title = 'Create Inv Producto Impuesto Valor';
$this->params['breadcrumbs'][] = ['label' => 'Inv Producto Impuesto Valors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inv-producto-impuesto-valor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
