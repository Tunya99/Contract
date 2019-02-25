<?php
    include '../nav.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Добавить договор</title>
</head>
<body>
    <form enctype="multipart/form-data" action="/Contract/functions/add_contract.php" method="post">
        <input type="text" name="name">
        <input type="text" name="number">
        <input type="date" name="date_start">
        <input type="date" name="date_end">
        <input type="file" name="file_contract">
        <input type="submit" value="Добавить">
    </form>
</body>
</html>
