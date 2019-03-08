<?php
    include '../nav.php';
?>
<span id="result"></span>
<center><h1>Договора</h1></center>
<hr/>
<?php
    include '../table_contract/table.php';

?>
<center><h1>Клиенты</h1></center>
<hr/>
<?php
    include '../table_client/table.php';
?>
<center> <button id="add_agreement" disabled="true">Заключить договор</button></center>
<script src="/Contract/js/add_agreement.js"></script>