<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TblMenu $model */

$this->title = $model->Id_Menu;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-menu-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Id_Menu' => $model->Id_Menu], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Id_Menu' => $model->Id_Menu], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Id_Menu',
            'Nama_Menu',
            'Harga_Menu',
        ],
    ]) ?>

</div>
