<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\AdmPropietarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Adm Propietarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adm-propietario-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Adm Propietario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'adm_propietario_id',
            'adm_propietario_nombre',
            'adm_propietario_apellido',
            'adm_propietario_identificacion',
            'adm_propietario_tipo_identificacion',
            //'adm_propietario_email:email',
            //'adm_propietario_operadora_a',
            //'adm_propietario_telefono_principal',
            //'adm_propietario_operadora_b',
            //'adm_propietario_telefono_secundario',
            //'adm_propietario_estado',
            //'adm_propietario_tipo',
            //'adm_propietario_documentacion_a',
            //'adm_propietario_documentacion_b',
            //'adm_propietario_documentacion_c',
            //'adm_propietario_direccion:ntext',
            //'adm_propietario_fecha_cre',
            //'adm_propietario_fecha_upd',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
