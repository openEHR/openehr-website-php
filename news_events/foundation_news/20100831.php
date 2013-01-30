<?php
$PageName = 'Foundation News';
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

	<div id="MainArea">
	
		<div id="SideMenu">
			<?php include '../menu.php' ?>
		</div>
		
		<div id="TextArea">
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>openEHR / IHTSDO explore IP integration, governance, SNOMED archetypes</h2>
			<h6>31. August 2010 | from: David Ingram, Chair of Board of Directors</h6>
			<br/>
			
			<p>At a meeting at the end of last week, in London, the following was agreed as a joint announcement to our respective communities.</p>
			<p>The openEHR Foundation core team held a two-day meeting with senior representatives of the IHTSDO on August 26th-27th, in London.
			This was to continue the very constructive dialogue that has followed from the published MOU between the two organisations.
			The meeting explored the potential for integration of the IP held by the openEHR Foundation and that of the IHTSDO
			under the governance arrangements, internationally, of the IHTSDO. Our joint aim in this is to collaborate to create
			the best possible governance structure for supporting and sustaining future development and adoption of SNOMED-enabled archetypes.
			An Outline Business Case was agreed and this must now be reviewed at IHTSDO General Assembly (Member government levels).
			We expect to be in a position to describe progress to date, more fully, in about six weeks time.</p>
			<p>The guidance we have received, to date, in our consultation about future licensing of openEHR Foundation IP,
			has strongly influenced the deliberations. Many thanks to those who have contributed, through discussion
			on the openEHR lists and wiki, and in other communications.</p>
			<br/>
			
			<p>David Ingram</p>
			
			<br/>
			<a href="../foundation_news">>> Back to <?php echo "$PageName";?></a>
			
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