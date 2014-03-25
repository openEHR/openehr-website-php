<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Componentes do RES';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header.php');
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
				<td>open EHR-Gen</td>
				<td>A framework for generating medical record systems based on openEHR</td>
				<td> Grails, Groovy, Java</td>
				<td><a href="http://translate.google.com/translate?sl=es&tl=en&js=n&prev=_t&hl=es&ie=UTF-8&eotf=1&u=http%3A%2F%2Fcode.google.com%2Fp%2Fopen-ehr-gen-framework%2F">Download page</a></td>
			</tr>
			<tr>
				<td>Java Reference Implementation of openEHR</td>
				<td>A reference implementation of openEHR reference model, archetype model and other core semantics. This library is the core of most other Java implementations of openEHR.</td>
				<td>Java</td>
				<td><a href="http://www.openehr.org/wiki/display/projects/Java+Project+Download">Download page</a></td>
			</tr>
			</tbody>
			</table>

<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/pt/_footer.php');?>