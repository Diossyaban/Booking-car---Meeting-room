<?php
$tdatam_meeting_room4 = array();
$tdatam_meeting_room4[".searchableFields"] = array();
$tdatam_meeting_room4[".ShortName"] = "m_meeting_room4";
$tdatam_meeting_room4[".OwnerID"] = "";
$tdatam_meeting_room4[".OriginalTable"] = "m_meeting_room";


$tdatam_meeting_room4[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatam_meeting_room4[".originalPagesByType"] = $tdatam_meeting_room4[".pagesByType"];
$tdatam_meeting_room4[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatam_meeting_room4[".originalPages"] = $tdatam_meeting_room4[".pages"];
$tdatam_meeting_room4[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatam_meeting_room4[".originalDefaultPages"] = $tdatam_meeting_room4[".defaultPages"];

//	field labels
$fieldLabelsm_meeting_room4 = array();
$fieldToolTipsm_meeting_room4 = array();
$pageTitlesm_meeting_room4 = array();
$placeHoldersm_meeting_room4 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_meeting_room4["English"] = array();
	$fieldToolTipsm_meeting_room4["English"] = array();
	$placeHoldersm_meeting_room4["English"] = array();
	$pageTitlesm_meeting_room4["English"] = array();
	$fieldLabelsm_meeting_room4["English"]["id"] = "Id";
	$fieldToolTipsm_meeting_room4["English"]["id"] = "";
	$placeHoldersm_meeting_room4["English"]["id"] = "";
	$fieldLabelsm_meeting_room4["English"]["m_meeting_room_name"] = "M Meeting Room Name";
	$fieldToolTipsm_meeting_room4["English"]["m_meeting_room_name"] = "";
	$placeHoldersm_meeting_room4["English"]["m_meeting_room_name"] = "";
	$fieldLabelsm_meeting_room4["English"]["m_meeting_room_location_id"] = "M Meeting Room Location Id";
	$fieldToolTipsm_meeting_room4["English"]["m_meeting_room_location_id"] = "";
	$placeHoldersm_meeting_room4["English"]["m_meeting_room_location_id"] = "";
	$fieldLabelsm_meeting_room4["English"]["m_meeting_room_isactive"] = "M Meeting Room Isactive";
	$fieldToolTipsm_meeting_room4["English"]["m_meeting_room_isactive"] = "";
	$placeHoldersm_meeting_room4["English"]["m_meeting_room_isactive"] = "";
	$fieldLabelsm_meeting_room4["English"]["is_active"] = "Is Active";
	$fieldToolTipsm_meeting_room4["English"]["is_active"] = "";
	$placeHoldersm_meeting_room4["English"]["is_active"] = "";
	$fieldLabelsm_meeting_room4["English"]["is_delete"] = "Is Delete";
	$fieldToolTipsm_meeting_room4["English"]["is_delete"] = "";
	$placeHoldersm_meeting_room4["English"]["is_delete"] = "";
	$fieldLabelsm_meeting_room4["English"]["deleted_date"] = "Deleted Date";
	$fieldToolTipsm_meeting_room4["English"]["deleted_date"] = "";
	$placeHoldersm_meeting_room4["English"]["deleted_date"] = "";
	$fieldLabelsm_meeting_room4["English"]["created_date"] = "Created Date";
	$fieldToolTipsm_meeting_room4["English"]["created_date"] = "";
	$placeHoldersm_meeting_room4["English"]["created_date"] = "";
	$fieldLabelsm_meeting_room4["English"]["created_by"] = "Created By";
	$fieldToolTipsm_meeting_room4["English"]["created_by"] = "";
	$placeHoldersm_meeting_room4["English"]["created_by"] = "";
	$fieldLabelsm_meeting_room4["English"]["last_update_by"] = "Last Update By";
	$fieldToolTipsm_meeting_room4["English"]["last_update_by"] = "";
	$placeHoldersm_meeting_room4["English"]["last_update_by"] = "";
	$fieldLabelsm_meeting_room4["English"]["last_update_date"] = "Last Update Date";
	$fieldToolTipsm_meeting_room4["English"]["last_update_date"] = "";
	$placeHoldersm_meeting_room4["English"]["last_update_date"] = "";
	$fieldLabelsm_meeting_room4["English"]["capacity"] = "Capacity";
	$fieldToolTipsm_meeting_room4["English"]["capacity"] = "";
	$placeHoldersm_meeting_room4["English"]["capacity"] = "";
	if (count($fieldToolTipsm_meeting_room4["English"]))
		$tdatam_meeting_room4[".isUseToolTips"] = true;
}


	$tdatam_meeting_room4[".NCSearch"] = true;



$tdatam_meeting_room4[".shortTableName"] = "m_meeting_room4";
$tdatam_meeting_room4[".nSecOptions"] = 0;

$tdatam_meeting_room4[".mainTableOwnerID"] = "";
$tdatam_meeting_room4[".entityType"] = 1;
$tdatam_meeting_room4[".connId"] = "u736239518tsundbat154412412";


$tdatam_meeting_room4[".strOriginalTableName"] = "m_meeting_room";

	



$tdatam_meeting_room4[".showAddInPopup"] = false;

$tdatam_meeting_room4[".showEditInPopup"] = false;

$tdatam_meeting_room4[".showViewInPopup"] = false;

$tdatam_meeting_room4[".listAjax"] = false;
//	temporary
//$tdatam_meeting_room4[".listAjax"] = false;

	$tdatam_meeting_room4[".audit"] = false;

	$tdatam_meeting_room4[".locking"] = false;


$pages = $tdatam_meeting_room4[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_meeting_room4[".edit"] = true;
	$tdatam_meeting_room4[".afterEditAction"] = 1;
	$tdatam_meeting_room4[".closePopupAfterEdit"] = 1;
	$tdatam_meeting_room4[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_meeting_room4[".add"] = true;
$tdatam_meeting_room4[".afterAddAction"] = 1;
$tdatam_meeting_room4[".closePopupAfterAdd"] = 1;
$tdatam_meeting_room4[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_meeting_room4[".list"] = true;
}



$tdatam_meeting_room4[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_meeting_room4[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_meeting_room4[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_meeting_room4[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_meeting_room4[".printFriendly"] = true;
}



$tdatam_meeting_room4[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_meeting_room4[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_meeting_room4[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_meeting_room4[".isUseAjaxSuggest"] = true;



																								

$tdatam_meeting_room4[".ajaxCodeSnippetAdded"] = false;

$tdatam_meeting_room4[".buttonsAdded"] = false;

$tdatam_meeting_room4[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_meeting_room4[".isUseTimeForSearch"] = false;


$tdatam_meeting_room4[".badgeColor"] = "D2691E";


$tdatam_meeting_room4[".allSearchFields"] = array();
$tdatam_meeting_room4[".filterFields"] = array();
$tdatam_meeting_room4[".requiredSearchFields"] = array();

$tdatam_meeting_room4[".googleLikeFields"] = array();
$tdatam_meeting_room4[".googleLikeFields"][] = "id";
$tdatam_meeting_room4[".googleLikeFields"][] = "m_meeting_room_name";
$tdatam_meeting_room4[".googleLikeFields"][] = "m_meeting_room_location_id";
$tdatam_meeting_room4[".googleLikeFields"][] = "m_meeting_room_isactive";
$tdatam_meeting_room4[".googleLikeFields"][] = "is_active";
$tdatam_meeting_room4[".googleLikeFields"][] = "is_delete";
$tdatam_meeting_room4[".googleLikeFields"][] = "deleted_date";
$tdatam_meeting_room4[".googleLikeFields"][] = "created_date";
$tdatam_meeting_room4[".googleLikeFields"][] = "created_by";
$tdatam_meeting_room4[".googleLikeFields"][] = "last_update_by";
$tdatam_meeting_room4[".googleLikeFields"][] = "last_update_date";
$tdatam_meeting_room4[".googleLikeFields"][] = "capacity";



$tdatam_meeting_room4[".tableType"] = "list";

$tdatam_meeting_room4[".printerPageOrientation"] = 0;
$tdatam_meeting_room4[".nPrinterPageScale"] = 100;

$tdatam_meeting_room4[".nPrinterSplitRecords"] = 40;

$tdatam_meeting_room4[".geocodingEnabled"] = false;










$tdatam_meeting_room4[".pageSize"] = 20;

$tdatam_meeting_room4[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `m_meeting_room_name` ASC";
$tdatam_meeting_room4[".strOrderBy"] = $tstrOrderBy;

$tdatam_meeting_room4[".orderindexes"] = array();
	$tdatam_meeting_room4[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "m_meeting_room_name");



$tdatam_meeting_room4[".sqlHead"] = "SELECT `id`,          `m_meeting_room_name`,          `m_meeting_room_location_id`,          `m_meeting_room_isactive`,          `is_active`,          `is_delete`,          `deleted_date`,          `created_date`,          `created_by`,          `last_update_by`,          `last_update_date`,          `capacity`";
$tdatam_meeting_room4[".sqlFrom"] = "FROM `m_meeting_room`";
$tdatam_meeting_room4[".sqlWhereExpr"] = "(capacity = 18 AND :session_peserta > 10) OR    (capacity = 12 AND :session_peserta > 5 AND :session_peserta <= 12) OR    (capacity = 6 AND :session_peserta > 3 AND :session_peserta <= 6) OR    (capacity = 4 AND :session_peserta <= 4)";
$tdatam_meeting_room4[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatam_meeting_room4[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_meeting_room4[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_meeting_room4[".arrGroupsPerPage"] = $arrGPP;

$tdatam_meeting_room4[".highlightSearchResults"] = true;

$tableKeysm_meeting_room4 = array();
$tableKeysm_meeting_room4[] = "id";
$tdatam_meeting_room4[".Keys"] = $tableKeysm_meeting_room4;


$tdatam_meeting_room4[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room4","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`id`";

	
	
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


	$tdatam_meeting_room4["id"] = $fdata;
		$tdatam_meeting_room4[".searchableFields"][] = "id";
//	m_meeting_room_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "m_meeting_room_name";
	$fdata["GoodName"] = "m_meeting_room_name";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room4","m_meeting_room_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_meeting_room_name";

		$fdata["sourceSingle"] = "m_meeting_room_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`m_meeting_room_name`";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatam_meeting_room4["m_meeting_room_name"] = $fdata;
		$tdatam_meeting_room4[".searchableFields"][] = "m_meeting_room_name";
//	m_meeting_room_location_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "m_meeting_room_location_id";
	$fdata["GoodName"] = "m_meeting_room_location_id";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room4","m_meeting_room_location_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_meeting_room_location_id";

		$fdata["sourceSingle"] = "m_meeting_room_location_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`m_meeting_room_location_id`";

	
	
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


	$tdatam_meeting_room4["m_meeting_room_location_id"] = $fdata;
		$tdatam_meeting_room4[".searchableFields"][] = "m_meeting_room_location_id";
//	m_meeting_room_isactive
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "m_meeting_room_isactive";
	$fdata["GoodName"] = "m_meeting_room_isactive";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room4","m_meeting_room_isactive");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_meeting_room_isactive";

		$fdata["sourceSingle"] = "m_meeting_room_isactive";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`m_meeting_room_isactive`";

	
	
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


	$tdatam_meeting_room4["m_meeting_room_isactive"] = $fdata;
		$tdatam_meeting_room4[".searchableFields"][] = "m_meeting_room_isactive";
//	is_active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "is_active";
	$fdata["GoodName"] = "is_active";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room4","is_active");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "is_active";

		$fdata["sourceSingle"] = "is_active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_active`";

	
	
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


	$tdatam_meeting_room4["is_active"] = $fdata;
		$tdatam_meeting_room4[".searchableFields"][] = "is_active";
//	is_delete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "is_delete";
	$fdata["GoodName"] = "is_delete";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room4","is_delete");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "is_delete";

		$fdata["sourceSingle"] = "is_delete";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_delete`";

	
	
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


	$tdatam_meeting_room4["is_delete"] = $fdata;
		$tdatam_meeting_room4[".searchableFields"][] = "is_delete";
//	deleted_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "deleted_date";
	$fdata["GoodName"] = "deleted_date";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room4","deleted_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "deleted_date";

		$fdata["sourceSingle"] = "deleted_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`deleted_date`";

	
	
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


	$tdatam_meeting_room4["deleted_date"] = $fdata;
		$tdatam_meeting_room4[".searchableFields"][] = "deleted_date";
//	created_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "created_date";
	$fdata["GoodName"] = "created_date";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room4","created_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created_date";

		$fdata["sourceSingle"] = "created_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`created_date`";

	
	
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


	$tdatam_meeting_room4["created_date"] = $fdata;
		$tdatam_meeting_room4[".searchableFields"][] = "created_date";
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room4","created_by");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "created_by";

		$fdata["sourceSingle"] = "created_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`created_by`";

	
	
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


	$tdatam_meeting_room4["created_by"] = $fdata;
		$tdatam_meeting_room4[".searchableFields"][] = "created_by";
//	last_update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "last_update_by";
	$fdata["GoodName"] = "last_update_by";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room4","last_update_by");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "last_update_by";

		$fdata["sourceSingle"] = "last_update_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`last_update_by`";

	
	
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


	$tdatam_meeting_room4["last_update_by"] = $fdata;
		$tdatam_meeting_room4[".searchableFields"][] = "last_update_by";
//	last_update_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "last_update_date";
	$fdata["GoodName"] = "last_update_date";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room4","last_update_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "last_update_date";

		$fdata["sourceSingle"] = "last_update_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`last_update_date`";

	
	
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


	$tdatam_meeting_room4["last_update_date"] = $fdata;
		$tdatam_meeting_room4[".searchableFields"][] = "last_update_date";
//	capacity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "capacity";
	$fdata["GoodName"] = "capacity";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room4","capacity");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "capacity";

		$fdata["sourceSingle"] = "capacity";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`capacity`";

	
	
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


	$tdatam_meeting_room4["capacity"] = $fdata;
		$tdatam_meeting_room4[".searchableFields"][] = "capacity";


$tables_data["m_meeting_room4"]=&$tdatam_meeting_room4;
$field_labels["m_meeting_room4"] = &$fieldLabelsm_meeting_room4;
$fieldToolTips["m_meeting_room4"] = &$fieldToolTipsm_meeting_room4;
$placeHolders["m_meeting_room4"] = &$placeHoldersm_meeting_room4;
$page_titles["m_meeting_room4"] = &$pageTitlesm_meeting_room4;


changeTextControlsToDate( "m_meeting_room4" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_meeting_room4"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_meeting_room4"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_meeting_room4()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,          `m_meeting_room_name`,          `m_meeting_room_location_id`,          `m_meeting_room_isactive`,          `is_active`,          `is_delete`,          `deleted_date`,          `created_date`,          `created_by`,          `last_update_by`,          `last_update_date`,          `capacity`";
$proto0["m_strFrom"] = "FROM `m_meeting_room`";
$proto0["m_strWhere"] = "(capacity = 18 AND :session_peserta > 10) OR    (capacity = 12 AND :session_peserta > 5 AND :session_peserta <= 12) OR    (capacity = 6 AND :session_peserta > 3 AND :session_peserta <= 6) OR    (capacity = 4 AND :session_peserta <= 4)";
$proto0["m_strOrderBy"] = "ORDER BY `m_meeting_room_name` ASC";
	
																																																												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(capacity = 18 AND :session_peserta > 10) OR    (capacity = 12 AND :session_peserta > 5 AND :session_peserta <= 12) OR    (capacity = 6 AND :session_peserta > 3 AND :session_peserta <= 6) OR    (capacity = 4 AND :session_peserta <= 4)";
$proto2["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(capacity = 18 AND :session_peserta > 10) OR    (capacity = 12 AND :session_peserta > 5 AND :session_peserta <= 12) OR    (capacity = 6 AND :session_peserta > 3 AND :session_peserta <= 6) OR    (capacity = 4 AND :session_peserta <= 4)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "capacity = 18 AND :session_peserta > 10";
$proto4["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "capacity = 18 AND :session_peserta > 10"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
						$proto6=array();
$proto6["m_sql"] = "capacity = 18";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "capacity",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room4"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "= 18";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto4["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = ":session_peserta > 10";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLNonParsed(array(
	"m_sql" => ":session_peserta"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "> 10";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto4["m_contained"][]=$obj;
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto10=array();
$proto10["m_sql"] = "capacity = 12 AND :session_peserta > 5 AND :session_peserta <= 12";
$proto10["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "capacity = 12 AND :session_peserta > 5 AND :session_peserta <= 12"
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
						$proto12=array();
$proto12["m_sql"] = "capacity = 12";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "capacity",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room4"
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "= 12";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

			$proto10["m_contained"][]=$obj;
						$proto14=array();
$proto14["m_sql"] = ":session_peserta > 5";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLNonParsed(array(
	"m_sql" => ":session_peserta"
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "> 5";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

			$proto10["m_contained"][]=$obj;
						$proto16=array();
$proto16["m_sql"] = ":session_peserta <= 12";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLNonParsed(array(
	"m_sql" => ":session_peserta"
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "<= 12";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

			$proto10["m_contained"][]=$obj;
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = true;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

			$proto2["m_contained"][]=$obj;
						$proto18=array();
$proto18["m_sql"] = "capacity = 6 AND :session_peserta > 3 AND :session_peserta <= 6";
$proto18["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "capacity = 6 AND :session_peserta > 3 AND :session_peserta <= 6"
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
						$proto20=array();
$proto20["m_sql"] = "capacity = 6";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "capacity",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room4"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "= 6";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

			$proto18["m_contained"][]=$obj;
						$proto22=array();
$proto22["m_sql"] = ":session_peserta > 3";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLNonParsed(array(
	"m_sql" => ":session_peserta"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "> 3";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

			$proto18["m_contained"][]=$obj;
						$proto24=array();
$proto24["m_sql"] = ":session_peserta <= 6";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLNonParsed(array(
	"m_sql" => ":session_peserta"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "<= 6";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

			$proto18["m_contained"][]=$obj;
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = true;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

			$proto2["m_contained"][]=$obj;
						$proto26=array();
$proto26["m_sql"] = "capacity = 4 AND :session_peserta <= 4";
$proto26["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "capacity = 4 AND :session_peserta <= 4"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
						$proto28=array();
$proto28["m_sql"] = "capacity = 4";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "capacity",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room4"
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "= 4";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

			$proto26["m_contained"][]=$obj;
						$proto30=array();
$proto30["m_sql"] = ":session_peserta <= 4";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLNonParsed(array(
	"m_sql" => ":session_peserta"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "<= 4";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

			$proto26["m_contained"][]=$obj;
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = true;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room4"
));

$proto34["m_sql"] = "`id`";
$proto34["m_srcTableName"] = "m_meeting_room4";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "m_meeting_room_name",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room4"
));

$proto36["m_sql"] = "`m_meeting_room_name`";
$proto36["m_srcTableName"] = "m_meeting_room4";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "m_meeting_room_location_id",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room4"
));

$proto38["m_sql"] = "`m_meeting_room_location_id`";
$proto38["m_srcTableName"] = "m_meeting_room4";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "m_meeting_room_isactive",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room4"
));

$proto40["m_sql"] = "`m_meeting_room_isactive`";
$proto40["m_srcTableName"] = "m_meeting_room4";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room4"
));

$proto42["m_sql"] = "`is_active`";
$proto42["m_srcTableName"] = "m_meeting_room4";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "is_delete",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room4"
));

$proto44["m_sql"] = "`is_delete`";
$proto44["m_srcTableName"] = "m_meeting_room4";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "deleted_date",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room4"
));

$proto46["m_sql"] = "`deleted_date`";
$proto46["m_srcTableName"] = "m_meeting_room4";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "created_date",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room4"
));

$proto48["m_sql"] = "`created_date`";
$proto48["m_srcTableName"] = "m_meeting_room4";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room4"
));

$proto50["m_sql"] = "`created_by`";
$proto50["m_srcTableName"] = "m_meeting_room4";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "last_update_by",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room4"
));

$proto52["m_sql"] = "`last_update_by`";
$proto52["m_srcTableName"] = "m_meeting_room4";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "last_update_date",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room4"
));

$proto54["m_sql"] = "`last_update_date`";
$proto54["m_srcTableName"] = "m_meeting_room4";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "capacity",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room4"
));

$proto56["m_sql"] = "`capacity`";
$proto56["m_srcTableName"] = "m_meeting_room4";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto58=array();
$proto58["m_link"] = "SQLL_MAIN";
			$proto59=array();
$proto59["m_strName"] = "m_meeting_room";
$proto59["m_srcTableName"] = "m_meeting_room4";
$proto59["m_columns"] = array();
$proto59["m_columns"][] = "id";
$proto59["m_columns"][] = "m_meeting_room_name";
$proto59["m_columns"][] = "m_meeting_room_location_id";
$proto59["m_columns"][] = "m_meeting_room_isactive";
$proto59["m_columns"][] = "is_active";
$proto59["m_columns"][] = "is_delete";
$proto59["m_columns"][] = "deleted_date";
$proto59["m_columns"][] = "created_date";
$proto59["m_columns"][] = "created_by";
$proto59["m_columns"][] = "last_update_by";
$proto59["m_columns"][] = "last_update_date";
$proto59["m_columns"][] = "capacity";
$obj = new SQLTable($proto59);

$proto58["m_table"] = $obj;
$proto58["m_sql"] = "`m_meeting_room`";
$proto58["m_alias"] = "";
$proto58["m_srcTableName"] = "m_meeting_room4";
$proto60=array();
$proto60["m_sql"] = "";
$proto60["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto60["m_column"]=$obj;
$proto60["m_contained"] = array();
$proto60["m_strCase"] = "";
$proto60["m_havingmode"] = false;
$proto60["m_inBrackets"] = false;
$proto60["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto60);

$proto58["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto58);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto62=array();
						$obj = new SQLField(array(
	"m_strName" => "m_meeting_room_name",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room4"
));

$proto62["m_column"]=$obj;
$proto62["m_bAsc"] = 1;
$proto62["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto62);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="m_meeting_room4";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_meeting_room4 = createSqlQuery_m_meeting_room4();


	
																																																												;

												

$tdatam_meeting_room4[".sqlquery"] = $queryData_m_meeting_room4;



$tdatam_meeting_room4[".hasEvents"] = false;

?>