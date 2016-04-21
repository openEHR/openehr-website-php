<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Rastreadores de Problemas';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			
			<h2>Public Issue Trackers</h2>
			<table class="TableBasic">
			<tbody>
				<tr>
					<th>Project</th>
					<th>Project Lead</th>
					<th>Issue Tracker</th>
				</tr>
				<tr>
					<td><em>ADL Workbench - Problem Reports Tracker</em></td>
					<td>Thomas Beale</td>
					<td><a href = "https://openehr.atlassian.net/projects/AWBPR/issues" target = "_blank">AWBPR issue tracker</a></td>
				</tr>	
				<tr>
					<td><em>Archetype Editor - Problem Reports Tracker</em></td>
					<td>Peter Gummer</td>
					<td><a href = "https://openehr.atlassian.net/projects/AEPR/issues" target = "_blank">AEPR issue tracker</a></td>
				</tr>
				<tr>
					<td><em>Template Designer - Problem Reports Tracker</em></td>
					<td>Peter Gummer</td>
					<td><a href = "https://openehr.atlassian.net/projects/TDPR/issues" target = "_blank">TDPR issue tracker</a></td>
				</tr>
			</tbody>
			</table>
			
			<h2>Development Projects</h2>
			<table class="TableBasic">
			<tbody>
				<tr>
					<th>Project</th>
					<th>Project Lead</th>
					<th>Issue Tracker</th>
				</tr>
				<tr>
					<td><em>ADL Workbench</em></td>
					<td>Thomas Beale</td>
					<td><a href = "https://openehr.atlassian.net/projects/AWB/issues" target = "_blank">AWB issue tracker</a></td>
				</tr>
				<tr>
					<td><em>Clinical Model Designer</em></td>
					<td>Thomas Beale</td>
					<td><a href = "https://openehr.atlassian.net/projects/CMD/issues" target = "_blank">CMD issue tracker</a></td>
				</tr>
				<tr>
					<td><em>GDL Editor</em></td>
					<td>Rong Chen</td>
					<td><a href = "https://openehr.atlassian.net/projects/GDLED/issues" target = "_blank">GDLED issue tracker</a></td>
				</tr>
			</tbody>
			</table>
		
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>
