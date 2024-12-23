<?php

namespace app\controllers;

use app\models\TblKasir;
use app\models\TblKasirSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TblKasirController implements the CRUD actions for TblKasir model.
 */
class TblKasirController extends Controller
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
     * Lists all TblKasir models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TblKasirSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblKasir model.
     * @param int $Id_Kasir Id Kasir
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Id_Kasir)
    {
        return $this->render('view', [
            'model' => $this->findModel($Id_Kasir),
        ]);
    }

    /**
     * Creates a new TblKasir model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TblKasir();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Id_Kasir' => $model->Id_Kasir]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TblKasir model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Id_Kasir Id Kasir
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Id_Kasir)
    {
        $model = $this->findModel($Id_Kasir);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_Kasir' => $model->Id_Kasir]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TblKasir model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Id_Kasir Id Kasir
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Id_Kasir)
    {
        $this->findModel($Id_Kasir)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TblKasir model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Id_Kasir Id Kasir
     * @return TblKasir the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Id_Kasir)
    {
        if (($model = TblKasir::findOne(['Id_Kasir' => $Id_Kasir])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
