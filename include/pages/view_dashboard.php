<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'grid' => array(  ),
'left' => array( 'logo',
'expand_button',
'menu' ),
'supertop' => array( 'expand_menu_button',
'collapse_button',
'breadcrumb',
'simple_search',
'notifications',
'username_button' ),
'top' => array( 'snippet' ) ),
'formXtTags' => array( 'grid' => array(  ) ),
'itemForms' => array( 'logo' => 'left',
'expand_button' => 'left',
'menu' => 'left',
'expand_menu_button' => 'supertop',
'collapse_button' => 'supertop',
'breadcrumb' => 'supertop',
'simple_search' => 'supertop',
'notifications' => 'supertop',
'username_button' => 'supertop',
'snippet' => 'top' ),
'itemLocations' => array(  ),
'itemVisiblity' => array( 'breadcrumb' => 5,
'expand_menu_button' => 2,
'expand_button' => 5 ) ),
'itemsByType' => array( 'breadcrumb' => array( 'breadcrumb' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'expand_menu_button' => array( 'expand_menu_button' ),
'collapse_button' => array( 'collapse_button' ),
'notifications' => array( 'notifications' ),
'username_button' => array( 'username_button' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'snippet' => array( 'snippet' ),
'expand_button' => array( 'expand_button' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => true,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => true ),
'misc' => array( 'type' => 'dashboard',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dashboard' => array( 'elements' => array(  ) ),
'dashSearch' => array( 'searchFields' => array(  ),
'allSearchFields' => array(  ),
'googleLikeFields' => array(  ) ) );
			$pageArray = array( 'id' => 'dashboard',
'type' => 'dashboard',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'grid' => array( 'modelId' => 'dashboard-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c2' ),
array( 'cell' => 'c3' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
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
'c' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c1',
'items' => array(  ) ),
'c3' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'left' => array( 'modelId' => 'leftbar-dashboard',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c0' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c0' => array( 'model' => 'c0',
'items' => array( 'logo',
'expand_button' ),
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
'c1' => array( 'model' => 'c1',
'items' => array( 'menu' ),
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
' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'leftbar-top-dashboard',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'expand_menu_button',
'collapse_button',
'breadcrumb' ),
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
'c2' => array( 'model' => 'c2',
'items' => array( 'simple_search',
'notifications',
'username_button' ),
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
' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'dashboard-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c4' ) ),
'section' => '' ) ),
'cells' => array( 'c4' => array( 'model' => 'c4',
'items' => array( 'snippet' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'breadcrumb' => array( 'type' => 'breadcrumb' ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'simple_search' => array( 'type' => 'simple_search' ),
'expand_menu_button' => array( 'type' => 'expand_menu_button' ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'notifications' => array( 'type' => 'notifications' ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link' ) ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'snippet' => array( 'eventId' => 'View_snippet',
'label' => array( 'text' => 'View_snippet',
'type' => 0 ),
'type' => 'snippet' ),
'expand_button' => array( 'type' => 'expand_button' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>