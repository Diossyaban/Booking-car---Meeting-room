<?php
$tdatam_employee4 = array();
$tdatam_employee4[".searchableFields"] = array();
$tdatam_employee4[".ShortName"] = "m_employee4";
$tdatam_employee4[".OwnerID"] = "";
$tdatam_employee4[".OriginalTable"] = "m_employee";


$tdatam_employee4[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatam_employee4[".originalPagesByType"] = $tdatam_employee4[".pagesByType"];
$tdatam_employee4[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatam_employee4[".originalPages"] = $tdatam_employee4[".pages"];
$tdatam_employee4[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatam_employee4[".originalDefaultPages"] = $tdatam_employee4[".defaultPages"];

//	field labels
$fieldLabelsm_employee4 = array();
$fieldToolTipsm_employee4 = array();
$pageTitlesm_employee4 = array();
$placeHoldersm_employee4 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_employee4["English"] = array();
	$fieldToolTipsm_employee4["English"] = array();
	$placeHoldersm_employee4["English"] = array();
	$pageTitlesm_employee4["English"] = array();
	$fieldLabelsm_employee4["English"]["nama"] = "Nama";
	$fieldToolTipsm_employee4["English"]["nama"] = "";
	$placeHoldersm_employee4["English"]["nama"] = "";
	$fieldLabelsm_employee4["English"]["email"] = "Email";
	$fieldToolTipsm_employee4["English"]["email"] = "";
	$placeHoldersm_employee4["English"]["email"] = "";
	$fieldLabelsm_employee4["English"]["userid"] = "Userid";
	$fieldToolTipsm_employee4["English"]["userid"] = "";
	$placeHoldersm_employee4["English"]["userid"] = "";
	if (count($fieldToolTipsm_employee4["English"]))
		$tdatam_employee4[".isUseToolTips"] = true;
}


	$tdatam_employee4[".NCSearch"] = true;



$tdatam_employee4[".shortTableName"] = "m_employee4";
$tdatam_employee4[".nSecOptions"] = 0;

$tdatam_employee4[".mainTableOwnerID"] = "";
$tdatam_employee4[".entityType"] = 1;
$tdatam_employee4[".connId"] = "u736239518tsundbat154412412";


$tdatam_employee4[".strOriginalTableName"] = "m_employee";

	



$tdatam_employee4[".showAddInPopup"] = false;

$tdatam_employee4[".showEditInPopup"] = false;

$tdatam_employee4[".showViewInPopup"] = false;

$tdatam_employee4[".listAjax"] = false;
//	temporary
//$tdatam_employee4[".listAjax"] = false;

	$tdatam_employee4[".audit"] = false;

	$tdatam_employee4[".locking"] = false;


$pages = $tdatam_employee4[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_employee4[".edit"] = true;
	$tdatam_employee4[".afterEditAction"] = 1;
	$tdatam_employee4[".closePopupAfterEdit"] = 1;
	$tdatam_employee4[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_employee4[".add"] = true;
$tdatam_employee4[".afterAddAction"] = 1;
$tdatam_employee4[".closePopupAfterAdd"] = 1;
$tdatam_employee4[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_employee4[".list"] = true;
}



$tdatam_employee4[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_employee4[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_employee4[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_employee4[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_employee4[".printFriendly"] = true;
}



$tdatam_employee4[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_employee4[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_employee4[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_employee4[".isUseAjaxSuggest"] = true;



									

$tdatam_employee4[".ajaxCodeSnippetAdded"] = false;

$tdatam_employee4[".buttonsAdded"] = false;

$tdatam_employee4[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_employee4[".isUseTimeForSearch"] = false;


$tdatam_employee4[".badgeColor"] = "E67349";


$tdatam_employee4[".allSearchFields"] = array();
$tdatam_employee4[".filterFields"] = array();
$tdatam_employee4[".requiredSearchFields"] = array();

$tdatam_employee4[".googleLikeFields"] = array();
$tdatam_employee4[".googleLikeFields"][] = "nama";
$tdatam_employee4[".googleLikeFields"][] = "email";
$tdatam_employee4[".googleLikeFields"][] = "userid";



$tdatam_employee4[".tableType"] = "list";

$tdatam_employee4[".printerPageOrientation"] = 0;
$tdatam_employee4[".nPrinterPageScale"] = 100;

$tdatam_employee4[".nPrinterSplitRecords"] = 40;

$tdatam_employee4[".geocodingEnabled"] = false;










$tdatam_employee4[".pageSize"] = 20;

$tdatam_employee4[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_employee4[".strOrderBy"] = $tstrOrderBy;

$tdatam_employee4[".orderindexes"] = array();


$tdatam_employee4[".sqlHead"] = "SELECT nama,  email,  userid";
$tdatam_employee4[".sqlFrom"] = "FROM m_employee";
$tdatam_employee4[".sqlWhereExpr"] = "";
$tdatam_employee4[".sqlTail"] = "";

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
$tdatam_employee4[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_employee4[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_employee4[".arrGroupsPerPage"] = $arrGPP;

$tdatam_employee4[".highlightSearchResults"] = true;

$tableKeysm_employee4 = array();
$tdatam_employee4[".Keys"] = $tableKeysm_employee4;


$tdatam_employee4[".hideMobileList"] = array();




//	nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "nama";
	$fdata["GoodName"] = "nama";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee4","nama");
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


	$tdatam_employee4["nama"] = $fdata;
		$tdatam_employee4[".searchableFields"][] = "nama";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee4","email");
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


	$tdatam_employee4["email"] = $fdata;
		$tdatam_employee4[".searchableFields"][] = "email";
//	userid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "userid";
	$fdata["GoodName"] = "userid";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee4","userid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "userid";

		$fdata["sourceSingle"] = "userid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "userid";

	
	
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


	$tdatam_employee4["userid"] = $fdata;
		$tdatam_employee4[".searchableFields"][] = "userid";


$tables_data["m_employee4"]=&$tdatam_employee4;
$field_labels["m_employee4"] = &$fieldLabelsm_employee4;
$fieldToolTips["m_employee4"] = &$fieldToolTipsm_employee4;
$placeHolders["m_employee4"] = &$placeHoldersm_employee4;
$page_titles["m_employee4"] = &$pageTitlesm_employee4;


changeTextControlsToDate( "m_employee4" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_employee4"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_employee4"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_employee4()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "nama,  email,  userid";
$proto0["m_strFrom"] = "FROM m_employee";
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
	"m_strName" => "nama",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee4"
));

$proto6["m_sql"] = "nama";
$proto6["m_srcTableName"] = "m_employee4";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee4"
));

$proto8["m_sql"] = "email";
$proto8["m_srcTableName"] = "m_employee4";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "userid",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee4"
));

$proto10["m_sql"] = "userid";
$proto10["m_srcTableName"] = "m_employee4";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "m_employee";
$proto13["m_srcTableName"] = "m_employee4";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "prid";
$proto13["m_columns"][] = "comid";
$proto13["m_columns"][] = "nik";
$proto13["m_columns"][] = "nama";
$proto13["m_columns"][] = "email";
$proto13["m_columns"][] = "position";
$proto13["m_columns"][] = "norekbca";
$proto13["m_columns"][] = "secdate";
$proto13["m_columns"][] = "secuser";
$proto13["m_columns"][] = "gender";
$proto13["m_columns"][] = "agama";
$proto13["m_columns"][] = "birthplace";
$proto13["m_columns"][] = "birthday";
$proto13["m_columns"][] = "noktp";
$proto13["m_columns"][] = "nokk";
$proto13["m_columns"][] = "nohp";
$proto13["m_columns"][] = "emailpribadi";
$proto13["m_columns"][] = "alamatktp";
$proto13["m_columns"][] = "alamatdom";
$proto13["m_columns"][] = "datejoin";
$proto13["m_columns"][] = "dateangkat";
$proto13["m_columns"][] = "isaktif";
$proto13["m_columns"][] = "nonpwp";
$proto13["m_columns"][] = "npbjpskes";
$proto13["m_columns"][] = "nobpjstk";
$proto13["m_columns"][] = "nopaspor";
$proto13["m_columns"][] = "statustax";
$proto13["m_columns"][] = "daruratnama";
$proto13["m_columns"][] = "darurathub";
$proto13["m_columns"][] = "darurattelp";
$proto13["m_columns"][] = "userid";
$proto13["m_columns"][] = "level";
$proto13["m_columns"][] = "uprid";
$proto13["m_columns"][] = "statuskawin";
$proto13["m_columns"][] = "jmlanak";
$proto13["m_columns"][] = "noasuransi";
$proto13["m_columns"][] = "nopks";
$proto13["m_columns"][] = "dpks";
$proto13["m_columns"][] = "handler";
$proto13["m_columns"][] = "is_active";
$proto13["m_columns"][] = "is_delete";
$proto13["m_columns"][] = "deleted_date";
$proto13["m_columns"][] = "created_date";
$proto13["m_columns"][] = "created_by";
$proto13["m_columns"][] = "last_update_by";
$proto13["m_columns"][] = "last_update_date";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "m_employee";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "m_employee4";
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
$proto0["m_srcTableName"]="m_employee4";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_employee4 = createSqlQuery_m_employee4();


	
																																																												;

			

$tdatam_employee4[".sqlquery"] = $queryData_m_employee4;



$tdatam_employee4[".hasEvents"] = false;

?>