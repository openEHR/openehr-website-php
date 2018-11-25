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

			<!=============== Implementation Specs ===============>
			<table class="TableBasic">
				<tbody>
					<tr>
						<th colspan="2" style="text-align:center"> Implementation Specifications </th>
					</tr>

					<!-------------- CNF --------------->
					<tr>
						<td> <a name="CNF"></a><a href="/releases/CNF/latest/docs/index" target="_blank"><b>CNF</b> (Conformance)</a><br>
						<a href="https://openehr.atlassian.net/issues/?filter=11108" target="_blank">PRs</a>|<a href="https://openehr.atlassian.net/projects/SPECCNF?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released-unreleased" target="_blank">CRs</a></td>
						<td style="text-align:center">
							<table width="100%">
								<tbody>
									<tr>
										<td style="text-align:center"><a href="/releases/CNF/latest/openehr_platform_conformance.html" target="_blank"><b>Platform Conformance</b></a></td>
									</tr>
								</tbody>
							</table>
						</td>
						
					</tr>

					<!-------------- ITS --------------->
					<tr>
						<td> <a name="ITS"></a><a href="/releases/ITS/latest/docs/index" target="_blank"><b>ITS</b> (Implementation Technologies)</a><br>
						<a href="https://openehr.atlassian.net/issues/?filter=11118" target="_blank">PRs</a>|<a href="https://openehr.atlassian.net/projects/SPECITS?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released-unreleased" target="_blank">CRs</a>
						</td>
						<td style="text-align:center">
							<table width="100%">
								<tbody>
									<tr>
										<td colspan="2" style="text-align:center">REST APIs<br>
                                            <a href="/releases/ITS-REST/latest/docs/ehr.html" target="_blank"><b>EHR</b></a>, 
                                            <a href="/releases/ITS-REST/latest/docs/query.html" target="_blank"><b>Query</b></a>, 
                                            <a href="/releases/ITS-REST/latest/docs/definitions.html" target="_blank"><b>Definitions</b></a>
                                        </td>
									</tr>
									<tr>
										<td style="text-align:center">
                                            <a href="https://github.com/openEHR/specifications-ITS-XML" target="_blank"><b>XSDs</b></a>
                                        </td>
										<td style="text-align:center">
                                            <a href="https://github.com/openEHR/specifications-ITS-JSON" target="_blank"><b>JSON schema</b></a>
                                        </td>
									</tr>
									<tr>
										<td colspan="2" style="text-align:center"><a href="https://github.com/openEHR/specifications-ITS-BMM" target="_blank"><b>BMMs</b></a></td>
									</tr>
								</tbody>
							</table>
						</td>
						
					</tr>
				</tbody>
			</table>

			<!=============== Formal Specs ===============>
			<table class="TableBasic">
				<tbody>
					<tr>
						<th colspan="2" style="text-align:center"> Formal Specifications</th>
					</tr>

					<!-------------- SM --------------->
					<tr>
						<td> <a name="SM"></a><a href="/releases/SM/latest/docs/index" target="_blank"><b>SM</b> (Service Model)</a><br>
						<a href="https://openehr.atlassian.net/issues/?filter=11104" target="_blank">PRs</a>|<a href="https://openehr.atlassian.net/projects/SPECSM?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released-unreleased" target="_blank">CRs</a></td>
						<td style="text-align:center">
							<table width="100%">
								<tbody>
									<tr>
										<td style="text-align:center"><a href="/releases/SM/latest/openehr_platform.html" target="_blank"><b>Platform Services</b></a></td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>

					<!-------------- CDS --------------->
					<tr>
						<td> <a name="CDS"></a><a href="/releases/CDS/latest/docs/index" target="_blank"><b>CDS</b> (Clinical Decision Support)</a><br>
						<a href="https://openehr.atlassian.net/issues/?filter=11107" target="_blank">PRs</a>|<a href="https://openehr.atlassian.net/projects/SPECCDS?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released-unreleased" target="_blank">CRs</a></td>
						<td style="text-align:center">
							<table width="100%">
								<tbody>
									<tr>
										<td style="text-align:center"> <a href="/releases/CDS/latest/GDL.html" target="_blank"><b>GDL</b></a></td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>

					<!-------------- PROC --------------->
					<tr>
						<td>
                            <a name="PROC"></a>
                            <a href="/releases/PROC/latest/docs/index" target="_blank"><b>PROC</b> (Process Model)</a><br>
						    <a href="https://openehr.atlassian.net/issues/?filter=11106" target="_blank">PRs</a>|
                            <a href="https://openehr.atlassian.net/projects/SPECPROC?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released-unreleased" target="_blank">CRs</a>
                        </td>
						<td style="text-align:center">
							<table width="100%">
								<tbody>
									<tr>
										<td style="text-align:center">
                                            <a href="/releases/PROC/latest/task_planning.html" target="_blank"><b>Task Planning</b></a><br>
                                            Work Plan, Task Plan, Event
                                        </td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>

					<!-------------- QUERY --------------->
					<tr>
						<td> <a name="QUERY"></a><a href="/releases/QUERY/latest/docs/index" target="_blank"><b>QUERY</b> (Query language)</a><br>
						<a href="https://openehr.atlassian.net/issues/?filter=11109" target="_blank">PRs</a>|<a href="https://openehr.atlassian.net/projects/SPECQUERY?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released-unreleased" target="_blank">CRs</a></td>
						<td style="text-align:center">
							<table width="100%">
								<tbody>
									<tr>
										<td style="text-align:center"><a href="/releases/QUERY/latest/AQL.html" target="_blank"><b>AQL</b></a></td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>

					<!-------------- RM --------------->
					<tr>
						<td> <a name="RM"></a><a href="/releases/RM/latest/docs/index" target="_blank"><b>RM</b><br>(Reference Model)</a><br>
						<a href="https://openehr.atlassian.net/issues/?filter=11103" target="_blank">PRs</a>|<a href="https://openehr.atlassian.net/projects/SPECRM?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released-unreleased" target="_blank">CRs</a></td>
						<td style="text-align:center">
							<table>
								<tbody>
									<tr>
										<td style="text-align:center">
                                            <a href="/releases/RM/latest/demographic.html" target="_blank"><b>Demographic</b></a><br>
                                            Party, Party_relationship, Actor, Role, Contact, Address
                                        </td>
										<td style="text-align:center">
                                            <a href="/releases/RM/latest/ehr.html" target="_blank"><b>EHR</b></a><br>
                                            Composition, Section, Entry, Observation,
                                            Evaluation, Instruction, Action, Admin_entry
                                        </td>
										<td style="text-align:center">
                                            <a href="/releases/RM/latest/ehr_extract.html" target="_blank"><b>EHR Extract</b></a><br>
                                            OpenehrExtract, GenericExtract
                                        </td>
									</tr>
									<tr>
										<td colspan="2" style="text-align:center">
                                            <a href="/releases/RM/latest/common.html" target="_blank"><b>Common</b></a><br>
                                            Versioned_object, Version, Party_self, Audit_details
                                        </td>
										<td style="text-align:center">
                                            <a href="/releases/RM/latest/integration.html" target="_blank"><b>Integration</b></a>
                                        </td>
									</tr>
									<tr>
										<td  colspan="2" style="text-align:center"><a href="/releases/RM/latest/data_structures.html" target="_blank"><b>Data Structures</b></a></td>
										<td style="text-align:center">
                                            <a href="/releases/RM/latest/data_types.html" target="_blank"><b>Data Types</b></a>
                                        </td>
									</tr>
									<tr>
										<td colspan="3" style="text-align:center"><a href="/releases/RM/latest/support.html" target="_blank"><b>Support</b></a></td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>

					<!-------------- AM --------------->
					<tr>
						<td> <a name="AM"></a><a href="/releases/AM/latest/docs/index" target="_blank"><b>AM</b><br>(Archetype Model)</a><br>
						<a href="https://openehr.atlassian.net/issues/?filter=11101" target="_blank">PRs</a>|<a href="https://openehr.atlassian.net/projects/SPECAM?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released-unreleased" target="_blank">CRs</a></td>
						<td style="text-align:center">
							<table>
								<tbody>
									<tr>
										<td style="text-align:center"><a href="" target="_blank"><b>OPT 1.4</b></a></td>
										<td style="text-align:center"><a href="/releases/AM/latest/OPT2.html" target="_blank"><b>OPT 2</b></a></td>
									</tr>
									<tr>
										<td style="text-align:center"> <a href="/releases/AM/latest/ADL1.4.html" target="_blank"><b>ADL 1.4</b></a></td>
										<td style="text-align:center">
                                            <a href="/releases/AM/latest/ADL2.html" target="_blank"><b>ADL 2</b></a>
                                        </td>
									</tr>
									<tr>
										<td style="text-align:center">
                                            <a href="/releases/AM/latest/AOM1.4.html" target="_blank"><b>AOM 1.4</b></a><br>
                                            Archetype, CObject, ArchetypeSlot, CAttribute, CPrimitive
                                        </td>
										<td style="text-align:center">
                                            <a href="/releases/AM/latest/AOM2.html" target="_blank"><b>AOM 2</b></a><br>
                                            Archetype, AuthoredArchetype,Template, OperationalTemplate,<br>
                                            CObject, ArchetypeSlot, CAttribute, CPrimitive
                                        </td>
									</tr>
									<tr>
										<td colspan="2" style="text-align:center"><a href="/releases/AM/latest/Identification.html" target="_blank">Identification</a></td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>

					<!-------------- LANG --------------->
					<tr>
						<td> <a name="LANG"></a><a href="/releases/LANG/latest/docs/index" target="_blank"><b>LANG</b><br>(Generic languages)</a><br>
						<a href="https://openehr.atlassian.net/issues/?filter=11116" target="_blank">PRs</a>|<a href="https://openehr.atlassian.net/projects/SPECLANG?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released-unreleased" target="_blank">CRs</a></td>
						<td style="text-align:center">
							<table>
								<tbody>
									<tr>
										<td style="text-align:center">
                                            <a href="/releases/LANG/latest/EL.html" target="_blank"><b>*Expression</b></a>
                                        </td>
									</tr>
									<tr>
										<td style="text-align:center">
                                            <a href="/releases/LANG/latest/bmm.html" target="_blank"><b>BMM</b></a><br>
                                            BmmSchema, BmmModel, BmmClass, BmmType, BmmProperty
                                        </td>
									</tr>
									<tr>
										<td style="text-align:center">
                                            <a href="/releases/LANG/latest/bmm_persistence.html" target="_blank"><b>P_BMM</b></a><br>
                                            PBmmSchema, P_xxx types
                                        </td>
									</tr>
									<tr>
										<td style="text-align:center">
                                            <a href="/releases/LANG/latest/odin.html" target="_blank"><b>ODIN</b></a>
                                        </td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>

					<!-------------- BASE --------------->
					<tr>
						<td> <a name="BASE"></a><a href="/releases/BASE/latest/docs/index" target="_blank"><b>BASE</b> (Base models)</a><br>
							<a href="https://openehr.atlassian.net/issues/?filter=11105" target="_blank">PRs</a>|<a href="https://openehr.atlassian.net/projects/SPECBASE?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released-unreleased" target="_blank">CRs</a></td>
						<td style="text-align:center">
							<table width="100%">
								<tbody>
									<tr>
										<td style="text-align:center">
                                            <a href="/releases/BASE/latest/base_types.html" target="_blank"><b>Base Types</b></a><br>
                                            Identification
                                        </td>
										<td style="text-align:center">
                                            <a href="/releases/BASE/latest/resource.html" target="_blank"><b>Resource</b></a><br>
                                            AuthoredResource
                                        </td>
									</tr>
									<tr>
                                        <td colspan="2" style="text-align:center">
                                            <a href="/releases/BASE/latest/foundation_types.html" target="_blank"><b>Foundation Types</b></a><br>
                                            Primitive types: Values, Structures, Interval, Date/times
                                        </td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>

					<!-------------- TERM --------------->
					<tr>
						<td> <a name="TERM"></a><a href="/releases/TERM/latest/docs/index" target="_blank"><b>TERM</b> (Terminology)</a><br>
							<a href="https://openehr.atlassian.net/issues/?filter=11110" target="_blank">PRs</a>|<a href="https://openehr.atlassian.net/projects/SPECTERM?orderField=RANK&selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page&status=released-unreleased" target="_blank">CRs</a></td>
						<td style="text-align:center">
							<table width="100%">
								<tbody>
									<tr>
										<td style="text-align:center"><a href="/releases/TERM/latest/SupportTerminology.html" target="_blank"><b>openEHR Terminology</b></a></td>
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
