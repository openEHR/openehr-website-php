<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
	<meta http-equiv="Content-Language" content="en">

	<title>openEHR - Government Programme</title>

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

	<div id="MainArea" style="height:650px;">
	
		<div id="SideMenu">
		<?php include 'menu/governmentmenu.php' ?>
		</div>
		
		<div id="TextArea">
			
			<h1>Government Programme</h1>
			<br/>
			<p class="par">Three key problems need to be solved for government e-health programmes:</p>
			<ul>
				<li>the sharing of health information across provider enterprises, enabling
				healthcare professionals to deliver efficient team-based care;</li>
				<li>the sharing of health information between systems where it is captured and
				consumer systems, e.g. decision support, medication management</li>
				<li>the computability of health information, ensuring that the power of ICT can
				be used safely on data, e.g. in support of medical research</li>
			</ul>
			<br/>
			<p>If these requirements can be met, the quality of preventative medicine,
			medical research, and medication management, to name a few, should significantly
			increase. Similarly the efficiency of data collection (capture once, share many
			times) should reduce the costs and adverse events in the system. The key to
			solving these problems is 'standardisation', but not just any standardisation.
			Firstly. not only does the data representation have to be standardised so as to
			be shared, its semantics - i.e. clinical structure and meaning - have to be
			standardised. A standard approach to querying is also needed.</p>
			<p>openEHR supports such an information infrastructure, because it is
			designed to represent semantic models of content, from the GUI through to the
			database. It has a portable querying language, and a capability of integrating
			with terminologies. It is an integrated framework rather than a set of disparate
			official standards which themselves need to be integrated. It supports the
			definition of clinical content via archetypes - in fact, the archetype formalism
			is now a CEN standard (EN13606-2), and will be an ISO standard by end 2008. Via
			the use of openEHR Templates, shareable data sets can be defined across
			any jurisdiction. These features provide a basis for defining the shared
			clinical, demographic and administrative semantics across jurisdictions up to
			and including the national level.</p>
			<p class="par">Strategically, openEHR offers 3 key features for national e-health
			programmes:</p>
			<ul>
				<li>a health computing platform approach, which opens up health data
				for use by multiple applications; this leads to a <em>platform-based health
				ICT economy</em>, in which various suppliers can produce back- or front-end
				systems that integrate across a defined interface, rather than the current
				situation of numerous silos;</li>
				<li>
				<em>clinical content and process modelling is managed by
				clinicians</em>, separately from the software, using the powerful
				openEHR archetype and template formalisms;</li>
				<li>
				<em>integration of existing standards and systems </em>currently
				supporting existing standards is managed semantically, using the
				openEHR template data schema approach.</li>
			</ul>
			<br/>
			<p>The clinical modelling is already in use at the <em>UK NHS</em>,
			where some 220 archetypes and 45 templates have been developed in 2007/2008
			(<a href="http://svn.openehr.org/knowledge/archetypes/dev-uk-nhs/gen/html/en/ArchetypeMap.html">NHS
			archetypes</a>;
			<a href="http://svn.openehr.org/knowledge/templates/dev-uk-nhs/gen/html/index.html">NHS
			templates</a>), and is under review by many other government e-health
			programmes, including in Australia, Denmark, Brazil and various Eastern European
			countries.</p>

			<p>In 2008, the <em>Danish </em>and <em>Swedish governments
			</em>decided to use openEHR for clinical modelling.</p>
	
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