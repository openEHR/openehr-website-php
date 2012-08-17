<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
	<meta http-equiv="Content-Language" content="en">

	<title>openEHR - About this Website</title>

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

	<link rel="stylesheet" href="styles/basic.css"  type="text/css">
	<link rel="stylesheet" href="styles/programs.css"  type="text/css"> 
	<link rel="stylesheet" href="styles/menu.css" type="text/css"> 
	
	<link rel="home" href="http://www.openehr.org">
	<link rel="bookmark" href="http://www.openehr.org" title="openEHR - Homepage">
	<link rel="index" href="http://www.openehr.org/sitemap">

	<script type="text/javascript" src="menu/dropdown.js"></script> 
	
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

	<div id="MainArea" style="margin-left:50px; width:900px; height:500px;">
		<div id="TextArea" style="left:0px; margin-left:50px; width:900px; height:500px;">
		<h1>About this Website</h1>
		<p>This new website aims to be more representative of the openEHR community aims and acitivities. Don't consider it as fixed, but rather as a living thing. We are interested in feedback on any aspect of the website. In the initial development phase, visual elements and style are 'draft', and we are interested in suggestions for improvement. In particular:</p>
		
		<ul>
			<li><em>The 'openEHR' logo</em>: this remains the 'orange and blue' logo of the past. We are interested in finding an additional graphic / symbolic logo as well which would make the logo more recognisable.</li>
			<li><em>The 'doctors' graphic</em>: this is just an idea at this stage: an image that tells the outside world that openEHR is something to do with healthcare and computing. Doctors in white coats are not particularly representative of all healthcare workers, but we have found no obvious alternative so far, since in reality most healthcare workers look like normal people. The doctors graphic may also seem more in the style of commercial e-health vendor advertising rather than a .org. Alternatives: any visual content that gives the idea of computing in healthcare.</li>
			<li><em>The slogan</em>: A number of ideas have been tried here. This is meant to be a short sharp expression of what the openEHR Foundation and its community are about. Key ideas to include seems to be: archetypes/content models; flexibility/future-proofing/adaptibility of systems. Clearly no slogan can capture everything about a large effort like openEHR, so there will never be a perfect one. On the other hand being memorable is useful. Suggestions are welcome.</li>
		</ul>
			
		<h2>Providing feedback</h2>
		<p>Please provide feedback <a href="http://www.openehr.org/wiki/display/oecom/2012+Website+-+feedback+page">here</a>.</p>
		
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
