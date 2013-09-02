<?php
	// The user is redirected here from user_home.php.

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

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>
	
		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->

			<h1><?php echo $PageName;?></h1>
					
			<?php
			
				//Connect to the database
				require_once ('../../con_real.php');
				
				if (isset($_POST['submitted'])) {
				
					//Initialise error array
					$errors = array(); 
					
					//Trim all incomming data
					$trimmed = array_map('trim', $_POST);
				
					//Check for the current password
					if (empty($trimmed['pass'])) {
						
						$errors[] = 'You forgot to enter your current password.';
					
					} else {
					
						$p = mysqli_real_escape_string($conx, $trimmed['pass']);
					
					}
					
					//Check the new password and match against the confirmed password	
					if (!empty($trimmed['pass1'])) {
					
						if($trimmed['pass1'] != $trimmed['pass2']) {
						
							$errors[] = 'Your new password did not match the confirmed password.';
						
						} else {
						
							if(preg_match('/^\w{8,20}$/',$trimmed['pass1'])) {
								$np = mysqli_real_escape_string($conx, $trimmed['pass1']);
							} else {
								$errors[] = 'Please enter a valid password. Valid password must be 8-20 characters long, containing only letters, numbers, and the underscore.';
							}
						
						}
					
					} else {
					
						$errors[] = 'You forgot to enter your new password.';
					
					}
					
					//If everything ok
					if (empty($errors)) {
						
						//Check that they've entered the right current password
						$q = "SELECT user_id FROM users WHERE pass=SHA1('$p')";
						
						$r = mysqli_query($conx, $q);
						
						$num = mysqli_num_rows($r);
						
						if ($num == 1) { //Match was made

							//Get the user_id
							$row = mysqli_fetch_array($r, MYSQLI_NUM);
							
							//Make the update query
							$q = "UPDATE users SET pass=SHA1('$np') WHERE user_id=$row[0]";
							
							$r = mysqli_query($conx, $q);
							
							//If it ran ok
							if (mysqli_affected_rows($conx) == 1) {
							
								//Print a message 
								echo '<p>Your password has been updated.</p>';
							
							} else {
							
								//Error message
								echo '<p>Tour password could not be changed due to a system error. We appologise for any inconvenience. Try again later</p>';
							
							}
							
							//Include the footer and quit the script
							echo "\n\t\t".'</div>';
							include ('../templates/_footer.php');
							exit();
							
						} else { //Invalid user_id/password combination
						
							echo 'The current password you have entered in the form is not your real current password.';
						
						}
					
					} else { //Report the errors
					
						echo '<p>The following error(s) occured:<br/>';
						
						//Print error message
						foreach ($errors as $msg) { 
							echo "$msg<br/>";
						}
						
						echo '</p><p>Please try again</p>';
				
					}
					
					mysqli_close($conx); //Close the database connection
					
				} //End of main submit conditional
				
			?>
			
			<form method="post">
			<p>Current Password: <input type="password" name="pass" size="20" maxlength="20" class="input"/></p>
			<br/>
			<p><i>Valid password must be 8-20 characters long, containing only letters, numbers, and the underscore.</i></p>
			<p>New Password: <input type="password" name="pass1" size="20" maxlength="20" class="input" /></p>
			<p>Confirm New Password: <input type="password" name="pass2" size="20" maxlength="20" class="input"/></p>
			<input type="submit" name="submit" value="Change your password" />
			<input type="hidden" name="submitted" value="TRUE" />
			</form>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>