<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Componentes de la HCE';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_header.php');
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
				<td>A framework for generating medical record systems based on openEHR</td>
				<td> Grails, Groovy, Java</td>
				<td><a href="http://code.google.com/p/open-ehr-gen-framework/" target="_blank">Download page</a></td>
			</tr>
			<tr>
				<td>Java Reference Implementation of openEHR</td>
				<td>A reference implementation of openEHR reference model, archetype model and other core semantics. This library is the core of most other Java implementations of openEHR.</td>
				<td>Java</td>
				<td><a href="http://www.openehr.org/wiki/display/projects/Java+Project+Download" target="_blank">Download page</a></td>
			</tr>
			</tbody>
			</table>


<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/es/_footer.php');?>