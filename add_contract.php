<?php
    include 'nav.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Добавить договор</title>
</head>
<body>
    <form action="add_contract_perform.php" method="post">
        <input type="text" name="name">
        <input type="text" name="number">
        <input type="date" name="date_start">
        <input type="date" name="date_end">
        <input type="file" name="file_contract">
    </form>
</body>
</html>
