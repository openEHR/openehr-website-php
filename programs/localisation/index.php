<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

	<title>openEHR - Localisation Program</title>
	<link rel="bookmark" href="http://www.openehr.org/programs/localisation" title="openEHR - Localisation Program">
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
			<?php include 'menu/localisationmenu.php' ?>
		</div>
		
		<div id="TextArea">
			
			<h1>Localisation Program</h1>
			<br/>
			<p>The Localisation Programme is aimed at reaching out and supporting local openEHR communities worldwide in order to bring about more effective and concerted dissemination of the openEHR vision and methods. Work typically involves translation and adaptation of specifications and related artifacts or creating of their extensions as well as development of new content. The Programme also includes activities related to promotion, education and training, research and seeking funding. </p>
			
			
			<h2>Goals</h2>
			<p>Goals of the Programme are:</p>
			<ul>
				<li>Create awareness and enthusiasm at all levels (e.g. vendor, government, academia and individuals) in every corner of the world</li>
				<li>Work with other local organisations (especially SDOs) by adopting a culture of openness and collaboration</li>
				<li>Increase adoption of openEHR in national, regional and specific initiatives</li>
				<li>Provide leadership and support to local communities</li>
				<li>Translate and adapt openEHR artefacts in order to suit local needs</li>
				<li>Feed local learnings back to openEHR and add more great people and organisations to the larger openEHR community</li>
			</ul>
			
			
			<h2>Responsibilities</h2>	
			<p>Responsibilities of the Programme are:</p>
			<ul>
				<li>Help establish local presence and representation</li>
				<li>Provide communication between local community and the openEHR Foundation</li>
				<li>Provide coordination with other Programmes</li>
				<li>Maintain a well balanced group of Qualified Members to undertake various activities </li>
				<li>Support local communities to reach their goals</li>
			</ul>
			<br/>
			<p>The details of the Programme is given in the <a href="governance">Governance Page</a>.</p>
			
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
