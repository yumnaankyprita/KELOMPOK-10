<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblKebutuhan $model */

$this->title = 'Create Tbl Kebutuhan';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Kebutuhans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-kebutuhan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
