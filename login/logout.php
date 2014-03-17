<?php
	// This page lets user logout

	session_start();
	
	// If no session variable exists, redirect the user:
	if (!isset($_SESSION['user_id'])) {

		// Need the functions to create an absolute URL:
		require_once ('login_functions.php');
		$url = absolute_url();
		header("Location: $url");
		exit(); // Quit the script.
		
	}
	else { //Cancel the session
		$_SESSION = array(); //Clear the variables
		session_destroy(); //Destroy session
		setcookie ('PHPSESSID', '', time()-3600, '/', '', 0, 0); //Destroy the cookie
	}
?>

<?php
$PageName = 'Logut';
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header_top.php');
?>

	<div id="MainArea" style="margin-left:60px; margin-top:35px; margin-bottom:100px; width:900px;">
	
		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1>Logout</h1>
			<br/>
			<?php
			// Print a customized message:
			echo "<p>You are now logged out!</p>
			<p>You can <a href=\"/login\">log in</a> again.</p>";
			?>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>