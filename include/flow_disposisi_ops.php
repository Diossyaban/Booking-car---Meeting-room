<?php
$topsflow_disposisi = array();
		$topsflow_disposisi["selectList"] = array(
		"subtype" => "sql",
		"sql" => "call sp_disposition_follow_user_1(':session.UserID')"
	);
		$tables_data["flow_disposisi"][".operations"] = &$topsflow_disposisi;
?>