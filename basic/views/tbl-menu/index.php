<?php

use app\models\TblMenu;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\TblMenuSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tbl Menus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-menu-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tbl Menu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id_Menu',
            'Nama_Menu',
            'Harga_Menu',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TblMenu $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Id_Menu' => $model->Id_Menu]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
