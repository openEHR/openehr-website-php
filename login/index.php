<?php
	// The user is redirected here from login.php.
	
	session_start();

	// If value is present, redirect the user to user_home:
	if (isset($_SESSION['user_id'])) {

		// Need the functions to create an absolute URL:
		header("Location: user_home");
		exit(); // Quit the script.
	}

$PageName = 'Login';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header_login_top.php');
?>

	<div id="MainArea" style="margin-left:60px; margin-top:35px; margin-bottom:100px; width:900px;">
	
		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->

			<h1><?php echo "$PageName";?></h1>
			<br/>
			<?php
			// Print any error messages, if they exist:
			if (!empty($errors)) {
				echo '<h1>Error!</h1>
				<p>The following error(s) occurred:<br />';
				foreach ($errors as $msg) {
					echo " - $msg<br />\n";
				}
				echo '</p><p>Please try again.</p>';
			}
			// Display the form:
			?>
			
			<form action="login.php" method="post">
				<p>Email Address: <input type="text" name="email" size="20" maxlength="80" class="input" /> </p>
				<p>Password: <input type="password" name="pass" size="20" maxlength="20" class="input" /></p>
				<p><input type="submit" name="submit" value="Login" /></p>
				<input type="hidden" name="submitted" value="TRUE" />
			</form>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
