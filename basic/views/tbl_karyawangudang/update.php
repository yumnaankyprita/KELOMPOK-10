<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblKaryawangudang $model */

$this->title = 'Update Tbl Karyawangudang: ' . $model->Id_Karyawan;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Karyawangudangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Karyawan, 'url' => ['view', 'Id_Karyawan' => $model->Id_Karyawan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-karyawangudang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
