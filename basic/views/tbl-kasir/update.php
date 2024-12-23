<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblKasir $model */

$this->title = 'Update Tbl Kasir: ' . $model->Id_Kasir;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Kasirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Kasir, 'url' => ['view', 'Id_Kasir' => $model->Id_Kasir]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-kasir-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
