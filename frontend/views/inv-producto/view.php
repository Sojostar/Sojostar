<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\InvProducto */

$this->title = 'CODIGO: '.$model->inv_producto_id;
$this->params['breadcrumbs'][] = ['label' => 'Inv Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>


<div class="col-lg-12">
    <div class="ibox-content">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-6">
                <h2 class="font-bold m-b-xs">NOMBRE DEL PRODUCTO: <?= strtoupper($model->inv_producto_nombre) ?></h2>
                <small><?= $model->inv_producto_comentario ?> </small>
                <div class="m-t-md"> 
                    <h2 class="product-main-price">
                        $<?= $model->inv_producto_precio ?> / <?= $model->inv_producto_precio * current($bcv) ?> Bs.
                        <small>+ <?= current($impuesto) ?>% Impuesto ($<?= $model->inv_producto_precio * (1+(current($impuesto)/100)) ?> / <?= ($model->inv_producto_precio * current($bcv)) * (1+(current($impuesto)/100)) ?> Bs.)</small>
                    </h2>
                </div>
            </div>
                    <div class="col-sm-6" style="display: flex; justify-content: flex-end;">
                <?= Html::img($model->inv_producto_imagen, ['alt' => 'pic not found','width' => '120px','height' => '120px']);?>
                    </div>
                </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                    <h4>Numero de Parte: <?= strtoupper($model->inv_producto_np) ?></h4>
                    <br>
                    <h4>Serial: <?= strtoupper($model->inv_producto_ns) ?></h4>
                    <br>
                    <h4>Presentacion: <?= current($unidad) ?></h4>
                    <br>
                    <h4>Estado: <?= current($estado) ?></h4>
                    
                    
                        </div>
                        <div class="col-md-6">
                            <h4>Costo del Producto: $<?= $model->inv_producto_costo ?></h4>
                            <br>
                            <h4>Ganancia Neta: $<?= $model->inv_producto_precio - $model->inv_producto_costo ?> / <?= ($model->inv_producto_precio - $model->inv_producto_costo)*current($bcv) ?>Bs.</h4>
                            <br>
                            <h4>Porcentaje Ganancia: <?= (($model->inv_producto_precio - $model->inv_producto_costo)*100)/$model->inv_producto_costo ?>% </h4>
                            <br>
                            <h4>Categoria: <?= current($categoria) ?></h4>
                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Ubicacion: <?= current($ubicacion) ?></h4>
                            <br>
                            <h4>Fecha de Fabricacion: <?= $model->logistica_producto_fecha_fabricacion ?></h4>
                        </div>
                        <div class="col-md-6">
                            <h4>Producto Vence: <?= current($vence) ?></h4>
                            <br> <?php 
                            if ($model->inv_producto_vence_fecha <= date("Y-m-d")) 
                                { ?>
                                        <h4 style="color: red;"> Fecha de Vencimiento: <?= $model->inv_producto_vence_fecha ?>
                                        </h4>
                                    <?php
                                } 
                            else
                            {?>
                                        <h4 style="color: green;"> Fecha de Vencimiento: <?= $model->inv_producto_vence_fecha ?>
                                        </h4>
                                    <?php
                            } 
                            ?>
                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-lg-4">
                                    <?php
                                        if ($model->inv_producto_cantidad_actual >= $model->inv_producto_cantidad_media) {
                                     ?>
                            <div class="widget style1 navy-bg">
                                <div class="row">
                                    <div class="col-4">
                                        <i class="fa fa-inbox fa-5x"></i>
                                    </div>
                                    <div class="col-8 text-right">
                                        <span> Cantidad Actual </span>
                                        <h2 class="font-bold"><?= $model->inv_producto_cantidad_actual ?></h2>
                                    </div>
                                </div>
                            </div>
                                    <?php
                                        } elseif ($model->inv_producto_cantidad_actual >= $model->inv_producto_cantidad_minima)  {
                                     ?>
                            <div class="widget style1 yellow-bg">
                                <div class="row">
                                    <div class="col-4">
                                        <i class="fa fa-inbox fa-5x"></i>
                                    </div>
                                    <div class="col-8 text-right">
                                        <span> Cantidad Actual </span>
                                        <h2 class="font-bold"><?= $model->inv_producto_cantidad_actual ?></h2>
                                    </div>
                                </div>
                            </div>
                                    <?php
                                        } elseif ($model->inv_producto_cantidad_actual < $model->inv_producto_cantidad_minima)  {
                                     ?>
                            <div class="widget style1 red-bg">
                                <div class="row">
                                    <div class="col-4">
                                        <i class="fa fa-inbox fa-5x"></i>
                                    </div>
                                    <div class="col-8 text-right">
                                        <span> Cantidad Actual </span>
                                        <h2 class="font-bold"><?= $model->inv_producto_cantidad_actual ?></h2>
                                    </div>
                                </div>
                            </div>
                                    <?php
                                        } 
                                     ?>
                        </div>
                        <div class="col-lg-4">
                            <div class="widget style1 navy-bg">
                                <div class="row">
                                    <div class="col-4">
                                        <i class="fa fa-archive fa-5x"></i>
                                    </div>
                                    <div class="col-8 text-right">
                                        <span> Cantidad Minima </span>
                                        <h2 class="font-bold"><?= $model->inv_producto_cantidad_minima ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="widget style1 navy-bg">
                                <div class="row">
                                    <div class="col-4">
                                        <i class="fa fa-th fa-5x"></i>
                                    </div>
                                    <div class="col-8 text-right">
                                        <span> Cantidad Normal </span>
                                        <h2 class="font-bold"><?= $model->inv_producto_cantidad_media ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    </dl>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->inv_producto_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Productos', ['index'], ['class' => 'btn btn-primary']) ?>
    </p>
                </div>
            </div>
        </div>
        
    </div>
</div>

