<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Release 1.0.2';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header_english.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p><a href="https://openehr.atlassian.net/browse/SPEC/fixforversion/10030/?selectedTab=com.atlassian.jira.plugins.jira-development-integration-plugin:release-report-tabpanel" target="_blank">Release notes</a> </p>

			<h2>Overview</h2>
			<p>This page provides access to the Release 1.0.2 deliverables of the openEHR specification project and indicates the current status (lifecycle state) of each. The lifecycle states are as follows: </p>
			<p>The lifecycle states are as follows: </p>
			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT"> Lifecycle State </th>
				<th class="TableMainT"> Description </th>
			</tr>
			<tr style="background-color:#FFFCDC;">
				<td class="TableMainC"> development</td>
				<td class="TableMainC"> agile development by project group, no formal change management, visibility of documentation and experimental software. By the end of development, an open source reference implementation must be available</td>
			</tr>
			<tr style="background-color:#FFFFCC;">
				<td class="TableMainC"> trial </td>
				<td class="TableMainC"> during this period, the specification is managed in a formal way. Issues are reported on an online tracker; changes are recorded on a separate dedicated tracker, ensuring every change to the specification is recorded </td>
			</tr>
			<tr>
				<td class="TableMainC"> stable </td>
				<td class="TableMainC"> specifications that have been tested in software and are in use in the community.</td>
			</tr>
			</tbody>
			</table>

			<h2>Reading Documents</h2>
			<p>Most links in the table below are to Adobe PDF files. All files are in colour. If you do not see them in colour or have other problems reading them, we suggest upgrading to the <a href="http://www.adobe.com/products/acrobat/readstep2.html" target="_blank">latest Acrobat Reader</a>. If you still experience problems with reading PDF files, your browser configuration may need to be adjusted. See the <a href="http://www.adobe.com/support/products/acrreader.html" target="_blank">Adobe Acrobat support page</a> for more help.</p>
			
			<h2>Core</h2>
			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT"> Component</th>
				<th class="TableMainT"> Documentary Specification </th>
				<th class="TableMainT"> Description </th>
				<th class="TableMainT"> Status </th>
			</tr>
			<tr>
				<td class="TableMainC" colspan=5> <b>Requirements</b> </td>
			</tr>
			<tr>
				<td class="TableMainC" style="background-color:#FFFFFF;"> Standards conformance </td>
				<td class="TableMainC"> <a href="/releases/1.0.2/requirements/iso18308_conformance.pdf" target="_blank">ISO 18308 Conformance Statement</a></td>
				<td class="TableMainC"> Document describing conformance of openEHR architecture to ISO TS 18308, &quot;Requirements for EHR Architectures&quot;. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC" colspan=5> <b>Architecture</b> </td>
			</tr>
			<tr>
				<td class="TableMainC" style="background-color:#FFFFFF;"> Architecture <br class="atl-forced-newline" /> </td>
				<td class="TableMainC"> <a href="/releases/1.0.2/architecture/overview.pdf" target="_blank">Architecture Overview</a></td>
				<td class="TableMainC"> &quot;Read me first&quot; document for the whole architecture. provides a summary of the reference, archetype and service models, and describes global semantics. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC" style="background-color:#FFFFFF;"> Reference Model</td>
				<td class="TableMainC"> <a href="/releases/1.0.2/architecture/rm/ehr_im.pdf" target="_blank">EHR IM</a></td>
				<td class="TableMainC"> The information model of the openEHR EHR. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="/releases/1.0.2/architecture/rm/demographic_im.pdf" target="_blank">Demographic IM</a></td>
				<td class="TableMainC"> The openEHR demographic model. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr style="background-color:#FFFCDC;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="/releases/1.0.2/architecture/rm/ehr_extract_im.pdf" target="_blank">EHR Extract IM</a></td>
				<td class="TableMainC"> The information model of the EHR Extract, which is a serilialisation of content from an EHR. </td>
				<td class="TableMainC"> development</td>
			</tr>
			<tr>
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="/releases/1.0.2/architecture/rm/common_im.pdf" target="_blank">Common IM</a></td>
				<td class="TableMainC"> Information model containing common concepts, including the archetype-enabling LOCATABLE class, party references, audits and attestations, change control, and authored resources. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="/releases/1.0.2/architecture/rm/data_structures_im.pdf" target="_blank">Data Structures IM</a></td>
				<td class="TableMainC"> Information model of data structures, incuding a powerful model of HISTORY and EVENT. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="/releases/1.0.2/architecture/rm/data_types_im.pdf" target="_blank">Data Types IM</a></td>
				<td class="TableMainC"> Information model of data types, including quantities, date/times, plain and coded text, time specification, multimedia and URIs. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="/releases/1.0.2/architecture/rm/support_im.pdf" target="_blank">Support IM</a></td>
				<td class="TableMainC"> Support model defining identifiers, assumed types, and terminology interface specification used in the rest of the specifications. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="/releases/1.0.2/architecture/rm/integration_im.pdf" target="_blank">Integration IM</a></td>
				<td class="TableMainC"> Model supporting expression of legacy data in a free form for further processing into and out of openEHR information structures. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr style="background-color:#FFFCDC;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> Archetype Model  </td>
				<td class="TableMainC"> <a href="/releases/1.0.2/architecture/am/archetype_system.pdf" target="_blank">Archetype System</a></td>
				<td class="TableMainC"> Description of system of archetype management and governance. This document will change as a result of current work on archetype ontologies, governance, and logistical management.</td>
				<td class="TableMainC"> development</td>
			</tr>
			<tr style="background-color:#FFFCDC;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp; </td>
				<td class="TableMainC"> <a href="/releases/1.0.2/architecture/am/archetype_semantics.pdf" target="_blank">Archetype Semantics</a></td>
				<td class="TableMainC"> Description of semantics of populations of archetypes, including identifiers, specialisation, revision, versioning, composition, and conformance.</td>
				<td class="TableMainC"> development</td>
			</tr>
			<tr>
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="/releases/1.0.2/architecture/am/adl.pdf" target="_blank">Archetype Definition Language 1.4 (ADL)</a></td>
				<td class="TableMainC"> Abstract syntax specification for archetypes 1.4 edition of language (used in ISO 13606-2). </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="/releases/1.0.2/architecture/am/aom.pdf" target="_blank">Archetype Object Model (AOM)</a></td>
				<td class="TableMainC"> Object model of archetypes corresponding to ADL 1.4. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="/releases/1.0.2/architecture/am/openehr_archetype_profile.pdf" target="_blank">openEHR Archetype Profile (OAP)</a></td>
				<td class="TableMainC"> openEHR plug-in additions to the generic archetype object model.</td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="/releases/1.0.2/architecture/am/archetype_principles.pdf" target="_blank">Archetypes Principles</a></td>
				<td class="TableMainC"> Semantic principles of archetypes and templates.</td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr style="background-color:#FFFCDC;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="/wiki/display/spec/openEHR+Templates+and+Specialised+Archetypes">Template Object Model</a></td>
				<td class="TableMainC"> Object model of templates. </td>
				<td class="TableMainC"> development</td>
			</tr>
			<tr>
				<td class="TableMainC" style="background-color:#FFFFFF;"> Terminology </td>
				<td class="TableMainC"> <a href="/releases/1.0.2/architecture/terminology.pdf" target="_blank">openEHR Vocabulary</a> </td>
				<td class="TableMainC"> Documentary form of the&nbsp;openEHR terminology, which is a set of vocabularies and code sets used by the reference and archetype models. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			</tbody>
			</table>

			<h3>Computable Expressions</h3>
			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT"> Format </th>
				<th class="TableMainT"> Details </th>
			</tr>
			<tr>
				<td class="TableMainC"> UML </td>
				<td class="TableMainC"> <a href="/releases/1.0.2/reference-models/openEHR/UML/">source files (XMI)</a> | <a href="/releases/trunk/UML/">website</a> 
				</td>
			</tr>
			<tr>
				<td class="TableMainC"> BMM </td>
				<td class="TableMainC"> <a href="/releases/1.0.2/reference-models/openEHR/BMM/">BMM models</a></td>
			</tr>
			<tr>
				<td class="TableMainC"> XML </td>
				<td class="TableMainC"> <a href="/releases/1.0.2/architecture/computable/terminology/terminology.html">openEHR Terminology</a></td>
			</tr>
			</tbody>
			</table>

			
			<h2>Non-core</h2>
			<table class="TableMain">
			<tbody>
				<tr>
				<th class="TableMainT"> Component  </th>
				<th class="TableMainT"> Documentary Specification  </th>
				<th class="TableMainT"> Computable / formal expressions  </th>
				<th class="TableMainT"> Description  </th>
				<td class="TableMainT"> Status</td>
			</tr>
			<tr>
				<td class="TableMainC" colspan=5> <b>General</b>  </td>
			</tr>
			<tr>
				<td class="TableMainC" style="background-color:#FFFFFF;"> Specification Management </td>
				<td class="TableMainC"> <a href="/releases/1.0.2/CM/CM_plan.pdf">CM Plan</a> </td>
				<td class="TableMainC"> &nbsp;</td>
				<td class="TableMainC"> Technical document describing how versioning, changes, and releases are made. Describes the workflow of the Architectural Review Board (ARB).</td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC" style="background-color:#FFFFFF;"> Model Management </td>
				<td class="TableMainC"> <a href="/releases/1.0.2/architecture/modelling_guide.pdf">Modelling Guide</a> </td>
				<td class="TableMainC"> &nbsp;</td>
				<td class="TableMainC"> Technical document describing how versioning, changes, and releases are made. Describes the workflow of the Architectural Review Board (ARB).</td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC" colspan=5> <b>Implementation</b>  </td>
			</tr>
			<tr>
				<td class="TableMainC" style="background-color:#FFFFFF;"> XML Schema </td>
				<td class="TableMainC"> <a href="/releases/1.0.2/its/XML-schema/index.html">XML Schema Homepage</a> </td>
				<td class="TableMainC"> <a href="/releases/1.0.2/its/XML-schema/index.html">XSDs</a> </td>
				<td class="TableMainC"> XML-schema expression of the reference model.</td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC" style="background-color:#FFFFFF;"> Java </td>
				<td class="TableMainC"> <a href="/releases/1.0.2/its/Java/openEHR-JavaITS.pdf">Java Development Guide</a> </td>
				<td class="TableMainC"> &nbsp; </td>
				<td class="TableMainC"> Guide to java implementation of openEHR.</td>
				<td class="TableMainC"> stable</td>
			</tr>
			</tbody>
			</table>

			<a href="index">>> Back to Releases</a>
		
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
