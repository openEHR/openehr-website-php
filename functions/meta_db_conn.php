<?php
	$db_conn = "";
	if (basename ($_SERVER['DOCUMENT_ROOT']) == "www.openehr.org") {
		$db_conn .= "db_conn.php";
	}
	else {
		$db_conn .= "db_conn_test.php";
	}
	require_once ("../../$db_conn");
?>
