<?php
$topsdisposisiview = array();
		$topsdisposisiview["selectList"] = array(
		"subtype" => "sql",
		"sql" => "call sp_get_disposition_status(':session.UserID',6, ':session.t_booking_id')"
	);
		$tables_data["disposisiview"][".operations"] = &$topsdisposisiview;
?>