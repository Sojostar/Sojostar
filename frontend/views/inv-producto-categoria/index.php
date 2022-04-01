<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\InvProductoCategoriaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inv Producto Categorias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inv-producto-categoria-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Inv Producto Categoria', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'inv_producto_categoria_id',
            'inv_producto_categoria',
            'inv_producto_categoria_descripcion',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, InvProductoCategoria $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'inv_producto_categoria_id' => $model->inv_producto_categoria_id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
