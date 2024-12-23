<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblStokbarang $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-stokbarang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Barang')->textInput() ?>

    <?= $form->field($model, 'Nama_Barang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Jumlah_Barang')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
