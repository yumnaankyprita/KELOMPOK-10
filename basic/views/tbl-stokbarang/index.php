<?php

use app\models\TblStokbarang;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\TblStokbarangSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tbl Stokbarangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-stokbarang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tbl Stokbarang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_Barang',
            'Nama_Barang',
            'Jumlah_Barang',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TblStokbarang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Id_Barang' => $model->Id_Barang]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
