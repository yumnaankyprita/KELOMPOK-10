<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TblKaryawangudang $model */

$this->title = $model->Id_Karyawan;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Karyawangudangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-karyawangudang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Id_Karyawan' => $model->Id_Karyawan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Id_Karyawan' => $model->Id_Karyawan], [
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
            'Id_Karyawan',
            'Nama_Karyawan',
            'Alamat_Karyawan',
        ],
    ]) ?>

</div>
