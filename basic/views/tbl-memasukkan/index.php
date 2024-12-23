<?php

use app\models\TblMemasukkan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\TblMemasukkanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tbl Memasukkans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-memasukkan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tbl Memasukkan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_MasukMenu',
            'Tgl_MasukMenu',
            'Id_Menu',
            'Id_Kasir',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TblMemasukkan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Id_MasukMenu' => $model->Id_MasukMenu]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
