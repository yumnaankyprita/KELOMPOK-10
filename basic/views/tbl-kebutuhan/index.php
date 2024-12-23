<?php

use app\models\TblKebutuhan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\TblKebutuhanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tbl Kebutuhans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-kebutuhan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tbl Kebutuhan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_Kebutuhan',
            'Id_Menu',
            'Id_Barang',
            'Jumlah',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TblKebutuhan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Id_Kebutuhan' => $model->Id_Kebutuhan]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
