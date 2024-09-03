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


if($buttId=='Approve')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Approve($params);
}
if($buttId=='New_Button')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button($params);
}

if( $eventId == 't_meeting_roomid_event' && "t_meeting_book" == $table )
{
	require_once("include/t_meeting_book_variables.php");
	$cipherer = new RunnerCipherer("t_meeting_book");
	fieldEventHandler_t_meeting_roomid_event( $params );
}
if( $eventId == 't_meeting_total_participant_event' && "t_meeting_book" == $table )
{
	require_once("include/t_meeting_book_variables.php");
	$cipherer = new RunnerCipherer("t_meeting_book");
	fieldEventHandler_t_meeting_total_participant_event( $params );
}
if( $eventId == 't_meeting_total_participant_event1' && "t_meeting_book" == $table )
{
	require_once("include/t_meeting_book_variables.php");
	$cipherer = new RunnerCipherer("t_meeting_book");
	fieldEventHandler_t_meeting_total_participant_event1( $params );
}
if( $eventId == 't_meeting_total_participant_event1' && "t_meeting_book_view1" == $table )
{
	require_once("include/t_meeting_book_view1_variables.php");
	$cipherer = new RunnerCipherer("t_meeting_book_view1");
	fieldEventHandler_t_meeting_total_participant_event1( $params );
}




// create table and non table handlers
function buttonHandler_Approve($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$data = $button->getCurrentRecord();
$ticketId = $data['t_disposition_no'];
$disposisi = $data['t_disposition_status'];
$tglInput = $data['t_disposition_from_date'];
$todate = $data['t_meeting_to_date'];
$frmdate = $data['t_meeting_from_date'];
$total = $data['t_meeting_total_participant'];
$idDispo = $data['t_disposition_id'];
$meetingId = $data['t_meeting_id'];
$roomId = $data['t_meeting_roomid'];
$meetingDesc = $data['t_meeting_desc'];
$meetingUser = $data['t_meeting_user'];
$participants = $data['user_participant_list'];

$roomName = '';

switch ($roomId) {
    case 6:
        $roomName = 'Lavender';
        break;
    case 2:
        $roomName = 'Edelweiss 1';
        break;
    case 3:
        $roomName = 'Edelweiss 2';
        break;
    case 4:
        $roomName = 'Edelweiss 1 & 2';
        break;
    case 7:
        $roomName = 'Lotus';
        break;
    case 5:
        $roomName = 'Lily';
        break;
    case 1:
        $roomName = 'Wijaya Kusuma';
        break;
    default:
        $roomName = 'Unknown Room';
        break;
}

$sql = "UPDATE t_meeting_book SET meet_approve = 1 WHERE t_meeting_id = " . intval($meetingId);
CustomQuery($sql);

$result["hideButton"] = true;

$message = "You have a meeting invitation from " . $meetingUser;
$title = "[T-Meeting] " . $disposisi . " Meeting Notification";
$icon = "fa-envelope";
$url = "t_meeting_book_view.php?editid1=" . intval($meetingId);
$expire = 1440;
$newWindow = false;
$from = "no-reply@talisman.co.id";
$subject = "[T-Meeting] Notification";
$participantsArray = explode(',', $participants);

foreach ($participantsArray as $participant) {
    $participant = trim($participant);

    $permissions = str_replace('@talisman.co.id', '', $participant);
    addNotification($message, $title, $icon, $url, $expire, $permissions, $newWindow);

    $email = $participant;

    $msg = "
Anda diundang untuk menghadiri pertemuan di ruang " . $roomName . ".\n
\n
Pemohon         : " . $meetingUser . "\n
Perihal         : " . $meetingDesc . "\n
Waktu Mulai     : " . $frmdate . "\n
Waktu Selesai   : " . $todate . "\n
Ruangan         : " . $roomName . "\n
Jumlah Peserta  : " . $total . "\n
Daftar Peserta  : " . implode(", ", $participantsArray) . "\n
\n
Catatan: Mohon informasikan kepada resepsionis apabila Anda telah selesai menggunakan ruang meeting tersebut.\n
\n
Terima kasih atas perhatian dan kerjasamanya.\n
\n
Best regards,\n
Talisman Insurance Brokers\n
no-reply@talisman.co.id
    ";

    $ret = runner_mail(array('to' => $email, 'subject' => $subject, 'body' => $msg, 'from' => $from));
    if (!$ret["mailed"]) {
        echo $ret["message"];
    }
}
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$data = $button->getCurrentRecord();
$meetingId = $data['t_meeting_id'];

$sql = "UPDATE t_meeting_book SET meet_approve = 2 WHERE t_meeting_id = " . intval($meetingId);
CustomQuery($sql);

$result["hideButton"] = true;  // Menyembunyikan tombol setelah status diperbarui
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}


		
function fieldEventHandler_t_meeting_roomid_event( $params )
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
	$peserta = $values["peserta"];
$capacity = $values["capacity"]; 

if (($capacity == 18 && $peserta > 10) || 
    ($capacity == 12 && $peserta > 5 && $peserta <= 12) || 
    ($capacity == 6 && $peserta > 3 && $peserta <= 6) || 
    ($capacity == 4 && $peserta <= 4)) {
    
    $result["validation"] = "Condition met!";
} else {
    $result["validation"] = "Condition not met.";
}

;
	RunnerContext::pop();
	
	echo my_json_encode( $result );
	$button->deleteTempFiles();
}
function fieldEventHandler_t_meeting_total_participant_event( $params )
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
	// Retrieve the current record data
$data = $ajax->getCurrentRecord();  // Get the current record as an associative array

// Retrieve the 'peserta' value from the parameters sent by the client
$peserta = $params["value"];

// Perform logic or calculations based on the 'peserta' value
// Example: Update the 'upper' result with the 'peserta' value
$result['upper'] = $peserta;

// Optionally, you can also use data from the current record
// Example: Set the 'email' in the result based on the current record's 'email' field
$result['email'] = $data['email'];

// If you need to update more fields or return additional information, you can do so here.
;
	RunnerContext::pop();
	
	echo my_json_encode( $result );
	$button->deleteTempFiles();
}
function fieldEventHandler_t_meeting_total_participant_event1( $params )
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
	$_SESSION["peserta"] = $params["value"];
$result["upper"] = $_SESSION["peserta"];;
	RunnerContext::pop();
	
	echo my_json_encode( $result );
	$button->deleteTempFiles();
}
?>