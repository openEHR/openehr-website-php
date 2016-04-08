<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Change Process';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2><a name="revision_history"></a>Revision History</h2>
			<table class='TableBasic'>
			  <tr>
				<th> Issue</th>
				<th> Description</th>
				<th> Who</th>
				<th> Accepted</th>
				<th> Date</th>
			  </tr>
			  <tr>
				<td> 1.0.0</td>
				<td> Initial Writing</td>
				<td> T Beale</td>
				<td> 
					K Atalag MD (University of Auckland), <br/>
					R Chen MD (Cambio Health Systems, Sweden), <br/>
					G Klein MD (Örebro University School of Business), <br/>
					I McNicoll MD (FreshEhr), <br/>
					T Nordheim Alme MD (DIPS asa Norway), <br/>
					S Iancu (Code24, Netherlands)</td>
				<td> 19 Dec 2014</td>
			  </tr>
			</table>

			<h2><a name="introduction"></a>Introduction</h2>
			<p>This document describes the Change Management of the openEHR Specification Program, and is part of the <a href="/programs/specification/governance">governance Terms of Reference</a> for the program. Specifications are divided into major Components (identified in the 'Component' column of the <a href="/programs/specification/releases/currentbaseline">current baseline</a>). They are managed by the <a href="/programs/specification/governance#sec">Specifications Editorial Committee (SEC)</a>, according to the process described here. All change and release management is <a href="https://openehr.atlassian.net/browse/SPEC">visible online</a>.</p>

			<h2><a name="lifecycle"></a>Specification Lifecycle</h2>
			<p>All specification artefacts, both documentary and computable follow a lifecycle, from inception (or accession, in the case of donated works) to stability to obsolescence. The following formal lifecycle states are recognised: Planning, Development, Trial, Stable, and Retired. For specifications developed from scratch within openEHR (i.e. not donated), the management is as follows:</p>
			<ul>
				<li><em>Planning state</em>: development of description and scope of new specification, along with relevance and utility.</li>
				<li><em>Development state</em>: agile development by project group, no formal change management, visibility of documentation and experimental software. By the end of development, an open source reference implementation must be available.</li>
				<li><em>Trial state</em>: during this period, the specification is managed in a formal way. Issues are reported on an online tracker; changes are recorded on a separate dedicated tracker, ensuring every change to the specification is recorded;</li>
				<li><em>Stable state</em>: in stable state, the specification is published in a high-quality format. Proposed changes are assessed based on impact to existing implementations.</li>
				<li><em>Retired state</em>: some specifications inevitably become obsolete, or irrelevant for other reasons, and are promoted to the Retired state.</li>
			</ul>
			<p>The intention is to be lightweight when needed, and to manage specifications carefully as they gain widespread use.</p>
			<p>Specifications created based on existing software, widespread existing practices etc can enter the lifecycle at the Trial or Stable states if they meet the relevant criteria.</p>
			<br/>
			<p>The following table describes the lifecycle states in detail:</p>
			
			<table class='TableBasic'>
			<tbody>
			<tr>
				<th> Lifecycle State</th>
				<th> Period</th>
				<th> Publication Format</th>
				<th> Versioning&#42; &nbsp; </th>
				<th> Change doc </th>
				<th> Change Manager </th>
				<th> Issue Reporting </th>
			</tr>
			<tr>
				<td> <b>Planning</b></td>
				<td> 6 months max</td>
				<td> Wiki</td>
				<td> 0.y.z</td>
				<td> informal</td>
				<td> external development group </td>
				<td> Informal </td>
			</tr>
			<tr>
				<td> <b>Development</b></td>
				<td> 18 months max</td>
				<td> Wiki</td>
				<td> 0.y.z</td>
				<td> Change Requests optional; otherwise informal</td>
				<td> SEC or external development group </td>
				<td> Informal </td>
			</tr>
			<tr>
				<td> <b>Trial</b> </td>
				<td> 2 years max</td>
				<td> <em>PDF + computable</em></td>
				<td> <em>x.y.z</em> (x >= 1)</td>
				<td> <em>Change Requests</em></td>
				<td> <em>SEC</em> </td>
				<td> <em>Problem Reports</em> </td>
			</tr>
			<tr>
				<td> <b>Stable</b></td>
				<td> unbounded </td>
				<td> <em>PDF + computable</em></td>
				<td> x.y.z </td>
				<td> Change Requests  </td>
				<td> Problem Reports </td>
			</tr>
			<tr>
				<td> <b>Retired</b></td>
				<td> unbounded </td>
				<td> Replaced by version marked as 'Retired' and relevant meta-data </td>
				<td> frozen</td>
				<td> n/a </td>
				<td> SEC </td>
				<td> n/a </td>
			</tr>
			</tbody>
			</table>

			<p>&#42; Versioning obeys rules of <a href="http://semver.org" target="_blank">semver.org</a>; note that version 0.x.y versions do not follow any strict rules.</p>
			
			<table class='TableBasic'>
			<tbody>
			<tr>
				<th> Lifecycle State</th>
				<th> Formal Expression </th>
				<th> Implementation Technology Specification(s)  </th>
				<th> Implementations  </th>
				<th> Conformance  </th>
			</tr>
			<tr>
				<td> <b>Development</b></td>
				<td> <em>One formal tool-based expression must exist</em>, in a widely recognised format, prior to promotion to trial state.  </td>
				<td> <em>At least one ITS</em> must exist prior to promotion to trial state. </td>
				<td> <em>one open source reference implementation</em> must exist prior to promotion to Trial state. </td>
				<td> n/a </td>
			</tr>
			<tr>
				<td> <b>Trial</b> </td>
				<td> Tool-based expression maintained. </td>
				<td> An ITS should exist for the major technologies in use.</td>
				<td> Prior to promotion, at least <em>2 independent interoperating implementations</em>, preferably in different major technologies at end of period. These may be commercial or open source. </td>
				<td> <em>Conformance levels &amp; criteria</em> developed, tested and published. </td>
			</tr>
			<tr>
				<td> <b>Stable</b></td>
				<td> Tool-based expression maintained. </td>
				<td>&nbsp;</td>
				<td> Reference implementation maintained. </td>
				<td> Industry implementations recognised via conformance testing. </td>
			</tr>
			<tr>
				<td> <b>Retired</b></td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td> Reference implementation still available but not maintained. </td>
				<td>&nbsp;</td>
			</tbody>
			</table>

			<p>Problem Reports (PRs) can be raised by anyone, and are designed to capture reports of problems and issues, including new requirements. Change Requests (CRs) can be created only by the Specifications Editorial Committee, and are used to document changes undertaken to the specifications. No change can be made to the specifications without a CR.</p>

			<h3><a name="promotion"></a>Promotion of Specifications throught the Lifecycle</h3>
			<p>Specifications are promoted to the next lifecycle state when the appropriate time-limit is reached for the current state. A review is held by the SEC 3 months prior to the putative promotion date to determine if the criteria documented above are satisfied. If so, a CR is raised to document the promotion of the artefact(s) on the relevant date, including all changes to documentation, publishing format and actual publication.</p>
			<p>If the criteria are not met, the Component Maintainer is asked to ensure that the specification is worked on to ensure that it will meet the promotion criteria. This may require them communicating with teams in the Software Program or elsewhere in order to ensure adequate implementation has been achieved.</p>
			<p>If on the due date of promotion, the promotion criteria are still not met, the Component Maintainer is asked to provide a report indicating if it is likely that the conditions can be met in 3 months or less, and outlining what steps will be taken to achieve them. The SEC may accept this and provide a 3 month extension. Alternatively it may reject it, and the specification is then demoted to 'obsolete' state.</p>
			<p>After one extension period, the SEC again reviews the specfication, and either accepts it for promotion or rejects it, leading to demotion to 'obsolete' state.</p>
			

			<h2><a name="changemanagement"></a>Change Management</h2>
			<p>Seen as a whole, the specification library consists of a number of components, each of which is separately releasable. The canges that can be made to specifications in any component are driven by Problem Reports (PRs) and Change Requests (CRs). The processing of PRs and the creation, acceptance and final approval or rejection of CRs is performed by the Specifications Editorial Committee.</p>
			
			<h3><a name="releases"></a>Release Definition</h3>
			<p>Releases are defined for each Component, as the organising structure for changes. They are normally defined pragmataically, depending on the needs and interests of the community, as understood by the SEC. For example various 'easy' changes may be already described in PRs or CRs, that could be allocated to a release scheduled soon, whereas other changes might be spread over a programme of other releases.</p>

			<h3><a name="problemreports"></a>Problem Reports</h3>
			<p>PRs raised on the <a href="https://openehr.atlassian.net/browse/SPECPR/">public SPECPR tracker</a> are reviewed on a regular basis by the SEC, and where appropriate,  CRs raised. PR review is carried out online by the SEC either when a new PR is raised, or at least every 3 months.</p>
			<p>PR review can lead to a number of possibilities. The PR may be rejected, in which case it is resolved as such and closed. For PRs that are accepted, one or more CRs may be created on the relevant Component CR tracker, or the PR may be linked to an existing PR.</p>
			<p>PRs that create CRs are referenced by the relevant CRs. When the latter are completed, the relevant PRs are resolved according to the resolutions of the related CRs.</p>
			<p>CRs are not created for specifications still in development phase; instead, changes are added to the CR used at creation of the specification.</p>

			<h3><a name="changerequests"></a>Change Requests</h3>
			<p>CRs are generally raised in response to PRs. However, CRs may also be raised separately by SEC members.</p>
			<p>CRs need to be a) prioritised in importance and b) allocated to releases. A pre-requisite therefore is to define one or more future releases, each with an identifier and expected date of delivery. Allocation to a release may be done at any time, and changed as deemed necessary by the SEC.</p>
			<p>The lifecycle of a CR is shown below.</p>
			<p style="text-align:center;"><img src="/files/programs/specification/CR_workflow.png" alt="CR Workflow" style="border: solid 1px #CCCCCC;"></p>

			<h4>Creation</h4>
			<p>New CRs are created by the SEC on the relevant <a href="https://openehr.atlassian.net/secure/Dashboard.jspa?selectPageId=10190" target="_blank">Component Change tracker</a> for the relevant Component. The following information is initially required:</p>
			<ul>
				<li>a short description (i.e. title)</li>
				<li>a description of the problem(s) it addresses, and/or references to relevant PRs</li>
				<li>the associated component within the specification library (if more than one component is affected, a separate CR or Task is created for each component).</li>
				<li>the raiser</li>
				<li>Other key fields such as id, date etc are created automatically.</li>
			</ul>

			<h4>Acceptance</h4>
			<p>Every CR has to initially be accepted or rejected by the SEC. This primarily means determining if:</p>
			<ul>
				<li>the CR responds to a real need</li>
				<li>if the CR is compatible with the current specification library.</li>
			</ul>
			<p>For every CR accepted, the following information is added:</p>
			<ul>
				<li>planned date of completion;</li>
				<li>estimate: estimation of number of days' work;</li>
				<li>assignee: allocation of an SEC member by the relevant Component Maintainer, who acts as the Change  Owner (CO) (who becomes an 'assignee' on the CR). The CO's  responsibility is to manage the CR to completion (which  occasionally  will be an obsolete state) - essentially this means  ensuring the  process is followed and the actual work is done on time;</li>
				<li>priority: minor, major, critical, reflecting the size of change and impact to users.</li>
			</ul>
			<p>The Change Owner (assignee) is now responsible for developing the following:</p>
			<ul>
				<li>impact assessment;</li>
				<li>detailed description of proposed changes;</li>
				<li>revised classification if necessary.</li>
			</ul>
			<p>The SEC reviews the CR again. If the impact is deemed acceptable, the CR is allocated to a release.</p>
			<ul>
				<li>for larger CRs, the addition of more assignees from the SEC may be required. The CO manages this.</li>
			</ul>

			<h4>Performing the work</h4>
			<p>For <em>minor changes</em>, the work usually involves no more than  making a small change to one or more documents, and generating other publication formats where relevant. The  changes should be committed to a branch or review version of the  specification or artefact.</p>
			<p>For <em>major changes</em>, the relevant changes should be made in a  branch of the specification repository. Additionally, a dedicated wiki  page should be created, describing the work, current status, who is  performing it, with links to the relevant CR and also the branch version  of the work.</p>

			<h4>Approval</h4>
			<p>The initially completed work of a CR is approved as follows:</p>
			<ul>
				<li>for <em>minor changes</em>, the changes are reviewed by inspection of  the relevant document(s) and/or inspection of the changed computable  artefact in a relevant tool.
				<ul>
					<li>Approval requires review by the Component Maintainer.
					<ul>
						<li>If passed, the change is committed to the specification library.</li>
						<li>If not, the assignee has one week to re-present the change, when it will re-enter review.</li>
						<li>If a change is not approved in 3 rounds of review, it is rejected and closed.</li>
					</ul>
					</li>
				</ul>
				</li>
				<li>for <em>major changes</em>:
				<ul>
					<li>an open review is conducted during a defined period, e.g.  30 days, seeking comments from the openEHR membership.</li>
					<li>At the end of this period, the assignee(s) have 2 weeks to re-present the work, taking into account the review feedback.</li>
					<li>A 2/3 majority of the SEC is required to approve the final presentation of the work, incorporating review responses.
					<ul>
						<li>Ideally, concerns (e.g. that the changes are acceptable but insufficient) of dissenting members should be addressed through further  CRs, if appropriate.</li>
					</ul>
					</li>
					<li>If accepted, the change is committed to the specification library.</li>
					<li>If not, the review process is re-entered.</li>
					<li>If a change is not approved in 3 rounds of review, it is rejected and closed.</li>
				</ul>
				</li>
			</ul>

			
			<h2><a name="creation"></a>Creation of New Specifications</h2>

			<h3><a name="process"></a>Process</h3>
			<p>New specifications can be proposed by any member of the openEHR community. Formally this is done via either a PR on the SPEC PR tracker, or if the proposer is a Program member, a CR on a <a href="https://openehr.atlassian.net/secure/Dashboard.jspa?selectPageId=10190" target="_blank">Component Change tracker</a> . If the initial need is described in a PR, it will be reviewed by the SEC which may decide to create a CR for it. If this happens, the CR will cover the initial period of establishment of the specification, including its identification and setting of scope.</p>
			<p>New  specifications need to be compatible with the existing structure and  roadmap of the specification library. For a new specification to be  added, it has to have an identifier, be located within the existing  structure (a new category of specification may require a new location to  be defined), and have a scope defined that is consistent with existing  specifications. These are issued by the Specifications Editorial Committee prior to the creation of the initial CR for the specification. The  new specification could potentially replace one or more existing  specifications, in which case the structure and roadmap may be modified; the CR will also document these changes.</p>
			<p>Internationalisation and localisation aspects should also be described.</p>
			<p>A successful application to add a new specification results in the following being decided by the SEC:</p>
			<ul>
				<li>an identifier</li>
				<li>a title</li>
				<li>the affected Component, e.g. Reference Model, Archetype Model, Service Model, Query Languages, etc, or a new Component may be required;</li>
				<li>a new wiki page where the development form of the specification can be created</li>
				<li>an announcement of the new specification.</li>
			</ul>
			<p>New specifications can be created in two ways.</p>
			<ul>
				<li>There may already be a  well-developed document or computable artefact that is being offered to the Specification  Program. In this case, the SEC would assess the specification for maturity according to the lifecycle described below, and publish it in an appropriate way. A specification meeting the  'Trial' or even 'Stable' state criteria may be commenced in that state if the SEC agrees.</li>
				<li>Alternatively, the need for a completely new  specification might be identified, and a fresh development commenced within the  SEC.</li>
			</ul>

			<h3><a name="proforma"></a>Specification Pro-forma</h3>
			<p>All openEHR specifications should include the following standard sections:</p>
			<ul>
				<li>Standard front pages including
				<ul>
					<li>Front page containing identifier, current version and release date</li>
					<li>Amendment record</li>
					<li>Copyright notice</li>
					<li>Trademarks &amp; Acknowledgements</li>
				</ul>
				</li>
				<li>Standard TOC</li>
				<li>Introduction, including:
				<ul>
					<li>Purpose</li>
					<li>Related documents (in openEHR)</li>
					<li>Nomenclature</li>
					<li>Status</li>
					<li>Tools</li>
					<li>Changes from previous versions</li>
				</ul>
				</li>
				<li>&lt;&lt;main specification&gt;&gt;</li>
				<li>Standard references section</li>
				<li>Standard end page(s)</li>
			</ul>
			<p>In addition, the following sections or information should be included where appropriate:</p>
			<ul>
				<li>Internationalisation and Localisation</li>
				<li>Implementation guidance.</li>
			</ul>

			<h3><a name="changes"></a>Changes to Existing Trial and Stable Specifications</h3>
			<p><em>Minor changes</em> to specification documents are normally executed by the Component Maintainer making an agreed small change. Validation is performed by internal review, as described above under CR Lifecycle.</p>
			<p><em>Major changes</em>, typically leading to a new major release of a specification, may be performed by a team, although they can just as easily be performed by a single person. Validation is performed via community-wide open review with a published time limit. Review feedback is posted as comments on the CR. See the Acceptance section above under CR lifecycle.</p>

			<h2><a name="faq"></a>Frequently Asked Questions</h2>
			
			<h3>Who can report a problem or propose a change to a specification?</h3>
			<p>Anyone. This is done by creating a Problem Report (PR) on the <a href="https://openehr.atlassian.net/browse/SPECPR/?selectedTab=com.atlassian.jira.jira-projects-plugin:issues-panel10190">SPEC PR public issue tracker</a>. The (SEC) reviews these on a  regular basis and may decide to create a Change Request on the specification library based on the PR.</p>

			<h3>Who decides if a change will be performed or rejected?</h3>
			<p>A change to the specifications proposed on the SPEC PR public tracker will be reviewed by the SEC, and may cause a CR to be  created. CRs are performed by SEC members, and will  result in change(s) to the specifications. Sometimes CRs may be rejected  during processing, in which case no change will be made.</p>

			<h3>Who prioritises the changes?</h3>
			<p>The Specifications Editorial Committee in concert with the openEHR Management Board.</p>

			<h3>Who decides which changes are in the next release of openEHR?</h3>
			<p>The Specifications Editorial Committee in concert with the openEHR Management Board.</p>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
