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
			
			<h2>ADL 1.5 Workbench - beta release 3</h2>
			<h6>14. January 2011 | from: Thomas Beale</h6>
			<br/>
			
			<p>The latest beta of the ADL 1.5 Workbench for Windows, Mac and Linux can now be downloaded from the <a href="/downloads/ADLworkbench/home">help page</a>.</p>
			<p>It includes significant UI improvements, and an implementation of annotations as recently discussed on the lists. Release notes <a href="/downloads/ADLworkbench/releasenotes">here</a>. As indicated in the online documentation, please report all problems on the <a href="/issues/browse/AWBPR">dedicated Jira issue tracker</a>.As this is a beta, the more people who download and test the tool on all platforms, the faster the quality improves.</p>
			<p>Foretaste of the future: as well as XML operational templates, we now are looking at adding editing capabilities and also UI form visualisation....</p>
			
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