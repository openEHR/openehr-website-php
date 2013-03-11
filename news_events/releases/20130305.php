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
			
			<h2>CKM upgraded to include projects and other features</h2>
			<h6>5. March 2013 | from: Thomas Beale</h6>
			<br/>
			
			<p>A major new release of the openEHR Clinical Knowledge Manager (CKM) went online today. It is reachable at the existing URL <a href="http://www.openehr.org/knowledge">http://www.openehr.org/knowledge</a>, but also at the new, preferred URL <a href="http://www.openehr.org/ckm">http://www.openehr.org/ckm</a>.</p>
			<p>This release is a major upgrade to CKM which provides improved 'governance units', and also gets closer to the ultimate goal of an end-to-end tool chain.
			The <em>new governance units</em> are known as 'sub-domains', each with underlying 'project' and 'incubator' sub-components. This means that clinical models can be 'owned' and developed more easily by various groups and jurisdictions in the global eHealth community. Users now have a more customisable view of the application and can narrow their view to specific artefacts.</p>
			<p>There is a special project type called an 'incubator', allowing users to work on models and artefacts in a sand-box environment before being made visible to the general community. The help system has been improved through enhancements to the navigation functions and understanding of functionality for new users.</p>
			<p>The <em>tool chain functionality</em> introduces a new transformation engine can automatically produce outputs based on templates, such as XML schema, SCS documents, CDA implementation guides, CDA instances and Schematron etc.</p>
			<p>For a detailed list of many other changes, improvements and bug-fixes, refer <a href="http://www.openehr.org/wiki/display/healthmod/CKM+Release+1.2.0" target="_blank">here</a>.</p>
			
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