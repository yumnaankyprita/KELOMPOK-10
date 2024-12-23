<?php

use app\models\TblPembelian;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\TblPembelianSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tbl Pembelians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-pembelian-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tbl Pembelian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_Pembelian',
            'Id_Transaksi',
            'Id_Menu',
            'Jumlah_Dibeli',
            'Total_Harga',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TblPembelian $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Id_Pembelian' => $model->Id_Pembelian]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
