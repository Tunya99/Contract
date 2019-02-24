<?php
session_start();
if(!isset($_SESSION['USER'])){
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Главная</title>
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>
<div>
    <nav>
        <ul class="topmenu">
            <li><a href="home.php">Главная</a></li>
            <li><a href="">О колледже</a></li>
            <li><a href="contracts.php">Договора</a>
                <ul class="submenu">
                    <li><a href="">Посмотреть договора</a></li>
                    <li><a href="add_contract.php">Заключить даговор</a></li>
                </ul>
            </li>
            <li><a href="">Помощь</a>
                <ul class="submenu">
                    <li><a href="">Порядок заключения договоров</a></li>
                </ul>
            </li>
            <li><a href="">Контакты</a></li>
            <li class='user_preference'><a href=""><?php echo $_SESSION['EMAIL']?></a>
                <ul class="submenu">
                    <li><a href="perform_login.php?logout=true">Выйти</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
</body>
