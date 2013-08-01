<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'Modelling Tools';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT">Project</th>
				<th class="TableMainT">Description</th>
				<th class="TableMainT">Technology</th>
				<th class="TableMainT">Download</th>
				<th class="TableMainT">Dev project</th>
			</tr>
			<tr>
				<td class="TableMainC"><em>ADL 1.5 workbench (AWB)</em></td>
				<td class="TableMainC">Reference model-driven visual IDE for parsing, compiling, analysing, converting and (Q1 2013) editing ADL 1.4 and ADL 1.5 archetypes and templates. Built on the reference ADL parser.</td>
				<td class="TableMainC">Source: Eiffel 7.2; builds available for Windows, Linux and Mac OSX.</td>
				<td class="TableMainC"><a href="/downloads/ADLworkbench/home">Download and help pages</a></td>
				<td class="TableMainC"><a href="https://github.com/openEHR/adl-tools/wiki">openEHR/adl-tools@Github</a></td>
			</tr>
			<tr>
				<td class="TableMainC"><em>ADL 1.5 command-line compiler (ADLC)</em></td>
				<td class="TableMainC">A command-line version of the compiler used inside the ADL Workbench</td>
				<td class="TableMainC">Source: Eiffel 7.2; builds available for Windows, Linux and Mac OSX.</td>
				<td class="TableMainC"><a href="/downloads/ADLworkbench/home">Download and help pages</a></td>
				<td class="TableMainC"><a href="https://github.com/openEHR/adl-tools/wiki">openEHR/adl-tools@Github</a></td>
			</tr>
			<tr>
				<td class="TableMainC"><em>Archetype Editor (AE)</em></td>
				<td class="TableMainC">The Archetype Editor is currently the main tool in use for authoring openEHR ADL 1.4 archetypes as found on openEHR CKM and elsewhere. It is Unicode-enabled and works with archetypes in any language. The editor application has been localised to several languages, including Danish, English, Farsi, German, Japanese, Russian, Spanish, Swedish and Turkish.</td>
				<td class="TableMainC">Microsoft VB.NET</td>
				<td class="TableMainC"><br/><a href="/downloads/archetypeeditor/home">Download and help pages</a><br/></td>
				<td class="TableMainC"><a href="https://github.com/openEHR/arch_ed-dotneti">openEHR/arch_ed-dotnet@Github</a></td>
			</tr>
			<tr>
				<td class="TableMainC"><em>LinkEHR Editor</em></td>
				<td class="TableMainC">The LinkEHR AOM 1.4 Editor works with multiple reference models and languages. Reference models can be plugged in in XML-schema or openEHR BMM (basic meta-model) format.</td>
				<td class="TableMainC">Java; all platforms.</td>
				<td class="TableMainC"><br/><a href="http://pangea.upv.es/linkehr/">Download and help pages</a><br/></td>
				<td class="TableMainC"></td>
			</tr>
			<tr>
				<td class="TableMainC"><em>ADL Text Editor Modes</em></td>
				<td class="TableMainC">ADL syntax plug-ins, syntax files and other support for text editors, including gvim/vim, emacs, Notepad++, Textpad, and Kate/KDevelop.</td>
				<td class="TableMainC">All platforms</td>
				<td class="TableMainC"><a href="http://www.openehr.org/wiki/display/dev/ADL+Text+Editors">Download and help page</a></td>
				<td class="TableMainC"></td>
			</tr>
			<tr>
				<td class="TableMainC"><em>LiU Archetype Editor</em></td>
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
				Requires Java. Please read the <a href="http://svn.openehr.org/liu_knowledge_tools/TRUNK/LiU-Archetype-Editor/doc/readme.html">release notes</a> before installation.<br/>
				</td>
				<td class="TableMainC">For further information about support mailing lists, source code, other versions etc see: <a href="http://www.imt.liu.se/mi/ehr/tools/">LiU tools page</a>
				</td>
			</tr>
			</tbody>
			</table>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>