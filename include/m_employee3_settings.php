<?php
$tdatam_employee3 = array();
$tdatam_employee3[".searchableFields"] = array();
$tdatam_employee3[".ShortName"] = "m_employee3";
$tdatam_employee3[".OwnerID"] = "";
$tdatam_employee3[".OriginalTable"] = "m_employee";


$tdatam_employee3[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatam_employee3[".originalPagesByType"] = $tdatam_employee3[".pagesByType"];
$tdatam_employee3[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatam_employee3[".originalPages"] = $tdatam_employee3[".pages"];
$tdatam_employee3[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatam_employee3[".originalDefaultPages"] = $tdatam_employee3[".defaultPages"];

//	field labels
$fieldLabelsm_employee3 = array();
$fieldToolTipsm_employee3 = array();
$pageTitlesm_employee3 = array();
$placeHoldersm_employee3 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_employee3["English"] = array();
	$fieldToolTipsm_employee3["English"] = array();
	$placeHoldersm_employee3["English"] = array();
	$pageTitlesm_employee3["English"] = array();
	$fieldLabelsm_employee3["English"]["id"] = "Id";
	$fieldToolTipsm_employee3["English"]["id"] = "";
	$placeHoldersm_employee3["English"]["id"] = "";
	$fieldLabelsm_employee3["English"]["nama"] = "Nama";
	$fieldToolTipsm_employee3["English"]["nama"] = "";
	$placeHoldersm_employee3["English"]["nama"] = "";
	$fieldLabelsm_employee3["English"]["email"] = "Email";
	$fieldToolTipsm_employee3["English"]["email"] = "";
	$placeHoldersm_employee3["English"]["email"] = "";
	$fieldLabelsm_employee3["English"]["userid"] = "Userid";
	$fieldToolTipsm_employee3["English"]["userid"] = "";
	$placeHoldersm_employee3["English"]["userid"] = "";
	if (count($fieldToolTipsm_employee3["English"]))
		$tdatam_employee3[".isUseToolTips"] = true;
}


	$tdatam_employee3[".NCSearch"] = true;



$tdatam_employee3[".shortTableName"] = "m_employee3";
$tdatam_employee3[".nSecOptions"] = 0;

$tdatam_employee3[".mainTableOwnerID"] = "";
$tdatam_employee3[".entityType"] = 1;
$tdatam_employee3[".connId"] = "u736239518tsundbat154412412";


$tdatam_employee3[".strOriginalTableName"] = "m_employee";

	



$tdatam_employee3[".showAddInPopup"] = false;

$tdatam_employee3[".showEditInPopup"] = false;

$tdatam_employee3[".showViewInPopup"] = false;

$tdatam_employee3[".listAjax"] = false;
//	temporary
//$tdatam_employee3[".listAjax"] = false;

	$tdatam_employee3[".audit"] = false;

	$tdatam_employee3[".locking"] = false;


$pages = $tdatam_employee3[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_employee3[".edit"] = true;
	$tdatam_employee3[".afterEditAction"] = 1;
	$tdatam_employee3[".closePopupAfterEdit"] = 1;
	$tdatam_employee3[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_employee3[".add"] = true;
$tdatam_employee3[".afterAddAction"] = 1;
$tdatam_employee3[".closePopupAfterAdd"] = 1;
$tdatam_employee3[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_employee3[".list"] = true;
}



$tdatam_employee3[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_employee3[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_employee3[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_employee3[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_employee3[".printFriendly"] = true;
}



$tdatam_employee3[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_employee3[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_employee3[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_employee3[".isUseAjaxSuggest"] = true;



																								

$tdatam_employee3[".ajaxCodeSnippetAdded"] = false;

$tdatam_employee3[".buttonsAdded"] = false;

$tdatam_employee3[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_employee3[".isUseTimeForSearch"] = false;


$tdatam_employee3[".badgeColor"] = "DC143C";


$tdatam_employee3[".allSearchFields"] = array();
$tdatam_employee3[".filterFields"] = array();
$tdatam_employee3[".requiredSearchFields"] = array();

$tdatam_employee3[".googleLikeFields"] = array();
$tdatam_employee3[".googleLikeFields"][] = "id";
$tdatam_employee3[".googleLikeFields"][] = "nama";
$tdatam_employee3[".googleLikeFields"][] = "email";
$tdatam_employee3[".googleLikeFields"][] = "userid";



$tdatam_employee3[".tableType"] = "list";

$tdatam_employee3[".printerPageOrientation"] = 0;
$tdatam_employee3[".nPrinterPageScale"] = 100;

$tdatam_employee3[".nPrinterSplitRecords"] = 40;

$tdatam_employee3[".geocodingEnabled"] = false;










$tdatam_employee3[".pageSize"] = 20;

$tdatam_employee3[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_employee3[".strOrderBy"] = $tstrOrderBy;

$tdatam_employee3[".orderindexes"] = array();


$tdatam_employee3[".sqlHead"] = "SELECT id,  nama,  email,  userid";
$tdatam_employee3[".sqlFrom"] = "FROM m_employee";
$tdatam_employee3[".sqlWhereExpr"] = "";
$tdatam_employee3[".sqlTail"] = "";

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
$tdatam_employee3[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_employee3[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_employee3[".arrGroupsPerPage"] = $arrGPP;

$tdatam_employee3[".highlightSearchResults"] = true;

$tableKeysm_employee3 = array();
$tdatam_employee3[".Keys"] = $tableKeysm_employee3;


$tdatam_employee3[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee3","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatam_employee3["id"] = $fdata;
		$tdatam_employee3[".searchableFields"][] = "id";
//	nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nama";
	$fdata["GoodName"] = "nama";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee3","nama");
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


	$tdatam_employee3["nama"] = $fdata;
		$tdatam_employee3[".searchableFields"][] = "nama";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee3","email");
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


	$tdatam_employee3["email"] = $fdata;
		$tdatam_employee3[".searchableFields"][] = "email";
//	userid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "userid";
	$fdata["GoodName"] = "userid";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee3","userid");
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


	$tdatam_employee3["userid"] = $fdata;
		$tdatam_employee3[".searchableFields"][] = "userid";


$tables_data["m_employee3"]=&$tdatam_employee3;
$field_labels["m_employee3"] = &$fieldLabelsm_employee3;
$fieldToolTips["m_employee3"] = &$fieldToolTipsm_employee3;
$placeHolders["m_employee3"] = &$placeHoldersm_employee3;
$page_titles["m_employee3"] = &$pageTitlesm_employee3;


changeTextControlsToDate( "m_employee3" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_employee3"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_employee3"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_employee3()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  nama,  email,  userid";
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
	"m_strName" => "id",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee3"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "m_employee3";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nama",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee3"
));

$proto8["m_sql"] = "nama";
$proto8["m_srcTableName"] = "m_employee3";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee3"
));

$proto10["m_sql"] = "email";
$proto10["m_srcTableName"] = "m_employee3";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "userid",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee3"
));

$proto12["m_sql"] = "userid";
$proto12["m_srcTableName"] = "m_employee3";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "m_employee";
$proto15["m_srcTableName"] = "m_employee3";
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
$proto14["m_srcTableName"] = "m_employee3";
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
$proto0["m_srcTableName"]="m_employee3";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_employee3 = createSqlQuery_m_employee3();


	
																																																												;

				

$tdatam_employee3[".sqlquery"] = $queryData_m_employee3;



$tdatam_employee3[".hasEvents"] = false;

?>