<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

	<title>openEHR - Downloads: Applications</title>
	<link rel="bookmark" href="http://www.openehr.org/downloads/applications" title="openEHR - Downloads: Applications">
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
			<?php $current = 2; include 'menu/downloadsmenu.php' ?>
		</div>
		
		<div id="TextArea">
		
			<h1>Application</h1>
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

<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>
