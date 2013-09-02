<?php

// This page processes the login form submission.
// Upon successful login, the user is redirected.
// Two included files are necessary.
// Send NOTHING to the Web browser prior to the session_start()

// Check if the form has been submitted:
if (isset($_POST['submitted'])) {

	// For processing the login:
	require_once ('login_functions.php');
	
	// Need the database connection:
	require_once ('../../con_real.php');
		
	// Check the login:
	
	list ($check, $data) = check_login($conx, $_POST['email'], $_POST['pass']);
	
	if ($check) { // OK
			
		// Set the session data:
		session_start();
		
		$_SESSION['user_id'] = $data['user_id'];
		$_SESSION['first_name'] = $data['first_name'];
		
		// Redirect:
		$url = absolute_url ('user_home.php');
		header("Location: $url");
		exit(); // Quit the script.
			
	} else { // Unsuccessful

		// Assign $data to $errors for error reporting
		// in the index.php file.
		$errors = $data;

	}
		
	mysqli_close($conx); // Close the database connection.

} // End of the main submit conditional.

//Create the page

include ('index.php');

?>