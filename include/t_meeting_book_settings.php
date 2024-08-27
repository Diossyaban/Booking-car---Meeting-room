<?php
$tdatat_meeting_book = array();
$tdatat_meeting_book[".searchableFields"] = array();
$tdatat_meeting_book[".ShortName"] = "t_meeting_book";
$tdatat_meeting_book[".OwnerID"] = "";
$tdatat_meeting_book[".OriginalTable"] = "t_meeting_book";


$tdatat_meeting_book[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatat_meeting_book[".originalPagesByType"] = $tdatat_meeting_book[".pagesByType"];
$tdatat_meeting_book[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatat_meeting_book[".originalPages"] = $tdatat_meeting_book[".pages"];
$tdatat_meeting_book[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatat_meeting_book[".originalDefaultPages"] = $tdatat_meeting_book[".defaultPages"];

//	field labels
$fieldLabelst_meeting_book = array();
$fieldToolTipst_meeting_book = array();
$pageTitlest_meeting_book = array();
$placeHolderst_meeting_book = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_meeting_book["English"] = array();
	$fieldToolTipst_meeting_book["English"] = array();
	$placeHolderst_meeting_book["English"] = array();
	$pageTitlest_meeting_book["English"] = array();
	$fieldLabelst_meeting_book["English"]["t_meeting_id"] = "Meeting Id";
	$fieldToolTipst_meeting_book["English"]["t_meeting_id"] = "";
	$placeHolderst_meeting_book["English"]["t_meeting_id"] = "";
	$fieldLabelst_meeting_book["English"]["t_meeting_no"] = "Meeting No";
	$fieldToolTipst_meeting_book["English"]["t_meeting_no"] = "";
	$placeHolderst_meeting_book["English"]["t_meeting_no"] = "";
	$fieldLabelst_meeting_book["English"]["t_meeting_user"] = "Reserver";
	$fieldToolTipst_meeting_book["English"]["t_meeting_user"] = "";
	$placeHolderst_meeting_book["English"]["t_meeting_user"] = "";
	$fieldLabelst_meeting_book["English"]["t_meeting_desc"] = "Description";
	$fieldToolTipst_meeting_book["English"]["t_meeting_desc"] = "";
	$placeHolderst_meeting_book["English"]["t_meeting_desc"] = "";
	$fieldLabelst_meeting_book["English"]["t_meeting_from_date"] = "From";
	$fieldToolTipst_meeting_book["English"]["t_meeting_from_date"] = "";
	$placeHolderst_meeting_book["English"]["t_meeting_from_date"] = "";
	$fieldLabelst_meeting_book["English"]["t_meeting_to_date"] = "To";
	$fieldToolTipst_meeting_book["English"]["t_meeting_to_date"] = "";
	$placeHolderst_meeting_book["English"]["t_meeting_to_date"] = "";
	$fieldLabelst_meeting_book["English"]["user_participant_list"] = "Participant";
	$fieldToolTipst_meeting_book["English"]["user_participant_list"] = "";
	$placeHolderst_meeting_book["English"]["user_participant_list"] = "";
	$fieldLabelst_meeting_book["English"]["t_meeting_participant_type"] = "Type Participant ";
	$fieldToolTipst_meeting_book["English"]["t_meeting_participant_type"] = "";
	$placeHolderst_meeting_book["English"]["t_meeting_participant_type"] = "";
	$fieldLabelst_meeting_book["English"]["t_meeting_total_participant"] = "Amount of Participant ";
	$fieldToolTipst_meeting_book["English"]["t_meeting_total_participant"] = "";
	$placeHolderst_meeting_book["English"]["t_meeting_total_participant"] = "";
	$fieldLabelst_meeting_book["English"]["t_meeting_isminuman"] = "Meeting Isminuman";
	$fieldToolTipst_meeting_book["English"]["t_meeting_isminuman"] = "";
	$placeHolderst_meeting_book["English"]["t_meeting_isminuman"] = "";
	$fieldLabelst_meeting_book["English"]["t_meeting_issnack"] = "Meeting Issnack";
	$fieldToolTipst_meeting_book["English"]["t_meeting_issnack"] = "";
	$placeHolderst_meeting_book["English"]["t_meeting_issnack"] = "";
	$fieldLabelst_meeting_book["English"]["t_meeting_ismakan"] = "Meeting Ismakan";
	$fieldToolTipst_meeting_book["English"]["t_meeting_ismakan"] = "";
	$placeHolderst_meeting_book["English"]["t_meeting_ismakan"] = "";
	$fieldLabelst_meeting_book["English"]["t_meeting_recurring_flag"] = "Meeting Recurring Flag";
	$fieldToolTipst_meeting_book["English"]["t_meeting_recurring_flag"] = "";
	$placeHolderst_meeting_book["English"]["t_meeting_recurring_flag"] = "";
	$fieldLabelst_meeting_book["English"]["t_meeting_status"] = "Meeting Status";
	$fieldToolTipst_meeting_book["English"]["t_meeting_status"] = "";
	$placeHolderst_meeting_book["English"]["t_meeting_status"] = "";
	$fieldLabelst_meeting_book["English"]["fr_date"] = "Date";
	$fieldToolTipst_meeting_book["English"]["fr_date"] = "";
	$placeHolderst_meeting_book["English"]["fr_date"] = "";
	$fieldLabelst_meeting_book["English"]["to_dt"] = "To Date";
	$fieldToolTipst_meeting_book["English"]["to_dt"] = "";
	$placeHolderst_meeting_book["English"]["to_dt"] = "";
	$fieldLabelst_meeting_book["English"]["fr_time"] = "From Time";
	$fieldToolTipst_meeting_book["English"]["fr_time"] = "";
	$placeHolderst_meeting_book["English"]["fr_time"] = "";
	$fieldLabelst_meeting_book["English"]["to_time"] = "To Time";
	$fieldToolTipst_meeting_book["English"]["to_time"] = "";
	$placeHolderst_meeting_book["English"]["to_time"] = "";
	$fieldLabelst_meeting_book["English"]["t_meeting_roomid"] = "Room";
	$fieldToolTipst_meeting_book["English"]["t_meeting_roomid"] = "";
	$placeHolderst_meeting_book["English"]["t_meeting_roomid"] = "";
	$pageTitlest_meeting_book["English"]["add"] = "Room Reservation";
	$pageTitlest_meeting_book["English"]["edit"] = "[{%t_meeting_desc}]";
	$pageTitlest_meeting_book["English"]["view"] = "{%t_meeting_desc}";
	if (count($fieldToolTipst_meeting_book["English"]))
		$tdatat_meeting_book[".isUseToolTips"] = true;
}


	$tdatat_meeting_book[".NCSearch"] = true;



$tdatat_meeting_book[".shortTableName"] = "t_meeting_book";
$tdatat_meeting_book[".nSecOptions"] = 0;

$tdatat_meeting_book[".mainTableOwnerID"] = "";
$tdatat_meeting_book[".entityType"] = 0;
$tdatat_meeting_book[".connId"] = "u736239518tsundbat154412412";


$tdatat_meeting_book[".strOriginalTableName"] = "t_meeting_book";

	



$tdatat_meeting_book[".showAddInPopup"] = false;

$tdatat_meeting_book[".showEditInPopup"] = false;

$tdatat_meeting_book[".showViewInPopup"] = false;

$tdatat_meeting_book[".listAjax"] = false;
//	temporary
//$tdatat_meeting_book[".listAjax"] = false;

	$tdatat_meeting_book[".audit"] = false;

	$tdatat_meeting_book[".locking"] = false;


$pages = $tdatat_meeting_book[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatat_meeting_book[".edit"] = true;
	$tdatat_meeting_book[".afterEditAction"] = 1;
	$tdatat_meeting_book[".closePopupAfterEdit"] = 1;
	$tdatat_meeting_book[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatat_meeting_book[".add"] = true;
$tdatat_meeting_book[".afterAddAction"] = 1;
$tdatat_meeting_book[".closePopupAfterAdd"] = 1;
$tdatat_meeting_book[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatat_meeting_book[".list"] = true;
}



$tdatat_meeting_book[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatat_meeting_book[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatat_meeting_book[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatat_meeting_book[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatat_meeting_book[".printFriendly"] = true;
}



$tdatat_meeting_book[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatat_meeting_book[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatat_meeting_book[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatat_meeting_book[".isUseAjaxSuggest"] = true;



		
								

$tdatat_meeting_book[".ajaxCodeSnippetAdded"] = false;

$tdatat_meeting_book[".buttonsAdded"] = true;

$tdatat_meeting_book[".addPageEvents"] = true;

// use timepicker for search panel
$tdatat_meeting_book[".isUseTimeForSearch"] = true;


$tdatat_meeting_book[".badgeColor"] = "4682B4";


$tdatat_meeting_book[".allSearchFields"] = array();
$tdatat_meeting_book[".filterFields"] = array();
$tdatat_meeting_book[".requiredSearchFields"] = array();

$tdatat_meeting_book[".googleLikeFields"] = array();
$tdatat_meeting_book[".googleLikeFields"][] = "t_meeting_id";
$tdatat_meeting_book[".googleLikeFields"][] = "t_meeting_no";
$tdatat_meeting_book[".googleLikeFields"][] = "t_meeting_roomid";
$tdatat_meeting_book[".googleLikeFields"][] = "t_meeting_user";
$tdatat_meeting_book[".googleLikeFields"][] = "t_meeting_desc";
$tdatat_meeting_book[".googleLikeFields"][] = "t_meeting_from_date";
$tdatat_meeting_book[".googleLikeFields"][] = "t_meeting_to_date";
$tdatat_meeting_book[".googleLikeFields"][] = "user_participant_list";
$tdatat_meeting_book[".googleLikeFields"][] = "t_meeting_participant_type";
$tdatat_meeting_book[".googleLikeFields"][] = "t_meeting_total_participant";
$tdatat_meeting_book[".googleLikeFields"][] = "t_meeting_isminuman";
$tdatat_meeting_book[".googleLikeFields"][] = "t_meeting_issnack";
$tdatat_meeting_book[".googleLikeFields"][] = "t_meeting_ismakan";
$tdatat_meeting_book[".googleLikeFields"][] = "t_meeting_recurring_flag";
$tdatat_meeting_book[".googleLikeFields"][] = "t_meeting_status";
$tdatat_meeting_book[".googleLikeFields"][] = "fr_date";
$tdatat_meeting_book[".googleLikeFields"][] = "to_dt";
$tdatat_meeting_book[".googleLikeFields"][] = "fr_time";
$tdatat_meeting_book[".googleLikeFields"][] = "to_time";



$tdatat_meeting_book[".tableType"] = "list";

$tdatat_meeting_book[".printerPageOrientation"] = 0;
$tdatat_meeting_book[".nPrinterPageScale"] = 100;

$tdatat_meeting_book[".nPrinterSplitRecords"] = 40;

$tdatat_meeting_book[".geocodingEnabled"] = false;










$tdatat_meeting_book[".pageSize"] = 20;

$tdatat_meeting_book[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatat_meeting_book[".strOrderBy"] = $tstrOrderBy;

$tdatat_meeting_book[".orderindexes"] = array();


$tdatat_meeting_book[".sqlHead"] = "SELECT t_meeting_id,      t_meeting_no,      t_meeting_roomid,      t_meeting_user,      t_meeting_desc,      t_meeting_from_date,      t_meeting_to_date,      user_participant_list,      t_meeting_participant_type,      t_meeting_total_participant,      t_meeting_isminuman,      t_meeting_issnack,      t_meeting_ismakan,      t_meeting_recurring_flag,      t_meeting_status,      DATE(t_meeting_from_date) AS fr_date,      DATE(t_meeting_to_date) AS to_dt,      TIME(t_meeting_from_date) AS fr_time,      TIME(t_meeting_to_date) AS to_time";
$tdatat_meeting_book[".sqlFrom"] = "FROM      t_meeting_book";
$tdatat_meeting_book[".sqlWhereExpr"] = "";
$tdatat_meeting_book[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "1",
	'name' => "Lavender",
	'nameType' => 'Text',
	'where' => "t_meeting_roomid = 6",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "2",
	'name' => "Edelweiss 1",
	'nameType' => 'Text',
	'where' => "t_meeting_roomid = 2",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "3",
	'name' => "Edelweiss 2",
	'nameType' => 'Text',
	'where' => "t_meeting_roomid = 3",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "4",
	'name' => "Edelweiss 1 & 2",
	'nameType' => 'Text',
	'where' => "t_meeting_roomid = 4",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "5",
	'name' => "Lily",
	'nameType' => 'Text',
	'where' => "t_meeting_roomid = 5",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "6",
	'name' => "Lotus",
	'nameType' => 'Text',
	'where' => "t_meeting_roomid = 7",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "7",
	'name' => "Wijaya Kusuma",
	'nameType' => 'Text',
	'where' => "t_meeting_roomid = 1",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatat_meeting_book[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_meeting_book[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_meeting_book[".arrGroupsPerPage"] = $arrGPP;

$tdatat_meeting_book[".highlightSearchResults"] = true;

$tableKeyst_meeting_book = array();
$tableKeyst_meeting_book[] = "t_meeting_id";
$tdatat_meeting_book[".Keys"] = $tableKeyst_meeting_book;


$tdatat_meeting_book[".hideMobileList"] = array();




//	t_meeting_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "t_meeting_id";
	$fdata["GoodName"] = "t_meeting_id";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","t_meeting_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "t_meeting_id";

		$fdata["sourceSingle"] = "t_meeting_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_meeting_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatat_meeting_book["t_meeting_id"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "t_meeting_id";
//	t_meeting_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "t_meeting_no";
	$fdata["GoodName"] = "t_meeting_no";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","t_meeting_no");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_meeting_no";

		$fdata["sourceSingle"] = "t_meeting_no";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_meeting_no";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatat_meeting_book["t_meeting_no"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "t_meeting_no";
//	t_meeting_roomid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "t_meeting_roomid";
	$fdata["GoodName"] = "t_meeting_roomid";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","t_meeting_roomid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_meeting_roomid";

		$fdata["sourceSingle"] = "t_meeting_roomid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_meeting_roomid";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "m_meeting_room";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "m_meeting_room_name";

	

	
	$edata["LookupOrderBy"] = "id";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatat_meeting_book["t_meeting_roomid"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "t_meeting_roomid";
//	t_meeting_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "t_meeting_user";
	$fdata["GoodName"] = "t_meeting_user";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","t_meeting_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_meeting_user";

		$fdata["sourceSingle"] = "t_meeting_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_meeting_user";

	
	
			
//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "m_login";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "username";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "fullname";

				$edata["LookupWhere"] = "is_active =1";


	
	$edata["LookupOrderBy"] = "fullname";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatat_meeting_book["t_meeting_user"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "t_meeting_user";
//	t_meeting_desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "t_meeting_desc";
	$fdata["GoodName"] = "t_meeting_desc";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","t_meeting_desc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_meeting_desc";

		$fdata["sourceSingle"] = "t_meeting_desc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_meeting_desc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=300";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatat_meeting_book["t_meeting_desc"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "t_meeting_desc";
//	t_meeting_from_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "t_meeting_from_date";
	$fdata["GoodName"] = "t_meeting_from_date";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","t_meeting_from_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "t_meeting_from_date";

		$fdata["sourceSingle"] = "t_meeting_from_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_meeting_from_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[1,2,3,4,5]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 1;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "t_meeting_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatat_meeting_book["t_meeting_from_date"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "t_meeting_from_date";
//	t_meeting_to_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "t_meeting_to_date";
	$fdata["GoodName"] = "t_meeting_to_date";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","t_meeting_to_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "t_meeting_to_date";

		$fdata["sourceSingle"] = "t_meeting_to_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_meeting_to_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[1,2,3,4,5]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 1;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatat_meeting_book["t_meeting_to_date"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "t_meeting_to_date";
//	user_participant_list
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "user_participant_list";
	$fdata["GoodName"] = "user_participant_list";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","user_participant_list");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "user_participant_list";

		$fdata["sourceSingle"] = "user_participant_list";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_participant_list";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "m_employee4";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "email";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nama";

	

	
	$edata["LookupOrderBy"] = "nama";

	
	
	
	

	
		$edata["Multiselect"] = true;

	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatat_meeting_book["user_participant_list"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "user_participant_list";
//	t_meeting_participant_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "t_meeting_participant_type";
	$fdata["GoodName"] = "t_meeting_participant_type";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","t_meeting_participant_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_meeting_participant_type";

		$fdata["sourceSingle"] = "t_meeting_participant_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_meeting_participant_type";

	
	
			
//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "m_participant_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Type";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Type";

	

	
	$edata["LookupOrderBy"] = "ID";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatat_meeting_book["t_meeting_participant_type"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "t_meeting_participant_type";
//	t_meeting_total_participant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "t_meeting_total_participant";
	$fdata["GoodName"] = "t_meeting_total_participant";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","t_meeting_total_participant");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_meeting_total_participant";

		$fdata["sourceSingle"] = "t_meeting_total_participant";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_meeting_total_participant";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
		$eventsData = array();
	$eventsData[] = array( "name" => "user_participant_list_event", "type" => "change" );
	$edata["fieldEvents"] = $eventsData;




		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatat_meeting_book["t_meeting_total_participant"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "t_meeting_total_participant";
//	t_meeting_isminuman
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "t_meeting_isminuman";
	$fdata["GoodName"] = "t_meeting_isminuman";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","t_meeting_isminuman");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_meeting_isminuman";

		$fdata["sourceSingle"] = "t_meeting_isminuman";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_meeting_isminuman";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatat_meeting_book["t_meeting_isminuman"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "t_meeting_isminuman";
//	t_meeting_issnack
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "t_meeting_issnack";
	$fdata["GoodName"] = "t_meeting_issnack";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","t_meeting_issnack");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_meeting_issnack";

		$fdata["sourceSingle"] = "t_meeting_issnack";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_meeting_issnack";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatat_meeting_book["t_meeting_issnack"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "t_meeting_issnack";
//	t_meeting_ismakan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "t_meeting_ismakan";
	$fdata["GoodName"] = "t_meeting_ismakan";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","t_meeting_ismakan");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_meeting_ismakan";

		$fdata["sourceSingle"] = "t_meeting_ismakan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_meeting_ismakan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatat_meeting_book["t_meeting_ismakan"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "t_meeting_ismakan";
//	t_meeting_recurring_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "t_meeting_recurring_flag";
	$fdata["GoodName"] = "t_meeting_recurring_flag";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","t_meeting_recurring_flag");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_meeting_recurring_flag";

		$fdata["sourceSingle"] = "t_meeting_recurring_flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_meeting_recurring_flag";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatat_meeting_book["t_meeting_recurring_flag"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "t_meeting_recurring_flag";
//	t_meeting_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "t_meeting_status";
	$fdata["GoodName"] = "t_meeting_status";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","t_meeting_status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_meeting_status";

		$fdata["sourceSingle"] = "t_meeting_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_meeting_status";

	
	
			
//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "m_status";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "m_status_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "status";

				$edata["LookupWhere"] = "m_status_desc in ('meetingbook', 'carbook')and status != 'Registration'";


	
	$edata["LookupOrderBy"] = "status";

		$edata["LookupDesc"] = true;

	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatat_meeting_book["t_meeting_status"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "t_meeting_status";
//	fr_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "fr_date";
	$fdata["GoodName"] = "fr_date";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","fr_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fr_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATE(t_meeting_from_date)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatat_meeting_book["fr_date"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "fr_date";
//	to_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "to_dt";
	$fdata["GoodName"] = "to_dt";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","to_dt");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "to_dt";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATE(t_meeting_to_date)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatat_meeting_book["to_dt"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "to_dt";
//	fr_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "fr_time";
	$fdata["GoodName"] = "fr_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","fr_time");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "fr_time";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIME(t_meeting_from_date)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 0;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatat_meeting_book["fr_time"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "fr_time";
//	to_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "to_time";
	$fdata["GoodName"] = "to_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","to_time");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "to_time";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIME(t_meeting_to_date)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatat_meeting_book["to_time"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "to_time";


$tables_data["t_meeting_book"]=&$tdatat_meeting_book;
$field_labels["t_meeting_book"] = &$fieldLabelst_meeting_book;
$fieldToolTips["t_meeting_book"] = &$fieldToolTipst_meeting_book;
$placeHolders["t_meeting_book"] = &$placeHolderst_meeting_book;
$page_titles["t_meeting_book"] = &$pageTitlest_meeting_book;


changeTextControlsToDate( "t_meeting_book" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["t_meeting_book"] = array();
//	ListRoom
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="ListRoom";
		$detailsParam["dOriginalTable"] = "ListRoom";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "listroom";
	$detailsParam["dCaptionTable"] = GetTableCaption("ListRoom");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["t_meeting_book"][$dIndex] = $detailsParam;

	
		$detailsTablesData["t_meeting_book"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["t_meeting_book"][$dIndex]["masterKeys"][]="t_meeting_roomid";

				$detailsTablesData["t_meeting_book"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["t_meeting_book"][$dIndex]["detailKeys"][]="room";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["t_meeting_book"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_t_meeting_book()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_meeting_id,      t_meeting_no,      t_meeting_roomid,      t_meeting_user,      t_meeting_desc,      t_meeting_from_date,      t_meeting_to_date,      user_participant_list,      t_meeting_participant_type,      t_meeting_total_participant,      t_meeting_isminuman,      t_meeting_issnack,      t_meeting_ismakan,      t_meeting_recurring_flag,      t_meeting_status,      DATE(t_meeting_from_date) AS fr_date,      DATE(t_meeting_to_date) AS to_dt,      TIME(t_meeting_from_date) AS fr_time,      TIME(t_meeting_to_date) AS to_time";
$proto0["m_strFrom"] = "FROM      t_meeting_book";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
																																																												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_id",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto6["m_sql"] = "t_meeting_id";
$proto6["m_srcTableName"] = "t_meeting_book";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_no",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto8["m_sql"] = "t_meeting_no";
$proto8["m_srcTableName"] = "t_meeting_book";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_roomid",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto10["m_sql"] = "t_meeting_roomid";
$proto10["m_srcTableName"] = "t_meeting_book";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_user",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto12["m_sql"] = "t_meeting_user";
$proto12["m_srcTableName"] = "t_meeting_book";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_desc",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto14["m_sql"] = "t_meeting_desc";
$proto14["m_srcTableName"] = "t_meeting_book";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_from_date",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto16["m_sql"] = "t_meeting_from_date";
$proto16["m_srcTableName"] = "t_meeting_book";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_to_date",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto18["m_sql"] = "t_meeting_to_date";
$proto18["m_srcTableName"] = "t_meeting_book";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "user_participant_list",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto20["m_sql"] = "user_participant_list";
$proto20["m_srcTableName"] = "t_meeting_book";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_participant_type",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto22["m_sql"] = "t_meeting_participant_type";
$proto22["m_srcTableName"] = "t_meeting_book";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_total_participant",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto24["m_sql"] = "t_meeting_total_participant";
$proto24["m_srcTableName"] = "t_meeting_book";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_isminuman",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto26["m_sql"] = "t_meeting_isminuman";
$proto26["m_srcTableName"] = "t_meeting_book";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_issnack",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto28["m_sql"] = "t_meeting_issnack";
$proto28["m_srcTableName"] = "t_meeting_book";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_ismakan",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto30["m_sql"] = "t_meeting_ismakan";
$proto30["m_srcTableName"] = "t_meeting_book";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_recurring_flag",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto32["m_sql"] = "t_meeting_recurring_flag";
$proto32["m_srcTableName"] = "t_meeting_book";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_status",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto34["m_sql"] = "t_meeting_status";
$proto34["m_srcTableName"] = "t_meeting_book";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$proto37=array();
$proto37["m_functiontype"] = "SQLF_CUSTOM";
$proto37["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "t_meeting_from_date"
));

$proto37["m_arguments"][]=$obj;
$proto37["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto37);

$proto36["m_sql"] = "DATE(t_meeting_from_date)";
$proto36["m_srcTableName"] = "t_meeting_book";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "fr_date";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$proto40=array();
$proto40["m_functiontype"] = "SQLF_CUSTOM";
$proto40["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "t_meeting_to_date"
));

$proto40["m_arguments"][]=$obj;
$proto40["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto40);

$proto39["m_sql"] = "DATE(t_meeting_to_date)";
$proto39["m_srcTableName"] = "t_meeting_book";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "to_dt";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$proto43=array();
$proto43["m_functiontype"] = "SQLF_CUSTOM";
$proto43["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "t_meeting_from_date"
));

$proto43["m_arguments"][]=$obj;
$proto43["m_strFunctionName"] = "TIME";
$obj = new SQLFunctionCall($proto43);

$proto42["m_sql"] = "TIME(t_meeting_from_date)";
$proto42["m_srcTableName"] = "t_meeting_book";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "fr_time";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$proto46=array();
$proto46["m_functiontype"] = "SQLF_CUSTOM";
$proto46["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "t_meeting_to_date"
));

$proto46["m_arguments"][]=$obj;
$proto46["m_strFunctionName"] = "TIME";
$obj = new SQLFunctionCall($proto46);

$proto45["m_sql"] = "TIME(t_meeting_to_date)";
$proto45["m_srcTableName"] = "t_meeting_book";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "to_time";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto48=array();
$proto48["m_link"] = "SQLL_MAIN";
			$proto49=array();
$proto49["m_strName"] = "t_meeting_book";
$proto49["m_srcTableName"] = "t_meeting_book";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "t_meeting_id";
$proto49["m_columns"][] = "t_meeting_roomid";
$proto49["m_columns"][] = "t_meeting_no";
$proto49["m_columns"][] = "t_meeting_user";
$proto49["m_columns"][] = "t_meeting_desc";
$proto49["m_columns"][] = "t_meeting_from_date";
$proto49["m_columns"][] = "t_meeting_to_date";
$proto49["m_columns"][] = "t_meeting_from_time";
$proto49["m_columns"][] = "t_meeting_to_time";
$proto49["m_columns"][] = "user_participant_list";
$proto49["m_columns"][] = "t_meeting_participant_type";
$proto49["m_columns"][] = "t_meeting_total_participant";
$proto49["m_columns"][] = "t_meeting_isminuman";
$proto49["m_columns"][] = "t_meeting_issnack";
$proto49["m_columns"][] = "t_meeting_ismakan";
$proto49["m_columns"][] = "t_meeting_recurring_flag";
$proto49["m_columns"][] = "t_meeting_status";
$proto49["m_columns"][] = "add_user";
$proto49["m_columns"][] = "add_date";
$proto49["m_columns"][] = "edit_user";
$proto49["m_columns"][] = "edit_date";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "t_meeting_book";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "t_meeting_book";
$proto50=array();
$proto50["m_sql"] = "";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="t_meeting_book";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_meeting_book = createSqlQuery_t_meeting_book();


	
																																																												;

																			

$tdatat_meeting_book[".sqlquery"] = $queryData_t_meeting_book;



include_once(getabspath("include/t_meeting_book_events.php"));
$tdatat_meeting_book[".hasEvents"] = true;

?>