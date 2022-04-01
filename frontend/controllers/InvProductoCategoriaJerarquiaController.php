<?php

namespace frontend\controllers;

use frontend\models\InvProductoCategoriaJerarquia;
use frontend\models\InvProductoCategoriaJerarquiaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * InvProductoCategoriaJerarquiaController implements the CRUD actions for InvProductoCategoriaJerarquia model.
 */
class InvProductoCategoriaJerarquiaController extends Controller
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
     * Lists all InvProductoCategoriaJerarquia models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new InvProductoCategoriaJerarquiaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single InvProductoCategoriaJerarquia model.
     * @param int $inv_producto_categoria_jerarquia_id Inv Producto Categoria Jerarquia ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($inv_producto_categoria_jerarquia_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($inv_producto_categoria_jerarquia_id),
        ]);
    }

    /**
     * Creates a new InvProductoCategoriaJerarquia model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new InvProductoCategoriaJerarquia();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'inv_producto_categoria_jerarquia_id' => $model->inv_producto_categoria_jerarquia_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing InvProductoCategoriaJerarquia model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $inv_producto_categoria_jerarquia_id Inv Producto Categoria Jerarquia ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($inv_producto_categoria_jerarquia_id)
    {
        $model = $this->findModel($inv_producto_categoria_jerarquia_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'inv_producto_categoria_jerarquia_id' => $model->inv_producto_categoria_jerarquia_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing InvProductoCategoriaJerarquia model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $inv_producto_categoria_jerarquia_id Inv Producto Categoria Jerarquia ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($inv_producto_categoria_jerarquia_id)
    {
        $this->findModel($inv_producto_categoria_jerarquia_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the InvProductoCategoriaJerarquia model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $inv_producto_categoria_jerarquia_id Inv Producto Categoria Jerarquia ID
     * @return InvProductoCategoriaJerarquia the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($inv_producto_categoria_jerarquia_id)
    {
        if (($model = InvProductoCategoriaJerarquia::findOne(['inv_producto_categoria_jerarquia_id' => $inv_producto_categoria_jerarquia_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
