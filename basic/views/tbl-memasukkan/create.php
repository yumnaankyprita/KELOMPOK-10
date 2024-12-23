<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblMemasukkan $model */

$this->title = 'Create Tbl Memasukkan';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Memasukkans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-memasukkan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
