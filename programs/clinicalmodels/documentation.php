<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
	<meta http-equiv="Content-Language" content="en">

	<title>openEHR - Clinical Models Program</title>

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


	<div id="MainArea" style="height:450px;">
	
		<div id="SideMenu">
		<?php include 'menu/modelsmenu.php' ?>
		</div>

		<div id="TextArea">
		
		<h1>Documentation</h1>
		<p>The openEHR Clinical Knowledge Manager (CKM) is an international, online clinical knowledge resource.
		It has gathered an active Web 2.0 community of interested and motivated individuals focused on furthering an open and international approach to clinical informatics
		- an application- and message-independent lingua franca for sharing health information between individuals, clinicians and organisations; between applications,
		and across regional and national borders. All contributions to CKM is on a voluntary basis, and all CKM content is open source and freely available under a Creative Commons licence.</p>
		<p>See the live instance of CKM <a href="http://openehr.org/knowledge">here</a>.</p>
		<p class="par">The latest release of CKM:</p>
		<ul>
			<li>is a library of clinical knowledge artefacts - currently openEHR archetypes and templates;</li>
			<li>supports the full life cycle management of openEHR archetypes through a review and publication process;</li>
			<li>provides governance of the knowledge artefacts.</li>
		</ul><br/>
		<p>In the near future we anticipate a complementary repository for other related artefacts including terminology subsets.</p>

		<p>The Clinical Knowledge Manager provides the opportunity and means for users interested in modelling clinical content
		to become participate in the creation and/or enhancement of an international set of archetypes, and these in turn have the potential
		to provide the foundation for interoperable Electronic Health Records. </p>
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
