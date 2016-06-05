<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Guidelines and DS';

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
				<th>Technology</th>
				<th>Download</th>
			</tr>	
			<tr>
				<td>GDL Tools</td>
				<td>Tools for guideline definition using Guideline Definition Language (GDL), a proposed new language based on ADL. GitHub project repository <a href="https://github.com/openEHR/gdl-tools/wiki" target="_blank">here</a>. Current GDL specification draft (<a href="https://github.com/openEHR/gdl-tools/blob/master/cds/docs/specs/gdl-specs.pdf?raw=true" target="_blank">PDF</a>).</td>
				<td>Java</td>
				<td><a href="http://sourceforge.net/projects/gdl-editor/" target="_blank">Download page</a></td>
			</tr>
			</tbody>
			</table>

<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
