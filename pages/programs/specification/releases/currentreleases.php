<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Current Releases';

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
			
			<!-- ------------------------------ Specification index pages ------------------------------------------- -->
			<h2>Specifications pages</h2>
			<h3><a name="BASE"></a><a href="/releases/BASE/latest/docs/index">Base Models (BASE)</a></h3>
			<h3><a name="RM"></a><a href="/releases/RM/latest/docs/index">Reference Model (RM)</a></h3>
			<h3><a name="AM"></a><a href="/releases/AM/latest/docs/index">Archetype Model (AM)</a></h3>
			<h3><a name="QUERY"></a><a href="/releases/QUERY/latest/docs/index">Querying Languages (QUERY)</a></h3>
			<h3><a name="TERM"></a><a href="/releases/TERM/latest/docs/index">openEHR Terminology</a></h3>
			<h3><a name="SM"></a><a href="/releases/SM/latest/docs/index">Service Model (SM)</a></h3>
			<h3><a name="CDS"></a><a href="/releases/CDS/latest/docs/index">Clinical Decision Support (CDS)</a></h3>

			<!-- ------------------------------------------- ITS ------------------------------------------------- -->
			<h2><a name="ITS"></a>Implementation Technology Specification (ITS)</h2>
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
			<h2><a name="CONF"></a>Conformance</h2>
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
