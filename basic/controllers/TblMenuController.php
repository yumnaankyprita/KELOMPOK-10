<?php

namespace app\controllers;

use app\models\TblMenu;
use app\models\TblMenuSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TblMenuController implements the CRUD actions for TblMenu model.
 */
class TblMenuController extends Controller
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
     * Lists all TblMenu models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TblMenuSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblMenu model.
     * @param int $Id_Menu Id Menu
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Id_Menu)
    {
        return $this->render('view', [
            'model' => $this->findModel($Id_Menu),
        ]);
    }

    /**
     * Creates a new TblMenu model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TblMenu();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Id_Menu' => $model->Id_Menu]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TblMenu model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Id_Menu Id Menu
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Id_Menu)
    {
        $model = $this->findModel($Id_Menu);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_Menu' => $model->Id_Menu]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TblMenu model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Id_Menu Id Menu
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Id_Menu)
    {
        $this->findModel($Id_Menu)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TblMenu model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Id_Menu Id Menu
     * @return TblMenu the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Id_Menu)
    {
        if (($model = TblMenu::findOne(['Id_Menu' => $Id_Menu])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
