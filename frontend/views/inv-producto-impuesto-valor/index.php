<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\InvProductoImpuestoValorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inv Producto Impuesto Valors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inv-producto-impuesto-valor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Inv Producto Impuesto Valor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'inv_producto_impuesto_valor_id',
            'inv_producto_impuesto_valor_nombre',
            'inv_producto_impuesto',
            'inv_producto_impuesto_valor_detalle',
            'adm_empresa_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
