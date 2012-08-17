<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
	<meta http-equiv="Content-Language" content="en">

	<title>openEHR - Related Projects</title>

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
	
	<div id="TopMenu">
		<div class="nav">
   		<?php include '../menu/topmenu.php' ?>
		</div>
	</div> 

	<div id="MainArea" style="height:850px;">
	
		<div id="SideMenu">
		<?php include 'menu/resourcesmenu.php' ?>
		</div>
		
		<div id="TextArea">
			
			<h1>Related Projects</h1>
			<p>This page provides links to some of the projects which have influenced openEHR, or are in some other way relevant.</p>


			<h2>PICNIC</h2>
			<p><a href="http://www.euser-eu.org/ShowCase.asp?CaseTitleID=490&CaseID=1013&MenuID=56">PICNIC</a>
			(Professionals and Citizens Network for Integrated Care) was an EU-funded 5th
			Framework project which developed a multi-tier architecture designed for
			regional shared care, and based on recognised previous works including the OMG's
			Health Domain Task Force (HDTF) specifications (COAS, PIDS and RAD), and the
			Distributed Healthcare Environment (DHE) developed and refined in a number of EU
			projects including RICHE, its successor,
			<a href="http://www.ehto.org/aim/volume2/nucleus.html">NUCLEUS</a>, EDITH and
			<a href="http://www.ehto.org/aim/volume2/shine.html">SHINE</a>. It is
			implemented in many hospitals across Europe under the
			<a href="http://www.ehto.org/ht_projects/initial_project_description/hansa.html">HANSA
			</a>project. The
			<a href="http://books.google.co.uk/books?vid=ISBN158603538X&id=gKEVkfRB6XoC&pg=PA2&lpg=PA2&ots=EQSfFGC4U4&dq=professionals+and+citizens+network+for+integrated+care&sig=FO5K5qRxyXOcSKIVTFZTzvVAWmc">book</a>
			"Regional Health Economies and ICT Services" documents PICNIC and other similar
			efforts.</p>
			<p>PICNIC is relevant to openEHR because it represents a deployment of
			distributed middleware based on ideas and standards which are also being used by
			openEHR. For example, openEHR implementations of the OMG PIDS
			and RAD specifications are likely to emerge in the future, using PICNICs
			experience to guide the implementation.</p>

			
			<h2>CLinical E-science Framework - CLEF (2002-2005)</h2>
			<p>CLEF is a UK Medical Research Council funded project in the E-Science
			programme that aims to establish methodologies and a technical infrastructure
			for the next generation of integrated clinical and bioscience research. With
			UCl, the other collaborating universities are at Manchester (co-ordinating),
			Sheffield, Brighton and Cambridge. The clinical centres are the Royal Marsden
			Hospital, UCL Hospital and the Institute of Child Health.</p>
			<p>One of the major goals of the project is to provide a pseudonymised
			repository of histories of cancer patients that can be accessed by researchers.
			The hypothesis of CLEF is that a useful research resource can be legitimately
			generated from routine clinical data. The project is developing a research
			workbench supporting queries on large volumes of anonymised cancer and genetic
			records. This resource is being enriched through the lexical analysis of
			narrative reports and summaries, which make up a considerable proportion of the
			fine-grained clinical information that is held electronically in contemporary
			systems.</p>
			<p>The ethical, policy and technical aspects of preserving confidentiality when
			migrating data from a real hospital information system to the pseudonymous
			repository, and on subsequent query of it, are important aspects of the work.
			</p>
			<p>The UCL record <a title="EHR Server at University College London" href="/openehr/shared-resources/gehr_all/gehr_cen.html">server</a> is providing the repository
			for CLEF including relevant archetypes, the security architecture and the query
			middleware component.</p>


			<h2>Nautilus/Odyss&eacute;e</h2>
			<p>The open source Odyss&eacute;e product from Nautilus, France, was a highly
			innovative recording and reporting system for endoscopy and echocardiography,
			based on a generic architecture and kernel. One of its key innovations is
			<em>"fils guides"</em> (guide paths) - the terminological approach of Odyss&eacute;e is to
			have a completely "generative" or "compositional" lexicon, with no
			pre-coordination, and a separate database of coordination rules (in the form of
			trees, indexed by path patterns), called "fils guides", which control how terms
			can be coordinated in actual notes and reports. The advantage of this approach
			is that it allows for a small lexicon (&lt; 50,000 terms) to cover a large
			amount of medicine (contrast with Snmoed-ct - 1.3 million node semantic net); it
			is easily managable due to being very systematic and relatively small.</p>
			<p>Odys&eacute;e has also adopted a variant of archetypes, and uses them in concert
			with the fils guides. Where non-deterministic input is desired by the
			user (i.e input doesn't follow and pre-modelled pattern), the fils guides
			are employed; when deterministic input is required, archetypes are loaded
			and used.&nbsp; According to Philippe Ameline, head of Nautilus, both techniques
			perfectly mix, since fils guides can extend Archetypes leaves, and an
			Archetype can be fired by a fil guide.</p>
			<p>Another endeavour underway at Nautilus is the "Ligne de Vie" (life line)
			health record server, which is a multi-tier EHR architecture combining
			birth-to-death patient health records, available on a per-issue/problem basis,
			with a simple security approach.</p>
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