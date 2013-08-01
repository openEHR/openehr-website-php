<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'Release 0.95';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>Overview</h2>
			<p>The following table provides access to the deliverables of the openEHR specification project and indicates the current status of each. There are three groups of deliverables, as follows: </p>
			<ul>
				<li><em>Stable</em>: specifications that have been tested in software and are in use in the community;</li>
				<li><em>Trial</em>: specifications that have been worked on by a design group and validated in test software to the point where they are ready for community use on a trial basis;</li>
				<li><em>Development</em>: draft forms of specification documents, made available for the purposes of review, input and experimental use.</li>
			</ul>
			<p><a href="http://www.openehr.org/issues/browse/SPEC/fixforversion/10016" target="_blank">Release notes</a> for this release. The rules for change management between releases are given in the <a href="releasestrategy">Release Strategy</a>.</p>

			
			<h2>Reading Documents</h2>
			<p>Most links in the table below are to Adobe PDF files. All files are in colour. If you do not see them in colour or have other problems reading them, we suggest upgrading to the <a href="http://www.adobe.com/products/acrobat/readstep2.html" target="_blank">latest Acrobat Reader</a>. If you still experience problems with reading PDF files, your browser configuration may need to be adjusted. See the <a href="http://www.adobe.com/support/products/acrreader.html" target="_blank">Adobe Acrobat support page</a> for more help.</p>
			
			
			<h2>Core</h2>
			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT"> Component</th>
				<th class="TableMainT"> Documentary Specification </th>
				<th class="TableMainT"> Computable / formal expressions </th>
				<th class="TableMainT"> Description </th>
				<th class="TableMainT"> Status </th>
			</tr>
			<tr>
				<td class="TableMainC" colspan=5> <b>Requirements</b> </td>
			</tr>
			<tr style="background-color:#F3F8FA;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> Standards conformance </td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/0.95/requirements/iso18308_conformance.pdf" target="_blank">ISO 18308 Conformance Statement</a></td>
				<td class="TableMainC"> &nbsp;</td>
				<td class="TableMainC"> Document describing conformance of openEHR architecture to ISO TS 18308, &quot;Requirements for EHR Architectures&quot;. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC" colspan=5> <b>Architecture</b> </td>
			</tr>
				<tr style="background-color:#FFEECC;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> Reference Model</td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/0.95/architecture/rm/ehr_im.pdf" target="_blank">EHR IM</a> </td>
				<td class="TableMainC"> &nbsp; </td>
				<td class="TableMainC"> The information model of the openEHR EHR. </td>
				<td class="TableMainC"> trial</td>
			</tr>
			<tr style="background-color:#FFEECC;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/0.95/architecture/rm/demographic_im.pdf" target="_blank">Demographic IM</a> </td>
				<td class="TableMainC"> &nbsp; </td>
				<td class="TableMainC"> The openEHR demographic model. </td>
				<td class="TableMainC"> trial</td>
			</tr>
			<tr style="background-color:#FFFFDD;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/0.95/architecture/rm/ehr_extract_im.pdf" target="_blank">EHR Extract IM</a> </td>
				<td class="TableMainC"> &nbsp; </td>
				<td class="TableMainC"> The information model of the EHR Extract, which is a serilialisation of content from an EHR. </td>
				<td class="TableMainC"> development</td>
			</tr>
			<tr style="background-color:#FFEECC;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/0.95/architecture/rm/common_im.pdf" target="_blank">Common IM</a> </td>
				<td class="TableMainC"> &nbsp; </td>
				<td class="TableMainC"> Information model containing common concepts, including the archetype-enabling LOCATABLE class, party references, audits and attestations, change control, and authored resources. </td>
				<td class="TableMainC"> trial</td>
			</tr>
			<tr style="background-color:#FFEECC;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/0.95/architecture/rm/data_structures_im.pdf" target="_blank">Data Structures IM</a> </td>
				<td class="TableMainC"> &nbsp; </td>
				<td class="TableMainC"> Information model of data structures, incuding a powerful model of HISTORY and EVENT. </td>
				<td class="TableMainC"> trial</td>
			</tr>
			<tr style="background-color:#FFEECC;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/0.95/architecture/rm/data_types_im.pdf" target="_blank">Data Types IM</a></td>
				<td class="TableMainC"> &nbsp; </td>
				<td class="TableMainC"> Information model of data types, including quantities, date/times, plain and coded text, time specification, multimedia and URIs. </td>
				<td class="TableMainC"> trial</td>
			</tr>
			<tr style="background-color:#FFEECC;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/0.95/architecture/rm/support_im.pdf" target="_blank">Support IM</a> </td>
				<td class="TableMainC"> &nbsp; </td>
				<td class="TableMainC"> Support model defining identifiers, assumed types, and terminology interface specification used in the rest of the specifications. </td>
				<td class="TableMainC"> trial</td>
			</tr>
			<tr style="background-color:#FFFFDD;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> Archetype Model  </td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/0.95/architecture/am/archetype_system.pdf" target="_blank">Archetype System</a></td>
				<td class="TableMainC"> &nbsp;</td>
				<td class="TableMainC"> Description of system of archetype management and governance. This document will change as a result of current work on archetype ontologies, governance, and logistical management.</td>
				<td class="TableMainC"> development</td>
			</tr>
			<tr style="background-color:#FFFFDD;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/0.95/architecture/am/adl.pdf" target="_blank">Archetype Definition Language 1.2 (ADL)</a></td>
				<td class="TableMainC"> &nbsp; </td>
				<td class="TableMainC"> Abstract syntax specification for archetypes 1.2 edition of language (used in ISO 13606-2). </td>
				<td class="TableMainC"> development</td>
			</tr>
			<tr style="background-color:#FFFFDD;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/0.95/architecture/am/aom.pdf" target="_blank">Archetype Object Model (AOM)</a></td>
				<td class="TableMainC"> &nbsp; </td>
				<td class="TableMainC"> Object model of archetypes corresponding to ADL 1.2</td>
				<td class="TableMainC"> development</td>
			</tr>
			<tr style="background-color:#FFFFDD;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/0.95/architecture/am/openehr_archetype_profile.pdf" target="_blank">openEHR Archetype Profile (OAP)</a></td>
				<td class="TableMainC"> &nbsp; </td>
				<td class="TableMainC"> openEHR plug-in additions to the generic archetype object model.</td>
				<td class="TableMainC"> development</td>
			</tr>
			<tr style="background-color:#FFFFDD;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/0.95/architecture/am/archetype_principles.pdf" target="_blank">Archetypes Principles</a></td>
				<td class="TableMainC"> &nbsp; </td>
				<td class="TableMainC"> Semantic principles of archetypes and templates.</td>
				<td class="TableMainC"> development</td>
			</tr>
			</tbody>
			</table>

			
			<h2>Non-core</h2>
			<table class="TableMain">
			<tbody>
			<tr style="background-color:#F3F8FA;">
				<th class="TableMainT"> Component  </th>
				<th class="TableMainT"> Documentary Specification  </th>
				<th class="TableMainT"> Computable / formal expressions  </th>
				<th class="TableMainT"> Description  </th>
				<td class="TableMainT"> Status</td>
			</tr>
			<tr>
				<td class="TableMainC" colspan=5> <b>General</b>  </td>
			</tr>
			<tr style="background-color:#F3F8FA;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> Specification Management </td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/0.95/CM/CM_plan.pdf">CM Plan</a> </td>
				<td class="TableMainC"> &nbsp;</td>
				<td class="TableMainC"> Technical document describing how versioning, changes, and releases are made. Describes the workflow of the Architectural Review Board (ARB).</td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr style="background-color:#F3F8FA;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> Model Management </td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/0.95/architecture/modelling_guide.pdf">Modelling Guide</a> </td>
				<td class="TableMainC"> &nbsp;</td>
				<td class="TableMainC"> Technical document describing how versioning, changes, and releases are made. Describes the workflow of the Architectural Review Board (ARB).</td>
				<td class="TableMainC"> stable</td>
			</tr>
			</tbody>
			</table>
			
			<a href="index">>> Back to Releases</a>
		
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>