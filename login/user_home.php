<?php
	// The user is redirected here from login.php.

	session_start();  //Start the session
	
	// If no value is present, redirect the user:
	if (!isset($_SESSION['user_id'])) {

		// Need the functions to create an absolute URL:
		require_once ('login_functions.php');
		$url = absolute_url();
		header("Location: $url");
		exit(); // Quit the script.
	}
?>

<?php
$PageName = 'User Home';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header_english.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->

			<h1><?php echo $PageName;?></h1>

			<?php
			// Print a customized message:
			echo "<p>Welcome {$_SESSION['first_name']}!</p><br/>
			<p>You can perform one of the following activities:</p>
			<ul>
				<li><a href=\"editorial_policy\">Read editorial policy</a> (Please read before start using news system)</li>
				<li><a href=\"create\">Create news and events</a></li>
				<li><a href=\"my_news\">Edit your news and events</a></li>
				<li><a href=\"change_password\">Change your password</a></li>
				<li><a href=\"logout\">Logout</a></li>
			</ul>";
			?>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
