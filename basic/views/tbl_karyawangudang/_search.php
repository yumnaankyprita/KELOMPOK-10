<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\tbl_karyawangudangSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-karyawangudang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'Id_Karyawan') ?>

    <?= $form->field($model, 'Nama_Karyawan') ?>

    <?= $form->field($model, 'Alamat_Karyawan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
