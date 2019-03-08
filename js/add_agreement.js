var tableContract;
var tableClient;
var activeButton = function () {
    $('#add_agreement').prop('disabled', false);
};
var disableButton = function () {$('#add_agreement').prop('disabled', true)};
$(document).ready(function () {
    tableContract = $('#table-contract').DataTable();
    tableClient = $('#table-client').DataTable();
    $('#add_agreement').click(function () {
        var contract_id = tableContract.row('.selected').id().replace('row_', '');
        var client_id = tableClient.row('.selected').id().replace('row_', '');
        jQuery.post('/Contract/functions/add_agreement.php',{contract_id: contract_id, client_id: client_id}, function (data, textStatus, jqXHR) {
            if(textStatus === 'success'){
                $('#result').text('Успешно');
            }
        })
    })
    tableContract.on('select', function ( e, dt, type, indexes ) {
        if ( type === 'row' ) {
            if(tableContract.rows('.selected').data().length !== 0 && tableClient.rows('.selected').data().length !==0){
                activeButton();
            } else {
                disableButton();
            }
        }
    });

    tableContract.on('deselect', function ( e, dt, type, indexes ) {
        if ( type === 'row' ) {
            if(tableContract.rows('.selected').data().length !== 0 && tableClient.rows('.selected').data().length !==0){
                activeButton();
            } else {
                disableButton();
            }
        }
    });

    tableClient.on('select', function ( e, dt, type, indexes ) {
        if ( type === 'row' ) {
            if(tableContract.rows('.selected').data().length !== 0 && tableClient.rows('.selected').data().length!==0){
                activeButton();
            } else {
                disableButton();
            }
        }
    });

    tableClient.on('deselect', function ( e, dt, type, indexes ) {
        if ( type === 'row' ) {
            if(tableContract.rows('.selected').data().length !== 0 && tableClient.rows('.selected').data().length!==0){
                activeButton();
            } else {
                disableButton();
            }
        }
    });
})