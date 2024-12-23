<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblMemasukkan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-memasukkan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Id_MasukMenu')->textInput() ?>

    <?= $form->field($model, 'Tgl_MasukMenu')->textInput() ?>

    <?= $form->field($model, 'Id_Menu')->textInput() ?>

    <?= $form->field($model, 'Id_Kasir')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
