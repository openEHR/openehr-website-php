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
			
			<h1>Academic Solutions</h1>
			<p>Following table provides an overview of possible academic solutions based on openEHR.
			
			<h2>Table explanation</h2>
		
			<span style="font-size:30px; color:#009933; font-weight:900;">&nu;</span> - Organisation provides solution in that category<br/>
			<br/>
			
			<table class="TableMain">
			<tbody>
			<tr>
			<th class="TableMainT" style="text-align:center;">Organisation</th>
			<th class="TableMainT" style="text-align:center;">More<br/>information</th>
			<th class="TableMainT" style="text-align:center;"><a href="solutionshome#MT">Modelling<br/>Tools</a></th>
			<th class="TableMainT" style="text-align:center;"><a href="solutionshome#MM">Model<br/>Manag.</a></th>
			<th class="TableMainT" style="text-align:center;"><a href="solutionshome#IT">Implement.<br/>Tools</a></th>
			<th class="TableMainT" style="text-align:center;"><a href="solutionshome#OS">Operational<br/>Solutions</a></th>
			<th class="TableMainT" style="text-align:center;"><a href="solutionshome#Ap">Applicat.</a></th>
			<th class="TableMainT" style="text-align:center;"><a href="solutionshome#Se">Services</a></th>
			<th class="TableMainT" style="text-align:center;"><a href="solutionshome#Hdp">Health Data<br/>Persistence</a></th>
			</tr>
			<tr>
			<td class="TableMainC" style="text-align:center;"></td>
			<td class="TableMainC" >XXX</td>
			<td class="TableMainC" style="text-align:center;"></td>
			<td class="TableMainC" style="text-align:center;"></td>
			<td class="TableMainC" style="text-align:center;"></td>
			<td class="TableMainC" style="text-align:center;"></td>
			<td class="TableMainC" style="text-align:center;"></td>
			<td class="TableMainC" style="text-align:center;"></td>
			<td class="TableMainC" style="text-align:center;"><span style="font-size:30px; color:#009933; font-weight:900;">&nu;</span></td>
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
