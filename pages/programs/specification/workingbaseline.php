<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Working Baseline';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header_english.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<!-- ----------------------------------------- Global index ----------------------------------------------- -->
			<h2><a name="index"></a>Global Index</h2>
			<table class="TableInvisible">
			<tbody>
				<tr>
					<td valign="top">
						<p> <em>Start Here</em> </p>
						<ul>
							<li> <a href="/releases/BASE/latest/architecture_overview.html">openEHR Architecture</a> </li>
							<li> <a href="/releases/AM/latest/Overview.html">Archetype Technology</a> </li>
						</ul>
					</td>

					<td valign="top">
						<p> <em>RM</em> </p>
						<ul>
							<li> <a href="/releases/RM/latest/ehr.html">EHR IM</a> </li>
							<li> <a href="/releases/RM/latest/demographic.html">Demographic IM</a> </li>
							<li> <a href="/releases/RM/latest/common.html">Common IM</a> </li>
							<li> <a href="/releases/RM/latest/data_structures.html">Data Structures IM</a> </li>
							<li> <a href="/releases/RM/latest/data_types.html">Data Types IM</a> </li>
							<li> <a href="/releases/RM/latest/support.html">Support IM</a> </li>
							<li> <a href="/releases/RM/latest/integration.html">Integration IM</a> </li>
							<li> <a href="/releases/RM/latest/ehr_extract.html">EHR Extract IM</a> </li>
							<li> <a href="/releases/RM/latest/docs/index#_class_index"><strong>RM Class Index</strong></a></li>
						</ul>
					</td>

					<td valign="top">
						<p> <em>Archetypes</em> </p>
						<ul>
							<li> <a href="/releases/AM/latest/ADL2.html">ADL 2</a></li>
							<li> <a href="/releases/AM/latest/AOM2.html">AOM 2</a></li>
							<li> <a href="/releases/AM/latest/OPT2.html">OPT 2</a></li>
							<li> <a href="/releases/AM/latest/Identification.html">Identification</a></li>
							<li> <a href="/releases/AM/latest/ADL1.4.html">ADL 1.4</a></li>
							<li> <a href="/releases/AM/latest/AOM1.4.html">AOM 1.4</a></li>
						</ul>
					</td>

					<td valign="top">
						<p> <em>Data Access &amp; Use</em> </p>
						<ul>
							<li> <a href="/releases/QUERY/latest/AQL.html">AQL</a> </li>
							<li> <a href="/releases/CDS/latest/GDL.html">GDL</a> </li>
						</ul>
					</td>

					<td valign="top">
						<p> <em>Generic</em> </p>
						<ul>
							<li> <a href="/releases/BASE/latest/base_types.html">Base Types</a></li>
							<li> <a href="/releases/BASE/latest/odin.html">ODIN</a></li>
							<li> <a href="/releases/BASE/latest/bmm.html">BMM</a></li>
							<li> <a href="/releases/BASE/latest/expression.html">Expressions</a></li>
						</ul>
					</td>
				</tr>
			</tbody>
			</table>

			<!-- ------------------------------ Specification index pages ------------------------------------------- -->
			<h2>Specifications</h2>
			<table class="TableBasic">
				<tbody>
					<tr>
						<th> Component </th>
						<th> Description </th>
					</tr>

					<tr>
						<td> <a name="CDS"></a><a href="/releases/CDS/latest/docs/index">CDS</a></td>
						<td> Clinical Decision Support - specifications for guidelines and related languages, including GDL.</td>
					</tr>
					<tr>
						<td> <a name="QUERY"></a><a href="/releases/QUERY/latest/docs/index">QUERY</a></td>
						<td> Query language specifications, including AQL.</td>
					</tr>
					<tr>
						<td> <a name="INTG"></a><a href="/releases/INTG/latest/docs/index">INTG</a></td>
						<td> Integration specifications, including TDS and TDO.</td>
					</tr>
					<tr>
						<td> <a name="SM"></a><a href="/releases/SM/latest/docs/index">SM</a></td>
						<td> Service Model - service and application programming interface (API) specifications.</td>
					</tr>
					<tr>
						<td> <a name="AM"></a><a href="/releases/AM/latest/docs/index">AM</a></td>
						<td> Archetype Model (1.4 and 2) - Archetype formalism syntax (ADL), object model (AOM), templates (OPT), and Identification.</td>
					</tr>
					<tr>
						<td> <a name="RM"></a><a href="/releases/RM/latest/docs/index">RM</a></td>
						<td> Reference Model - the core information models of the EHR, Demographics and EHR Extract</td>
					</tr>
					<tr>
						<td> <a name="BASE"></a><a href="/releases/BASE/latest/docs/index">BASE</a></td>
						<td> Base models and languages underpinning other specifications; includes BMM, ODIN.</td>
					</tr>
					<tr>
						<td> <a name="TERM"></a><a href="/releases/TERM/latest/docs/index">TERM</a></td>
						<td> openEHR support terminology, used by the RM and other components.</td>
					</tr>
				</tbody>
			</table>
			

			<!-- ----------------------------------------- ITS ------------------------------------------------- -->
			<h2><a name="ITS"></a>Implementation Technology Specification (ITS)</h2>
			<p>
				<a href="https://openehr.atlassian.net/browse/SPECITS/?selectedTab=com.atlassian.jira.jira-projects-plugin:summary-panel">SPECITS Jira project</a> | 
				<a href="https://openehr.atlassian.net/browse/SPECITS/?selectedTab=com.atlassian.jira.jira-projects-plugin:roadmap-panel">Roadmap</a> | 
				<a href="https://openehr.atlassian.net/browse/SPECITS/?selectedTab=com.atlassian.jira.jira-projects-plugin:issues-panel">Issues</a>
			</p>

			<table class="TableBasic">
			<tbody>
			<tr>
				<th> Specification </th>
				<th> Computable form </th>
				<th> Description </th>
				<th> Status </th>
			</tr>
			<tr>
				<td> Reference Model </td>
				<td> <a href="/releases/trunk/its/XML-schema">XSDs</a> </td>
				<td> XML schema 1.0 expression of the Reference Model.</td>
				<td> stable</td>
			</tr>
			<tr>
				<td> Archetype Model 1.4 </td>
				<td> <a href="/releases/trunk/its/XML-schema">XSDs</a> </td>
				<td> XML schema 1.0 expression of ADL/AOM 1.4.</td>
				<td> stable</td>
			</tr>
			<tr>
				<td> Templating (OET based) </td>
				<td> <a href="https://github.com/openEHR/java-libs/tree/master/oet-parser/src/main/xsd">OET XSD</a> | <a href="https://github.com/openEHR/java-libs/tree/master/oet-parser">Java OET parser</a> </td>
				<td> Simple XML format for templates.</td>
				<td> trial </td>
			</tr>
			<tr>
				<td> Archetype Model 2.x </td>
				<td> <a href="https://github.com/openEHR/specifications/tree/master/ITS/AOM2/XML-schema">XSDs</a> </td>
				<td> XML schema 1.1 expression of ADL/AOM 2.</td>
				<td> development</td>
			</tr>
			</tbody>
			</table>

		
			<!-- ----------------------------------------- CONF ------------------------------------------------- -->
			<h2><a name="CONF"></a>Conformance</h2>
			<p>
				<a href="https://openehr.atlassian.net/browse/SPECCNF/?selectedTab=com.atlassian.jira.jira-projects-plugin:summary-panel">SPECCNF Jira project</a> | 
				<a href="https://openehr.atlassian.net/browse/SPECCNF/?selectedTab=com.atlassian.jira.jira-projects-plugin:roadmap-panel">Roadmap</a> | 
				<a href="https://openehr.atlassian.net/browse/SPECCNF/?selectedTab=com.atlassian.jira.jira-projects-plugin:issues-panel">Issues</a>
			</p>
			<table class="TableBasic">
			<tbody>
			<tr>
				<th> Documentary Specification </th>
				<th> Description </th>
				<th> Status </th>
			</tr>
			<tr>
				<td>  Archetype tooling </td>
				<td> Conformance profiles for Archetype tooling. </td>
				<td> <a href="http://www.openehr.org/wiki/display/oecom/openEHR+2014+Roadmap+-+Product+and+Market">wiki page</a></td>
			</tr>
			<tr>
				<td> EHR Systems </td>
				<td> Conformance profiles for EHR system components. </td>
				<td> <a href="http://www.openehr.org/wiki/display/oecom/openEHR+2014+Roadmap+-+Product+and+Market">wiki page</a></td>
			</tr>
			</tbody>
			</table>


<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
