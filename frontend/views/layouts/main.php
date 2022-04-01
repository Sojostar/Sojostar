<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script type="text/javascript">
        function cantidad() {
            var carrito = document.getElementById('carrito-modificar');
            console.log(carrito); 
            $.ajax({
                url: 'index.php?r=inv-producto/preguntarcantidad',
                type: 'GET',
                success: function(salida) {
                    console.log(1); 
                    carrito.textContent = salida;
                    //document.location.reload(true);
                }
            });
        }
        window.onload = cantidad;
        </script>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body >
<?php $this->beginBody() ?>

    <div id="wrapper">


    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">Example user</span>
                            <span class="text-muted text-xs block">menu <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li>
                                <?php

    if (Yii::$app->user->isGuest) { echo "<a class='dropdown-item' href='login.html'>Login</a>"; } else { echo "<a class='dropdown-item' href='login.html'>Logout</a>";};
                                ?>
                        </li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li >
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Main view</span></a>
                </li>
                <li>
                    <a href="<?= 'index.php?r=inv-producto/index' ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Productos</span> </a>
                </li>
                <li>
                    <a href="<?= 'index.php?r=inv-producto/ventas' ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Ventas</span> </a>
                </li>
                <li>
                    <a href="<?= 'index.php?r=inv-producto/facturacion' ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Facturacion</span> </a>
                </li>
            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                </div>

                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle count-info" data-toggle="dropdown" href="#" aria-expanded="false">
                            <i class="fa fa-shopping-cart"></i>  <span id="carrito-modificar" class="label label-primary">0</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                </ul>

            </nav>
        </div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10"><h2><?= Html::encode($this->title) ?></h2>
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
