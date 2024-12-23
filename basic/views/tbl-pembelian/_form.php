<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblPembelian $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-pembelian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Pembelian')->textInput() ?>

    <?= $form->field($model, 'Id_Transaksi')->textInput() ?>

    <?= $form->field($model, 'Id_Menu')->textInput() ?>

    <?= $form->field($model, 'Jumlah_Dibeli')->textInput() ?>

    <?= $form->field($model, 'Total_Harga')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
