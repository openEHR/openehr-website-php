<?php
$PageName = 'Subversion Relocation';
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

	<div id="MainArea" style="height:450px;">
	
		<div id="SideMenu">
		<?php include 'menu.php' ?>
		</div>
		
		<div id="TextArea">
			
			<h1><?php echo "$PageName";?></h1>
			<br/>
			<p>The openEHR Subversion site is now turned off. Most projects that were housed there are now available under the <a href="https://github.com/openEHR">openEHR GitHub project.</a> Some projects have been shelved due to obsolescence, and their Subversion repository archives can be obtained on request. Please contact <a href="mailto:webmaster@openehr.org">the webmaster</a> if you require access.</p>
			
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
