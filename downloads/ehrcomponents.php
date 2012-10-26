<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

	<title>openEHR - EHR Components</title>
	<link rel="bookmark" href="http://www.openehr.org/downloads/ehrcomponents" title="openEHR - Downloads: EHR Components">
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
			<?php $current = 3; include 'menu/downloadsmenu.php' ?>
		</div>
		
		<div id="TextArea" style="height:450px;">
		
			<h1>EHR Components</h1>
			<br/>
			
			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT" style="width:250px;">Project</th>
				<th class="TableMainT" style="width:400px;">Download</th>
			</tr>	
			<tr>
				<td class="TableMainC">Java Reference Implementation of openEHR</td>
				<td class="TableMainC"><br/><a href="http://www.openehr.org/wiki/display/projects/Java+Project+Download">Download page</a><br/><br/></td>
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