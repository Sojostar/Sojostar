<?php

namespace frontend\controllers;

use Yii;
use frontend\models\InvProducto;
use frontend\models\InvProductoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use frontend\models\InvProductoUnidad;
use frontend\models\InvUbicacion;
use frontend\models\InvProductoEstado;
use frontend\models\InvProductoImpuestoValor;
use frontend\models\GenMoneda;
use frontend\models\GenDecision;
use frontend\models\GenTasaCambioBcv;
use frontend\models\InvProductoCategoria;
use yii\web\UploadedFile;
use frontend\models\Imagenes;

/**
 * InvProductoController implements the CRUD actions for InvProducto model.
 */
class InvProductoController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all InvProducto models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new InvProductoSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Lists all InvProducto models.
     * @return mixed
     */
    public function actionFacturacion()
    {
        $cart = \Yii::$app->cart;
        $searchModel = new InvProductoSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $model=$this->findBusqueda($cart->getItemIds());

        return $this->render('facturacion', [
            'model' => $model,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Lists all InvProducto models.
     * @return mixed
     */
    public function actionVentas()
    {
        $cart = \Yii::$app->cart;
        $searchModel = new InvProductoSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $carrito = $cart->getTotalCost();

        return $this->render('ventas', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'carrito' => $carrito,
        ]);
    }

    /**
     * Displays a single InvProducto model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
            'impuesto' => ArrayHelper::map(InvProductoImpuestoValor::find()->where(['inv_producto_impuesto_valor_id' => $this->findModel($id)->inv_producto_impuesto_valor])->All(), 'inv_producto_impuesto_valor_id', 'inv_producto_impuesto'),
            'unidad' => ArrayHelper::map(InvProductoUnidad::find()->where(['inv_producto_unidad_id' => $this->findModel($id)->inv_producto_unidad])->All(), 'inv_producto_unidad_id', 'inv_producto_unidad_nombre'),
            'bcv' => ArrayHelper::map(GenTasaCambioBcv::find()->where(['gen_tasa_cambio_bcv_id' => 1])->All(), 'gen_tasa_cambio_bcv_id', 'gen_tasa_cambio_bcv_usd'),
            'estado' => ArrayHelper::map(InvProductoEstado::find()->where(['inv_producto_estado_id' => $this->findModel($id)->inv_producto_estado])->All(), 'inv_producto_estado_id', 'inv_producto_estado'),
            'vence' => ArrayHelper::map(GenDecision::find()->where(['gen_decision_id' => $this->findModel($id)->inv_producto_vence])->All(), 'gen_decision_id', 'gen_decision'),
            'ubicacion' => ArrayHelper::map(InvUbicacion::find()->where(['inv_ubicacion_id' => $this->findModel($id)->inv_producto_ubicacion])->All(), 'inv_ubicacion_id', 'inv_ubicacion_nombre'),
            'categoria' => ArrayHelper::map(InvProductoCategoria::find()->where(['inv_producto_categoria_id' => $this->findModel($id)->inv_producto_categoria])->All(), 'inv_producto_categoria_id', 'inv_producto_categoria'),
        ]);
    }

    /**
     * Creates a new InvProducto model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new InvProducto();
        $imagen = new Imagenes();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) ) {
                    //$model->inv_producto_imagen = UploadedFile::getInstance($model, 'inv_producto_imagen');
                if ($model->inv_producto_imagen <> null ) {
                    $imagen->imageFile = UploadedFile::getInstance($model, 'inv_producto_imagen');

                    if ($imagen->upload() ) {
                        $nombre = Yii::$app->formatter->asTimestamp(date('Y-d-m h:i:s'));
                        rename(Yii::getAlias('@webroot').'/imagenes/productos/'.$imagen->imageFile->name , Yii::getAlias('@webroot').'/imagenes/productos/'.$nombre.'.'.$imagen->imageFile->extension);
                        $model->inv_producto_imagen = 'imagenes/productos/'.$nombre.'.'.$imagen->imageFile->extension;
                        if ($model->save()) {
                        return $this->redirect(['view', 'id' => $model->inv_producto_id]);
                        }
                    }

                }
                else
                {
                    $model->inv_producto_imagen = 'imagenes/perfil.png';
                        if ($model->save()) {
                        return $this->redirect(['view', 'id' => $model->inv_producto_id]);
                        }
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
            'unidad_venta' => ArrayHelper::map(InvProductoUnidad::find()->all(), 'inv_producto_unidad_id', 'inv_producto_unidad'),
            'valor_impuesto' => ArrayHelper::map(InvProductoImpuestoValor::find()->all(), 'inv_producto_impuesto_valor_id', 'inv_producto_impuesto_valor_nombre'),
            'moneda' => ArrayHelper::map(GenMoneda::find()->all(), 'gen_moneda_id', 'gen_moneda'),
            'categoria' => ArrayHelper::map(InvProductoCategoria::find()->all(), 'inv_producto_categoria_id', 'inv_producto_categoria'),
        ]);
    }


    /**
     * Updates an existing InvProducto model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $imagen = new Imagenes();
/*
        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->inv_producto_id]);
        }
*/


        if ($this->request->isPost) {
            if ($model->load($this->request->post()) ) {
                    //$model->inv_producto_imagen = UploadedFile::getInstance($model, 'inv_producto_imagen');
                if ($model->inv_producto_imagen <> null ) {
                    $imagen->imageFile = UploadedFile::getInstance($model, 'inv_producto_imagen');

                    if ($imagen->upload() ) {
                        $nombre = Yii::$app->formatter->asTimestamp(date('Y-d-m h:i:s'));
                        rename(Yii::getAlias('@webroot').'/imagenes/productos/'.$imagen->imageFile->name , Yii::getAlias('@webroot').'/imagenes/productos/'.$nombre.'.'.$imagen->imageFile->extension);
                        $model->inv_producto_imagen = 'imagenes/productos/'.$nombre.'.'.$imagen->imageFile->extension;
                        if ($model->save()) {
                            $cart = \Yii::$app->cart;
                            $cart->add($model, 1);
                        return $this->redirect(['view', 'id' => $model->inv_producto_id]);
                        }
                    }

                }
                else
                {
                    $model->inv_producto_imagen = 'imagenes/perfil.png';
                        if ($model->save()) {
                        return $this->redirect(['view', 'id' => $model->inv_producto_id]);
                        }
                }
            }
        } 


        return $this->render('update', [
            'model' => $model,
            'unidad_venta' => ArrayHelper::map(InvProductoUnidad::find()->all(), 'inv_producto_unidad_id', 'inv_producto_unidad'),
            'valor_impuesto' => ArrayHelper::map(InvProductoImpuestoValor::find()->all(), 'inv_producto_impuesto_valor_id', 'inv_producto_impuesto_valor_nombre'),
            'moneda' => ArrayHelper::map(GenMoneda::find()->all(), 'gen_moneda_id', 'gen_moneda'),
            'categoria' => ArrayHelper::map(InvProductoCategoria::find()->all(), 'inv_producto_categoria_id', 'inv_producto_categoria'),
        ]);
    }

    /**
     * Deletes an existing InvProducto model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionPrueba($id,$cant)
    {
        $cart = \Yii::$app->cart;
        $model = InvProducto::findOne($id);
            //print_r(Yii::$app->user->id);
        //$product = Product::findOne(1);
        //print_r(class_exists('frontend\models\InvProducto'));
        $item = $cart->getItem($id);

        if (is_null($cart->getItem($id))) {
            $cart->add($model, $cant);
        }
        //print_r($cart->getTotalCost());
        //exit(0);
        return $cart->getTotalCost();
    }

    public function actionTotal()
    {
        $cart = \Yii::$app->cart;
        //$model = InvProducto::findOne($id);
            //print_r(Yii::$app->user->id);
        //$product = Product::findOne(1);
        //print_r(class_exists('frontend\models\InvProducto'));
        //$cart->add($model, $cant);
        //print_r($cart->getTotalCost());
        //exit(0);
        return $cart->getTotalCost();
    }

    public function actionRemoverproducto($id)
    {
        $cart = \Yii::$app->cart;
            //print_r(Yii::$app->user->id);
        //$product = Product::findOne(1);
        //print_r(class_exists('frontend\models\InvProducto'));
        $cart->remove($id);
        //$cart->add($model, $cant);
        //print_r($cart->getTotalCost());
        //exit(0);
        return 'Removido';
    }

    public function actionLimpiarproductos()
    {
        $cart = \Yii::$app->cart;
            //print_r(Yii::$app->user->id);
        //$product = Product::findOne(1);
        //print_r(class_exists('frontend\models\InvProducto'));
        $cart->clear();
        //$cart->add($model, $cant);
        //print_r($cart->getTotalCost());
        //exit(0);
        return 'Vacio';
    }

    public function actionPreguntarcantidad()
    {
        $cart = \Yii::$app->cart;
            //print_r(Yii::$app->user->id);
        //$product = Product::findOne(1);
        //print_r(class_exists('frontend\models\InvProducto'));
        //$cart->remove($id);
        //$cart->add($model, $cant);
        //print_r($cart->getTotalCost());
        //exit(0);
        return $cart->getTotalCount();
    }

    public function actionModificarcantidad($id,$cant)
    {
        $cart = \Yii::$app->cart;
        $cart->change($id, $cant);
        $item = $cart->getItem($id);
            //print_r(Yii::$app->user->id);
        //$product = Product::findOne(1);
        //print_r(class_exists('frontend\models\InvProducto'));
        //$cart->remove($id);
        //$cart->add($model, $cant);
        //print_r($cart->getTotalCost());
        //exit(0);
        return $item->getQuantity();
    }



    /**
     * Finds the InvProducto model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return InvProducto the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = InvProducto::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    /**
     * Finds the InvProducto model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return InvProducto the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findBusqueda($id)
    {
        $model = InvProducto::findAll($id);

        if ($model !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
