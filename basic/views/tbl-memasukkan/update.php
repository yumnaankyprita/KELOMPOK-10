<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblMemasukkan $model */

$this->title = 'Update Tbl Memasukkan: ' . $model->Id_MasukMenu;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Memasukkans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_MasukMenu, 'url' => ['view', 'Id_MasukMenu' => $model->Id_MasukMenu]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-memasukkan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
