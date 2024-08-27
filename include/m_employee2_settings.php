<?php
$tdatam_employee2 = array();
$tdatam_employee2[".searchableFields"] = array();
$tdatam_employee2[".ShortName"] = "m_employee2";
$tdatam_employee2[".OwnerID"] = "";
$tdatam_employee2[".OriginalTable"] = "m_employee";


$tdatam_employee2[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatam_employee2[".originalPagesByType"] = $tdatam_employee2[".pagesByType"];
$tdatam_employee2[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatam_employee2[".originalPages"] = $tdatam_employee2[".pages"];
$tdatam_employee2[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatam_employee2[".originalDefaultPages"] = $tdatam_employee2[".defaultPages"];

//	field labels
$fieldLabelsm_employee2 = array();
$fieldToolTipsm_employee2 = array();
$pageTitlesm_employee2 = array();
$placeHoldersm_employee2 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_employee2["English"] = array();
	$fieldToolTipsm_employee2["English"] = array();
	$placeHoldersm_employee2["English"] = array();
	$pageTitlesm_employee2["English"] = array();
	$fieldLabelsm_employee2["English"]["email"] = "Email";
	$fieldToolTipsm_employee2["English"]["email"] = "";
	$placeHoldersm_employee2["English"]["email"] = "";
	$fieldLabelsm_employee2["English"]["nama"] = "Nama";
	$fieldToolTipsm_employee2["English"]["nama"] = "";
	$placeHoldersm_employee2["English"]["nama"] = "";
	$fieldLabelsm_employee2["English"]["username"] = "Username";
	$fieldToolTipsm_employee2["English"]["username"] = "";
	$placeHoldersm_employee2["English"]["username"] = "";
	if (count($fieldToolTipsm_employee2["English"]))
		$tdatam_employee2[".isUseToolTips"] = true;
}


	$tdatam_employee2[".NCSearch"] = true;



$tdatam_employee2[".shortTableName"] = "m_employee2";
$tdatam_employee2[".nSecOptions"] = 0;

$tdatam_employee2[".mainTableOwnerID"] = "";
$tdatam_employee2[".entityType"] = 1;
$tdatam_employee2[".connId"] = "u736239518tsundbat154412412";


$tdatam_employee2[".strOriginalTableName"] = "m_employee";

	



$tdatam_employee2[".showAddInPopup"] = false;

$tdatam_employee2[".showEditInPopup"] = false;

$tdatam_employee2[".showViewInPopup"] = false;

$tdatam_employee2[".listAjax"] = false;
//	temporary
//$tdatam_employee2[".listAjax"] = false;

	$tdatam_employee2[".audit"] = false;

	$tdatam_employee2[".locking"] = false;


$pages = $tdatam_employee2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_employee2[".edit"] = true;
	$tdatam_employee2[".afterEditAction"] = 1;
	$tdatam_employee2[".closePopupAfterEdit"] = 1;
	$tdatam_employee2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_employee2[".add"] = true;
$tdatam_employee2[".afterAddAction"] = 1;
$tdatam_employee2[".closePopupAfterAdd"] = 1;
$tdatam_employee2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_employee2[".list"] = true;
}



$tdatam_employee2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_employee2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_employee2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_employee2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_employee2[".printFriendly"] = true;
}



$tdatam_employee2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_employee2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_employee2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_employee2[".isUseAjaxSuggest"] = true;



									

$tdatam_employee2[".ajaxCodeSnippetAdded"] = false;

$tdatam_employee2[".buttonsAdded"] = false;

$tdatam_employee2[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_employee2[".isUseTimeForSearch"] = false;


$tdatam_employee2[".badgeColor"] = "6DA5C8";


$tdatam_employee2[".allSearchFields"] = array();
$tdatam_employee2[".filterFields"] = array();
$tdatam_employee2[".requiredSearchFields"] = array();

$tdatam_employee2[".googleLikeFields"] = array();
$tdatam_employee2[".googleLikeFields"][] = "email";
$tdatam_employee2[".googleLikeFields"][] = "nama";
$tdatam_employee2[".googleLikeFields"][] = "username";



$tdatam_employee2[".tableType"] = "list";

$tdatam_employee2[".printerPageOrientation"] = 0;
$tdatam_employee2[".nPrinterPageScale"] = 100;

$tdatam_employee2[".nPrinterSplitRecords"] = 40;

$tdatam_employee2[".geocodingEnabled"] = false;










$tdatam_employee2[".pageSize"] = 20;

$tdatam_employee2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_employee2[".strOrderBy"] = $tstrOrderBy;

$tdatam_employee2[".orderindexes"] = array();


$tdatam_employee2[".sqlHead"] = "SELECT m_employee.email,  m_employee.nama,  m_login.username";
$tdatam_employee2[".sqlFrom"] = "FROM m_employee  LEFT OUTER JOIN m_login ON m_employee.userid = m_login.username";
$tdatam_employee2[".sqlWhereExpr"] = "(m_employee.email is not null) AND (m_employee.is_active = 1)";
$tdatam_employee2[".sqlTail"] = "";

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
$tdatam_employee2[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_employee2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_employee2[".arrGroupsPerPage"] = $arrGPP;

$tdatam_employee2[".highlightSearchResults"] = true;

$tableKeysm_employee2 = array();
$tdatam_employee2[".Keys"] = $tableKeysm_employee2;


$tdatam_employee2[".hideMobileList"] = array();




//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee2","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

		$fdata["sourceSingle"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_employee.email";

	
	
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


	$tdatam_employee2["email"] = $fdata;
		$tdatam_employee2[".searchableFields"][] = "email";
//	nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nama";
	$fdata["GoodName"] = "nama";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee2","nama");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nama";

		$fdata["sourceSingle"] = "nama";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_employee.nama";

	
	
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


	$tdatam_employee2["nama"] = $fdata;
		$tdatam_employee2[".searchableFields"][] = "nama";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "m_login";
	$fdata["Label"] = GetFieldLabel("m_employee2","username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "username";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_login.username";

	
	
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


	$tdatam_employee2["username"] = $fdata;
		$tdatam_employee2[".searchableFields"][] = "username";


$tables_data["m_employee2"]=&$tdatam_employee2;
$field_labels["m_employee2"] = &$fieldLabelsm_employee2;
$fieldToolTips["m_employee2"] = &$fieldToolTipsm_employee2;
$placeHolders["m_employee2"] = &$placeHoldersm_employee2;
$page_titles["m_employee2"] = &$pageTitlesm_employee2;


changeTextControlsToDate( "m_employee2" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_employee2"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_employee2"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_employee2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "m_employee.email,  m_employee.nama,  m_login.username";
$proto0["m_strFrom"] = "FROM m_employee  LEFT OUTER JOIN m_login ON m_employee.userid = m_login.username";
$proto0["m_strWhere"] = "(m_employee.email is not null) AND (m_employee.is_active = 1)";
$proto0["m_strOrderBy"] = "";
	
																																																												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(m_employee.email is not null) AND (m_employee.is_active = 1)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(m_employee.email is not null) AND (m_employee.is_active = 1)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "m_employee.email is not null";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee2"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "is not null";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "m_employee.is_active = 1";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee2"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "= 1";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee2"
));

$proto10["m_sql"] = "m_employee.email";
$proto10["m_srcTableName"] = "m_employee2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nama",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee2"
));

$proto12["m_sql"] = "m_employee.nama";
$proto12["m_srcTableName"] = "m_employee2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "m_login",
	"m_srcTableName" => "m_employee2"
));

$proto14["m_sql"] = "m_login.username";
$proto14["m_srcTableName"] = "m_employee2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "m_employee";
$proto17["m_srcTableName"] = "m_employee2";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "prid";
$proto17["m_columns"][] = "comid";
$proto17["m_columns"][] = "nik";
$proto17["m_columns"][] = "nama";
$proto17["m_columns"][] = "email";
$proto17["m_columns"][] = "position";
$proto17["m_columns"][] = "norekbca";
$proto17["m_columns"][] = "secdate";
$proto17["m_columns"][] = "secuser";
$proto17["m_columns"][] = "gender";
$proto17["m_columns"][] = "agama";
$proto17["m_columns"][] = "birthplace";
$proto17["m_columns"][] = "birthday";
$proto17["m_columns"][] = "noktp";
$proto17["m_columns"][] = "nokk";
$proto17["m_columns"][] = "nohp";
$proto17["m_columns"][] = "emailpribadi";
$proto17["m_columns"][] = "alamatktp";
$proto17["m_columns"][] = "alamatdom";
$proto17["m_columns"][] = "datejoin";
$proto17["m_columns"][] = "dateangkat";
$proto17["m_columns"][] = "isaktif";
$proto17["m_columns"][] = "nonpwp";
$proto17["m_columns"][] = "npbjpskes";
$proto17["m_columns"][] = "nobpjstk";
$proto17["m_columns"][] = "nopaspor";
$proto17["m_columns"][] = "statustax";
$proto17["m_columns"][] = "daruratnama";
$proto17["m_columns"][] = "darurathub";
$proto17["m_columns"][] = "darurattelp";
$proto17["m_columns"][] = "userid";
$proto17["m_columns"][] = "level";
$proto17["m_columns"][] = "uprid";
$proto17["m_columns"][] = "statuskawin";
$proto17["m_columns"][] = "jmlanak";
$proto17["m_columns"][] = "noasuransi";
$proto17["m_columns"][] = "nopks";
$proto17["m_columns"][] = "dpks";
$proto17["m_columns"][] = "handler";
$proto17["m_columns"][] = "is_active";
$proto17["m_columns"][] = "is_delete";
$proto17["m_columns"][] = "deleted_date";
$proto17["m_columns"][] = "created_date";
$proto17["m_columns"][] = "created_by";
$proto17["m_columns"][] = "last_update_by";
$proto17["m_columns"][] = "last_update_date";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "m_employee";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "m_employee2";
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
												$proto20=array();
$proto20["m_link"] = "SQLL_LEFTJOIN";
			$proto21=array();
$proto21["m_strName"] = "m_login";
$proto21["m_srcTableName"] = "m_employee2";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "username";
$proto21["m_columns"][] = "password";
$proto21["m_columns"][] = "fullname";
$proto21["m_columns"][] = "email";
$proto21["m_columns"][] = "isactive";
$proto21["m_columns"][] = "add_user";
$proto21["m_columns"][] = "add_date";
$proto21["m_columns"][] = "edit_user";
$proto21["m_columns"][] = "edit_date";
$proto21["m_columns"][] = "ext_security_id";
$proto21["m_columns"][] = "m_employee_id";
$proto21["m_columns"][] = "last_login_date";
$proto21["m_columns"][] = "apikey";
$proto21["m_columns"][] = "is_active";
$proto21["m_columns"][] = "is_delete";
$proto21["m_columns"][] = "deleted_date";
$proto21["m_columns"][] = "created_date";
$proto21["m_columns"][] = "created_by";
$proto21["m_columns"][] = "last_update_by";
$proto21["m_columns"][] = "last_update_date";
$proto21["m_columns"][] = "userpic";
$proto21["m_columns"][] = "url_calender";
$proto21["m_columns"][] = "two_factor";
$proto21["m_columns"][] = "totp";
$proto21["m_columns"][] = "reset_token";
$proto21["m_columns"][] = "reset_date";
$proto21["m_columns"][] = "phone";
$proto21["m_columns"][] = "login_type";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "LEFT OUTER JOIN m_login ON m_employee.userid = m_login.username";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "m_employee2";
$proto22=array();
$proto22["m_sql"] = "m_login.username = m_employee.userid";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "m_login",
	"m_srcTableName" => "m_employee2"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "= m_employee.userid";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="m_employee2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_employee2 = createSqlQuery_m_employee2();


	
																																																												;

			

$tdatam_employee2[".sqlquery"] = $queryData_m_employee2;



$tdatam_employee2[".hasEvents"] = false;

?>