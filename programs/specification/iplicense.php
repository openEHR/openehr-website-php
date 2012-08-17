<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
	<meta http-equiv="Content-Language" content="en">

	<title>openEHR - Specifications Program</title>

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


	<div id="MainArea">
	
		<div id="SideMenu">
		<?php include 'menu/specificationsmenu.php' ?>
		</div>

		<div id="TextArea">
		
		<h1>IP and Licensing</h1>
		<p>The Specification Program generates artefacts which are intended to be freely usable by all stakeholder types, including commercial enterprises. Controlled copyright, and open source and content licenses are used to achieve these aims.</p>
		
		<h2>Introduction</h2>
		<p>The openEHR specifications and their computable expressions are openly published and free to use for all categories of use, both commercial and non-commercial.Copyright and licenses are used to protect these artefacts for ongoing open and free use by the community.</p>
		
		<h2>Artefact Categories</h2>
		<p>From the IP point of view, there are the following kinds of artefact:</p>
		<ul>
			<li><em>Documentary specifications - published format</em>, in one or both of the following forms:
			<ul>
				<li>HTML (rendered format on a wiki),</li>
				<li>PDF or some other immediately viewable format;</li>
			</ul>
			</li>
			<li><em>Documentary specifications - source format</em>: depending on the lifecycle stage:
			<ul>
				<li>wiki source;</li>
				<li>for the PDF format specifications, it is currently the FrameMaker source files (being converted to DITA format);</li>
			</ul>
			</li>
			<li><em>Computable artefacts</em>: any recognised computable or formal artefact, including but not limited to:
			<ul>
				<li>XMI files of UML models;</li>
				<li>UML tool sources where feasible;</li>
				<li>XSDs of the data view of relevant specifications;</li>
				<li>WSDLs of service specifications;</li>
				<li>code skeletons of APIs;</li>
				<li>code examples.</li>
			</ul>
			</li>
			<li><em>Educational materials</em>: including:
			<ul>
				<li>slideshow presentations in source (e.g. Microsoft .ppt, .pptx) format or published format, typically PDF</li>
				<li>video presentations in a recognised movie format, typically a collection of files e.g. .swf, .mpeg, .html etc.</li>
			</ul>
			</li>
		</ul>
		
		<h2>IP Rights</h2>
		<h3>Copyright</h3>
		<p>Artefacts of all of the above types produced by the Specification Program are copyrighted to the openEHR Foundation. This establishes the Foundation to be the owner of the 'moral rights' to the artefacts, on behalf of all the contributors, and for the safety of the user community.</p>
		
		<h3>Attribution</h3>
		<p>The contributors to an artefact are recognised in an attribution section of the work. For documentary specifications, this is the revision history of every specification. For computable artefacts, this is the contributor's list section in the license block.</p>
		
		<h3>Licensing</h3>
		<p>A standard license is attached to each artefact, explicitly defining rights for use. Without this, the definition of usage rights reverts directly to the copyright law of some jurisdiction, or one of the international copyright conventions.</p>
		<br/>
		<p>The license assignments are as follows:</p>
		
		<table class="TableMain">
			<tbody>
			<tr>
			<th class="TableMainT"> Artefact type</th>
			<th class="TableMainT"> License for use</th>
			<th class="TableMainT"> Comments</th>
			</tr>
			<tr>
			<td class="TableMainC"> <b>Specification document source files </b> </td>
			<td class="TableMainC"> <img src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png" style="border: 1px solid black" /> <br/>
									WORK by <a href="http://www.openEHR.org">openEHR Foundation</a> is licensed under a <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution-ShareAlike 3.0 Unported License</a>. </td>
			<td class="TableMainC"> The use of the CC-BY-SA license allows for public sharing, republishing and forking of the specifications. This acts as a safeguard against subversion of the openEHR Foundation preventing the community using the specifications in a fair way. <br/>
									The CC 'ND' (no-derivatives) option was also considered, which would protect openEHR users from specifications that have been tampered with, and republished by someone other than the Foundation. In fact this is what the W3C does with its <a href="http://www.w3.org/Consortium/Legal/2002/copyright-documents-20021231">document license</a>. <br/> </td>
			</tr>
			<tr>
			<td class="TableMainC"> <b>Specification document published files </b> </td>
			<td class="TableMainC"> <img src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png" style="border: 1px solid black" /> <br/>
									WORK by <a href="http://www.openEHR.org">openEHR Foundation</a> is licensed under a <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution-ShareAlike 3.0 Unported License</a>. </td>
			<td class="TableMainC"> <br/><br/><br/>ibid <br/><br/><br/></td>
			</tr>
			<tr>
			<td class="TableMainC"> <b>Specification computable artefacts</b> </td>
			<td class="TableMainC"> <img src="http://www.apache.org/images/feather-small.gif" style="border: 1px solid black; height:30px;" /><br/>
									<a href="http://www.apache.org/licenses/LICENSE-2.0">Apache 2 License</a></td>
			<td class="TableMainC"> <br/><br/>Computable artefacts are licensed in the same way as software, using the Apache license, which is widely accepted and industry friendly.<br/><br/></td>
			</tr>
			<tr>
			<td class="TableMainC"> <b>Educational artefacts </b> </td>
			<td class="TableMainC"> <img src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png" style="border: 1px solid black" /><br/>WORK by <a href="http://www.openEHR.org">openEHR Foundation</a> is licensed under a <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution-ShareAlike 3.0 Unported License</a>.</td>
			<td class="TableMainC"> <br/><br/>Educational artefacts are intended for wide use, and improvement, translation and re-use is encouraged. <br/><br/><br/> </td>
			</tr>
			</tbody>
		</table>
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