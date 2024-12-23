<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblMenu $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_Menu')->textInput() ?>

    <?= $form->field($model, 'Nama_Menu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Harga_Menu')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
