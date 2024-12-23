<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblKelolabarang $model */

$this->title = 'Update Tbl Kelolabarang: ' . $model->Id_KelolaBarang;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Kelolabarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_KelolaBarang, 'url' => ['view', 'Id_KelolaBarang' => $model->Id_KelolaBarang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-kelolabarang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
