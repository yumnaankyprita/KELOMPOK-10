<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TblMemasukkanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tbl-memasukkan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'Id_MasukMenu') ?>

    <?= $form->field($model, 'Tgl_MasukMenu') ?>

    <?= $form->field($model, 'Id_Menu') ?>

    <?= $form->field($model, 'Id_Kasir') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
