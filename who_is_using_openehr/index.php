<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

	<title>openEHR - Who is using openEHR?</title>
	<link rel="bookmark" href="http://www.openehr.org/who_is_using_openehr" title="openEHR - Who is using openEHR?">
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

	<div id="MainArea" style="height:450px;">
	
		<div id="SideMenu">
			<?php include 'menu.php' ?>
		</div>
	
		<div id="TextArea">
		
			<h1>Who is using openEHR?</h1>
			<br/>
			<ul>
			<li><a href="healthcare_providers_and_authorities">Healthcare Providers and Authorities</a></li>
			<li><a href="funded_research_projects">Funded Research Projects</a></li>
			<li><a href="nonprofit_and_open_source_organisation">Non-profit and Open Source Organisations</a></li>
			<li><a href="governments">Governments</a></li>
			<li><a href="academic_research">Academic Research</a></li>
			</ul>
		
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
