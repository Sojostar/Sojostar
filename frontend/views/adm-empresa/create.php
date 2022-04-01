<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\AdmEmpresa */

$this->title = 'Create Adm Empresa';
$this->params['breadcrumbs'][] = ['label' => 'Adm Empresas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adm-empresa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
