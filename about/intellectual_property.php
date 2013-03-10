<?php
$PageName = 'Intellectual Property';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

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
			<?php include 'menu.php' ?>
		</div>
		
		<div id="TextArea">
			
			<h1><?php echo "$PageName";?></h1>
			
			<h2>Licence Overview</h2>
			<p>The three areas of work that constitute the main Foundation IP will be licensed in the  following manner:</p>
			
			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT">Asset</th>
				<th class="TableMainT">Description</th>
				<th class="TableMainT">Licence</th>
			</tr>
			<tr>
				<td class="TableMainC"><em>Specification</em></td>
				<td class="TableMainC">Official specifications of the Foundation</td>
				<td class="TableMainC">Copyright openEHR Foundation, licensed under Creative Commons CC-BY-ND. <a href="../programs/specification/iplicense">Details</a></td>
			</tr>
			<tr>
				<td class="TableMainC"><em>Clinical Models</em></td>
				<td class="TableMainC">Archetypes, Templates and Terminology subsets developed by the community</td>
				<td class="TableMainC">Creative Commons for organisational and individual use. CC-BY-(SA) The Share Alike (SA) is specifically applied to derived archatypes and templates only. <a href="../programs/clinicalmodels/iplicense">Details</a></td>
			</tr>
			<tr>
				<td class="TableMainC"><em>Software</em></td>
				<td class="TableMainC">Software with IP rights ascribed to the openEHR Foundation</td>
				<td class="TableMainC">Apache 2 License. <a href="../programs/software/iplicense">Details</a></td>
			</tr>
			</tbody>
			</table>
			
			<h2>Principles</h2>
			<p>Licensing of openEHR artefacts is based on following principles:</p>
			<ul>
				<li>openEHR Specifications, Software and Clinical Models (archetypes, templates and terminology subsets) available at no cost.</li>
				<li>Specifications, open source software and Clinical Models can be used without restriction in commercial products.</li>
				<li>Protection to ensure that authoring of derivative models (archetypes, templates and terminology subsets) by one party does not in any way limit the rights of others to create those same models.</li>
				<li>Forms or other software artefacts using the models as inputs can be protected in the same way as any other work is protected commercially.</li>
				<li>Query languages using the models may be freely developed and protected commercially without restriction.</li>
				<li>The IP of the specifications of models (e.g. openEHR Reference Model, Archetype formalism etc) is protected by the Foundation independently of physical expressions (e.g. ADL, XML etc), which are typically not definitive and may be licensed more openly.</li>
				<li>Require Contributors to declare if there are any current or future IP or patent claims in any content being contributed.</li>
				<li>Have formal agreement to use any measurement scales (eg Glasgow Coma, Braden etc) if required.</li>
				<li>Have a formal agreement to use any terminology codes, value sets and reference sets where required.</li>
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
	
<?php include '../panel/scriptpanel.php' ?>

</body>

</html>