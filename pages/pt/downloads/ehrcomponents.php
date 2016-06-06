<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Componentes EHR';

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
			</tr>
			<tr>
				<td>EhrScape</td>
				<td>openEHR health data platform, providing a rich service framework that allows you to build innovative health apps in a web friendly environment.</td>
				<td> Java</td>
				<td><a href="https://www.ehrscape.com/" target="_blank">EhrScape.com</a></td>
			</tr>
			<tr>
				<td>adl2-core</td>
				<td>A reference implementation of openEHR reference model, archetype model and other core ADL/AOM 2 semantics. This library is the core of ADL2 Java implementations of openEHR.</td>
				<td> Java</td>
				<td><a href="https://github.com/openEHR/adl2-core/" target="_blank">adl2-core@GitHub</a></td>
			</tr>
			<tr>
				<td>open EHR-Gen</td>
				<td>Um framework para gerar registros eletrônicos de saúde baseado em openEHR</td>
				<td> Grails, Groovy, Java</td>
				<td><a href="http://code.google.com/p/open-ehr-gen-framework/" target="_blank">Página de Download</a></td>
			</tr>
			<tr>
				<td>Implementação de referência openEHR em Java</td>
				<td>A implementação de referência do modelo openEHR, modelo de arquétipo e outros núcloes semanticos. Esta biblioteca é o núcleo da maioria das outras implementações de Java que implementam openEHR.</td>
				<td>Java</td>
				<td><a href="http://www.openehr.org/wiki/display/projects/Java+Project+Download" target="_blank">Página de Download</a></td>
			</tr>
			</tbody>
			</table>

<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>
