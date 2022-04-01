<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\InvProductoCategoriaJerarquia */

$this->title = $model->inv_producto_categoria_jerarquia_id;
$this->params['breadcrumbs'][] = ['label' => 'Inv Producto Categoria Jerarquias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="inv-producto-categoria-jerarquia-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'inv_producto_categoria_jerarquia_id' => $model->inv_producto_categoria_jerarquia_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'inv_producto_categoria_jerarquia_id' => $model->inv_producto_categoria_jerarquia_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'inv_producto_categoria_jerarquia_id',
            'inv_producto_categoria_jerarquia_padre',
            'inv_producto_categoria_jerarquia_hijo',
        ],
    ]) ?>

</div>
