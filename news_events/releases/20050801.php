<?php
$PageName = 'Releases';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

	<?php include '../../panel/headpanel.php' ?>
	
</head>

<body>

<div id="MainFrame">
	
	<div id="TopPanel">
		<?php include '../../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu">
	
		<div class="nav">
			<?php include '../../menu/topmenu.php' ?>
		</div>
		
	</div> 

	<div id="MainArea" style="height:450px;">
	
		<div id="SideMenu">
			<?php include '../menu.php' ?>
		</div>
		
		<div id="TextArea">
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>openEHR Release 0.96 published</h2>
			<h6>1. August 2005 | from: Thomas Beale</h6>
			<br/>
			
			<p>Release 0.96 of the openEHR specifications is published today. See the Specification project home page. Release notes <a href="/issues/browse/SPEC/fixforversion/10017">here</a>.</p>
			
			<br/>
			<a href="../releases">>> Back to <?php echo "$PageName";?></a>
			
		</div>
			
	</div>
	
	<div id="BottomMenu">
		<?php include '../../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
		<?php include '../../panel/bottompanel.php' ?>	
	</div>

</div>
	
<?php include '../../panel/scriptpanel.php' ?>

</body>

</html>