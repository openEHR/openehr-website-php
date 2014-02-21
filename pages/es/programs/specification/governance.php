<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Gobernanza';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_header.php');
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
					<li><a href="#standardsadvisorygroup">Standards Advisory Group</a></li>
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
				<li><a href="#communications">Communications</a></li>
				<ul>
					<li><a href="#otherprograms">With other Programs</a></li>
					<li><a href="#openehrcommunity">With the wider openEHR Community</a></li>
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
			<p>The Specification Program consists of an Editorial Committee (EC), and two kinds of Groups - Component Maintainer Groups (CMGs), and Standards Advisory Groups (SAGs). CMGs are classified as 'core' and 'implementation-related'. The Editorial Committee membership consists of 1 representative from each CMG and has up to 3 co-chairs.</p>
			<p>The following chart illustrates the structure. Initial membership of the Program starts with membership of a CMG and/or SAG.</p>
			<p style="text-align:center;"><img src="/files/programs/specification/SpecProgStr.png" alt="Specification Program Structure" style="border: solid 1px #CCCCCC;"></p>

			<h3><a name="editorialcommittee"></a>Editorial Committee</h3>
			<p>The Program has an Editorial Committee (EC) which is the formal body for review and decision-making.</p>
			
			<h4><a name="ecresponsibilities"></a>Responsibilities</h4>
			<p>The responsibilities of the Editorial Committee are:</p>
			<ul>
				<li>maintaining the Roadmap:
				<ul>
					<li>the identification & creation of new specifications;</li>
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
					<li>new Releases.</li>
				</ul>
				</li>
				<li>publishing of the specifications and other materials.</li>
			</ul>
			<p>In addition, the openEHR Operational Group may advise of requirements for releases and prioritisation of work.</p>
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
			<p>Where there is any outstanding dispute, it can be by the EC co-hairs to referred to the openEHR  Operational Group for resolution. This may require an extraordinary meeting / conference.</p>
			
			<h4><a name="ecmembership"></a>Membership</h4>
			<p>The EC membership consists of one representative from each CMG and each SAG. Each CMG and SAG must have a <em>distinct</em> representative on the EC, in order to ensure that a dedicated person  takes responsibility for representing the relevant interests.</p>
			<p>Up to three, and preferably at least two, EC members are elected as <em>co-chairs</em> by the Program membership.</p>
			<p>Membership  of the Editorial Committee is for 2 years. New members come from nominations among the Program membership. At least one candidate is required from each CMG and SAG. Candidates are elected to the EC by the whole Program membership voting for each CMG / SAG position on the EC from among the candidates for that position.</p>
			<p>Elections are held every 12 months, at a fixed  date, or earlier in the case of resignation. At election time,  the  positions of all EC members who have spent 2 years in the position  come  up for re-election by the whole Program membership. Members who are not co-chairs may re-nominate directly for EC membership.</p>
			<p>Co-chair positions last 2 years. Elections are held every 12 months at a fixed date, or earlier in the case of resignation. A vacating   co-chair may not re-nominate for a successive term but may re-nominate   after at least one 12 month period since the previous term served.</p>
			
			<h3><a name="componentmaintainergroup"></a>Component Maintainer Group</h3>
			<p>Most Program members are members of one or more component maintainer groups (CMGs),  where each <a href="/wiki/display/oecom/Specification+Progam+-+Deliverables" title="Specification Progam - Deliverables" target="_blank">component</a> has such a group.</p>
			
			<h4><a name="cmgresponsibilities"></a>Responsibilities</h4>
			<p>The responsibilities of a CMG are:</p>
			<ul>
				<li>to perform the execution of changes  in CRs accepted by the Editorial Committee for that component, either directly, or by obtaining external expertise where agreed with the  Editorial Committee;</li>
				<li><font color="#ff0000">(any external communications needed?)</font></li>
			</ul>

			<h4><a name="cmgmembership"></a>Membership</h4>
			<p>A Program member can be in one or more CMGs, according to breadth of expertise. Each core CMG requires a minimum of 3 members. Non-core CMGs must have at least 1 member.</p>
			<p>Each member must be sufficiently technically qualified to understand  the relevant specifications / artefacts, and be able to participate  actively in the processing of changes to the artefacts in that  component.</p>
			<p>The membership of each CMG is recorded online at the <a href="http://www.openehr.org/issues/browse/SPEC" target="_blank">SPEC tracker location</a> .</p>
			<p>There is no limit on the duration of CMG membership, as long as the   participation and competence are maintained, and the Program Fairness Rules are not broken.</p>
			
			<h4><a name="cmgcreation"></a>Creation</h4>
			<p>A new core CMG is created by the EC, based on the requirement for a new specification component. It must be created with at least 3 members.</p>
			<p>A new non-core CMG is created based on a successful proposal by any Program member to the EC, which details:</p>
			<ul>
				<li>the purpose of the CMG;</li>
				<li>the relevance to openEHR and the wider community;</li>
				<li>the initial membership (at least one member must be proposed).</li>
			</ul>
			
			<h3><a name="standardsadvisorygroup"></a>Standards Advisory Groups</h3>
			<p>In addition to the EC and CMGs, there are Standards Advisory Groups (SAGs) for interfacing with <em>de jure</em> standards development organisations (SDOs). The SAGs exist to address the existing gaps between SDO offerings (and those of non-SDOs like  openEHR), which are a critical problem that needs to be resolved for major  stakeholders, such as national e-health programmes and major vendors,  because it prevents the individual offerings, no matter how good, from  being easily adopted.</p>
			<p>Each SAG is constituted for a particular standard or group of related  standards managed by an official standards organisation, e.g. ISO 13606,  SNOMED CT, etc.</p>

			<h4><a name="sagresponsibilities"></a>Responsibilities</h4>
			<p>The responsibilities of a SAG are as follows:</p>
			<ul>
				<li>To <em>track the relevant standard</em> and to advise if there are features that might affect openEHR specifications, e.g. should be incorporated, should be aligned to, or might require transformational tools;</li>
				<li>To <em>offer relevant openEHR specifications</em> to the standards body, either as input to standards development, or as a formal standards proposal. (Finalising such a proposal would be an openEHR board decision and generally would involve an organisation - organisation MOU and legal advice);</li>
				<li>To work on <em>diminishing, removing and bridging the philosophical and engineering differences</em> between specifications of openEHR and other SDOs. Practical efforts here may include:&nbsp;
				<ul>
					<li>aligning jargon in documentation and other published material;</li>
					<li>making sure that openEHR specifications have a defined relationship to extant SDO standards;</li>
					<li>providing educational materials;</li>
					<li>proposing specifications that support data conversion,</li>
					<li>proposing specifications that support software interoperation and other integration approaches.</li>
				</ul>
				</li>
				<li>To act as the <em>openEHR official liaison</em> to the relevant SDO of subgroup thereof.</li>
			</ul>

			<h4><a name="sagmembership"></a>Membership</h4>
			<p>Each Standards Advisory Group includes members from the Specification Program who are knowledgeable about the standard and/or are directly involved in the relevant organisation's work. Each SAP elects one member as the representative to the EC. The Standards Advisory Groups do not create openEHR specifications, rather they create formal proposals for a) change to openEHR specifications - ultimately resulting in CRs and b) the target SDOs.</p>
			<p>The membership of each SAG is recorded online at the <a href="http://www.openehr.org/issues/browse/SPEC">SPEC tracker location</a>.</p>

			<h4><a name="sagcreation"></a>Creation</h4>
			<p>A new SAG is created based on a successful proposal by any Program member to the EC, which details:</p>
			<ul>
				<li>what particular SDO or SDO standards are proposed as the basis for the SAG;</li>
				<li>the relevance to openEHR and the wider community;</li>
				<li>how the SAG responsibilities will be performed</li>
				<li>the initial membership (at least one member must be proposed).</li>
			</ul>

			<h3><a name="size"></a>Size</h3>
			<p>There is no maximum number of members of the Program. In the future it may well be possible that with say 8 core CMGs, 4 non-core CMGs and 4 SAGs, the membership could be as high as 50. The minimum number of members is that required to satisfy the 3 member-per-Component Maintainer Group rule (below). Since a Program member can be a member of more than one maintainer group, the actual total membership is variable.</p>

			<h3><a name="fairness"></a>Fairness</h3>
			<p>To ensure fairness and representativeness of the Program, the following rules are provided.</p>
			<ul>
				<li>Core CMGs must have at least 3 members.</li>
				<li>The EC must have one representative from each core CMG.</li>
				<li>The EC must have at least 2 co-chairs.</li>
				<li>The EC can have no more than two members from a single organisation, i.e.   company, university, government agency, NGO or other enterprise.</li>
			</ul>
			<p>If any of the above rules is broken by resignation, change of  employer or other events, the appropriate election or other action will  be taken.</p>
			
			
			<h2><a name="groupmembership"></a>Group Membership</h2>
			<p>This section describes the conditions for membership in CMGs and SAGs.</p>

			<h3><a name="qualifyingcriteria"></a>Qualifying Criteria</h3>
			<p>New members of the Specifications Program join as a member of one or more CMGs and/or SAGs. New nominations may be made in the following situations:</p>
			<ul>
				<li>The Specification Program advertises within the community for a new member, e.g. due to a resignation, or need for more human resource;</li>
				<li>Positions being available within the CMGs and SAGs, due to the CMG/SAG being too small (1 or 2 members), or the CMG/SAG requesting more members.</li>
			</ul>
			<p>Note that the membership status of the CMGs and SAGs will be posted at all times, including vacancies / requests for participation.</p>
			<p>A prospective new Specification Program candidate self-nominates as a member of one or more CMGs and/or SAGs. The nomination requires the support of two existing Program members. The candidate must satisfy the following criteria.</p>

			<h4><a name="qualification"></a>Qualifications</h4>
			<ul>
				<li>An understanding of the overall openEHR mission.</li>
				<li><em>Health informatics background</em>: a demonstrable knowledge of key health informatics issues such as EHR, interoperability, terminology, clinical environments, public health, medical research.</li>
				<li><em>Technical competency</em>: a knowledge of the modelling / language formalisms relevant to the proposed CMGs and/or SAGs.</li>
				<li><em>openEHR experience</em>: at least 1 year of active participation in the openEHR community and
				<ul>
					<li>for CMGs: at least 1 year direct involvement in an openEHR implementation;</li>
					<li>for SAGs: at least 1 year involvement in a <em>de jure</em> standards body.</li>
				</ul>
				</li>
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
				<li>which CMGs and/or SAGs the candidate proposes to work on (at least one);</li>
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
			<p>If the resignation is of any EC member, another member of the resignee's CMG or SAG are invited to fill the position on the EC.</p>
			<p>If the  departure leaves a CMG (see below) with less than 3 members then a new  volunteer for the relevant component is sought initially from within the Program . If none is found, a new nomination is sought from the general membership.</p>

			<h3><a name="termination"></a>Termination</h3>
			<p>An existing member who has been referred to the  openEHR board by the Editorial Committee for disruptive or other  unprofessional behaviour may be removed by he openEHR board following an appeal process, if all attempts at arbitration fail.</p>
			<p>Where termination leaves a vacancy, the same rules as for resignations are followed.</p>

			
			<h2><a name="communications"></a>Communications</h2>
			
			<h3><a name="otherprograms"></a>With other Programs</h3>
			<p>The Specification Program needs to maintain communications with the other openEHR Programs on a fairly constant basis. Necessary communications include:</p>
			<ul>
				<li>Clinical Models Program: TBD</li>
				<li>Software Program: TBD</li>
				<li>Localisation Program: TBD</li>
			</ul>
			<p><font color="#ff0000">Do we need official liaisons? How should other Programs be represented on the Spec Program (they need to be, since specifications affect everyone)?</font></p>

			<h3><a name="openehrcommunity"></a>With the wider openEHR Community</h3>
			<p>In order to keep the openEHR community at large informed about events in the Specification Program, regular and visible communications is needed. These include the following:</p>
			<ul>
				<li>All governance documents are posted on the openEHR web.</li>
				<li>The current membership of the Program, including Editorial Committee, CMGs and SAGs is posted and maintained on a wiki page.</li>
				<li>The current roadmap of future releases and proposed Change Requests is posted in a visible place.</li>
				<li>A way of clearly communicating completed Change Requests and new releases of openEHR is available.</li>
			</ul>

			
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
				<li>A change can be proposed by anyone within the Program, or by the openEHR board. This request should include a statement of the problem being experienced with the current governance.</li>
				<li>The EC co-chairs undertake to refine the request into a specific change in the rules that addresses the problem.</li>
				<li>This is then published within the EC for review for a stated period, e.g. 4 weeks.</li>
				<li>Further refinement may be carried out on the back of the review.</li>
				<li>A final detailed proposal is presented to the openEHR board by the EC co-chairs.</li>
				<li>If accepted, the change is publicly notified to take effect on a certain date, at which time the governance provisions here are modified accordingly.</li>
			</ul>


			<h2><a name="faq"></a>Frequently Asked Questions</h2>
			
			<h3>What stops one company / organisation having undue influence?</h3>
			<p>Any number of people from a given organisation can participate in the Specification Program. However, two rules are designed to ensure that no single organisation can have an inappropriate influence. The first is that no organisation can have a majority of the members on any given CMG or SAG; the second is that no more than 2 members from a single organisation can work on the EC simultaneously.</p>

<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_footer.php');?>