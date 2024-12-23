<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TblKelolabarang $model */

$this->title = $model->Id_KelolaBarang;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Kelolabarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-kelolabarang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Id_KelolaBarang' => $model->Id_KelolaBarang], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Id_KelolaBarang' => $model->Id_KelolaBarang], [
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
            'Id_KelolaBarang',
            'Id_Kelola',
            'Jumlah_Barang',
        ],
    ]) ?>

</div>
