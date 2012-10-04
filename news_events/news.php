<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

	<title>openEHR - News</title>
	<link rel="bookmark" href="http://www.openehr.org/news_events/news" title="openEHR - News">
	<?php include '../panel/headpanel.php' ?>
	
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

	<div id="MainArea">
	
		<div id="SideMenu">
			<?php $current = 1; include 'menu/newsmenu.php' ?>
		</div>
		
		<div id="TextArea">
			
			<h1>News</h1>
			<br/>
			
			<a href="openehrnews/news20">Brazil re-affirms commitement to openEHR</a>
			<h6>16. May 2012</h6>
			<p>As part of operationalising chapter III of the government decree (Nº 2.073, DE 31 DE AGOSTO DE 2011), a national EHR Workshop was held aimed at defining methods and standards to be used in the Brazilian EHR Project (RES-National). The conclusions were largely underpinned by openEHR.</p>
			<br/>
			
			<a href="openehrnews/news19">Clinical Information Modelling Initiative goes with Archetypes & UML profile</a>
			<h6>14. December 2011</h6>
			<p>The Clinical Information Modeling Initiative is an international collaboration that is dedicated to providing a common format for detailed specifications for the representation of health information content so that semantically interoperable information may be created and shared in health records, messages and documents.</p>
			<br/>
			
			<a href="openehrnews/news18">Brazil chooses openEHR for EHR at all levels of government</a>
			<h6>6. January 2011</h6>
			<p>Brazil has chosen to use openEHR and archetypes for the shareable EHR at three levels of government - federal, state and municipal.</p>
			<br/>
			
			<a href="openehrnews/news17">David Ingram interview with Talkstandards</a>
			<h6>25. February 2010</h6>
			<p>In an exclusive interview with Talkstandards, Professor David Ingram of openEHR, outlines some of his expectations for the future of ICT in the health care sector.</p>
			<br/>
			
			<a href="openehrnews/news16">IHTSDO and openEHR Begin Collaborative Work Programme</a>
			<h6>15. September 2009</h6>
			<p>Organizations will explore how clinical terminologies and archetype-based record structures can best be aligned to support electronic health records.</p>
			<br/>
			
			<a href="openehrnews/news15">OSHIP gets CLIPS decision support engine</a>
			<h6>27. August 2009</h6>
			<p>The Open Source Health Information Platform (OSHIP) has integrated the "gold standard" forward chaining inference engine CLIPS in order to support complex decision support requirements.</p>
			<br/>
			
			<a href="openehrnews/news14">openEHR in £1.1m Wellcome Trust Sintero project</a>
			<h6>9. July 2009</h6>
			<p>The openEHR health computing platform will be used as the basis of the core clinical repository for the Sintero project funded by a &pound;1.1m grant from the Wellcome Trust.</p>
			<br/>
			
			<a href="openehrnews/news14">svn.openehr.org turned off</a>
			<h6>1. May 2009</h6>
			<p>The old URL http://svn.openehr.org has been turned off; use http://www.openehr.org/svn. If you have an error when doing an SVN operation on a local repository, check if this is the initial part of the URL.</p>
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