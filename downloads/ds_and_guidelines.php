<?php
$PageName = 'Guidelines and Decision Support';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

	<?php include '../panel/headpanel.php' ?>
	
</head>

<body>

<div id="MainFrame">
	
	<div id="TopPanel">
		<?php include '../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu" style="text-align:left">
	
		<div class="nav">
			<?php include '../menu/topmenu.php' ?>
		</div>
		
	</div> 

	<div id="MainArea" style="height:450px">
		
		<div id="SideMenu">
			<?php include 'menu.php' ?>
		</div>
		
		<div id="TextArea" style="height:450px;">
		
			<h1><?php echo "$PageName";?></h1>
			<br/>
			
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
			<br/>
		
		</div>

	</div>

	<div id="BottomMenu">
		<?php include '../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
		<?php include '../panel/bottompanel.php' ?>
	</div>

</div>

<?php include '../panel/scriptpanel.php' ?>

</body>

</html>
