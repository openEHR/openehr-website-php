<?php


function getPost($pid) {

	//Connect to the database
	require_once ($_SERVER['DOCUMENT_ROOT'].'/functions/meta_db_conn.php');
	$sql = "SELECT item_id, category, title, summary, text, resources
			FROM news_items
			WHERE item_id = $pid";
					
	if(!($result = mysqli_query($conx, $sql))) { //if it assigned $result value
		echo 'It is not possible to get your news item due to system error. Try again later or contact system administraotr.';
		return false;
	}
	else {
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	
	//return array for page

}

?>
