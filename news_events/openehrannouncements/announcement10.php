<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title>openEHR - Announcements</title>
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
		<?php $current = 4; include '../menu/newsmenu.php' ?>
		</div>
		
		<div id="TextArea">
			<h1>Announcements</h1>
			<h2>Board statement on Clinical Knowledge Manager</h2>
			<h6>15. May 2012 | from: Board of Directors</h6>
			
			<h3>What is Clinical Knowledge Manager?</h3>
			<p>The Clinical Knowledge Manager (CKM) application is used by the openEHR Foundation
			to provide governance of archetypes, templates and terminology reference sets,
			and to facilitate discussions and communication about these assets within the openEHR community.
			The primary functionality is to locate and view the assets, manage the review and publication
			process and provide maintenance and evolution of these for the future.
			All of the hosted assets are freely and openly available to view or
			download at no cost under a CC-BY-SA licence (which may change to a CC-BY license
			if this is deemed to provide advantage by industry and health care providers).</p>
			<p>CKM is a commercial application developed by Ocean Informatics and primarily intended
			to support national standards and large vendor model development and is provided
			to the Foundation free of charge, with the underlying Arcitecta Mediaflux
			asset management engine licensed to the Foundation at a reduced rate.</p>
			
			<h3>Why did the openEHR Foundation choose CKM?</h3>
			<p>The use of a web-based paradigm to support the collaborative clinical
			governance and maintenance of openEHR clinical models remains leading-edge
			and as first-of-breed, the Ocean Informatics CKM is currently the only tool
			which offers the rich functionality required by the Foundation and wider modelling community.
			The Foundation will continue to work with Ocean Informatics to develop CKM
			to meet the evolving needs of the community at no cost for participants,
			ensuring that CKM remains compliant with emerging federated governance standards
			as other competing tools and repositories appear on the market.
			The current use of the Ocean Informatics CKM does not preclude the use
			of equivalent products in the future, should these meet Foundation requirements.</p>
			
			<h3>What are the future plans for CKM?</h3>
			<p>The Foundation is currently considering proposals by Ocean Informatics
			to offer a paid subscription option within the openEHR CKM, allowing maintenance
			of a limited set of ‘local’ archetypes within separate ‘domains’ for use
			by smaller organisations, such as academic units, hospitals or SMEs. <p>
			<p>Apart from offering value to these organisations, this may present
			a very useful opportunity to explore the practical demands of distributed
			governance of openEHR assets between domains. The primary aim is to provide
			functionality to groups for whom a full CKM deployment may be unnecessary,
			but depending on detailed costings and hosting arrangements, it may also be possible
			for the Foundation to receive a proportion of the subscription fees,
			and the facility be offered to Associates of the Foundation
			at reduced cost as part of their membership.</p>
			<br/>
			<p>openEHR Board of Directors</p>
			<br/>
			<a href="../announcements">>> Back to Announcements</a>
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