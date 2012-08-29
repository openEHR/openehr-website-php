<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title>openEHR - Obtaining Solutions</title>
	<?php include '../../panel/headpanel.php' ?>
</head>


<body>

<div id="MainFrame">
	
	<div id="TopPanel">
	<?php include '../../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu" style="text-align:left">
		
		<div class="nav">
   		<?php include '../../menu/topmenu.php' ?>
		</div>
	</div> 

	<div id="MainArea">
	
		<div id="SideMenu">
		<?php include 'menu/solutionsmenu.php' ?>
		</div>
		
		<div id="TextArea">
			
			<h1>Applications Registry</h1>
			<p>The following table lists openEHR conformant applications.</p>
			
			<h2>Table explanation</h2>
		
			<table class="TableMain">
			<tbody>
			<tr>
			<th class="TableMainT" style="text-align:center;">App name</th>
			<th class="TableMainT" style="text-align:center;">App<br/>description</th>
			<th class="TableMainT" style="text-align:center;">Developer</th>
			</tr>
			<tr>
			<td class="TableMainC" style="text-align:center;"></td>
			<td class="TableMainC" style="text-align:center;"></td>
			<td class="TableMainC" style="text-align:center;"></td>
			</tr>
			</tbody>
			</table>
		
			
		</div>
			

	</div>

	<div id="BottomMenu">
	<?php include '../../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
	<?php include '../../panel/bottompanel.php' ?>
	</div>

</div>
	
<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>
