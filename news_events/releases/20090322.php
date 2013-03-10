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
			
			<h2>New ADL Workbench release supports RM validation</h2>
			<h6>22. March 2009 | from: Thomas Beale</h6>
			<br/>
			
			<p>A new version of the ADL Workbench ('AWB') based on the <a href="http://www.openehr.org/wiki/display/spec/openEHR+Templates+and+Specialised+Archetypes">latest ADL / AOM 1.5 draft specifications</a> has been released. This release includes Reference Model checking and visualisation, i.e. validation of archetypes against a machine representation of the openEHR reference model, and numerous improvements in validation, and specialisation-related functionality. It is available for Windows, Mac (Leopard/Intel) and Linux. See the <a href="/downloads/ADLworkbench/home">help and download page</a>.</p>
			
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