<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblKelolabarang $model */

$this->title = 'Create Tbl Kelolabarang';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Kelolabarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-kelolabarang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
