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

	<div id="MainArea">
	
		<div id="SideMenu">
			<?php include '../menu.php' ?>
		</div>
		
		<div id="TextArea">
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>Guideline Definition Language (GDL) first release</h2>
			<h6>11. March 2013 | from: Rong Chen</h6>
			<br/>
			
			<p>We are pleased to announce the immediate availability of the design specifications of Guideline Definition Language (GDL) and its reference implementation under open source software licenses. GDL is formal language designed to express and to share Clinical Decision Support rules across language and technical barriers by leveraging openEHR designs. CDS rules in GDL format is agnostic to natural languages, reference terminologies and rules engine languages.</p>
			<p>There are considerable synergies in the development of clinical models and CDS rules. Semantically well-defined clinical models can provide reliable means of input and output of the rules. On the other hand, experiences from CDS rules development can lead to improvements of the clinical models as well as increased motivations to adopt structured and standardized clinical models. Reusing existing high-quality clinical models in the form of archetypes would hopefully increase the productivity in authoring and maintaining clinical rules.</p>
			<p>Please note that GDL is still in development. We aim to submit the GDL specifications for review in openEHR in the near future. We look forward to the community's feedback to further improve the specifications.</p>
			<p>Some important links from this release:</p>
			<ul>
				<li><a href="https://github.com/openEHR/gdl-tools/blob/master/cds/docs/specs/gdl-specs.pdf?raw=true" target="_blank">GDL Specifications (v.90)</a></li>
				<li><a href="http://sourceforge.net/projects/gdl-editor/" target="_blank">GDL Editor</a></li>
				<li><a href="https://github.com/openEHR/gdl-tools/tree/master/cds/cm/guides" target="_blank">GDL sample files</a></li>
				<li><a href="https://github.com/openEHR/gdl-tools/wiki" target="_blank">GDL Reference Implementation Project</a></li>
			</ul>
			<br/>
			<p>Rong Chen MD, PhD<br/>
			On behalf of the Informatics Team,<br/>
			Cambio Healthcare Systems, Sweden</p>
			
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