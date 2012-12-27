<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

	<title>openEHR - Downloads: Appliction Building</title>
	<link rel="bookmark" href="http://www.openehr.org/downloads/applicationbuilding" title="openEHR - Downloads: Application Building">
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
			<?php $current = 4; include 'menu/downloadsmenu.php' ?>
		</div>
		
		<div id="TextArea">
		
			<h1>Application Building</h1>
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
				<td class="TableMainC">TBD</td>
				<td class="TableMainC">TBD</td>
				<td class="TableMainC">TBD</td>
				<td class="TableMainC">TBD</td>
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
