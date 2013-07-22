<?php

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
$PageName = 'Password Change';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

	<?php include '../panel/headpanel.php' ?>
	
</head>

<body>

<div id="MainFrame">
	
	<div id="TopPanel">
		<?php include '../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu">
	
		<div class="nav">
			<?php include '../menu/topmenu.php' ?>
		</div>
		
	</div> 

	<div id="MainArea" style=" margin-left:30px; width:900px; height:400px;">
		
		<div id="TextArea" style="left:0px; width:900px; height:400px; ">
		
			<h1>Password Change</h1>
			<br/>
					
			<?php
			
				//Connect to the database
				require_once ('../../con_test.php');
				
				if (isset($_POST['submitted'])) {
				
					$errors = array(); //Initialise error array
				
					//Check for the current password
					if (empty($_POST['pass'])) {
						
						$errors[] = 'You forgot to enter your current password.';
					
					} else {
					
						$p = mysqli_real_escape_string($dbc, trim($_POST['pass']));
					
					}
					
					//Check the new password and match against the confirmed password	
					if (!empty($_POST['pass1'])) {
					
						if($_POST['pass1'] != $_POST['pass2']) {
						
							$errors[] = 'Your new password did not match the confirmed password.';
						
						} else {
						
							$np = mysqli_real_escape_string($dbc, trim($_POST['pass1']));
						
						}
					
					} else {
					
						$errors[] = 'You forgot to enter your new password.';
					
					}
					
					
					//If everything ok
					if (empty($errors)) {
						
						//Check that they've entered the right current password
						$q = "SELECT user_id FROM users WHERE pass=SHA1('$p')";
						
						$r = mysqli_query($dbc, $q);
						
						$num = mysqli_num_rows($r);
						
						if ($num == 1) { //Match was made

							//Get the user_id
							$row = mysqli_fetch_array($r, MYSQLI_NUM);
							
							//Make the update query
							$q = "UPDATE users SET pass=SHA1('$np') WHERE user_id=$row[0]";
							
							$r = mysqli_query($dbc, $q);
							
							//If it ran ok
							if (mysqli_affected_rows($dbc) == 1) {
							
								//Print a message 
								echo '<p>Your password has been updated.</p>';
							
							} else {
							
								//Error message
								echo '<p>Tour password could not be changed due to a system error. We appologise for any inconvenience. Try again later</p>';
							
							}
							
							//Include the footer and quit the script
							include ('../templates/_footer.php');
							exit();
							
						} else { //Invalid user_id/password combination
						
							echo 'The current password you have entered in the form does not your real current password.';
						
						}
					
					} else { //Report the errors
					
						echo '<p>The following error(s) occured:<br/>';
						
						//Print error message
						foreach ($errors as $msg) { 
							echo "$msg<br/>";
						}
						
						echo '</p><p>Please try again</p>';
				
					}
					
					mysqli_close($dbc); //Close the database connection
					
				} //End of main submit conditional
				
			?>
			
			<form method="post">
			<p>Current Password: <input type="password" name="pass" size="20" maxlength="20" class="input"/></p>
			<p>New Password <sub>(max length 20)</sub>: <input type="password" name="pass1" size="20" maxlength="20" class="input" /></p>
			<p>Confirm New Password: <input type="password" name="pass2" size="20" maxlength="20" class="input"/></p>
			<input type="submit" name="submit" value="Change your password" />
			<input type="hidden" name="submitted" value="TRUE" />
			</form>
			<br/>
			
		
					
		</div>
		
	</div>
	
	<div id="BottomMenu">
		<?php include '../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
		<?php include '../panel/bottompanel.php' ?>
	</div>

</div>

<?php include '../panel/scriptpanel.php' ?>

</body>

</html>