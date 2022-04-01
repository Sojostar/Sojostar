<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\AdmPropietario */

$this->title = 'Update Adm Propietario: ' . $model->adm_propietario_id;
$this->params['breadcrumbs'][] = ['label' => 'Adm Propietarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->adm_propietario_id, 'url' => ['view', 'id' => $model->adm_propietario_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="adm-propietario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
