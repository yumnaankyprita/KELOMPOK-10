<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblMengelola $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-mengelola-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Kelola')->textInput() ?>

    <?= $form->field($model, 'Id_Barang')->textInput() ?>

    <?= $form->field($model, 'Id_Karyawan')->textInput() ?>

    <?= $form->field($model, 'Tgl_Kelola')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
