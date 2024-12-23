<?php

namespace app\controllers;

use app\models\TblKelolabarang;
use app\models\TblKelolabarangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TblKelolabarangController implements the CRUD actions for TblKelolabarang model.
 */
class TblKelolabarangController extends Controller
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
     * Lists all TblKelolabarang models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TblKelolabarangSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblKelolabarang model.
     * @param int $Id_KelolaBarang Id Kelola Barang
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Id_KelolaBarang)
    {
        return $this->render('view', [
            'model' => $this->findModel($Id_KelolaBarang),
        ]);
    }

    /**
     * Creates a new TblKelolabarang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TblKelolabarang();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Id_KelolaBarang' => $model->Id_KelolaBarang]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TblKelolabarang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Id_KelolaBarang Id Kelola Barang
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Id_KelolaBarang)
    {
        $model = $this->findModel($Id_KelolaBarang);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_KelolaBarang' => $model->Id_KelolaBarang]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TblKelolabarang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Id_KelolaBarang Id Kelola Barang
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Id_KelolaBarang)
    {
        $this->findModel($Id_KelolaBarang)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TblKelolabarang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Id_KelolaBarang Id Kelola Barang
     * @return TblKelolabarang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Id_KelolaBarang)
    {
        if (($model = TblKelolabarang::findOne(['Id_KelolaBarang' => $Id_KelolaBarang])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
