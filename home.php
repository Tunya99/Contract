<?php 
    include 'nav.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Главная</title>
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>
<?php if(isset($_GET['error'])){
    echo 'Операция произведена с ошибкой';
}?>
</div>
<div class="block-colleage">
    <img width="100%" height="400" src="https://cs10.pikabu.ru/post_img/big/2018/02/27/7/1519728910159193202.png">
</div>
<div>
    <center> <button type="button" class="btntop" onClick='location.href="contracts.php"'>Заключить договор</button></center>
</div>

</body>
</html>