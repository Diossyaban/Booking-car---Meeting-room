<?php
$tdatam_room_meeting = array();
$tdatam_room_meeting[".searchableFields"] = array();
$tdatam_room_meeting[".ShortName"] = "m_room_meeting";
$tdatam_room_meeting[".OwnerID"] = "";
$tdatam_room_meeting[".OriginalTable"] = "m_room_meeting";


$tdatam_room_meeting[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatam_room_meeting[".originalPagesByType"] = $tdatam_room_meeting[".pagesByType"];
$tdatam_room_meeting[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatam_room_meeting[".originalPages"] = $tdatam_room_meeting[".pages"];
$tdatam_room_meeting[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatam_room_meeting[".originalDefaultPages"] = $tdatam_room_meeting[".defaultPages"];

//	field labels
$fieldLabelsm_room_meeting = array();
$fieldToolTipsm_room_meeting = array();
$pageTitlesm_room_meeting = array();
$placeHoldersm_room_meeting = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_room_meeting["English"] = array();
	$fieldToolTipsm_room_meeting["English"] = array();
	$placeHoldersm_room_meeting["English"] = array();
	$pageTitlesm_room_meeting["English"] = array();
	$fieldLabelsm_room_meeting["English"]["ID"] = "ID";
	$fieldToolTipsm_room_meeting["English"]["ID"] = "";
	$placeHoldersm_room_meeting["English"]["ID"] = "";
	$fieldLabelsm_room_meeting["English"]["room"] = "Room";
	$fieldToolTipsm_room_meeting["English"]["room"] = "";
	$placeHoldersm_room_meeting["English"]["room"] = "";
	$fieldLabelsm_room_meeting["English"]["capacity"] = "Capacity";
	$fieldToolTipsm_room_meeting["English"]["capacity"] = "";
	$placeHoldersm_room_meeting["English"]["capacity"] = "";
	$fieldLabelsm_room_meeting["English"]["internal"] = "Internal";
	$fieldToolTipsm_room_meeting["English"]["internal"] = "";
	$placeHoldersm_room_meeting["English"]["internal"] = "";
	$fieldLabelsm_room_meeting["English"]["external"] = "External";
	$fieldToolTipsm_room_meeting["English"]["external"] = "";
	$placeHoldersm_room_meeting["English"]["external"] = "";
	if (count($fieldToolTipsm_room_meeting["English"]))
		$tdatam_room_meeting[".isUseToolTips"] = true;
}


	$tdatam_room_meeting[".NCSearch"] = true;



$tdatam_room_meeting[".shortTableName"] = "m_room_meeting";
$tdatam_room_meeting[".nSecOptions"] = 0;

$tdatam_room_meeting[".mainTableOwnerID"] = "";
$tdatam_room_meeting[".entityType"] = 0;
$tdatam_room_meeting[".connId"] = "u736239518tsundbat154412412";


$tdatam_room_meeting[".strOriginalTableName"] = "m_room_meeting";

	



$tdatam_room_meeting[".showAddInPopup"] = false;

$tdatam_room_meeting[".showEditInPopup"] = false;

$tdatam_room_meeting[".showViewInPopup"] = false;

$tdatam_room_meeting[".listAjax"] = false;
//	temporary
//$tdatam_room_meeting[".listAjax"] = false;

	$tdatam_room_meeting[".audit"] = false;

	$tdatam_room_meeting[".locking"] = false;


$pages = $tdatam_room_meeting[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_room_meeting[".edit"] = true;
	$tdatam_room_meeting[".afterEditAction"] = 1;
	$tdatam_room_meeting[".closePopupAfterEdit"] = 1;
	$tdatam_room_meeting[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_room_meeting[".add"] = true;
$tdatam_room_meeting[".afterAddAction"] = 1;
$tdatam_room_meeting[".closePopupAfterAdd"] = 1;
$tdatam_room_meeting[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_room_meeting[".list"] = true;
}



$tdatam_room_meeting[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_room_meeting[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_room_meeting[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_room_meeting[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_room_meeting[".printFriendly"] = true;
}



$tdatam_room_meeting[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_room_meeting[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_room_meeting[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_room_meeting[".isUseAjaxSuggest"] = true;



									

$tdatam_room_meeting[".ajaxCodeSnippetAdded"] = false;

$tdatam_room_meeting[".buttonsAdded"] = false;

$tdatam_room_meeting[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_room_meeting[".isUseTimeForSearch"] = false;


$tdatam_room_meeting[".badgeColor"] = "6B8E23";


$tdatam_room_meeting[".allSearchFields"] = array();
$tdatam_room_meeting[".filterFields"] = array();
$tdatam_room_meeting[".requiredSearchFields"] = array();

$tdatam_room_meeting[".googleLikeFields"] = array();
$tdatam_room_meeting[".googleLikeFields"][] = "ID";
$tdatam_room_meeting[".googleLikeFields"][] = "room";
$tdatam_room_meeting[".googleLikeFields"][] = "capacity";
$tdatam_room_meeting[".googleLikeFields"][] = "internal";
$tdatam_room_meeting[".googleLikeFields"][] = "external";



$tdatam_room_meeting[".tableType"] = "list";

$tdatam_room_meeting[".printerPageOrientation"] = 0;
$tdatam_room_meeting[".nPrinterPageScale"] = 100;

$tdatam_room_meeting[".nPrinterSplitRecords"] = 40;

$tdatam_room_meeting[".geocodingEnabled"] = false;










$tdatam_room_meeting[".pageSize"] = 20;

$tdatam_room_meeting[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_room_meeting[".strOrderBy"] = $tstrOrderBy;

$tdatam_room_meeting[".orderindexes"] = array();


$tdatam_room_meeting[".sqlHead"] = "SELECT ID,  	room,  	capacity,  	internal,  	`external`";
$tdatam_room_meeting[".sqlFrom"] = "FROM m_room_meeting";
$tdatam_room_meeting[".sqlWhereExpr"] = "";
$tdatam_room_meeting[".sqlTail"] = "";

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
$tdatam_room_meeting[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_room_meeting[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_room_meeting[".arrGroupsPerPage"] = $arrGPP;

$tdatam_room_meeting[".highlightSearchResults"] = true;

$tableKeysm_room_meeting = array();
$tableKeysm_room_meeting[] = "ID";
$tdatam_room_meeting[".Keys"] = $tableKeysm_room_meeting;


$tdatam_room_meeting[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "m_room_meeting";
	$fdata["Label"] = GetFieldLabel("m_room_meeting","ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

		$fdata["sourceSingle"] = "ID";

		$fdata["isSQLExpression"] = true;
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


	$tdatam_room_meeting["ID"] = $fdata;
		$tdatam_room_meeting[".searchableFields"][] = "ID";
//	room
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "room";
	$fdata["GoodName"] = "room";
	$fdata["ownerTable"] = "m_room_meeting";
	$fdata["Label"] = GetFieldLabel("m_room_meeting","room");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "room";

		$fdata["sourceSingle"] = "room";

		$fdata["isSQLExpression"] = true;
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


	$tdatam_room_meeting["room"] = $fdata;
		$tdatam_room_meeting[".searchableFields"][] = "room";
//	capacity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "capacity";
	$fdata["GoodName"] = "capacity";
	$fdata["ownerTable"] = "m_room_meeting";
	$fdata["Label"] = GetFieldLabel("m_room_meeting","capacity");
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


	$tdatam_room_meeting["capacity"] = $fdata;
		$tdatam_room_meeting[".searchableFields"][] = "capacity";
//	internal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "internal";
	$fdata["GoodName"] = "internal";
	$fdata["ownerTable"] = "m_room_meeting";
	$fdata["Label"] = GetFieldLabel("m_room_meeting","internal");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "internal";

		$fdata["sourceSingle"] = "internal";

		$fdata["isSQLExpression"] = true;
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
			$edata["EditParams"].= " maxlength=1";

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


	$tdatam_room_meeting["internal"] = $fdata;
		$tdatam_room_meeting[".searchableFields"][] = "internal";
//	external
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "external";
	$fdata["GoodName"] = "external";
	$fdata["ownerTable"] = "m_room_meeting";
	$fdata["Label"] = GetFieldLabel("m_room_meeting","external");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "external";

		$fdata["sourceSingle"] = "external";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`external`";

	
	
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
			$edata["EditParams"].= " maxlength=1";

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


	$tdatam_room_meeting["external"] = $fdata;
		$tdatam_room_meeting[".searchableFields"][] = "external";


$tables_data["m_room_meeting"]=&$tdatam_room_meeting;
$field_labels["m_room_meeting"] = &$fieldLabelsm_room_meeting;
$fieldToolTips["m_room_meeting"] = &$fieldToolTipsm_room_meeting;
$placeHolders["m_room_meeting"] = &$placeHoldersm_room_meeting;
$page_titles["m_room_meeting"] = &$pageTitlesm_room_meeting;


changeTextControlsToDate( "m_room_meeting" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_room_meeting"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_room_meeting"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_room_meeting()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	room,  	capacity,  	internal,  	`external`";
$proto0["m_strFrom"] = "FROM m_room_meeting";
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
	"m_strName" => "ID",
	"m_strTable" => "m_room_meeting",
	"m_srcTableName" => "m_room_meeting"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "m_room_meeting";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "room",
	"m_strTable" => "m_room_meeting",
	"m_srcTableName" => "m_room_meeting"
));

$proto8["m_sql"] = "room";
$proto8["m_srcTableName"] = "m_room_meeting";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "capacity",
	"m_strTable" => "m_room_meeting",
	"m_srcTableName" => "m_room_meeting"
));

$proto10["m_sql"] = "capacity";
$proto10["m_srcTableName"] = "m_room_meeting";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "internal",
	"m_strTable" => "m_room_meeting",
	"m_srcTableName" => "m_room_meeting"
));

$proto12["m_sql"] = "internal";
$proto12["m_srcTableName"] = "m_room_meeting";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "external",
	"m_strTable" => "m_room_meeting",
	"m_srcTableName" => "m_room_meeting"
));

$proto14["m_sql"] = "`external`";
$proto14["m_srcTableName"] = "m_room_meeting";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "m_room_meeting";
$proto17["m_srcTableName"] = "m_room_meeting";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "ID";
$proto17["m_columns"][] = "room";
$proto17["m_columns"][] = "capacity";
$proto17["m_columns"][] = "internal";
$proto17["m_columns"][] = "external";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "m_room_meeting";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "m_room_meeting";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="m_room_meeting";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_room_meeting = createSqlQuery_m_room_meeting();


	
																																																												;

					

$tdatam_room_meeting[".sqlquery"] = $queryData_m_room_meeting;



$tdatam_room_meeting[".hasEvents"] = false;

?>