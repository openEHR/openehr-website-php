<?php
$pageOn = 'releases.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

	<title>openEHR - Specifications Program</title>
	<link rel="bookmark" href="http://www.openehr.org/programs/specification/releases/1.0.1" title="openEHR - Specification Program">
	<?php include '../../../panel/headpanel.php' ?>
	
</head>


<body>

<div id="MainFrame">
	
	<div id="TopPanel">
		<?php include '../../../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu" style="text-align:left">
		
		<div class="nav">
			<?php include '../../../menu/topmenu.php' ?>
		</div>
		
	</div> 

	<div id="MainArea">
	
		<div id="SideMenu">
			<?php include '../menu/specificationsmenu.php' ?>
		</div>

		<div id="TextArea">
			
			<h1>Releases</h1>
			
			<h2>Release 1.0.1</h2>
			
			<h3>Overview</h3>
			<p>The following table provides access to the deliverables of the openEHR specification project and indicates the current status of each. There are three groups of deliverables, as follows: </p>
			<ul>
				<li><em>Stable</em>: specifications that have been tested in software and are in use in the community;</li>
				<li><em>Trial</em>: specifications that have been worked on by a design group and validated in test software to the point where they are ready for community use on a trial basis;</li>
				<li><em>Development</em>: draft forms of specification documents, made available for the purposes of review, input and experimental use.</li>
			</ul>
			<p><a href="http://www.openehr.org/issues/browse/SPEC/fixforversion/10019">Release notes</a> for this release. The rules for change management between releases are given in the <a href="../releasestrategy">Release Strategy</a>.</p>

			<h3>Reading Documents</h3>
			<p>Most links in the table below are to Adobe PDF files. All files are in colour. If you do not see them in colour or have other problems reading them, we suggest upgrading to the <a href="http://www.adobe.com/products/acrobat/readstep2.html">latest Acrobat Reader</a>. If you still experience problems with reading PDF files, your browser configuration may need to be adjusted. See the <a href="http://www.adobe.com/support/products/acrreader.html">Adobe Acrobat support page</a> for more help.</p>
			
			<h3>Core</h3>
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
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/1.0.1/requirements/iso18308_conformance.pdf" target="_blank">ISO 18308 Conformance Statement</a></td>
				<td class="TableMainC"> &nbsp;</td>
				<td class="TableMainC"> Document describing conformance of openEHR architecture to ISO TS 18308, &quot;Requirements for EHR Architectures&quot;. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC" colspan=5> <b>Architecture</b> </td>
			</tr>
				<tr style="background-color:#F3F8FA;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> Architecture <br class="atl-forced-newline" /> </td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/1.0.1/architecture/overview.pdf" target="_blank">Architecture Overview</a></td>
				<td class="TableMainC"> &nbsp;</td>
				<td class="TableMainC"> &quot;Read me first&quot; document for the whole architecture. provides a summary of the reference, archetype and service models, and describes global semantics. </td>
			<td class="TableMainC"> stable</td>
			</tr>
				<tr style="background-color:#F3F8FA;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> Reference Model</td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/1.0.1/architecture/rm/ehr_im.pdf" target="_blank">EHR IM</a></td>
				<td class="TableMainC"> UML: <a href="http://www.openehr.org/releases/1.0.1/architecture/computable/UML/uml.html">source files</a>, <a href="http://htmlpreview.github.com/?https://raw.github.com/openEHR/reference-models/master/models/openEHR/Release-1.0.1/UML/HTML/index.html">online</a>; XMI; openEHR BMM models </td>
				<td class="TableMainC"> The information model of the openEHR EHR. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr style="background-color:#F3F8FA;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/1.0.1/architecture/rm/demographic_im.pdf" target="_blank">Demographic IM</a></td>
				<td class="TableMainC"> UML: <a href="http://www.openehr.org/releases/1.0.1/architecture/computable/UML/uml.html">source files</a>, <a href="http://htmlpreview.github.com/?https://raw.github.com/openEHR/reference-models/master/models/openEHR/Release-1.0.1/UML/HTML/index.html">online</a>; XMI; openEHR BMM models </td>
				<td class="TableMainC"> The openEHR demographic model. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr style="background-color:#FFFFDD;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/1.0.1/architecture/rm/ehr_extract_im.pdf" target="_blank">EHR Extract IM</a></td>
				<td class="TableMainC"> UML: <a href="http://www.openehr.org/releases/1.0.1/architecture/computable/UML/uml.html">source files</a>, <a href="http://htmlpreview.github.com/?https://raw.github.com/openEHR/reference-models/master/models/openEHR/Release-1.0.1/UML/HTML/index.html">online</a>; XMI; openEHR BMM models</td>
				<td class="TableMainC"> The information model of the EHR Extract, which is a serilialisation of content from an EHR. </td>
				<td class="TableMainC"> development</td>
			</tr>
			<tr style="background-color:#F3F8FA;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/1.0.1/architecture/rm/common_im.pdf" target="_blank">Common IM</a></td>
				<td class="TableMainC"> UML: <a href="http://www.openehr.org/releases/1.0.1/architecture/computable/UML/uml.html">source files</a>, <a href="http://htmlpreview.github.com/?https://raw.github.com/openEHR/reference-models/master/models/openEHR/Release-1.0.1/UML/HTML/index.html">online</a>; XMI; openEHR BMM models</td>
				<td class="TableMainC"> Information model containing common concepts, including the archetype-enabling LOCATABLE class, party references, audits and attestations, change control, and authored resources. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr style="background-color:#F3F8FA;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/1.0.1/architecture/rm/data_structures_im.pdf" target="_blank">Data Structures IM</a></td>
				<td class="TableMainC"> UML: <a href="http://www.openehr.org/releases/1.0.1/architecture/computable/UML/uml.html">source files</a>, <a href="http://htmlpreview.github.com/?https://raw.github.com/openEHR/reference-models/master/models/openEHR/Release-1.0.1/UML/HTML/index.html">online</a>; XMI; openEHR BMM models</td>
				<td class="TableMainC"> Information model of data structures, incuding a powerful model of HISTORY and EVENT. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr style="background-color:#F3F8FA;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/1.0.1/architecture/rm/data_types_im.pdf" target="_blank">Data Types IM</a></td>
				<td class="TableMainC"> UML: <a href="http://www.openehr.org/releases/1.0.1/architecture/computable/UML/uml.html">source files</a>, <a href="http://htmlpreview.github.com/?https://raw.github.com/openEHR/reference-models/master/models/openEHR/Release-1.0.1/UML/HTML/index.html">online</a>; XMI; openEHR BMM models</td>
				<td class="TableMainC"> Information model of data types, including quantities, date/times, plain and coded text, time specification, multimedia and URIs. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr style="background-color:#F3F8FA;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/1.0.1/architecture/rm/support_im.pdf" target="_blank">Support IM</a></td>
				<td class="TableMainC"> UML: <a href="http://www.openehr.org/releases/1.0.1/architecture/computable/UML/uml.html">source files</a>, <a href="http://htmlpreview.github.com/?https://raw.github.com/openEHR/reference-models/master/models/openEHR/Release-1.0.1/UML/HTML/index.html">online</a>; XMI; openEHR BMM models</td>
				<td class="TableMainC"> Support model defining identifiers, assumed types, and terminology interface specification used in the rest of the specifications. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr style="background-color:#F3F8FA;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/1.0.1/architecture/rm/integration_im.pdf" target="_blank">Integration IM</a></td>
				<td class="TableMainC"> UML: <a href="http://www.openehr.org/releases/1.0.1/architecture/computable/UML/uml.html">source files</a>, <a href="http://htmlpreview.github.com/?https://raw.github.com/openEHR/reference-models/master/models/openEHR/Release-1.0.1/UML/HTML/index.html">online</a>; XMI; openEHR BMM models</td>
				<td class="TableMainC"> Model supporting expression of legacy data in a free form for further processing into and out of openEHR information structures. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr style="background-color:#FFFFDD;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> Archetype Model  </td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/1.0.1/architecture/am/archetype_system.pdf" target="_blank">Archetype System</a></td>
				<td class="TableMainC"> &nbsp;</td>
				<td class="TableMainC"> Description of system of archetype management and governance. This document will change as a result of current work on archetype ontologies, governance, and logistical management.</td>
				<td class="TableMainC"> development</td>
			</tr>
			<tr style="background-color:#FFFFDD;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp; </td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/1.0.1/architecture/am/archetype_semantics.pdf" target="_blank">Archetype Semantics</a></td>
				<td class="TableMainC"> &nbsp;</td>
				<td class="TableMainC"> Description of semantics of populations of archetypes, including identifiers, specialisation, revision, versioning, composition, and conformance.</td>
				<td class="TableMainC"> development</td>
			</tr>
			<tr style="background-color:#F3F8FA;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/1.0.1/architecture/am/adl.pdf" target="_blank">Archetype Definition Language 1.4 (ADL)</a></td>
				<td class="TableMainC"> UML: <a href="http://www.openehr.org/releases/1.0.1/architecture/computable/UML/uml.html">source files</a>, <a href="http://htmlpreview.github.com/?https://raw.github.com/openEHR/reference-models/master/models/openEHR/Release-1.0.1/UML/HTML/index.html">online</a></td>
				<td class="TableMainC"> Abstract syntax specification for archetypes 1.4 edition of language (used in ISO 13606-2). </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr style="background-color:#F3F8FA;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/1.0.1/architecture/am/aom.pdf" target="_blank">Archetype Object Model (AOM)</a></td>
				<td class="TableMainC"> UML: <a href="http://www.openehr.org/releases/1.0.1/architecture/computable/UML/uml.html">source files</a>, <a href="http://htmlpreview.github.com/?https://raw.github.com/openEHR/reference-models/master/models/openEHR/Release-1.0.1/UML/HTML/index.html">online</a></td>
				<td class="TableMainC"> Object model of archetypes corresponding to ADL 1.4. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr style="background-color:#F3F8FA;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/1.0.1/architecture/am/openehr_archetype_profile.pdf" target="_blank">openEHR Archetype Profile (OAP)</a></td>
				<td class="TableMainC"> UML: <a href="http://www.openehr.org/releases/1.0.1/architecture/computable/UML/uml.html">source files</a>, <a href="http://htmlpreview.github.com/?https://raw.github.com/openEHR/reference-models/master/models/openEHR/Release-1.0.1/UML/HTML/index.html">online</a></td>
				<td class="TableMainC"> openEHR plug-in additions to the generic archetype object model.</td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr style="background-color:#F3F8FA;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/1.0.1/architecture/am/archetype_principles.pdf" target="_blank">Archetypes Principles</a></td>
				<td class="TableMainC"> UML: <a href="http://www.openehr.org/releases/1.0.1/architecture/computable/UML/uml.html">source files</a>, <a href="http://htmlpreview.github.com/?https://raw.github.com/openEHR/reference-models/master/models/openEHR/Release-1.0.1/UML/HTML/index.html">online</a></td>
				<td class="TableMainC"> Semantic principles of archetypes and templates.</td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr style="background-color:#FFFFDD;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="http://www.openehr.org/wiki/display/spec/openEHR+Templates+and+Specialised+Archetypes">Template Object Model</a></td>
				<td class="TableMainC"> UML: <a href="http://www.openehr.org/releases/1.0.1/architecture/computable/UML/uml.html">source files</a>, <a href="http://htmlpreview.github.com/?https://raw.github.com/openEHR/reference-models/master/models/openEHR/Release-1.0.1/UML/HTML/index.html">online</a></td>
				<td class="TableMainC"> Object model of templates. </td>
				<td class="TableMainC"> development</td>
			</tr>
			<tr style="background-color:#F3F8FA;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> Terminology </td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/1.0.1/architecture/terminology.pdf" target="_blank">openEHR Vocabulary</a> </td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/1.0.1/architecture/computable/terminology/terminology.html">XML source file</a> </td>
				<td class="TableMainC"> Documentary form of the&nbsp;openEHR terminology, which is a set of vocabularies and code sets used by the reference and archetype models. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			</tbody>
			</table>
			
			<br />
			
			<h3>Non-core</h3>
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
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/1.0.1/CM/CM_plan.pdf">CM Plan</a> </td>
				<td class="TableMainC"> &nbsp;</td>
				<td class="TableMainC"> Technical document describing how versioning, changes, and releases are made. Describes the workflow of the Architectural Review Board (ARB).</td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr style="background-color:#F3F8FA;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> Model Management </td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/1.0.1/architecture/modelling_guide.pdf">Modelling Guide</a> </td>
				<td class="TableMainC"> &nbsp;</td>
				<td class="TableMainC"> Technical document describing how versioning, changes, and releases are made. Describes the workflow of the Architectural Review Board (ARB).</td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC" colspan=5> <b>Implementation</b>  </td>
			</tr>
			<tr style="background-color:#F3F8FA;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> XML Schema </td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/1.0.1/its/XML-schema/index.html">XML Schema Homepage</a> </td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/1.0.1/its/XML-schema/index.html">XSDs</a> </td>
				<td class="TableMainC"> XML-schema expression of the reference model.</td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr style="background-color:#F3F8FA;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> Java </td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/1.0.1/its/Java/openEHR-JavaITS.pdf">Java Development Guide</a> </td>
				<td class="TableMainC"> &nbsp; </td>
				<td class="TableMainC"> Guide to java implementation of openEHR.</td>
				<td class="TableMainC"> stable</td>
			</tr>
			</tbody>
			</table>
			
			<br/>
			<br/>
			<a href="../releases">>> Back to Releases</a>
			
		</div>
			
	</div>

	<div id="BottomMenu">
		<?php include '../../../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
		<?php include '../../../panel/bottompanel.php' ?>	
	</div>
	
</div>

<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>
