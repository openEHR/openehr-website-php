<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
	<meta http-equiv="Content-Language" content="en">

	<title>openEHR - Releases</title>

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

	<div id="MainArea" style="height:500px;">
	
		<div id="SideMenu">
		<?php $current = 3; include '../menu/newsmenu.php' ?>
		</div>
		
		<div id="TextArea">
			
			<h2>First open source release of openEHR.NET</h2>
			<h6>4. March 2011 | from: Thomas Beale</h6>
			<br/>
			<p>The first release of openEHR.NET is available on
			<a href="http://openehr.codeplex.com/">Codeplex</a>. 
			openEHR.NET is a C# implementation of the
			<a href="http://www.openehr.org/">openEHR</a> Reference Model (RM) and Archetype
			Model (AM) specifications (Release 1.0.1), allowing developers to build openEHR
			applications by composing RM objects, validate against AM objects and serialise
			to/from XML. The aim of this release is to help all .Net development share the
			same core classes, and of course collaborate on a common high-quality library
			rather than having separate developmets.</p>
			<p>openEHR.Net is already in use on a demonstration project called 
			<a href="http://gastros.codeplex.com/">Gastros</a> led by
			Koray Atalag at Auckland University.</p>
			<p>If you are interested in open source openEHR development on .Net platform,
			please visit the openEHR codeplex site and join the development group.</p>
			<p>The initial version of the code was contributed by
			<a href="http://oceaninformatics.com/">Ocean Informatics Pty Ltd</a>.</p>
			<br/>
			<a href="../releases">>> Back to Releases</a>
			
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