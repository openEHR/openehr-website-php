<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title>Welcome to openEHR - Homepage</title>
	<?php include 'panel/headpanelhome.php' ?>
	
</head>


<body>
<div id="MainFrame">
	
	<div id="TopPanel">
		<?php include 'panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu">
		<div class="nav">
		<?php include 'menu/topmenu.php' ?>
		</div>
	</div> 

	<div id="MainArea" style="height:480px">

		<div id="ProgramsFrame">
			<div id="WelcomeFrame">
				<h2>About Programs</h2>
				<p>TBD</p>
			</div>
		</div>
			
		<div id="SpecificationFrame">
			<img src="gui/SpecificationFrame.png" usemap="#specification"/>
			<map name="specification">
			  <area shape="rect" coords="0,0,220,150" href="programs/specification" alt="Specification Program" />
			</map> 
			<div id="TextFrame">
			<h1>Specification <br/>Program</h1>
			<p>Specifications for health information, archetypes, querying and services.
			<br/><a href="programs/specification" style="line-height:200%;">Learn more</a></p>
			</div>
		</div>

		
		<div id="ModelsFrame">
			<img src="gui/ModelsFrame.png" usemap="#models"/>
			<map name="models">
			  <area shape="rect" coords="0,0,220,150" href="programs/clinicalmodels" alt="Clinical Models Program" />
			</map> 
			<div id="TextFrame">
			<h1>Clinical Models <br/>Program</h1>
			<p>Clinician-built archetypes, templates and ref-sets for e-health applications.
			<br/><a href="programs/clinicalmodels" style="line-height:200%;">Learn more</a></p>
			</div>
		</div>

		
		<div id="SoftwareFrame">
			<img src="gui/SoftwareFrame.png" usemap="#software"/>
			<map name="software">
			  <area shape="rect" coords="0,0,220,150" href="programs/software" alt="Software Program" />
			</map> 
			<div id="TextFrame">
			<h1>Software <br/>Program</h1>
			<p>Software tools and components for clinical modelling and EHR platform.
			<br/><a href="programs/software"  style="line-height:200%;">Learn more</a></p>
			</div>
		</div>
			
			
		<div id="LocalisationFrame">
			<img src="gui/LocalisationFrame.png" usemap="#localisation"/>
			<map name="localisation">
			  <area shape="rect" coords="0,0,220,150" href="programs/localisation" alt="Localisation Program" />
			</map> 
			<div id="TextFrame">
			<h1>Localisation <br/>Program</h1>
			<p>Education, translation, and dissemination - making openEHR work everywhere.
			<br/><a href="programs/localisation" style="line-height:200%;">Learn more</a></p>
			</div> 
		</div>
		
	</div>

	
	<div id="BottomMenu">
	<?php include 'menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
	<?php include 'panel/bottompanel.php' ?>
	</div>

</div>
<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>