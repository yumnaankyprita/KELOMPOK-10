<?php

use app\models\TblKaryawangudang;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\tbl_karyawangudangSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tbl Karyawangudangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-karyawangudang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tbl Karyawangudang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_Karyawan',
            'Nama_Karyawan',
            'Alamat_Karyawan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TblKaryawangudang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Id_Karyawan' => $model->Id_Karyawan]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
