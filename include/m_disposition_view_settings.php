<?php
$tdatam_disposition_view = array();
$tdatam_disposition_view[".searchableFields"] = array();
$tdatam_disposition_view[".ShortName"] = "m_disposition_view";
$tdatam_disposition_view[".OwnerID"] = "";
$tdatam_disposition_view[".OriginalTable"] = "m_disposition";


$tdatam_disposition_view[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatam_disposition_view[".originalPagesByType"] = $tdatam_disposition_view[".pagesByType"];
$tdatam_disposition_view[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatam_disposition_view[".originalPages"] = $tdatam_disposition_view[".pages"];
$tdatam_disposition_view[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatam_disposition_view[".originalDefaultPages"] = $tdatam_disposition_view[".defaultPages"];

//	field labels
$fieldLabelsm_disposition_view = array();
$fieldToolTipsm_disposition_view = array();
$pageTitlesm_disposition_view = array();
$placeHoldersm_disposition_view = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_disposition_view["English"] = array();
	$fieldToolTipsm_disposition_view["English"] = array();
	$placeHoldersm_disposition_view["English"] = array();
	$pageTitlesm_disposition_view["English"] = array();
	$fieldLabelsm_disposition_view["English"]["t_disposition_id"] = "T Disposition Id";
	$fieldToolTipsm_disposition_view["English"]["t_disposition_id"] = "";
	$placeHoldersm_disposition_view["English"]["t_disposition_id"] = "";
	$fieldLabelsm_disposition_view["English"]["t_disposition_no"] = "T Disposition No";
	$fieldToolTipsm_disposition_view["English"]["t_disposition_no"] = "";
	$placeHoldersm_disposition_view["English"]["t_disposition_no"] = "";
	$fieldLabelsm_disposition_view["English"]["t_disposition_type"] = "T Disposition Type";
	$fieldToolTipsm_disposition_view["English"]["t_disposition_type"] = "";
	$placeHoldersm_disposition_view["English"]["t_disposition_type"] = "";
	$fieldLabelsm_disposition_view["English"]["t_disposition_from"] = "Sender";
	$fieldToolTipsm_disposition_view["English"]["t_disposition_from"] = "";
	$placeHoldersm_disposition_view["English"]["t_disposition_from"] = "";
	$fieldLabelsm_disposition_view["English"]["t_disposition_from_date"] = "T Disposition From Date";
	$fieldToolTipsm_disposition_view["English"]["t_disposition_from_date"] = "";
	$placeHoldersm_disposition_view["English"]["t_disposition_from_date"] = "";
	$fieldLabelsm_disposition_view["English"]["t_disposition_to"] = "Recipient";
	$fieldToolTipsm_disposition_view["English"]["t_disposition_to"] = "";
	$placeHoldersm_disposition_view["English"]["t_disposition_to"] = "";
	$fieldLabelsm_disposition_view["English"]["t_disposition_to_date"] = "T Disposition To Date";
	$fieldToolTipsm_disposition_view["English"]["t_disposition_to_date"] = "";
	$placeHoldersm_disposition_view["English"]["t_disposition_to_date"] = "";
	$fieldLabelsm_disposition_view["English"]["t_disposition_desc"] = "Desc";
	$fieldToolTipsm_disposition_view["English"]["t_disposition_desc"] = "";
	$placeHoldersm_disposition_view["English"]["t_disposition_desc"] = "";
	$fieldLabelsm_disposition_view["English"]["t_disposition_status"] = "Status";
	$fieldToolTipsm_disposition_view["English"]["t_disposition_status"] = "";
	$placeHoldersm_disposition_view["English"]["t_disposition_status"] = "";
	$fieldLabelsm_disposition_view["English"]["t_disposition_no_doc"] = "T Disposition No Doc";
	$fieldToolTipsm_disposition_view["English"]["t_disposition_no_doc"] = "";
	$placeHoldersm_disposition_view["English"]["t_disposition_no_doc"] = "";
	if (count($fieldToolTipsm_disposition_view["English"]))
		$tdatam_disposition_view[".isUseToolTips"] = true;
}


	$tdatam_disposition_view[".NCSearch"] = true;



$tdatam_disposition_view[".shortTableName"] = "m_disposition_view";
$tdatam_disposition_view[".nSecOptions"] = 0;

$tdatam_disposition_view[".mainTableOwnerID"] = "";
$tdatam_disposition_view[".entityType"] = 1;
$tdatam_disposition_view[".connId"] = "u736239518tsundbat154412412";


$tdatam_disposition_view[".strOriginalTableName"] = "m_disposition";

	



$tdatam_disposition_view[".showAddInPopup"] = false;

$tdatam_disposition_view[".showEditInPopup"] = false;

$tdatam_disposition_view[".showViewInPopup"] = false;

$tdatam_disposition_view[".listAjax"] = false;
//	temporary
//$tdatam_disposition_view[".listAjax"] = false;

	$tdatam_disposition_view[".audit"] = false;

	$tdatam_disposition_view[".locking"] = false;


$pages = $tdatam_disposition_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_disposition_view[".edit"] = true;
	$tdatam_disposition_view[".afterEditAction"] = 1;
	$tdatam_disposition_view[".closePopupAfterEdit"] = 1;
	$tdatam_disposition_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_disposition_view[".add"] = true;
$tdatam_disposition_view[".afterAddAction"] = 1;
$tdatam_disposition_view[".closePopupAfterAdd"] = 1;
$tdatam_disposition_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_disposition_view[".list"] = true;
}



$tdatam_disposition_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_disposition_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_disposition_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_disposition_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_disposition_view[".printFriendly"] = true;
}



$tdatam_disposition_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_disposition_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_disposition_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_disposition_view[".isUseAjaxSuggest"] = true;



																								

$tdatam_disposition_view[".ajaxCodeSnippetAdded"] = false;

$tdatam_disposition_view[".buttonsAdded"] = false;

$tdatam_disposition_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_disposition_view[".isUseTimeForSearch"] = false;


$tdatam_disposition_view[".badgeColor"] = "6493ea";


$tdatam_disposition_view[".allSearchFields"] = array();
$tdatam_disposition_view[".filterFields"] = array();
$tdatam_disposition_view[".requiredSearchFields"] = array();

$tdatam_disposition_view[".googleLikeFields"] = array();
$tdatam_disposition_view[".googleLikeFields"][] = "t_disposition_id";
$tdatam_disposition_view[".googleLikeFields"][] = "t_disposition_no";
$tdatam_disposition_view[".googleLikeFields"][] = "t_disposition_type";
$tdatam_disposition_view[".googleLikeFields"][] = "t_disposition_from";
$tdatam_disposition_view[".googleLikeFields"][] = "t_disposition_from_date";
$tdatam_disposition_view[".googleLikeFields"][] = "t_disposition_to";
$tdatam_disposition_view[".googleLikeFields"][] = "t_disposition_to_date";
$tdatam_disposition_view[".googleLikeFields"][] = "t_disposition_desc";
$tdatam_disposition_view[".googleLikeFields"][] = "t_disposition_status";
$tdatam_disposition_view[".googleLikeFields"][] = "t_disposition_no_doc";



$tdatam_disposition_view[".tableType"] = "list";

$tdatam_disposition_view[".printerPageOrientation"] = 0;
$tdatam_disposition_view[".nPrinterPageScale"] = 100;

$tdatam_disposition_view[".nPrinterSplitRecords"] = 40;

$tdatam_disposition_view[".geocodingEnabled"] = false;










$tdatam_disposition_view[".pageSize"] = 20;

$tdatam_disposition_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_disposition_view[".strOrderBy"] = $tstrOrderBy;

$tdatam_disposition_view[".orderindexes"] = array();


$tdatam_disposition_view[".sqlHead"] = "SELECT t_disposition_id,  t_disposition_no,  t_disposition_type,  t_disposition_from,  t_disposition_from_date,  t_disposition_to,  t_disposition_to_date,  t_disposition_desc,  t_disposition_status,  t_disposition_no_doc";
$tdatam_disposition_view[".sqlFrom"] = "FROM m_disposition";
$tdatam_disposition_view[".sqlWhereExpr"] = "(t_disposition_type =6)";
$tdatam_disposition_view[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "1",
	'name' => "Draft",
	'nameType' => 'Text',
	'where' => " t_disposition_status=29",
	'showRowCount' => 1,
	'hideEmpty' => 1,
);
$arrGridTabs[] = array(
	'tabId' => "2",
	'name' => "Follow Up",
	'nameType' => 'Text',
	'where' => " t_disposition_status=30",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatam_disposition_view[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_disposition_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_disposition_view[".arrGroupsPerPage"] = $arrGPP;

$tdatam_disposition_view[".highlightSearchResults"] = true;

$tableKeysm_disposition_view = array();
$tableKeysm_disposition_view[] = "t_disposition_id";
$tdatam_disposition_view[".Keys"] = $tableKeysm_disposition_view;


$tdatam_disposition_view[".hideMobileList"] = array();




//	t_disposition_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "t_disposition_id";
	$fdata["GoodName"] = "t_disposition_id";
	$fdata["ownerTable"] = "m_disposition";
	$fdata["Label"] = GetFieldLabel("m_disposition_view","t_disposition_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "t_disposition_id";

		$fdata["sourceSingle"] = "t_disposition_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_disposition_id";

	
	
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


	$tdatam_disposition_view["t_disposition_id"] = $fdata;
		$tdatam_disposition_view[".searchableFields"][] = "t_disposition_id";
//	t_disposition_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "t_disposition_no";
	$fdata["GoodName"] = "t_disposition_no";
	$fdata["ownerTable"] = "m_disposition";
	$fdata["Label"] = GetFieldLabel("m_disposition_view","t_disposition_no");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_disposition_no";

		$fdata["sourceSingle"] = "t_disposition_no";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_disposition_no";

	
	
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


	$tdatam_disposition_view["t_disposition_no"] = $fdata;
		$tdatam_disposition_view[".searchableFields"][] = "t_disposition_no";
//	t_disposition_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "t_disposition_type";
	$fdata["GoodName"] = "t_disposition_type";
	$fdata["ownerTable"] = "m_disposition";
	$fdata["Label"] = GetFieldLabel("m_disposition_view","t_disposition_type");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_disposition_type";

		$fdata["sourceSingle"] = "t_disposition_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_disposition_type";

	
	
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


	$tdatam_disposition_view["t_disposition_type"] = $fdata;
		$tdatam_disposition_view[".searchableFields"][] = "t_disposition_type";
//	t_disposition_from
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "t_disposition_from";
	$fdata["GoodName"] = "t_disposition_from";
	$fdata["ownerTable"] = "m_disposition";
	$fdata["Label"] = GetFieldLabel("m_disposition_view","t_disposition_from");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_disposition_from";

		$fdata["sourceSingle"] = "t_disposition_from";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_disposition_from";

	
	
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


	$tdatam_disposition_view["t_disposition_from"] = $fdata;
		$tdatam_disposition_view[".searchableFields"][] = "t_disposition_from";
//	t_disposition_from_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "t_disposition_from_date";
	$fdata["GoodName"] = "t_disposition_from_date";
	$fdata["ownerTable"] = "m_disposition";
	$fdata["Label"] = GetFieldLabel("m_disposition_view","t_disposition_from_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "t_disposition_from_date";

		$fdata["sourceSingle"] = "t_disposition_from_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_disposition_from_date";

	
	
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


	$tdatam_disposition_view["t_disposition_from_date"] = $fdata;
		$tdatam_disposition_view[".searchableFields"][] = "t_disposition_from_date";
//	t_disposition_to
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "t_disposition_to";
	$fdata["GoodName"] = "t_disposition_to";
	$fdata["ownerTable"] = "m_disposition";
	$fdata["Label"] = GetFieldLabel("m_disposition_view","t_disposition_to");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_disposition_to";

		$fdata["sourceSingle"] = "t_disposition_to";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_disposition_to";

	
	
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


	$tdatam_disposition_view["t_disposition_to"] = $fdata;
		$tdatam_disposition_view[".searchableFields"][] = "t_disposition_to";
//	t_disposition_to_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "t_disposition_to_date";
	$fdata["GoodName"] = "t_disposition_to_date";
	$fdata["ownerTable"] = "m_disposition";
	$fdata["Label"] = GetFieldLabel("m_disposition_view","t_disposition_to_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "t_disposition_to_date";

		$fdata["sourceSingle"] = "t_disposition_to_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_disposition_to_date";

	
	
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


	$tdatam_disposition_view["t_disposition_to_date"] = $fdata;
		$tdatam_disposition_view[".searchableFields"][] = "t_disposition_to_date";
//	t_disposition_desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "t_disposition_desc";
	$fdata["GoodName"] = "t_disposition_desc";
	$fdata["ownerTable"] = "m_disposition";
	$fdata["Label"] = GetFieldLabel("m_disposition_view","t_disposition_desc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_disposition_desc";

		$fdata["sourceSingle"] = "t_disposition_desc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_disposition_desc";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatam_disposition_view["t_disposition_desc"] = $fdata;
		$tdatam_disposition_view[".searchableFields"][] = "t_disposition_desc";
//	t_disposition_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "t_disposition_status";
	$fdata["GoodName"] = "t_disposition_status";
	$fdata["ownerTable"] = "m_disposition";
	$fdata["Label"] = GetFieldLabel("m_disposition_view","t_disposition_status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_disposition_status";

		$fdata["sourceSingle"] = "t_disposition_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_disposition_status";

	
	
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
	$edata["LookupTable"] = "m_status";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "m_status_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "status";

				$edata["LookupWhere"] = "m_status_desc in ('meetingbook', 'carbook')and status != 'Registration'";


	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatam_disposition_view["t_disposition_status"] = $fdata;
		$tdatam_disposition_view[".searchableFields"][] = "t_disposition_status";
//	t_disposition_no_doc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "t_disposition_no_doc";
	$fdata["GoodName"] = "t_disposition_no_doc";
	$fdata["ownerTable"] = "m_disposition";
	$fdata["Label"] = GetFieldLabel("m_disposition_view","t_disposition_no_doc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_disposition_no_doc";

		$fdata["sourceSingle"] = "t_disposition_no_doc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_disposition_no_doc";

	
	
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


	$tdatam_disposition_view["t_disposition_no_doc"] = $fdata;
		$tdatam_disposition_view[".searchableFields"][] = "t_disposition_no_doc";


$tables_data["m_disposition_view"]=&$tdatam_disposition_view;
$field_labels["m_disposition_view"] = &$fieldLabelsm_disposition_view;
$fieldToolTips["m_disposition_view"] = &$fieldToolTipsm_disposition_view;
$placeHolders["m_disposition_view"] = &$placeHoldersm_disposition_view;
$page_titles["m_disposition_view"] = &$pageTitlesm_disposition_view;


changeTextControlsToDate( "m_disposition_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_disposition_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_disposition_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_disposition_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_disposition_id,  t_disposition_no,  t_disposition_type,  t_disposition_from,  t_disposition_from_date,  t_disposition_to,  t_disposition_to_date,  t_disposition_desc,  t_disposition_status,  t_disposition_no_doc";
$proto0["m_strFrom"] = "FROM m_disposition";
$proto0["m_strWhere"] = "(t_disposition_type =6)";
$proto0["m_strOrderBy"] = "";
	
																																																												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "t_disposition_type =6";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "t_disposition_type",
	"m_strTable" => "m_disposition",
	"m_srcTableName" => "m_disposition_view"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=6";
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
	"m_strName" => "t_disposition_id",
	"m_strTable" => "m_disposition",
	"m_srcTableName" => "m_disposition_view"
));

$proto6["m_sql"] = "t_disposition_id";
$proto6["m_srcTableName"] = "m_disposition_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "t_disposition_no",
	"m_strTable" => "m_disposition",
	"m_srcTableName" => "m_disposition_view"
));

$proto8["m_sql"] = "t_disposition_no";
$proto8["m_srcTableName"] = "m_disposition_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "t_disposition_type",
	"m_strTable" => "m_disposition",
	"m_srcTableName" => "m_disposition_view"
));

$proto10["m_sql"] = "t_disposition_type";
$proto10["m_srcTableName"] = "m_disposition_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "t_disposition_from",
	"m_strTable" => "m_disposition",
	"m_srcTableName" => "m_disposition_view"
));

$proto12["m_sql"] = "t_disposition_from";
$proto12["m_srcTableName"] = "m_disposition_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "t_disposition_from_date",
	"m_strTable" => "m_disposition",
	"m_srcTableName" => "m_disposition_view"
));

$proto14["m_sql"] = "t_disposition_from_date";
$proto14["m_srcTableName"] = "m_disposition_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "t_disposition_to",
	"m_strTable" => "m_disposition",
	"m_srcTableName" => "m_disposition_view"
));

$proto16["m_sql"] = "t_disposition_to";
$proto16["m_srcTableName"] = "m_disposition_view";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "t_disposition_to_date",
	"m_strTable" => "m_disposition",
	"m_srcTableName" => "m_disposition_view"
));

$proto18["m_sql"] = "t_disposition_to_date";
$proto18["m_srcTableName"] = "m_disposition_view";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "t_disposition_desc",
	"m_strTable" => "m_disposition",
	"m_srcTableName" => "m_disposition_view"
));

$proto20["m_sql"] = "t_disposition_desc";
$proto20["m_srcTableName"] = "m_disposition_view";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "t_disposition_status",
	"m_strTable" => "m_disposition",
	"m_srcTableName" => "m_disposition_view"
));

$proto22["m_sql"] = "t_disposition_status";
$proto22["m_srcTableName"] = "m_disposition_view";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "t_disposition_no_doc",
	"m_strTable" => "m_disposition",
	"m_srcTableName" => "m_disposition_view"
));

$proto24["m_sql"] = "t_disposition_no_doc";
$proto24["m_srcTableName"] = "m_disposition_view";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "m_disposition";
$proto27["m_srcTableName"] = "m_disposition_view";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "t_disposition_id";
$proto27["m_columns"][] = "t_disposition_no";
$proto27["m_columns"][] = "t_disposition_type";
$proto27["m_columns"][] = "t_disposition_from";
$proto27["m_columns"][] = "t_disposition_from_date";
$proto27["m_columns"][] = "t_disposition_to";
$proto27["m_columns"][] = "t_disposition_to_date";
$proto27["m_columns"][] = "t_disposition_desc";
$proto27["m_columns"][] = "t_disposition_status";
$proto27["m_columns"][] = "t_disposition_no_doc";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "m_disposition";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "m_disposition_view";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="m_disposition_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_disposition_view = createSqlQuery_m_disposition_view();


	
																																																												;

										

$tdatam_disposition_view[".sqlquery"] = $queryData_m_disposition_view;



$tdatam_disposition_view[".hasEvents"] = false;

?>