<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\AdmEmpresa */

$this->title = $model->adm_empresa_id;
$this->params['breadcrumbs'][] = ['label' => 'Adm Empresas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="adm-empresa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->adm_empresa_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->adm_empresa_id], [
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
            'adm_empresa_id',
            'adm_empresa_nombre',
            'adm_empresa_identificacion',
            'adm_empresa_identificacion_tipo',
            'adm_empresa_direccion:ntext',
            'adm_empresa_estado',
            'adm_empresa_propietario',
            'adm_empresa_tipo',
            'adm_empresa_tlf_oper',
            'adm_empresa_telefono',
            'adm_empresa_cre',
            'adm_empresa_upd',
        ],
    ]) ?>

</div>
