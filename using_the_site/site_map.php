<?php
$PageName = 'Site Map';
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

	<div id="MainArea">
	
		<div id="SideMenu">
		<?php include 'menu.php' ?>
		</div>
		
		<div id="TextArea" style="line-height:150%;">
			
			<h1><?php echo "$PageName";?></h1>
			
			<div style="position:relative; left:0px; top:0px;">
			<br/>
			Site
			<ul>
				<li><a href="/home">Home</a></li>
				<li><a href="/what_is_openehr">What is openEHR?</a></li>
				<li><a href="/aboutthiswebsite">About This Website</a></li>
				<li><a href="http://www-old.openehr.org">Old Website</a></li>
				<li><a href="mailto:webmaster@openehr.org">Contact Webmaster</a></li>
				<li><?php include '../who_is_using_openehr/menu.php' ?></li>
			</ul>
			<br/>
			
			<a href="../openehr_programs">openEHR Programs</a>
			<br/>
			<br/>
				<?php include '../programs/specification/menu.php' ?>
				<br/>
				<?php include '../programs/clinicalmodels/menu.php' ?>
				<br/>
				<?php include '../programs/software/menu.php' ?>
				<br/>
				<?php include '../programs/localisation/menu.php' ?>
				<br/>
				
			Entry Points
			<br/>
				<br/>
				<?php include '../entry_points/getting_started/menu.php' ?>
				<br/>
				<?php include '../entry_points//i_am_working_on/menu.php' ?>
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
					<li><a href="/downloads/ehrcomponents">EHR Components</a></li>
					<li><a href="/downloads/applicationbuilding">Application Building</a></li>
				</ul>
			<br/>
			
			<?php include '../news_events//menu.php' ?>
			<br/>
			
			<?php include '../about//menu.php' ?>
			<br/>
			
			Specifications (Quick Links)
				<ul>
					<li><a href="/programs/specification/releases/1.0.2">Current Release</a></li>
					<li><a href="/programs/specification/releases/currentbaseline">Development Baseline</a></li>
					<li><a href="http://www.openehr.org/issues/browse/SPECPR">Issue Tracker</a></li>
					<li><a href="http://www.openehr.org/releases/1.0.2/its/XML-schema/index.html">XML Schemas</a></li>
					<li><a href="http://www.openehr.org/svn/specification/TAGS/Release-1.0.1/publishing/architecture/computable/UML/uml_start_view.html">RM UML</a></li>
					<li><a href="https://github.com/openEHR/reference-models/tree/master/models/openEHR/Release-1.0.2/BMM">RM BMM Schemas</a></li>
				</ul>
			<br/>
			
			Clinical Models (Quick Links)
				<ul>
					<li><a href="http://openehr.org/knowledge/">Model Repository</a></li>
					<li><a href="http://openehr.org/knowledge/#repositoryoverview">Archetypes Mindmap</a></li>
					<li><a href="http://openehr.org/knowledge/#userstatistics">User Statistics</a></li>
					<li><a href="http://www.openehr.org/wiki/display/spec/openEHR+Terminology">openEHR Terminology</a></li>
					<li><a href="http://www.openehr.org/svn/knowledge2/TRUNK/archetypes/">Test Archetypes</a></li>
					<li><a href="http://www.ihtsdo.org/fileadmin/user_upload/doc/tig/">SNOMED CT TIG</a></li>
				</ul>
			<br/>
				
			<?php include '../resources//menu.php' ?>
			<br/>
			
			<?php include '../community//menu.php' ?>
			<br/>
		
			<?php include '../using_the_site//menu.php' ?>
			<br/>
			</div>
			
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