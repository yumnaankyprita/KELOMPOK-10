<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblKelolabarangSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-kelolabarang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id_KelolaBarang') ?>

    <?= $form->field($model, 'Id_Kelola') ?>

    <?= $form->field($model, 'Jumlah_Barang') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
