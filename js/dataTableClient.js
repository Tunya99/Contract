var editor;

$(document).ready( function () {
    editor = new $.fn.dataTable.Editor({
        ajax: '/Contract/table_client/table_client.php',
        table: '#table-client',
        fields: [ {
            label: "Фамилия:",
            name: "lastname"
        }, {
            label: "Имя:",
            name: "firstname"
        }, {
            label: "Отчество:",
            name: "middlename"
        }, {
            label: "Серийный номер паспорта:",
            name: "passport"
        },{
            label: "Дата рождения:",
            name: "birthday"
        },{
            label: "Адрес:",
            name: "addres"
        }
        ]
    });

    $('#table-client').DataTable({
        dom: "Bfrtip",
        ajax: {
            url: '/Contract/table_client/table_client.php',
            type: 'POST'
        },
        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.19/i18n/Russian.json'
        },
        serverSide: true,
        columns: [
            {data: "lastname",},
            {data: "firstname"},
            {data: "middlename"},
            {data: "passport"},
            {data: "birthday"},
            {data: "addres"}
        ],
        select: true,
        buttons: [
            { extend: 'edit',   editor: editor },
            { extend: 'remove', editor: editor }
        ],
    });
} );