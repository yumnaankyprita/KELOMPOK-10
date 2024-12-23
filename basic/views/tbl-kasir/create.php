<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblKasir $model */

$this->title = 'Create Tbl Kasir';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Kasirs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-kasir-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
