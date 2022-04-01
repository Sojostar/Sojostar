<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\GenTasaCambioBcv */

$this->title = $model->gen_tasa_cambio_bcv_id;
$this->params['breadcrumbs'][] = ['label' => 'Gen Tasa Cambio Bcvs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="gen-tasa-cambio-bcv-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->gen_tasa_cambio_bcv_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->gen_tasa_cambio_bcv_id], [
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
            'gen_tasa_cambio_bcv_id',
            'gen_tasa_cambio_bcv_usd',
            'gen_tasa_cambio_bcv_eur',
            'gen_tasa_cambio_bcv_fecha',
        ],
    ]) ?>

</div>
