<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Temp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="temp-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'temp')->textInput() ?>

    <?= $form->field($model, 'time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
