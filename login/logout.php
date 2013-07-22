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
		
			<h1>Logout</h1>
			<br/>
				<?php
				// Print a customized message:
				echo "<p>You are now logged out!</p>
				<p>You can <a href=\"/login\">log in</a> again.</p>";
	
				?>
			
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