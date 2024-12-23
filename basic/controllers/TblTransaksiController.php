<?php

namespace app\controllers;

use app\models\TblTransaksi;
use app\models\TblTransaksiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TblTransaksiController implements the CRUD actions for TblTransaksi model.
 */
class TblTransaksiController extends Controller
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
     * Lists all TblTransaksi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TblTransaksiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblTransaksi model.
     * @param int $Id_Transaksi Id Transaksi
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Id_Transaksi)
    {
        return $this->render('view', [
            'model' => $this->findModel($Id_Transaksi),
        ]);
    }

    /**
     * Creates a new TblTransaksi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TblTransaksi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Id_Transaksi' => $model->Id_Transaksi]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TblTransaksi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Id_Transaksi Id Transaksi
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Id_Transaksi)
    {
        $model = $this->findModel($Id_Transaksi);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_Transaksi' => $model->Id_Transaksi]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TblTransaksi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Id_Transaksi Id Transaksi
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Id_Transaksi)
    {
        $this->findModel($Id_Transaksi)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TblTransaksi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Id_Transaksi Id Transaksi
     * @return TblTransaksi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Id_Transaksi)
    {
        if (($model = TblTransaksi::findOne(['Id_Transaksi' => $Id_Transaksi])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
