<?php
$tdatalistroom = array();
$tdatalistroom[".searchableFields"] = array();
$tdatalistroom[".ShortName"] = "listroom";
$tdatalistroom[".OwnerID"] = "";
$tdatalistroom[".OriginalTable"] = "ListRoom";


$tdatalistroom[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatalistroom[".originalPagesByType"] = $tdatalistroom[".pagesByType"];
$tdatalistroom[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatalistroom[".originalPages"] = $tdatalistroom[".pages"];
$tdatalistroom[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatalistroom[".originalDefaultPages"] = $tdatalistroom[".defaultPages"];

//	field labels
$fieldLabelslistroom = array();
$fieldToolTipslistroom = array();
$pageTitleslistroom = array();
$placeHolderslistroom = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslistroom["English"] = array();
	$fieldToolTipslistroom["English"] = array();
	$placeHolderslistroom["English"] = array();
	$pageTitleslistroom["English"] = array();
	$fieldLabelslistroom["English"]["ID"] = "ID";
	$fieldToolTipslistroom["English"]["ID"] = "";
	$placeHolderslistroom["English"]["ID"] = "";
	$fieldLabelslistroom["English"]["room"] = "Room";
	$fieldToolTipslistroom["English"]["room"] = "";
	$placeHolderslistroom["English"]["room"] = "";
	$fieldLabelslistroom["English"]["capacity"] = "Capacity";
	$fieldToolTipslistroom["English"]["capacity"] = "";
	$placeHolderslistroom["English"]["capacity"] = "";
	$fieldLabelslistroom["English"]["internal"] = "Internal";
	$fieldToolTipslistroom["English"]["internal"] = "";
	$placeHolderslistroom["English"]["internal"] = "";
	$fieldLabelslistroom["English"]["external"] = "External";
	$fieldToolTipslistroom["English"]["external"] = "";
	$placeHolderslistroom["English"]["external"] = "";
	if (count($fieldToolTipslistroom["English"]))
		$tdatalistroom[".isUseToolTips"] = true;
}


	$tdatalistroom[".NCSearch"] = true;



$tdatalistroom[".shortTableName"] = "listroom";
$tdatalistroom[".nSecOptions"] = 0;

$tdatalistroom[".mainTableOwnerID"] = "";
$tdatalistroom[".entityType"] = 6;
$tdatalistroom[".connId"] = "u736239518tsundbat154412412";


$tdatalistroom[".strOriginalTableName"] = "ListRoom";

	



$tdatalistroom[".showAddInPopup"] = false;

$tdatalistroom[".showEditInPopup"] = false;

$tdatalistroom[".showViewInPopup"] = false;

$tdatalistroom[".listAjax"] = false;
//	temporary
//$tdatalistroom[".listAjax"] = false;

	$tdatalistroom[".audit"] = false;

	$tdatalistroom[".locking"] = false;


$pages = $tdatalistroom[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalistroom[".edit"] = true;
	$tdatalistroom[".afterEditAction"] = 1;
	$tdatalistroom[".closePopupAfterEdit"] = 1;
	$tdatalistroom[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalistroom[".add"] = true;
$tdatalistroom[".afterAddAction"] = 1;
$tdatalistroom[".closePopupAfterAdd"] = 1;
$tdatalistroom[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalistroom[".list"] = true;
}



$tdatalistroom[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalistroom[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalistroom[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalistroom[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalistroom[".printFriendly"] = true;
}



$tdatalistroom[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalistroom[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalistroom[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalistroom[".isUseAjaxSuggest"] = false;



																																																

$tdatalistroom[".ajaxCodeSnippetAdded"] = false;

$tdatalistroom[".buttonsAdded"] = false;

$tdatalistroom[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalistroom[".isUseTimeForSearch"] = false;


$tdatalistroom[".badgeColor"] = "daa520";


$tdatalistroom[".allSearchFields"] = array();
$tdatalistroom[".filterFields"] = array();
$tdatalistroom[".requiredSearchFields"] = array();

$tdatalistroom[".googleLikeFields"] = array();
$tdatalistroom[".googleLikeFields"][] = "ID";
$tdatalistroom[".googleLikeFields"][] = "room";
$tdatalistroom[".googleLikeFields"][] = "capacity";
$tdatalistroom[".googleLikeFields"][] = "internal";
$tdatalistroom[".googleLikeFields"][] = "external";




$tdatalistroom[".printerPageOrientation"] = 0;
$tdatalistroom[".nPrinterPageScale"] = 100;

$tdatalistroom[".nPrinterSplitRecords"] = 40;

$tdatalistroom[".geocodingEnabled"] = false;










$tdatalistroom[".pageSize"] = 20;

$tdatalistroom[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalistroom[".strOrderBy"] = $tstrOrderBy;

$tdatalistroom[".orderindexes"] = array();


$tdatalistroom[".sqlHead"] = "";
$tdatalistroom[".sqlFrom"] = "";
$tdatalistroom[".sqlWhereExpr"] = "";
$tdatalistroom[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalistroom[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalistroom[".arrGroupsPerPage"] = $arrGPP;

$tdatalistroom[".highlightSearchResults"] = true;

$tableKeyslistroom = array();
$tableKeyslistroom[] = "ID";
$tdatalistroom[".Keys"] = $tableKeyslistroom;


$tdatalistroom[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ListRoom","ID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ID";

	
		$fdata["FullName"] = "ID";

	
	
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


	$tdatalistroom["ID"] = $fdata;
		$tdatalistroom[".searchableFields"][] = "ID";
//	room
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "room";
	$fdata["GoodName"] = "room";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ListRoom","room");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "room";

	
		$fdata["FullName"] = "room";

	
	
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


	$tdatalistroom["room"] = $fdata;
		$tdatalistroom[".searchableFields"][] = "room";
//	capacity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "capacity";
	$fdata["GoodName"] = "capacity";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ListRoom","capacity");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "capacity";

	
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


	$tdatalistroom["capacity"] = $fdata;
		$tdatalistroom[".searchableFields"][] = "capacity";
//	internal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "internal";
	$fdata["GoodName"] = "internal";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ListRoom","internal");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "internal";

	
		$fdata["FullName"] = "internal";

	
	
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


	$tdatalistroom["internal"] = $fdata;
		$tdatalistroom[".searchableFields"][] = "internal";
//	external
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "external";
	$fdata["GoodName"] = "external";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ListRoom","external");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "external";

	
		$fdata["FullName"] = "external";

	
	
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


	$tdatalistroom["external"] = $fdata;
		$tdatalistroom[".searchableFields"][] = "external";


$tables_data["ListRoom"]=&$tdatalistroom;
$field_labels["ListRoom"] = &$fieldLabelslistroom;
$fieldToolTips["ListRoom"] = &$fieldToolTipslistroom;
$placeHolders["ListRoom"] = &$placeHolderslistroom;
$page_titles["ListRoom"] = &$pageTitleslistroom;


changeTextControlsToDate( "ListRoom" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ListRoom"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ListRoom"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="t_meeting_book";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="t_meeting_book";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "t_meeting_book";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["ListRoom"][0] = $masterParams;
				$masterTablesData["ListRoom"][0]["masterKeys"] = array();
	$masterTablesData["ListRoom"][0]["masterKeys"][]="t_meeting_roomid";
				$masterTablesData["ListRoom"][0]["detailKeys"] = array();
	$masterTablesData["ListRoom"][0]["detailKeys"][]="room";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/listroom_ops.php" ) );



	
																																																												;

					

$tdatalistroom[".sqlquery"] = $queryData_listroom;



$tdatalistroom[".hasEvents"] = false;

?>