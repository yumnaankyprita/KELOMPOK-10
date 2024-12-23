<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblKaryawangudang $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-karyawangudang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Karyawan')->textInput() ?>

    <?= $form->field($model, 'Nama_Karyawan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Alamat_Karyawan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
