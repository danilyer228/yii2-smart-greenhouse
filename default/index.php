<?php

require('functions.php');

session_start();

if(!isset($_SESSION['user'])) {
	header("Location: auth.php");
}


if(isset($_POST['light1on'])) {
	write('1');
}

if(isset($_POST['light1off'])) {
	write('2');
}

if(isset($_POST['light2on'])) {

}

if(isset($_POST['light2off'])) {
	
}

if(isset($_POST['warmon'])) {
	
}

if(isset($_POST['warmoff'])) {
	
}

if(isset($_POST['signon'])) {
	
}

if(isset($_POST['signoff'])) {
	
}

var_dump($_POST);
$_POST = NULL;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Панель управления</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
	<h1>Умная теплица</h1>
	<h2>Панель управления</h2>
</div>
	<div class="main">
	<h1>Добро пожаловать, <?=$_SESSION['user']?></h1>
	<form method="post" action="auth.php"> <input type="submit" name="sign_out" value="Выход"></form>
		<div class="fblock">
			<form action="" method="post" class="left">
			<h2>Свет1</h2>
				<input type="submit" value="ON" name="light1on" class="button24">
				<input type="submit" value="OFF" name="light1off" class="button25">
			</form>
			<form action="" method="post">
			<h2>Сигнализация</h2>
				<input type="submit" value="ON" name="signon" class="button24">
				<input type="submit" value="OFF" name="signoff" class="button25">
			</form>
			<form action="" method="post" class="right">
			<h2>Подогрев</h2>
				<input type="submit" value="ON" name="warmon" class="button24">
				<input type="submit" value="OFF" name="warmoff" class="button25">
			</form>
			<form action="" method="post" class="left">
			<h2>Свет2</h2>
				<input type="submit" value="ON" name="light2on" class="button24">
				<input type="submit" value="OFF" name="light2off" class="button25">
		</form>
		</div>
	</div>

	<div class="footer"> 

	</div>
</body>
</html>
