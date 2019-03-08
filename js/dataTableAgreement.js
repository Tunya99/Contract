var editor;

$(document).ready( function () {
    editor = new $.fn.dataTable.Editor({
        ajax: '/Contract/table_agreement/table_agreement.php',
        table: '#table-agreement',
        fields: [ {
            label: "Фамилия:",
            name: "clients.lastname"
        }, {
            label: "Имя:",
            name: "clients.firstname"
        }, {
            label: "Отчество:",
            name: "clients.middlename"
        }, {
            label: "Имя договора:",
            name: "contracts.name"
        },{
            label: "Номер договора:",
            name: "contracts.number"
        },{
            label: "Файл:",
            name: "contracts.file_contract"
        }
        ]
    });

    $('#table-agreement').DataTable({
        dom: "Bfrtip",
        ajax: {
            url: '/Contract/table_agreement/table_agreement.php',
            type: 'POST'
        },
        language: {
            url: '//cdn.datatables.net/plug-ins/1.10.19/i18n/Russian.json'
        },
        processing: true,
        serverSide: true,
        columns: [
            {data: 'clients.lastname'},
            {data: 'clients.firstname'},
            {data: 'clients.middlename'},
            {data: "contracts.name"},
            {data: "contracts.number"},
            {data: "contracts.file_contract"}
        ],
        select: true,
        buttons: [
            { extend: 'remove', editor: editor }
        ],
    });
} );