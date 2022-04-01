<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\AdmEmpresa */

$this->title = 'Update Adm Empresa: ' . $model->adm_empresa_id;
$this->params['breadcrumbs'][] = ['label' => 'Adm Empresas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->adm_empresa_id, 'url' => ['view', 'id' => $model->adm_empresa_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="adm-empresa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
