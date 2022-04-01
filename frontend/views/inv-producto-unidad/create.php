<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\InvProductoUnidad */

$this->title = 'Create Inv Producto Unidad';
$this->params['breadcrumbs'][] = ['label' => 'Inv Producto Unidads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inv-producto-unidad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
