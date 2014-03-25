<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Propriedade Intelectual';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
			
			<h1><?php echo "$PageName";?></h1>
			
			<h2>Licence Overview</h2>
			<p>The three areas of work that constitute the main Foundation IP will be licensed in the  following manner:</p>
			
			<table class="TableBasic">
			<tbody>
			<tr>
				<th>Asset</th>
				<th>Description</th>
				<th>Licence</th>
			</tr>
			<tr>
				<td><em>Specification</em></td>
				<td>Official specifications of the Foundation</td>
				<td>Copyright openEHR Foundation, licensed under Creative Commons CC-BY-ND. <a href="/pt/programs/specification/iplicense">Details</a></td>
			</tr>
			<tr>
				<td><em>Clinical Models</em></td>
				<td>Archetypes, Templates and Terminology subsets developed by the community</td>
				<td>Creative Commons for organisational and individual use. CC-BY-(SA) The Share Alike (SA) is specifically applied to derived archatypes and templates only. <a href="/pt/programs/clinicalmodels/iplicense">Details</a></td>
			</tr>
			<tr>
				<td><em>Software</em></td>
				<td>Software with IP rights ascribed to the openEHR Foundation</td>
				<td>Apache 2 License. <a href="/pt/programs/software/iplicense">Details</a></td>
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
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>