<?php
			$optionsArray = array( 'welcome' => array( 'welcomePageSkip' => false,
'welcomeItems' => array( 'logo' => array( 'menutItem' => false ),
'menu' => array( 'menutItem' => false ),
'notifications' => array( 'menutItem' => false ),
'loginform_login' => array( 'menutItem' => false ),
'username_button' => array( 'menutItem' => false ) ) ),
'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array(  ),
'supertop' => array( 'logo',
'menu',
'notifications',
'loginform_login',
'username_button' ),
'grid' => array(  ) ),
'formXtTags' => array( 'above-grid' => array(  ),
'grid' => array(  ) ),
'itemForms' => array( 'logo' => 'supertop',
'menu' => 'supertop',
'notifications' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop' ),
'itemLocations' => array(  ),
'itemVisiblity' => array( 'menu' => 3,
'username_button' => 3,
'loginform_login' => 3 ) ),
'itemsByType' => array( 'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'notifications' => array( 'notifications' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'menu',
'type' => 'menu',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'empty-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
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
' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'menu-topbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'logo',
'menu' ),
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
'items' => array( 'notifications',
'loginform_login',
'username_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'welcome',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'notifications' => array( 'type' => 'notifications' ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'welcomePageStay' => true,
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