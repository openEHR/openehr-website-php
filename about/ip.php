<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title>openEHR - Intellectual Property</title>
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

	<div id="MainArea">
	
		<div id="SideMenu">
		<?php include 'menu/aboutmenu.php' ?>
		</div>
		
		<div id="TextArea">
			
			<h1>Intellectual Property</h1>
			<h2>Licensing</h2>
			<p>The three areas of work that constitute the main Foundation IP will be licensed in the  following manner:
			<table class="TableMain">
				<tbody>
				<tr>
				<th class="TableMainT">Asset</th>
				<th class="TableMainT">Description</th>
				<th class="TableMainT">License</th>
				</tr>
				<tr>
				<td class="TableMainC"><em>Specification</em></td>
				<td class="TableMainC">Specification for software and processes</td>
				<td class="TableMainC">Copyright openEHR Foundation</td>
				</tr>
				<tr>
				<td class="TableMainC"><em>Software</em></td>
				<td class="TableMainC">Software with IP rights ascribed to the openEHR Foundation</td>
				<td class="TableMainC">Apache 2 License</td>
				</tr>
				<tr>
				<td class="TableMainC"><em>Clinical Models</em></td>
				<td class="TableMainC">Archetypes, Templates and Terminology subsets developed by the community</td>
				<td class="TableMainC">Creative Commons for organisational and individual use. CC-BY-(SA) The Share Alike (SA) is specifically applied to derived archatypes and templates only.</td>
				</tr>
				</tbody>
			</table>
			<br/>
			
			<h2>Principles of licensing</h2>
			<p class="par">Licensing of openEHR artefacts is based on following principles:</p>
			<ul>
			<li>openEHR Specifications, Software and Clinical Models (archetypes, templates and terminology subsets) available at no cost.</li>
			<li>Specifications, open source software and Clinical Models can be used without restriction in commercial products.</li>
			<li>Protection to ensure that authoring of derivative models (archetypes, templates and terminology subsets) by one party does not in any way limit the rights of others to create those same models.</li>
			<li>Forms or other software artefacts using the models as inputs can be protected in the same way as any other work is protected commercially.</li>
			<li>Query languages using the models may be freely developed and protected commercially without restriction.</li>
			<li>The IP of the logical model should be protected by the Foundation regardless of its physical expression (e.g. ADL, XML etc).</li>
			<li>Require Contributors to declare if there are any current or future IP or patent claims in any content being contributed.</li>
			<li>Have formal agreement to use any measurement scales (eg Glasgow Coma, Braden etc) if required.</li>
			<li>Have a formal agreement to use any terminology codes, value sets and reference sets where required.</li>
			</ul>
			
			<h2>Licensing in Programs</h2>
			<p class="par">For more information about artefacts created in Programs and their licenses, click following links:</p>
			<ul>
				<li><a href="../programs/specification/iplicense">Specification Program licenses</a></li>
				<li><a href="../programs/clinicalmodels/iplicense">Clinical Models Program licenses</a></li>
				<li><a href="../programs/software/iplicense">Software Program licenses</a></li>
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