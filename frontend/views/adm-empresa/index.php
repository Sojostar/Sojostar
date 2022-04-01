<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\AdmEmpresaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Adm Empresas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adm-empresa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Adm Empresa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'adm_empresa_id',
            'adm_empresa_nombre',
            'adm_empresa_identificacion',
            'adm_empresa_identificacion_tipo',
            'adm_empresa_direccion:ntext',
            //'adm_empresa_estado',
            //'adm_empresa_propietario',
            //'adm_empresa_tipo',
            //'adm_empresa_tlf_oper',
            //'adm_empresa_telefono',
            //'adm_empresa_cre',
            //'adm_empresa_upd',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
