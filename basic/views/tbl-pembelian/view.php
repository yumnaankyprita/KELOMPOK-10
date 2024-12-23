<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TblPembelian $model */

$this->title = $model->Id_Pembelian;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Pembelians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-pembelian-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Id_Pembelian' => $model->Id_Pembelian], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Id_Pembelian' => $model->Id_Pembelian], [
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
            'Id_Pembelian',
            'Id_Transaksi',
            'Id_Menu',
            'Jumlah_Dibeli',
            'Total_Harga',
        ],
    ]) ?>

</div>
