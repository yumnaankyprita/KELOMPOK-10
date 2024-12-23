<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblKebutuhan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-kebutuhan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Kebutuhan')->textInput() ?>

    <?= $form->field($model, 'Id_Menu')->textInput() ?>

    <?= $form->field($model, 'Id_Barang')->textInput() ?>

    <?= $form->field($model, 'Jumlah')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
