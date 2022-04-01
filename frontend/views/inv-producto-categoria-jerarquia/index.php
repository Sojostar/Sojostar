<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\InvProductoCategoriaJerarquiaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inv Producto Categoria Jerarquias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inv-producto-categoria-jerarquia-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Inv Producto Categoria Jerarquia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'inv_producto_categoria_jerarquia_id',
            'inv_producto_categoria_jerarquia_padre',
            'inv_producto_categoria_jerarquia_hijo',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, InvProductoCategoriaJerarquia $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'inv_producto_categoria_jerarquia_id' => $model->inv_producto_categoria_jerarquia_id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
