<?php

use app\models\TblKasir;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\TblKasirSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tbl Kasirs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-kasir-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tbl Kasir', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_Kasir',
            'Nama_Kasir',
            'Alamat_Kasir',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TblKasir $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Id_Kasir' => $model->Id_Kasir]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
