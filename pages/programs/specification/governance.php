<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'Governance';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<span class="InvisibleList">
			<ul>
				<li><a href="#introduction">Introduction</a></li>
				<li><a href="#programstructure">Program Structure</a></li>
				<ul>
					<li><a href="#editorialcommittee">Editorial Committee</a></li>
					<li><a href="#componentmaintainergroup">Component Maintainer Group</a></li>
					<li><a href="#size">Size</a></li>
					<li><a href="#fairness">Fairness</a></li>
				</ul>
				<li><a href="#groupmembership">Group Membership</a></li>
				<ul>
					<li><a href="#qualifyingcriteria">Qualifying Criteria</a></li>
					<li><a href="#candidature">Candidature</a></li>
					<li><a href="#process">Process</a></li>
					<li><a href="#lengthofmembership">Length of Membership</a></li>
					<li><a href="#resignation">Resignation</a></li>
					<li><a href="#termination">Termination</a></li>
				</ul>
				<li><a href="#meetings">Meetings</a></li>
				<li><a href="#professionalconduct">Professional Conduct</a></li>
				<li><a href="#tor">Evolution of these Terms of Reference</a></li>
				<li><a href="#faq">Frequently Asked Questions</a></li>
			</ul>
			</span>
			
			<h2><a name="introduction"></a>Introduction</h2>
			<p>Following section describes the terms of reference (ToR) for the activities of the openEHR Specification Program. The Specification Program has members drawn from the wider openEHR membership. Ideally the membership of the Program will include individuals from multiple language groups, cultures as well as with a diversity of technical, clinical and informatics backgrounds.</p>
			
			
			<h2><a name="programstructure"></a>Program Structure</h2>
			<p>The Specification Program consists of an Editorial Committee (EC), and Component Maintainer Groups (CMGs). The Editorial Committee membership consists of 1 representative from each CMG and has up to 3 co-chairs.</p>
			<p>The following chart illustrates the structure. Initial membership of the Program starts with membership of a CMG.</p>
			<p style="text-align:center;"><img src="/files/programs/specification/SpecProgStr.png" alt="Specification Program Structure" style="border: solid 1px #CCCCCC;"></p>

			<h3><a name="editorialcommittee"></a>Editorial Committee</h3>
			<p>The Program has an Editorial Committee (EC) which is the formal body for review and decision-making.</p>
			
			<h4><a name="ecresponsibilities"></a>Responsibilities</h4>
			<p>The responsibilities of the Editorial Committee are:</p>
			<ul>
				<li>maintaining the Roadmap:
					<ul>
						<li>the identification &amp; creation of new specifications;</li>
						<li>the definition of new releases;</li>
						<li>the prioritisation of CRs,</li>
						<li>the assignment of CRs to future releases;</li>
					</ul>		
				</li>
				<li>PR/CR processing:
					<ul>
						<li>the review of PRs;</li>
						<li>the raising of CRs either in response to PRs or de novo, according to perceived need;</li>
						<li>promotion of specifications through lifecycle states;</li>
					</ul>
				</li>
				<li>communication to the wider openEHR community of:
					<ul>
						<li>roadmap changes;</li>
						<li>CR reviews;</li>
						<li>completed CRs;</li>
						<li>new Releases;</li>
						<li>changes to governance documents;</li>
						<li>changes to Editorial Committee and CMG membership.</li>
					</ul>
				</li>
				<li>publishing of the specifications and other materials.</li>
			</ul>
			<p>In addition, the openEHR Management Board may advise of requirements for releases and prioritisation of work.</p>
			<p>The responsibilities of the co-chairs are as follows:</p>
			<ul>
				<li>to run EC meetings;</li>
				<li>to facilitate the execution of the work of the EC;</li>
				<li>to arbitrate in case of disputes.</li>
			</ul>
			<p>These processes are described in detail in the <a href="changeprocess" title="Specification Program Change Management Plan">Change Management Plan</a>.</p>
			
			<h4><a name="ecdecisionmaking"></a>Decision-making</h4>
			<p>Decisions are primarily made by consensus, i.e. general agreement with no serious objections voiced. Where there are objections, the following process will be used:</p>
			<ul>
				<li>the co-chairs will manage a more formal round of discussions which seek to expose the points of difference and disagreement;</li>
				<li>If this fails to result in consensus, the cochairs will facilitate an open community review of the issue with a fixed timeline;</li>
				<li>The results of the community review will be the basis of a further round of discussions within the EC aimed at finding a consensus decsion;</li>
				<li>If this still fails, a formal 2/3 majority  vote will be taken, unless objections to this route are voiced from within the EC.</li>
			</ul>
			<p>Where there is any outstanding dispute, it can be by the EC co-hairs to referred to the openEHR  Management Board for resolution. This may require an extraordinary meeting / conference.</p>
			
			<h4><a name="ecmembership"></a>Membership</h4>
			<p>The EC membership consists of one representative from each CMG. Each CMG must have a <em>distinct</em> representative on the EC, in order to ensure that a dedicated person  takes responsibility for representing the relevant interests.</p>
			<p>Up to three, and preferably at least two, EC members are elected as <em>co-chairs</em> by the Program membership.</p>
			<p>Membership  of the Editorial Committee is for 2 years. New members come from nominations among the Program membership. At least one candidate is required from each CMG. Candidates are elected to the EC by the whole Program membership voting for each CMG position on the EC from among the candidates for that position.</p>
			<p>Elections are held every 12 months, at a fixed  date, or earlier in the case of resignation. At election time,  the  positions of all EC members who have spent 2 years in the position  come  up for re-election by the whole Program membership. Members who are not co-chairs may re-nominate directly for EC membership.</p>
			<p>Co-chair positions last 2 years. Elections are held every 12 months at a fixed date, or earlier in the case of resignation. A vacating   co-chair may not re-nominate for a successive term but may re-nominate   after at least one 12 month period since the previous term served.</p>
			
			<h3><a name="componentmaintainergroup"></a>Component Maintainer Group</h3>
			<p>Most Program members are members of one or more component maintainer groups (CMGs),  where each <a href="/programs/specification/releases/currentbaseline" title="Specification Progam - Deliverables" target="_blank">component</a> has such a group.</p>
			
			<h4><a name="cmgresponsibilities"></a>Responsibilities</h4>
			<p>The responsibilities of a CMG are:</p>
			<ul>
				<li>to perform the execution of changes  in CRs accepted by the Editorial Committee for that component, either directly, or by obtaining external expertise as required;</li>
				<li>to maintain the relevant issue trackers so as to reflect the current status of all work;</li>
				<li>to provide notifications to the community of all releases.</li>
			</ul>

			<h4><a name="cmgmembership"></a>Membership</h4>
			<p>A Program member can be in one or more CMGs, according to breadth of expertise. Each CMG requires a minimum of 1 member.</p>
			<p>Each member must be sufficiently technically qualified to understand  the relevant specifications / artefacts, and be able to participate  actively in the processing of changes to the artefacts in that  component.</p>
			<p>The membership of each CMG is recorded online at the <a href="http://www.openehr.org/issues/browse/SPEC" target="_blank">SPEC tracker location</a> .</p>
			<p>There is no limit on the duration of CMG membership, as long as the   participation and competence are maintained, and the Program Fairness Rules are not broken.</p>
			
			<h4><a name="cmgcreation"></a>Creation</h4>
			<p>A new CMG is created by the EC by majority vote, based on the requirement for a new specification component. The proposed new CMG must be documented with:</p>
			<ul>
				<li>description of purpose;</li>
				<li>relevance to openEHR and the wider community;</li>
				<li>initial membership (at least one member must be proposed).</li>
			</ul>
			
			<h2><a name="groupmembership"></a>Group Membership</h2>
			<p>This section describes the conditions for membership in CMGs.</p>

			<h3><a name="qualifyingcriteria"></a>Qualifying Criteria</h3>
			<p>New members of the Specifications Program join as a member of one or more CMGs. New nominations may be made in the following situations:</p>
			<ul>
				<li>The Specification Program advertises within the community for a new member, e.g. due to a resignation, or need for more human resource;</li>
				<li>Positions being available within the CMGs, due to the CMG being too small (1 or 2 members), or the CMG requesting more members.</li>
			</ul>
			<p>Note that the membership status of the CMGs will be posted at all times, including vacancies / requests for participation.</p>
			<p>A prospective new Specification Program candidate self-nominates as a member of one or more CMGs. The nomination requires the support of two existing Program members. The candidate must satisfy the following criteria.</p>

			<h4><a name="qualification"></a>Qualifications</h4>
			<ul>
				<li>An understanding of the overall openEHR mission.</li>
				<li><em>Health informatics background</em>: a demonstrable knowledge of key health informatics issues such as EHR, interoperability, terminology, clinical environments, public health, medical research.</li>
				<li><em>Technical competency</em>: a knowledge of the modelling / language formalisms relevant to the proposed CMGs.</li>
				<li><em>openEHR experience</em>: at least 1 year of active participation in the openEHR community and
				<li>for CMGs: at least 1 year direct involvement in an openEHR implementation.</li>
			</ul>
			
			<h4><a name="commitment"></a>Commitment</h4>
			<ul>
				<li>An expressed <em>interest</em> in actively working on the specifications.</li>
				<li><em>Availability</em> to contribute sufficient time to perform the work, expected to be a minimum of 4h / week.</li>
			</ul>

			<h4><a name="conflictsofinterest"></a>Conflicts of Interest</h4>
			<ul>
				<li>Any potential conflicts of interest must be declared by the candidate, and the candidate must agree to indicate any such conflict of interest in discussions and decision-making processes of the Program in which they are involved.</li>
			</ul>
			<p>In addition, a successful nomination cannot cause any of the Program Fairness rules to be broken.</p>

			<h3><a name="candidature"></a>Candidature</h3>
			<p>The candidate should supply a CV and other qualifying information  describing:</p>
			<ul>
				<li>which CMGs the candidate proposes to work on (at least one);</li>
				<li>statement of interest in working on the Specification Program;</li>
				<li>statement of commitment of time &amp; availability;</li>
				<li>statement of qualifications, according to the above list;</li>
				<li>statement of known conflicts of interest.</li>
			</ul>

			<h3><a name="process"></a>Process</h3>
			<p>The process is as follows:</p>
			<ul>
				<li>A new nomination is sent to any co-chair of the Editorial Committee, who will publish it to the current Program membership.</li>
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
			<p>There is no limit on duration of membership of the Program, as long as the participation and competence are maintained, and the Program membership rules are not broken. Membership of the EC and co-chair positions are limited to 2 years and are filled by election (described in the relevant section above).</p>

			<h3><a name="resignation"></a>Resignation</h3>
			<p>An existing Program member may resign at any time from the EC, and additionally from all involvement. In either case, the fact and effective date of resignation will be published, and the published Program membership updated accordingly.</p>
			<p>If the resignation is of an EC co-chair, nominations for a new co-chair are called for, and the EC rules for co-chair election described above followed.</p>
			<p>If the resignation is of any EC member, another member of the resignee's CMG are invited to fill the position on the EC.</p>
			<p>If the  departure leaves a CMG (see below) with less than 3 members then a new  volunteer for the relevant component is sought initially from within the Program . If none is found, a new nomination is sought from the general membership.</p>

			<h3><a name="termination"></a>Termination</h3>
			<p>An existing member who has been referred to the  openEHR board by the Editorial Committee for disruptive or other  unprofessional behaviour may be removed by he openEHR board following an appeal process, if all attempts at arbitration fail.</p>
			<p>Where termination leaves a vacancy, the same rules as for resignations are followed.</p>

			
			<h2><a name="meetings"></a>Meetings</h2>
			<p>At least one face to face meeting, open to the Program membership is required per year. Ideally elections would be held at this meeting.</p>
			<p>Online meetings of the Editorial Committee are held by teleconference at least once a quarter, in order to discuss pending PRs and CRs.</p>
			
			<h2><a name="professionalconduct"></a>Professional Conduct</h2>
			<p>In order for the SpecP development and decision-making processes to occur efficiently, and to provide an enjoyable experience for participants, contributions should follow the following guidelines:</p>
			<ul>
				<li>contributions to discussions and debates should be based on considerations (e.g. technical, clinical) relevant to the matter at hand;</li>
				<li>debates (online and face to face) should be conducted in a professional manner, without emotion, with a willingness to follow the governance principles stated here, and in cases of dispute, to accept   the outcome of arbitration.</li>
			</ul>
			<p>In the unlikely event of a member's participation causing problems,   the matter should be referred to in the first instance to the chair of   the Editorial Committee, and if necessary, an extraordinary meeting or  meetings  called for the purpose of arbitration. Arbitration will  proceed with the Editorial Committee. If an agreement cannot be reached  this way, the matter will be  referred to the openEHR Board.</p>
			
			
			<h2><a name="tor"></a>Evolution of these Terms of Reference</h2>
			<p>The governance structures and procedures described above will inevitably need to change over time. The process for proposing and executing changes is as follows:</p>
			<ul>
				<li>A change can be proposed by anyone within the Program, or by the Management board. This request should include a statement of the problem being experienced with the current governance.</li>
				<li>The EC co-chairs undertake to refine the request into a specific change in the rules that addresses the problem.</li>
				<li>This is then published within the EC for review for a stated period, e.g. 4 weeks.</li>
				<li>Further refinement may be carried out on the back of the review.</li>
				<li>A final detailed proposal is presented to the openEHR board by the EC co-chairs.</li>
				<li>If accepted, the change is publicly notified to take effect on a certain date, at which time the governance provisions here are modified accordingly.</li>
			</ul>


			<h2><a name="faq"></a>Frequently Asked Questions</h2>
			
			<h3>What stops one company / organisation having undue influence?</h3>
			<p>Any number of people from a given organisation can participate in the Specification Program. However, two rules are designed to ensure that no single organisation can have an inappropriate influence. The first is that no organisation can have a majority of the members on any given CMG; the second is that no more than 2 members from a single organisation can work on the EC simultaneously.</p>

<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>
