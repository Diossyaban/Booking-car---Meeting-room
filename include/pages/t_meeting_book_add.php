<?php
			$optionsArray = array( 'details' => array( 'ListRoom' => array( 'displayPreview' => 2,
'previewPageId' => '' ) ),
'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 't_meeting_user',
't_meeting_desc',
't_meeting_to_date',
't_meeting_participant_type',
't_meeting_from_date',
't_meeting_roomid',
'user_participant_list',
't_meeting_total_participant',
'meet_approve' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 't_meeting_user' => array( 'integrated_edit_field2' ),
't_meeting_desc' => array( 'integrated_edit_field3' ),
't_meeting_to_date' => array( 'integrated_edit_field4' ),
't_meeting_participant_type' => array( 'integrated_edit_field10' ),
't_meeting_from_date' => array( 'integrated_edit_field' ),
't_meeting_roomid' => array( 't_meeting_roomid' ),
'user_participant_list' => array( 'user_participant_list' ),
't_meeting_total_participant' => array( 't_meeting_total_participant' ),
'meet_approve' => array( 'meet_approve' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'add_message' ),
'below-grid' => array( 'add_save',
'add_reset',
'add_back_list',
'add_cancel' ),
'top' => array( 'add_header' ),
'grid' => array( 'section' ),
'section' => array( 'integrated_edit_field2',
't_meeting_total_participant',
'integrated_edit_field3',
't_meeting_roomid',
'meet_approve',
'integrated_edit_field10',
'integrated_edit_field4',
'user_participant_list',
'integrated_edit_field' ) ),
'formXtTags' => array( 'above-grid' => array( 'message_block' ) ),
'itemForms' => array( 'add_message' => 'above-grid',
'add_save' => 'below-grid',
'add_reset' => 'below-grid',
'add_back_list' => 'below-grid',
'add_cancel' => 'below-grid',
'add_header' => 'top',
'section' => 'grid',
'integrated_edit_field2' => 'section',
't_meeting_total_participant' => 'section',
'integrated_edit_field3' => 'section',
't_meeting_roomid' => 'section',
'meet_approve' => 'section',
'integrated_edit_field10' => 'section',
'integrated_edit_field4' => 'section',
'user_participant_list' => 'section',
'integrated_edit_field' => 'section' ),
'itemLocations' => array( 'section' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field2' => array( 'location' => 'section',
'cellId' => 'c1' ),
't_meeting_total_participant' => array( 'location' => 'section',
'cellId' => 'c2' ),
'integrated_edit_field3' => array( 'location' => 'section',
'cellId' => 'c4' ),
't_meeting_roomid' => array( 'location' => 'section',
'cellId' => 'c6' ),
'meet_approve' => array( 'location' => 'section',
'cellId' => 'c9' ),
'integrated_edit_field10' => array( 'location' => 'section',
'cellId' => 'c12' ),
'integrated_edit_field4' => array( 'location' => 'section',
'cellId' => 'c13' ),
'user_participant_list' => array( 'location' => 'section',
'cellId' => 'c16' ),
'integrated_edit_field' => array( 'location' => 'section',
'cellId' => 'c17' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'add_header' => array( 'add_header' ),
'add_back_list' => array( 'add_back_list' ),
'add_cancel' => array( 'add_cancel' ),
'add_message' => array( 'add_message' ),
'add_save' => array( 'add_save' ),
'add_reset' => array( 'add_reset' ),
'integrated_edit_field' => array( 'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field10',
'integrated_edit_field',
't_meeting_roomid',
'user_participant_list',
't_meeting_total_participant',
'meet_approve' ),
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
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 't_meeting_total_participant' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 't_meeting_roomid' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c16' => array( 'cols' => array( 0 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'user_participant_list' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c17' => array( 'cols' => array( 1 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c14' => array( 'cols' => array( 0 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c15' => array( 'cols' => array( 1 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c12' => array( 'cols' => array( 0 ),
'rows' => array( 6 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field10' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c13' => array( 'cols' => array( 1 ),
'rows' => array( 6 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field4' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c10' => array( 'cols' => array( 0 ),
'rows' => array( 7 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c11' => array( 'cols' => array( 1 ),
'rows' => array( 7 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c8' => array( 'cols' => array( 0 ),
'rows' => array( 8 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c9' => array( 'cols' => array( 1 ),
'rows' => array( 8 ),
'tags' => array(  ),
'items' => array( 'meet_approve' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 2,
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
'misc' => array( 'type' => 'add',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'add',
'type' => 'add',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'add-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_message' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'add-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_save',
'add_reset',
'add_back_list',
'add_cancel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'add-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'section' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => true,
'separateLabels' => false ),
'section' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c4' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c3' ),
array( 'cell' => 'c5' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c2' ),
array( 'cell' => 'c6' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ),
array( 'cell' => 'c7' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c16' ),
array( 'cell' => 'c17' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c14' ),
array( 'cell' => 'c15' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c12' ),
array( 'cell' => 'c13' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c10' ),
array( 'cell' => 'c11' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c8' ),
array( 'cell' => 'c9' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field2' ) ),
'c' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c1',
'items' => array( 't_meeting_total_participant' ) ),
'c3' => array( 'model' => 'c1',
'items' => array(  ) ),
'c4' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field3' ) ),
'c5' => array( 'model' => 'c1',
'items' => array(  ) ),
'c6' => array( 'model' => 'c1',
'items' => array( 't_meeting_roomid' ) ),
'c7' => array( 'model' => 'c1',
'items' => array(  ) ),
'c8' => array( 'model' => 'c1',
'items' => array(  ) ),
'c9' => array( 'model' => 'c1',
'items' => array( 'meet_approve' ) ),
'c10' => array( 'model' => 'c1',
'items' => array(  ) ),
'c11' => array( 'model' => 'c1',
'items' => array(  ) ),
'c12' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field10' ) ),
'c13' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field4' ) ),
'c14' => array( 'model' => 'c1',
'items' => array(  ) ),
'c15' => array( 'model' => 'c1',
'items' => array(  ) ),
'c16' => array( 'model' => 'c1',
'items' => array( 'user_participant_list' ) ),
'c17' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'add_header' => array( 'type' => 'add_header',
'title' => array( 'page' => 'add',
'table' => 't_meeting_book',
'type' => 7 ),
'customCSS' => '/* Put  your custom CSS code here */

.btn-primary {
    color: #fff;
    background-color: #BC9C22;
    border-color: transparent;
}
.btn-primary:hover, .btn-primary:focus, .btn-group.open .dropdown-toggle.btn-primary {
    background-color: #e7c235;
    border-color: #b6a35d;
}
.panel-info > .panel-heading .btn.btn-info {
    color: #fff;
    background-color: #BC9C22;
    border-color: transparent;
}
.alert-warning {
    background-color: #BC9C22;
    border-color: #9d8426;
    color: #fff;
}
.panel-info > .panel-heading .btn.btn-info:not(:hover) {
    background-color: #BC9C22;
}
.label {
  min-width: 100px !important;
  display: inline-block !important
}
' ),
'add_back_list' => array( 'type' => 'add_back_list' ),
'add_cancel' => array( 'type' => 'add_cancel' ),
'add_message' => array( 'type' => 'add_message' ),
'add_save' => array( 'type' => 'add_save',
'customCSS' => '/* Put  your custom CSS code here */

.btn-primary {
    color: #fff;
    background-color: #BC9C22;
    border-color: transparent;
}
.btn-primary:hover, .btn-primary:focus, .btn-group.open .dropdown-toggle.btn-primary {
    background-color: #e7c235;
    border-color: #b6a35d;
}
.panel-info > .panel-heading .btn.btn-info {
    color: #fff;
    background-color: #BC9C22;
    border-color: transparent;
}
.alert-warning {
    background-color: #BC9C22;
    border-color: #9d8426;
    color: #fff;
}
.panel-info > .panel-heading .btn.btn-info:not(:hover) {
    background-color: #BC9C22;
}
.label {
  min-width: 100px !important;
  display: inline-block !important
}
' ),
'add_reset' => array( 'type' => 'add_reset' ),
'integrated_edit_field2' => array( 'field' => 't_meeting_user',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field3' => array( 'field' => 't_meeting_desc',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field4' => array( 'field' => 't_meeting_to_date',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field10' => array( 'field' => 't_meeting_participant_type',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'integrated_edit_field' => array( 'field' => 't_meeting_from_date',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'section' => array( 'type' => 'section',
'title' => array( 'type' => 0,
'text' => 'Meeting' ),
'location' => 'section',
'bsStyle' => 'default',
'panelType' => 3 ),
't_meeting_roomid' => array( 'field' => 't_meeting_roomid',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'user_participant_list' => array( 'field' => 'user_participant_list',
'type' => 'integrated_edit_field',
'orientation' => 1,
'customCSS' => '/* Put  your custom CSS code here */

.btn-primary {
    color: #fff;
    background-color: #BC9C22;
    border-color: transparent;
}
.btn-primary:hover, .btn-primary:focus, .btn-group.open .dropdown-toggle.btn-primary {
    background-color: #e7c235;
    border-color: #b6a35d;
}
.panel-info > .panel-heading .btn.btn-info {
    color: #fff;
    background-color: #BC9C22;
    border-color: transparent;
}
.alert-warning {
    background-color: #BC9C22;
    border-color: #9d8426;
    color: #fff;
}
.panel-info > .panel-heading .btn.btn-info:not(:hover) {
    background-color: #BC9C22;
}
.label {
  min-width: 100px !important;
  display: inline-block !important
}
' ),
't_meeting_total_participant' => array( 'field' => 't_meeting_total_participant',
'type' => 'integrated_edit_field',
'orientation' => 1 ),
'meet_approve' => array( 'field' => 'meet_approve',
'type' => 'integrated_edit_field',
'orientation' => 1 ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>