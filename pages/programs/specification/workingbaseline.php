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
			<table class="TableInvisible">
				<tbody>
					<tr>
						<td valign="top">
							<a href="/releases/BASE/latest/architecture_overview.html" target="_blank">openEHR Architecture</a> |
							<a href="/releases/AM/latest/Overview.html" target="_blank">Archetype Technology</a> |
							<a href="/releases/trunk/UML" target="_blank">GLOBAL UML</a> |
							<a href="/releases/AA_GLOBAL/latest/docs/index.html" target="_blank">CLASS INDEX</a>
						</td>
					</tr>
				</tbody>
			</table>

			<!-- ------------------------------ Specification index pages ------------------------------------------- -->
			<table class="TableBasic">
				<tbody>
					<tr>
						<th colspan="6" style="text-align:center"> Component Specifications Index </th>
					</tr>

					<!-------------- CNF --------------->
					<tr>
						<td> <a name="CNF"></a><a href="/releases/CNF/latest/docs/index" target="_blank"><b>CNF</b> (Conformance)</a><br>
						<a href="https://openehr.atlassian.net/issues/?filter=11108" target="_blank">PRs</a>|<a href="https://openehr.atlassian.net/projects/SPECCNF?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released-unreleased" target="_blank">CRs</a></td>
						<td colspan="5" style="text-align:center">
							<table width="100%">
								<tbody>
									<tr>
										<td style="text-align:center"><a href="/releases/CNF/latest/openehr_platform_conformance.html" target="_blank">Platform Conformance</a></td>
									</tr>
								</tbody>
							</table>
						</td>
						
					</tr>

					<!-------------- ITS --------------->
					<tr>
						<td> <a name="ITS"></a><a href="/releases/ITS/latest/docs/index" target="_blank"><b>ITS</b> (Implementation<br>Technologies)</a><br>
						<a href="https://openehr.atlassian.net/issues/?filter=11118" target="_blank">PRs</a>|<a href="https://openehr.atlassian.net/projects/SPECITS?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released-unreleased" target="_blank">CRs</a>
						</td>
						<td colspan="5" style="text-align:center">
							<table width="100%">
								<tbody>
									<tr>
										<td style="text-align:center"><a href="/releases/ITS-REST/latest/docs/ehr.html" target="_blank">EHR REST API</a></td>
										<td style="text-align:center"><a href="/releases/ITS-REST/latest/docs/query.html" target="_blank">Query REST API</a></td>
										<td style="text-align:center"><a href="/releases/ITS-REST/latest/docs/definitions.html" target="_blank">Definitions REST API</a></td>
									</tr>
									<tr>
										<td style="text-align:center"><a href="https://github.com/openEHR/specifications-ITS-XML" target="_blank">XSDs</a></td>
										<td style="text-align:center"><a href="https://github.com/openEHR/specifications-ITS-JSON" target="_blank">JSON schema</a></td>
										<td style="text-align:center"><a href="https://github.com/openEHR/specifications-ITS-BMM" target="_blank">BMMs</a></td>
									</tr>
								</tbody>
							</table>
						</td>
						
					</tr>

					<!-------------- SM --------------->
					<tr>
						<td> <a name="SM"></a><a href="/releases/SM/latest/docs/index" target="_blank"><b>SM</b> (Service Model)</a><br>
						<a href="https://openehr.atlassian.net/issues/?filter=11104" target="_blank">PRs</a>|<a href="https://openehr.atlassian.net/projects/SPECSM?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released-unreleased" target="_blank">CRs</a></td>
						<td colspan="5" style="text-align:center">
							<table width="100%">
								<tbody>
									<tr>
										<td style="text-align:center"><a href="/releases/SM/latest/openehr_platform.html" target="_blank">Platform Services</a></td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>

					<!-------------- CDS --------------->
					<tr>
						<td> <a name="CDS"></a><a href="/releases/CDS/latest/docs/index" target="_blank"><b>CDS</b> (Clinical Decision<br>Support)</a><br>
						<a href="https://openehr.atlassian.net/issues/?filter=11107" target="_blank">PRs</a>|<a href="https://openehr.atlassian.net/projects/SPECCDS?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released-unreleased" target="_blank">CRs</a></td>
						<td style="text-align:center">
							<table width="100%">
								<tbody>
									<tr>
										<td style="text-align:center"> <a href="/releases/CDS/latest/GDL.html" target="_blank">GDL</a></td>
									</tr>
								</tbody>
							</table>
						</td>

					<!-------------- PROC --------------->
						<td> <a name="PROC"></a><a href="/releases/PROC/latest/docs/index" target="_blank"><b>PROC</b> (Process<br>Model)</a><br>
						<a href="https://openehr.atlassian.net/issues/?filter=11106" target="_blank">PRs</a>|<a href="https://openehr.atlassian.net/projects/SPECPROC?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released-unreleased" target="_blank">CRs</a></td>
						<td colspan="3" style="text-align:center">
							<table width="100%">
								<tbody>
									<tr>
										<td style="text-align:center"><a href="/releases/PROC/latest/task_planning.html" target="_blank">Task Planning</a></td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>

					<!-------------- QUERY --------------->
					<tr>
						<td> <a name="QUERY"></a><a href="/releases/QUERY/latest/docs/index" target="_blank"><b>QUERY</b> (Query language)</a><br>
						<a href="https://openehr.atlassian.net/issues/?filter=11109" target="_blank">PRs</a>|<a href="https://openehr.atlassian.net/projects/SPECQUERY?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released-unreleased" target="_blank">CRs</a></td>
						<td colspan="5" style="text-align:center">
							<table width="100%">
								<tbody>
									<tr>
										<td style="text-align:center"><a href="/releases/QUERY/latest/AQL.html" target="_blank">AQL</a></td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>

					<!-------------- RM --------------->
					<tr>
						<td> <a name="RM"></a><a href="/releases/RM/latest/docs/index" target="_blank"><b>RM</b><br>(Reference<br>Model)</a><br>
						<a href="https://openehr.atlassian.net/issues/?filter=11103" target="_blank">PRs</a>|<a href="https://openehr.atlassian.net/projects/SPECRM?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released-unreleased" target="_blank">CRs</a></td>
						<td style="text-align:center">
							<table>
								<tbody>
									<tr>
										<td style="text-align:center"><a href="/releases/RM/latest/demographic.html" target="_blank">Demographic</a></td>
										<td style="text-align:center"><a href="/releases/RM/latest/ehr.html" target="_blank">EHR</a></td>
										<td style="text-align:center"><a href="/releases/RM/latest/ehr_extract.html" target="_blank">EHR Extract</a></td>
									</tr>
									<tr>
										<td colspan="2" style="text-align:center"><a href="/releases/RM/latest/common.html" target="_blank">Common</a></td>
										<td style="text-align:center"> <a href="/releases/RM/latest/integration.html" target="_blank">Integration</a></td>
									</tr>
									<tr>
										<td  colspan="2" style="text-align:center"><a href="/releases/RM/latest/data_structures.html" target="_blank">Data Structures</a></td>
										<td style="text-align:center"><a href="/releases/RM/latest/data_types.html" target="_blank">Data Types</a></td>
									</tr>
									<tr>
										<td colspan="3" style="text-align:center"><a href="/releases/RM/latest/support.html" target="_blank">Support</a></td>
									</tr>
								</tbody>
							</table>
						</td>

					<!-------------- AM --------------->
						<td> <a name="AM"></a><a href="/releases/AM/latest/docs/index" target="_blank"><b>AM</b><br>(Archetype<br>Model)</a><br>
						<a href="https://openehr.atlassian.net/issues/?filter=11101" target="_blank">PRs</a>|<a href="https://openehr.atlassian.net/projects/SPECAM?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released-unreleased" target="_blank">CRs</a></td>
						<td style="text-align:center">
							<table>
								<tbody>
									<tr>
										<td style="text-align:center"><a href="" target="_blank">OPT 1.4</a></td>
										<td style="text-align:center"><a href="/releases/AM/latest/OPT2.html" target="_blank">OPT 2</a></td>
									</tr>
									<tr>
										<td style="text-align:center"> <a href="/releases/AM/latest/ADL1.4.html" target="_blank">ADL 1.4</a></td>
										<td style="text-align:center"><a href="/releases/AM/latest/ADL2.html" target="_blank">ADL 2</a></td>
									</tr>
									<tr>
										<td style="text-align:center"><a href="/releases/AM/latest/AOM1.4.html" target="_blank">AOM 1.4</a></td>
										<td style="text-align:center"><a href="/releases/AM/latest/AOM2.html" target="_blank">AOM 2</a></td>
									</tr>
									<tr>
										<td colspan="2" style="text-align:center"><a href="/releases/AM/latest/Identification.html" target="_blank">Identification</a></td>
									</tr>
								</tbody>
							</table>
						</td>

					<!-------------- LANG --------------->
						<td> <a name="LANG"></a><a href="/releases/LANG/latest/docs/index" target="_blank"><b>LANG</b><br>(Generic<br>languages)</a><br>
						<a href="https://openehr.atlassian.net/issues/?filter=11116" target="_blank">PRs</a>|<a href="https://openehr.atlassian.net/projects/SPECLANG?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released-unreleased" target="_blank">CRs</a></td>
						<td style="text-align:center">
							<table>
								<tbody>
									<tr>
										<td style="text-align:center"><a href="/releases/LANG/latest/EL.html" target="_blank">*Expression</a></td>
									</tr>
									<tr>
										<td style="text-align:center"><a href="/releases/LANG/latest/bmm.html" target="_blank">BMM</a></td>
									</tr>
									<tr>
										<td style="text-align:center"><a href="/releases/LANG/latest/bmm_persistence.html" target="_blank">P_BMM</a></td>
									</tr>
									<tr>
										<td style="text-align:center"><a href="/releases/LANG/latest/odin.html" target="_blank">ODIN</a></td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>

					<!-------------- BASE --------------->
					<tr>
						<td> <a name="BASE"></a><a href="/releases/BASE/latest/docs/index" target="_blank"><b>BASE</b> (Base<br>models)</a><br>
							<a href="https://openehr.atlassian.net/issues/?filter=11105" target="_blank">PRs</a>|<a href="https://openehr.atlassian.net/projects/SPECBASE?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released-unreleased" target="_blank">CRs</a></td>
						<td colspan="5" style="text-align:center">
							<table width="100%">
								<tbody>
									<tr>
										<td style="text-align:center"><a href="/releases/BASE/latest/base_types.html" target="_blank">Base Types</a></td>
										<td style="text-align:center"><a href="/releases/BASE/latest/resource.html" target="_blank">Resource</a></td>
									</tr>
									<tr>
										<td colspan="2" style="text-align:center"><a href="/releases/BASE/latest/foundation_types.html" target="_blank">Foundation Types</a></td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>

					<!-------------- TERM --------------->
					<tr>
						<td> <a name="TERM"></a><a href="/releases/TERM/latest/docs/index" target="_blank"><b>TERM</b> (Terminology)</a><br>
							<a href="https://openehr.atlassian.net/issues/?filter=11110" target="_blank">PRs</a>|<a href="https://openehr.atlassian.net/projects/SPECTERM?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released-unreleased" target="_blank">CRs</a></td>
						<td colspan="5" style="text-align:center">
							<table width="100%">
								<tbody>
									<tr>
										<td style="text-align:center"><a href="/releases/TERM/latest/SupportTerminology.html" target="_blank">openEHR Terminology</a></td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
				</tbody>
			</table>
			
			<!-- ------------------------------ UML quick access ------------------------------------------- -->
			<h2>UML Model Files</h2>
			<table class="TableBasic">
				<tbody>
					<tr>
						<th style="text-align:center"> Component </th>
						<th style="text-align:center"> UML source </th>
					</tr>

					<!-------------- SM --------------->
					<tr>
						<td> <a name="SM"></a><a href="/releases/SM/latest/docs/index" target="_blank">SM</a></td>
						<td> <a href="/releases/SM/latest/UML/openEHR_UML-SM.mdzip">openEHR_UML-SM.mdzip</a></td>
					</tr>

					<!-------------- PROC --------------->
					<tr>
						<td> <a name="PROC"></a><a href="/releases/PROC/latest/docs/index" target="_blank">PROC</a></td>
						<td> <a href="/releases/PROC/latest/UML/openEHR_UML-PROC.mdzip">openEHR_UML-PROC.mdzip</a></td>
					</tr>

					<!-------------- RM --------------->
					<tr>
						<td> <a name="RM"></a><a href="/releases/RM/latest/docs/index" target="_blank">RM</a></td>
						<td> <a href="/releases/RM/latest/UML/openEHR_UML-RM.mdzip">openEHR_UML-RM.mdzip</a></td>
					</tr>

					<!-------------- AM --------------->
					<tr>
						<td> <a name="AM"></a><a href="/releases/AM/latest/docs/index" target="_blank">AM</a></td>
						<td> 
							<a href="/releases/AM/latest/UML/openEHR_UML-AM.mdzip">openEHR_UML-AM.mdzip</a><br>
							<a href="/releases/AM/latest/UML/openEHR_UML-AM-14.mdzip">openEHR_UML-AM-14.mdzip</a>
						</td>
					</tr>

					<!-------------- LANG --------------->
					<tr>
						<td> <a name="LANG"></a><a href="/releases/LANG/latest/docs/index" target="_blank">LANG</a></td>
						<td> <a href="/releases/LANG/latest/UML/openEHR_UML-LANG.mdzip">openEHR_UML-LANG.mdzip</a></td>
					</tr>

					<!-------------- BASE --------------->
					<tr>
						<td> <a name="BASE"></a><a href="/releases/BASE/latest/docs/index" target="_blank">BASE</a></td>
						<td> <a href="/releases/BASE/latest/UML/openEHR_UML-Base.mdzip">openEHR_UML-BASE.mdzip</a></td>
					</tr>

				</tbody>
			</table>
			

<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
