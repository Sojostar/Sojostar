<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\AdmPropietario */

$this->title = $model->adm_propietario_id;
$this->params['breadcrumbs'][] = ['label' => 'Adm Propietarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="adm-propietario-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->adm_propietario_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->adm_propietario_id], [
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
            'adm_propietario_id',
            'adm_propietario_nombre',
            'adm_propietario_apellido',
            'adm_propietario_identificacion',
            'adm_propietario_tipo_identificacion',
            'adm_propietario_email:email',
            'adm_propietario_operadora_a',
            'adm_propietario_telefono_principal',
            'adm_propietario_operadora_b',
            'adm_propietario_telefono_secundario',
            'adm_propietario_estado',
            'adm_propietario_tipo',
            'adm_propietario_documentacion_a',
            'adm_propietario_documentacion_b',
            'adm_propietario_documentacion_c',
            'adm_propietario_direccion:ntext',
            'adm_propietario_fecha_cre',
            'adm_propietario_fecha_upd',
        ],
    ]) ?>

</div>
