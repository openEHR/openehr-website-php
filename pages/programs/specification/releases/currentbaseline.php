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
			<p>This page provides access to the current working deliverables of the openEHR specification project and indicates the current status (lifecycle state) of each. If you are looking for a specific release, <a href="index">see here</a>.</p>
			<p>The lifecycle states are as follows: </p>
			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT"> Lifecycle State </th>
				<th class="TableMainT"> Description </th>
			</tr>
			<tr style="background-color:#DDFCFF;">
				<td class="TableMainC"> planning</td>
				<td class="TableMainC"> development of description and scope of new specification, along with relevance and utility.</td>
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
			<tr style="background-color:#F9F9F9;">
				<td class="TableMainC"> retired </td>
				<td class="TableMainC"> some specifications inevitably become obsolete, or irrelevant for other reasons, and are promoted to the Retired state.</td>
			</tr>
			</tbody>
			</table>

			
			<h3>Reading Documents</h3>
			<p>Most links in the table below are to Adobe PDF files. All files are in colour. If you do not see them in colour or have other problems reading them,
			we suggest upgrading to the <a href="http://www.adobe.com/products/acrobat/readstep2.html" target="_blank">latest Acrobat Reader</a>.
			If you still experience problems with reading PDF files, your browser configuration may need to be adjusted.
			See the <a href="http://www.adobe.com/support/products/acrreader.html" target="_blank">Adobe Acrobat support page</a> for more help.</p>
			
			<!-- ------------------------------------------- BASE ------------------------------------------------- -->
			<h2>Base Models (BASE)</h2>

			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT"> Documentary Specification </th>
				<th class="TableMainT"> Description </th>
				<th class="TableMainT"> Status </th>
			</tr>
			<tr>
				<td class="TableMainC"> <a href="/releases/BASE/latest/architecture_overview.html" target="_blank">Architecture Overview</a></td>
				<td class="TableMainC"> &quot;Read me first&quot; document for the overall architecture. Provides a summary of the reference, archetype and service models, and describes global semantics. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC"> <a href="/releases/BASE/latest/odin.html" target="_blank">Object Data Instance Notation (ODIN).</a></td>
				<td class="TableMainC">  This is the JSON-like notation used to express various sections of ADL archetypes including description, terminology and annotations, and also BMM files.</td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC"> <a href="/releases/trunk/architecture/iso18308_conformance.pdf" target="_blank">ISO 18308 Conformance Statement</a></td>
				<td class="TableMainC"> Document describing conformance of openEHR architecture to ISO TS 18308, &quot;Requirements for EHR Architectures&quot;. </td>
				<td class="TableMainC"> stable</td>
			</tr>

			<tr>
				<th class="TableMainT"> Computable Expression </th>
				<th class="TableMainT"> Description </th>
				<th class="TableMainT"> Status </th>
			</tr>
			<tr>
				<td class="TableMainC"> UML </td>
				<td class="TableMainC"> <a href="/releases/BASE/latest/UML/openEHR_UML-Base.mdzip">source files / XMI</a> | 
										<a href="/releases/trunk/UML/">website</a> 
				</td>
				<td class="TableMainC"> stable</td>
			</tr>
			</tbody>
			</table>


			<!-- ------------------------------------------- RM ------------------------------------------------- -->
			<h2>Reference Model (RM)</h2>
			<p>
				<a href="https://openehr.atlassian.net/browse/SPECRM/?selectedTab=com.atlassian.jira.jira-projects-plugin:summary-panel">SPECRM Jira project</a> | 
				<a href="https://openehr.atlassian.net/browse/SPECRM/?selectedTab=com.atlassian.jira.jira-projects-plugin:roadmap-panel">Roadmap</a> | 
				<a href="https://openehr.atlassian.net/browse/SPECRM/?selectedTab=com.atlassian.jira.jira-projects-plugin:issues-panel">Issues</a> | 
				<a href="https://openehr.atlassian.net/browse/SPEC/?selectedTab=com.atlassian.jira.jira-projects-plugin:changelog-panel">(Historical)</a>
			</p>

			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT"> Documentary Specification </th>
				<th class="TableMainT"> Description </th>
				<th class="TableMainT"> Status </th>
			</tr>
			<tr>
				<td class="TableMainC"> <a href="/releases/RM/latest/ehr.html" target="_blank">EHR IM</a></td>
				<td class="TableMainC"> The information model of the openEHR EHR. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC"> <a href="/releases/RM/latest/demographic.html" target="_blank">Demographic IM</a></td>
				<td class="TableMainC"> The openEHR demographic model. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC"> <a href="/releases/RM/latest/common.html" target="_blank">Common IM</a></td>
				<td class="TableMainC"> Information model containing common concepts, including the archetype-enabling LOCATABLE class, party references, audits and attestations, change control, and authored resources. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC"> <a href="/releases/RM/latest/data_structures.html" target="_blank">Data Structures IM</a></td>
				<td class="TableMainC"> Information model of data structures, incuding a powerful model of HISTORY and EVENT. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC"> <a href="/releases/RM/latest/data_types.html" target="_blank">Data Types IM</a></td>
				<td class="TableMainC"> Information model of data types, including quantities, date/times, plain and coded text, time specification, multimedia and URIs. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC"> <a href="/releases/RM/latest/support.html" target="_blank">Support IM</a></td>
				<td class="TableMainC"> Support model defining identifiers, assumed types, and terminology interface specification used in the rest of the specifications. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr style="background-color:#FFFFCC;">
				<td class="TableMainC"> <a href="/releases/RM/latest/ehr_extract.html" target="_blank">EHR Extract IM</a></td>
				<td class="TableMainC"> The information model of the EHR Extract, which is a serilialisation of content from an EHR. </td>
				<td class="TableMainC"> trial <br class="atl-forced-newline" /><a href="/wiki/display/spec/openEHR+EHR+Extract">dev page</a></td>
			</tr>
			<tr>
				<td class="TableMainC"> <a href="/releases/RM/latest/integration.html" target="_blank">Integration IM</a></td>
				<td class="TableMainC"> Model supporting expression of legacy data in a free form for further processing into and out of openEHR information structures. </td>
				<td class="TableMainC"> stable</td>
			</tr>

			<tr>
				<th class="TableMainT"> Computable Expression </th>
				<th class="TableMainT"> Description </th>
				<th class="TableMainT"> Status </th>
			</tr>
			<tr>
				<td class="TableMainC"> UML </td>
				<td class="TableMainC"> <a href="/releases/RM/latest/UML/openEHR_UML-RM.mdzip">source files / XMI</a> | 
										<a href="/releases/trunk/UML/">website</a> 
				</td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC"> BMM </td>
				<td class="TableMainC"> <a href="http://www.openehr.org/releases/1.0.2/reference-models/openEHR/BMM/">BMM models</a></td>
				<td class="TableMainC"> stable</td>
			</tr>
			</tbody>
			</table>


			<!-- ------------------------------------------- AM ------------------------------------------------- -->
			<h2>Archetype Model (AM)</h2>
			<p>
				<a href="https://openehr.atlassian.net/browse/SPECAM/?selectedTab=com.atlassian.jira.jira-projects-plugin:summary-panel">SPECAM Jira project</a> | 
				<a href="https://openehr.atlassian.net/browse/SPECAM/?selectedTab=com.atlassian.jira.jira-projects-plugin:roadmap-panel">Roadmap</a> | 
				<a href="https://openehr.atlassian.net/browse/SPECAM/?selectedTab=com.atlassian.jira.jira-projects-plugin:issues-panel">Issues</a> | 
				<a href="https://openehr.atlassian.net/browse/SPEC/?selectedTab=com.atlassian.jira.jira-projects-plugin:changelog-panel">(Historical)</a>
			</p>
			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT"> Documentary Specification </th>
				<th class="TableMainT"> Description </th>
				<th class="TableMainT"> Status </th>
			</tr>

			<tr style="background-color:#FFFCDC;">
				<td class="TableMainC"> <a href="/releases/AM/latest/Overview.html" target="_blank">Archetypes - Technical Overview</a></td>
				<td class="TableMainC"> Technical overview of archetypes, basic semantics, types of artefact, parsing, compiling etc.</td>
				<td class="TableMainC"> development </td>
			</tr>

			<tr>
				<td colspan=3 align="center"> <a name="ADL2"><b>ADL 2</b></a> </td>
			</tr>
			<tr style="background-color:#FFFCDC;">
				<td class="TableMainC"> <a href="/releases/AM/latest/ADL2.html" target="_blank">ADL 2</a></td>
				<td class="TableMainC"> Archetype Definition Language (ADL) 2 draft: ADL now includes dedicated section on specialisation, many new examples, improved descriptions and corrections of errors. </td>
				<td class="TableMainC"> development<br class="atl-forced-newline" /><a href="https://openehr.atlassian.net/wiki/display/ADL/ADL+2+Specifications">dev page</a></td>
			</tr>
			<tr style="background-color:#FFFCDC;">
				<td class="TableMainC"> <a href="/releases/AM/latest/AOM2.html" target="_blank">AOM 2</a></td>
				<td class="TableMainC"> Archetype Object Model (AOM) 2 draft - the AOM description now includes uniquely identified formally testable validity conditions 
										(suitable for output by compilers), revised primitive types, improved ontology section, and constraint model extended to represent differential archetypes. </td>
				<td class="TableMainC"> development <br class="atl-forced-newline" /><a href="https://openehr.atlassian.net/wiki/display/ADL/ADL+2+Specifications">dev page</a></td>
			</tr>
			<tr style="background-color:#FFFCDC;">
				<td class="TableMainC"> <a href="/releases/AM/latest/Identification.html" target="_blank">Archetype identification and Versioning</a></td>
				<td class="TableMainC"> Formal model of identifiers, versioning and lifecycle for archetypes, templates and terminology subsets.</td>
				<td class="TableMainC"> development <br class="atl-forced-newline" /><a href="https://openehr.atlassian.net/wiki/display/ADL/Knowledge+Artefact+Identification">dev page</a></td>
			</tr>
			<tr style="background-color:#FFFCDC;">
				<td class="TableMainC"> <a href="/releases/AM/latest/tom.pdf" target="_blank">openEHR Templates</a></td>
				<td class="TableMainC"> Use of templates.</td>
				<td class="TableMainC"> development <br class="atl-forced-newline" /><a href="https://openehr.atlassian.net/wiki/display/ADL/ADL+2+templates+as+single+artefacts">dev page</a></td>
			</tr>

			<tr>
				<td colspan=3 align="center"> <a name="ADL1.4"><b>ADL 1.4</b></a> </td>
			</tr>
			<tr>
				<td class="TableMainC"> <a href="/releases/1.0.2/architecture/am/adl.pdf" target="_blank">ADL 1.4</a></td>
				<td class="TableMainC"> Abstract syntax specification for Archetype Definition Language (ADL), 1.4 edition of language (used in ISO 13606-2). </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC"> <a href="/releases/1.0.2/architecture/am/aom.pdf" target="_blank">AOM 1.4</a></td>
				<td class="TableMainC"> Archetype Object Model (AOM) 1.4 - syntax-independent model of archetypes corresponding to ADL 1.4. </td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC"> <a href="/releases/1.0.2/architecture/am/openehr_archetype_profile.pdf" target="_blank">openEHR Archetype Profile (OAP)</a></td>
				<td class="TableMainC"> openEHR plug-in additions to the generic archetype object model.</td>
				<td class="TableMainC"> stable</td>
			</tr>

			<tr>
				<th class="TableMainT"> Computable Expression </th>
				<th class="TableMainT"> Description </th>
				<th class="TableMainT"> Status </th>
			</tr>
			<tr>
				<td class="TableMainC"> UML </td>
				<td class="TableMainC"> <a href="/releases/AM/latest/UML/openEHR_UML-AM.mdzip">source files / XMI</a> | 
										<a href="/releases/trunk/UML/#Diagrams___18_1_83e026d_1422971258847_792963_30335">website</a> 
				</td>
				<td class="TableMainC"> development </td>
			</tr>
			</tbody>
			</table>


			<!-- ------------------------------------------- SM ------------------------------------------------- -->
			<h2>Service Model (SM)</h2>
			<p>
				<a href="https://openehr.atlassian.net/browse/SPECSM/?selectedTab=com.atlassian.jira.jira-projects-plugin:summary-panel">SPECSM Jira project</a> | 
				<a href="https://openehr.atlassian.net/browse/SPECSM/?selectedTab=com.atlassian.jira.jira-projects-plugin:roadmap-panel">Roadmap</a> | 
				<a href="https://openehr.atlassian.net/browse/SPECSM/?selectedTab=com.atlassian.jira.jira-projects-plugin:issues-panel">Issues</a>
			</p>

			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT"> Documentary Specification </th>
				<th class="TableMainT"> Description </th>
				<th class="TableMainT"> Status </th>
			</tr>
			<tr style="background-color:#FFFCDC;">
				<td class="TableMainC"> EHR Service Model</td>
				<td class="TableMainC"> Definition of the openEHR coarse-grained interface EHR service interface.</td>
				<td class="TableMainC"> development<br class="atl-forced-newline" /><a href="/wiki/display/spec/openEHR+Service+Model">dev page</a></td>
			</tr>
			<tr style="background-color:#FFFCDC;">
				<td class="TableMainC"> vEHR API</td>
				<td class="TableMainC"> API for the openEHR virtual EHR service.</td>
				<td class="TableMainC"> development<br class="atl-forced-newline" /><a href="/wiki/display/spec/vEHR+Service+Specification">dev page</a></td>
			</tr>
			</tbody>
			</table>


			<!-- ------------------------------------------- Terminology ------------------------------------------------- -->
			<h2>Terminology</h2>
			<p>
				<a href="https://openehr.atlassian.net/browse/SPECTERM/?selectedTab=com.atlassian.jira.jira-projects-plugin:summary-panel">SPECTERM Jira project</a> | 
				<a href="https://openehr.atlassian.net/browse/SPECTERM/?selectedTab=com.atlassian.jira.jira-projects-plugin:roadmap-panel">Roadmap</a> | 
				<a href="https://openehr.atlassian.net/browse/SPECTERM/?selectedTab=com.atlassian.jira.jira-projects-plugin:issues-panel">Issues</a>
			</p>
			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT"> Documentary Specification </th>
				<th class="TableMainT"> Description </th>
				<th class="TableMainT"> Status </th>
			</tr>
			<tr>
				<td class="TableMainC"> <a href="/releases/trunk/architecture/terminology.pdf" target="_blank">openEHR Vocabulary</a> </td>
				<td class="TableMainC"> Documentary form of the&nbsp;openEHR terminology, which is a set of vocabularies and code sets used by the reference and archetype models. </td>
				<td class="TableMainC"> stable</td>
			</tr>

			<tr>
				<th class="TableMainT"> Computable Expression </th>
				<th class="TableMainT"> Description </th>
				<th class="TableMainT"> Status </th>
			</tr>
			<tr>
				<td class="TableMainC"> XML </td>
				<td class="TableMainC"> <a href="https://github.com/openEHR/terminology/tree/master/openEHR_RM/RM/Release-1.0.2">XML source file</a></td>
				<td class="TableMainC"> stable</td>
			</tr>
			</tbody>
			</table>


			<!-- ------------------------------------------- Querying ------------------------------------------------- -->
			<h2>Querying</h2>
			<p>
				<a href="https://openehr.atlassian.net/browse/SPECQRY/?selectedTab=com.atlassian.jira.jira-projects-plugin:summary-panel">SPECQRY Jira project</a> | 
				<a href="https://openehr.atlassian.net/browse/SPECQRY/?selectedTab=com.atlassian.jira.jira-projects-plugin:roadmap-panel">Roadmap</a> | 
				<a href="https://openehr.atlassian.net/browse/SPECQRY/?selectedTab=com.atlassian.jira.jira-projects-plugin:issues-panel">Issues</a>
			</p>
			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT"> Documentary Specification </th>
				<th class="TableMainT"> Description </th>
				<th class="TableMainT"> Status </th>
			</tr>
			<tr style="background-color:#FFFFCC;">
				<td class="TableMainC"> <a href="/releases/QUERY/latest/AQL.html">Archetype Query Language (AQL)</a> </td>
				<td class="TableMainC"> Query language based on archetype paths and pattern matching.</td>
				<td class="TableMainC"> trial <br class="atl-forced-newline" /><a href="https://openehr.atlassian.net/wiki/display/spec/Archetype+Query+Language+Description">dev page</a></td>
			</tr>
			<tr style="background-color:#FFFFCC;">
				<td class="TableMainC"> a-path </td>
				<td class="TableMainC"> Xpath-inspired pattern matching language based on archetype paths.</td>
				<td class="TableMainC"> trial <br class="atl-forced-newline" /><a href="/wiki/display/spec/A-path+-+Archetype+Path+Language">dev page</a></td>
			</tr>

			<tr>
				<th class="TableMainT"> Computable Expression </th>
				<th class="TableMainT"> Description </th>
				<th class="TableMainT"> Status </th>
			</tr>
			<tr>
				<td class="TableMainC"> Grammar </td>
				<td class="TableMainC"> <a href="/wiki/display/spec/ANTLR+AQL+grammar">AQL Antlr Grammar</a></td>
				<td class="TableMainC"> trial</td>
			</tr>
			<tr>
				<td class="TableMainC"> Grammar </td>
				<td class="TableMainC"> <a href="/wiki/pages/viewpage.action?pageId=4915236">EBNF a-path Grammar</a></td>
				<td class="TableMainC"> trial</td>
			</tr>
			</tbody>
			</table>



			<!-- ------------------------------------------- CDS ------------------------------------------------- -->
			<h2>Clinical Decision Support (CDS)</h2>
			<p>
				<a href="https://openehr.atlassian.net/browse/SPECCDS/?selectedTab=com.atlassian.jira.jira-projects-plugin:summary-panel">SPECCDS Jira project</a> | 
				<a href="https://openehr.atlassian.net/browse/SPECCDS/?selectedTab=com.atlassian.jira.jira-projects-plugin:roadmap-panel">Roadmap</a> | 
				<a href="https://openehr.atlassian.net/browse/SPECCDS/?selectedTab=com.atlassian.jira.jira-projects-plugin:issues-panel">Issues</a>
			</p>
			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT"> Documentary Specification </th>
				<th class="TableMainT"> Description </th>
				<th class="TableMainT"> Status </th>
			</tr>
			<tr style="background-color:#FFFCDC;">
				<td class="TableMainC"> <a href="https://github.com/openEHR/specifications/blob/master/proposals/GDL/GuideDefinitionLanguage_v0.9.pdf?raw=true">Guideline Definition Language (GDL)</a> </td>
				<td class="TableMainC"> Guideline language based on ADL syntax with extensions.</td>
				<td class="TableMainC"> development<br class="atl-forced-newline" /><a href="https://github.com/openEHR/gdl-tools/wiki">dev page</a></td>
			</tr>			
			</tbody>
			</table>


			<!-- ------------------------------------------- ITS ------------------------------------------------- -->
			<h2>Implementation Technology Specification (ITS)</h2>
			<p>
				<a href="https://openehr.atlassian.net/browse/SPECITS/?selectedTab=com.atlassian.jira.jira-projects-plugin:summary-panel">SPECITS Jira project</a> | 
				<a href="https://openehr.atlassian.net/browse/SPECITS/?selectedTab=com.atlassian.jira.jira-projects-plugin:roadmap-panel">Roadmap</a> | 
				<a href="https://openehr.atlassian.net/browse/SPECITS/?selectedTab=com.atlassian.jira.jira-projects-plugin:issues-panel">Issues</a>
			</p>

			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT"> Specification </th>
				<th class="TableMainT"> Computable form </th>
				<th class="TableMainT"> Description </th>
				<th class="TableMainT"> Status </th>
			</tr>
			<tr>
				<td class="TableMainC"> Reference Model </td>
				<td class="TableMainC"> <a href="/releases/trunk/its/XML-schema">XSDs</a> </td>
				<td class="TableMainC"> XML schema 1.0 expression of the Reference Model.</td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr>
				<td class="TableMainC"> Archetype Model 1.4 </td>
				<td class="TableMainC"> <a href="/releases/trunk/its/XML-schema">XSDs</a> </td>
				<td class="TableMainC"> XML schema 1.0 expression of ADL/AOM 1.4.</td>
				<td class="TableMainC"> stable</td>
			</tr>
			<tr style="background-color:#FFFFCC;">
				<td class="TableMainC"> Templating (OET based) </td>
				<td class="TableMainC"> <a href="https://github.com/openEHR/java-libs/tree/master/oet-parser/src/main/xsd">OET XSD</a> | <a href="https://github.com/openEHR/java-libs/tree/master/oet-parser">Java OET parser</a> </td>
				<td class="TableMainC"> Simple XML format for templates.</td>
				<td class="TableMainC"> trial </td>
			</tr>
			<tr style="background-color:#FFFCDC;">
				<td class="TableMainC"> Archetype Model 2.x </td>
				<td class="TableMainC"> <a href="https://github.com/openEHR/specifications/tree/master/ITS/AOM2/XML-schema">XSDs</a> </td>
				<td class="TableMainC"> XML schema 1.1 expression of ADL/AOM 2.</td>
				<td class="TableMainC"> development</td>
			</tr>
			</tbody>
			</table>

		
			<!-- ------------------------------------------- CONF ------------------------------------------------- -->
			<h2>Conformance</h2>
			<p>
				<a href="https://openehr.atlassian.net/browse/SPECCNF/?selectedTab=com.atlassian.jira.jira-projects-plugin:summary-panel">SPECCNF Jira project</a> | 
				<a href="https://openehr.atlassian.net/browse/SPECCNF/?selectedTab=com.atlassian.jira.jira-projects-plugin:roadmap-panel">Roadmap</a> | 
				<a href="https://openehr.atlassian.net/browse/SPECCNF/?selectedTab=com.atlassian.jira.jira-projects-plugin:issues-panel">Issues</a>
			</p>
			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT"> Documentary Specification </th>
				<th class="TableMainT"> Description </th>
				<th class="TableMainT"> Status </th>
			</tr>
			<tr style="background-color:#DDFCFF;">
				<td class="TableMainC">  Archetype tooling </td>
				<td class="TableMainC"> Conformance profiles for Archetype tooling. </td>
				<td class="TableMainC"> planning<br/><a href="http://www.openehr.org/wiki/display/oecom/openEHR+2014+Roadmap+-+Product+and+Market">wiki page</a></td>
			</tr>
			<tr style="background-color:#DDFCFF;">
				<td class="TableMainC"> EHR Systems </td>
				<td class="TableMainC"> Conformance profiles for EHR system components. </td>
				<td class="TableMainC"> planning<br/><a href="http://www.openehr.org/wiki/display/oecom/openEHR+2014+Roadmap+-+Product+and+Market">wiki page</a></td>
			</tr>
			</tbody>
			</table>


			<a href="index">>> Back to Releases</a>

<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
