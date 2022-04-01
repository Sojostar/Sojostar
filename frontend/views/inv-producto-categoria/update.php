<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\InvProductoCategoria */

$this->title = 'Update Inv Producto Categoria: ' . $model->inv_producto_categoria_id;
$this->params['breadcrumbs'][] = ['label' => 'Inv Producto Categorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->inv_producto_categoria_id, 'url' => ['view', 'inv_producto_categoria_id' => $model->inv_producto_categoria_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inv-producto-categoria-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
