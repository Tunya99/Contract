<?php
session_start();
if(!isset($_SESSION['USER'])){
    header("location:/Contract/index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <link href="/Contract/css/style.css" rel="stylesheet">
</head>
<body>
<div>
    <nav>
        <ul class="topmenu">
            <li><a href="/Contract/home.php">Главная</a></li>
            <li><a href="">О колледже</a></li>
            <li><a href="/Contract/contracts.php">Договора</a>
                <ul class="submenu">
                    <li><a href="/Contract/table_contract/get_contract.php">Посмотреть договора</a></li>
                    <li><a href="/Contract/table_contract/add_contract.php">Добавить договор</a></li>
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
                    <li><a href="/Contract/perform_login.php?logout=true">Выйти</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
</body>
