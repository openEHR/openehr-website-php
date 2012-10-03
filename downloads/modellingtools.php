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
				<a href="http://www.openehr.org/new-ws/site/downloads/ADLworkbench/home">Download and help pages</a>.<br/>
				For source, see the <a title="Eiffel Tools Project" href="/openehr/projects/eiffel.html">project page</a>.<br/><br/>
				</td>
			</tr>
			<tr>
				<td class="TableMainC">Archetype Editor</td>
				<td class="TableMainC"><br/><a href="http://www.openehr.org/new-ws/site/downloads/archetypeeditor/home">Download and help pages</a><br/>
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
				For further information about support mailing lists, source code, other versions etc see:<br/>
				<a href="http://www.imt.liu.se/mi/ehr/tools/">http://www.imt.liu.se/mi/ehr/tools/
				</a><br/><br/>
				</td>
			</tr>
			</tbody>
			</table>

			
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