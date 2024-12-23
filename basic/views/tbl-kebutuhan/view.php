<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TblKebutuhan $model */

$this->title = $model->Id_Kebutuhan;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Kebutuhans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-kebutuhan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Id_Kebutuhan' => $model->Id_Kebutuhan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Id_Kebutuhan' => $model->Id_Kebutuhan], [
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
            'Id_Kebutuhan',
            'Id_Menu',
            'Id_Barang',
            'Jumlah',
        ],
    ]) ?>

</div>
