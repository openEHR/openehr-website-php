<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title>openEHR - What is openEHR?</title>
	<?php include 'panel/headpanel.php' ?>
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

	<div id="MainArea" style=" margin-left:30px; width:900px; height:500px;">
		<div id="TextArea" style="left:0px; width:900px; height:500px;">
		<h1>What is openEHR?</h1>
		<p>openEHR is a virtual community working on interoperability and computability in e-health. It's main focus is patient electronic health records (EHRs) and systems. It's technical approach is 'multi-level modelling' within a service-oriented software architecture, in which models built by domain experts are in their own layer. This allows domain experts - clinicians, allied health workers, and other experts - to be directly involved in defining the semantics of clinical information systems. You can see a whole repository of these models, known as 'archetypes' <a href="http://www.openehr.org/knowledge">here</a>, and the archetype specification is now an ISO standard (ISO 13606-2). These are now being used by several national governments to specify national e-health information standards.</p>
		<p>openEHR has also defined specifications for clinical information models, EHR Extracts, demographics, data types and various kinds of service interfaces. These have been used in hospitals and summary EHR systems in various countries.</p>
		<h2>Benefits</h2>
		<p>There are some basic benefits to openEHR's approach. Firstly, it is now possible to build an EHR repository independently of content specifications. In other words, your EHR system doesn't need to know a priori about any of the clinical data it will process, such as vital signs, diagnoses or orders. Models for those things are developed separately. Models for data sets and forms are also developed separately, and UI form components are now generatable from these definitions. This enables a new generation of EHR systems that routinely adapts to new requirements - because that's how the architecture is designed in the first place.</p>
		<p>Another great benefit is portable queries - queries based on content models, not phsyical database schemas. Coupled with EHR and vEHR service interface APIs, these are enabling a new class of decision support tools.</p>
		<p>In clinical terms, health professionals are now for the first time experiencing direct involvement in the construction and ongoing development of EHR systems. This means that the quality of the data is better - they designed it, and it also enables applications that work for them to be built.</p>
		<p>Strategically, the openEHR approach enables a platform-based e-health software market, in which vendors and developers of back-end and front-end solutions interface via standardised information, standardised content models and terminology, and standardised service interfaces. This gives procurement stakeholders new choices.</p>
		<h2>Methods</h2>
		<p>This website will give you information on how it all works, and how to become a <a href="./about/membership">member of openEHR</a>. Are you a clinical professional? You can help creating and reviewing the <a href="http://www.openehr.org/knowledge">archetypes</a>. Are you a message designer? You may want to get involved in building template-based message specifications, based on the archetypes. Are you a software developer? You can help build the new generation of EHR tools. If you are a researcher, you can get involved in specifying how openEHR querying, published terminologies and standards like CDISC can be used to improve how longitudinal data-based studies are done. Maybe you want to obtain tools and solutions? You will find <a href = "entry_points/obtainingsolutions/home">directories of systems and applications vendors</a>, as well as <a href="./programs/software">open source components</a>.</p>
		<h2>Success Stories</h2>
		<h3>openEHR in National e-health Programmes</h3>
		<p></p>
		<h3>openEHR in hospital systems</h3>
		<p></p>
		<h3>openEHR in summary EHR systems</h3>
		<p></p>
		<h3>openEHR in international standards</h3>
		<p></p>
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
