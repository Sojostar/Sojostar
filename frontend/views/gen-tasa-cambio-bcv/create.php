<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\GenTasaCambioBcv */

$this->title = 'Create Gen Tasa Cambio Bcv';
$this->params['breadcrumbs'][] = ['label' => 'Gen Tasa Cambio Bcvs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gen-tasa-cambio-bcv-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
