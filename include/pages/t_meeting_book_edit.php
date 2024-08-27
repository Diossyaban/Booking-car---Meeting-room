<?php
			$optionsArray = array( 'details' => array( 'ListRoom' => array( 'displayPreview' => 2,
'previewPageId' => '' ) ),
'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 't_meeting_desc',
'user_participant_list',
't_meeting_participant_type',
't_meeting_total_participant',
't_meeting_user',
't_meeting_from_date',
't_meeting_to_date',
't_meeting_roomid' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'updateOnEditFields' => array(  ),
'fieldItems' => array( 't_meeting_desc' => array( 'integrated_edit_field1' ),
'user_participant_list' => array( 'integrated_edit_field2' ),
't_meeting_participant_type' => array( 'integrated_edit_field3' ),
't_meeting_total_participant' => array( 'integrated_edit_field4' ),
't_meeting_user' => array( 'integrated_edit_field' ),
't_meeting_from_date' => array( 'integrated_edit_field6' ),
't_meeting_to_date' => array( 'integrated_edit_field7' ),
't_meeting_roomid' => array( 'integrated_edit_field5' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => true,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'edit_message' ),
'below-grid' => array( 'edit_save',
'edit_back_list',
'edit_close',
'hamburger' ),
'top' => array( 'edit_header' ),
'grid' => array( 'section' ),
'section' => array( 'integrated_edit_field',
'integrated_edit_field4',
'integrated_edit_field3',
'integrated_edit_field2',
'integrated_edit_field1',
'integrated_edit_field7',
'integrated_edit_field6',
'integrated_edit_field5' ) ),
'formXtTags' => array( 'above-grid' => array( 'message_block' ) ),
'itemForms' => array( 'edit_message' => 'above-grid',
'edit_save' => 'below-grid',
'edit_back_list' => 'below-grid',
'edit_close' => 'below-grid',
'hamburger' => 'below-grid',
'edit_header' => 'top',
'section' => 'grid',
'integrated_edit_field' => 'section',
'integrated_edit_field4' => 'section',
'integrated_edit_field3' => 'section',
'integrated_edit_field2' => 'section',
'integrated_edit_field1' => 'section',
'integrated_edit_field7' => 'section',
'integrated_edit_field6' => 'section',
'integrated_edit_field5' => 'section' ),
'itemLocations' => array( 'section' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field' => array( 'location' => 'section',
'cellId' => 'c1' ),
'integrated_edit_field4' => array( 'location' => 'section',
'cellId' => 'c' ),
'integrated_edit_field3' => array( 'location' => 'section',
'cellId' => 'c2' ),
'integrated_edit_field2' => array( 'location' => 'section',
'cellId' => 'c3' ),
'integrated_edit_field1' => array( 'location' => 'section',
'cellId' => 'c4' ),
'integrated_edit_field7' => array( 'location' => 'section',
'cellId' => 'c6' ),
'integrated_edit_field6' => array( 'location' => 'section',
'cellId' => 'c7' ),
'integrated_edit_field5' => array( 'location' => 'section',
'cellId' => 'c8' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'edit_header' => array( 'edit_header' ),
'hamburger' => array( 'hamburger' ),
'edit_reset' => array( 'edit_reset' ),
'edit_message' => array( 'edit_message' ),
'edit_save' => array( 'edit_save' ),
'edit_back_list' => array( 'edit_back_list' ),
'edit_close' => array( 'edit_close' ),
'edit_view' => array( 'edit_view' ),
'integrated_edit_field' => array( 'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field5' ),
'section' => array( 'section' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'section' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ),
'section' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 0 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field4' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 0 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field6' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 0 ),
'rows' => array( 6 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field7' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c8' => array( 'cols' => array( 0 ),
'rows' => array( 7 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field5' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 0 ),
'rows' => array( 8 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 9 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false ),
'misc' => array( 'type' => 'edit',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'edit' => array( 'updateSelected' => false ) );
			$pageArray = array( 'id' => 'edit',
'type' => 'edit',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'edit-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_message' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'edit-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_save',
'edit_back_list',
'edit_close' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'hamburger' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'edit-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'section' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c4' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c3' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c2' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c7' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c6' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c8' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c5' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field' ) ),
'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field4' ) ),
'c2' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field3' ) ),
'c3' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field2' ) ),
'c4' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field1' ) ),
'c5' => array( 'model' => 'c1',
'items' => array(  ) ),
'c6' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field7' ) ),
'c7' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field6' ) ),
'c8' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field5' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'edit_header' => array( 'type' => 'edit_header',
'title' => array( 'page' => 'edit',
'table' => 't_meeting_book',
'type' => 7 ),
'mobileDisplay' => '' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'edit_reset',
'edit_view' ) ),
'edit_reset' => array( 'type' => 'edit_reset' ),
'edit_message' => array( 'type' => 'edit_message' ),
'edit_save' => array( 'type' => 'edit_save' ),
'edit_back_list' => array( 'type' => 'edit_back_list' ),
'edit_close' => array( 'type' => 'edit_close' ),
'edit_view' => array( 'type' => 'edit_view' ),
'integrated_edit_field1' => array( 'field' => 't_meeting_desc',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field2' => array( 'field' => 'user_participant_list',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field3' => array( 'field' => 't_meeting_participant_type',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field4' => array( 'field' => 't_meeting_total_participant',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field' => array( 'field' => 't_meeting_user',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field6' => array( 'field' => 't_meeting_from_date',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field7' => array( 'field' => 't_meeting_to_date',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field5' => array( 'field' => 't_meeting_roomid',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'section' => array( 'type' => 'section',
'title' => array( 'text' => 'New Section',
'type' => 0 ),
'location' => 'section',
'bsStyle' => 'default',
'panelType' => 3 ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>