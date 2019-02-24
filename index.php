<?php
	session_start();
	if(isset($_SESSION['USER'])){
		header("location:home.php");
	}
?>﻿
<!DOCTYPE html>
<html>
	<head>
        <title>Вход</title>
    <link href="css/index.css" rel="stylesheet">
	</head>
		<body background='bg.jpg'>
	</body>
	<form action="perform_login.php" method='POST'>
		<input type='text' name='email'>
		<input type='password' name='password'>
		<input type='submit' value='Log In'>
	</form>
	<body background='bg.jpg'>
	</body>
</html>