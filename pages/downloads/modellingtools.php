<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'Modelling Tools';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<table class="TableBasic">
			<tbody>
			<tr>
				<th>Project</th>
				<th>Description</th>
				<th>Technology</th>
				<th>Download</th>
				<th>Dev project</th>
			</tr>
			<tr>
				<td><em>ADL 2 workbench (AWB)</em></td>
				<td>Reference model-driven visual IDE for parsing, compiling, analysing, converting and editing ADL 1.4 and ADL 2 archetypes and templates. Built on the reference ADL parser.</td>
				<td>Source: Eiffel 14.05; builds available for Windows, Linux and Mac OSX.</td>
				<td><a href="/downloads/ADLworkbench/home">Download and help pages</a></td>
				<td><a href="https://github.com/openEHR/adl-tools/wiki" target="_blank">openEHR/adl-tools@Github</a></td>
			</tr>
			<tr>
				<td><em>ADL 2 command-line compiler (ADLC)</em></td>
				<td>A command-line version of the compiler used inside the ADL Workbench</td>
				<td>Source: Eiffel 14.05; builds available for Windows, Linux and Mac OSX.</td>
				<td><a href="/downloads/ADLworkbench/home">Download and help pages</a></td>
				<td><a href="https://github.com/openEHR/adl-tools/wiki" target="_blank">openEHR/adl-tools@Github</a></td>
			</tr>
			<tr>
				<td><em>Archetype Editor (AE)</em></td>
				<td>The Archetype Editor is currently the main tool in use for authoring openEHR ADL 1.4 archetypes as found on openEHR CKM and elsewhere. It is Unicode-enabled and works with archetypes in any language. The editor application has been localised to several languages, including Danish, English, Farsi, German, Japanese, Russian, Spanish, Swedish and Turkish.</td>
				<td>Microsoft VB.NET</td>
				<td><br/><a href="/downloads/archetypeeditor/home">Download and help pages</a><br/></td>
				<td><a href="https://github.com/openEHR/arch_ed-dotnet" target="_blank">openEHR/arch_ed-dotnet@Github</a></td>
			</tr>
			<tr>
				<td><em>Template Designer</em></td>
				<td>The Template Designer is based on the open .oet format in use with ADL 1.4 archetypes.</td>
				<td>.Net; Windows.</td>
				<td><br/><a href="/download_files/TemplateDesigner/TemplateDesignerSetup_2.6.1213.3.exe">TemplateDesignerSetup_2.6.1213.3.exe (EN)</a><br/></td>
				<td>(Open source Git repo coming soon)</td>
			</tr>
			<tr>
				<td><em>LinkEHR Editor</em></td>
				<td>The LinkEHR AOM 1.4 Editor works with multiple reference models and languages. Reference models can be plugged in in XML-schema or openEHR BMM (basic meta-model) format.</td>
				<td>Java; all platforms.</td>
				<td><br/><a href="http://pangea.upv.es/linkehr/" target="_blank">Download and help pages</a><br/></td>
				<td></td>
			</tr>
			<tr>
				<td><em>ADL Text Editor Modes</em></td>
				<td>ADL syntax plug-ins, syntax files and other support for text editors, including gvim/vim, emacs, Notepad++, Textpad, and Kate/KDevelop.</td>
				<td>All platforms</td>
				<td><a href="http://www.openehr.org/wiki/display/dev/ADL+Text+Editors" target="_blank">Download and help page</a></td>
				<td></td>
			</tr>
			<tr>
				<td><em>LiU Archetype Editor</em></td>
				<td>Part of the Link&ouml;ping University Project to build openEHR tools and demonstrators</td>
				<td>Java</td>
				<td><br/><a href="http://www.imt.liu.se/mi/ehr/" target="_blank"> LiU</a> Archetype Editor, <br/>version 0.5.2 (2007 March 20)&nbsp;
				<ul>
					<li>
					<a href="http://www.imt.liu.se/mi/ehr/tools/LiU-Archetype-Editor-0.5.2-bin.zip">LiU-Archetype-Editor-0.5.2-bin.zip</a>
					(Windows etc.)</li>
					<li>
					<a href="http://www.imt.liu.se/mi/ehr/tools/LiU-Archetype-Editor-0.5.2-bin.tar.gz">LiU-Archetype-Editor-0.5.2-bin.tar.gz</a>
					(Unix, Linux etc.)</li>
				</ul>
				Requires Java. Please read the <a href="http://svn.openehr.org/liu_knowledge_tools/TRUNK/LiU-Archetype-Editor/doc/readme.html" target="_blank">release notes</a> before installation.<br/>
				</td>
				<td>For further information about support mailing lists, source code, other versions etc see: <a href="http://www.imt.liu.se/mi/ehr/tools/" target="_blank">LiU tools page</a>
				</td>
			</tr>
			</tbody>
			</table>
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>
