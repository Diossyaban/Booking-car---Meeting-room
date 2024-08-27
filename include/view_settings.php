<?php
require_once(getabspath("classes/cipherer.php"));



$tdataview = array();
$tdataview[".ShortName"] = "view";

$tdataview[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"]}" );
$tdataview[".originalPagesByType"] = $tdataview[".pagesByType"];
$tdataview[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"]}" ) );
$tdataview[".originalPages"] = $tdataview[".pages"];
$tdataview[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\"}" );
$tdataview[".originalDefaultPages"] = $tdataview[".defaultPages"];


//	field labels
$fieldLabelsview = array();
$pageTitlesview = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsview["English"] = array();
}

/*
//	search fields
$tdataview[".searchFields"] = array();

// all search fields
$tdataview[".allSearchFields"] = array();

// good like search fields
$tdataview[".googleLikeFields"] = array();
*/

/*
$tdataview[".dashElements"] = array();

*/
$tdataview[".shortTableName"] = "view";
$tdataview[".entityType"] = 4;




$tdataview[".hasEvents"] = false;


$tdataview[".tableType"] = "dashboard";



$tdataview[".addPageEvents"] = false;

$tdataview[".isUseAjaxSuggest"] = true;

$tables_data["View"]=&$tdataview;
$field_labels["View"] = &$fieldLabelsview;
$page_titles["View"] = &$pageTitlesview;

?>