<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblStokbarang $model */

$this->title = 'Update Tbl Stokbarang: ' . $model->Id_Barang;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Stokbarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Barang, 'url' => ['view', 'Id_Barang' => $model->Id_Barang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-stokbarang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
