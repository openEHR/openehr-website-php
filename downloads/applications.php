<?php
$PageName = 'Applications';
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
		
		<div id="TextArea">
		
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
				<td class="TableMainC">GastrOS</td>
				<td class="TableMainC"><p>GastrOS is an endoscopic reporting application based on open standards: openEHR and MST. GUI is driven by Archetypes/Templates. It is part of our research at the University of Auckland to investigate software maintainability and interoperability.</p></td>
				<td class="TableMainC">C#, Microsoft .Net</td>
				<td class="TableMainC"><a href="http://gastros.codeplex.com/">GastrOS codeplex homepage</a></td>
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