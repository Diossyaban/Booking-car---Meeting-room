<?php
$tdatam_employee = array();
$tdatam_employee[".searchableFields"] = array();
$tdatam_employee[".ShortName"] = "m_employee";
$tdatam_employee[".OwnerID"] = "";
$tdatam_employee[".OriginalTable"] = "m_employee";


$tdatam_employee[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatam_employee[".originalPagesByType"] = $tdatam_employee[".pagesByType"];
$tdatam_employee[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatam_employee[".originalPages"] = $tdatam_employee[".pages"];
$tdatam_employee[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatam_employee[".originalDefaultPages"] = $tdatam_employee[".defaultPages"];

//	field labels
$fieldLabelsm_employee = array();
$fieldToolTipsm_employee = array();
$pageTitlesm_employee = array();
$placeHoldersm_employee = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_employee["English"] = array();
	$fieldToolTipsm_employee["English"] = array();
	$placeHoldersm_employee["English"] = array();
	$pageTitlesm_employee["English"] = array();
	$fieldLabelsm_employee["English"]["nama"] = "Nama";
	$fieldToolTipsm_employee["English"]["nama"] = "";
	$placeHoldersm_employee["English"]["nama"] = "";
	$fieldLabelsm_employee["English"]["email"] = "Email";
	$fieldToolTipsm_employee["English"]["email"] = "";
	$placeHoldersm_employee["English"]["email"] = "";
	if (count($fieldToolTipsm_employee["English"]))
		$tdatam_employee[".isUseToolTips"] = true;
}


	$tdatam_employee[".NCSearch"] = true;



$tdatam_employee[".shortTableName"] = "m_employee";
$tdatam_employee[".nSecOptions"] = 0;

$tdatam_employee[".mainTableOwnerID"] = "";
$tdatam_employee[".entityType"] = 1;
$tdatam_employee[".connId"] = "u736239518tsundbat154412412";


$tdatam_employee[".strOriginalTableName"] = "m_employee";

	



$tdatam_employee[".showAddInPopup"] = false;

$tdatam_employee[".showEditInPopup"] = false;

$tdatam_employee[".showViewInPopup"] = false;

$tdatam_employee[".listAjax"] = false;
//	temporary
//$tdatam_employee[".listAjax"] = false;

	$tdatam_employee[".audit"] = false;

	$tdatam_employee[".locking"] = false;


$pages = $tdatam_employee[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_employee[".edit"] = true;
	$tdatam_employee[".afterEditAction"] = 1;
	$tdatam_employee[".closePopupAfterEdit"] = 1;
	$tdatam_employee[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_employee[".add"] = true;
$tdatam_employee[".afterAddAction"] = 1;
$tdatam_employee[".closePopupAfterAdd"] = 1;
$tdatam_employee[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_employee[".list"] = true;
}



$tdatam_employee[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_employee[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_employee[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_employee[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_employee[".printFriendly"] = true;
}



$tdatam_employee[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_employee[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_employee[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_employee[".isUseAjaxSuggest"] = true;



																								

$tdatam_employee[".ajaxCodeSnippetAdded"] = false;

$tdatam_employee[".buttonsAdded"] = false;

$tdatam_employee[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_employee[".isUseTimeForSearch"] = false;


$tdatam_employee[".badgeColor"] = "00C2C5";


$tdatam_employee[".allSearchFields"] = array();
$tdatam_employee[".filterFields"] = array();
$tdatam_employee[".requiredSearchFields"] = array();

$tdatam_employee[".googleLikeFields"] = array();
$tdatam_employee[".googleLikeFields"][] = "email";
$tdatam_employee[".googleLikeFields"][] = "nama";



$tdatam_employee[".tableType"] = "list";

$tdatam_employee[".printerPageOrientation"] = 0;
$tdatam_employee[".nPrinterPageScale"] = 100;

$tdatam_employee[".nPrinterSplitRecords"] = 40;

$tdatam_employee[".geocodingEnabled"] = false;










$tdatam_employee[".pageSize"] = 20;

$tdatam_employee[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_employee[".strOrderBy"] = $tstrOrderBy;

$tdatam_employee[".orderindexes"] = array();


$tdatam_employee[".sqlHead"] = "SELECT email,  nama";
$tdatam_employee[".sqlFrom"] = "FROM m_employee";
$tdatam_employee[".sqlWhereExpr"] = "(email is not null) AND (is_active = 1)";
$tdatam_employee[".sqlTail"] = "";

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
$tdatam_employee[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_employee[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_employee[".arrGroupsPerPage"] = $arrGPP;

$tdatam_employee[".highlightSearchResults"] = true;

$tableKeysm_employee = array();
$tdatam_employee[".Keys"] = $tableKeysm_employee;


$tdatam_employee[".hideMobileList"] = array();




//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","email");
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


	$tdatam_employee["email"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "email";
//	nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nama";
	$fdata["GoodName"] = "nama";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","nama");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nama";

		$fdata["sourceSingle"] = "nama";

		$fdata["isSQLExpression"] = true;
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


	$tdatam_employee["nama"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "nama";


$tables_data["m_employee"]=&$tdatam_employee;
$field_labels["m_employee"] = &$fieldLabelsm_employee;
$fieldToolTips["m_employee"] = &$fieldToolTipsm_employee;
$placeHolders["m_employee"] = &$placeHoldersm_employee;
$page_titles["m_employee"] = &$pageTitlesm_employee;


changeTextControlsToDate( "m_employee" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_employee"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_employee"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_employee()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "email,  nama";
$proto0["m_strFrom"] = "FROM m_employee";
$proto0["m_strWhere"] = "(email is not null) AND (is_active = 1)";
$proto0["m_strOrderBy"] = "";
	
																																																												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(email is not null) AND (is_active = 1)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(email is not null) AND (is_active = 1)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "email is not null";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
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
$proto6["m_sql"] = "is_active = 1";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
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
	"m_srcTableName" => "m_employee"
));

$proto10["m_sql"] = "email";
$proto10["m_srcTableName"] = "m_employee";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nama",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto12["m_sql"] = "nama";
$proto12["m_srcTableName"] = "m_employee";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "m_employee";
$proto15["m_srcTableName"] = "m_employee";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "prid";
$proto15["m_columns"][] = "comid";
$proto15["m_columns"][] = "nik";
$proto15["m_columns"][] = "nama";
$proto15["m_columns"][] = "email";
$proto15["m_columns"][] = "position";
$proto15["m_columns"][] = "norekbca";
$proto15["m_columns"][] = "secdate";
$proto15["m_columns"][] = "secuser";
$proto15["m_columns"][] = "gender";
$proto15["m_columns"][] = "agama";
$proto15["m_columns"][] = "birthplace";
$proto15["m_columns"][] = "birthday";
$proto15["m_columns"][] = "noktp";
$proto15["m_columns"][] = "nokk";
$proto15["m_columns"][] = "nohp";
$proto15["m_columns"][] = "emailpribadi";
$proto15["m_columns"][] = "alamatktp";
$proto15["m_columns"][] = "alamatdom";
$proto15["m_columns"][] = "datejoin";
$proto15["m_columns"][] = "dateangkat";
$proto15["m_columns"][] = "isaktif";
$proto15["m_columns"][] = "nonpwp";
$proto15["m_columns"][] = "npbjpskes";
$proto15["m_columns"][] = "nobpjstk";
$proto15["m_columns"][] = "nopaspor";
$proto15["m_columns"][] = "statustax";
$proto15["m_columns"][] = "daruratnama";
$proto15["m_columns"][] = "darurathub";
$proto15["m_columns"][] = "darurattelp";
$proto15["m_columns"][] = "userid";
$proto15["m_columns"][] = "level";
$proto15["m_columns"][] = "uprid";
$proto15["m_columns"][] = "statuskawin";
$proto15["m_columns"][] = "jmlanak";
$proto15["m_columns"][] = "noasuransi";
$proto15["m_columns"][] = "nopks";
$proto15["m_columns"][] = "dpks";
$proto15["m_columns"][] = "handler";
$proto15["m_columns"][] = "is_active";
$proto15["m_columns"][] = "is_delete";
$proto15["m_columns"][] = "deleted_date";
$proto15["m_columns"][] = "created_date";
$proto15["m_columns"][] = "created_by";
$proto15["m_columns"][] = "last_update_by";
$proto15["m_columns"][] = "last_update_date";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "m_employee";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "m_employee";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="m_employee";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_employee = createSqlQuery_m_employee();


	
																																																												;

		

$tdatam_employee[".sqlquery"] = $queryData_m_employee;



$tdatam_employee[".hasEvents"] = false;

?>