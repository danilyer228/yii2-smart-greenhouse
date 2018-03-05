<?php
$error = '';
session_start();

if(isset($_POST['sign_out'])){
	session_destroy();
}

if(!isset($_POST['submit'])) {
	if($_POST['login'] !== 'Admin' or $_POST['password'] !== '123'){
		$error = "Неверный логин или пароль. Попробуйте ещё раз.";
	} 
	if($_POST['login'] == 'Admin' && $_POST['password'] == '123') {
		$_SESSION['user'] = $_POST['login'];
		header('Location: index.php');
	}
}

echo "Ошибка: $error";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Панель управления</title>
	<link rel="stylesheet" href="style.css">
	<style>
		#line{
			width: 360px;
			height: 90px;
			margin-top: 30px;
			border-radius: 15px;
			font-size: 40px;
		}
		
		#signIn{
			width: 180px;
			height: 90px;
			margin-top: 30px;
			border-radius: 15px;
			font-size: 40px;
		}
		
.main{
	margin: 90px auto;
	width: 80%;
	height: 90%;
	min-height: 900px;
	background-color: gray;
	opacity: 0.6;
	text-align: center;
	border-radius: 40px;
}
	</style>
</head>
<body>
<div class="header">
	<h1>Умная теплица</h1>
	<h2>Вход в панель управления</h2>
</div>
	<div class="main">
		<div class="fblock">
			<form action="" method="post" align="center" style="background-color: white; margin-top: 60px; border-radius: 15px;">
			<h2>Вход</h2>
				<input type="text" name="login" id="line"> <br>
				<input type="password" name="password" id="line"> <br>
				<input type="submit" name="signIn" id="signIn" value="Войти">
			</form>
		</div>
	</div>
</body>
</html>