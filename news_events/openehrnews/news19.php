<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title>openEHR - News</title>
	<?php include '../../panel/headpanel.php' ?>
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

	<div id="MainArea">
	
		<div id="SideMenu">
		<?php $current = 1; include '../menu/newsmenu.php' ?>
		</div>
		
		<div id="TextArea">
			<h1>News</h1>
			<h2>Clinical Information Modelling Initiative goes with Archetypes & UML profile</h2>
			<h6>14. December 2011 | from: Thomas Beale</h6>
			
			<h3>Press release from the CIMI group</h3>
			<p>The Clinical Information Modeling Initiative is an international collaboration that is dedicated to providing a common format for detailed specifications for the representation of health information content so that semantically interoperable information may be created and shared in health records, messages and documents. CIMI has been holding meetings in various locations around the world since July, 2011. All funding and resources for these meetings have been provided by the participants. At its most recent meeting in London, 29 November - 1 December 2011, the group agreed on the following principles and approach.<p> 
			
			<h5>Principles</h5>
			<p>1. CIMI specifications will be freely available to all. The initial use cases will focus on the requirements of organisations involved in providing, funding, monitoring or governing healthcare and to providers of healthcare IT and healthcare IT standards as well as to national eHealth programs, professional organisations, health providers and clinical system developers.</p>
			<p>2. CIMI is committed to making these specifications available in a number of formats, beginning with the Archetype Definition Language (ADL) from the openEHR Foundation (ISO 13606.2) and the Unified Modeling Language (UML) from the Object Management Group (OMG) with the intent that the users of these specifications can convert them into their local formats.</p>
			<p>3. CIMI is committed to transparency in its work product and process.</p>
			
			<h5>Approach</h5>
			<ul>
			<li>ADL 1.5 will be the initial formalism for representing clinical models in the repository.</li>
				<ul>
				<li>CIMI will use the openEHR constraint model (Archetype Object Model:AOM).</li>
				<li>Modifications will be required and will be delivered by CIMI members on a frequent basis.</li>
				</ul>
			<li>A set of UML stereotypes, XMI specifications and transformations will be concurrently developed using UML 2.0 and OCL as the constraint language.</li>
			<li>A Work Plan for how the AOM and target reference models will be maintained and updated will be developed and approved by the end of January 2012.</li>
				<ul>
				<li>Lessons learned from the development and implementation of the HL7 Clinical Statement Pattern and HL7 RIM as well as from the Entry models of 13606, openEHR and the SMART (Substitutable Medical Apps, Reusable Technologies) initiative will inform baseline inputs into this process.</li>
				</ul>
			<li>A plan for establishing a repository to maintain these models will continue to be developed by the group at its meeting in January.</li>
			</ul>
			<h5>Further Information</h5>
			<p>In the future CIMI will provide information publicly on the Internet. For immediate further information, contact <a href="mailto:stan.huff@imail.org">Stan Huff</a>.</p>
			<br/>
			<a href="../news">>> Back to News</a>
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