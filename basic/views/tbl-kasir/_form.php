<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblKasir $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-kasir-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Kasir')->textInput() ?>

    <?= $form->field($model, 'Nama_Kasir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Alamat_Kasir')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
