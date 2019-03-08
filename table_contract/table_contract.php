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

Editor::inst( $db, 'contracts' )
    ->fields(
        Field::inst( 'name' ),
        Field::inst( 'number' ),
        Field::inst( 'date_start' ),
        Field::inst( 'date_end' ),
        Field::inst( 'file_contract' )
            ->validator( Validate::notEmpty(ValidateOptions::inst()
                ->message('Need')))
    )
    ->pkey('id')
    ->process( $_POST )
    ->json()

?>