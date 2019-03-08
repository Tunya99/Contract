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

Editor::inst( $db, 'clients' )
    ->fields(
        Field::inst( 'lastname' ),
        Field::inst( 'firstname' ),
        Field::inst( 'middlename' ),
        Field::inst( 'passport' ),
        Field::inst( 'birthday' ),
        Field::inst('addres')
    )
    ->pkey('id')
    ->process( $_POST )
    ->json()

?>