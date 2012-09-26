<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title>openEHR - Logos</title>
	<link rel="bookmark" href="http://www.openehr.org/about/logos" title="openEHR - Logos">
	<?php include '../panel/headpanel.php' ?>
</head>


<body>

<div id="MainFrame">
	
	<div id="TopPanel">
		<?php include '../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu">
	
		<div class="nav">
			<?php include '../menu/topmenu.php' ?>
		</div>
		
	</div> 

	<div id="MainArea">
	
		<div id="SideMenu">
			<?php include 'menu/aboutmenu.php' ?>
		</div>
		
		<div id="TextArea">
			
			<h1>Logos</h1>
			<br/>
			<p>There are various versoins of the openEHR logo in use as shown below.</p>
			
			
			<h2>Specification for fonts</h2>
			<p>Lucida Sans Italic and Lucida Sans Demibold</p>
			
			
			<h2>Specification for fonts</h2>
			<p>Orange: RGB = 250, 151, 57 [FA9739]; HSV = 29, 77, 98</p>
			<p>Blue: RGB = 0, 53, 95 [00355F]; HSV = 206, 100, 37</p>
			<br/>
			
			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT">&nbsp;</th>
				<th class="TableMainT">Technical specification</th>
				<th class="TableMainT">Uses</th>
			</tr>
			<tr> 
				<th class="TableMainC"><img src="../files/logodoc.jpeg"></th>
				<td class="TableMainC">457x155 PNG</td>
				<td class="TableMainC">Documents, mainly for web publishing, ok for basic printing</td>
			</tr>
			<tr>
				<th class="TableMainC"><img src="../files/logoweb.png"></td>
				<th class="TableMainC">150x50 PNG</td>
				<th class="TableMainC">Web sites</td>
			</tr>
			</tbody>
			</table>
			
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