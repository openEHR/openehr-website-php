<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
	<meta http-equiv="Content-Language" content="en">

	<title>openEHR - News</title>

	<meta name="description" content="openEHR provides open source specifications and reference implementations of future proof EHR systems">
	<meta name="keywords" content="archetypes, openEHR, EHR, electronic health record, electronic medical record, ADL, reference model, clinical models, healthcare, health informatics, medical informatics, EHR standards, ISO 18308, CEN 13606, health care software, open source software, knowledge modelling, patient-centric">
	<meta name="author" content="Sam Heard, Thomas Beale">
	<meta name="copyright" content="The openEHR Foundation">
	<meta name="design" content="Adriana Danilakova">
	<meta name="distribution" content="Global">
	
	<meta name="rating" content="General">
	<meta name="robots" content="All">
	<meta name="revisit-after" content="15 days">
	<meta name="viewport" content="1024">

	<link rel="stylesheet" href="../styles/basic.css"  type="text/css">
	<link rel="stylesheet" href="../styles/programs.css"  type="text/css"> 
	<link rel="stylesheet" href="../styles/menu.css" type="text/css"> 

	<link rel="home" href="http://www.openehr.org">
	<link rel="bookmark" href="http://www.openehr.org" title="openEHR - Homepage">
	<link rel="index" href="http://www.openehr.org/information/sitemap.html">

	<script type="text/javascript" src="../menu/dropdown.js"></script> 
	
</head>


<body>

<div id="MainFrame">
	
	<div id="TopPanel">
	<?php include '../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu" style="text-align:left">
		<div class="nav">
		<?php include '../menu/topmenu.php' ?>
		</div>
	</div> 

	<div id="MainArea" style="height:800px;">
	
		<div id="SideMenu">
		<?php $current = 1; include 'menu/newsmenu.php' ?>
		</div>
		
		<div id="TextArea">
			
			<h1>News</h1>
			<br/>
			<a href="openehrnews/news21">ADL - syntax highlight for Notepad++</a>
			<h6>13. August 2012</h6>
			<p>ADL syntax highlight for Notepad++ was developed by Armando Prieto from Venezuela.
			Find more information about ADL Text Editors on Wiki.</p>
			<br/>
			<a href="openehrnews/news20">Brazil re-affirms commitement to openEHR</a>
			<h6>16. May 2012</h6>
			<p>As part of operationalising chapter III of the government decree
			(Nº 2.073, DE 31 DE AGOSTO DE 2011), a national EHR Workshop was held
			aimed at defining methods and standards to be used in the Brazilian
			EHR Project (RES-National). The conclusions were largely underpinned by openEHR.</p>
			<br/>
			<a href="openehrnews/news19">Clinical Information Modelling Initiative goes with Archetypes & UML profile</a>
			<h6>14. December 2011</h6>
			<p>The Clinical Information Modeling Initiative is an international collaboration
			that is dedicated to providing a common format for detailed specifications
			for the representation of health information content so that semantically interoperable information
			may be created and shared in health records, messages and documents.</p>
			<br/>
			<a href="openehrnews/news18">Brazil chooses openEHR for EHR at all levels of government</a>
			<h6>6. January 2011</h6>
			<p>Brazil has chosen to use openEHR and archetypes for the shareable EHR at
			three levels of government - federal, state and municipal.</p>
			<br/>
			<a href="openehrnews/news17">David Ingram interview with Talkstandards</a>
			<h6>25. February 2010</h6>
			<p>In an exclusive interview with Talkstandards, Professor David Ingram of openEHR,
			outlines some of his expectations for the future of ICT in the health care sector.</p>
			<br/>
			<a href="openehrnews/news16">IHTSDO and openEHR Begin Collaborative Work Programme</a>
			<h6>15. September 2009</h6>
			<p>Organizations will explore how clinical terminologies and archetype-based record structures
			can best be aligned to support electronic health records.</p>
			<br/>
			<a href="openehrnews/news15">OSHIP gets CLIPS decision support engine</a>
			<h6>27. August 2009</h6>
			<p>The Open Source Health Information Platform (OSHIP) has integrated the "gold standard"
			forward chaining inference engine CLIPS in order to support complex decision support requirements.</p>
			<br/>
		</div>
			

	</div>

	<div id="BottomMenu">
	<?php include '../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
	<?php include '../panel/bottompanel.php' ?>
	</div>

</div>
	
<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>