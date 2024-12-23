<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblKebutuhan $model */

$this->title = 'Update Tbl Kebutuhan: ' . $model->Id_Kebutuhan;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Kebutuhans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Kebutuhan, 'url' => ['view', 'Id_Kebutuhan' => $model->Id_Kebutuhan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-kebutuhan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
