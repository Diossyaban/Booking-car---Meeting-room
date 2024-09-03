<?php
$tdatat_booking_view1 = array();
$tdatat_booking_view1[".searchableFields"] = array();
$tdatat_booking_view1[".ShortName"] = "t_booking_view1";
$tdatat_booking_view1[".OwnerID"] = "";
$tdatat_booking_view1[".OriginalTable"] = "t_booking";


$tdatat_booking_view1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatat_booking_view1[".originalPagesByType"] = $tdatat_booking_view1[".pagesByType"];
$tdatat_booking_view1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatat_booking_view1[".originalPages"] = $tdatat_booking_view1[".pages"];
$tdatat_booking_view1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatat_booking_view1[".originalDefaultPages"] = $tdatat_booking_view1[".defaultPages"];

//	field labels
$fieldLabelst_booking_view1 = array();
$fieldToolTipst_booking_view1 = array();
$pageTitlest_booking_view1 = array();
$placeHolderst_booking_view1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_booking_view1["English"] = array();
	$fieldToolTipst_booking_view1["English"] = array();
	$placeHolderst_booking_view1["English"] = array();
	$pageTitlest_booking_view1["English"] = array();
	$fieldLabelst_booking_view1["English"]["t_booking_id"] = "T Booking Id";
	$fieldToolTipst_booking_view1["English"]["t_booking_id"] = "";
	$placeHolderst_booking_view1["English"]["t_booking_id"] = "";
	$fieldLabelst_booking_view1["English"]["t_booking_no"] = "T Booking No";
	$fieldToolTipst_booking_view1["English"]["t_booking_no"] = "";
	$placeHolderst_booking_view1["English"]["t_booking_no"] = "";
	$fieldLabelst_booking_view1["English"]["t_booking_from_date"] = "From Date";
	$fieldToolTipst_booking_view1["English"]["t_booking_from_date"] = "";
	$placeHolderst_booking_view1["English"]["t_booking_from_date"] = "";
	$fieldLabelst_booking_view1["English"]["t_booking_to_date"] = "To Date";
	$fieldToolTipst_booking_view1["English"]["t_booking_to_date"] = "";
	$placeHolderst_booking_view1["English"]["t_booking_to_date"] = "";
	$fieldLabelst_booking_view1["English"]["t_booking_from_time"] = "T Booking From Time";
	$fieldToolTipst_booking_view1["English"]["t_booking_from_time"] = "";
	$placeHolderst_booking_view1["English"]["t_booking_from_time"] = "";
	$fieldLabelst_booking_view1["English"]["t_booking_to_time"] = "T Booking To Time";
	$fieldToolTipst_booking_view1["English"]["t_booking_to_time"] = "";
	$placeHolderst_booking_view1["English"]["t_booking_to_time"] = "";
	$fieldLabelst_booking_view1["English"]["t_booking_destination"] = "Address";
	$fieldToolTipst_booking_view1["English"]["t_booking_destination"] = "";
	$placeHolderst_booking_view1["English"]["t_booking_destination"] = "";
	$fieldLabelst_booking_view1["English"]["t_booking_remarks"] = "Remarks";
	$fieldToolTipst_booking_view1["English"]["t_booking_remarks"] = "";
	$placeHolderst_booking_view1["English"]["t_booking_remarks"] = "";
	$fieldLabelst_booking_view1["English"]["t_booking_status"] = "T Booking Status";
	$fieldToolTipst_booking_view1["English"]["t_booking_status"] = "";
	$placeHolderst_booking_view1["English"]["t_booking_status"] = "";
	$fieldLabelst_booking_view1["English"]["m_vehicle_id"] = "Vehicle";
	$fieldToolTipst_booking_view1["English"]["m_vehicle_id"] = "";
	$placeHolderst_booking_view1["English"]["m_vehicle_id"] = "";
	$fieldLabelst_booking_view1["English"]["t_booking_user"] = "Order By";
	$fieldToolTipst_booking_view1["English"]["t_booking_user"] = "";
	$placeHolderst_booking_view1["English"]["t_booking_user"] = "";
	$fieldLabelst_booking_view1["English"]["m_vehicle_driver"] = "Driver";
	$fieldToolTipst_booking_view1["English"]["m_vehicle_driver"] = "";
	$placeHolderst_booking_view1["English"]["m_vehicle_driver"] = "";
	$fieldLabelst_booking_view1["English"]["fr_date"] = "Day";
	$fieldToolTipst_booking_view1["English"]["fr_date"] = "";
	$placeHolderst_booking_view1["English"]["fr_date"] = "";
	$fieldLabelst_booking_view1["English"]["to_dt"] = "To Dt";
	$fieldToolTipst_booking_view1["English"]["to_dt"] = "";
	$placeHolderst_booking_view1["English"]["to_dt"] = "";
	$fieldLabelst_booking_view1["English"]["Voucher"] = "Voucher";
	$fieldToolTipst_booking_view1["English"]["Voucher"] = "";
	$placeHolderst_booking_view1["English"]["Voucher"] = "";
	if (count($fieldToolTipst_booking_view1["English"]))
		$tdatat_booking_view1[".isUseToolTips"] = true;
}


	$tdatat_booking_view1[".NCSearch"] = true;



$tdatat_booking_view1[".shortTableName"] = "t_booking_view1";
$tdatat_booking_view1[".nSecOptions"] = 0;

$tdatat_booking_view1[".mainTableOwnerID"] = "";
$tdatat_booking_view1[".entityType"] = 1;
$tdatat_booking_view1[".connId"] = "u736239518tsundbat154412412";


$tdatat_booking_view1[".strOriginalTableName"] = "t_booking";

	



$tdatat_booking_view1[".showAddInPopup"] = false;

$tdatat_booking_view1[".showEditInPopup"] = false;

$tdatat_booking_view1[".showViewInPopup"] = false;

$tdatat_booking_view1[".listAjax"] = false;
//	temporary
//$tdatat_booking_view1[".listAjax"] = false;

	$tdatat_booking_view1[".audit"] = false;

	$tdatat_booking_view1[".locking"] = false;


$pages = $tdatat_booking_view1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatat_booking_view1[".edit"] = true;
	$tdatat_booking_view1[".afterEditAction"] = 1;
	$tdatat_booking_view1[".closePopupAfterEdit"] = 1;
	$tdatat_booking_view1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatat_booking_view1[".add"] = true;
$tdatat_booking_view1[".afterAddAction"] = 1;
$tdatat_booking_view1[".closePopupAfterAdd"] = 1;
$tdatat_booking_view1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatat_booking_view1[".list"] = true;
}



$tdatat_booking_view1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatat_booking_view1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatat_booking_view1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatat_booking_view1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatat_booking_view1[".printFriendly"] = true;
}



$tdatat_booking_view1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatat_booking_view1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatat_booking_view1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatat_booking_view1[".isUseAjaxSuggest"] = true;



																								

$tdatat_booking_view1[".ajaxCodeSnippetAdded"] = false;

$tdatat_booking_view1[".buttonsAdded"] = false;

$tdatat_booking_view1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_booking_view1[".isUseTimeForSearch"] = false;


$tdatat_booking_view1[".badgeColor"] = "6493EA";


$tdatat_booking_view1[".allSearchFields"] = array();
$tdatat_booking_view1[".filterFields"] = array();
$tdatat_booking_view1[".requiredSearchFields"] = array();

$tdatat_booking_view1[".googleLikeFields"] = array();
$tdatat_booking_view1[".googleLikeFields"][] = "t_booking_id";
$tdatat_booking_view1[".googleLikeFields"][] = "t_booking_no";
$tdatat_booking_view1[".googleLikeFields"][] = "t_booking_from_date";
$tdatat_booking_view1[".googleLikeFields"][] = "t_booking_to_date";
$tdatat_booking_view1[".googleLikeFields"][] = "t_booking_from_time";
$tdatat_booking_view1[".googleLikeFields"][] = "t_booking_to_time";
$tdatat_booking_view1[".googleLikeFields"][] = "t_booking_destination";
$tdatat_booking_view1[".googleLikeFields"][] = "t_booking_remarks";
$tdatat_booking_view1[".googleLikeFields"][] = "t_booking_status";
$tdatat_booking_view1[".googleLikeFields"][] = "m_vehicle_id";
$tdatat_booking_view1[".googleLikeFields"][] = "fr_date";
$tdatat_booking_view1[".googleLikeFields"][] = "to_dt";
$tdatat_booking_view1[".googleLikeFields"][] = "t_booking_user";
$tdatat_booking_view1[".googleLikeFields"][] = "m_vehicle_driver";
$tdatat_booking_view1[".googleLikeFields"][] = "Voucher";



$tdatat_booking_view1[".tableType"] = "list";

$tdatat_booking_view1[".printerPageOrientation"] = 0;
$tdatat_booking_view1[".nPrinterPageScale"] = 100;

$tdatat_booking_view1[".nPrinterSplitRecords"] = 40;

$tdatat_booking_view1[".geocodingEnabled"] = false;










$tdatat_booking_view1[".pageSize"] = 20;

$tdatat_booking_view1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatat_booking_view1[".strOrderBy"] = $tstrOrderBy;

$tdatat_booking_view1[".orderindexes"] = array();


$tdatat_booking_view1[".sqlHead"] = "SELECT t_booking_id,  t_booking_no,  t_booking_from_date,  t_booking_to_date,  t_booking_from_time,  t_booking_to_time,  t_booking_destination,  t_booking_remarks,  t_booking_status,  m_vehicle_id,  DATE(t_booking_from_date) AS fr_date,  DATE(t_booking_to_date) AS to_dt,  t_booking_user,  m_vehicle_driver,  Voucher";
$tdatat_booking_view1[".sqlFrom"] = "FROM t_booking";
$tdatat_booking_view1[".sqlWhereExpr"] = "";
$tdatat_booking_view1[".sqlTail"] = "";

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
$tdatat_booking_view1[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_booking_view1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_booking_view1[".arrGroupsPerPage"] = $arrGPP;

$tdatat_booking_view1[".highlightSearchResults"] = true;

$tableKeyst_booking_view1 = array();
$tableKeyst_booking_view1[] = "t_booking_id";
$tdatat_booking_view1[".Keys"] = $tableKeyst_booking_view1;


$tdatat_booking_view1[".hideMobileList"] = array();




//	t_booking_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "t_booking_id";
	$fdata["GoodName"] = "t_booking_id";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking_view1","t_booking_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "t_booking_id";

		$fdata["sourceSingle"] = "t_booking_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_booking_id";

	
	
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


	$tdatat_booking_view1["t_booking_id"] = $fdata;
		$tdatat_booking_view1[".searchableFields"][] = "t_booking_id";
//	t_booking_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "t_booking_no";
	$fdata["GoodName"] = "t_booking_no";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking_view1","t_booking_no");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_booking_no";

		$fdata["sourceSingle"] = "t_booking_no";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_booking_no";

	
	
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
			$edata["EditParams"].= " maxlength=45";

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


	$tdatat_booking_view1["t_booking_no"] = $fdata;
		$tdatat_booking_view1[".searchableFields"][] = "t_booking_no";
//	t_booking_from_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "t_booking_from_date";
	$fdata["GoodName"] = "t_booking_from_date";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking_view1","t_booking_from_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "t_booking_from_date";

		$fdata["sourceSingle"] = "t_booking_from_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_booking_from_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatat_booking_view1["t_booking_from_date"] = $fdata;
		$tdatat_booking_view1[".searchableFields"][] = "t_booking_from_date";
//	t_booking_to_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "t_booking_to_date";
	$fdata["GoodName"] = "t_booking_to_date";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking_view1","t_booking_to_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "t_booking_to_date";

		$fdata["sourceSingle"] = "t_booking_to_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_booking_to_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatat_booking_view1["t_booking_to_date"] = $fdata;
		$tdatat_booking_view1[".searchableFields"][] = "t_booking_to_date";
//	t_booking_from_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "t_booking_from_time";
	$fdata["GoodName"] = "t_booking_from_time";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking_view1","t_booking_from_time");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "t_booking_from_time";

		$fdata["sourceSingle"] = "t_booking_from_time";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_booking_from_time";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatat_booking_view1["t_booking_from_time"] = $fdata;
		$tdatat_booking_view1[".searchableFields"][] = "t_booking_from_time";
//	t_booking_to_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "t_booking_to_time";
	$fdata["GoodName"] = "t_booking_to_time";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking_view1","t_booking_to_time");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "t_booking_to_time";

		$fdata["sourceSingle"] = "t_booking_to_time";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_booking_to_time";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatat_booking_view1["t_booking_to_time"] = $fdata;
		$tdatat_booking_view1[".searchableFields"][] = "t_booking_to_time";
//	t_booking_destination
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "t_booking_destination";
	$fdata["GoodName"] = "t_booking_destination";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking_view1","t_booking_destination");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_booking_destination";

		$fdata["sourceSingle"] = "t_booking_destination";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_booking_destination";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatat_booking_view1["t_booking_destination"] = $fdata;
		$tdatat_booking_view1[".searchableFields"][] = "t_booking_destination";
//	t_booking_remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "t_booking_remarks";
	$fdata["GoodName"] = "t_booking_remarks";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking_view1","t_booking_remarks");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_booking_remarks";

		$fdata["sourceSingle"] = "t_booking_remarks";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_booking_remarks";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatat_booking_view1["t_booking_remarks"] = $fdata;
		$tdatat_booking_view1[".searchableFields"][] = "t_booking_remarks";
//	t_booking_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "t_booking_status";
	$fdata["GoodName"] = "t_booking_status";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking_view1","t_booking_status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_booking_status";

		$fdata["sourceSingle"] = "t_booking_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_booking_status";

	
	
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
			$edata["EditParams"].= " maxlength=45";

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


	$tdatat_booking_view1["t_booking_status"] = $fdata;
		$tdatat_booking_view1[".searchableFields"][] = "t_booking_status";
//	m_vehicle_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "m_vehicle_id";
	$fdata["GoodName"] = "m_vehicle_id";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking_view1","m_vehicle_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_vehicle_id";

		$fdata["sourceSingle"] = "m_vehicle_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_vehicle_id";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "m_vehicle";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "m_vehicle_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "m_vehicle_name";

	

	
	$edata["LookupOrderBy"] = "m_vehicle_name";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatat_booking_view1["m_vehicle_id"] = $fdata;
		$tdatat_booking_view1[".searchableFields"][] = "m_vehicle_id";
//	fr_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "fr_date";
	$fdata["GoodName"] = "fr_date";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("t_booking_view1","fr_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fr_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATE(t_booking_from_date)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatat_booking_view1["fr_date"] = $fdata;
		$tdatat_booking_view1[".searchableFields"][] = "fr_date";
//	to_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "to_dt";
	$fdata["GoodName"] = "to_dt";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("t_booking_view1","to_dt");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "to_dt";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATE(t_booking_to_date)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatat_booking_view1["to_dt"] = $fdata;
		$tdatat_booking_view1[".searchableFields"][] = "to_dt";
//	t_booking_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "t_booking_user";
	$fdata["GoodName"] = "t_booking_user";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking_view1","t_booking_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_booking_user";

		$fdata["sourceSingle"] = "t_booking_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_booking_user";

	
	
			
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "m_login";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "email";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "fullname";

	

	
	$edata["LookupOrderBy"] = "fullname";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatat_booking_view1["t_booking_user"] = $fdata;
		$tdatat_booking_view1[".searchableFields"][] = "t_booking_user";
//	m_vehicle_driver
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "m_vehicle_driver";
	$fdata["GoodName"] = "m_vehicle_driver";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking_view1","m_vehicle_driver");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_vehicle_driver";

		$fdata["sourceSingle"] = "m_vehicle_driver";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_vehicle_driver";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "m_vehicle";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "m_vehicle_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "m_vehicle_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatat_booking_view1["m_vehicle_driver"] = $fdata;
		$tdatat_booking_view1[".searchableFields"][] = "m_vehicle_driver";
//	Voucher
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Voucher";
	$fdata["GoodName"] = "Voucher";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking_view1","Voucher");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Voucher";

		$fdata["sourceSingle"] = "Voucher";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Voucher";

	
	
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


	$tdatat_booking_view1["Voucher"] = $fdata;
		$tdatat_booking_view1[".searchableFields"][] = "Voucher";


$tables_data["t_booking_view1"]=&$tdatat_booking_view1;
$field_labels["t_booking_view1"] = &$fieldLabelst_booking_view1;
$fieldToolTips["t_booking_view1"] = &$fieldToolTipst_booking_view1;
$placeHolders["t_booking_view1"] = &$placeHolderst_booking_view1;
$page_titles["t_booking_view1"] = &$pageTitlest_booking_view1;


changeTextControlsToDate( "t_booking_view1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["t_booking_view1"] = array();
//	m_disposition
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="m_disposition";
		$detailsParam["dOriginalTable"] = "m_disposition";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "m_disposition";
	$detailsParam["dCaptionTable"] = GetTableCaption("m_disposition");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["t_booking_view1"][$dIndex] = $detailsParam;

	
		$detailsTablesData["t_booking_view1"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["t_booking_view1"][$dIndex]["masterKeys"][]="t_booking_id";

				$detailsTablesData["t_booking_view1"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["t_booking_view1"][$dIndex]["detailKeys"][]="t_disposition_no";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["t_booking_view1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_t_booking_view1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_booking_id,  t_booking_no,  t_booking_from_date,  t_booking_to_date,  t_booking_from_time,  t_booking_to_time,  t_booking_destination,  t_booking_remarks,  t_booking_status,  m_vehicle_id,  DATE(t_booking_from_date) AS fr_date,  DATE(t_booking_to_date) AS to_dt,  t_booking_user,  m_vehicle_driver,  Voucher";
$proto0["m_strFrom"] = "FROM t_booking";
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
	"m_strName" => "t_booking_id",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking_view1"
));

$proto6["m_sql"] = "t_booking_id";
$proto6["m_srcTableName"] = "t_booking_view1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "t_booking_no",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking_view1"
));

$proto8["m_sql"] = "t_booking_no";
$proto8["m_srcTableName"] = "t_booking_view1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "t_booking_from_date",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking_view1"
));

$proto10["m_sql"] = "t_booking_from_date";
$proto10["m_srcTableName"] = "t_booking_view1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "t_booking_to_date",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking_view1"
));

$proto12["m_sql"] = "t_booking_to_date";
$proto12["m_srcTableName"] = "t_booking_view1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "t_booking_from_time",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking_view1"
));

$proto14["m_sql"] = "t_booking_from_time";
$proto14["m_srcTableName"] = "t_booking_view1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "t_booking_to_time",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking_view1"
));

$proto16["m_sql"] = "t_booking_to_time";
$proto16["m_srcTableName"] = "t_booking_view1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "t_booking_destination",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking_view1"
));

$proto18["m_sql"] = "t_booking_destination";
$proto18["m_srcTableName"] = "t_booking_view1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "t_booking_remarks",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking_view1"
));

$proto20["m_sql"] = "t_booking_remarks";
$proto20["m_srcTableName"] = "t_booking_view1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "t_booking_status",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking_view1"
));

$proto22["m_sql"] = "t_booking_status";
$proto22["m_srcTableName"] = "t_booking_view1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "m_vehicle_id",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking_view1"
));

$proto24["m_sql"] = "m_vehicle_id";
$proto24["m_srcTableName"] = "t_booking_view1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$proto27=array();
$proto27["m_functiontype"] = "SQLF_CUSTOM";
$proto27["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "t_booking_from_date"
));

$proto27["m_arguments"][]=$obj;
$proto27["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto27);

$proto26["m_sql"] = "DATE(t_booking_from_date)";
$proto26["m_srcTableName"] = "t_booking_view1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "fr_date";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$proto30=array();
$proto30["m_functiontype"] = "SQLF_CUSTOM";
$proto30["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "t_booking_to_date"
));

$proto30["m_arguments"][]=$obj;
$proto30["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto30);

$proto29["m_sql"] = "DATE(t_booking_to_date)";
$proto29["m_srcTableName"] = "t_booking_view1";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "to_dt";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "t_booking_user",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking_view1"
));

$proto32["m_sql"] = "t_booking_user";
$proto32["m_srcTableName"] = "t_booking_view1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "m_vehicle_driver",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking_view1"
));

$proto34["m_sql"] = "m_vehicle_driver";
$proto34["m_srcTableName"] = "t_booking_view1";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Voucher",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking_view1"
));

$proto36["m_sql"] = "Voucher";
$proto36["m_srcTableName"] = "t_booking_view1";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "t_booking";
$proto39["m_srcTableName"] = "t_booking_view1";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "t_booking_id";
$proto39["m_columns"][] = "t_booking_no";
$proto39["m_columns"][] = "t_booking_from_date";
$proto39["m_columns"][] = "t_booking_to_date";
$proto39["m_columns"][] = "t_booking_from_time";
$proto39["m_columns"][] = "t_booking_to_time";
$proto39["m_columns"][] = "t_booking_destination";
$proto39["m_columns"][] = "t_booking_remarks";
$proto39["m_columns"][] = "add_user";
$proto39["m_columns"][] = "add_date";
$proto39["m_columns"][] = "edit_user";
$proto39["m_columns"][] = "edit_date";
$proto39["m_columns"][] = "t_booking_status";
$proto39["m_columns"][] = "m_vehicle_id";
$proto39["m_columns"][] = "t_booking_user";
$proto39["m_columns"][] = "m_vehicle_driver";
$proto39["m_columns"][] = "m_plat";
$proto39["m_columns"][] = "Voucher";
$proto39["m_columns"][] = "flag";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "t_booking";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "t_booking_view1";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="t_booking_view1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_booking_view1 = createSqlQuery_t_booking_view1();


	
																																																												;

															

$tdatat_booking_view1[".sqlquery"] = $queryData_t_booking_view1;



$tdatat_booking_view1[".hasEvents"] = false;

?>