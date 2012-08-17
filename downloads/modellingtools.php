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

	<link rel="stylesheet" href="../styles/basic.css"  type="text/css">
	<link rel="stylesheet" href="../styles/programs.css"  type="text/css"> 
	<link rel="stylesheet" href="../styles/menu.css" type="text/css"> 
	
	<link rel="home" href="http://www.openehr.org">
	<link rel="bookmark" href="http://www.openehr.org" title="openEHR - Homepage">
	<link rel="index" href="http://www.openehr.org/sitemap">

	<script type="text/javascript" src="../menu/dropdown.js"></script> 
	
</head>


<body>

<div id="MainFrame">
	
	<div id="TopPanel">
	<?php include '../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu" style="text-align:left">
		<div class="nav">
   		 <?php include '../menu/topmenu.php' ?>
		</div>
	</div> 

	<div id="MainArea" style="height:600px">
		
		<div id="SideMenu">
		<?php $current = 1; include 'menu/downloadsmenu.php' ?>
		</div>
		
		<div id="TextArea">
		<h1>Modelling Tools</h1>
		<br/>
		<table class="TableMain">
		<tbody>
		<tr>
		<th class="TableMainT">Project</th>
		<th class="TableMainT">Download</th>
		</tr>
		<tr>
		<td class="TableMainC">ADL workbench &amp; parser</td>
		<td class="TableMainC"><br/>
		<a href="http://www.openehr.org/svn/ref_impl_eiffel/TRUNK/apps/adl_workbench/doc/web/index.html">Download and help pages</a>.<br/>
		For source, see the <a title="Eiffel Tools Project" href="/openehr/projects/eiffel.html">project page</a>.<br/><br/>
		</td>
		</tr>
		<tr>
		<td class="TableMainC">Archetype Editor</td>
		<td class="TableMainC"><br/><a href="http://www.openehr.org/svn/knowledge_tools_dotnet/TRUNK/ArchetypeEditor/Help/index.html">Download and help pages</a><br/>
		Source available on <a href="http://www.openehr.org/projects/dotnet.html">project page</a>.<br/><br/></td>
		</tr>
		<tr>
		<td class="TableMainC">Java Reference Implementation of openEHR</td>
		<td class="TableMainC"><br/><a href="http://www.openehr.org/wiki/display/projects/Java+Project+Download">Download page</a><br/><br/></td>
		</tr>
		<tr>
		<td class="TableMainC">Link&ouml;ping University Project - <br/>Java archetype editor<br/> and other knowledge tools</td>
		<td class="TableMainC"><br/><a href="http://www.imt.liu.se/mi/ehr/"> LiU</a> Archetype Editor, <br/>version 0.5.2 (2007 March 20)&nbsp;
			<ul>
			<li>
			<a href="http://www.imt.liu.se/mi/ehr/tools/LiU-Archetype-Editor-0.5.2-bin.zip">LiU-Archetype-Editor-0.5.2-bin.zip</a>
			(Windows etc.)</li>
			<li>
			<a href="http://www.imt.liu.se/mi/ehr/tools/LiU-Archetype-Editor-0.5.2-bin.tar.gz">LiU-Archetype-Editor-0.5.2-bin.tar.gz</a>
			(Unix, Linux etc.)</li>
			</ul>
			Requires Java. Please read the
			<a href="http://svn.openehr.org/liu_knowledge_tools/TRUNK/LiU-Archetype-Editor/doc/readme.html">
			release notes</a> before installing the program.<br/>
			For further information about support mailing lists, source code, other versions
			etc see:
			<a href="http://www.imt.liu.se/mi/ehr/tools/">http://www.imt.liu.se/mi/ehr/tools/
			</a><br/><br/></td>
		</tr>
		</tbody>
		</table>
		<br/>
		
		
		</div>

	</div>

	<div id="BottomMenu">
	<?php include '../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
	<?php include '../panel/bottompanel.php' ?>
	</div>

</div>

<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>