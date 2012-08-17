<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
	<meta http-equiv="Content-Language" content="en">

	<title>openEHR - Modelling Tools</title>

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

	<link rel="stylesheet" href="http://www.openehr.org/new-ws/site/styles/basic.css"  type="text/css">
	<link rel="stylesheet" href="http://www.openehr.org/new-ws/site/styles/programs.css"  type="text/css"> 
	<link rel="stylesheet" href="http://www.openehr.org/new-ws/site/styles/menu.css" type="text/css"> 
	
	<link rel="home" href="http://www.openehr.org">
	<link rel="bookmark" href="http://www.openehr.org" title="openEHR - Homepage">
	<link rel="index" href="http://www.openehr.org/sitemap">

	<script type="text/javascript" src="http://www.openehr.org/new-ws/site/menu/dropdown.js"></script> 
	
</head>


<body>

<div id="MainFrame">
	
	<div id="TopPanel">
	<?php include 'http://www.openehr.org/new-ws/site/panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu" style="text-align:left">
		<div class="nav">
   		 <?php include 'http://www.openehr.org/new-ws/site/menu/topmenu.php' ?>
		</div>
	</div> 

	<div id="MainArea">
		
		<div id="SideMenu">
		<?php include 'menu/adlmenu.php' ?>
		</div>

		<div id="TextArea">
			<h1>Support and Contributing</h1>
			
			<h2>I have a problem...</h2>
			<h3>...with the ADL Workbench</h3>
			<p>You can report an issue on the <a href="http://www.openehr.org/issues/browse/AWBPR">Jira AWB PR tracker</a>
			at openEHR.org. Please select the appropriate component, e.g. User interface, Validator, etc.</p>
			
			<h3>...with an archetype</h3>
			<p>If it is a CKM archetype, and it really appears to be an error or deficiency, you can:</p>
			<ul>
			<li value="0">Submit a comment to CKM, with the following steps: <ul>
				<li value="0">Go to the <a href="http://www.openehr.org/knowledge/">CKM server</a> and login </li>
				<li value="0">Navigate to the archetype in the left hand explorer and select (double-click) </li>
				<li value="0">Now right-click-Discussion. </li>
			  </ul></li>
			<li value="0">Discuss it on the openehr-clinical mailing list (<a href="http://lists.openehr.org/mailman/listinfo/openehr-clinical_lists.openehr.org">subscribe here</a>,
			<a href="http://www.openehr.org/mailarchives/openehr-clinical/">list archive</a>) </li>
			</ul>
			<p>If it is an ADL 1.5 test archetype, create a problem report on the <a href="http://www.openehr.org/issues/browse/AWBPR">Jira AWB PR tracker</a>, with component set to 'Test archetypes'.</p>
			
			<h3>...with this online documentation</h3>
			<p>If your problem is that you can't find an answer to what you are looking for, please report
			this on the <a href="http://www.openehr.org/issues/browse/AWBPR">Jira AWB PR tracker</a>,
			with component set to 'Documentation'. If you really need an answer, don't be afraid to post on the openehr-technical mailing list (<a href="http://lists.chime.ucl.ac.uk/mailman/listinfo/openehr-technical">subscribe here</a>, <a href="http://www.openehr.org/mailarchives/openehr-technical/">list archive</a>).</p>
			<h3>...with the <i>open</i>EHR specifications</h3>
			<p>There is a dedicated Jira tracker for this <a href="http://www.openehr.org/issues/browse/SPECPR">here</a>.</p>
			<h2>How can I contribute?</h2>
			<p>You are already a saint for asking! Most likely your interest is in one of the areas of: clinical archetypes, ADL/AOM tooling, or specifications. Useful things you can do include the following.</p>
			<h3>I can help with clinical / demographic archetypes</h3>
			<p>If your interest is in building and/or reviewing the CKM archetypes, or you want to offer new archetypes to CKM, please either login to CKM and join existing discussions, and/or contact the CKM editors and/or start a discussion on the openehr-clinical mailing list (<a href="http://lists.chime.ucl.ac.uk/mailman/listinfo/openehr-clinical">subscribe here</a>, <a href="http://www.openehr.org/mailarchives/openehr-clinical/">list archive</a>).</p>
			<h3>I want to help improving ADL / AOM 1.5</h3>
			<p>The single most useful thing you can do is to help build up the test archetype repository. This is a subversion repository, located <a href="http://www.openehr.org/svn/knowledge2/TRUNK">here</a>. We need more archetypes to test more ADL 1.5 use cases. Most of the validity conditions have at least one or two archetypes, but some conditions can be triggered by different kinds of archetypes. If you see you can post a message on the openehr-technical mailing list (<a href="http://lists.chime.ucl.ac.uk/mailman/listinfo/openehr-technical">subscribe here</a>, <a href="http://www.openehr.org/mailarchives/openehr-technical/">list archive</a>). </p>
			<p>Another useful thing you can do is to review the draft specifications. TBC</p>
			<h3>I can help improving the tool</h3>
			<p>The tool is written in the Eiffel language. If you are interested in working on it, please join the <i>open</i>EHR Eiffel implementation mailing list (<a href="http://lists.chime.ucl.ac.uk/mailman/listinfo/ref_impl_eiffel">subscribe here</a>, <a href="http://www.openehr.org/mailarchives/ref_impl_eiffel/">list archive</a>). Even if you have no interest in Eiffel, you are welcome to help by critiquing the design, suggesting new features. You can do this by posting feature requests on the <a href="http://www.openehr.org/issues/browse/AWBPR">Jira AWB PR tracker</a> (set Issue Type = 'improvement' or 'new feature request'), or posting on the openehr-technical mailing list (<a href="http://lists.chime.ucl.ac.uk/mailman/listinfo/openehr-technical">subscribe here</a>, <a href="http://www.openehr.org/mailarchives/openehr-technical/">list archive</a>).</p>
			<h3>I would like to port the tool to another language</h3>
			<p>As a starting point, it is suggested you post an initial enquiry on the openehr-technical mailing list (<a href="http://lists.chime.ucl.ac.uk/mailman/listinfo/openehr-technical">subscribe here</a>, <a href="http://www.openehr.org/mailarchives/openehr-technical/">list archive</a>), and/or subscribe to the openehr-implementers mailing list (<a href="http://lists.chime.ucl.ac.uk/mailman/listinfo/openehr-implementers">subscribe here</a>, <a href="http://www.openehr.org/mailarchives/openehr-implementers/">list archive</a>).</p>

		</div>

	</div>

	<div id="BottomMenu">
	<?php include 'http://www.openehr.org/new-ws/site/menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
	<?php include 'http://www.openehr.org/new-ws/site/panel/bottompanel.php' ?>
	</div>

</div>

<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>