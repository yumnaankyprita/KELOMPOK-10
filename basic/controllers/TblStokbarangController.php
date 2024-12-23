<?php

namespace app\controllers;

use app\models\TblStokbarang;
use app\models\TblStokbarangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TblStokbarangController implements the CRUD actions for TblStokbarang model.
 */
class TblStokbarangController extends Controller
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
     * Lists all TblStokbarang models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TblStokbarangSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblStokbarang model.
     * @param int $Id_Barang Id Barang
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Id_Barang)
    {
        return $this->render('view', [
            'model' => $this->findModel($Id_Barang),
        ]);
    }

    /**
     * Creates a new TblStokbarang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TblStokbarang();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Id_Barang' => $model->Id_Barang]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TblStokbarang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Id_Barang Id Barang
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Id_Barang)
    {
        $model = $this->findModel($Id_Barang);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_Barang' => $model->Id_Barang]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TblStokbarang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Id_Barang Id Barang
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Id_Barang)
    {
        $this->findModel($Id_Barang)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TblStokbarang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Id_Barang Id Barang
     * @return TblStokbarang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Id_Barang)
    {
        if (($model = TblStokbarang::findOne(['Id_Barang' => $Id_Barang])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
