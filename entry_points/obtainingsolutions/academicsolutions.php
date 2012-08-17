<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
	<meta http-equiv="Content-Language" content="en">

	<title>openEHR - Obtaining Solutions</title>

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

	<div id="MainArea" style="height:1400px;">
	
		<div id="SideMenu">
		<?php include 'menu/solutionsmenu.php' ?>
		</div>
		
		<div id="TextArea">
			
			<h1>Academic Solutions</h1>
			<p>Following table provides an overview of possible academic solutions based on openEHR.
			
			<h2>Table explanation</h2>
		
			<span style="font-size:30px; color:#009933; font-weight:900;">&nu;</span> - Organisation provides solution in that category<br/>
			<br/>
			
			<table class="TableMain">
			<tbody>
			<tr>
			<th class="TableMainT" style="text-align:center;">Organisation</th>
			<th class="TableMainT" style="text-align:center;">More<br/>information</th>
			<th class="TableMainT" style="text-align:center;"><a href="solutionshome#MT">Modelling<br/>Tools</a></th>
			<th class="TableMainT" style="text-align:center;"><a href="solutionshome#MM">Model<br/>Manag.</a></th>
			<th class="TableMainT" style="text-align:center;"><a href="solutionshome#IT">Implement.<br/>Tools</a></th>
			<th class="TableMainT" style="text-align:center;"><a href="solutionshome#OS">Operational<br/>Solutions</a></th>
			<th class="TableMainT" style="text-align:center;"><a href="solutionshome#Ap">Applicat.</a></th>
			<th class="TableMainT" style="text-align:center;"><a href="solutionshome#Se">Services</a></th>
			<th class="TableMainT" style="text-align:center;"><a href="solutionshome#Hdp">Health Data<br/>Persistence</a></th>
			</tr>
			<tr>
			<td class="TableMainC" style="text-align:center;"></td>
			<td class="TableMainC" >XXX</td>
			<td class="TableMainC" style="text-align:center;"></td>
			<td class="TableMainC" style="text-align:center;"></td>
			<td class="TableMainC" style="text-align:center;"></td>
			<td class="TableMainC" style="text-align:center;"></td>
			<td class="TableMainC" style="text-align:center;"></td>
			<td class="TableMainC" style="text-align:center;"></td>
			<td class="TableMainC" style="text-align:center;"><span style="font-size:30px; color:#009933; font-weight:900;">&nu;</span></td>
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
