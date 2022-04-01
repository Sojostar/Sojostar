<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\InvProductoCategoriaJerarquia */

$this->title = 'Create Inv Producto Categoria Jerarquia';
$this->params['breadcrumbs'][] = ['label' => 'Inv Producto Categoria Jerarquias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inv-producto-categoria-jerarquia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
