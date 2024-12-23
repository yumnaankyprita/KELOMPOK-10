<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblKelolabarang $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-kelolabarang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_KelolaBarang')->textInput() ?>

    <?= $form->field($model, 'Id_Kelola')->textInput() ?>

    <?= $form->field($model, 'Jumlah_Barang')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
