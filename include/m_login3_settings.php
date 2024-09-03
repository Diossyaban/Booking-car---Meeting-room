<?php
$tdatam_login3 = array();
$tdatam_login3[".searchableFields"] = array();
$tdatam_login3[".ShortName"] = "m_login3";
$tdatam_login3[".OwnerID"] = "";
$tdatam_login3[".OriginalTable"] = "m_login";


$tdatam_login3[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatam_login3[".originalPagesByType"] = $tdatam_login3[".pagesByType"];
$tdatam_login3[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatam_login3[".originalPages"] = $tdatam_login3[".pages"];
$tdatam_login3[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatam_login3[".originalDefaultPages"] = $tdatam_login3[".defaultPages"];

//	field labels
$fieldLabelsm_login3 = array();
$fieldToolTipsm_login3 = array();
$pageTitlesm_login3 = array();
$placeHoldersm_login3 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_login3["English"] = array();
	$fieldToolTipsm_login3["English"] = array();
	$placeHoldersm_login3["English"] = array();
	$pageTitlesm_login3["English"] = array();
	$fieldLabelsm_login3["English"]["fullname"] = "Fullname";
	$fieldToolTipsm_login3["English"]["fullname"] = "";
	$placeHoldersm_login3["English"]["fullname"] = "";
	$fieldLabelsm_login3["English"]["username"] = "Username";
	$fieldToolTipsm_login3["English"]["username"] = "";
	$placeHoldersm_login3["English"]["username"] = "";
	$fieldLabelsm_login3["English"]["email"] = "Email";
	$fieldToolTipsm_login3["English"]["email"] = "";
	$placeHoldersm_login3["English"]["email"] = "";
	if (count($fieldToolTipsm_login3["English"]))
		$tdatam_login3[".isUseToolTips"] = true;
}


	$tdatam_login3[".NCSearch"] = true;



$tdatam_login3[".shortTableName"] = "m_login3";
$tdatam_login3[".nSecOptions"] = 0;

$tdatam_login3[".mainTableOwnerID"] = "";
$tdatam_login3[".entityType"] = 1;
$tdatam_login3[".connId"] = "u736239518tsundbat154412412";


$tdatam_login3[".strOriginalTableName"] = "m_login";

	



$tdatam_login3[".showAddInPopup"] = false;

$tdatam_login3[".showEditInPopup"] = false;

$tdatam_login3[".showViewInPopup"] = false;

$tdatam_login3[".listAjax"] = false;
//	temporary
//$tdatam_login3[".listAjax"] = false;

	$tdatam_login3[".audit"] = false;

	$tdatam_login3[".locking"] = false;


$pages = $tdatam_login3[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_login3[".edit"] = true;
	$tdatam_login3[".afterEditAction"] = 1;
	$tdatam_login3[".closePopupAfterEdit"] = 1;
	$tdatam_login3[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_login3[".add"] = true;
$tdatam_login3[".afterAddAction"] = 1;
$tdatam_login3[".closePopupAfterAdd"] = 1;
$tdatam_login3[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_login3[".list"] = true;
}



$tdatam_login3[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_login3[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_login3[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_login3[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_login3[".printFriendly"] = true;
}



$tdatam_login3[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_login3[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_login3[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_login3[".isUseAjaxSuggest"] = true;



																								

$tdatam_login3[".ajaxCodeSnippetAdded"] = false;

$tdatam_login3[".buttonsAdded"] = false;

$tdatam_login3[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_login3[".isUseTimeForSearch"] = false;


$tdatam_login3[".badgeColor"] = "CFAE83";


$tdatam_login3[".allSearchFields"] = array();
$tdatam_login3[".filterFields"] = array();
$tdatam_login3[".requiredSearchFields"] = array();

$tdatam_login3[".googleLikeFields"] = array();
$tdatam_login3[".googleLikeFields"][] = "fullname";
$tdatam_login3[".googleLikeFields"][] = "username";
$tdatam_login3[".googleLikeFields"][] = "email";



$tdatam_login3[".tableType"] = "list";

$tdatam_login3[".printerPageOrientation"] = 0;
$tdatam_login3[".nPrinterPageScale"] = 100;

$tdatam_login3[".nPrinterSplitRecords"] = 40;

$tdatam_login3[".geocodingEnabled"] = false;










$tdatam_login3[".pageSize"] = 20;

$tdatam_login3[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_login3[".strOrderBy"] = $tstrOrderBy;

$tdatam_login3[".orderindexes"] = array();


$tdatam_login3[".sqlHead"] = "select fullname, username, email";
$tdatam_login3[".sqlFrom"] = "from m_login";
$tdatam_login3[".sqlWhereExpr"] = "";
$tdatam_login3[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_login3[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_login3[".arrGroupsPerPage"] = $arrGPP;

$tdatam_login3[".highlightSearchResults"] = true;

$tableKeysm_login3 = array();
$tdatam_login3[".Keys"] = $tableKeysm_login3;


$tdatam_login3[".hideMobileList"] = array();




//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "m_login";
	$fdata["Label"] = GetFieldLabel("m_login3","fullname");
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


	$tdatam_login3["fullname"] = $fdata;
		$tdatam_login3[".searchableFields"][] = "fullname";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "m_login";
	$fdata["Label"] = GetFieldLabel("m_login3","username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "username";

		$fdata["sourceSingle"] = "username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
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


	$tdatam_login3["username"] = $fdata;
		$tdatam_login3[".searchableFields"][] = "username";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "m_login";
	$fdata["Label"] = GetFieldLabel("m_login3","email");
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


	$tdatam_login3["email"] = $fdata;
		$tdatam_login3[".searchableFields"][] = "email";


$tables_data["m_login3"]=&$tdatam_login3;
$field_labels["m_login3"] = &$fieldLabelsm_login3;
$fieldToolTips["m_login3"] = &$fieldToolTipsm_login3;
$placeHolders["m_login3"] = &$placeHoldersm_login3;
$page_titles["m_login3"] = &$pageTitlesm_login3;


changeTextControlsToDate( "m_login3" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_login3"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_login3"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_login3()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "fullname, username, email";
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
	"m_srcTableName" => "m_login3"
));

$proto6["m_sql"] = "fullname";
$proto6["m_srcTableName"] = "m_login3";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "m_login",
	"m_srcTableName" => "m_login3"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "m_login3";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "m_login",
	"m_srcTableName" => "m_login3"
));

$proto10["m_sql"] = "email";
$proto10["m_srcTableName"] = "m_login3";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "m_login";
$proto13["m_srcTableName"] = "m_login3";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "username";
$proto13["m_columns"][] = "password";
$proto13["m_columns"][] = "fullname";
$proto13["m_columns"][] = "email";
$proto13["m_columns"][] = "isactive";
$proto13["m_columns"][] = "add_user";
$proto13["m_columns"][] = "add_date";
$proto13["m_columns"][] = "edit_user";
$proto13["m_columns"][] = "edit_date";
$proto13["m_columns"][] = "ext_security_id";
$proto13["m_columns"][] = "m_employee_id";
$proto13["m_columns"][] = "last_login_date";
$proto13["m_columns"][] = "apikey";
$proto13["m_columns"][] = "is_active";
$proto13["m_columns"][] = "is_delete";
$proto13["m_columns"][] = "deleted_date";
$proto13["m_columns"][] = "created_date";
$proto13["m_columns"][] = "created_by";
$proto13["m_columns"][] = "last_update_by";
$proto13["m_columns"][] = "last_update_date";
$proto13["m_columns"][] = "userpic";
$proto13["m_columns"][] = "url_calender";
$proto13["m_columns"][] = "two_factor";
$proto13["m_columns"][] = "totp";
$proto13["m_columns"][] = "reset_token";
$proto13["m_columns"][] = "reset_date";
$proto13["m_columns"][] = "phone";
$proto13["m_columns"][] = "login_type";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "m_login";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "m_login3";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="m_login3";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_login3 = createSqlQuery_m_login3();


	
																																																												;

			

$tdatam_login3[".sqlquery"] = $queryData_m_login3;



$tdatam_login3[".hasEvents"] = false;

?>