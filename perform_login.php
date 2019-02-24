<?php 
	session_start();
	$host = 'localhost'; // адрес сервера
	$dbuser = 'root'; // имя пользователя
	$dbpassword = ''; // пароль
	$dbname = 'zacldog'; // имя базы данных
	$dbarticles = 'Dogovora'; // название таблицы
	$link = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
	if (!$link) {
		die('Ошибка соединения: ' .mysql_error());
	}
	if(isset($_POST['email']) && isset($_POST['password'])){
		echo 'LOL';
		$res = mysqli_query($link, "SELECT * FROM users where email = '".$_POST['email']."' and password = '".$_POST['password']."'; ");
		$row_cnt = mysqli_num_rows($res); 
		if($row_cnt == 0) {
			header("location:index.php");
		} else {
			$_SESSION['USER']=true;
			$_SESSION['EMAIL']=$_POST['email'];
			header("location:home.php");
		}
	}
	if(isset($_GET['logout'])){
	    session_destroy();
	    header("location:index.php");
    }
?>