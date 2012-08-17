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


	<div id="MainArea">
	
		<div id="SideMenu">
		<?php include 'menu/modelsmenu.php' ?>
		</div>

		<div id="TextArea">
		
		<h1>IP and Licensing</h1>
		<h3>Copyright</h3>
		<p>Artefacts produced by the Clinical Program are copyrighted to the openEHR Foundation. This establishes the Foundation to be the owner of the 'moral rights' to the artefacts, on behalf of all the contributors, and for the safety of the user community.</p>
		
		<h3>Attribution</h3>
		<p>The contributors to an artefact are recognised in a contributors section of the work.</p>
		
		<h3>Licensing</h3>
		<p>A standard license is attached to each artefact produced within the Clinical Program.</p>
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
			<td class="TableMainC"> <b>Archetypes, templates</b> </td>
			<td class="TableMainC"> <img src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png" style="border: 1px solid black" /> <br/>
									WORK by <a href="http://www.openEHR.org">openEHR Foundation</a> is licensed under a <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution-ShareAlike 3.0 Unported License</a>. </td>
			<td class="TableMainC"> The use of the CC-BY-SA license allows for public sharing, republishing and forking of the specifications. 
			This acts as a safeguard against subversion of the openEHR Foundation preventing the community using the specifications in a fair way. <br/>
			</td>
			</tr>
			<tr>
			<td class="TableMainC"> <b>Terminology subsets</b> </td>
			<td class="TableMainC"> <img src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png" style="border: 1px solid black" /> <br/>
									WORK by <a href="http://www.openEHR.org">openEHR Foundation</a> is licensed under a <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution-ShareAlike 3.0 Unported License</a>. </td>
			<td class="TableMainC"> <br/><br/><br/>ibid <br/><br/><br/></td>
			</tr>
			<tr>
			<td class="TableMainC"> <b>Documentation</b> </td>
			<td class="TableMainC"> <img src="http://i.creativecommons.org/l/by/3.0/88x31.png" style="border: 1px solid black" /><br/>WORK by <a href="http://www.openEHR.org">openEHR Foundation</a> is licensed under a <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 Unported License</a>.</td>
			<td class="TableMainC"> <br/><br/>Documentation is intended for wide dissemination. Improvement, translation and re-use are encouraged. <br/><br/><br/> </td>
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
