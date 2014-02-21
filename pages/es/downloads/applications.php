<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Aplicaciones';

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
				<td>GastrOS</td>
				<td>GastrOS is an endoscopic reporting application based on open standards: openEHR and MST. GUI is driven by Archetypes/Templates. It is part of our research at the University of Auckland to investigate software maintainability and interoperability.</td>
				<td>C#, Microsoft .Net</td>
				<td><a href="http://gastros.codeplex.com/">GastrOS codeplex homepage</a></td>
			</tr>
			</tbody>
			</table>
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_footer.php');?>