<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\InvProductoDetalle */

$this->title = 'Create Inv Producto Detalle';
$this->params['breadcrumbs'][] = ['label' => 'Inv Producto Detalles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inv-producto-detalle-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
