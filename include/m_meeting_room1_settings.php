<?php
$tdatam_meeting_room1 = array();
$tdatam_meeting_room1[".searchableFields"] = array();
$tdatam_meeting_room1[".ShortName"] = "m_meeting_room1";
$tdatam_meeting_room1[".OwnerID"] = "";
$tdatam_meeting_room1[".OriginalTable"] = "m_meeting_room";


$tdatam_meeting_room1[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatam_meeting_room1[".originalPagesByType"] = $tdatam_meeting_room1[".pagesByType"];
$tdatam_meeting_room1[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatam_meeting_room1[".originalPages"] = $tdatam_meeting_room1[".pages"];
$tdatam_meeting_room1[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatam_meeting_room1[".originalDefaultPages"] = $tdatam_meeting_room1[".defaultPages"];

//	field labels
$fieldLabelsm_meeting_room1 = array();
$fieldToolTipsm_meeting_room1 = array();
$pageTitlesm_meeting_room1 = array();
$placeHoldersm_meeting_room1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_meeting_room1["English"] = array();
	$fieldToolTipsm_meeting_room1["English"] = array();
	$placeHoldersm_meeting_room1["English"] = array();
	$pageTitlesm_meeting_room1["English"] = array();
	$fieldLabelsm_meeting_room1["English"]["id"] = "Id";
	$fieldToolTipsm_meeting_room1["English"]["id"] = "";
	$placeHoldersm_meeting_room1["English"]["id"] = "";
	$fieldLabelsm_meeting_room1["English"]["m_meeting_room_name"] = "M Meeting Room Name";
	$fieldToolTipsm_meeting_room1["English"]["m_meeting_room_name"] = "";
	$placeHoldersm_meeting_room1["English"]["m_meeting_room_name"] = "";
	$fieldLabelsm_meeting_room1["English"]["m_meeting_room_location_id"] = "M Meeting Room Location Id";
	$fieldToolTipsm_meeting_room1["English"]["m_meeting_room_location_id"] = "";
	$placeHoldersm_meeting_room1["English"]["m_meeting_room_location_id"] = "";
	$fieldLabelsm_meeting_room1["English"]["m_meeting_room_isactive"] = "M Meeting Room Isactive";
	$fieldToolTipsm_meeting_room1["English"]["m_meeting_room_isactive"] = "";
	$placeHoldersm_meeting_room1["English"]["m_meeting_room_isactive"] = "";
	$fieldLabelsm_meeting_room1["English"]["is_active"] = "Is Active";
	$fieldToolTipsm_meeting_room1["English"]["is_active"] = "";
	$placeHoldersm_meeting_room1["English"]["is_active"] = "";
	$fieldLabelsm_meeting_room1["English"]["is_delete"] = "Is Delete";
	$fieldToolTipsm_meeting_room1["English"]["is_delete"] = "";
	$placeHoldersm_meeting_room1["English"]["is_delete"] = "";
	$fieldLabelsm_meeting_room1["English"]["deleted_date"] = "Deleted Date";
	$fieldToolTipsm_meeting_room1["English"]["deleted_date"] = "";
	$placeHoldersm_meeting_room1["English"]["deleted_date"] = "";
	$fieldLabelsm_meeting_room1["English"]["created_date"] = "Created Date";
	$fieldToolTipsm_meeting_room1["English"]["created_date"] = "";
	$placeHoldersm_meeting_room1["English"]["created_date"] = "";
	$fieldLabelsm_meeting_room1["English"]["created_by"] = "Created By";
	$fieldToolTipsm_meeting_room1["English"]["created_by"] = "";
	$placeHoldersm_meeting_room1["English"]["created_by"] = "";
	$fieldLabelsm_meeting_room1["English"]["last_update_by"] = "Last Update By";
	$fieldToolTipsm_meeting_room1["English"]["last_update_by"] = "";
	$placeHoldersm_meeting_room1["English"]["last_update_by"] = "";
	$fieldLabelsm_meeting_room1["English"]["last_update_date"] = "Last Update Date";
	$fieldToolTipsm_meeting_room1["English"]["last_update_date"] = "";
	$placeHoldersm_meeting_room1["English"]["last_update_date"] = "";
	$fieldLabelsm_meeting_room1["English"]["capacity"] = "Capacity";
	$fieldToolTipsm_meeting_room1["English"]["capacity"] = "";
	$placeHoldersm_meeting_room1["English"]["capacity"] = "";
	$fieldLabelsm_meeting_room1["English"]["result"] = "Result";
	$fieldToolTipsm_meeting_room1["English"]["result"] = "";
	$placeHoldersm_meeting_room1["English"]["result"] = "";
	if (count($fieldToolTipsm_meeting_room1["English"]))
		$tdatam_meeting_room1[".isUseToolTips"] = true;
}


	$tdatam_meeting_room1[".NCSearch"] = true;



$tdatam_meeting_room1[".shortTableName"] = "m_meeting_room1";
$tdatam_meeting_room1[".nSecOptions"] = 0;

$tdatam_meeting_room1[".mainTableOwnerID"] = "";
$tdatam_meeting_room1[".entityType"] = 1;
$tdatam_meeting_room1[".connId"] = "u736239518tsundbat154412412";


$tdatam_meeting_room1[".strOriginalTableName"] = "m_meeting_room";

	



$tdatam_meeting_room1[".showAddInPopup"] = false;

$tdatam_meeting_room1[".showEditInPopup"] = false;

$tdatam_meeting_room1[".showViewInPopup"] = false;

$tdatam_meeting_room1[".listAjax"] = false;
//	temporary
//$tdatam_meeting_room1[".listAjax"] = false;

	$tdatam_meeting_room1[".audit"] = false;

	$tdatam_meeting_room1[".locking"] = false;


$pages = $tdatam_meeting_room1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_meeting_room1[".edit"] = true;
	$tdatam_meeting_room1[".afterEditAction"] = 1;
	$tdatam_meeting_room1[".closePopupAfterEdit"] = 1;
	$tdatam_meeting_room1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_meeting_room1[".add"] = true;
$tdatam_meeting_room1[".afterAddAction"] = 1;
$tdatam_meeting_room1[".closePopupAfterAdd"] = 1;
$tdatam_meeting_room1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_meeting_room1[".list"] = true;
}



$tdatam_meeting_room1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_meeting_room1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_meeting_room1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_meeting_room1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_meeting_room1[".printFriendly"] = true;
}



$tdatam_meeting_room1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_meeting_room1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_meeting_room1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_meeting_room1[".isUseAjaxSuggest"] = true;



																								

$tdatam_meeting_room1[".ajaxCodeSnippetAdded"] = false;

$tdatam_meeting_room1[".buttonsAdded"] = false;

$tdatam_meeting_room1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_meeting_room1[".isUseTimeForSearch"] = false;


$tdatam_meeting_room1[".badgeColor"] = "6493EA";


$tdatam_meeting_room1[".allSearchFields"] = array();
$tdatam_meeting_room1[".filterFields"] = array();
$tdatam_meeting_room1[".requiredSearchFields"] = array();

$tdatam_meeting_room1[".googleLikeFields"] = array();
$tdatam_meeting_room1[".googleLikeFields"][] = "id";
$tdatam_meeting_room1[".googleLikeFields"][] = "m_meeting_room_name";
$tdatam_meeting_room1[".googleLikeFields"][] = "m_meeting_room_location_id";
$tdatam_meeting_room1[".googleLikeFields"][] = "m_meeting_room_isactive";
$tdatam_meeting_room1[".googleLikeFields"][] = "is_active";
$tdatam_meeting_room1[".googleLikeFields"][] = "is_delete";
$tdatam_meeting_room1[".googleLikeFields"][] = "deleted_date";
$tdatam_meeting_room1[".googleLikeFields"][] = "created_date";
$tdatam_meeting_room1[".googleLikeFields"][] = "created_by";
$tdatam_meeting_room1[".googleLikeFields"][] = "last_update_by";
$tdatam_meeting_room1[".googleLikeFields"][] = "last_update_date";
$tdatam_meeting_room1[".googleLikeFields"][] = "capacity";
$tdatam_meeting_room1[".googleLikeFields"][] = "result";



$tdatam_meeting_room1[".tableType"] = "list";

$tdatam_meeting_room1[".printerPageOrientation"] = 0;
$tdatam_meeting_room1[".nPrinterPageScale"] = 100;

$tdatam_meeting_room1[".nPrinterSplitRecords"] = 40;

$tdatam_meeting_room1[".geocodingEnabled"] = false;










$tdatam_meeting_room1[".pageSize"] = 20;

$tdatam_meeting_room1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_meeting_room1[".strOrderBy"] = $tstrOrderBy;

$tdatam_meeting_room1[".orderindexes"] = array();


$tdatam_meeting_room1[".sqlHead"] = "SELECT id,      m_meeting_room_name,      m_meeting_room_location_id,      m_meeting_room_isactive,      is_active,      is_delete,      deleted_date,      created_date,      created_by,      last_update_by,      last_update_date,      capacity,      CASE          WHEN capacity BETWEEN 12 AND 16 THEN 1          WHEN capacity BETWEEN 4 AND 6 THEN 2          WHEN capacity BETWEEN 4 AND 6 THEN 3          WHEN capacity BETWEEN 6 AND 12 THEN 4          WHEN capacity BETWEEN 1 AND 4 THEN 5          WHEN capacity BETWEEN 4 AND 6 THEN 6          WHEN capacity BETWEEN 1 AND 4 THEN 7          ELSE NULL      END AS result";
$tdatam_meeting_room1[".sqlFrom"] = "FROM m_meeting_room";
$tdatam_meeting_room1[".sqlWhereExpr"] = "capacity BETWEEN 1 AND 16";
$tdatam_meeting_room1[".sqlTail"] = "";

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
$tdatam_meeting_room1[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_meeting_room1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_meeting_room1[".arrGroupsPerPage"] = $arrGPP;

$tdatam_meeting_room1[".highlightSearchResults"] = true;

$tableKeysm_meeting_room1 = array();
$tableKeysm_meeting_room1[] = "id";
$tdatam_meeting_room1[".Keys"] = $tableKeysm_meeting_room1;


$tdatam_meeting_room1[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room1","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatam_meeting_room1["id"] = $fdata;
		$tdatam_meeting_room1[".searchableFields"][] = "id";
//	m_meeting_room_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "m_meeting_room_name";
	$fdata["GoodName"] = "m_meeting_room_name";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room1","m_meeting_room_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_meeting_room_name";

		$fdata["sourceSingle"] = "m_meeting_room_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_meeting_room_name";

	
	
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


	$tdatam_meeting_room1["m_meeting_room_name"] = $fdata;
		$tdatam_meeting_room1[".searchableFields"][] = "m_meeting_room_name";
//	m_meeting_room_location_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "m_meeting_room_location_id";
	$fdata["GoodName"] = "m_meeting_room_location_id";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room1","m_meeting_room_location_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_meeting_room_location_id";

		$fdata["sourceSingle"] = "m_meeting_room_location_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_meeting_room_location_id";

	
	
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


	$tdatam_meeting_room1["m_meeting_room_location_id"] = $fdata;
		$tdatam_meeting_room1[".searchableFields"][] = "m_meeting_room_location_id";
//	m_meeting_room_isactive
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "m_meeting_room_isactive";
	$fdata["GoodName"] = "m_meeting_room_isactive";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room1","m_meeting_room_isactive");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_meeting_room_isactive";

		$fdata["sourceSingle"] = "m_meeting_room_isactive";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_meeting_room_isactive";

	
	
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


	$tdatam_meeting_room1["m_meeting_room_isactive"] = $fdata;
		$tdatam_meeting_room1[".searchableFields"][] = "m_meeting_room_isactive";
//	is_active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "is_active";
	$fdata["GoodName"] = "is_active";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room1","is_active");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "is_active";

		$fdata["sourceSingle"] = "is_active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_active";

	
	
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


	$tdatam_meeting_room1["is_active"] = $fdata;
		$tdatam_meeting_room1[".searchableFields"][] = "is_active";
//	is_delete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "is_delete";
	$fdata["GoodName"] = "is_delete";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room1","is_delete");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "is_delete";

		$fdata["sourceSingle"] = "is_delete";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_delete";

	
	
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


	$tdatam_meeting_room1["is_delete"] = $fdata;
		$tdatam_meeting_room1[".searchableFields"][] = "is_delete";
//	deleted_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "deleted_date";
	$fdata["GoodName"] = "deleted_date";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room1","deleted_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "deleted_date";

		$fdata["sourceSingle"] = "deleted_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "deleted_date";

	
	
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


	$tdatam_meeting_room1["deleted_date"] = $fdata;
		$tdatam_meeting_room1[".searchableFields"][] = "deleted_date";
//	created_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "created_date";
	$fdata["GoodName"] = "created_date";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room1","created_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created_date";

		$fdata["sourceSingle"] = "created_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_date";

	
	
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


	$tdatam_meeting_room1["created_date"] = $fdata;
		$tdatam_meeting_room1[".searchableFields"][] = "created_date";
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room1","created_by");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "created_by";

		$fdata["sourceSingle"] = "created_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_by";

	
	
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


	$tdatam_meeting_room1["created_by"] = $fdata;
		$tdatam_meeting_room1[".searchableFields"][] = "created_by";
//	last_update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "last_update_by";
	$fdata["GoodName"] = "last_update_by";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room1","last_update_by");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "last_update_by";

		$fdata["sourceSingle"] = "last_update_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_update_by";

	
	
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


	$tdatam_meeting_room1["last_update_by"] = $fdata;
		$tdatam_meeting_room1[".searchableFields"][] = "last_update_by";
//	last_update_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "last_update_date";
	$fdata["GoodName"] = "last_update_date";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room1","last_update_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "last_update_date";

		$fdata["sourceSingle"] = "last_update_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_update_date";

	
	
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


	$tdatam_meeting_room1["last_update_date"] = $fdata;
		$tdatam_meeting_room1[".searchableFields"][] = "last_update_date";
//	capacity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "capacity";
	$fdata["GoodName"] = "capacity";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room1","capacity");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "capacity";

		$fdata["sourceSingle"] = "capacity";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "capacity";

	
	
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


	$tdatam_meeting_room1["capacity"] = $fdata;
		$tdatam_meeting_room1[".searchableFields"][] = "capacity";
//	result
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "result";
	$fdata["GoodName"] = "result";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("m_meeting_room1","result");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "result";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CASE          WHEN capacity BETWEEN 12 AND 16 THEN 1          WHEN capacity BETWEEN 4 AND 6 THEN 2          WHEN capacity BETWEEN 4 AND 6 THEN 3          WHEN capacity BETWEEN 6 AND 12 THEN 4          WHEN capacity BETWEEN 1 AND 4 THEN 5          WHEN capacity BETWEEN 4 AND 6 THEN 6          WHEN capacity BETWEEN 1 AND 4 THEN 7          ELSE NULL      END";

	
	
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


	$tdatam_meeting_room1["result"] = $fdata;
		$tdatam_meeting_room1[".searchableFields"][] = "result";


$tables_data["m_meeting_room1"]=&$tdatam_meeting_room1;
$field_labels["m_meeting_room1"] = &$fieldLabelsm_meeting_room1;
$fieldToolTips["m_meeting_room1"] = &$fieldToolTipsm_meeting_room1;
$placeHolders["m_meeting_room1"] = &$placeHoldersm_meeting_room1;
$page_titles["m_meeting_room1"] = &$pageTitlesm_meeting_room1;


changeTextControlsToDate( "m_meeting_room1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_meeting_room1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_meeting_room1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_meeting_room1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,      m_meeting_room_name,      m_meeting_room_location_id,      m_meeting_room_isactive,      is_active,      is_delete,      deleted_date,      created_date,      created_by,      last_update_by,      last_update_date,      capacity,      CASE          WHEN capacity BETWEEN 12 AND 16 THEN 1          WHEN capacity BETWEEN 4 AND 6 THEN 2          WHEN capacity BETWEEN 4 AND 6 THEN 3          WHEN capacity BETWEEN 6 AND 12 THEN 4          WHEN capacity BETWEEN 1 AND 4 THEN 5          WHEN capacity BETWEEN 4 AND 6 THEN 6          WHEN capacity BETWEEN 1 AND 4 THEN 7          ELSE NULL      END AS result";
$proto0["m_strFrom"] = "FROM m_meeting_room";
$proto0["m_strWhere"] = "capacity BETWEEN 1 AND 16";
$proto0["m_strOrderBy"] = "";
	
																																																												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "capacity BETWEEN 1 AND 16";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "capacity",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room1"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "BETWEEN 1 AND 16";
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
	"m_strName" => "id",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room1"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "m_meeting_room1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "m_meeting_room_name",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room1"
));

$proto8["m_sql"] = "m_meeting_room_name";
$proto8["m_srcTableName"] = "m_meeting_room1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "m_meeting_room_location_id",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room1"
));

$proto10["m_sql"] = "m_meeting_room_location_id";
$proto10["m_srcTableName"] = "m_meeting_room1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "m_meeting_room_isactive",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room1"
));

$proto12["m_sql"] = "m_meeting_room_isactive";
$proto12["m_srcTableName"] = "m_meeting_room1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room1"
));

$proto14["m_sql"] = "is_active";
$proto14["m_srcTableName"] = "m_meeting_room1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "is_delete",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room1"
));

$proto16["m_sql"] = "is_delete";
$proto16["m_srcTableName"] = "m_meeting_room1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "deleted_date",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room1"
));

$proto18["m_sql"] = "deleted_date";
$proto18["m_srcTableName"] = "m_meeting_room1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "created_date",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room1"
));

$proto20["m_sql"] = "created_date";
$proto20["m_srcTableName"] = "m_meeting_room1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room1"
));

$proto22["m_sql"] = "created_by";
$proto22["m_srcTableName"] = "m_meeting_room1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "last_update_by",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room1"
));

$proto24["m_sql"] = "last_update_by";
$proto24["m_srcTableName"] = "m_meeting_room1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "last_update_date",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room1"
));

$proto26["m_sql"] = "last_update_date";
$proto26["m_srcTableName"] = "m_meeting_room1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "capacity",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room1"
));

$proto28["m_sql"] = "capacity";
$proto28["m_srcTableName"] = "m_meeting_room1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE          WHEN capacity BETWEEN 12 AND 16 THEN 1          WHEN capacity BETWEEN 4 AND 6 THEN 2          WHEN capacity BETWEEN 4 AND 6 THEN 3          WHEN capacity BETWEEN 6 AND 12 THEN 4          WHEN capacity BETWEEN 1 AND 4 THEN 5          WHEN capacity BETWEEN 4 AND 6 THEN 6          WHEN capacity BETWEEN 1 AND 4 THEN 7          ELSE NULL      END"
));

$proto30["m_sql"] = "CASE          WHEN capacity BETWEEN 12 AND 16 THEN 1          WHEN capacity BETWEEN 4 AND 6 THEN 2          WHEN capacity BETWEEN 4 AND 6 THEN 3          WHEN capacity BETWEEN 6 AND 12 THEN 4          WHEN capacity BETWEEN 1 AND 4 THEN 5          WHEN capacity BETWEEN 4 AND 6 THEN 6          WHEN capacity BETWEEN 1 AND 4 THEN 7          ELSE NULL      END";
$proto30["m_srcTableName"] = "m_meeting_room1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "result";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "m_meeting_room";
$proto33["m_srcTableName"] = "m_meeting_room1";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id";
$proto33["m_columns"][] = "m_meeting_room_name";
$proto33["m_columns"][] = "m_meeting_room_location_id";
$proto33["m_columns"][] = "m_meeting_room_isactive";
$proto33["m_columns"][] = "is_active";
$proto33["m_columns"][] = "is_delete";
$proto33["m_columns"][] = "deleted_date";
$proto33["m_columns"][] = "created_date";
$proto33["m_columns"][] = "created_by";
$proto33["m_columns"][] = "last_update_by";
$proto33["m_columns"][] = "last_update_date";
$proto33["m_columns"][] = "capacity";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "m_meeting_room";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "m_meeting_room1";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="m_meeting_room1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_meeting_room1 = createSqlQuery_m_meeting_room1();


	
																																																												;

													

$tdatam_meeting_room1[".sqlquery"] = $queryData_m_meeting_room1;



$tdatam_meeting_room1[".hasEvents"] = false;

?>