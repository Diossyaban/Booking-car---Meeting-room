<?php
$tdatam_login1 = array();
$tdatam_login1[".searchableFields"] = array();
$tdatam_login1[".ShortName"] = "m_login1";
$tdatam_login1[".OwnerID"] = "";
$tdatam_login1[".OriginalTable"] = "m_login";


$tdatam_login1[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatam_login1[".originalPagesByType"] = $tdatam_login1[".pagesByType"];
$tdatam_login1[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatam_login1[".originalPages"] = $tdatam_login1[".pages"];
$tdatam_login1[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatam_login1[".originalDefaultPages"] = $tdatam_login1[".defaultPages"];

//	field labels
$fieldLabelsm_login1 = array();
$fieldToolTipsm_login1 = array();
$pageTitlesm_login1 = array();
$placeHoldersm_login1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_login1["English"] = array();
	$fieldToolTipsm_login1["English"] = array();
	$placeHoldersm_login1["English"] = array();
	$pageTitlesm_login1["English"] = array();
	$fieldLabelsm_login1["English"]["fullname"] = "Fullname";
	$fieldToolTipsm_login1["English"]["fullname"] = "";
	$placeHoldersm_login1["English"]["fullname"] = "";
	$fieldLabelsm_login1["English"]["email"] = "Email";
	$fieldToolTipsm_login1["English"]["email"] = "";
	$placeHoldersm_login1["English"]["email"] = "";
	if (count($fieldToolTipsm_login1["English"]))
		$tdatam_login1[".isUseToolTips"] = true;
}


	$tdatam_login1[".NCSearch"] = true;



$tdatam_login1[".shortTableName"] = "m_login1";
$tdatam_login1[".nSecOptions"] = 0;

$tdatam_login1[".mainTableOwnerID"] = "";
$tdatam_login1[".entityType"] = 1;
$tdatam_login1[".connId"] = "u736239518tsundbat154412412";


$tdatam_login1[".strOriginalTableName"] = "m_login";

	



$tdatam_login1[".showAddInPopup"] = false;

$tdatam_login1[".showEditInPopup"] = false;

$tdatam_login1[".showViewInPopup"] = false;

$tdatam_login1[".listAjax"] = false;
//	temporary
//$tdatam_login1[".listAjax"] = false;

	$tdatam_login1[".audit"] = false;

	$tdatam_login1[".locking"] = false;


$pages = $tdatam_login1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_login1[".edit"] = true;
	$tdatam_login1[".afterEditAction"] = 1;
	$tdatam_login1[".closePopupAfterEdit"] = 1;
	$tdatam_login1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_login1[".add"] = true;
$tdatam_login1[".afterAddAction"] = 1;
$tdatam_login1[".closePopupAfterAdd"] = 1;
$tdatam_login1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_login1[".list"] = true;
}



$tdatam_login1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_login1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_login1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_login1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_login1[".printFriendly"] = true;
}



$tdatam_login1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_login1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_login1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_login1[".isUseAjaxSuggest"] = true;



									

$tdatam_login1[".ajaxCodeSnippetAdded"] = false;

$tdatam_login1[".buttonsAdded"] = false;

$tdatam_login1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_login1[".isUseTimeForSearch"] = false;


$tdatam_login1[".badgeColor"] = "6DA5C8";


$tdatam_login1[".allSearchFields"] = array();
$tdatam_login1[".filterFields"] = array();
$tdatam_login1[".requiredSearchFields"] = array();

$tdatam_login1[".googleLikeFields"] = array();
$tdatam_login1[".googleLikeFields"][] = "fullname";
$tdatam_login1[".googleLikeFields"][] = "email";



$tdatam_login1[".tableType"] = "list";

$tdatam_login1[".printerPageOrientation"] = 0;
$tdatam_login1[".nPrinterPageScale"] = 100;

$tdatam_login1[".nPrinterSplitRecords"] = 40;

$tdatam_login1[".geocodingEnabled"] = false;










$tdatam_login1[".pageSize"] = 20;

$tdatam_login1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_login1[".strOrderBy"] = $tstrOrderBy;

$tdatam_login1[".orderindexes"] = array();


$tdatam_login1[".sqlHead"] = "select fullname, email";
$tdatam_login1[".sqlFrom"] = "from m_login";
$tdatam_login1[".sqlWhereExpr"] = "";
$tdatam_login1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_login1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_login1[".arrGroupsPerPage"] = $arrGPP;

$tdatam_login1[".highlightSearchResults"] = true;

$tableKeysm_login1 = array();
$tdatam_login1[".Keys"] = $tableKeysm_login1;


$tdatam_login1[".hideMobileList"] = array();




//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "m_login";
	$fdata["Label"] = GetFieldLabel("m_login1","fullname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fullname";

		$fdata["sourceSingle"] = "fullname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
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


	$tdatam_login1["fullname"] = $fdata;
		$tdatam_login1[".searchableFields"][] = "fullname";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "m_login";
	$fdata["Label"] = GetFieldLabel("m_login1","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

		$fdata["sourceSingle"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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


	$tdatam_login1["email"] = $fdata;
		$tdatam_login1[".searchableFields"][] = "email";


$tables_data["m_login1"]=&$tdatam_login1;
$field_labels["m_login1"] = &$fieldLabelsm_login1;
$fieldToolTips["m_login1"] = &$fieldToolTipsm_login1;
$placeHolders["m_login1"] = &$placeHoldersm_login1;
$page_titles["m_login1"] = &$pageTitlesm_login1;


changeTextControlsToDate( "m_login1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_login1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_login1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_login1()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "fullname, email";
$proto0["m_strFrom"] = "from m_login";
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
	"m_strName" => "fullname",
	"m_strTable" => "m_login",
	"m_srcTableName" => "m_login1"
));

$proto6["m_sql"] = "fullname";
$proto6["m_srcTableName"] = "m_login1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "m_login",
	"m_srcTableName" => "m_login1"
));

$proto8["m_sql"] = "email";
$proto8["m_srcTableName"] = "m_login1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "m_login";
$proto11["m_srcTableName"] = "m_login1";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "username";
$proto11["m_columns"][] = "password";
$proto11["m_columns"][] = "fullname";
$proto11["m_columns"][] = "email";
$proto11["m_columns"][] = "isactive";
$proto11["m_columns"][] = "add_user";
$proto11["m_columns"][] = "add_date";
$proto11["m_columns"][] = "edit_user";
$proto11["m_columns"][] = "edit_date";
$proto11["m_columns"][] = "ext_security_id";
$proto11["m_columns"][] = "m_employee_id";
$proto11["m_columns"][] = "last_login_date";
$proto11["m_columns"][] = "apikey";
$proto11["m_columns"][] = "is_active";
$proto11["m_columns"][] = "is_delete";
$proto11["m_columns"][] = "deleted_date";
$proto11["m_columns"][] = "created_date";
$proto11["m_columns"][] = "created_by";
$proto11["m_columns"][] = "last_update_by";
$proto11["m_columns"][] = "last_update_date";
$proto11["m_columns"][] = "userpic";
$proto11["m_columns"][] = "url_calender";
$proto11["m_columns"][] = "two_factor";
$proto11["m_columns"][] = "totp";
$proto11["m_columns"][] = "reset_token";
$proto11["m_columns"][] = "reset_date";
$proto11["m_columns"][] = "phone";
$proto11["m_columns"][] = "login_type";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "m_login";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "m_login1";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="m_login1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_login1 = createSqlQuery_m_login1();


	
																																																												;

		

$tdatam_login1[".sqlquery"] = $queryData_m_login1;



$tdatam_login1[".hasEvents"] = false;

?>