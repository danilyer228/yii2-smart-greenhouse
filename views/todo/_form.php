<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\time\TimePicker;
use kartik\time\DatePicker;


/* @var $this yii\web\View */
/* @var $model app\models\Todo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="todo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= TimePicker::widget([
    'model' => $model, 
    'attribute' => 'from',
    'options' => ['placeholder' => '00:00'],
    'pluginOptions' => [
        'autoclose'=>true,
        'showMeridian'=>false
    ]
]);?>

      <?= TimePicker::widget([
    'model' => $model, 
    'attribute' => 'to',
    'options' => ['placeholder' => '00:00'],
    'pluginOptions' => [
        'autoclose'=>true,
        'showMeridian'=>false
    ]
]);?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>






</div>