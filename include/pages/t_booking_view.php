<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'details' => array( 'm_disposition' => array( 'displayPreview' => 1,
'previewPageId' => 'list' ),
'm_vehicle' => array( 'displayPreview' => 2,
'previewPageId' => '' ) ),
'fields' => array( 'gridFields' => array( 'm_vehicle_id',
't_booking_destination',
't_booking_remarks',
't_booking_from_date',
't_booking_to_date',
'm_vehicle_driver' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'm_vehicle_id' => array( 'integrated_edit_field11' ),
't_booking_destination' => array( 'integrated_edit_field12' ),
't_booking_remarks' => array( 'integrated_edit_field13' ),
't_booking_from_date' => array( 'integrated_edit_field' ),
't_booking_to_date' => array( 'integrated_edit_field1' ),
'm_vehicle_driver' => array( 'integrated_edit_field2' ) ) ),
'pageLinks' => array( 'edit' => true,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array(  ),
'below-grid' => array( 'view_back_list',
'view_close',
'hamburger' ),
'top' => array( 'view_header' ),
'grid' => array( 'section',
'section1',
'integrated_edit_field2' ),
'section' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field13',
'integrated_edit_field12',
'integrated_edit_field11' ),
'section1' => array( 'details_preview' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'view_back_list' => 'below-grid',
'view_close' => 'below-grid',
'hamburger' => 'below-grid',
'view_header' => 'top',
'section' => 'grid',
'section1' => 'grid',
'integrated_edit_field2' => 'grid',
'integrated_edit_field' => 'section',
'integrated_edit_field1' => 'section',
'integrated_edit_field13' => 'section',
'integrated_edit_field12' => 'section',
'integrated_edit_field11' => 'section',
'details_preview' => 'section1' ),
'itemLocations' => array( 'section' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'section1' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field' => array( 'location' => 'section',
'cellId' => 'c3' ),
'integrated_edit_field1' => array( 'location' => 'section',
'cellId' => 'c3' ),
'integrated_edit_field13' => array( 'location' => 'section',
'cellId' => 'c4' ),
'integrated_edit_field12' => array( 'location' => 'section',
'cellId' => 'c5' ),
'integrated_edit_field11' => array( 'location' => 'section',
'cellId' => 'c6' ),
'details_preview' => array( 'location' => 'section1',
'cellId' => 'c1' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'view_header' => array( 'view_header' ),
'view_back_list' => array( 'view_back_list' ),
'view_close' => array( 'view_close' ),
'hamburger' => array( 'hamburger' ),
'view_edit' => array( 'view_edit' ),
'integrated_edit_field' => array( 'integrated_edit_field11',
'integrated_edit_field12',
'integrated_edit_field13',
'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2' ),
'details_preview' => array( 'details_preview' ),
'section' => array( 'section',
'section1' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'section',
'section1',
'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ),
'section' => array( 'cells' => array( 'c6' => array( 'cols' => array( 0,
1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field11' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 0,
1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field12' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 0,
1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field13' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field',
'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c14' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 4 ),
'section1' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'details_preview' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false ),
'misc' => array( 'type' => 'view',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'view',
'type' => 'view',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'view-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1',
'colspan' => 2 ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'view-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_back_list',
'view_close' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'hamburger' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'view-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'section',
'section1',
'integrated_edit_field2' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c6',
'colspan' => 2 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c5',
'colspan' => 2 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c4',
'colspan' => 2 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c3' ),
array( 'cell' => 'c14' ) ) ) ),
'cells' => array( 'c3' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field',
'integrated_edit_field1' ) ),
'c4' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field13' ) ),
'c5' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field12' ) ),
'c6' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field11' ) ),
'c14' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section1' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'details_preview' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'view_header' => array( 'type' => 'view_header' ),
'view_back_list' => array( 'type' => 'view_back_list' ),
'view_close' => array( 'type' => 'view_close' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'view_edit' ) ),
'view_edit' => array( 'type' => 'view_edit' ),
'integrated_edit_field11' => array( 'field' => 'm_vehicle_id',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field12' => array( 'field' => 't_booking_destination',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field13' => array( 'field' => 't_booking_remarks',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'm_disposition',
'items' => array(  ),
'popup' => false,
'pageId' => 'list' ),
'section' => array( 'type' => 'section',
'title' => array( 'type' => 0,
'text' => 'View Data' ),
'location' => 'section',
'bsStyle' => 'default',
'panelType' => 3 ),
'section1' => array( 'type' => 'section',
'title' => array( 'type' => 0,
'text' => 'Disposition' ),
'location' => 'section1',
'bsStyle' => 'default',
'panelType' => 3 ),
'integrated_edit_field' => array( 'field' => 't_booking_from_date',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field1' => array( 'field' => 't_booking_to_date',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field2' => array( 'field' => 'm_vehicle_driver',
'type' => 'integrated_edit_field',
'orientation' => 0 ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'pageCSS' => '/* Put  your custom CSS code here */

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
' );
		?>