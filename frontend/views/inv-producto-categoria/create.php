<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\InvProductoCategoria */

$this->title = 'Create Inv Producto Categoria';
$this->params['breadcrumbs'][] = ['label' => 'Inv Producto Categorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inv-producto-categoria-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
