<?php
session_start();

// If value is present, redirect the user to user_home:
	if (isset($_SESSION['user_id'])) {

		// Need the functions to create an absolute URL:
		header("Location: user_home");
		exit(); // Quit the script.
	}

$PageName = 'Login';
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
		
			<h1>Login</h1>
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