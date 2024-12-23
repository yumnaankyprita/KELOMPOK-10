<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblTransaksi $model */

$this->title = 'Create Tbl Transaksi';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Transaksis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-transaksi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
