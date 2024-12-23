<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblPembelian $model */

$this->title = 'Update Tbl Pembelian: ' . $model->Id_Pembelian;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Pembelians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Pembelian, 'url' => ['view', 'Id_Pembelian' => $model->Id_Pembelian]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-pembelian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
