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
				<th>Tecnologia</th>
				<th>Download</th>
				<th>Projeto Dev</th>
			</tr>
			<tr>
				<td><em>ADL 1.5 workbench (AWB)</em></td>
				<td>IDE visual de referência que utiliza o modelo openEHR permitindo validar (parsing), compilar, analisar, converter e editar arquétipos e templates em ADL 1.4 (Q1 2013) e ADL 1.5. Construído utilizando o ADL parser de referência.</td>
				<td>Códigos fontes: Eiffel 7.2; disponível para Windows, Linux e Mac OSX.</td>
				<td><a href="/downloads/ADLworkbench/home">Download e páginas de ajuda</a></td>
				<td><a href="https://github.com/openEHR/adl-tools/wiki" target="_blank">openEHR/adl-tools@Github</a></td>
			</tr>
			<tr>
				<td><em>Compilador ADL 1.5 por linha de comando (ADLC)</em></td>
				<td>A versão de linha de comando do compilador é usado dentro do ADL Workbench</td>
				<td>Códigos fontes: Eiffel 7.2; disponível para Windows, Linux e Mac OSX.</td>
				<td><a href="/downloads/ADLworkbench/home">Download e páginas de ajuda</a></td>
				<td><a href="https://github.com/openEHR/adl-tools/wiki" target="_blank">openEHR/adl-tools@Github</a></td>
			</tr>
			<tr>
				<td><em>Editor de Arquétipos (AE)</em></td>
				<td>O Editor de Arquétipos é a principal ferramenta em uso atualmente para criação de arquétipos openEHR ADL 1.4 como os encontrados no Gerenciador de Conhecimento Clínico openEHR (CKM) e em outros lugares. É habilitado para Unicode e trabalha com arquétipos em qualquer idioma. Esta aplicação suporta várias línguas, incluindo Dinamarquês, Inglês, Farsi, alemão, japonês, russo, espanhol, sueco e turco.</td>
				<td>Microsoft VB.NET</td>
				<td><br/><a href="/downloads/archetypeeditor/home">Download e páginas de ajuda</a><br/></td>
				<td><a href="https://github.com/openEHR/arch_ed-dotnet" target="_blank">openEHR/arch_ed-dotnet@Github</a></td>
			</tr>
			<tr>
				<td><em>Template Designer</em></td>
				<td>O Template Designer é baseado no formato open .oet usado com arquétipos em ADL 1.4.</td>
				<td>.Net; Windows.</td>
				<td><br/><a href="/download_files/TemplateDesigner/TemplateDesignerSetup_2.6.1213.3.exe">TemplateDesignerSetup_2.6.1213.3.exe (EN)</a><br/></td>
				<td>(Em breve repositório Git aberto)</td>
			</tr>
			<tr>
				<td><em>Editor LinkEHR</em></td>
				<td>O Editor LinkEHR AOM 1.4 trabalha com vários modelos e línguas de referência. Os modelos de referência podem ser conectado em XML-schema ou no formato openEHR BMM (básico meta-modelo).</td>
				<td>Java; todas as plataformas.</td>
				<td><br/><a href="http://pangea.upv.es/linkehr/" target="_blank">Download e páginas de ajuda</a><br/></td>
				<td></td>
			</tr>
			<tr>
				<td><em>Modos de Editor de Texto ADL</em></td>
				<td>ADL plug-ins de sintaxe, arquivos de sintaxe e suporte para outros editores de texto, incluindo o gvim / vim, emacs, Notepad++, Textpad e Kate / KDevelop.</td>
				<td>Todas as plataformas</td>
				<td><a href="http://www.openehr.org/wiki/display/dev/ADL+Text+Editors" target="_blank">Download e páginas de ajuda</a></td>
				<td></td>
			</tr>
			<tr>
				<td><em>LiU Editor de Arquétipo</em></td>
				<td>Parte do Projeto Universidade de Link&ouml;ping para construir ferramentas e demonstradores openEHR</td>
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
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>
