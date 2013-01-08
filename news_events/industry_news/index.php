<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

	<title>openEHR - Industry News</title>
	<link rel="bookmark" href="http://www.openehr.org/news_events/industry_news" title="openEHR - Industry News">
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
			<?php $current = 5; include '../menu/newsmenu.php' ?>
		</div>
		
		<div id="TextArea">
			
			<h1>Industry News</h1>
			<br/>
			
			<a href="20120516">Brazil re-affirms commitment to openEHR</a>
			<h6>16. May 2012</h6>
			<p>As part of operationalising chapter III of the government decree, a national EHR Workshop was held aimed at defining methods and standards to be used in the Brazilian EHR Project (RES-National). The conclusions were largely underpinned by openEHR.</p>
			<br/>
			
			<a href="20111214">Clinical Information Modelling Initiative goes with Archetypes & UML profile</a>
			<h6>14. December 2011</h6>
			<p>The Clinical Information Modeling Initiative is an international collaboration that is dedicated to providing a common format for detailed specifications for the representation of health information content so that semantically interoperable information may be created and shared in health records, messages and documents.</p>
			<br/>
			
			<a href="20110106">Brazil chooses openEHR for EHR at all levels of government</a>
			<h6>6. January 2011</h6>
			<p>Brazil has chosen to use openEHR and archetypes for the shareable EHR at three levels of government - federal, state and municipal.</p>
			<br/>
			
			<a href="20090709">openEHR in &pound;1.1m Wellcome Trust Sintero project</a>
			<h6>9. July 2009</h6>
			<p>The openEHR health computing platform will be used as the basis of the core clinical repository for the Sintero project funded by a &pound;1.1m grant from the Wellcome Trust.</p>
			<br/>
			
			<a href="20090420">Microsoft Connected Health Framework (CHF) uses archetypes</a>
			<h6>20. April 2009</h6>
			<p>The latest edition of Microsoft's Connected Health Framework - a strategy based on the idea of 'knowledge-driven health' - includes openEHR (ISO 13606-2) archetypes as part of its domain knowledge architecture.</p>
			<br/>
			
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