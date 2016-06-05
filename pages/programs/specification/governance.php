<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Governance';

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
			<p>This page and the associated <a href = "/programs/specification/changeprocess">Change Process page</a> constitute the terms of reference (ToR) for the openEHR Specification Program. The Specification Program has members drawn from the wider openEHR membership, particularly openEHR solution vendors and other implementers for whom the specifications are of concrete importance. Ideally the membership of the Program will include individuals from multiple language groups, cultures as well as with a diversity of technical, clinical and informatics backgrounds.</p>
			<p>The sections below describe in detail how the Specifications Program functions. The essentials are as follows:</p>
				<ul>
					<li>A Specifications Editorial Committee (SEC) is the governing body and has between 5 and 40 members, representing major stakeholders, particularly implementers;</li>
					<li>The specifications are change-managed and released as separate Components, e.g. 'Reference Model', 'Conformance' etc, each of which has its own visible <a href="https://openehr.atlassian.net/secure/Dashboard.jspa?selectPageId=10190" target="_blank">online Change Tracker</a>, enabling community and public involvement possible at all stages;</li>
					<li>A global <a href="https://openehr.atlassian.net/browse/SPECPR/" target="_blank">Problem Tracker</a> is available to the whole community for reporting issues with the specifications;</li>
					<li>Decision-making is normally based on consensus, with wider consultation and then formal voting used when no agreement is available.</li>
				</ul>		
			<p>The governance provisions here are intended to be as lightweight and transparent as possible, with progress depending primarily on a) the experience and goodwill of the members, and b) on high quality tool support for efficient e-working.</p>
			<p>Heavy used is made of modern project and issue tracking tools, in order to automate the great majority of the process described here.</p>
			<p>The Specifications Program will work closely with the other programs to ensure coherence with outputs of the Clinical Modelling Program, implementability for the Software program, and usability in terms of the Localisation Program.</p>
			<p>The following diagram illustrates the Specifications Program.</p>
			<a href = "/files/programs/specification/SpecProgStr.png"><img src="/files/programs/specification/SpecProgStr.png" alt="Specification Program Structure" class = "imgMiddle width50"/></a>
			
			<h2><a name="specifications"></a>The Specifications</h2>
			<p>The specifications under management by the Program are identified in terms of Specifications Components, each consisting of one or more concrete Specifications relating to a topic area. <em>A Component is defined as being something that is separately releasable</em>. In openEHR, Components include the Reference Model, the Archetype Model, Querying, Conformance and CDS.</p>
			<p>The definitive list of Components at any time is shown in the 'Component' column of the <a href="/programs/specification/releases/workingbaseline">current baseline specifications page.</a></p>
			<p>Each logical Specification within a Component consists of:</p>
				<ul>
					<li>a definitive publishable documentary form, typically in PDF and/or HTML format;</li>
					<li>the source materials required to create the publishable specification;</li>
					<li>a definitive publishable computable form, typically a UML model XMI file, parser grammar(s) and so on;</li>
					<li>formal educational materials accompanying the specification, including example uses and files.</li>
				</ul>		
			<p>At any point in time, a Specification is in one of the lifecycle states: Planned, Development, Trial, Stable, or Retired.</p>
			<p>Each specifications Component has a dedicated <a href="https://openehr.atlassian.net/browse/SPEC/?selectedTab=com.atlassian.jira.jira-projects-plugin:roadmap-panel">Change Tracker</a>.</li>

			<h2><a name="sec"></a>Specifications Editorial Committee (SEC)</h2>
			<p>The Specification Program is managed by the Specifications Editorial Committee (SEC). The SEC membership consists of community members who are qualified and who have an interest in maintaining the specifications into the future on behalf of the community. The SEC aims to be as representative as possible of the interests of major stakeholders, including vendors, healthcare professionals and government, with implementers having a certain precedence, since it is software products that are directly based on the specifications.</p>
			<p>Primarily the work of the SEC consists of change management and publishing (i.e. releasing) of the specifications. Change Management is tool-based, and the change history, current state and projected state of the specifications are always visible online.</p>
			<p>A subset of the SEC membership act as designated Component Maintainers, one for each Component, and are responsible for a) managing the relevant Component Change Tracker and b) making and committing changes agreed by the SEC to the specifications.</p>
			<p>Between one and three members of the SEC are elected as co-chairs and perform a facilitation role.</p>

			<p>Changes are formally documented using Change Requests (CRs), which are uniquely numbered and visible online. A CR has a lifecycle, and if not rejected, will define specific changes to the specification(s) it relates to.</p>
			<p>Issues with the specifications can also be formally raised; these are known as Problem Reports (PRs).</p>
			<p>The change management process aims to resolve all CRs and PRs within a planned series of releases.</p>
			
			<h3><a name="sec_responsibilities"></a>Responsibilities</h3>
			<p>The responsibilities of the Specification Editorial Committee are:</p>
			<ul>
				<li>maintaining the Roadmap, i.e. set of future releases, entailing:
					<ul>
						<li>the identification &amp; creation of new specifications;</li>
						<li>the definition of new releases;</li>
						<li>the prioritisation of CRs and PRs;</li>
						<li>the assignment of CRs  and PRs to future releases;</li>
					</ul>		
				</li>
				<li>PR/CR processing:
					<ul>
						<li>the review of PRs;</li>
						<li>the raising of CRs either in response to PRs or de novo, according to perceived need;</li>
						<li>implementation of CR changes in the specifications;</li>
						<li>promotion of specifications through lifecycle;</li>
					</ul>
				</li>
				<li>communication to the wider openEHR community of:
					<ul>
						<li>requests for technical input;</li>
						<li>roadmap changes;</li>
						<li>CR reviews;</li>
						<li>completed CRs;</li>
						<li>new Releases;</li>
						<li>changes to governance documents;</li>
						<li>changes to Specification Editorial Committee.</li>
					</ul>
				</li>
				<li>publishing of the specifications and related materials.</li>
			</ul>
			<p>These processes are described in detail in the <a href="changeprocess" title="Specification Program Change Process">Change process</a>.</p>
			<p>In addition, the openEHR Management Board may advise of requirements for releases and prioritisation of work.</p>

			<h3><a name="sec_structure"></a>Structure</h3>
			<p>The Specifications Editorial Committee has 1-3 elected co-chairs, who facilitate the work of the committee. The exact number is based on practical needs, and will normally increase with the growth of committee numbers. The responsibilities of the co-chairs are as follows:</p>
			<ul>
				<li>to run SEC meetings;</li>
				<li>to facilitate the execution of the work of the SEC, mainly by managing completion of modification of task deadlines;</li>
				<li>to report progress and issues to the openEHR Management board;</li>
				<li>to arbitrate in case of disputes.</li>
			</ul>

			<p>In addition, a number of SEC members agree to act as Component Maintainers. This role is to ensure that each Component has at least one member capable of implementing changes determined by the change process on it. A member becomes a Component Maintainer by volunteering, and may resign from the responsibility at any time.</p>
			
			<h2><a name="sec_membership"></a>Membership</h2>
			<p>The minimum membership of the Specification Editorial Committee is determined by the following needs:</p>
				<ul>
					<li>to have one member acting as the Maintainer of each Specifications Component;</li>
					<li>to have sufficient members from the openEHR Industry Partners to be representative of the interests of implementers;</li>
					<li>to have two or more members with health informatics / clinical expertise, who perform clinical impact review.</li>
				</ul>
			<p>An absolute minimum of five (5) is required. Beyond this, it is intended that there are members representing:</p>
				<ul>
					<li>other major openEHR implementations (including academic).</li>
					<li>other major stakeholders, particularly government e-health programmes, and the healthcare sector.</li>
				</ul>
			<p>SEC Membership is created initially with the inception of the Specifications Program, and progresses as follows:</p>
				<ul>
					<li>New members come from nominations openEHR community which are voted on by the SEC.</li>
					<li>Members leave by natural attrition (i.e. resignation).</li>
				</ul>
			<p>Maximum membership is limited to 40.</p>
			<p>The SEC current membership will be openly posted online at all times.</p>

			<h3><a name="qualifyingcriteria"></a>Qualifying Criteria</h3>
			<p>Membership of the SEC is by nomination. New nominations may be made in the following situations:</p>
			<ul>
				<li>The Specification Program advertises within the community for a new member, e.g. due to a resignation, or need for more human resource;</li>
				<li>Community members, typically representing a newly joined organisation may nominate at any time.</li>
			</ul>
			<p>A new nomination must satisfy the following criteria.</p>

			<h4><a name="qualification"></a>Qualifications</h4>
			<ul>
				<li>An understanding of the overall <a href="index">openEHR mission</a>.</li>
				<li><em>Health informatics background</em>: a demonstrable knowledge of key health informatics areas such as EHR, interoperability, terminology, clinical environments, public health, medical research.</li>
				<li><em>Technical competency</em>: a knowledge of the modelling / language formalisms used in the specifications.</li>
				<li><em>openEHR experience</em>: at least 1 year of active participation in the openEHR community.
			</ul>
			
			<h4><a name="commitment"></a>Commitment</h4>
			<ul>
				<li>An expressed <em>interest</em> in actively working on the specifications.</li>
				<li><em>Availability</em> to contribute sufficient time to perform the work, expected to be a few hours a month.</li>
			</ul>

			<h4><a name="conflictsofinterest"></a>Conflicts of Interest</h4>
			<ul>
				<li>Any potential conflicts of interest must be declared by the candidate, and the candidate must agree to indicate any such conflict of interest in discussions and decision-making processes of the Program in which they are involved.</li>
			</ul>

			<h3><a name="candidature"></a>Candidature</h3>
			<p>The candidate should supply a short CV and other qualifying information describing:</p>
			<ul>
				<li>statement of interest in working on the Specification Program;</li>
				<li>statement of commitment of time &amp; availability;</li>
				<li>statement of qualifications, according to the above list;</li>
				<li>statement of known conflicts of interest.</li>
			</ul>

			<h3><a name="process"></a>Process</h3>
			<p>The process is as follows:</p>
			<ul>
				<li>A new nomination is sent to the co-chairs of the Specification Editorial Committee, who will publish it to the committee.</li>
				<li>A period of up to 4 weeks may follow to allow for assessment by the current membership. During this period:
				<ul>
					<li>the candidate may be asked for more information;</li>
					<li>the candidate may be asked to participate in an online or face to face interview;</li>
					<li>the nomination may be rejected on formal grounds, such as lack of qualification;</li>
				</ul>
				</li>
				<li>If the nomination is not rejected, a formal vote is taken, in which the new member is accepted into the Program based on a simple majority vote of the existing&nbsp; members, with no objections.</li>
			</ul>

			<h3><a name="lengthofmembership"></a>Length of membership</h3>
			<p>There is no limit on duration of membership in the SEC.</p>

			<h3><a name="resignation"></a>Resignation</h3>
			<p>An existing Program member may resign at any time from the SEC. In this case, the fact and effective date of resignation will be published, and the published Program membership updated accordingly.</p>
			<p>If the resignation is of an SEC co-chair, nominations for a new co-chair are called for, and the SEC rules for co-chair election described below followed.</p>
			<p>If the departure is of a Component Maintainer, the SEC solicits a volunteer to take on the Component.</p>

			<h3><a name="termination"></a>Termination</h3>
			<p>An existing member who has been referred to the  openEHR board by the Specification Editorial Committee for disruptive or other  unprofessional behaviour may be removed by he openEHR board following an appeal process, if all attempts at arbitration fail.</p>
			<p>Where termination leaves a vacancy, the same rules as for resignations are followed.</p>
			
			<h3><a name="cochair_elections"></a>Co-chair Elections</h3>
			<p>Elections are held every 12 months, at a fixed  date, or earlier in the case of resignation. At election time,  the  positions of members who have spent 2 years in the position come up for re-election by the whole Program membership. Members who are not co-chairs may re-nominate directly for SEC membership.</p>
			<p>Co-chair positions last 2 years. Elections are held every 12 months at a fixed date, or earlier in the case of resignation. A vacating co-chair may re-nominate for a successive term.</p>
			<h2><a name="sec_decisionmaking"></a>Decision-making</h2>
			<h3><a name="sec_consensus"></a>Consensus Process</h3>
			<p>Decisions on change and release management are primarily made by consensus, i.e. agreement of a quorum of members with no serious objections voiced. Where there are objections, the following process will be used:</p>
			<ul>
				<li>the co-chairs will manage a more formal round of discussions which seek to expose the points of difference and disagreement;</li>
				<li>If this fails to result in consensus, the cochairs will facilitate an open community review of the issue with a fixed timeline;</li>
				<li>The results of the community review will be the basis of a further round of discussions within the SEC aimed at finding a consensus position;</li>
				<li>If this still fails, a formal vote (see below) will be taken, unless objections to this route are voiced from within the SEC.</li>
			</ul>
			<p>Where there is any outstanding dispute, it can be by the SEC co-hairs to referred to the openEHR  Management Board for resolution. This may require an extraordinary meeting / conference.</p>
			<h3><a name="sec_formal_voting"></a>Formal Vote Process</h3>
			<p>Sometimes a formal vote will be required. This can only occur when there is a quorum of 2/3 of the SEC members available in a face to face meeting or live teleconference / webconference. It may not be undertaken asynchronously. The procedure is as follows:</p>
			<ul>
				<li>a motion is tabled;</li>
				<li>the motion is seconded;</li>
				<li>votes are gathered, with a maximum of one vote per company, institution or other individual;</li>
				<li>vote by proxy is allowed, supported by a written confirmation (e.g. email) from the absent voter;</li>
				<li>the motion is considered passed if a simple majority (50% + 1) of the SEC membership is obtained.</li>
			</ul>
			
			<h2><a name="meetings"></a>Meetings</h2>
			<p>Most work of the SEC is performed via teleconferences, and asynchronously (primarily via the online issue tracker). Online meetings of the SEC are held by teleconference at least once a quarter.</p>
			<p>At least one face to face meeting, open to the Program membership is required per year. Ideally elections would be held at this meeting.</p>
			
			<h2><a name="professionalconduct"></a>Professional Conduct</h2>
			<p>In order for the SEC development and decision-making processes to occur efficiently, and to provide an enjoyable experience for participants, contributions should follow the following guidelines:</p>
			<ul>
				<li>contributions to discussions and debates should be based on considerations (e.g. technical, clinical) relevant to the matter at hand;</li>
				<li>debates (online and face to face) should be conducted in a professional manner, without emotion, with a willingness to follow the governance principles stated here, and in cases of dispute, to accept the outcome of arbitration.</li>
			</ul>
			<p>In the unlikely event of a member's participation causing problems, the matter should be referred to in the first instance to the chair of the Specification Editorial Committee, and if necessary, an extraordinary meeting or  meetings  called for the purpose of arbitration. Arbitration will  proceed with the Specification Editorial Committee. If an agreement cannot be reached  this way, the matter will be  referred to the openEHR Management Board.</p>
			
			
			<h2><a name="tor"></a>Evolution of these Terms of Reference</h2>
			<p>The governance structures and procedures described above will inevitably need to change over time. The process for proposing and executing changes is as follows:</p>
			<ul>
				<li>A change can be proposed by anyone within the Program, or by the openEHR Management board. This request should include a statement of the problem being experienced with the current governance.</li>
				<li>The SEC co-chairs undertake to refine the request into a specific change in the rules that addresses the problem.</li>
				<li>This is then published within the SEC for review for a stated period, e.g. 4 weeks.</li>
				<li>Further refinement may be carried out on the back of the review.</li>
				<li>A final detailed proposal is presented to the openEHR board by the SEC co-chairs.</li>
				<li>If accepted, the change is publicly notified to take effect on a certain date, at which time the governance provisions here are modified accordingly.</li>
			</ul>


			<h2><a name="faq"></a>Frequently Asked Questions</h2>
			<h3>What stops one organisation having undue influence?</h3>
			<p>Where decisions go to a formal vote, each organisation gets only one vote.</p>

<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
