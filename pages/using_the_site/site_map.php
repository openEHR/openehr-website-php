<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Site Map';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
		
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->		
			<h1><?php echo "$PageName";?></h1>
			
			Site
			<ul>
				<li><a href="/home">Home</a></li>
				<li><a href="/what_is_openehr">What is openEHR?</a></li>
				<li><a href="/about_this_website">About This Website</a></li>
				<li><a href="/wiki" target="_blank">Wiki</a></li>
				<li><a href="/issues" target="_blank">Jira</a></li>
				<li><a href="http://www.openehr.org/ckm">CKM</a></li>
				<li><a href="/openehr_programs">openEHR Programs</a></li>
			</ul>
			<br/>

			<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/programs/specification/menu.php' ?>
			<br/>
			<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/programs/clinicalmodels/menu.php' ?>
			<br/>
			<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/programs/software/menu.php' ?>
			<br/>
			<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/programs/localisation/menu.php' ?>
			<br/>
				
			<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/who_is_using_openehr/menu.php' ?>
			<br/>
			
			<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/industry_partners/menu.php' ?>
			<br/>
			
			<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/getting_involved/menu.php' ?>
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
			
			<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/news_events/menu.php' ?>
			<br/>
			
			<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/about/menu.php' ?>
			<br/>
			
			Specifications (Quick Links)
				<ul>
					<li><a href="/programs/specification/releases/" title="Current official release of specifications">Current Release</a></li>
					<li><a href="/programs/specification/releases/currentbaseline" title="Specifications development baseline">Development Baseline</a></li>
					<li><a href="https://openehr.atlassian.net/secure/Dashboard.jspa?selectPageId=10190" target="_blank" title="Specifications issue trackers (Jira)">Specs (Jira)</a></li>
					<li><a href="/releases/1.0.2/reference-models/openEHR/BMM" target="_blank" title="Reference Model Basic Meta-Model schemas (ODIN format object model schemas)">RM BMM Schemas</a></li>
				</ul>
			<br/>
			
			Clinical Models (Quick Links)
				<ul>
					<li><a href="/ckm/" title="Clinical Knowledge Manager">CKM</a></li>
					<li><a href="/ckm/#repositoryoverview" title="Clinical Knowledge Manager mindmap of all archetypes">CKM Archetypes Mindmap</a></li>
					<li><a href="/ckm/#userstatistics" title="Clinical Knowledge Manager user statistics">CKM User Statistics</a></li>
					<li><a href="/wiki/display/spec/openEHR+Terminology" title="openEHR terminology/vocabulary page">openEHR Terminology</a></li>
					<li><a href="https://github.com/openEHR/adl-archetypes/tree/master/ADL15-reference/" target="_blank" title="Library of ADL reference archetypes for compiler testing">ADL Test Archetypes</a></li>
				</ul>
			<br/>
				
			<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/resources/menu.php' ?>
			<br/>
			
			<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/community/menu.php' ?>
			<br/>
		
			<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/using_the_site/menu.php' ?>
			<br/>

			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
