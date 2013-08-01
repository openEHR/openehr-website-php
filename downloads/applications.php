<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'Applications';

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
				<td class="TableMainC">GastrOS</td>
				<td class="TableMainC"><p>GastrOS is an endoscopic reporting application based on open standards: openEHR and MST. GUI is driven by Archetypes/Templates. It is part of our research at the University of Auckland to investigate software maintainability and interoperability.</p></td>
				<td class="TableMainC">C#, Microsoft .Net</td>
				<td class="TableMainC"><a href="http://gastros.codeplex.com/">GastrOS codeplex homepage</a></td>
			</tr>
			</tbody>
			</table>
			
	<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>