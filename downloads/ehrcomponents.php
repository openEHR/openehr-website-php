<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'EHR Components';

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
			</tr>	
			<tr>
				<td class="TableMainC">open EHR-Gen</td>
				<td class="TableMainC"><p>A framework for generating medical record systems based on openEHR</p></td>
				<td class="TableMainC"> Grails, Groovy, Java</td>
				<td class="TableMainC"><br/><a href="http://translate.google.com/translate?sl=es&tl=en&js=n&prev=_t&hl=es&ie=UTF-8&eotf=1&u=http%3A%2F%2Fcode.google.com%2Fp%2Fopen-ehr-gen-framework%2F">Download page</a><br/><br/></td>
			</tr>
			<tr>
				<td class="TableMainC">Java Reference Implementation of openEHR</td>
				<td class="TableMainC"><p>A reference implementation of openEHR reference model, archetype model and other core semantics. This library is the core of most other Java implementations of openEHR.</p></td>
				<td class="TableMainC">Java</td>
				<td class="TableMainC"><br/><a href="http://www.openehr.org/wiki/display/projects/Java+Project+Download">Download page</a><br/><br/></td>
			</tr>
			</tbody>
			</table>

<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>