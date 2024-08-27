<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("classes/button.php");

//	CSRF protection
if( !isPostRequest() )
	return;

$params = (array)my_json_decode(postvalue('params'));

if( $params["_base64fields"] ) {
	foreach( $params["_base64fields"] as $f ) {
		$params[$f] = base64_str2bin( $params[$f] );
	}
}

$buttId = $params['buttId'];
$eventId = postvalue('event');
$table = $params['table'];
if( !GetTableURL( $table ) ) {
	exit;
}
$page = $params['page'];
if( !Security::userCanSeePage($table, $page ) ) {
	exit;
}

$pSet = new ProjectSettings( $table, "", $page );
if( $buttId ) {
	$pageButtons = $pSet->customButtons();
	if( array_search( $buttId , $pageButtons ) === false ) {
		exit;
	}
}

$params["masterTable"] = postValue("masterTable");;
$params["masterKeys"] = array();
// RunnerPage::readMasterKeysFromRequest
$i = 1;
while( isset( $_REQUEST["masterkey".$i] ) ) {
	$params["masterKeys"][ $i ] = $_REQUEST["masterkey".$i];
	$i++;
}



if( $eventId == 'user_participant_list_event' && "t_meeting_book" == $table )
{
	require_once("include/t_meeting_book_variables.php");
	$cipherer = new RunnerCipherer("t_meeting_book");
	fieldEventHandler_user_participant_list_event( $params );
}




// create table and non table handlers


		
function fieldEventHandler_user_participant_list_event( $params )
{
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = false;
	$params["location"] = postvalue('pageType');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	$ajax = $button; // for examle from HELP
	$result = array();
	
	$pageType = postvalue("pageType");
	$fieldsData = my_json_decode( postvalue("fieldsData") );
	
	$contextParams = array(
		"data" => $fieldsData,
		"masterData" => $_SESSION[ $masterTable . "_masterRecordData" ]
	);
	
	RunnerContext::push( new RunnerContextItem( CONTEXT_ROW, $contextParams ) );
	;
	RunnerContext::pop();
	
	echo my_json_encode( $result );
	$button->deleteTempFiles();
}
?>