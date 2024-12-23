<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblTransaksi $model */

$this->title = 'Update Tbl Transaksi: ' . $model->Id_Transaksi;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Transaksis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Transaksi, 'url' => ['view', 'Id_Transaksi' => $model->Id_Transaksi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-transaksi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
