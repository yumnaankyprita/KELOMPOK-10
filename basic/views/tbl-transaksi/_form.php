<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblTransaksi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-transaksi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Transaksi')->textInput() ?>

    <?= $form->field($model, 'Tgl_Pembelian')->textInput() ?>

    <?= $form->field($model, 'Nama_Pembeli')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
