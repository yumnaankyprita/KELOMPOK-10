<?php

use app\models\TblKelolabarang;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TblKelolabarangSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tbl Kelolabarangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-kelolabarang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tbl Kelolabarang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_KelolaBarang',
            'Id_Kelola',
            'Jumlah_Barang',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TblKelolabarang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Id_KelolaBarang' => $model->Id_KelolaBarang]);
                 }
            ],
        ],
    ]); ?>


</div>
