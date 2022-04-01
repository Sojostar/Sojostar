<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;



$this->registerJsFile(
    '@web/js/remover_producto_carrito.js'
);
        $cart = \Yii::$app->cart;

$this->title = 'Facturacion';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="row" >
    <div class="col-lg-12">

            	<div class="wrapper wrapper-content animated fadeInRight">



            <div class="row">
                <div class="col-md-9">

                    <div class="ibox">
                        <div class="ibox-title">
                            <span class="float-right">(<strong><?php echo $cart->getTotalCount() ?></strong>) productos</span>
                            <h5>Productos a Facturar</h5>
                        </div>
                        <?php

                        	foreach ($model as $clave => $valor) {

							$item = $cart->getItem($valor->inv_producto_id);
                        		?>

                        <div class="ibox-content">
                            <div class="table-responsive">
                                <table class="table shoping-cart-table">

                                    <tbody>
                                    <tr>
                                        <td width="90">
                                            <div class="cart-product-imitation">
                                            </div>
                                        </td>
                                        <td class="desc">
                                            <h3>
                                                <a href="#" class="text-navy">
                                                   <?php echo $valor->inv_producto_nombre; ?>
                                                </a>
                                            </h3>
                                            <p class="small">
                                                   <?php echo $valor->inv_producto_comentario; ?>
                                            </p>
                                            <dl class="small m-b-none">
                                                <dt>Numero de Parte</dt>
                                                <dd><?php echo $valor->inv_producto_np; ?></dd>
                                            </dl>

                                            <div class="m-t-sm">
                                                <a href="#" class="text-muted"><i class="fa fa-gift"></i> Agregar Descuento</a>
                                                |
                                                <a href="<?= 'index.php?r=inv-producto/facturacion' ?>" onclick='(remover(<?php echo $valor->inv_producto_id; ?>));' class="text-muted"><i class="fa fa-trash"></i> Remover Articulo</a>
                                            </div>
                                        </td>

                                        <td>
                                            $<?php echo $valor->inv_producto_precio; ?>
                                        </td>
                                        <td>
                                            <div class="input-group"><input id="producto-<?php echo $valor->inv_producto_id ?>" value='1' width="100" type="number" class="form-control" placeholder="<?php echo $item->getQuantity(); ?>"> <span class="input-group-append"> <button class="btn btn-white" onclick="modificacion(<?php echo $valor->inv_producto_id; ?>)"><i class="fa fa-refresh"></i>
                                        </button> </span></div>
                                        </td>
                                        <td>
                                            <h4>
                                                $<?php echo $valor->inv_producto_precio * $item->getQuantity() ?>
                                            </h4>
                                        </td>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        		<?php
                        	}

                         ?>
                        <div class="ibox-content">

                            <button class="btn btn-primary float-right"><i class="fa fa fa-shopping-cart"></i> Facturar</button>
                            <button class="btn btn-white" onclick="location.href='<?= 'index.php?r=inv-producto/ventas' ?>'"><i class="fa fa-arrow-left"></i> Continuar Vendiendo</button>

                        </div>
                    </div>

                </div>
                <div class="col-md-3">

                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Resumen de Compras</h5>
                        </div>
                        <div class="ibox-content">
                            <span>
                                Total
                            </span>
                            <h2 class="font-bold" id="total-total">
                                $<?php echo $cart->getTotalCost() ?>
                            </h2>

                            <hr>
                            <span class="text-muted small">
                                *Para el Territorio de Venezuela aplica Impuestos
                            </span>
                            <div class="m-t-sm">
                                <div class="btn-group">
                                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart"></i> Facturar</a>
                                <?= Html::button('Cancelar', ['class' => 'btn btn-white btn-sm','onclick' => '(cancelar());', 'data-toggle'=>'tooltip', 'data-placement'=>'top' ,'title'=>'Tooltip on top']); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Soporte</h5>
                        </div>
                        <div class="ibox-content text-center">



                            <h3><i class="fa fa-phone"></i> +58 424 182 0450</h3>
                            <span class="small">
                                Por favor contactenes cualquier por duda que tenga. Nosotros estamos disponibles las 24h.
                            </span>


                        </div>
                    </div>


                </div>
            </div>




        </div>
    </div>
</div>

