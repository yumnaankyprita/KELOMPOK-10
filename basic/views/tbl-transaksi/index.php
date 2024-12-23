<?php

use app\models\TblTransaksi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\TblTransaksiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tbl Transaksis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-transaksi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tbl Transaksi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_Transaksi',
            'Tgl_Pembelian',
            'Nama_Pembeli',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TblTransaksi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Id_Transaksi' => $model->Id_Transaksi]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
