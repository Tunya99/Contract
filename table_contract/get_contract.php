<?php
    include '../nav.php';
?>
<html>
<head>
    <title>Договора</title>
</head>
<body>
    <?php
        $host = 'localhost'; // адрес сервера
        $dbuser = 'root'; // имя пользователя
        $dbpassword = ''; // пароль
        $dbname = 'bdcontract'; // имя базы данных
        $link = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
        if (!$link) {
            die('Ошибка соединения: ' .mysqli_error());
        }
        $res = mysqli_query($link, "SELECT * FROM contracts;");
        echo "<center><table>";
        echo "<tr><th>Имя договора</th><th>Номер договора</th><th>Дата начала действия</th><th>Дата окончания действия</th><th>Ссылка на файл</th></tr>";
        while($row = mysqli_fetch_array($res)){
            echo "<tr><td>".$row['name']."</td><td>".$row['number']."</td><td>".$row['date_start']."</td><td>".$row['date_end']."</td><td><a href='/Contract/contracts/".$row['file_contract']."'>Ссылка</a></td></tr>";
        }
        echo "</table></center>";
        mysqli_close($link);
    ?>
</body>
</html>
