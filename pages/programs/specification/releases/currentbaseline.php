<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Current Baseline';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header_english.php');
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
				<li><em>Planning</em>: new specification under active planning.</li>
			</ul>
			<p>If you are looking for a specific release, go <a href="index">here</a>.</p>
			
			<h2>Reading Documents</h2>
			<p>Most links in the table below are to Adobe PDF files. All files are in colour. If you do not see them in colour or have other problems reading them,
			we suggest upgrading to the <a href="http://www.adobe.com/products/acrobat/readstep2.html" target="_blank">latest Acrobat Reader</a>.
			If you still experience problems with reading PDF files, your browser configuration may need to be adjusted.
			See the <a href="http://www.adobe.com/support/products/acrreader.html" target="_blank">Adobe Acrobat support page</a> for more help.</p>
			
			<h2>Specifications</h2>
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
				<td colspan=5 align="center"> <b>Core</b> </td>
			</tr>
			<tr>
				<td class="TableMainC"> <a name="Architecture"><em>Architecture</em></a> <br class="atl-forced-newline" /> </td>
				<td class="TableMainC"> <a href="/releases/trunk/architecture/overview.pdf" target="_blank">Architecture Overview</a></td>
				<td class="TableMainC"> &nbsp;</td>
				<td class="TableMainC"> &quot;Read me first&quot; document for the overall architecture. Provides a summary of the reference, archetype and service models, and describes global semantics. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC"> <a name="ReferenceModel"><em>Reference Model</em></a></td>
				<td class="TableMainC"> <a href="/releases/trunk/architecture/rm/ehr_im.pdf" target="_blank">EHR IM</a></td>
				<td class="TableMainC"> UML: <a href="/releases/1.0.2/architecture/UML">source files</a>, <a href="/wiki/display/spec/openEHR+1.0.2+UML+resources">online</a>; XMI; openEHR BMM models </td>
				<td class="TableMainC"> The information model of the openEHR EHR. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC"> &nbsp;</td>
				<td class="TableMainC"> <a href="/releases/trunk/architecture/rm/demographic_im.pdf" target="_blank">Demographic IM</a></td>
				<td class="TableMainC"> UML: <a href="/releases/1.0.2/architecture/UML">source files</a>, <a href="/wiki/display/spec/openEHR+1.0.2+UML+resources">online</a>; XMI; openEHR BMM models </td>
				<td class="TableMainC"> The openEHR demographic model. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr style="background-color:#FFFFCC;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="/releases/trunk/architecture/rm/ehr_extract_im.pdf" target="_blank">EHR Extract IM</a></td>
				<td class="TableMainC"> UML: <a href="/releases/1.0.2/architecture/UML">source files</a>, <a href="/wiki/display/spec/openEHR+1.0.2+UML+resources">online</a>; XMI; openEHR BMM models</td>
				<td class="TableMainC"> The information model of the EHR Extract, which is a serilialisation of content from an EHR. </td>
				<td class="TableMainC"> Trial <br class="atl-forced-newline" /><a href="/wiki/display/spec/openEHR+EHR+Extract">dev page</a></td>
			</tr>
			<tr>
				<td class="TableMainC"> &nbsp;</td>
				<td class="TableMainC"> <a href="/releases/trunk/architecture/rm/common_im.pdf" target="_blank">Common IM</a></td>
				<td class="TableMainC"> UML: <a href="/releases/1.0.2/architecture/UML">source files</a>, <a href="/wiki/display/spec/openEHR+1.0.2+UML+resources">online</a>; XMI; openEHR BMM models</td>
				<td class="TableMainC"> Information model containing common concepts, including the archetype-enabling LOCATABLE class, party references, audits and attestations, change control, and authored resources. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC"> &nbsp;</td>
				<td class="TableMainC"> <a href="/releases/trunk/architecture/rm/data_structures_im.pdf" target="_blank">Data Structures IM</a></td>
				<td class="TableMainC"> UML: <a href="/releases/1.0.2/architecture/UML">source files</a>, <a href="/wiki/display/spec/openEHR+1.0.2+UML+resources">online</a>; XMI; openEHR BMM models</td>
				<td class="TableMainC"> Information model of data structures, incuding a powerful model of HISTORY and EVENT. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC"> &nbsp;</td>
				<td class="TableMainC"> <a href="/releases/trunk/architecture/rm/data_types_im.pdf" target="_blank">Data Types IM</a></td>
				<td class="TableMainC"> UML: <a href="/releases/1.0.2/architecture/UML">source files</a>, <a href="/wiki/display/spec/openEHR+1.0.2+UML+resources">online</a>; XMI; openEHR BMM models</td>
				<td class="TableMainC"> Information model of data types, including quantities, date/times, plain and coded text, time specification, multimedia and URIs. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC"> &nbsp;</td>
				<td class="TableMainC"> <a href="/releases/trunk/architecture/rm/support_im.pdf" target="_blank">Support IM</a></td>
				<td class="TableMainC"> UML: <a href="/releases/1.0.2/architecture/UML">source files</a>, <a href="/wiki/display/spec/openEHR+1.0.2+UML+resources">online</a>; XMI; openEHR BMM models</td>
				<td class="TableMainC"> Support model defining identifiers, assumed types, and terminology interface specification used in the rest of the specifications. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC"> &nbsp;</td>
				<td class="TableMainC"> <a href="/releases/trunk/architecture/rm/integration_im.pdf" target="_blank">Integration IM</a></td>
				<td class="TableMainC"> UML: <a href="/releases/1.0.2/architecture/UML">source files</a>, <a href="/wiki/display/spec/openEHR+1.0.2+UML+resources">online</a>; XMI; openEHR BMM models</td>
				<td class="TableMainC"> Model supporting expression of legacy data in a free form for further processing into and out of openEHR information structures. </td>
				<td class="TableMainC"> stable</td>
			</tr>

			<tr style="background-color:#FFFCDC;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> <a name="ArchetypeModel"><em>Archetype Model</em></a> </td>
				<td class="TableMainC"> <a href="/releases/trunk/architecture/am/archetype_semantics.pdf" target="_blank">Archetype Semantics</a></td>
				<td class="TableMainC"> &nbsp;</td>
				<td class="TableMainC"> Overview of semantics of archetypes, including identifiers, specialisation, revision, versioning, composition, and conformance.</td>
				<td class="TableMainC"> development</td>
			</tr>
			<tr>
				<td class="TableMainC"> &nbsp;</td>
				<td class="TableMainC"> <a href="/releases/trunk/architecture/am/archetype_principles.pdf" target="_blank">Archetype Principles</a></td>
				<td class="TableMainC"> UML: <a href="/wiki/display/spec/openEHR+1.0.2+UML+resources">source files</a>, <a href="/wiki/display/spec/openEHR+1.0.2+UML+resources">online</a></td>
				<td class="TableMainC"> Semantic principles of archetypes and templates.</td>
				<td class="TableMainC"> stable</td>
			</tr>

			<tr>
				<td class="TableMainC"> <a name="ADL14">ADL 1.4</a> </td>
				<td class="TableMainC"> <a href="/releases/trunk/architecture/am/adl1.4.pdf" target="_blank">ADL 1.4</a></td>
				<td class="TableMainC"> UML: <a href="/releases/1.0.2/architecture/UML">source files</a>, <a href="/wiki/display/spec/openEHR+1.0.2+UML+resources">online</a></td>
				<td class="TableMainC"> Abstract syntax specification for Archetype Definition Language (ADL), 1.4 edition of language (used in ISO 13606-2). </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC"> &nbsp;</td>
				<td class="TableMainC"> <a href="/releases/trunk/architecture/am/aom1.4.pdf" target="_blank">AOM 1.4</a></td>
				<td class="TableMainC"> UML: <a href="/releases/1.0.2/architecture/UML">source files</a>, <a href="/wiki/display/spec/openEHR+1.0.2+UML+resources">online</a></td>
				<td class="TableMainC"> Archetype Object Model (AOM) 1.4 - syntax-independent model of archetypes corresponding to ADL 1.4. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC"> &nbsp;</td>
				<td class="TableMainC"> <a href="/releases/trunk/architecture/am/openehr_archetype_profile.pdf" target="_blank">openEHR Archetype Profile (OAP)</a></td>
				<td class="TableMainC"> UML: <a href="/releases/1.0.2/architecture/UML">source files</a>, <a href="/wiki/display/spec/openEHR+1.0.2+UML+resources">online</a></td>
				<td class="TableMainC"> openEHR plug-in additions to the generic archetype object model.</td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr style="background-color:#FFFFCC;">
				<td class="TableMainC" style="background-color:#FFFFFF;"></td>
				<td class="TableMainC"> Templating </td>
				<td class="TableMainC"> <a href="https://github.com/openEHR/java-libs/tree/master/oet-parser/src/main/xsd">OET XSD</a> <br class="atl-forced-newline" /><a href="https://github.com/openEHR/java-libs/tree/master/oet-parser">Java OET parser</a> </td>
				<td class="TableMainC"> Simple XML format for templates.</td>
				<td class="TableMainC"> trial </td>
			</tr>

			<tr style="background-color:#FFFCDC;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> <a name="ADL2">ADL 2</a> </td>
				<td class="TableMainC"> <a href="/releases/trunk/architecture/am/dist_dev_model.pdf" target="_blank">Model of Distributed Development</a></td>
				<td class="TableMainC"> </td>
				<td class="TableMainC"> Description of distirbuted development and governance concepts of archetypes, templates and terminology subsets.</td>
				<td class="TableMainC"> development <br class="atl-forced-newline" /><a href="/wiki/display/spec/Development+and+Governance+of+Knowledge+Artefacts">dev page</a></td>
			</tr>
			<tr style="background-color:#FFFCDC;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="/releases/trunk/architecture/am/archetype_technical_overview.pdf" target="_blank">Archetypes - Technical Overview</a></td>
				<td class="TableMainC"> </td>
				<td class="TableMainC"> Technical overview of archetypes, basic semantics, types of artefact, parsing, compiling etc.</td>
				<td class="TableMainC"> development <br class="atl-forced-newline" /><a href="/wiki/pages/viewpage.action?pageId=196633">dev page</a></td>
			</tr>
			<tr style="background-color:#FFFCDC;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="/releases/trunk/architecture/am/knowledge_id_system.pdf" target="_blank">Knowledge Artefact identification</a></td>
				<td class="TableMainC"> </td>
				<td class="TableMainC"> Formal model of identifiers, versioning and lifecycle for archetypes, templates and terminology subsets.</td>
				<td class="TableMainC"> development <br class="atl-forced-newline" /><a href="/wiki/display/spec/Development+and+Governance+of+Knowledge+Artefacts">dev page</a></td>
			</tr>
			<tr style="background-color:#FFFCDC;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="/releases/trunk/architecture/am/adl2.pdf" target="_blank">ADL 2</a></td>
				<td class="TableMainC"> </a></td>
				<td class="TableMainC"> Archetype Definition Language (ADL) 2 draft: ADL now includes dedicated section on specialisation, many new examples, improved descriptions and corrections of errors. </td>
				<td class="TableMainC"> development<br class="atl-forced-newline" /><a href="/wiki/pages/viewpage.action?pageId=196633">dev page</a></td>
			</tr>
			<tr style="background-color:#FFFCDC;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="/releases/trunk/architecture/am/aom2.pdf" target="_blank">AOM 2</a></td>
				<td class="TableMainC"> <a href="https://github.com/openEHR/specifications/tree/master/ITS/AOM2/XML-schema">XML-schemas</a></td>
				<td class="TableMainC"> Archetype Object Model (AOM) 2 draft - the AOM description now includes uniquely identified formally testable validity conditions 
										(suitable for output by compilers), revised primitive types, improved ontology section, and constraint model extended to represent differential archetypes. </td>
				<td class="TableMainC"> development <br class="atl-forced-newline" /><a href="/wiki/pages/viewpage.action?pageId=196633">dev page</a></td>
			</tr>
			<tr style="background-color:#FFFCDC;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp;</td>
				<td class="TableMainC"> <a href="/releases/trunk/architecture/am/tom.pdf" target="_blank">Template Object Model</a></td>
				<td class="TableMainC"> </td>
				<td class="TableMainC"> Object model of templates. </td>
				<td class="TableMainC"> development <br class="atl-forced-newline" /><a href="/wiki/pages/viewpage.action?pageId=196633">dev page</a></td>
			</tr>
			<tr style="background-color:#FFFCDC;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> <a name="ServiceModel"><em>Service Model</em></a> </td>
				<td class="TableMainC"> EHR Service Model</td>
				<td class="TableMainC"> </td>
				<td class="TableMainC"> Definition of the openEHR coarse-grained interface EHR service interface.</td>
				<td class="TableMainC"> development<br class="atl-forced-newline" /><a href="/wiki/display/spec/openEHR+Service+Model">dev page</a></td>
			</tr>
			<tr style="background-color:#FFFCDC;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> &nbsp; </td>
				<td class="TableMainC"> vEHR API</td>
				<td class="TableMainC"> </td>
				<td class="TableMainC"> API for the openEHR virtual EHR service.</td>
				<td class="TableMainC"> development<br class="atl-forced-newline" /><a href="/wiki/display/spec/vEHR+Service+Specification">dev page</a></td>
			</tr>
			<tr>
				<td class="TableMainC"> <a name="Terminology"><em>Terminology</em></a> </td>
				<td class="TableMainC"> <a href="/releases/trunk/architecture/terminology.pdf" target="_blank">openEHR Vocabulary</a> </td>
				<td class="TableMainC"> <a href="/releases/1.0.2/architecture/UML">XML source file</a> </td>
				<td class="TableMainC"> Documentary form of the&nbsp;openEHR terminology, which is a set of vocabularies and code sets used by the reference and archetype models. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr style="background-color:#FFFFCC;">
				<td class="TableMainC" style="background-color:#FFFFFF;"><a name="Querying"><em>Querying</em></a></td>
				<td class="TableMainC"> Archetype Query Language, a-path  </td>
				<td class="TableMainC"> AQL grammar, a-path grammar  </td>
				<td class="TableMainC"> Query language based on archetype paths and pattern matching.</td>
				<td class="TableMainC"> trial <br class="atl-forced-newline" /><a href="/wiki/display/spec/AQL-+Archetype+Query+Language">dev page</a></td>
			</tr>
			<tr style="background-color:#FFFCDC;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> <a name="ClinicalDecisionSupport"><em>Clinical Decision Support</em></a> </td>
				<td class="TableMainC"> <a href="https://github.com/openEHR/specifications/blob/master/proposals/GDL/GuideDefinitionLanguage_v0.9.pdf?raw=true">Guideline Definition Language (GDL)</a> </td>
				<td class="TableMainC"> </td>
				<td class="TableMainC"> Guideline language based on ADL syntax with extensions.</td>
				<td class="TableMainC"> development<br class="atl-forced-newline" /><a href="https://github.com/openEHR/gdl-tools/wiki">dev page</a></td>
			</tr>			
			<tr>
				<td class="TableMainC"> <a name="Syntaxes"><em>Syntaxes</em></a> </td>
				<td class="TableMainC"> <a href="/releases/trunk/architecture/syntaxes/ODIN.pdf" target="_blank">Object Data Instance Notation (ODIN)</a> </td>
				<td class="TableMainC"> <a href="https://github.com/openEHR/odin">GitHub tooling project</a></td>
				<td class="TableMainC"> Human-readable and computable object serialisation syntax, used in archetypes, BMM schemas, app config files...</td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td colspan=5 align="center"> <b>Conformance</b> </td>
			</tr>
			<tr style="background-color:#DDFCFF;">
				<td class="TableMainC" style="background-color:#FFFFFF;"><a name="Conformance"><em>Conformance</em></a></td>
				<td class="TableMainC">  Archetype tooling </td>
				<td class="TableMainC"> &nbsp;</td>
				<td class="TableMainC"> Conformance profiles for Archetype tooling. </td>
				<td class="TableMainC"> planning<br/><a href="http://www.openehr.org/wiki/display/oecom/openEHR+2014+Roadmap+-+Product+and+Market">wiki page</a></td>
			</tr>
			<tr style="background-color:#DDFCFF;">
				<td class="TableMainC" style="background-color:#FFFFFF;"> </td>
				<td class="TableMainC"> EHR Systems </td>
				<td class="TableMainC"> &nbsp;</td>
				<td class="TableMainC"> Conformance profiles for EHR system components. </td>
				<td class="TableMainC"> planning<br/><a href="http://www.openehr.org/wiki/display/oecom/openEHR+2014+Roadmap+-+Product+and+Market">wiki page</a></td>
			</tr>
			<tr>
				<td colspan=5 align="center"> <b>Standards</b> </td>
			</tr>
			<tr>
				<td class="TableMainC"> <a name="Standards"><em>Standards</em></a> </td>
				<td class="TableMainC"> <a href="/releases/trunk/architecture/iso18308_conformance.pdf" target="_blank">ISO 18308 Conformance Statement</a></td>
				<td class="TableMainC"> &nbsp;</td>
				<td class="TableMainC"> Document describing conformance of openEHR architecture to ISO TS 18308, &quot;Requirements for EHR Architectures&quot;. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td colspan=5 align="center"> <b>Implementation</b>  </td>
			</tr>
			<tr>
				<td class="TableMainC"> <a name="XmlSchema"><em>XML Schema</em></a> </td>
				<td class="TableMainC"> <a href="/releases/trunk/its/XML-schema">XML Schema Homepage</a> </td>
				<td class="TableMainC"> <a href="/releases/trunk/its/XML-schema">XSDs</a> </td>
				<td class="TableMainC"> XML-schema expression of the reference model.</td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC"> <a name="Java"><em>Java</em></a> </td>
				<td class="TableMainC"> <a href="/releases/trunk/architecture/Java/openEHR-JavaITS.pdf">Java Development Guide</a> </td>
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
