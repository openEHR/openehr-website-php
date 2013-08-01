<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'Guidelines and DS';

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
				<td class="TableMainC">GDL Tools</td>
				<td class="TableMainC"><p>Tools for guideline definition using Guideline Definition Language (GDL), a proposed new language based on ADL. GitHub project repository <a href="https://github.com/openEHR/gdl-tools/wiki">here</a>. Current GDL specification draft (<a href="https://github.com/openEHR/gdl-tools/blob/master/cds/docs/specs/gdl-specs.pdf?raw=true">PDF</a>).</p></td>
				<td class="TableMainC">Java</td>
				<td class="TableMainC"><br/><a href="http://sourceforge.net/projects/gdl-editor/">Download page</a><br/><br/></td>
			</tr>
			</tbody>
			</table>

<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>