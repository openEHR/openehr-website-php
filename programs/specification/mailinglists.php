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
		
		<h1>Mailing Lists</h1>
		<p>The openEHR mailing lists are sited at <a href="http://www.mailmanhost.com/">dot.list</a>, a mailing list hoster run by one of the developers of the mailman software. </p>
		<br/>
		<table class="TableMain">
		<tbody>
		<tr>
		<th class="TableMainT">List</th>
		<th class="TableMainT">Name</th>
		<th class="TableMainT">Description</th>
		<th class="TableMainT">Access</th>
		<th class="TableMainT">Moderated</th>
		<th class="TableMainT">Admins</th>
		</tr>
		<tr>
		<th class="TableMainT">Technical list</th>
		<td class="TableMainC">openehr-technical</td>
		<td class="TableMainC">
		This list is for technical discussions about any aspect of modelling,
		archetypes, software building relevant to the openEHR architecture and
		specifications.<br/>
		>All reviews and discussions relating to new specifications and changes to
		existing specifications will be flagged on this list by the Specifications
		Program editorial committee.</td>
		<td class="TableMainC">
		<a href="http://lists.openehr.org/mailman/listinfo/openehr-technical_lists.openehr.org">subscribe
		<br>
		unsubscribe</a> 
		<br>
		<a href="mailto:openehr-technical@lists.openehr.org">post</a>
		<br>
		<a href="http://lists.openehr.org/pipermail/openehr-technical_lists.openehr.org/">archive</a></td>
		<td class="TableMainC">No</td>
		<td class="TableMainC"></td>
		</tr>
		<tr>
		<th class="TableMainT">ISO 13606 list</th>
		<td class="TableMainC">openehr-13606</td>
		<td class="TableMainC">This list is for discussions about the use of openEHR methods and technology
		for current and future revisions of the ISO 13606 standard.</td>
		<td class="TableMainC">
		<a href="http://lists.openehr.org/mailman/listinfo/openehr-13606_lists.openehr.org">subscribe
		<br>
		unsubscribe</a> 
		<br>
		<a href="mailto:openehr-13606@lists.openehr.org">post</a>
		<br>
		<a href="http://lists.openehr.org/pipermail/openehr-13606_lists.openehr.org/">archive</a></td>
		<td class="TableMainC">No</td>
		<td class="TableMainC"></td>
		</tr>
		</tbody>
		</table>
		<br/>
		<br/>
		<p>Other mailing lists you can find <a href="../../community/mailinglists">here</a>.</p>
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
