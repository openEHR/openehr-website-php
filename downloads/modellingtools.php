<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

	<title>openEHR - Modelling Tools</title>
	<link rel="bookmark" href="http://www.openehr.org/downloads/modellingtools" title="openEHR - Downloads: Modelling Tools">
	<?php include '../panel/headpanel.php' ?>
	
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

	<div id="MainArea">
		
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
				<th class="TableMainT">Description</th>
				<th class="TableMainT">Technology</th>
				<th class="TableMainT">Download</th>
			</tr>
			<tr>
				<td class="TableMainC">ADL workbench (AWB)</td>
				<td class="TableMainC">Reference model-driven visual IDE for parsing, compiling, analysing, converting and (Q1 2013) editing ADL 1.4 and ADL 1.5 archetypes and templates. Built on the reference ADL parser.</td>
				<td class="TableMainC">Source: Eiffel 7.1; builds available for Windows, Linux and Mac OSX.</td>
				<td class="TableMainC"><a href="/downloads/ADLworkbench/home">Download and help pages</a>.</td>
			</tr>
			<tr>
				<td class="TableMainC">ADL 1.5 command-line compiler</td>
				<td class="TableMainC">A command-line version of the compiler used inside the ADL Workbench</td>
				<td class="TableMainC">Source: Eiffel 7.1; builds available for Windows, Linux and Mac OSX.</td>
				<td class="TableMainC">(Available Q1 2013)</td>
			</tr>
			<tr>
				<td class="TableMainC">Archetype Editor (AE)</td>
				<td class="TableMainC">The Archetype Editor is currently the main tool in use for authoring openEHR ADL 1.4 archetypes as found on openEHR CKM and elsewhere. It is Unicode-enabled and works with archetypes in any language. The editor application has been localised to several languages, including Danish, English, Farsi, German, Japanese, Spanish, Swedish and Turkish.</td>
				<td class="TableMainC">Microsoft .Net</td>
				<td class="TableMainC"><br/><a href="/downloads/archetypeeditor/home">Download and help pages</a><br/></td>
			</tr>
			<tr>
				<td class="TableMainC">LiU Archetype Editor and other knowledge tools</td>
				<td class="TableMainC">Part of the Link&ouml;ping University Project to build openEHR tools and demonstrators</td>
				<td class="TableMainC">Java</td>
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
				For further information about support mailing lists, source code, other versions etc see: <a href="http://www.imt.liu.se/mi/ehr/tools/">http://www.imt.liu.se/mi/ehr/tools/</a><br/><br/>
				</td>
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
