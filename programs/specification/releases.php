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


	<div id="MainArea" style="height:450px;">
	
		<div id="SideMenu">
		<?php include 'menu/specificationsmenu.php' ?>
		</div>

		<div id="TextArea">
		
		<h1>Releases</h1>
		<p>The current working baseline is <a href="http://www.openehr.org/svn/specification/TRUNK/publishing/roadmap.html">here</a>.</p><br/>
		<table class="TableMain">
			<tbody>
			<tr>
			<th class="TableMainT"> Release </th>
			<th class="TableMainT"> Date</th>
			<th class="TableMainT"> Description </th>
			</tr>
			<tr>
			<td class="TableMainC"> <a href="http://www.openehr.org/releases/1.0.2/roadmap.html"><b>Release 1.0.2</b></a></td>
			<td class="TableMainC"> 31 December 2008 </td>
			<td class="TableMainC"> 22 Change Requests. </br><a href="http://www.openehr.org/issues/browse/SPEC/fixforversion/10030">Release notes.</a></td>
			</tr>
			<tr>
			<td class="TableMainC"> <a href="http://www.openehr.org/releases/1.0.1/roadmap.html"><b>Release 1.0.1</b></a></td>
			<td class="TableMainC"> 15 April 2007 </td>
			<td class="TableMainC"> 56 Change Requests. </br><a href="http://www.openehr.org/issues/browse/SPEC/fixforversion/10019">Release notes.</a></td>
			</tr>
			<tr>
			<td class="TableMainC"> <a href="http://www.openehr.org/releases/1.0/roadmap.html"><b>Release 1.0</b></a></td>
			<td class="TableMainC"> 07 February 2006 </td>
			<td class="TableMainC"> 54 Change Requests. </br><a href="http://www.openehr.org/issues/browse/SPEC/fixforversion/10018">Release notes.</a></td>
			</tr>
			<tr>
			<td class="TableMainC"> <em>Release 0.96</em></td>
			<td class="TableMainC"> 01 August 2005 </td>
			<td class="TableMainC"> Error correction release. 12 Change Requests </br><a href="http://www.openehr.org/issues/browse/SPEC/fixforversion/10017">Release notes.</a></td>
			</tr>
			<tr>
			<td class="TableMainC"> <a href="http://www.openehr.org/releases/0.95/roadmap.html"><b>Release 0.95</b></a></td>
			<td class="TableMainC"> 15 March 2005 </td>
			<td class="TableMainC"> Basic modelling changes. 17 Change Requests. </br><a href="http://www.openehr.org/issues/browse/SPEC/fixforversion/10016">Release notes.</a></td>
			</tr>
			<tr>
			<td class="TableMainC"> <a href="http://www.openehr.org/releases/0.9/roadmap.html"><b>Release 0.9</b></a></td>
			<td class="TableMainC"> 04 May 2004 </td>
			<td class="TableMainC"> First complete release of openEHR. 84 Change Requests </br><a href="http://www.openehr.org/issues/browse/SPEC/fixforversion/10015">Release notes.</a></td>
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
