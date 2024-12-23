<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TblStokbarang $model */

$this->title = $model->Id_Barang;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Stokbarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-stokbarang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Id_Barang' => $model->Id_Barang], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Id_Barang' => $model->Id_Barang], [
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
            'Id_Barang',
            'Nama_Barang',
            'Jumlah_Barang',
        ],
    ]) ?>

</div>
