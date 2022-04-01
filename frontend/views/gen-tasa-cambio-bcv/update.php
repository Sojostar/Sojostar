<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\GenTasaCambioBcv */

$this->title = 'Update Gen Tasa Cambio Bcv: ' . $model->gen_tasa_cambio_bcv_id;
$this->params['breadcrumbs'][] = ['label' => 'Gen Tasa Cambio Bcvs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->gen_tasa_cambio_bcv_id, 'url' => ['view', 'id' => $model->gen_tasa_cambio_bcv_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gen-tasa-cambio-bcv-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
