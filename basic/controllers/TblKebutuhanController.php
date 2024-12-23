<?php

namespace app\controllers;

use app\models\TblKebutuhan;
use app\models\TblKebutuhanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TblKebutuhanController implements the CRUD actions for TblKebutuhan model.
 */
class TblKebutuhanController extends Controller
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
     * Lists all TblKebutuhan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TblKebutuhanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblKebutuhan model.
     * @param int $Id_Kebutuhan Id Kebutuhan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Id_Kebutuhan)
    {
        return $this->render('view', [
            'model' => $this->findModel($Id_Kebutuhan),
        ]);
    }

    /**
     * Creates a new TblKebutuhan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TblKebutuhan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Id_Kebutuhan' => $model->Id_Kebutuhan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TblKebutuhan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Id_Kebutuhan Id Kebutuhan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Id_Kebutuhan)
    {
        $model = $this->findModel($Id_Kebutuhan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_Kebutuhan' => $model->Id_Kebutuhan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TblKebutuhan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Id_Kebutuhan Id Kebutuhan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Id_Kebutuhan)
    {
        $this->findModel($Id_Kebutuhan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TblKebutuhan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Id_Kebutuhan Id Kebutuhan
     * @return TblKebutuhan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Id_Kebutuhan)
    {
        if (($model = TblKebutuhan::findOne(['Id_Kebutuhan' => $Id_Kebutuhan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
