<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblKaryawangudang $model */

$this->title = 'Create Tbl Karyawangudang';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Karyawangudangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-karyawangudang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
