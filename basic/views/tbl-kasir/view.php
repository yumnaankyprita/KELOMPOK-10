<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TblKasir $model */

$this->title = $model->Id_Kasir;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Kasirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-kasir-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Id_Kasir' => $model->Id_Kasir], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Id_Kasir' => $model->Id_Kasir], [
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
            'Id_Kasir',
            'Nama_Kasir',
            'Alamat_Kasir',
        ],
    ]) ?>

</div>
