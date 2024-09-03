<?php
$tdatadisposisiview = array();
$tdatadisposisiview[".searchableFields"] = array();
$tdatadisposisiview[".ShortName"] = "disposisiview";
$tdatadisposisiview[".OwnerID"] = "";
$tdatadisposisiview[".OriginalTable"] = "disposisiview";


$tdatadisposisiview[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadisposisiview[".originalPagesByType"] = $tdatadisposisiview[".pagesByType"];
$tdatadisposisiview[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadisposisiview[".originalPages"] = $tdatadisposisiview[".pages"];
$tdatadisposisiview[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadisposisiview[".originalDefaultPages"] = $tdatadisposisiview[".defaultPages"];

//	field labels
$fieldLabelsdisposisiview = array();
$fieldToolTipsdisposisiview = array();
$pageTitlesdisposisiview = array();
$placeHoldersdisposisiview = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdisposisiview["English"] = array();
	$fieldToolTipsdisposisiview["English"] = array();
	$placeHoldersdisposisiview["English"] = array();
	$pageTitlesdisposisiview["English"] = array();
	$fieldLabelsdisposisiview["English"]["stat_id"] = "Stat Id";
	$fieldToolTipsdisposisiview["English"]["stat_id"] = "";
	$placeHoldersdisposisiview["English"]["stat_id"] = "";
	$fieldLabelsdisposisiview["English"]["stat"] = "Stat";
	$fieldToolTipsdisposisiview["English"]["stat"] = "";
	$placeHoldersdisposisiview["English"]["stat"] = "";
	if (count($fieldToolTipsdisposisiview["English"]))
		$tdatadisposisiview[".isUseToolTips"] = true;
}


	$tdatadisposisiview[".NCSearch"] = true;



$tdatadisposisiview[".shortTableName"] = "disposisiview";
$tdatadisposisiview[".nSecOptions"] = 0;

$tdatadisposisiview[".mainTableOwnerID"] = "";
$tdatadisposisiview[".entityType"] = 6;
$tdatadisposisiview[".connId"] = "u736239518tsundbat154412412";


$tdatadisposisiview[".strOriginalTableName"] = "disposisiview";

	



$tdatadisposisiview[".showAddInPopup"] = false;

$tdatadisposisiview[".showEditInPopup"] = false;

$tdatadisposisiview[".showViewInPopup"] = false;

$tdatadisposisiview[".listAjax"] = false;
//	temporary
//$tdatadisposisiview[".listAjax"] = false;

	$tdatadisposisiview[".audit"] = false;

	$tdatadisposisiview[".locking"] = false;


$pages = $tdatadisposisiview[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadisposisiview[".edit"] = true;
	$tdatadisposisiview[".afterEditAction"] = 1;
	$tdatadisposisiview[".closePopupAfterEdit"] = 1;
	$tdatadisposisiview[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadisposisiview[".add"] = true;
$tdatadisposisiview[".afterAddAction"] = 1;
$tdatadisposisiview[".closePopupAfterAdd"] = 1;
$tdatadisposisiview[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadisposisiview[".list"] = true;
}



$tdatadisposisiview[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadisposisiview[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadisposisiview[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadisposisiview[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadisposisiview[".printFriendly"] = true;
}



$tdatadisposisiview[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadisposisiview[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadisposisiview[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadisposisiview[".isUseAjaxSuggest"] = false;



																								

$tdatadisposisiview[".ajaxCodeSnippetAdded"] = false;

$tdatadisposisiview[".buttonsAdded"] = false;

$tdatadisposisiview[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadisposisiview[".isUseTimeForSearch"] = false;


$tdatadisposisiview[".badgeColor"] = "5F9EA0";


$tdatadisposisiview[".allSearchFields"] = array();
$tdatadisposisiview[".filterFields"] = array();
$tdatadisposisiview[".requiredSearchFields"] = array();

$tdatadisposisiview[".googleLikeFields"] = array();
$tdatadisposisiview[".googleLikeFields"][] = "stat_id";
$tdatadisposisiview[".googleLikeFields"][] = "stat";




$tdatadisposisiview[".printerPageOrientation"] = 0;
$tdatadisposisiview[".nPrinterPageScale"] = 100;

$tdatadisposisiview[".nPrinterSplitRecords"] = 40;

$tdatadisposisiview[".geocodingEnabled"] = false;










$tdatadisposisiview[".pageSize"] = 20;

$tdatadisposisiview[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadisposisiview[".strOrderBy"] = $tstrOrderBy;

$tdatadisposisiview[".orderindexes"] = array();


$tdatadisposisiview[".sqlHead"] = "";
$tdatadisposisiview[".sqlFrom"] = "";
$tdatadisposisiview[".sqlWhereExpr"] = "";
$tdatadisposisiview[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadisposisiview[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadisposisiview[".arrGroupsPerPage"] = $arrGPP;

$tdatadisposisiview[".highlightSearchResults"] = true;

$tableKeysdisposisiview = array();
$tdatadisposisiview[".Keys"] = $tableKeysdisposisiview;


$tdatadisposisiview[".hideMobileList"] = array();




//	stat_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "stat_id";
	$fdata["GoodName"] = "stat_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("disposisiview","stat_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "stat_id";

	
		$fdata["FullName"] = "stat_id";

	
	
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


	$tdatadisposisiview["stat_id"] = $fdata;
		$tdatadisposisiview[".searchableFields"][] = "stat_id";
//	stat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "stat";
	$fdata["GoodName"] = "stat";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("disposisiview","stat");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "stat";

	
		$fdata["FullName"] = "stat";

	
	
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


	$tdatadisposisiview["stat"] = $fdata;
		$tdatadisposisiview[".searchableFields"][] = "stat";


$tables_data["disposisiview"]=&$tdatadisposisiview;
$field_labels["disposisiview"] = &$fieldLabelsdisposisiview;
$fieldToolTips["disposisiview"] = &$fieldToolTipsdisposisiview;
$placeHolders["disposisiview"] = &$placeHoldersdisposisiview;
$page_titles["disposisiview"] = &$pageTitlesdisposisiview;


changeTextControlsToDate( "disposisiview" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["disposisiview"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["disposisiview"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/disposisiview_ops.php" ) );



	
																																																												;

		

$tdatadisposisiview[".sqlquery"] = $queryData_disposisiview;



$tdatadisposisiview[".hasEvents"] = false;

?>