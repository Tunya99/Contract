<?php
    include '../nav.php';
?>
<html>
<head>
    <title>Клиенты</title>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.7/css/select.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.4/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="/Contract/css/editor.dataTables.css">
</head>
<body>
    <table id="table-client">
        <thead>
        <tr>
            <th>Фамилия</th>
            <th>Имя</th>
            <th>Отчество</th>
            <th>Серийный номер паспорта</th>
            <th>Дата рождения</th>
            <th>Адрес</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>Фамилия</th>
            <th>Имя</th>
            <th>Отчество</th>
            <th>Серийный номер паспорта</th>
            <th>Дата рождения</th>
            <th>Адрес</th>
        </tr>
        </tfoot>
    </table>
    <script src="/Contract/js/jquery-3.3.1.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.4/js/dataTables.buttons.min.js"></script>
    <script src="/Contract/js/dataTables.editor.js"></script>
    <script src="/Contract/js/dataTableClient.js"></script>
</body>
</html>
