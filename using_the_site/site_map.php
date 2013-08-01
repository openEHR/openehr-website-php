<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'Site Map';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
		
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->		
			<h1><?php echo "$PageName";?></h1>
			
			<div style="position:relative; left:0px; top:0px;">
			Site
			<ul>
				<li><a href="/home">Home</a></li>
				<li><a href="/what_is_openehr">What is openEHR?</a></li>
				<li><a href="/aboutthiswebsite">About This Website</a></li>
				<li><a href="mailto:webmaster@openehr.org">Contact Webmaster</a></li>
				<li><?php include $_SERVER['DOCUMENT_ROOT'].'/who_is_using_openehr/menu.php' ?></li>
			</ul>
			<br/>
			
			<a href="/openehr_programs">openEHR Programs</a>
			<br/>
			<br/>
				<?php include $_SERVER['DOCUMENT_ROOT'].'/programs/specification/menu.php' ?>
				<br/>
				<?php include $_SERVER['DOCUMENT_ROOT'].'/programs/clinicalmodels/menu.php' ?>
				<br/>
				<?php include $_SERVER['DOCUMENT_ROOT'].'/programs/software/menu.php' ?>
				<br/>
				<?php include $_SERVER['DOCUMENT_ROOT'].'/programs/localisation/menu.php' ?>
				<br/>
				
			Entry Points
			<br/>
				<br/>
				<?php include $_SERVER['DOCUMENT_ROOT'].'/entry_points/getting_started/menu.php' ?>
				<br/>
				<?php include $_SERVER['DOCUMENT_ROOT'].'/entry_points//i_am_working_on/menu.php' ?>
				<br/>
			</div>
			
			<div style="position:absolute; left:400px; top:50px;">
			<br/>
			Downloads
				<ul>
					<li><a href="/downloads/modellingtools">Modelling Tools</a></li>
						<ul>
							<li><a href="/downloads/ADLworkbench/home">ADL Workbench</a></li>
							<li><a href="/downloads/archetypeeditor/home">Archetype Editor</a></li>
						</ul>
					<li><a href="/downloads/applications">Applications</a></li>
					<li><a href="/downloads/ds_and_guidelines">Guidelines and DS</a></li>
					<li><a href="/downloads/ehrcomponents">EHR Components</a></li>
					<li><a href="/downloads/applicationbuilding">Application Building</a></li>
				</ul>
			<br/>
			
			<?php include $_SERVER['DOCUMENT_ROOT'].'/news_events//menu.php' ?>
			<br/>
			
			<?php include $_SERVER['DOCUMENT_ROOT'].'/about//menu.php' ?>
			<br/>
			
			Specifications (Quick Links)
				<ul>
					<li><a href="/programs/specification/releases/1.0.2">Current Release</a></li>
					<li><a href="/programs/specification/releases/currentbaseline">Development Baseline</a></li>
					<li><a href="http://www.openehr.org/issues/browse/SPECPR" target="_blank">Issue Tracker</a></li>
					<li><a href="http://www.openehr.org/releases/1.0.2/its/XML-schema/index.html">XML Schemas</a></li>
					<li>RM UML<a href="/releases/1.0.1/reference-models/openEHR/UML/HTML" target="_blank" title="Reference Model UML">[1.0.1]</a>, <a href="/releases/1.0.2/reference-models/openEHR/UML/HTML" target="_blank" title="Reference Model UML">[1.0.2]</a></li>
					<li><a href="https://github.com/openEHR/reference-models/tree/master/models/openEHR/Release-1.0.2/BMM">RM BMM Schemas</a></li>
				</ul>
			<br/>
			
			Clinical Models (Quick Links)
				<ul>
					<li><a href="http://openehr.org/knowledge/" target="_blank">CKM</a></li>
					<li><a href="http://openehr.org/knowledge/#repositoryoverview" target="_blank">CKM Archetypes Mindmap</a></li>
					<li><a href="http://openehr.org/knowledge/#userstatistics" target="_blank">CKM User Statistics</a></li>
					<li><a href="http://www.openehr.org/wiki/display/spec/openEHR+Terminology" target="_blank">openEHR Terminology</a></li>
					<li><a href="https://github.com/openEHR/adl-archetypes/tree/master/ADL15-reference/" target="_blank">Test Archetypes</a></li>
				</ul>
			<br/>
				
			<?php include $_SERVER['DOCUMENT_ROOT'].'/resources//menu.php' ?>
			<br/>
			
			<?php include $_SERVER['DOCUMENT_ROOT'].'/community//menu.php' ?>
			<br/>
		
			<?php include $_SERVER['DOCUMENT_ROOT'].'/using_the_site//menu.php' ?>
			<br/>
			</div>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>