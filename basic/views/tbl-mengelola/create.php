<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblMengelola $model */

$this->title = 'Create Tbl Mengelola';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Mengelolas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-mengelola-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
