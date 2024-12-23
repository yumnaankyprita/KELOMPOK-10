<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblPembelianSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-pembelian-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'Id_Pembelian') ?>

    <?= $form->field($model, 'Id_Transaksi') ?>

    <?= $form->field($model, 'Id_Menu') ?>

    <?= $form->field($model, 'Jumlah_Dibeli') ?>

    <?= $form->field($model, 'Total_Harga') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
