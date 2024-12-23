<?php

namespace app\controllers;

use app\models\TblMengelola;
use app\models\TblMengelolaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TblMengelolaController implements the CRUD actions for TblMengelola model.
 */
class TblMengelolaController extends Controller
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
     * Lists all TblMengelola models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TblMengelolaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblMengelola model.
     * @param int $Id_Kelola Id Kelola
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Id_Kelola)
    {
        return $this->render('view', [
            'model' => $this->findModel($Id_Kelola),
        ]);
    }

    /**
     * Creates a new TblMengelola model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TblMengelola();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Id_Kelola' => $model->Id_Kelola]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TblMengelola model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Id_Kelola Id Kelola
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Id_Kelola)
    {
        $model = $this->findModel($Id_Kelola);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_Kelola' => $model->Id_Kelola]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TblMengelola model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Id_Kelola Id Kelola
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Id_Kelola)
    {
        $this->findModel($Id_Kelola)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TblMengelola model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Id_Kelola Id Kelola
     * @return TblMengelola the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Id_Kelola)
    {
        if (($model = TblMengelola::findOne(['Id_Kelola' => $Id_Kelola])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
