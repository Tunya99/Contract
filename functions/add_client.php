<?php
    $host = 'localhost'; // адрес сервера
    $dbuser = 'root'; // имя пользователя
    $dbpassword = ''; // пароль
    $dbname = 'bdcontract'; // имя базы данных
    $link = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
    if (!$link) {
        die('Ошибка соединения: ' .mysqli_error());
    }
    if(isset($_POST['firstname']) && isset($_POST['lastname'])){
        $res = mysqli_query($link, "INSERT INTO clients(firstname, lastname, middlename, passport, birthday, addres) 
          VALUES ('".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['middlename']."', '".$_POST['passport']."', '".$_POST['birthday']."', '".$_POST['addres']."');");
        if($res == false){
            header("location:/Contract/home.php?error=true");
        }else{
            header("location:/Contract/home.php");;
        }
    }
?>