<?php
			$optionsArray = array( 'totals' => array( 't_meeting_id' => array( 'totalsType' => '' ),
't_meeting_no' => array( 'totalsType' => '' ),
't_meeting_roomid' => array( 'totalsType' => '' ),
't_meeting_user' => array( 'totalsType' => '' ),
't_meeting_desc' => array( 'totalsType' => '' ),
't_meeting_from_date' => array( 'totalsType' => '' ),
't_meeting_to_date' => array( 'totalsType' => '' ),
'user_participant_list' => array( 'totalsType' => '' ),
't_meeting_participant_type' => array( 'totalsType' => '' ),
't_meeting_total_participant' => array( 'totalsType' => '' ),
't_meeting_isminuman' => array( 'totalsType' => '' ),
't_meeting_issnack' => array( 'totalsType' => '' ),
't_meeting_ismakan' => array( 'totalsType' => '' ),
't_meeting_recurring_flag' => array( 'totalsType' => '' ),
't_meeting_status' => array( 'totalsType' => '' ),
'fr_date' => array( 'totalsType' => '' ),
'to_dt' => array( 'totalsType' => '' ),
'fr_time' => array( 'totalsType' => '' ),
'to_time' => array( 'totalsType' => '' ),
'meet_approve' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 't_meeting_user',
't_meeting_desc',
'user_participant_list',
't_meeting_participant_type',
't_meeting_total_participant',
't_meeting_roomid',
't_meeting_from_date',
't_meeting_to_date' ),
'exportFields' => array( 't_meeting_user',
't_meeting_desc',
'user_participant_list',
't_meeting_participant_type',
't_meeting_total_participant',
't_meeting_roomid',
't_meeting_from_date',
't_meeting_to_date' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 't_meeting_user' => array( 'export_field' ),
't_meeting_desc' => array( 'export_field1' ),
'user_participant_list' => array( 'export_field2' ),
't_meeting_participant_type' => array( 'export_field3' ),
't_meeting_total_participant' => array( 'export_field4' ),
't_meeting_roomid' => array( 'export_field10' ),
't_meeting_from_date' => array( 'export_field6' ),
't_meeting_to_date' => array( 'export_field7' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field10',
'export_field6',
'export_field7' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field' => 'grid',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field10' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field10',
'export_field6',
'export_field7' ) ),
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
'items' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field10',
'export_field6',
'export_field7' ) ) ),
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
'export_field' => array( 'field' => 't_meeting_user',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 't_meeting_desc',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'user_participant_list',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 't_meeting_participant_type',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 't_meeting_total_participant',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 't_meeting_roomid',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 't_meeting_from_date',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 't_meeting_to_date',
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