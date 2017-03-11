<?php
/*	$db_conn = "";
	if (basename ($_SERVER['DOCUMENT_ROOT']) == "www.openehr.org") {
		$db_conn .= "db_conn.php";
	}
	else {
		$db_conn .= "db_conn_test.php";
	}*/
	$db_conn = "db_conn.php";
	require_once (dirname($_SERVER['DOCUMENT_ROOT']) . "/" . $db_conn);	
?>
