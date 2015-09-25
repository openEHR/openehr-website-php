<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Modelling Tools';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<table class="TableBasic">
			<tbody>
			<tr>
				<th>Project</th>
				<th>Description</th>
				<th>Artefacts</th>
				<th>Technology</th>
				<th>Download/Access</th>
				<th>Dev project</th>
				<th>Status</th>
			</tr>
			<tr>
				<th><em>ADL Designer</em></th>
				<td>The tool allows visual authoring of ADL 2 archetypes and templates including full archetype parsing, validation, flattening and serialisation. Backward compatibility for existing ADL 1.4 archetypes and export to Operational Template (1.4 OPT) is also supported</td>
				<td>ADL 2 archetypes,<br/>templates,<br/>ADL 2 OPTs,<br/>ADL 1.4 OPTs</td>
				<td>web (JavaScript, HTML etc)</td>
				<td><a href="http://ehrscape.marand.si/designer/archetype-editor.html">Archetype Designer</a><br/>
					<a href="http://ehrscape.marand.si/designer/template-editor.html">Template Designer</a>
				</td>
				<td><a href="https://github.com/openEHR/adl-designer" target="_blank">ADL-designer@Github</a></td>
				<td>Supported</td>
			</tr>
			<tr>
				<th><em>Archetype Editor (AE)</em></th>
				<td>The Archetype Editor is currently the main tool in use for authoring archetypes as found on openEHR CKM and elsewhere. It is Unicode-enabled and works with archetypes in any language. The editor application has been localised to several languages, including Danish, English, Farsi, German, Japanese, Russian, Spanish, Swedish and Turkish.</td>
				<td>ADL 1.4 archetypes</td>
				<td>Microsoft VB.NET</td>
				<td><br/><a href="/downloads/archetypeeditor/home">Download and help pages</a><br/></td>
				<td><a href="https://github.com/openEHR/arch_ed-dotnet" target="_blank">openEHR/arch_ed-dotnet@Github</a></td>
				<td>Supported</td>
			</tr>
			<tr>
				<th><em>Template Designer</em></th>
				<td>The Template Designer is the tool required for editing '.oet' (pre-ADL2) templates.</td>
				<td>.oet templates;<br/>ADL 1.4 OPTs;<br/>ADL 1.4 archetypes.</td>
				<td>.Net; Windows.</td>
				<td>
					<br/><a href="/download_files/TemplateDesigner/TemplateDesignerSetup_2.6.1213.3.exe">TemplateDesignerSetup_2.6.1213.3.exe (EN)</a><br/>
					<br/><a href="/download_files/TemplateDesigner/TemplateDesignerSetup_2.8.94.2.exe">TemplateDesignerSetup_2.8.94.2.exe (EN)</a><br/>
				</td>
				<td></td>
				<td>Supported</td>
			</tr>
			<tr>
				<th><em>ADL 2 workbench (AWB)</em></th>
				<td>Reference model-driven visual IDE for parsing, compiling, analysing, converting and editing archetypes and templates. Built on the reference ADL parser.</td>
				<td>ADL 1.4 (read),<br/>ADL 2 archetypes and templates (read/write).</td>
				<td>Windows, Linux and Mac OSX.</td>
				<td><a href="/downloads/ADLworkbench/home">Download and help pages</a></td>
				<td><a href="https://github.com/openEHR/adl-tools/wiki" target="_blank">openEHR/adl-tools@Github</a></td>
				<td>Supported</td>
			</tr>
			<tr>
				<th><em>ADL 2 command-line compiler (ADLC)</em></th>
				<td>A command-line version of the compiler used inside the ADL Workbench</td>
				<td>ADL 1.4 (read),<br/>ADL 2 archetypes and templates (read/write).</td>
				<td>Windows, Linux and Mac OSX.</td>
				<td><a href="/downloads/ADLworkbench/home">Download and help pages</a></td>
				<td><a href="https://github.com/openEHR/adl-tools/wiki" target="_blank">openEHR/adl-tools@Github</a></td>
				<td>Supported</td>
			</tr>
			<tr>
				<th><em>LinkEHR Editor</em></th>
				<td>The LinkEHR Editor works with multiple reference models and languages. Reference models can be plugged in in XML-schema or openEHR BMM (basic meta-model) format.</td>
				<td>AOM 1.4 archetypes</td>
				<td>Java; all platforms.</td>
				<td><br/><a href="http://linkehr.com/" target="_blank">Download and help pages</a><br/></td>
				<td></td>
				<td>Supported</td>
			</tr>
			<tr>
				<th><em>ADL Text Editor Modes</em></th>
				<td>ADL syntax plug-ins, syntax files and other support for text editors, including gvim/vim, emacs, Notepad++, Textpad, and Kate/KDevelop.</td>
				<td></td>
				<td>All platforms</td>
				<td><a href="http://www.openehr.org/wiki/display/dev/ADL+Text+Editors" target="_blank">Download and help page</a></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th><em>LiU Archetype Editor</em></th>
				<td>Part of the Link&ouml;ping University Project to build openEHR tools and demonstrators</td>
				<td>ADL 1.4 archetypes</td>
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
				<td>Unsupported</td>
			</tr>
			</tbody>
			</table>
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
