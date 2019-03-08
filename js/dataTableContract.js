var editor;

$(document).ready( function () {
    editor = new $.fn.dataTable.Editor({
        ajax: '/Contract/table_contract/table_contract.php',
        table: '#table-contract',
        fields: [ {
            label: "Имя договора:",
            name: "name"
        }, {
            label: "Номер договора:",
            name: "number"
        }, {
            label: "Дата начала действия:",
            name: "date_start"
        }, {
            label: "Дата окончания действия:",
            name: "date_end"
        },{
            label: "Файл",
            name: "file_contract"
        }
        ]
    });

    $('#table-contract').DataTable({
        dom: "Bfrtip",
        ajax: {
            url: '/Contract/table_contract/table_contract.php',
            type: 'POST'
        },
        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.19/i18n/Russian.json'
        },
        serverSide: true,
        columns: [
            {data: "name",},
            {data: "number"},
            {data: "date_start"},
            {data: "date_end"},
            {data: "file_contract"}
        ],
        select: true,
        buttons: [
            { extend: 'edit',   editor: editor },
            { extend: 'remove', editor: editor }
        ],
    });
} );