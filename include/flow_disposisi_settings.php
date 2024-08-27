<?php
$tdataflow_disposisi = array();
$tdataflow_disposisi[".searchableFields"] = array();
$tdataflow_disposisi[".ShortName"] = "flow_disposisi";
$tdataflow_disposisi[".OwnerID"] = "";
$tdataflow_disposisi[".OriginalTable"] = "flow_disposisi";


$tdataflow_disposisi[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataflow_disposisi[".originalPagesByType"] = $tdataflow_disposisi[".pagesByType"];
$tdataflow_disposisi[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataflow_disposisi[".originalPages"] = $tdataflow_disposisi[".pages"];
$tdataflow_disposisi[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataflow_disposisi[".originalDefaultPages"] = $tdataflow_disposisi[".defaultPages"];

//	field labels
$fieldLabelsflow_disposisi = array();
$fieldToolTipsflow_disposisi = array();
$pageTitlesflow_disposisi = array();
$placeHoldersflow_disposisi = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsflow_disposisi["English"] = array();
	$fieldToolTipsflow_disposisi["English"] = array();
	$placeHoldersflow_disposisi["English"] = array();
	$pageTitlesflow_disposisi["English"] = array();
	$fieldLabelsflow_disposisi["English"]["kodeuser"] = "Kode user";
	$fieldToolTipsflow_disposisi["English"]["kodeuser"] = "";
	$placeHoldersflow_disposisi["English"]["kodeuser"] = "";
	$fieldLabelsflow_disposisi["English"]["nama"] = "Nama";
	$fieldToolTipsflow_disposisi["English"]["nama"] = "";
	$placeHoldersflow_disposisi["English"]["nama"] = "";
	if (count($fieldToolTipsflow_disposisi["English"]))
		$tdataflow_disposisi[".isUseToolTips"] = true;
}


	$tdataflow_disposisi[".NCSearch"] = true;



$tdataflow_disposisi[".shortTableName"] = "flow_disposisi";
$tdataflow_disposisi[".nSecOptions"] = 0;

$tdataflow_disposisi[".mainTableOwnerID"] = "";
$tdataflow_disposisi[".entityType"] = 6;
$tdataflow_disposisi[".connId"] = "u736239518tsundbat154412412";


$tdataflow_disposisi[".strOriginalTableName"] = "flow_disposisi";

	



$tdataflow_disposisi[".showAddInPopup"] = false;

$tdataflow_disposisi[".showEditInPopup"] = false;

$tdataflow_disposisi[".showViewInPopup"] = false;

$tdataflow_disposisi[".listAjax"] = false;
//	temporary
//$tdataflow_disposisi[".listAjax"] = false;

	$tdataflow_disposisi[".audit"] = false;

	$tdataflow_disposisi[".locking"] = false;


$pages = $tdataflow_disposisi[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataflow_disposisi[".edit"] = true;
	$tdataflow_disposisi[".afterEditAction"] = 1;
	$tdataflow_disposisi[".closePopupAfterEdit"] = 1;
	$tdataflow_disposisi[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataflow_disposisi[".add"] = true;
$tdataflow_disposisi[".afterAddAction"] = 1;
$tdataflow_disposisi[".closePopupAfterAdd"] = 1;
$tdataflow_disposisi[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataflow_disposisi[".list"] = true;
}



$tdataflow_disposisi[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataflow_disposisi[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataflow_disposisi[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataflow_disposisi[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataflow_disposisi[".printFriendly"] = true;
}



$tdataflow_disposisi[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataflow_disposisi[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataflow_disposisi[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataflow_disposisi[".isUseAjaxSuggest"] = false;



									

$tdataflow_disposisi[".ajaxCodeSnippetAdded"] = false;

$tdataflow_disposisi[".buttonsAdded"] = false;

$tdataflow_disposisi[".addPageEvents"] = false;

// use timepicker for search panel
$tdataflow_disposisi[".isUseTimeForSearch"] = false;


$tdataflow_disposisi[".badgeColor"] = "5F9EA0";


$tdataflow_disposisi[".allSearchFields"] = array();
$tdataflow_disposisi[".filterFields"] = array();
$tdataflow_disposisi[".requiredSearchFields"] = array();

$tdataflow_disposisi[".googleLikeFields"] = array();
$tdataflow_disposisi[".googleLikeFields"][] = "kodeuser";
$tdataflow_disposisi[".googleLikeFields"][] = "nama";




$tdataflow_disposisi[".printerPageOrientation"] = 0;
$tdataflow_disposisi[".nPrinterPageScale"] = 100;

$tdataflow_disposisi[".nPrinterSplitRecords"] = 40;

$tdataflow_disposisi[".geocodingEnabled"] = false;










$tdataflow_disposisi[".pageSize"] = 20;

$tdataflow_disposisi[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataflow_disposisi[".strOrderBy"] = $tstrOrderBy;

$tdataflow_disposisi[".orderindexes"] = array();


$tdataflow_disposisi[".sqlHead"] = "";
$tdataflow_disposisi[".sqlFrom"] = "";
$tdataflow_disposisi[".sqlWhereExpr"] = "";
$tdataflow_disposisi[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataflow_disposisi[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataflow_disposisi[".arrGroupsPerPage"] = $arrGPP;

$tdataflow_disposisi[".highlightSearchResults"] = true;

$tableKeysflow_disposisi = array();
$tdataflow_disposisi[".Keys"] = $tableKeysflow_disposisi;


$tdataflow_disposisi[".hideMobileList"] = array();




//	kodeuser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "kodeuser";
	$fdata["GoodName"] = "kodeuser";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("flow_disposisi","kodeuser");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "kodeuser";

	
		$fdata["FullName"] = "kodeuser";

	
	
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


	$tdataflow_disposisi["kodeuser"] = $fdata;
		$tdataflow_disposisi[".searchableFields"][] = "kodeuser";
//	nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nama";
	$fdata["GoodName"] = "nama";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("flow_disposisi","nama");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nama";

	
		$fdata["FullName"] = "nama";

	
	
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


	$tdataflow_disposisi["nama"] = $fdata;
		$tdataflow_disposisi[".searchableFields"][] = "nama";


$tables_data["flow_disposisi"]=&$tdataflow_disposisi;
$field_labels["flow_disposisi"] = &$fieldLabelsflow_disposisi;
$fieldToolTips["flow_disposisi"] = &$fieldToolTipsflow_disposisi;
$placeHolders["flow_disposisi"] = &$placeHoldersflow_disposisi;
$page_titles["flow_disposisi"] = &$pageTitlesflow_disposisi;


changeTextControlsToDate( "flow_disposisi" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["flow_disposisi"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["flow_disposisi"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/flow_disposisi_ops.php" ) );



	
																																																												;

		

$tdataflow_disposisi[".sqlquery"] = $queryData_flow_disposisi;



$tdataflow_disposisi[".hasEvents"] = false;

?>