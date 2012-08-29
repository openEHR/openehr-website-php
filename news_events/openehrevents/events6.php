<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title>openEHR - Events</title>
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

	<div id="MainArea" style="height:450px;">
	
		<div id="SideMenu">
		<?php $current = 2; include '../menu/newsmenu.php' ?>
		</div>
		
		<div id="TextArea">
			<h1>Events</h1>
			<h2>openEHR @ HINZ | New Zeland</h2>
			<h6>21. - 22. June 2012</h6>
			<br/>
			<p>Two days of strategic events on healthcare interoperability in June in New Zealand (Programme to see <a href="https://sites.google.com/a/hl7.org.nz/hl7-new-zealand/news/21-22june2012healthcareinteroperabilitypioneeredhammondopenehr#">here</a>).</p>
			<p>Thurs 21 June - <strong>Bringing the Electronic Health Record (EHR) to Life -
			Emeritus Professor Ed Hammond. </strong>Ed will present <strong>EHR - The Killer
			App</strong>. His key message is that the time has now come to develop a
			full-blown EHR as technical, societal and other barriers have substantially been
			dealt with
			(<a href="http://www.hinz.org.nz/events/Seminar/2012/6/Leveraging+the+EHR+for+translational+health+care%3A+Exploring+what%27s+under+the+bonnet/47">d</a><a href="http://www.hinz.org.nz/events/Seminar/2012/6/Leveraging+the+EHR+for+translational+health+care%3A+Exploring+what%27s+under+the+bonnet/47">ay
			programme</a>). Hosted by HINZ (Health Informatics NZ) and partners HL7 New
			Zealand and The University of Auckland.</p>
			<p>Fri 22 June - <strong>Tutorial on openEHR - Drs. Hugh and Heather
			Leslie</strong> (Ocean Informatics).&nbsp; The tutorial will cover the full continuum
			of the methodologies described in the New Zealand Reference Architecture for
			Interoperability from clinical requirements through modelling to
			machine-generation of compliant CDAs. Hosted by HL7 NZ.</p>
			<br/>
			<a href="../events">>> Back to Events</a>
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