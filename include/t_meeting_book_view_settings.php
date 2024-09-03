<?php
$tdatat_meeting_book_view = array();
$tdatat_meeting_book_view[".searchableFields"] = array();
$tdatat_meeting_book_view[".ShortName"] = "t_meeting_book_view";
$tdatat_meeting_book_view[".OwnerID"] = "";
$tdatat_meeting_book_view[".OriginalTable"] = "t_meeting_book";


$tdatat_meeting_book_view[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatat_meeting_book_view[".originalPagesByType"] = $tdatat_meeting_book_view[".pagesByType"];
$tdatat_meeting_book_view[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatat_meeting_book_view[".originalPages"] = $tdatat_meeting_book_view[".pages"];
$tdatat_meeting_book_view[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatat_meeting_book_view[".originalDefaultPages"] = $tdatat_meeting_book_view[".defaultPages"];

//	field labels
$fieldLabelst_meeting_book_view = array();
$fieldToolTipst_meeting_book_view = array();
$pageTitlest_meeting_book_view = array();
$placeHolderst_meeting_book_view = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_meeting_book_view["English"] = array();
	$fieldToolTipst_meeting_book_view["English"] = array();
	$placeHolderst_meeting_book_view["English"] = array();
	$pageTitlest_meeting_book_view["English"] = array();
	$fieldLabelst_meeting_book_view["English"]["t_meeting_id"] = "T Meeting Id";
	$fieldToolTipst_meeting_book_view["English"]["t_meeting_id"] = "";
	$placeHolderst_meeting_book_view["English"]["t_meeting_id"] = "";
	$fieldLabelst_meeting_book_view["English"]["t_meeting_roomid"] = "Room";
	$fieldToolTipst_meeting_book_view["English"]["t_meeting_roomid"] = "";
	$placeHolderst_meeting_book_view["English"]["t_meeting_roomid"] = "";
	$fieldLabelst_meeting_book_view["English"]["t_meeting_no"] = "T Meeting No";
	$fieldToolTipst_meeting_book_view["English"]["t_meeting_no"] = "";
	$placeHolderst_meeting_book_view["English"]["t_meeting_no"] = "";
	$fieldLabelst_meeting_book_view["English"]["t_meeting_user"] = "Resever";
	$fieldToolTipst_meeting_book_view["English"]["t_meeting_user"] = "";
	$placeHolderst_meeting_book_view["English"]["t_meeting_user"] = "";
	$fieldLabelst_meeting_book_view["English"]["t_meeting_desc"] = "Desciption";
	$fieldToolTipst_meeting_book_view["English"]["t_meeting_desc"] = "";
	$placeHolderst_meeting_book_view["English"]["t_meeting_desc"] = "";
	$fieldLabelst_meeting_book_view["English"]["t_meeting_from_date"] = "From";
	$fieldToolTipst_meeting_book_view["English"]["t_meeting_from_date"] = "";
	$placeHolderst_meeting_book_view["English"]["t_meeting_from_date"] = "";
	$fieldLabelst_meeting_book_view["English"]["t_meeting_to_date"] = "To";
	$fieldToolTipst_meeting_book_view["English"]["t_meeting_to_date"] = "";
	$placeHolderst_meeting_book_view["English"]["t_meeting_to_date"] = "";
	$fieldLabelst_meeting_book_view["English"]["user_participant_list"] = "Participant";
	$fieldToolTipst_meeting_book_view["English"]["user_participant_list"] = "";
	$placeHolderst_meeting_book_view["English"]["user_participant_list"] = "";
	$fieldLabelst_meeting_book_view["English"]["t_meeting_participant_type"] = "Type Participant ";
	$fieldToolTipst_meeting_book_view["English"]["t_meeting_participant_type"] = "";
	$placeHolderst_meeting_book_view["English"]["t_meeting_participant_type"] = "";
	$fieldLabelst_meeting_book_view["English"]["t_meeting_total_participant"] = "Amount of Participant";
	$fieldToolTipst_meeting_book_view["English"]["t_meeting_total_participant"] = "";
	$placeHolderst_meeting_book_view["English"]["t_meeting_total_participant"] = "";
	$fieldLabelst_meeting_book_view["English"]["t_meeting_isminuman"] = "T Meeting Isminuman";
	$fieldToolTipst_meeting_book_view["English"]["t_meeting_isminuman"] = "";
	$placeHolderst_meeting_book_view["English"]["t_meeting_isminuman"] = "";
	$fieldLabelst_meeting_book_view["English"]["t_meeting_issnack"] = "T Meeting Issnack";
	$fieldToolTipst_meeting_book_view["English"]["t_meeting_issnack"] = "";
	$placeHolderst_meeting_book_view["English"]["t_meeting_issnack"] = "";
	$fieldLabelst_meeting_book_view["English"]["t_meeting_ismakan"] = "T Meeting Ismakan";
	$fieldToolTipst_meeting_book_view["English"]["t_meeting_ismakan"] = "";
	$placeHolderst_meeting_book_view["English"]["t_meeting_ismakan"] = "";
	$fieldLabelst_meeting_book_view["English"]["t_meeting_recurring_flag"] = "T Meeting Recurring Flag";
	$fieldToolTipst_meeting_book_view["English"]["t_meeting_recurring_flag"] = "";
	$placeHolderst_meeting_book_view["English"]["t_meeting_recurring_flag"] = "";
	$fieldLabelst_meeting_book_view["English"]["t_meeting_status"] = "T Meeting Status";
	$fieldToolTipst_meeting_book_view["English"]["t_meeting_status"] = "";
	$placeHolderst_meeting_book_view["English"]["t_meeting_status"] = "";
	$fieldLabelst_meeting_book_view["English"]["fr_date"] = "Date";
	$fieldToolTipst_meeting_book_view["English"]["fr_date"] = "";
	$placeHolderst_meeting_book_view["English"]["fr_date"] = "";
	$fieldLabelst_meeting_book_view["English"]["to_dt"] = "To Dt";
	$fieldToolTipst_meeting_book_view["English"]["to_dt"] = "";
	$placeHolderst_meeting_book_view["English"]["to_dt"] = "";
	$fieldLabelst_meeting_book_view["English"]["fr_time"] = "Fr Time";
	$fieldToolTipst_meeting_book_view["English"]["fr_time"] = "";
	$placeHolderst_meeting_book_view["English"]["fr_time"] = "";
	$fieldLabelst_meeting_book_view["English"]["to_time"] = "To Time";
	$fieldToolTipst_meeting_book_view["English"]["to_time"] = "";
	$placeHolderst_meeting_book_view["English"]["to_time"] = "";
	if (count($fieldToolTipst_meeting_book_view["English"]))
		$tdatat_meeting_book_view[".isUseToolTips"] = true;
}


	$tdatat_meeting_book_view[".NCSearch"] = true;



$tdatat_meeting_book_view[".shortTableName"] = "t_meeting_book_view";
$tdatat_meeting_book_view[".nSecOptions"] = 0;

$tdatat_meeting_book_view[".mainTableOwnerID"] = "";
$tdatat_meeting_book_view[".entityType"] = 1;
$tdatat_meeting_book_view[".connId"] = "u736239518tsundbat154412412";


$tdatat_meeting_book_view[".strOriginalTableName"] = "t_meeting_book";

	



$tdatat_meeting_book_view[".showAddInPopup"] = false;

$tdatat_meeting_book_view[".showEditInPopup"] = false;

$tdatat_meeting_book_view[".showViewInPopup"] = false;

$tdatat_meeting_book_view[".listAjax"] = false;
//	temporary
//$tdatat_meeting_book_view[".listAjax"] = false;

	$tdatat_meeting_book_view[".audit"] = false;

	$tdatat_meeting_book_view[".locking"] = false;


$pages = $tdatat_meeting_book_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatat_meeting_book_view[".edit"] = true;
	$tdatat_meeting_book_view[".afterEditAction"] = 1;
	$tdatat_meeting_book_view[".closePopupAfterEdit"] = 1;
	$tdatat_meeting_book_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatat_meeting_book_view[".add"] = true;
$tdatat_meeting_book_view[".afterAddAction"] = 1;
$tdatat_meeting_book_view[".closePopupAfterAdd"] = 1;
$tdatat_meeting_book_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatat_meeting_book_view[".list"] = true;
}



$tdatat_meeting_book_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatat_meeting_book_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatat_meeting_book_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatat_meeting_book_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatat_meeting_book_view[".printFriendly"] = true;
}



$tdatat_meeting_book_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatat_meeting_book_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatat_meeting_book_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatat_meeting_book_view[".isUseAjaxSuggest"] = true;



																								

$tdatat_meeting_book_view[".ajaxCodeSnippetAdded"] = false;

$tdatat_meeting_book_view[".buttonsAdded"] = false;

$tdatat_meeting_book_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_meeting_book_view[".isUseTimeForSearch"] = false;


$tdatat_meeting_book_view[".badgeColor"] = "D2AF80";


$tdatat_meeting_book_view[".allSearchFields"] = array();
$tdatat_meeting_book_view[".filterFields"] = array();
$tdatat_meeting_book_view[".requiredSearchFields"] = array();

$tdatat_meeting_book_view[".googleLikeFields"] = array();
$tdatat_meeting_book_view[".googleLikeFields"][] = "t_meeting_id";
$tdatat_meeting_book_view[".googleLikeFields"][] = "t_meeting_no";
$tdatat_meeting_book_view[".googleLikeFields"][] = "t_meeting_roomid";
$tdatat_meeting_book_view[".googleLikeFields"][] = "t_meeting_user";
$tdatat_meeting_book_view[".googleLikeFields"][] = "t_meeting_desc";
$tdatat_meeting_book_view[".googleLikeFields"][] = "t_meeting_from_date";
$tdatat_meeting_book_view[".googleLikeFields"][] = "t_meeting_to_date";
$tdatat_meeting_book_view[".googleLikeFields"][] = "user_participant_list";
$tdatat_meeting_book_view[".googleLikeFields"][] = "t_meeting_participant_type";
$tdatat_meeting_book_view[".googleLikeFields"][] = "t_meeting_total_participant";
$tdatat_meeting_book_view[".googleLikeFields"][] = "t_meeting_isminuman";
$tdatat_meeting_book_view[".googleLikeFields"][] = "t_meeting_issnack";
$tdatat_meeting_book_view[".googleLikeFields"][] = "t_meeting_ismakan";
$tdatat_meeting_book_view[".googleLikeFields"][] = "t_meeting_recurring_flag";
$tdatat_meeting_book_view[".googleLikeFields"][] = "t_meeting_status";
$tdatat_meeting_book_view[".googleLikeFields"][] = "fr_date";
$tdatat_meeting_book_view[".googleLikeFields"][] = "to_dt";
$tdatat_meeting_book_view[".googleLikeFields"][] = "fr_time";
$tdatat_meeting_book_view[".googleLikeFields"][] = "to_time";



$tdatat_meeting_book_view[".tableType"] = "list";

$tdatat_meeting_book_view[".printerPageOrientation"] = 0;
$tdatat_meeting_book_view[".nPrinterPageScale"] = 100;

$tdatat_meeting_book_view[".nPrinterSplitRecords"] = 40;

$tdatat_meeting_book_view[".geocodingEnabled"] = false;










$tdatat_meeting_book_view[".pageSize"] = 20;

$tdatat_meeting_book_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatat_meeting_book_view[".strOrderBy"] = $tstrOrderBy;

$tdatat_meeting_book_view[".orderindexes"] = array();


$tdatat_meeting_book_view[".sqlHead"] = "SELECT t_meeting_id,  t_meeting_no,  t_meeting_roomid,  t_meeting_user,  t_meeting_desc,  t_meeting_from_date,  t_meeting_to_date,  user_participant_list,  t_meeting_participant_type,  t_meeting_total_participant,  t_meeting_isminuman,  t_meeting_issnack,  t_meeting_ismakan,  t_meeting_recurring_flag,  t_meeting_status,  DATE(t_meeting_from_date) AS fr_date,  DATE(t_meeting_to_date) AS to_dt,  TIME(t_meeting_from_date) AS fr_time,  TIME(t_meeting_to_date) AS to_time";
$tdatat_meeting_book_view[".sqlFrom"] = "FROM t_meeting_book";
$tdatat_meeting_book_view[".sqlWhereExpr"] = "(meet_approve =1)";
$tdatat_meeting_book_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_meeting_book_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_meeting_book_view[".arrGroupsPerPage"] = $arrGPP;

$tdatat_meeting_book_view[".highlightSearchResults"] = true;

$tableKeyst_meeting_book_view = array();
$tableKeyst_meeting_book_view[] = "t_meeting_id";
$tdatat_meeting_book_view[".Keys"] = $tableKeyst_meeting_book_view;


$tdatat_meeting_book_view[".hideMobileList"] = array();




//	t_meeting_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "t_meeting_id";
	$fdata["GoodName"] = "t_meeting_id";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book_view","t_meeting_id");
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


	$tdatat_meeting_book_view["t_meeting_id"] = $fdata;
		$tdatat_meeting_book_view[".searchableFields"][] = "t_meeting_id";
//	t_meeting_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "t_meeting_no";
	$fdata["GoodName"] = "t_meeting_no";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book_view","t_meeting_no");
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


	$tdatat_meeting_book_view["t_meeting_no"] = $fdata;
		$tdatat_meeting_book_view[".searchableFields"][] = "t_meeting_no";
//	t_meeting_roomid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "t_meeting_roomid";
	$fdata["GoodName"] = "t_meeting_roomid";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book_view","t_meeting_roomid");
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

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
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


	$tdatat_meeting_book_view["t_meeting_roomid"] = $fdata;
		$tdatat_meeting_book_view[".searchableFields"][] = "t_meeting_roomid";
//	t_meeting_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "t_meeting_user";
	$fdata["GoodName"] = "t_meeting_user";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book_view","t_meeting_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_meeting_user";

		$fdata["sourceSingle"] = "t_meeting_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_meeting_user";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatat_meeting_book_view["t_meeting_user"] = $fdata;
		$tdatat_meeting_book_view[".searchableFields"][] = "t_meeting_user";
//	t_meeting_desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "t_meeting_desc";
	$fdata["GoodName"] = "t_meeting_desc";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book_view","t_meeting_desc");
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


	$tdatat_meeting_book_view["t_meeting_desc"] = $fdata;
		$tdatat_meeting_book_view[".searchableFields"][] = "t_meeting_desc";
//	t_meeting_from_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "t_meeting_from_date";
	$fdata["GoodName"] = "t_meeting_from_date";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book_view","t_meeting_from_date");
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
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
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


	$tdatat_meeting_book_view["t_meeting_from_date"] = $fdata;
		$tdatat_meeting_book_view[".searchableFields"][] = "t_meeting_from_date";
//	t_meeting_to_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "t_meeting_to_date";
	$fdata["GoodName"] = "t_meeting_to_date";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book_view","t_meeting_to_date");
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
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
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


	$tdatat_meeting_book_view["t_meeting_to_date"] = $fdata;
		$tdatat_meeting_book_view[".searchableFields"][] = "t_meeting_to_date";
//	user_participant_list
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "user_participant_list";
	$fdata["GoodName"] = "user_participant_list";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book_view","user_participant_list");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=500";

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


	$tdatat_meeting_book_view["user_participant_list"] = $fdata;
		$tdatat_meeting_book_view[".searchableFields"][] = "user_participant_list";
//	t_meeting_participant_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "t_meeting_participant_type";
	$fdata["GoodName"] = "t_meeting_participant_type";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book_view","t_meeting_participant_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_meeting_participant_type";

		$fdata["sourceSingle"] = "t_meeting_participant_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_meeting_participant_type";

	
	
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


	$tdatat_meeting_book_view["t_meeting_participant_type"] = $fdata;
		$tdatat_meeting_book_view[".searchableFields"][] = "t_meeting_participant_type";
//	t_meeting_total_participant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "t_meeting_total_participant";
	$fdata["GoodName"] = "t_meeting_total_participant";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book_view","t_meeting_total_participant");
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


	$tdatat_meeting_book_view["t_meeting_total_participant"] = $fdata;
		$tdatat_meeting_book_view[".searchableFields"][] = "t_meeting_total_participant";
//	t_meeting_isminuman
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "t_meeting_isminuman";
	$fdata["GoodName"] = "t_meeting_isminuman";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book_view","t_meeting_isminuman");
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


	$tdatat_meeting_book_view["t_meeting_isminuman"] = $fdata;
		$tdatat_meeting_book_view[".searchableFields"][] = "t_meeting_isminuman";
//	t_meeting_issnack
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "t_meeting_issnack";
	$fdata["GoodName"] = "t_meeting_issnack";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book_view","t_meeting_issnack");
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


	$tdatat_meeting_book_view["t_meeting_issnack"] = $fdata;
		$tdatat_meeting_book_view[".searchableFields"][] = "t_meeting_issnack";
//	t_meeting_ismakan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "t_meeting_ismakan";
	$fdata["GoodName"] = "t_meeting_ismakan";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book_view","t_meeting_ismakan");
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


	$tdatat_meeting_book_view["t_meeting_ismakan"] = $fdata;
		$tdatat_meeting_book_view[".searchableFields"][] = "t_meeting_ismakan";
//	t_meeting_recurring_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "t_meeting_recurring_flag";
	$fdata["GoodName"] = "t_meeting_recurring_flag";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book_view","t_meeting_recurring_flag");
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


	$tdatat_meeting_book_view["t_meeting_recurring_flag"] = $fdata;
		$tdatat_meeting_book_view[".searchableFields"][] = "t_meeting_recurring_flag";
//	t_meeting_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "t_meeting_status";
	$fdata["GoodName"] = "t_meeting_status";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book_view","t_meeting_status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_meeting_status";

		$fdata["sourceSingle"] = "t_meeting_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_meeting_status";

	
	
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


	$tdatat_meeting_book_view["t_meeting_status"] = $fdata;
		$tdatat_meeting_book_view[".searchableFields"][] = "t_meeting_status";
//	fr_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "fr_date";
	$fdata["GoodName"] = "fr_date";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("t_meeting_book_view","fr_date");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
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


	$tdatat_meeting_book_view["fr_date"] = $fdata;
		$tdatat_meeting_book_view[".searchableFields"][] = "fr_date";
//	to_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "to_dt";
	$fdata["GoodName"] = "to_dt";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("t_meeting_book_view","to_dt");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
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


	$tdatat_meeting_book_view["to_dt"] = $fdata;
		$tdatat_meeting_book_view[".searchableFields"][] = "to_dt";
//	fr_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "fr_time";
	$fdata["GoodName"] = "fr_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("t_meeting_book_view","fr_time");
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
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


	$tdatat_meeting_book_view["fr_time"] = $fdata;
		$tdatat_meeting_book_view[".searchableFields"][] = "fr_time";
//	to_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "to_time";
	$fdata["GoodName"] = "to_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("t_meeting_book_view","to_time");
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
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


	$tdatat_meeting_book_view["to_time"] = $fdata;
		$tdatat_meeting_book_view[".searchableFields"][] = "to_time";


$tables_data["t_meeting_book_view"]=&$tdatat_meeting_book_view;
$field_labels["t_meeting_book_view"] = &$fieldLabelst_meeting_book_view;
$fieldToolTips["t_meeting_book_view"] = &$fieldToolTipst_meeting_book_view;
$placeHolders["t_meeting_book_view"] = &$placeHolderst_meeting_book_view;
$page_titles["t_meeting_book_view"] = &$pageTitlest_meeting_book_view;


changeTextControlsToDate( "t_meeting_book_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["t_meeting_book_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["t_meeting_book_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_t_meeting_book_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_meeting_id,  t_meeting_no,  t_meeting_roomid,  t_meeting_user,  t_meeting_desc,  t_meeting_from_date,  t_meeting_to_date,  user_participant_list,  t_meeting_participant_type,  t_meeting_total_participant,  t_meeting_isminuman,  t_meeting_issnack,  t_meeting_ismakan,  t_meeting_recurring_flag,  t_meeting_status,  DATE(t_meeting_from_date) AS fr_date,  DATE(t_meeting_to_date) AS to_dt,  TIME(t_meeting_from_date) AS fr_time,  TIME(t_meeting_to_date) AS to_time";
$proto0["m_strFrom"] = "FROM t_meeting_book";
$proto0["m_strWhere"] = "(meet_approve =1)";
$proto0["m_strOrderBy"] = "";
	
																																																												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "meet_approve =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "meet_approve",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book_view"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=1";
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
	"m_srcTableName" => "t_meeting_book_view"
));

$proto6["m_sql"] = "t_meeting_id";
$proto6["m_srcTableName"] = "t_meeting_book_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_no",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book_view"
));

$proto8["m_sql"] = "t_meeting_no";
$proto8["m_srcTableName"] = "t_meeting_book_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_roomid",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book_view"
));

$proto10["m_sql"] = "t_meeting_roomid";
$proto10["m_srcTableName"] = "t_meeting_book_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_user",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book_view"
));

$proto12["m_sql"] = "t_meeting_user";
$proto12["m_srcTableName"] = "t_meeting_book_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_desc",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book_view"
));

$proto14["m_sql"] = "t_meeting_desc";
$proto14["m_srcTableName"] = "t_meeting_book_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_from_date",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book_view"
));

$proto16["m_sql"] = "t_meeting_from_date";
$proto16["m_srcTableName"] = "t_meeting_book_view";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_to_date",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book_view"
));

$proto18["m_sql"] = "t_meeting_to_date";
$proto18["m_srcTableName"] = "t_meeting_book_view";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "user_participant_list",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book_view"
));

$proto20["m_sql"] = "user_participant_list";
$proto20["m_srcTableName"] = "t_meeting_book_view";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_participant_type",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book_view"
));

$proto22["m_sql"] = "t_meeting_participant_type";
$proto22["m_srcTableName"] = "t_meeting_book_view";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_total_participant",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book_view"
));

$proto24["m_sql"] = "t_meeting_total_participant";
$proto24["m_srcTableName"] = "t_meeting_book_view";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_isminuman",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book_view"
));

$proto26["m_sql"] = "t_meeting_isminuman";
$proto26["m_srcTableName"] = "t_meeting_book_view";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_issnack",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book_view"
));

$proto28["m_sql"] = "t_meeting_issnack";
$proto28["m_srcTableName"] = "t_meeting_book_view";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_ismakan",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book_view"
));

$proto30["m_sql"] = "t_meeting_ismakan";
$proto30["m_srcTableName"] = "t_meeting_book_view";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_recurring_flag",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book_view"
));

$proto32["m_sql"] = "t_meeting_recurring_flag";
$proto32["m_srcTableName"] = "t_meeting_book_view";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_status",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book_view"
));

$proto34["m_sql"] = "t_meeting_status";
$proto34["m_srcTableName"] = "t_meeting_book_view";
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
$proto36["m_srcTableName"] = "t_meeting_book_view";
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
$proto39["m_srcTableName"] = "t_meeting_book_view";
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
$proto42["m_srcTableName"] = "t_meeting_book_view";
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
$proto45["m_srcTableName"] = "t_meeting_book_view";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "to_time";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto48=array();
$proto48["m_link"] = "SQLL_MAIN";
			$proto49=array();
$proto49["m_strName"] = "t_meeting_book";
$proto49["m_srcTableName"] = "t_meeting_book_view";
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
$proto49["m_columns"][] = "meet_approve";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "t_meeting_book";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "t_meeting_book_view";
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
$proto0["m_srcTableName"]="t_meeting_book_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_meeting_book_view = createSqlQuery_t_meeting_book_view();


	
																																																												;

																			

$tdatat_meeting_book_view[".sqlquery"] = $queryData_t_meeting_book_view;



$tdatat_meeting_book_view[".hasEvents"] = false;

?>