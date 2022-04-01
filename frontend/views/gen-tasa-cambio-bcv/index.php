<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\GenTasaCambioBcvSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gen Tasa Cambio Bcvs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gen-tasa-cambio-bcv-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Gen Tasa Cambio Bcv', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'gen_tasa_cambio_bcv_id',
            'gen_tasa_cambio_bcv_usd',
            'gen_tasa_cambio_bcv_eur',
            'gen_tasa_cambio_bcv_fecha',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
