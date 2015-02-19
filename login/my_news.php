<?php
	// The user is redirected here from user_home.php.

	session_start();
	
	// If no session is present, redirect the user:
	if (!isset($_SESSION['user_id'])) {

		// Need the functions to create an absolute URL:
		require_once ('login_functions.php');
		$url = absolute_url();
		header("Location: $url");
		exit(); // Quit the script.
	}
	else {
	$usr_id = (int)$_SESSION['user_id'];
	}
	
?>

<?php
$PageName = 'My News Items';
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header_english.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->

			<h1><?php echo "$PageName";?></h1>
			
			<?php
			//Connect to the database
			require_once ($_SERVER['DOCUMENT_ROOT'].'/functions/meta_db_conn.php');
			
			//Retrieve users news summary
			$q = "SELECT item_id, category, title, summary, DATE_FORMAT(date, '%M %d, %Y') AS dr FROM news_items WHERE user_id='$usr_id' ORDER BY date DESC";
			$r = @mysqli_query ($conx, $q);
			
			//Count the number of the rows
			$num = mysqli_num_rows($r);
			echo '<br/>';
			
			if ($num > 0) { //everything went ok, display results
				
				//Fetch and print all releases:
				while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
					echo '<a href="/news_events/' . $row['category'] . '/test.php?id=' . $row['item_id'] . '">'.$row['title'].'</a> | <a href="edit.php?nid=' . $row['item_id'] . '">Edit</a><br/><h6>'
						. $row['dr'] . '</h6>
						<p>' . $row['summary'] . '</p><br/>';
				}
				mysqli_free_result ($r); //Free up the resources
			}
			else { //if it didnt run ok
				echo '<p>You haven\'t created any news yet.</p>';
			} 
			
			mysqli_close($conx);
			?>
					
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
