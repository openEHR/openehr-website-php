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
				<th class="TableMainT">Project</th>
				<th class="TableMainT">Description</th>
				<th class="TableMainT">Technology</th>
				<th class="TableMainT">Download</th>
			</tr>	
			<tr>
				<td class="TableMainC">open EHR-Gen</td>
				<td class="TableMainC"><p>A framework for generating medical record systems based on openEHR</p></td>
				<td class="TableMainC"> Grails, Groovy, Java</td>
				<td class="TableMainC"><br/><a href="http://translate.google.com/translate?sl=es&tl=en&js=n&prev=_t&hl=es&ie=UTF-8&eotf=1&u=http%3A%2F%2Fcode.google.com%2Fp%2Fopen-ehr-gen-framework%2F">Download page</a><br/><br/></td>
			</tr>
			<tr>
				<td class="TableMainC">Java Reference Implementation of openEHR</td>
				<td class="TableMainC"><p>A reference implementation of openEHR reference model, archetype model and other core semantics. This library is the core of most other Java implementations of openEHR.</p></td>
				<td class="TableMainC">Java</td>
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
