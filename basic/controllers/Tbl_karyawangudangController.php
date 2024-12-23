<?php

namespace app\controllers;

use app\models\TblKaryawangudang;
use app\models\tbl_karyawangudangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Tbl_karyawangudangController implements the CRUD actions for TblKaryawangudang model.
 */
class Tbl_karyawangudangController extends Controller
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
     * Lists all TblKaryawangudang models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new tbl_karyawangudangSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblKaryawangudang model.
     * @param int $Id_Karyawan Id Karyawan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Id_Karyawan)
    {
        return $this->render('view', [
            'model' => $this->findModel($Id_Karyawan),
        ]);
    }

    /**
     * Creates a new TblKaryawangudang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TblKaryawangudang();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Id_Karyawan' => $model->Id_Karyawan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TblKaryawangudang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Id_Karyawan Id Karyawan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Id_Karyawan)
    {
        $model = $this->findModel($Id_Karyawan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_Karyawan' => $model->Id_Karyawan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TblKaryawangudang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Id_Karyawan Id Karyawan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Id_Karyawan)
    {
        $this->findModel($Id_Karyawan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TblKaryawangudang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Id_Karyawan Id Karyawan
     * @return TblKaryawangudang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Id_Karyawan)
    {
        if (($model = TblKaryawangudang::findOne(['Id_Karyawan' => $Id_Karyawan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
