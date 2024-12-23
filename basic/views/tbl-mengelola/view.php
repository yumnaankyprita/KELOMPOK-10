<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TblMengelola $model */

$this->title = $model->Id_Kelola;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Mengelolas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-mengelola-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Id_Kelola' => $model->Id_Kelola], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Id_Kelola' => $model->Id_Kelola], [
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
            'Id_Kelola',
            'Id_Barang',
            'Id_Karyawan',
            'Tgl_Kelola',
        ],
    ]) ?>

</div>
