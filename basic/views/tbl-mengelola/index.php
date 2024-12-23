<?php

use app\models\TblMengelola;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\TblMengelolaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tbl Mengelolas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-mengelola-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tbl Mengelola', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_Kelola',
            'Id_Barang',
            'Id_Karyawan',
            'Tgl_Kelola',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TblMengelola $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Id_Kelola' => $model->Id_Kelola]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
