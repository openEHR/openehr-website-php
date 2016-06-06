<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Feramentas de Modelagem';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<table class="TableBasic">
			<tbody>
			<tr>
				<th>Projeto</th>
				<th>Descrição</th>
				<th>Artefactos</th>
				<th>Tecnologia</th>
				<th>Download</th>
				<th>Projeto Dev</th>
			</tr>
			<tr>
				<th><em>ADL Designer</em></th>
				<td>The tool allows visual authoring of ADL 2 archetypes and templates including full archetype parsing, validation, flattening and serialisation. Backward compatibility for existing ADL 1.4 archetypes and export to Operational Template (1.4 OPT) is also supported</td>
				<td>ADL 2 archetypes,<br/>templates,<br/>ADL 2 OPTs,<br/>ADL 1.4 OPTs</td>
				<td>web (JavaScript, HTML etc)</td>
				<td><a href="http://ehrscape.marand.si/designer/" target="_blank">Archetype Designer</a><br/>
					<a href="http://ehrscape.marand.si/designer/" target="_blank">Template Designer</a>
				</td>
				<td><a href="https://github.com/openEHR/adl-designer" target="_blank">ADL-designer@Github</a></td>
			</tr>
			<tr>
				<th><em>Editor de Arquétipos (AE)</em></th>
				<td>O Editor de Arquétipos é a principal ferramenta em uso atualmente para criação de arquétipos openEHR ADL 1.4 como os encontrados no Gerenciador de Conhecimento Clínico openEHR (CKM) e em outros lugares. É habilitado para Unicode e trabalha com arquétipos em qualquer idioma. Esta aplicação suporta várias línguas, incluindo Dinamarquês, Inglês, Farsi, alemão, japonês, russo, espanhol, sueco e turco.</td>
				<td>ADL 1.4 Arquétipos</td>
				<td>Microsoft VB.NET</td>
				<td><br/><a href="/downloads/archetypeeditor/home">Download e páginas de ajuda</a><br/></td>
				<td><a href="https://github.com/openEHR/arch_ed-dotnet" target="_blank">openEHR/arch_ed-dotnet@Github</a></td>
			</tr>
			<tr>
				<th><em>Template Designer</em></th>
				<td>The Template Designer is the tool required for editing '.oet' (pre-ADL2) templates.</td>
				<td>.oet templates;<br/>ADL 1.4 OPTs;<br/>ADL 1.4 archetypes.</td>
				<td>.Net; Windows.</td>
				<td>
					<br/><a href="/download_files/TemplateDesigner/TemplateDesignerSetup_2.6.1213.3.exe">TemplateDesignerSetup_ 2.6.1213.3.exe (EN)</a><br/>
					<br/><a href="/download_files/TemplateDesigner/TemplateDesignerSetup_2.8.94.2.exe">TemplateDesignerSetup_ 2.8.94.2.exe (EN)</a><br/>
				</td>
				<td></td>
			</tr>
			<tr>
				<th><em>ADL 2 workbench (AWB)</em></th>
				<td>Reference model-driven visual IDE for parsing, compiling, analysing, converting and editing archetypes and templates. Built on the reference ADL parser.</td>
				<td>ADL 1.4 (read),<br/>ADL 2 archetypes and templates (read/write).</td>
				<td>Windows, Linux and Mac OSX.</td>
				<td><a href="/downloads/ADLworkbench/home">Download and help pages</a></td>
				<td><a href="https://github.com/openEHR/adl-tools/wiki" target="_blank">openEHR/adl-tools@Github</a></td>
			</tr>
			<tr>
				<th><em>ADL 2 command-line compiler (ADLC)</em></th>
				<td>A command-line version of the compiler used inside the ADL Workbench</td>
				<td>ADL 1.4 (read),<br/>ADL 2 archetypes and templates (read/write).</td>
				<td>Windows, Linux and Mac OSX.</td>
				<td><a href="/downloads/ADLworkbench/home">Download and help pages</a></td>
				<td><a href="https://github.com/openEHR/adl-tools/wiki" target="_blank">openEHR/adl-tools@Github</a></td>
			</tr>
			<tr>
				<th><em>Editor LinkEHR</em></th>
				<td>O Editor LinkEHR trabalha com vários modelos e línguas de referência. Os modelos de referência podem ser conectado em XML-schema ou no formato openEHR BMM (básico meta-modelo).</td>
				<td>.oet templates;<br/>ADL 1.4 OPTs;<br/>ADL 1.4 Arquétipos.</td>
				<td>Java; todas as plataformas.</td>
				<td><br/><a href="http://pangea.upv.es/linkehr/" target="_blank">Download e páginas de ajuda</a><br/></td>
				<td></td>
			</tr>
			<tr>
				<th><em>Modos de Editor de Texto ADL</em></th>
				<td>ADL plug-ins de sintaxe, arquivos de sintaxe e suporte para outros editores de texto, incluindo o gvim / vim, emacs, Notepad++, Textpad e Kate / KDevelop.</td>
				<td></td>
				<td>Todas as plataformas</td>
				<td><a href="http://www.openehr.org/wiki/display/dev/ADL+Text+Editors" target="_blank">Download e páginas de ajuda</a></td>
				<td></td>
			</tr>
			<tr>
				<th><em>LiU Editor de Arquétipo*</em></th>
				<td>Parte do Projeto Universidade de Link&ouml;ping para construir ferramentas e demonstradores openEHR</td>
				<td>ADL 1.4 Arquétipos</td>
				<td>Java</td>
				<td><br/><a href="http://www.imt.liu.se/mi/ehr/" target="_blank"> LiU</a> Editor de Arquétipos, <br/>versão 0.5.2 (20 de Março de 2007)&nbsp;
				<ul>
					<li>
					<a href="http://www.imt.liu.se/mi/ehr/tools/LiU-Archetype-Editor-0.5.2-bin.zip">LiU-Archetype-Editor-0.5.2-bin.zip</a>
					(Windows etc.)</li>
					<li>
					<a href="http://www.imt.liu.se/mi/ehr/tools/LiU-Archetype-Editor-0.5.2-bin.tar.gz">LiU-Archetype-Editor-0.5.2-bin.tar.gz</a>
					(Unix, Linux etc.)</li>
				</ul>
				Java é requerido. Por favor, leia <a href="http://svn.openehr.org/liu_knowledge_tools/TRUNK/LiU-Archetype-Editor/doc/readme.html" target="_blank">as notas de lançamento</a> antes da instalação.<br/>
				</td>
				<td>Para mais informações sobre as listas de apoio de discussão, códigos-fontes, outras versões, etc., veja: <a href="http://www.imt.liu.se/mi/ehr/tools/" target="_blank">Página de Ferramentas LiU</a>
				</td>
			</tr>
			</tbody>
			</table>
			<p>* Status: unsupported</p>
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>
