<?php
$PageName = 'Change Process';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

	<?php include '../../panel/headpanel.php' ?>
	
</head>

<body>

<div id="MainFrame">
	
	<div id="TopPanel">
		<?php include '../../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu">
		
		<div class="nav">
			<?php include '../../menu/topmenu.php' ?>
		</div>
		
	</div> 

	<div id="MainArea">
	
		<div id="SideMenu">
			<?php include 'menu.php' ?>
		</div>

		<div id="TextArea">
		
			<h1><?php echo "$PageName";?></h1>
			<p class="content1"><a href="#introduction">Introduction</a></p>
				<p class="content2"><a href="#status">Status</a></p>
				<p class="content2"><a href="#changelog">Change Log</a></p>
				<p class="content2"><a href="#aknowledgements">Aknowledgements</a></p>
			<p class="content1"><a href="#lifecycle">Specification Lifecycle</a></p>
				<p class="content2"><a href="#promotion">Promotion of Specifications</a></p>
			<p class="content1"><a href="#changemanagement">Change Management</a></p>
				<p class="content2"><a href="#problemreports">Problem Reports</a></p>
				<p class="content2"><a href="#changerequests">Change Requests</a></p>
			<p class="content1"><a href="#creation">Creation of New Specification</a></p>
				<p class="content2"><a href="#process">Process</a></p>
				<p class="content2"><a href="#proforma">Specification Pro-forma</a></p>
				<p class="content2"><a href="#changes">Changes to Existing Trial and Stable Specofocations</a></p>
			<p class="content1"><a href="#faq">Frequently Asled Questions</a></p>
				
				
			<h2><a name="introduction"></a>Introduction</h2>
			<p>This document describes the Change Management Plan of the openEHR Specification Program.</p>

			<h3><a name="status"></a>Status</h3>
			<p>This document is currently in pre-version 1.0 development.</p>

			<h3><a name="changelog"></a>Change Log</h3>
			
			<table class='TableMain'><tbody>
			<tr>
				<th class='TableMainT'> Version <br class="atl-forced-newline" /> </th>
				<th class='TableMainT'> Change description <br class="atl-forced-newline" /> </th>
				<th class='TableMainT'> Who <br class="atl-forced-newline" /> </th>
				<th class='TableMainT'> Completed <br class="atl-forced-newline" /> </th>
			</tr>
			<tr>
				<td class='TableMainC'> 0.6<br class="atl-forced-newline" /> </td>
				<td class='TableMainC'> Changes due to review by Koray Atalag, NZ: added content to 'New Specifications' section, including 'localisation'. <br class="atl-forced-newline" /> </td>
				<td class='TableMainC'> T Beale<br class="atl-forced-newline" /> </td>
				<td class='TableMainC'> 28 Apr 2012<br class="atl-forced-newline" /> </td>
			</tr>
			<tr>
				<td class='TableMainC'> 0.5 <br class="atl-forced-newline" /> </td>
				<td class='TableMainC'> Initial development <br class="atl-forced-newline" /> </td>
				<td class='TableMainC'> T Beale <br class="atl-forced-newline" /> </td>
				<td class='TableMainC'> 01 Apr 2012 <br class="atl-forced-newline" /> </td>
			</tr>
			</tbody>
			</table>

			<h3><a name="aknowledgements"></a>Acknowledgements</h3>
			<p class="par">This document has benefited from review by the following people.</p>
			<ul>
				<li><em>Koray Atalag</em>, university of Auckland, New Zealand</li>
			</ul>


			<h2><a name="lifecycle"></a>Specification Lifecycle</h2>
			<p>All specification artefacts, both documentary and computable follow a lifecycle, from inception (or accession, in the case of donated works) to stability to obsolescence. The following formal lifecycle states are recognised: Development, Trial, Stable, Obsolete and Superseded. For specifications developed from scratch within openEHR (i.e. not donated), the management is as follows:</p>
			<ul>
				<li><em>Development state</em>: agile development by project group, no formal change management, visibility of documentation and experimental software. By the end of development, an open source reference implementation must be available.</li>
				<li><em>Trial state</em>: during this period, the specification is managed in a formal way. Issues are reported on an online tracker; changes are recorded on a separate dedicated tracker, ensuring every change to the specification is recorded; version changes follow the <a href="http://semver.org" class="external-link" rel="nofollow">semver.org</a> rules;</li>
				<li><em>Stable state</em>: in stable state, the specification is published in a high-quality format. Proposed changes are assessed based on impact to existing implementations.</li>
			</ul>
			<p>The intention is to be lightweight when needed, and to manage specifications carefully if and when they gain widespread use.</p>
			<p>Specifications created based on existing software, widespread existing practices etc can enter the lifecycle at the Trial or Stable states if they meet the criteria.</p>
			<br/>
			<p>The following table describes the lifecycle states in detail:</p>
			
			<table class='TableMain'><tbody>
			<tr>
				<th class='TableMainT'> Lifecycle State</th>
				<th class='TableMainT'> Period</th>
				<th class='TableMainT'> Publication Format</th>
				<th class='TableMainT'> Versioning&#42; &nbsp; </th>
				<th class='TableMainT'> Change doc </th>
				<th class='TableMainT'> Change Manager </th>
				<th class='TableMainT'> Issue Reporting </th>
			</tr>
			<tr>
				<td class='TableMainC'> <b>Development</b></td>
				<td class='TableMainC'> 18 months max</td>
				<td class='TableMainC'> Wiki; PG writable</td>
				<td class='TableMainC'> 0.y.z</td>
				<td class='TableMainC'> Change Requests optional; otherwise informal</td>
				<td class='TableMainC'> CMG or external development group </td>
				<td class='TableMainC'> Informal </td>
			</tr>
			<tr>
				<td class='TableMainC'> <b>Trial</b> </td>
				<td class='TableMainC'> 2 years max</td>
				<td class='TableMainC'> <em>Wiki??</em>; PG writable</td>
				<td class='TableMainC'> <em>x.y.z</em> </td>
				<td class='TableMainC'> <em>Change Requests</em></td>
				<td class='TableMainC'> <em>CMG</em> </td>
				<td class='TableMainC'> <em>Problem Reports</em> </td>
			</tr>
			<tr>
				<td class='TableMainC'> <b>Stable</b></td>
				<td class='TableMainC'> unbounded </td>
				<td class='TableMainC'> <em>Durable high</em> 
				<em>quality format</em>, e.g. PDF; published on standards web page / portal 
				<td class='TableMainC'> x.y.z </td>
				<td class='TableMainC'> Change Requests  </td>
				<td class='TableMainC'> <em><b>CMG</em> </td>
				<td class='TableMainC'> Problem Reports </td>
			</tr>
			<tr>
				<td class='TableMainC'> <b>Obsolete</b></td>
				<td class='TableMainC'> unbounded </td>
				<td class='TableMainC'> Replaced by version marked as 'Obsolete' and relevant meta-data </td>
				<td class='TableMainC'> frozen</td>
				<td class='TableMainC'> n/a </td>
				<td class='TableMainC'> EC </td>
				<td class='TableMainC'> n/a </td>
			</tr>
			<tr>
				<td class='TableMainC'> <b>Superseded</b></td>
				<td class='TableMainC'> unbounded </td>
				<td class='TableMainC'> Replaced by version marked as 'Superseded' and relevant meta-data </td>
				<td class='TableMainC'> frozen </td>
				<td class='TableMainC'> n/a </td>
				<td class='TableMainC'> EC </td>
				<td class='TableMainC'> n/a </td>
			</tr>
			</tbody>
			</table>

			<p>&#42; Versioning obeys rules of <a href="http://semver.org" class="external-link" rel="nofollow">semver.org</a>; note that version 0.x.y versions do not follow any strict rules.</p>
			<br/>
			
			<table class='TableMain'>
			<tbody>
			<tr>
				<th class='TableMainT'> Lifecycle State</th>
				<th class='TableMainT'> Formal Expression </th>
				<th class='TableMainT'> Implementation Technology Specification(s)  </th>
				<th class='TableMainT'> Implementations  </th>
				<th class='TableMainT'> Conformance  </th>
			</tr>
			<tr>
				<td class='TableMainC'> <b>Development</b></td>
				<td class='TableMainC'> <em>One formal tool-based expression must exist</em>, in a widely recognised format, prior to promotion to trial state.  </td>
				<td class='TableMainC'> <em>At least one ITS</em> must exist prior to promotion to trial state. </td>
				<td class='TableMainC'> <em>one open source reference implementation</em> must exist prior to promotion to Trial state. </td>
				<td class='TableMainC'> n/a </td>
			</tr>
			<tr>
				<td class='TableMainC'> <b>Trial</b> </td>
				<td class='TableMainC'> Tool-based expression maintained. </td>
				<td class='TableMainC'> <em>Ideally two ITSs</em> should exist prior to promotion to stable state (where multiple technologies are in routine use). </td>
				<td class='TableMainC'> Prior to promotion, at least <em>2 independent interoperating implementations</em>, preferably in different major technologies at end of period. These may be commercial or open source. </td>
				<td class='TableMainC'> <em>Conformance levels &amp; criteria</em> developed, tested and published. </td>
			</tr>
			<tr>
				<td class='TableMainC'> <b>Stable</b></td>
				<td class='TableMainC'> Tool-based expression maintained. </td>
				<td class='TableMainC'>&nbsp;</td>
				<td class='TableMainC'> Reference implementation maintained. </td>
				<td class='TableMainC'> Industry implementations recognised via conformance testing. </td>
			</tr>
			<tr>
				<td class='TableMainC'> <b>Obsolete</b></td>
				<td class='TableMainC'>&nbsp;</td>
				<td class='TableMainC'>&nbsp;</td>
				<td class='TableMainC'> Reference implementation still available but not maintained. </td>
				<td class='TableMainC'>&nbsp;</td>
			</tr>
			<tr>
				<td class='TableMainC'> <b>Superseded</b></td>
				<td class='TableMainC'>&nbsp;</td>
				<td class='TableMainC'>&nbsp;</td>
				<td class='TableMainC'> Reference implementation still available but not maintained. </td>
				<td class='TableMainC'>&nbsp;</td>
			</tr>
			</tbody>
			</table>

			<br/>
			<p><font color="#ff0000">TBD: Possible variants:</font></p>
			<ul>
				<li><font color="#ff0000">publish in durable format for Trial period; wiki is truly bad - non-standard, very poor display quality, and editing on most wikis in WSIWYG is truly abysmal.</font></li>
			</ul>
			<p>Problem Reports (PRs) can be raised by anyone, and are designed to capture reports of problems and issues, including new requirements. Change Requests (CRs) can be created
			only by the Specifications group, and are used to document changes undertaken to the specifications. No change can be made to the specifications without a CR.</p>
			<p>For reference, other lifecycle management specifications:</p>
			<ul>
				<li>IHTSDO's <a href="/wiki/download/attachments/32505867/IHTSDO_+Procedure_Standards_20110407_v2.0-1.pdf?version=1&amp;modificationDate=1333282106000">Development, Approval, Maintenance and Review of IHTSDO Technical Reports, Guidelines and Standards</a></li>
				<li><a href="http://www.openehr.org/specifications/specs_governance.html" class="external-link" rel="nofollow">Current openEHR lifecycle</a>;</li>
				<li>openEHR's existing <a href="http://www.openehr.org/svn/specification/TRUNK/publishing/CM/CM_plan.pdf" class="external-link" rel="nofollow">Change Management Plan</a>.</li>
			</ul>

			<h3><a name="promotion"></a>Promotion of Specifications</h3>
			<p>Specifications are promoted to the next lifecycle state when the appropriate time-limit is reached for the current state. A review is held by the EC 3 months prior to the putative promotion date to determine if the criteria documented above are satisfied. If so, a CR is raised to document the promotion of the artefact(s) on the relevant date, including all changes to documentation, publishing format and actual publication.</p>
			<p>If the criteria are not met, the owning CMG is asked to ensure that the specification is worked on to ensure that it will meet the promotion criteria. This may require them communicating with teams in the Software Program or elsewhere in order to ensure adequate implementation has been achieved.</p>
			<p>If on the due date of promotion, the promotion criteria are still not met, the owning CMG is asked to provide a report indicating if it is likely that the conditions can be met in 3 months or less, and outlining what steps will be taken to achieve them. The EC may accept this and provide a 3 month extension. Alternatively it may reject it, and the specification is then demoted to 'obsolete' state.</p>
			<p>After one extension period, the EC again reviews the specfication, and either accepts it for promotion or rejects it, leading to demotion to 'obsolete' state.</p>
			

			<h2><a name="changemanagement"></a>Change Management</h2>
			<p>Seen as a whole, the specification library will normally have a  number of Problem Reports (PRs) and Change Requests (CRs) outstanding against it.The processing of PRs and the creation, acceptance and final approval or rejection of CRs is performed by the Program Editorial Committee (EC), formed of representatives from all CMGs.</p>
			
			<h3><a name="problemreports"></a>Problem Reports</h3>
			<p>PRs raised on the public SPEC tracker are reviewed on a regular basis, and where appropriate,  CRs raised. PR review is carried out online by the Editorial Committee either when a new PR is raised, or at least every 3 months.</p>
			<p>PR review can lead to a number of possibilities. The PR may be rejected, in which case it is resolved as such and closed. For PRs that are accepted, one or more CRs may be created, or the PR may be linked to an existing PR.</p>
			<p>PRs that create CRs are referenced by the relevant CRs. When the latter are completed, the relevant PRs are resolved according to the resolutions of the related CRs.</p>
			<p>CRs are not created for specifications still in development phase; instead, changes are added to the CR used at creation of the specification.</p>

			<h3><a name="changerequests"></a>Change Requests</h3>
			<p>CRs are generally raised in response to PRs. However, CRs may also be raised separately by the Editorial Committee, based on a consensus discussion or a 2/3 vote.</p>
			<p>CRs need to be a) prioritised in importance and b) allocated to releases. A pre-requisite therefore is to define one or more future releases, each with an identifier and expected date of delivery.</p>

			<h4>Creation</h4>
			<p>New CRs are created by the EC on the <a href="http://www.openehr.org/issues/browse/SPEC">SPEC CR tracker</a>. The following information is initially required:</p>
			<ul>
				<li>a short description (i.e. title)</li>
				<li>a description of the problem(s) it addresses, and/or references to relevant PRs</li>
				<li>the associated component within the specification library (if more than one component is affected, a separate CR or Task is created for each component).</li>
				<li>the raiser</li>
				<li>Other key fields such as id, date etc are created automatically.</li>
			</ul>
			<p><font color="#ff0000">TBD: we don't actually do this  now; currently, more than one component can be affected by one CR. This  is actually better CM practice...</font></p>

			<h4>Acceptance</h4>
			<p>Every CR has to initially be accepted or rejected by the EC. This primarily means determining if:</p>
			<ul>
				<li>the CR responds to a real need</li>
				<li>if the CR is compatible with the current specification library.</li>
			</ul>
			<p>For every CR accepted, the following information is added:</p>
			<ul>
				<li>planned date of completion;</li>
				<li>estimated  of number of days' work;</li>
				<li>assignment of a member from the relevant CMG who acts as the Change  Owner (CO) (who becomes an 'assignee' on the CR). The CO's  responsibility is to manage the CR to completion (which  occasionally  will be an obsolete state) - essentially this means  ensuring the  process is followed and the actual work is done on time;</li>
				<li>classification as minor, major, critical, reflecting the size of change and impact to users.</li>
			</ul>
			<p>The Change Owner is now responsible for obtaining the following information from the CMG:</p>
			<ul>
				<li>impact assessment;</li>
				<li>detailed description of proposed changes;</li>
				<li>revised classification if necessary.</li>
			</ul>
			<p>The EC reviews the CR again. If the impact is deemed acceptable, the CR is allocated to a release.</p>
			<ul>
				<li>for larger CRs, the addition of more assignees from the CMG may be required. The CO manages this.</li>
			</ul>

			<h4>Performing the work</h4>
			<p>For <em>minor changes</em>, the work usually involves no more than  making a small change to one or more documents, and generating other publication formats where relevant. The  changes should be committed to a branch or review version of the  specification or artefact.</p>
			<p>For <em>major changes</em>, the relevant changes should be made in a  branch of the specification repository. Additionally, a dedicated wiki  page should be created, describing the work, current status, who is  performing it, with links to the relevant CR and also the branch version  of the work.</p>

			<h4>Approval</h4>
			<p>The initially completed work of a CR is approved as follows:</p>
			<ul>
				<li>for <em>minor changes</em>, the changes are reviewed by inspection of  the relevant document(s) and/or inspection of the changed computable  artefact in a relevant tool.
				<ul>
					<li>Approval requires the unanimous vote of the CMG members.
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
					<li>an open review is conducted during a defined period, e.g.  30 days, seeking comments from the openEHR membership, including the Program members.</li>
					<li>At the end of this period, the assignee(s) have 2 weeks to re-present the work, taking into account the review feedback.</li>
					<li>A 2/3 majority of the EC is required to approve the final presentation of the work, incorporating review responses.
					<ul>
						<li>Ideally, concerns (e.g. that the changes are acceptable but  insufficient) of dissenting members should be addressed through further  CRs, if appropriate.</li>
					</ul>
					</li>
					<li>If passed, the change is committed to the specification library.</li>
					<li>If not, the review process is re-entered.</li>
					<li>If a change is not approved in 3 rounds of review, it is rejected and closed.</li>
				</ul>
				</li>
			</ul>

			
			<h2><a name="creation"></a>Creation of New Specifications</h2>

			<h3><a name="process"></a>Process</h3>
			<p>New specifications can be proposed by any member of the openEHR community. Formally this is done via either a PR on the SPEC PR tracker, or if the proposer is a Program member, a CR on the <a href="http://www.openehr.org/issues/browse/SPEC">SPEC project tracker</a> . If the initial need is described in a PR, it will be reviewed by the EC which may decide to create a CR for it. If this happens, the CR will cover the initial period of establishment of the specification, including its identification and setting of scope.</p>
			<p>New  specifications need to be compatible with the existing structure and  roadmap of the specification library. For a new specification to be  added, it has to have an identifier, be located within the existing  structure (a new category of specification may require a new location to  be defined), and have a scope defined that is consistent with existing  specifications. These are issued by the Editorial Committee prior to the creation of the initial CR for the specification. The  new specification could potentially replace one or more existing  specifications, in which case the structure and roadmap may be modified; the CR will also document these changes.</p>
			<p>Internationalisation and localisation aspects should also be described.</p>
			<p>A successful application to add a new specification results in the following being decided by the Editorial Committee:</p>
			<ul>
				<li>an identifier</li>
				<li>a title</li>
				<li>the affected component, e.g. Reference Model, Archetype Model, Service Model, Query Languages, etc
				<ul>
					<li>if a new component is needed, a new CMG will also have to be created;</li>
				</ul>
				</li>
				<li>a new wiki page where the development form of the specification can be created</li>
				<li>an announcement of the new specification.</li>
			</ul>
			<p>New specifications can be created in two ways.</p>
			<ul>
				<li>There may already be a  well-developed document or computable artefact that is being offered to the Specification  Program. In this case, the EC would assess the specification for maturity according to the lifecycle described below, and publish it in an appropriate way. A specification meeting the  'Trial' or even 'Stable' state criteria may be commenced in that state if the EC agrees.</li>
				<li>Alternatively, the need for a completely new  specification might be identified, and a fresh development commenced within the  EC.</li>
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
			<p><em>Minor changes</em> to specification documents are normally executed by a CMG member making an agreed small change. Validation is performed by internal review, as described above under CR Lifecycle.</p>
			<p><em>Major changes</em>, typically leading to a new major release of a specification, may be performed by a team, although they can just as easily be performed by a single person. Validation is performed via community-wide open review with a published time limit. Review feedback is posted as comments on the CR. See the Acceptance section above under CR lifecycle.</p>

			
			<h2><a name="faq"></a>Frequently Asked Questions</h2>
			
			<h3>Who can report a problem or propose a change to a specification?</h3>
			<p>Anyone. This is done by creating a Problem Report (PR) on the <a href="http://www.openehr.org/issues/browse/SPECPR">SPEC PR public issue tracker</a>. The Specification Program Editorial Committee reviews these on a  regular basis and may decide to create a Change Request on the specification library based on the PR.</p>

			<h3>Who decides if a change will be performed or rejected?</h3>
			<p>A change to the specifications proposed on the SPEC PR public tracker will be reviewed by the Editorial Committee, and may cause a CR to be  created. CRs are performed by Specification Program members, and will  result in change(s) to the specifications. Sometimes CRs may be rejected  during processing, in which case no change will be made.</p>

			<h3>Who prioritises the changes?</h3>
			<p>The Specification Program Editorial Committee in concert with the openEHR Operational Group.</p>

			<h3>Who decides which changes are in the next release of openEHR?</h3>
			<p>The Specification Program Editorial Committee in concert with the openEHR Operational Group.</p>
			
		</div>
			

	</div>

	<div id="BottomMenu">
		<?php include '../../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
		<?php include '../../panel/bottompanel.php' ?>	
	</div>
	
</div>

<?php include '../../panel/scriptpanel.php' ?>

</body>

</html>