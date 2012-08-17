<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
	<meta http-equiv="Content-Language" content="en">

	<title>openEHR - Obtaining Solutions</title>

	<meta name="description" content="Apps page">
	<meta name="keywords" content="archetypes, openEHR, EHR, electronic health record, electronic medical record, healthcare, health care software, vendors, apps">
	<meta name="author" content="Thomas Beale">
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
			
			<h1>Applications Registry</h1>
			<p>The following table lists openEHR conformant applications.</p>
			
			<h2>Table explanation</h2>
		
			<table class="TableMain">
			<tbody>
			<tr>
			<th class="TableMainT" style="text-align:center;">App name</th>
			<th class="TableMainT" style="text-align:center;">App<br/>description</th>
			<th class="TableMainT" style="text-align:center;">Developer</th>
			</tr>
			<tr>
			<td class="TableMainC" style="text-align:center;"></td>
			<td class="TableMainC" style="text-align:center;"></td>
			<td class="TableMainC" style="text-align:center;"></td>
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
