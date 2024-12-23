<?php

namespace app\controllers;

use app\models\TblMemasukkan;
use app\models\TblMemasukkanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TblMemasukkanController implements the CRUD actions for TblMemasukkan model.
 */
class TblMemasukkanController extends Controller
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
     * Lists all TblMemasukkan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TblMemasukkanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblMemasukkan model.
     * @param int $Id_MasukMenu Id Masuk Menu
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Id_MasukMenu)
    {
        return $this->render('view', [
            'model' => $this->findModel($Id_MasukMenu),
        ]);
    }

    /**
     * Creates a new TblMemasukkan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TblMemasukkan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Id_MasukMenu' => $model->Id_MasukMenu]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TblMemasukkan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Id_MasukMenu Id Masuk Menu
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Id_MasukMenu)
    {
        $model = $this->findModel($Id_MasukMenu);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_MasukMenu' => $model->Id_MasukMenu]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TblMemasukkan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Id_MasukMenu Id Masuk Menu
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Id_MasukMenu)
    {
        $this->findModel($Id_MasukMenu)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TblMemasukkan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Id_MasukMenu Id Masuk Menu
     * @return TblMemasukkan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Id_MasukMenu)
    {
        if (($model = TblMemasukkan::findOne(['Id_MasukMenu' => $Id_MasukMenu])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
