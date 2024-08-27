<?php
$topslistroom = array();
		$topslistroom["selectList"] = array(
		"subtype" => "sql",
		"sql" => "Select*from m_room_meeting"
	);
		$tables_data["ListRoom"][".operations"] = &$topslistroom;
?>