<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblStokbarang $model */

$this->title = 'Create Tbl Stokbarang';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Stokbarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-stokbarang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
