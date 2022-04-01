<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\AdmPropietario */

$this->title = 'Create Adm Propietario';
$this->params['breadcrumbs'][] = ['label' => 'Adm Propietarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adm-propietario-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
