<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Working Baseline';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
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
							<li> <a href="/releases/BASE/latest/architecture_overview.html" target="_blank">openEHR Architecture</a> </li>
							<li> <a href="/releases/AM/latest/Overview.html" target="_blank">Archetype Technology</a> </li>
							<li> <a href="/releases/trunk/UML" target="_blank">GLOBAL UML</a> </li>
							<li> <a href="/releases/BASE/latest/docs/global/index.html" target="_blank">CLASS INDEX</a></li>
						</ul>
					</td>

					<td valign="top">
						<p> <em>RM</em> </p>
						<ul>
							<li> <a href="/releases/RM/latest/ehr.html" target="_blank">EHR</a> </li>
							<li> <a href="/releases/RM/latest/demographic.html" target="_blank">Demographic</a> </li>
							<li> <a href="/releases/RM/latest/common.html" target="_blank">Common</a> </li>
							<li> <a href="/releases/RM/latest/data_structures.html" target="_blank">Data Structures</a> </li>
							<li> <a href="/releases/RM/latest/data_types.html" target="_blank">Data Types</a> </li>
							<li> <a href="/releases/RM/latest/support.html" target="_blank">Support</a> </li>
							<li> <a href="/releases/RM/latest/integration.html" target="_blank">Integration</a> </li>
							<li> <a href="/releases/RM/latest/ehr_extract.html" target="_blank">EHR Extract</a> </li>
							<li> <a href="/releases/trunk/UML/#Diagrams___18_2_83e026d_1485017378329_293966_5101" target="_blank">Instruction<br>State Machine</a></li>
						</ul>
					</td>

					<td valign="top">
						<p> <em>Archetypes</em> </p>
						<ul>
							<li> <a href="/releases/AM/latest/ADL2.html" target="_blank">ADL 2</a></li>
							<li> <a href="/releases/AM/latest/AOM2.html" target="_blank">AOM 2</a></li>
							<li> <a href="/releases/AM/latest/OPT2.html" target="_blank">OPT 2</a></li>
							<li> <a href="/releases/AM/latest/Identification.html" target="_blank">Identification</a></li>
							<li> <a href="/releases/AM/latest/ADL1.4.html" target="_blank">ADL 1.4</a></li>
							<li> <a href="/releases/AM/latest/AOM1.4.html" target="_blank">AOM 1.4</a></li>
						</ul>
						<p> </p>

						<p> <em>Terminology</em> </p>
						<ul>
							<li> <a href="/releases/TERM/latest/SupportTerminology.html" target="_blank">Terminology</a> </li>
						</ul>
					</td>

					<td valign="top">
						<p> <em>Querying</em> </p>
						<ul>
							<li> <a href="/releases/QUERY/latest/AQL.html" target="_blank">AQL</a> </li>
						</ul>
						<p> </p>

						<p> <em>Decision Support</em> </p>
						<ul>
							<li> <a href="/releases/CDS/latest/GDL.html" target="_blank">GDL</a> </li>
						</ul>
						<p> </p>

						<p> <em>Process</em> </p>
						<ul>
							<li> <a href="/releases/PROC/latest/task_planning.html" target="_blank">Task Planning</a> </li>
						</ul>
					</td>

					<td valign="top">
						<p> <em>Service Model</em> </p>
						<ul>
							<li> <a href="/releases/SM/latest/openehr_platform.html" target="_blank">openEHR Platform</a> </li>
						</ul>
						<p> </p>

						<p> <em>REST APIs</em> </p>
						<ul>
							<li> <a href="/releases/ITS/latest/docs/ehr.html" target="_blank">*EHR</a> </li>
							<li> <a href="/releases/ITS/latest/docs/query.html" target="_blank">*Query</a> </li>
							<li> <a href="/releases/ITS/latest/docs/definitions.html" target="_blank">*Definitions</a> </li>
						</ul>
					</td>

					<td valign="top">
						<p> <em>Infrastructure</em> </p>
						<ul>
							<li> <a href="/releases/BASE/latest/foundation_types.html" target="_blank">Foundation Types</a></li>
							<li> <a href="/releases/BASE/latest/base_types.html" target="_blank">Base Types</a></li>
							<li> <a href="/releases/BASE/latest/resource.html" target="_blank">Resource</a></li>
						</ul>
						<p> </p>

						<p> <em>Languages</em> </p>
						<ul>
							<li> <a href="/releases/LANG/latest/odin.html" target="_blank">ODIN</a></li>
							<li> <a href="/releases/LANG/latest/bmm.html" target="_blank">BMM</a></li>
							<li> <a href="/releases/LANG/latest/bmm_persistence.html" target="_blank">P_BMM</a></li>
							<li> <a href="/releases/LANG/latest/expression.html" target="_blank">*Expression</a></li>
						</ul>
					</td>

				</tr>
			</tbody>
			</table>

			<p>* = in development.

			<!-- ------------------------------ Specification index pages ------------------------------------------- -->
			<h2>Component Specifications Index</h2>
			<table class="TableBasic">
				<tbody>
					<tr>
						<th style="text-align:center"> Component </th>
						<th style="text-align:center"> Description </th>
						<th style="text-align:center"> Releases (Jira) </th>
						<th style="text-align:center"> UML source </th>
					</tr>

					<tr>
						<td colspan="4" style="text-align:center"><em>Productisation</em></td>
					</tr>

					<!-------------- CNF --------------->
					<tr>
						<td> <a name="CNF"></a><a href="/releases/CNF/latest/docs/index" target="_blank">CNF</a></td>
						<td> Conformance specifications.</td>
						<td> <a href="https://openehr.atlassian.net/projects/SPECCNF?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=unreleased" target="_blank">Roadmap</a>|<a href="https://openehr.atlassian.net/projects/SPECCNF?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released" target="_blank">Previous</a></td>
						<td> </td>
					</tr>

					<!-------------- service architecture --------------->
					<tr>
						<td colspan="4"style="text-align:center"><em>Service Architecture</em></td>
					</tr>

					<!-------------- ITS --------------->
					<tr>
						<td> <a name="ITS"></a><a href="/releases/ITS/latest/docs/index" target="_blank">ITS</a></td>
						<td> Implementation Technology Specification, including REST APIs.</td>
						<td> <a href="https://openehr.atlassian.net/projects/SPECITS?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=unreleased" target="_blank">Roadmap</a>|<a href="https://openehr.atlassian.net/projects/SPECITS?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released" target="_blank">Previous</a></td>
						<td> </td>
					</tr>

					<!-------------- SM --------------->
					<tr>
						<td> <a name="SM"></a><a href="/releases/SM/latest/docs/index" target="_blank">SM</a></td>
						<td> Service Model - abstract service and application programming interface (API) specifications.</td>
						<td> <a href="https://openehr.atlassian.net/projects/SPECSM?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=unreleased" target="_blank">Roadmap</a>|<a href="https://openehr.atlassian.net/projects/SPECSM?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released" target="_blank">Previous</a></td>
						<td> <a href="/releases/SM/latest/UML/openEHR_UML-SM.mdzip">openEHR_UML-SM.mdzip</a></td>
					</tr>

					<!-------------- domains --------------->
					<tr>
						<td colspan="4"style="text-align:center"><em>Domains</em></td>
					</tr>

					<!-------------- INTG --------------->
					<tr>
						<td> <a name="INTG"></a><a href="/releases/INTG/latest/docs/index" target="_blank">INTG</a></td>
						<td> Integration specifications, including TDS and TDO.</td>
						<td> </td>
						<td> </td>
					</tr>

					<!-------------- CDS --------------->
					<tr>
						<td> <a name="CDS"></a><a href="/releases/CDS/latest/docs/index" target="_blank">CDS</a></td>
						<td> Clinical Decision Support - specifications for guidelines and related languages, including GDL.</td>
						<td> <a href="https://openehr.atlassian.net/projects/SPECCDS?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=unreleased" target="_blank">Roadmap</a>|<a href="https://openehr.atlassian.net/projects/SPECCDS?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released" target="_blank">Previous</a></td>
						<td> </td>
					</tr>

					<!-------------- PROC --------------->
					<tr>
						<td> <a name="PROC"></a><a href="/releases/PROC/latest/docs/index" target="_blank">PROC</a></td>
						<td> Process Model - specifications for Care pathways, Task planning, Care plans and clinical workflow.</td>
						<td> <a href="https://openehr.atlassian.net/projects/SPECPROC?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=unreleased" target="_blank">Roadmap</a>|<a href="https://openehr.atlassian.net/projects/SPECPROC?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released" target="_blank">Previous</a></td>
						<td> <a href="/releases/PROC/latest/UML/openEHR_UML-PROC.mdzip">openEHR_UML-PROC.mdzip</a></td>
					</tr>

					<!-------------- core specs --------------->
					<tr>
						<td colspan="4" style="text-align:center"><em>Core specifications</em></td>
					</tr>

					<!-------------- QUERY --------------->
					<tr>
						<td> <a name="QUERY"></a><a href="/releases/QUERY/latest/docs/index" target="_blank">QUERY</a></td>
						<td> Query language specifications, including AQL.</td>
						<td> <a href="https://openehr.atlassian.net/projects/SPECQUERY?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=unreleased" target="_blank">Roadmap</a>|<a href="https://openehr.atlassian.net/projects/SPECQUERY?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released" target="_blank">Previous</a></td>
						<td> </td>
					</tr>

					<!-------------- RM --------------->
					<tr>
						<td> <a name="RM"></a><a href="/releases/RM/latest/docs/index" target="_blank">RM</a></td>
						<td>
							Reference Model - the core information models of the EHR,<br>
							Demographics, EHR Extract
						</td>
						<td> <a href="https://openehr.atlassian.net/projects/SPECRM?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=unreleased" target="_blank">Roadmap</a>|<a href="https://openehr.atlassian.net/projects/SPECRM?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released" target="_blank">Previous</a></td>
						<td> <a href="/releases/RM/latest/UML/openEHR_UML-RM.mdzip">openEHR_UML-RM.mdzip</a></td>
					</tr>

					<!-------------- AM --------------->
					<tr>
						<td> <a name="AM"></a><a href="/releases/AM/latest/docs/index" target="_blank">AM</a></td>
						<td> 
							Archetype Model (1.4 and 2) - Archetype formalism syntax (ADL),<br>
							Archetype object model (AOM),<br>
							Operational Template Model (OPT),<br>
							Identification.
						</td>
						<td> <a href="https://openehr.atlassian.net/projects/SPECAM?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=unreleased" target="_blank">Roadmap</a>|<a href="https://openehr.atlassian.net/projects/SPECAM?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released" target="_blank">Previous</a></td>
						<td> 
							<a href="/releases/AM/latest/UML/openEHR_UML-AM.mdzip">openEHR_UML-AM.mdzip</a><br>
							<a href="/releases/AM/latest/UML/openEHR_UML-AM-14.mdzip">openEHR_UML-AM-14.mdzip</a>
						</td>
					</tr>

					<!-------------- LANG --------------->
					<tr>
						<td> <a name="LANG"></a><a href="/releases/LANG/latest/docs/index" target="_blank">LANG</a></td>
						<td> Generic languages used in other specifications; includes BMM, ODIN.</td>
						<td> <a href="https://openehr.atlassian.net/projects/SPECLANG?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=unreleased" target="_blank">Roadmap</a>|<a href="https://openehr.atlassian.net/projects/SPECLANG?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released" target="_blank">Previous</a></td>
						<td> <a href="/releases/LANG/latest/UML/openEHR_UML-LANG.mdzip">openEHR_UML-LANG.mdzip</a></td>
					</tr>

					<!-------------- BASE --------------->
					<tr>
						<td> <a name="BASE"></a><a href="/releases/BASE/latest/docs/index" target="_blank">BASE</a></td>
						<td> Base models underpinning openEHR, including Foundation and Base Types.</td>
						<td> <a href="https://openehr.atlassian.net/projects/SPECBASE?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=unreleased" target="_blank">Roadmap</a>|<a href="https://openehr.atlassian.net/projects/SPECBASE?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released" target="_blank">Previous</a></td>
						<td> <a href="/releases/BASE/latest/UML/openEHR_UML-Base.mdzip">openEHR_UML-BASE.mdzip</a></td>
					</tr>

					<!-------------- Knowledge resources --------------->
					<tr>
						<td colspan="4" style="text-align:center"><em>Knowledge Resources</em></td>
					</tr>

					<!-------------- TERM --------------->
					<tr>
						<td> <a name="TERM"></a><a href="/releases/TERM/latest/docs/index" target="_blank">TERM</a></td>
						<td> openEHR support terminology, used by the RM and other components.</td>
						<td> <a href="https://openehr.atlassian.net/projects/SPECTERM?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=unreleased" target="_blank">Roadmap</a>|<a href="https://openehr.atlassian.net/projects/SPECTERM?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released" target="_blank">Previous</a></td>
						<td> </td>
					</tr>
				</tbody>
			</table>
			

<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
