<?php
    include "../lib/DataTables.php";
    use DataTables\Editor,
        DataTables\Editor\Field,
        DataTables\Editor\Format,
        DataTables\Editor\Mjoin,
        DataTables\Editor\Options,
        DataTables\Editor\Upload,
        DataTables\Editor\Validate,
        DataTables\Editor\ValidateOptions;

Editor::inst( $db, 'agreements' )
    ->fields(
        Field::inst('clients.lastname'),
        Field::inst('clients.firstname'),
        Field::inst('clients.middlename'),
        Field::inst('contracts.name'),
        Field::inst('contracts.number'),
        Field::inst('contracts.file_contract')
    )
    ->leftJoin('clients', 'clients.id','=', 'agreements.id_client')
    ->leftJoin('contracts', 'contracts.id', '=', 'agreements.id_contract')
    ->pkey('id')
    ->process( $_POST )
    ->json()

?>