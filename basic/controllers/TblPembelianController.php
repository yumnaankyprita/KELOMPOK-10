<?php

namespace app\controllers;

use app\models\TblPembelian;
use app\models\TblPembelianSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TblPembelianController implements the CRUD actions for TblPembelian model.
 */
class TblPembelianController extends Controller
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
     * Lists all TblPembelian models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TblPembelianSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblPembelian model.
     * @param int $Id_Pembelian Id Pembelian
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Id_Pembelian)
    {
        return $this->render('view', [
            'model' => $this->findModel($Id_Pembelian),
        ]);
    }

    /**
     * Creates a new TblPembelian model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TblPembelian();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Id_Pembelian' => $model->Id_Pembelian]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TblPembelian model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Id_Pembelian Id Pembelian
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Id_Pembelian)
    {
        $model = $this->findModel($Id_Pembelian);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_Pembelian' => $model->Id_Pembelian]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TblPembelian model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Id_Pembelian Id Pembelian
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Id_Pembelian)
    {
        $this->findModel($Id_Pembelian)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TblPembelian model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Id_Pembelian Id Pembelian
     * @return TblPembelian the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Id_Pembelian)
    {
        if (($model = TblPembelian::findOne(['Id_Pembelian' => $Id_Pembelian])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
