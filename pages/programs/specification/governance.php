<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'Governance';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2><a name="introduction"></a>Introduction</h2>
			<p>This page describes the terms of reference (ToR) for the openEHR Specification Program. The Specification Program has members drawn from the wider openEHR membership, particularly openEHR solution vendors and other implementers for whom the specifications are of concrete importance. Ideally the membership of the Program will include individuals from multiple language groups, cultures as well as with a diversity of technical, clinical and informatics backgrounds.</p>
			
			<h2><a name="specifications"></a>The Specifications</h2>
			<p>The specifications under management by the Program are identified in terms of Specifications Components, each consisting of one or more concrete Specifications relating to a topic area. <em>A Component is defined as being something that is separately releasable</em>.</p>
			<p>Each logical Specification within a Component consists of:</p>
				<ul>
					<li>a definitive publishable documentary form, typically in PDF and/or HTML format;</li>
					<li>the source materials required to create the publishable specification;</li>
					<li>a definitive publishable computable form, typically a UML model XMI file, parser grammar(s) and so on;</li>
					<li>formal educational materials accompanying the specification, including example uses and files.</li>
				</ul>		
			<p>At any point in time, a Specification is in one of the lifecycle states: Planned, Development, Trial, Stable, or Retired.</p>

			<h2><a name="programstructure"></a>Program Structure</h2>
			<p>The Specification Program is managed by the Specifications Editorial Committee (SEC). The SEC membership consists of community members who are qualified and who have an interest in maintaining the specifications into the future on behalf of the community.</p>
			<p>Each Specifications Component has a designated Maintainer from among the SEC mambers, who is responsible for making and committing changes agreed by the SEC. Over time, the number of Component Maintainers will be a small minority of the overall SEC membership.</p>
			<p>The following illustrates the Specifications Program structure.</p>
			<p style="text-align:center;"><img src="/files/programs/specification/SpecProgStr.png" alt="Specification Program Structure" style="border: solid 1px #CCCCCC;"></p>

			<h2><a name="sec"></a>Specifications Editorial Committee (SEC)</h2>
			<p>The Specifications Editorial Committee (SEC) is the formal body for management of the specifications. Primarily the work of the SEC consists of change management and publishing (i.e. releasing). Change Management is tool-based, and the change history, current state and projected state of the specifications are always visible online.</p>
			<p>Changes are formally documented using Change Requests (CRs), which are uniquely numbered and visible online. A CR has a lifecycle, and if not rejected, will define specific changes to the specification(s) it relates to.</p>
			<p>Issues with the specifications can also be formally raised; these are known as Problem Reports (PRs). The change management process aims to resolve all PRs.</p>
			
			<h3><a name="sec_responsibilities"></a>Responsibilities</h3>
			<p>The responsibilities of the Specification Editorial Committee are:</p>
			<ul>
				<li>maintaining the Roadmap, i.e. set of future releases, entailing:
					<ul>
						<li>the identification &amp; creation of new specifications;</li>
						<li>the definition of new releases;</li>
						<li>the prioritisation of CRs;</li>
						<li>the assignment of CRs to future releases;</li>
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
				<li>publishing of the specifications and other materials.</li>
			</ul>
			<p>In addition, the openEHR Management Board may advise of requirements for releases and prioritisation of work.</p>

			<h3><a name="sec_structure"></a>Structure</h3>
			<p>The Specifications Editorial Committee has two elected co-chairs, who facilitate the work of the committee. The responsibilities of the co-chairs are as follows:</p>
			<ul>
				<li>to run SEC meetings;</li>
				<li>to facilitate the execution of the work of the SEC;</li>
				<li>to arbitrate in case of disputes.</li>
			</ul>
			<p>These processes are described in detail in the <a href="changeprocess" title="Specification Program Change Management Plan">Change Management Plan</a>.</p>

			<p>In addition, a number of SEC members are designated to act as Component Maintainers. This role is to ensure that each Component has at least one member capable of implementing changes on it, as required by the committee. A member becomes a Component Maintainer by volunteering, and may resign from the responsibility at any time.</p>
			
			<h2><a name="sec_membership"></a>Membership</h2>
			<p>The minimum membership of the Specification Editorial Committee is determined by the following needs:</p>
				<ul>
					<li>to have one member acting as the Maintainer of each Specifications Component;</li>
					<li>to have sufficient members from the openEHR Industry Partners to be representative of the interests of implementers;</li>
					<li>to have two or more members with health informatics / clinical expertise, who perform clinical safety review.</li>
				</ul>
			<p>Beyond this, it is intended that there are members representing:</p>
				<ul>
					<li>other major openEHR implementations (including academic).</li>
				</ul>
			<p>Membership is created initially by the Specifications Program lead, and changes as follows:</p>
				<ul>
					<li>New members come from nominations openEHR community which are voted on by the SEC.</li>
					<li>Members leave by natural attrition (i.e. resignation).</li>
				</ul>
			<p>Maximum membership is limited to 40.</p>
			<p>The SEC current membership will be openly posted oneline at all times.</p>

			<h3><a name="qualifyingcriteria"></a>Qualifying Criteria</h3>
			<p>Membership of the SEC is by nomination. New nominations may be made in the following situations:</p>
			<ul>
				<li>The Specification Program advertises within the community for a new member, e.g. due to a resignation, or need for more human resource;</li>
				<li>Community members, typically representing a newly joined vendor or institution may nominate at any time.</li>
			</ul>
			<p>A new nomination must satisfy the following criteria.</p>

			<h4><a name="qualification"></a>Qualifications</h4>
			<ul>
				<li>An understanding of the overall openEHR mission.</li>
				<li><em>Health informatics background</em>: a demonstrable knowledge of key health informatics issues such as EHR, interoperability, terminology, clinical environments, public health, medical research.</li>
				<li><em>Technical competency</em>: a knowledge of the modelling / language formalisms used in the specifications.</li>
				<li><em>openEHR experience</em>: at least 1 year of active participation in the openEHR community and
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
			<p>The candidate should supply a CV and other qualifying information  describing:</p>
			<ul>
				<li>statement of interest in working on the Specification Program;</li>
				<li>statement of commitment of time &amp; availability;</li>
				<li>statement of qualifications, according to the above list;</li>
				<li>statement of known conflicts of interest.</li>
			</ul>

			<h3><a name="process"></a>Process</h3>
			<p>The process is as follows:</p>
			<ul>
				<li>A new nomination is sent to any co-chair of the Specification Editorial Committee, who will publish it to the current Program membership.</li>
				<li>A period of up to 4 weeks may follow to allow for assessment by the membership. During this period:
				<ul>
					<li>the candidate may be asked for more information;</li>
					<li>the candidate may be asked to participate in an online or face to face interview;</li>
					<li>the nomination may be rejected on formal grounds, such as lack of qualification;</li>
				</ul>
				</li>
				<li>If the nomination is not rejected, a formal vote is taken, in which the new member is accepted into the Program based on a 2/3 majority vote of the existing&nbsp; members.</li>
			</ul>

			<h3><a name="lengthofmembership"></a>Length of membership</h3>
			<p>There is no limit on duration of membership of the Program, as long as the participation and competence are maintained, and the Program membership rules are not broken. Membership of the SEC and co-chair positions are limited to 2 years and are filled by election (described in the relevant section above).</p>

			<h3><a name="resignation"></a>Resignation</h3>
			<p>An existing Program member may resign at any time from the SEC, and additionally from all involvement. In either case, the fact and effective date of resignation will be published, and the published Program membership updated accordingly.</p>
			<p>If the resignation is of an SEC co-chair, nominations for a new co-chair are called for, and the SEC rules for co-chair election described above followed.</p>
			<p>If the departure is of a Component Maintainer, the SEC solicits a volunteer to take on the Component.</p>

			<h3><a name="termination"></a>Termination</h3>
			<p>An existing member who has been referred to the  openEHR board by the Specification Editorial Committee for disruptive or other  unprofessional behaviour may be removed by he openEHR board following an appeal process, if all attempts at arbitration fail.</p>
			<p>Where termination leaves a vacancy, the same rules as for resignations are followed.</p>

			
			<h3><a name="cochair_elections"></a>Co-chair Elections</h3>
			<p>Elections are held every 12 months, at a fixed  date, or earlier in the case of resignation. At election time,  the  positions of all SEC members who have spent 2 years in the position come up for re-election by the whole Program membership. Members who are not co-chairs may re-nominate directly for SEC membership.</p>
			<p>Co-chair positions last 2 years. Elections are held every 12 months at a fixed date, or earlier in the case of resignation. A vacating co-chair may re-nominate for a successive term.</p>
			<h2><a name="sec_decisionmaking"></a>Decision-making</h2>
			<h3><a name="sec_consensus"></a>Consensus Process</h3>
			<p>Decisions are primarily made by consensus, i.e. agreement of a quorum of members with no serious objections voiced. Where there are objections, the following process will be used:</p>
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
				<li>votes are gathered, with a maximum of one vote per company or institution;</li>
				<li>individuals who are not connected to a company or institution may vote for themselves;</li>
				<li>vote by proxy is allowed, supported by a written confirmation (e.g. email) from the absent voter;</li>
				<li>the motion is considered passed if a 2/3 majority of the SEC membership is obtained.</li>
			</ul>
			
			<h2><a name="meetings"></a>Meetings</h2>
			<p>At least one face to face meeting, open to the Program membership is required per year. Ideally elections would be held at this meeting.</p>
			<p>Online meetings of the Specification Editorial Committee are held by teleconference at least once a quarter, in order to discuss pending PRs and CRs.</p>
			
			<h2><a name="professionalconduct"></a>Professional Conduct</h2>
			<p>In order for the SpecP development and decision-making processes to occur efficiently, and to provide an enjoyable experience for participants, contributions should follow the following guidelines:</p>
			<ul>
				<li>contributions to discussions and debates should be based on considerations (e.g. technical, clinical) relevant to the matter at hand;</li>
				<li>debates (online and face to face) should be conducted in a professional manner, without emotion, with a willingness to follow the governance principles stated here, and in cases of dispute, to accept   the outcome of arbitration.</li>
			</ul>
			<p>In the unlikely event of a member's participation causing problems,   the matter should be referred to in the first instance to the chair of   the Specification Editorial Committee, and if necessary, an extraordinary meeting or  meetings  called for the purpose of arbitration. Arbitration will  proceed with the Specification Editorial Committee. If an agreement cannot be reached  this way, the matter will be  referred to the openEHR Management Board.</p>
			
			
			<h2><a name="tor"></a>Evolution of these Terms of Reference</h2>
			<p>The governance structures and procedures described above will inevitably need to change over time. The process for proposing and executing changes is as follows:</p>
			<ul>
				<li>A change can be proposed by anyone within the Program, or by the Management board. This request should include a statement of the problem being experienced with the current governance.</li>
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
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>
