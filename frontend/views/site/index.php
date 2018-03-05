<?php

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
<div>
	<div class="main">
		<div class="fblock">
				<div class="buttons-block">
				<h3>Свет(1)</h3>
					<p><a class="btn btn-success" href="?num=1">ON</a></p>
					<p><a class="btn btn-danger" href="?num=2">OFF</a></p>
				</div>
				<div class="buttons-block">
				<h3>Сигнализация</h3>
					<p><a class="btn btn-success" href="?num=3">ON</a></p>
					<p><a class="btn btn-danger" href="?num=4">OFF</a></p>
				</div>
				<div class="buttons-block">
				<h3>Подогрев</h3>
					<p><a class="btn btn-success" href="?num=5">ON</a></p>
					<p><a class="btn btn-danger" href="?num=6">OFF</a></p>
				</div>
				<div class="buttons-block">
				<h3>Свет(2)</h3>
					<p><a class="btn btn-success" href="?num=7">ON</a></p>
					<p><a class="btn btn-danger" href="?num=8">OFF</a></p>
			</div>
		</div>
	</div>
</div>