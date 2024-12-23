<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TblMenu $model */

$this->title = 'Update Tbl Menu: ' . $model->Id_Menu;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id_Menu, 'url' => ['view', 'Id_Menu' => $model->Id_Menu]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-menu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
