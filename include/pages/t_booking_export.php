<?php
			$optionsArray = array( 'totals' => array( 't_booking_id' => array( 'totalsType' => '' ),
't_booking_no' => array( 'totalsType' => '' ),
't_booking_from_date' => array( 'totalsType' => '' ),
't_booking_to_date' => array( 'totalsType' => '' ),
't_booking_from_time' => array( 'totalsType' => '' ),
't_booking_to_time' => array( 'totalsType' => '' ),
't_booking_destination' => array( 'totalsType' => '' ),
't_booking_remarks' => array( 'totalsType' => '' ),
'add_user' => array( 'totalsType' => '' ),
'add_date' => array( 'totalsType' => '' ),
'edit_user' => array( 'totalsType' => '' ),
'edit_date' => array( 'totalsType' => '' ),
't_booking_status' => array( 'totalsType' => '' ),
'm_vehicle_id' => array( 'totalsType' => '' ),
'fr_date' => array( 'totalsType' => '' ),
'to_dt' => array( 'totalsType' => '' ),
't_booking_user' => array( 'totalsType' => '' ),
'm_vehicle_driver' => array( 'totalsType' => '' ),
'Voucher' => array( 'totalsType' => '' ),
'flag' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 't_booking_user',
'add_user',
'add_date',
'edit_user',
'edit_date',
'm_vehicle_id',
't_booking_destination',
't_booking_remarks',
't_booking_from_date',
't_booking_to_date',
'fr_date',
'to_dt',
'm_vehicle_driver' ),
'exportFields' => array( 'add_user',
'add_date',
'edit_user',
'edit_date',
'm_vehicle_id',
't_booking_destination',
't_booking_remarks',
't_booking_from_date',
't_booking_to_date',
'fr_date',
'to_dt',
't_booking_user',
'm_vehicle_driver' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 't_booking_user' => array( 'export_field2' ),
'add_user' => array( 'export_field6' ),
'add_date' => array( 'export_field7' ),
'edit_user' => array( 'export_field8' ),
'edit_date' => array( 'export_field9' ),
'm_vehicle_id' => array( 'export_field11' ),
't_booking_destination' => array( 'export_field12' ),
't_booking_remarks' => array( 'export_field13' ),
't_booking_from_date' => array( 'export_field' ),
't_booking_to_date' => array( 'export_field1' ),
'fr_date' => array( 'export_field3' ),
'to_dt' => array( 'export_field4' ),
'm_vehicle_driver' => array( 'export_field5' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field11',
'export_field12',
'export_field13',
'export_field',
'export_field1',
'export_field3',
'export_field4',
'export_field2',
'export_field5' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_field11' => 'grid',
'export_field12' => 'grid',
'export_field13' => 'grid',
'export_field' => 'grid',
'export_field1' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field2' => 'grid',
'export_field5' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field2',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field11',
'export_field12',
'export_field13',
'export_field',
'export_field1',
'export_field3',
'export_field4',
'export_field5' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field11',
'export_field12',
'export_field13',
'export_field',
'export_field1',
'export_field3',
'export_field4',
'export_field2',
'export_field5' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field2' => array( 'field' => 't_booking_user',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'add_user',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'add_date',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'edit_user',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'edit_date',
'type' => 'export_field' ),
'export_field11' => array( 'field' => 'm_vehicle_id',
'type' => 'export_field' ),
'export_field12' => array( 'field' => 't_booking_destination',
'type' => 'export_field' ),
'export_field13' => array( 'field' => 't_booking_remarks',
'type' => 'export_field' ),
'export_field' => array( 'field' => 't_booking_from_date',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 't_booking_to_date',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'fr_date',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'to_dt',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'm_vehicle_driver',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>