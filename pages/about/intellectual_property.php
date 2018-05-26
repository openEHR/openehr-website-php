<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Intellectual Property';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
			
			<h1><?php echo "$PageName";?></h1>
			<p>This page describes the principles and formal conditions on the use of openEHR IP, and of openEHR's use of 3rd party IP, including such things as terminology.</p>
			
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
			
			<h2>openEHR IP</h2>
			<p>The three areas of work that constitute the main Foundation IP are available for use according to the following:</p>
			
			<table class="TableBasic">
			<tbody>
			<tr>
				<th>Asset</th>
				<th>Description</th>
				<th>Copyright</th>
				<th>Licence</th>
			</tr>
			<tr>
				<td><em>Specification</em></td>
				<td>Official specifications of the Foundation</td>
				<td>openEHR Foundation</td>
				<td>Creative Commons CC-BY-ND. <a href="/programs/specification/iplicense">Details</a></td>
			</tr>
			<tr>
				<td><em>Clinical Models</em></td>
				<td>Archetypes, Templates and Terminology subsets developed by the community</td>
				<td>openEHR Foundation</td>
				<td>Creative Commons for organisational and individual use. CC-BY-(SA) The Share Alike (SA) is specifically applied to derived archatypes and templates only. <a href="/programs/clinicalmodels/iplicense">Details</a></td>
			</tr>
			<tr>
				<td><em>Software</em></td>
				<td>Software with IP rights ascribed to the openEHR Foundation</td>
				<td>openEHR Foundation, or original authoring organisation</td>
				<td>Generally, Apache 2 License <a href="/programs/software/iplicense">Details</a></td>
			</tr>
			</tbody>
			</table>
			
			<h2>3rd Party IP</h2>
			<p>Third-party IP is <i>referenced</i> in various ways within openEHR artefacts, primarily archetypes and templates. Such references do not generally constitute <i>use</i> of the 3rd-party IP as envisaged by its publishers, however <i>use</i> of the relevant openEHR artefacts (for example, in production health information systems) may well entail <i>use</i> of the referenced 3rd party IP, e.g. terminology codes. The developers of such deployments must therefore accept responsibility for ensuring legal use of relevant third party IP.</p>
			<p>The openEHR Foundation has formal bilateral or unilateral agreements to reference the following types of IP in its published artefacts:</p>
			<ul>
				<li><a href="snomed_ct_ip">SNOMED CT terminology</a></li>
			</ul>

<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
