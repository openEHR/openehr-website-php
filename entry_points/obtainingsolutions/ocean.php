<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
	<meta http-equiv="Content-Language" content="en">

	<title>openEHR - Obtaining Solutions</title>

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

	<link rel="stylesheet" href="../../styles/basic.css"  type="text/css">
	<link rel="stylesheet" href="../../styles/programs.css"  type="text/css">
	<link rel="stylesheet" href="../../styles/menu.css" type="text/css"> 

	<link rel="home" href="http://www.openehr.org">
	<link rel="bookmark" href="http://www.openehr.org" title="openEHR - Homepage">
	<link rel="index" href="http://www.openehr.org/sitemap">

	<script type="text/javascript" src="../../menu/dropdown.js"></script> 
	
</head>


<body>

<div id="MainFrame">
	
	<div id="TopPanel">
	<?php include '../../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu" style="text-align:left">
		
		<div class="nav">
   		<?php include '../../menu/topmenu.php' ?>
		</div>
	</div> 

	<div id="MainArea" style="height:1000px;">
	
		<div id="SideMenu">
		<?php include 'menu/solutionsmenu.php' ?>
		</div>
		
		<div id="TextArea">
			
			<h1>Obtaining Solutions</h1>
			<h2>Ocean Informatics Solutions</h2>
			<p>Ocean Informatics has developed a suite of tools based on the openEHR architecture specification.
			Purpose built to support the shared electronic health record in a modern service oriented environment,
			these services and tools protect the future of our major long term asset in health care - the electronic health record.
			From clinical modelling through to application development and systems integration,
			Ocean provides the foundation to put the power of openEHR into practice.</p>
			
			<h3>Modelling Tools</h3>
			<p>Ocean's Clinical Modelling suite of tools enables the development of clinical and domain content
			through the authoring, review, and maintenance of openEHR archetypes, templates, queries and terminology subsets.
			These artefacts are utilised in all levels of the EHR technology, including GUI, business logic, persistence,
			semantic queries, messaging and documents.</p>
			<p>Archetypes, queries and terminology subsets can be defined and agreed once, shared and then reused over and over,
			thus significantly reducing work effort in defining clinical content at a national or jurisdictional level.
			These data definitions can be provided to vendors as part of a logical record architecture,
			facilitating sharing of common clinical content specifications and hence sharing patient health information.</p>
			<p>Templates can be created at the point of use - specific for each clinical, domain, geographical and organisational
			use-case, and enabling capture and display of relevant clinical data critical for direct patient care.</p>
			<p>Archetypes, templates, terminology subsets and data queries are the semantic cornerstones of an e-Health environment;
			whether it be a whole country, a region or a single provider. They provide the means to define the meaning of all clinical
			information in a standardised, portable and computable way and are used to 'future-proof' systems against
			ongoing change in information requirements.</P>
			
			<h3>Model Management</h3>
			<p>The Ocean knowledge development environment has two components - the Clinical Modelling tools and the complementary Knowledge Management tools.</P>
			<p class="par">The complete Knowledge Management tool suite comprises:</P>
			<ul>
				<li>the Terminology Service - which supports controlled integration of terminology with clinical content;</li>
				<li>the Knowledge Manager - a complete authoring and publishing environment for clinical modelling artefacts;</li>
				<li>the ADL Workbench - a tool for engineers and technicians to monitor the integrity and computability of archetypes being utilised.</li>
			</ul>
			
			<h3>Implementation Tools</h3>
			
			<br/>
			<br/>
			<a href="solutionsregistry.php">Back to solutions registry</a>
			
		</div>
			

	</div>

	<div id="BottomMenu">
	<?php include '../../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
	<?php include '../../panel/bottompanel.php' ?>
	</div>

</div>
	
<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>