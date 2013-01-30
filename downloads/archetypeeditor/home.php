<?php
$PageName = 'Archetype Editor Home';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

	<?php include '../../panel/headpanel.php' ?>
	
</head>

<body>

<div id="MainFrame">
	
	<div id="TopPanel">
		<?php include '../../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu">
	
		<div class="nav">
			<?php include '../../menu/topmenu.php' ?>
		</div>
		
	</div> 

	<div id="MainArea">
		
		<div id="SideMenu">
			<?php include 'menu.php' ?>
		</div>

		<div id="TextArea">
		
			<h1>Archetype Editor Home</h1>
			<br/>
			<p><em>The Archetype Editor is a tool to support the authoring of openEHR clinical and administrative archetypes.</em></p>
			<p>The editor is Unicode-enabled. It can work with archetypes in any language. The editor itself has been translated into several languages, including Danish, English, Farsi, German, Japanese, Spanish, Swedish and Turkish. If you would like to include another language, please let us know.</p>
			
			
			<h2>Current beta release 29 November 2012</h2>
			<p>Archetype Editor 2.2 has many fixes to the handling of XML archetypes, constraint bindings, term bindings and specialised archetypes. See the <a href="release_notes">Release notes</a> for a complete list of the changes.</p>
		
		
			<h2>Download</h2>
			<p><a href="http://www.openehr.org/svn/oe_distrib/windows/tools/ArchetypeEditorInstall.exe">Download the installer</a>.</p>
			<p>Archetype Editor is available for Windows only. .NET 2.0 is required.</p>
			
			<h3>Sources</h3>
			<p>The source code can be accessed from the <a href="http://www-old.openehr.org/projects/dotnet.html">openEHR project page</a>.</p>
			
			<h3>Archetypes</h3>
			<p>You need archetypes. Where you can get them:</p>
			<ul>
				<li>You can write them yourself, or you may already have some in your organisation </li>
				<li>The openEHR archetypes are available from the <a href="http://www.openehr.org/knowledge">
                Clinical Knowledge Manager</a>(CKM). Obtain a login in order to download all the archetypes. This repository has over 250 archetypes, in various stages of development by a large number of international experts, and includes clinical and administrative archetypes.</li>
			</ul>
			<p>Archetypes can be put anywhere on your file system.</p>
			
			
			<h2>Using the Archetype Editor</h2>
			
			<h3>Using the Archetype Editor with the ADL Workbench</h3>
			<p>One convenient way for clinical modellers with more of a technical bent to use the Archetype Editor is in conjunction with the ADL Workbench (AWB). There are two reasons you might want to do this:
			firstly the AWB provides a tool-based view of all archetypes, rather than the user having to rely on the file system explorer;
			secondly, the AWB provides ADL 1.5 validation of all archetypes.
			See the <a href="/downloads/ADLworkbench/home">ADL Workbench help pages</a> for how to configure this.</p>
			
			<h3>(Other topics)</h3>
			<p>Detailed help pages for the Archetype Editor are under construction.</p>
			
			<h2>Support</h2>
			<p>The best way to get help with the Archetype Editor and/or creating, viewing archetypes, is to post questions on the <a href="http://lists.openehr.org/mailman/listinfo/openehr-clinical_lists.openehr.org">openEHR Clinical Mailing list</a>.</p>


			<h2>Reporting Issues</h2>
			<p>Please report issues on the openEHR <a href="http://www.openehr.org/issues/browse/AEPR">Archetype Editor problem report tracker (Jira)</a>.
			It really helps us to help you if you report a problem! Please try to note down the steps taken to reproduce the problem, which will greatly help us in fixing it.</p>
        
		</div>

	</div>

	<div id="BottomMenu">
		<?php include '../../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
		<?php include '../../panel/bottompanel.php' ?>
	</div>

</div>

<?php include '../../panel/scriptpanel.php' ?>

</body>

</html>