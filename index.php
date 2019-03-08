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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
        <link rel="stylesheet" href="css/login.css">
    <link href="css/index.css" rel="stylesheet">
	</head>
		<body background='bg.jpg'>
    <div class="grad"></div>
    <div class="header">
        <div>Tunya</div>
    </div>
	<form class="login" action="perform_login.php" method='POST'>
		<input type='text' name='email'>
		<input type='password' name='password'>
		<input type='submit' value='Log In'>
	</form>
	</body>
</html>