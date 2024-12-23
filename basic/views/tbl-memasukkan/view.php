<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TblMemasukkan $model */

$this->title = $model->Id_MasukMenu;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Memasukkans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-memasukkan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Id_MasukMenu' => $model->Id_MasukMenu], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Id_MasukMenu' => $model->Id_MasukMenu], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Id_MasukMenu',
            'Tgl_MasukMenu',
            'Id_Menu',
            'Id_Kasir',
        ],
    ]) ?>

</div>
