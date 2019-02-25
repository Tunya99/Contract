<?php
    $host = 'localhost'; // адрес сервера
    $dbuser = 'root'; // имя пользователя
    $dbpassword = ''; // пароль
    $dbname = 'bdcontract'; // имя базы данных
    $link = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
    if (!$link) {
        die('Ошибка соединения: ' .mysqli_error());
    }
    if(isset($_POST['name']) && isset($_POST['number'])){
        if(isset($_FILES['file_contract']['tmp_name'])){
            $uploaddir = '/Contract/contracts/';
            $uploadfile=$uploaddir . basename($_FILES['file_contract']['name']);
            if(move_uploaded_file($_FILES['file_contract']['tmp_name'], $uploadfile)){
            } else {
            }
        }
        echo $_POST['date_start'];
        $res = mysqli_query($link, "INSERT INTO contracts(name, number, date_start, date_end, file_contract) 
          VALUES ('".$_POST['name']."', '".$_POST['number']."', '".$_POST['date_start']."', '".$_POST['date_end']."', '".$_FILES['file_contract']['name']."');");
        if($res == false){
            header("location:/Contract/home.php?error=true");
        }else{
            header("location:/Contract/home.php");;
        }
    }
?>