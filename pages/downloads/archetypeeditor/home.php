<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Archetype Editor Home';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header_english.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>Archetype Editor 2.2.905 beta release, 27 February 2013</h2>
			<p><a href="release_notes">Release notes</a> - <a href="https://openehr.atlassian.net/projects/AEPR" target="_blank">Report an issue (Jira)</a></p>

			<br/>
			<p><em>The Archetype Editor facilitates authoring of openEHR clinical and administrative archetypes in ADL 1.4 and XML format.</em></p>
			<p>The editor is Unicode-enabled. It can work with archetypes in any language. The editor itself has been translated into several languages, including Danish, English, Farsi, German, Japanese, Russian, Spanish, Swedish and Turkish. If you would like to include another language, please let us know.</p>

			
			<h2>News</h2>
			<ul>
				<li>Changing the data type of elements at the same specialisation level as the archetype is always allowed.</li>
				<li>Specialised XML archetypes preserve all term codes inherited from the parent archetype.</li>
				<li>The uid attribute is now loaded and saved in archetypes where it is present.</li>
				<li>Non-standard constraint definition items are now loaded and saved where they are present.</li>
			</ul>


			<h2>Download</h2>
			<p><a href="/download_files/archetype_editor/archetype_editor_installer_windows-32bit.exe">Download the installer</a>.</p>
			<p>Archetype Editor is available for Windows only. .NET 2.0 or higher is required.</p>
			
			<h3>Source Code</h3>
			<p>The source code can be accessed from the <a href="https://github.com/openEHR/arch_ed-dotnet" target="_blank">GitHub home page</a>.</p>
			
			<h3>Archetypes</h3>
			<p>You need archetypes. Where you can get them:</p>
			<ul>
				<li>You can write them yourself, or you may already have some in your organisation </li>
				<li>The openEHR archetypes are available from the <a href="http://www.openehr.org/ckm" target="_blank">
				Clinical Knowledge Manager</a> (CKM). Obtain a login in order to download all the archetypes. This repository has over 250 archetypes, in various stages of development by a large number of international experts, and includes clinical and administrative archetypes.</li>
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
			<p>Please report issues on the openEHR <a href="https://openehr.atlassian.net/projects/AEPR" target="_blank">Archetype Editor problem report tracker (Jira)</a>.
			It really helps us to help you if you report a problem! Please try to note down the steps taken to reproduce the problem, which will greatly help us in fixing it.</p>
				
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
