<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["m_vehicle"] ) ) {
			$lookupTableLinks["m_vehicle"] = array();
		}
		if( !isset( $lookupTableLinks["m_vehicle"]["t_booking.m_vehicle_id"] )) {
			$lookupTableLinks["m_vehicle"]["t_booking.m_vehicle_id"] = array();
		}
		$lookupTableLinks["m_vehicle"]["t_booking.m_vehicle_id"]["edit"] = array("table" => "t_booking", "field" => "m_vehicle_id", "page" => "edit");
		if( !isset( $lookupTableLinks["m_meeting_room"] ) ) {
			$lookupTableLinks["m_meeting_room"] = array();
		}
		if( !isset( $lookupTableLinks["m_meeting_room"]["t_meeting_book.t_meeting_roomid"] )) {
			$lookupTableLinks["m_meeting_room"]["t_meeting_book.t_meeting_roomid"] = array();
		}
		$lookupTableLinks["m_meeting_room"]["t_meeting_book.t_meeting_roomid"]["edit"] = array("table" => "t_meeting_book", "field" => "t_meeting_roomid", "page" => "edit");
		if( !isset( $lookupTableLinks["m_login"] ) ) {
			$lookupTableLinks["m_login"] = array();
		}
		if( !isset( $lookupTableLinks["m_login"]["t_meeting_book.t_meeting_user"] )) {
			$lookupTableLinks["m_login"]["t_meeting_book.t_meeting_user"] = array();
		}
		$lookupTableLinks["m_login"]["t_meeting_book.t_meeting_user"]["edit"] = array("table" => "t_meeting_book", "field" => "t_meeting_user", "page" => "edit");
		if( !isset( $lookupTableLinks["m_employee4"] ) ) {
			$lookupTableLinks["m_employee4"] = array();
		}
		if( !isset( $lookupTableLinks["m_employee4"]["t_meeting_book.user_participant_list"] )) {
			$lookupTableLinks["m_employee4"]["t_meeting_book.user_participant_list"] = array();
		}
		$lookupTableLinks["m_employee4"]["t_meeting_book.user_participant_list"]["edit"] = array("table" => "t_meeting_book", "field" => "user_participant_list", "page" => "edit");
		if( !isset( $lookupTableLinks["m_participant_type"] ) ) {
			$lookupTableLinks["m_participant_type"] = array();
		}
		if( !isset( $lookupTableLinks["m_participant_type"]["t_meeting_book.t_meeting_participant_type"] )) {
			$lookupTableLinks["m_participant_type"]["t_meeting_book.t_meeting_participant_type"] = array();
		}
		$lookupTableLinks["m_participant_type"]["t_meeting_book.t_meeting_participant_type"]["edit"] = array("table" => "t_meeting_book", "field" => "t_meeting_participant_type", "page" => "edit");
		if( !isset( $lookupTableLinks["m_status"] ) ) {
			$lookupTableLinks["m_status"] = array();
		}
		if( !isset( $lookupTableLinks["m_status"]["t_meeting_book.t_meeting_status"] )) {
			$lookupTableLinks["m_status"]["t_meeting_book.t_meeting_status"] = array();
		}
		$lookupTableLinks["m_status"]["t_meeting_book.t_meeting_status"]["edit"] = array("table" => "t_meeting_book", "field" => "t_meeting_status", "page" => "edit");
		if( !isset( $lookupTableLinks["flow_disposisi"] ) ) {
			$lookupTableLinks["flow_disposisi"] = array();
		}
		if( !isset( $lookupTableLinks["flow_disposisi"]["m_disposition.t_disposition_to"] )) {
			$lookupTableLinks["flow_disposisi"]["m_disposition.t_disposition_to"] = array();
		}
		$lookupTableLinks["flow_disposisi"]["m_disposition.t_disposition_to"]["edit"] = array("table" => "m_disposition", "field" => "t_disposition_to", "page" => "edit");
		if( !isset( $lookupTableLinks["m_status"] ) ) {
			$lookupTableLinks["m_status"] = array();
		}
		if( !isset( $lookupTableLinks["m_status"]["m_disposition.t_disposition_status"] )) {
			$lookupTableLinks["m_status"]["m_disposition.t_disposition_status"] = array();
		}
		$lookupTableLinks["m_status"]["m_disposition.t_disposition_status"]["edit"] = array("table" => "m_disposition", "field" => "t_disposition_status", "page" => "edit");
		if( !isset( $lookupTableLinks["m_status"] ) ) {
			$lookupTableLinks["m_status"] = array();
		}
		if( !isset( $lookupTableLinks["m_status"]["t_booking_view.t_booking_status"] )) {
			$lookupTableLinks["m_status"]["t_booking_view.t_booking_status"] = array();
		}
		$lookupTableLinks["m_status"]["t_booking_view.t_booking_status"]["edit"] = array("table" => "t_booking_view", "field" => "t_booking_status", "page" => "edit");
		if( !isset( $lookupTableLinks["m_vehicle"] ) ) {
			$lookupTableLinks["m_vehicle"] = array();
		}
		if( !isset( $lookupTableLinks["m_vehicle"]["t_booking_view.m_vehicle_id"] )) {
			$lookupTableLinks["m_vehicle"]["t_booking_view.m_vehicle_id"] = array();
		}
		$lookupTableLinks["m_vehicle"]["t_booking_view.m_vehicle_id"]["edit"] = array("table" => "t_booking_view", "field" => "m_vehicle_id", "page" => "edit");
		if( !isset( $lookupTableLinks["m_vehicle"] ) ) {
			$lookupTableLinks["m_vehicle"] = array();
		}
		if( !isset( $lookupTableLinks["m_vehicle"]["t_booking_view.m_vehicle_driver"] )) {
			$lookupTableLinks["m_vehicle"]["t_booking_view.m_vehicle_driver"] = array();
		}
		$lookupTableLinks["m_vehicle"]["t_booking_view.m_vehicle_driver"]["edit"] = array("table" => "t_booking_view", "field" => "m_vehicle_driver", "page" => "edit");
		if( !isset( $lookupTableLinks["m_status"] ) ) {
			$lookupTableLinks["m_status"] = array();
		}
		if( !isset( $lookupTableLinks["m_status"]["m_disposition_view.t_disposition_status"] )) {
			$lookupTableLinks["m_status"]["m_disposition_view.t_disposition_status"] = array();
		}
		$lookupTableLinks["m_status"]["m_disposition_view.t_disposition_status"]["edit"] = array("table" => "m_disposition_view", "field" => "t_disposition_status", "page" => "edit");
}

?>