<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use app\models\Device;
use app\models\Todo;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'Панель управления';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Панель управления</title>
</head>
<body>
<div class="mytext">
		
	<div class="temper block">
		<br>

		Температура: 
		<br>
		<div id="temp">1</div>
	</div>

	<div class="vlaga block">
		<br>
		Влажность: 
		<br>
		<div id="vlaga">1</div>
	</div>
	
	<? $form = ActiveForm::begin();?>
		<h1>Пульт управления</h1>
		<?php 
		$devices = Device::find()->all();
		foreach($devices as $key => $device): ?>
			<div class="block">
				<h2><?= Todo::findOne($device)['task']?></h2>
				<!-- <?= Html::submitButton('On', ['class' => 'on', 'inputOptions' => ['name' => 'submit','value' => $device['command_on']]]); ?>
				<?= Html::submitButton('Off', ['class' => 'on',  'inputOptions' => ['name' => 'submit','value' => $device['command_off']]]); ?> -->
				<button type="submit" name="command", value="<?= $device['command_on'] ?>" class="on">On</button>
				<button type="submit" name="command", value="<?= $device['command_off'] ?>" class="on">Off</button>
			</div>
		<? endforeach;?>
		<? ActiveForm::end();?> 
	</form>	
</div>