<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblMengelola $model */

$this->title = 'Update Tbl Mengelola: ' . $model->Id_Kelola;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Mengelolas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Kelola, 'url' => ['view', 'Id_Kelola' => $model->Id_Kelola]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-mengelola-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
