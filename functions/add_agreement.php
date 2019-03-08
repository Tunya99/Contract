<?php
    if(isset($_POST['contract_id']) && isset($_POST['client_id'])){
        $host = 'localhost'; // адрес сервера
        $dbuser = 'root'; // имя пользователя
        $dbpassword = ''; // пароль
        $dbname = 'bdcontract'; // имя базы данных
        $link = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
        if (!$link) {
            die('Ошибка соединения: ' .mysqli_error());
        }
        $res = mysqli_query($link, "INSERT INTO agreements(id_client, id_contract) VALUES ('".$_POST['client_id']."', '".$_POST['contract_id']."');");
        if($res == false){
            header("location:/Contract/home.php?error=true");
        }else{
            header("location:/Contract/home.php");;
        }
    }
?>