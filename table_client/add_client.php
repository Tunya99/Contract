<?php
    include '../nav.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Добавить клиента</title>
</head>
<body>
    <form enctype="multipart/form-data" action="/Contract/functions/add_client.php" method="post">
        <input type="text" name="firstname">
        <input type="text" name="lastname">
        <input type="text" name="middlename">
        <input type="text" name="passport">
        <input type="date" name="birthday">
        <input type="text" name="addres">
        <input type="submit" value="Добавить">
    </form>
</body>
</html>
