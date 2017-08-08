<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Membership';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
			
			<h1><?php echo "$PageName";?></h1>
			
			<p>Participation in the openEHR community, and access to the openEHR specifications and other IP is free to all. Formal membership is paid, and allows participation in the formal processes of the Foundation.</p>
			<img src="/files/about/MembershipStructure.png" alt="openEHR Foundation membership categories" title="openEHR Foundation membership categories" class = "imgMiddle width50"/>	
		
			
			<h2 id="individualmembership">Individual Membership</h2>
			<p>The most basic level of individual participation in openEHR is free, and includes access to all openEHR published resources and specifications. Subscribing membership enables an individual to participate in Foundation elections, nominate for a board position and take part in formal processes. <a href="http://members.openehr.org" target="_blank">Membership site</a>.</p>
			<table class="TableBasic">
			<tbody>
			<tr>
				<th> Category </th>
				<th> Description</th>
				<th> Benefits</th>
				<th> Financial<br/>Basis</th>
			</tr>
			<tr>
				<td> <b>Informal<br/>Member</b></td>
				<td> Open to individuals from any company or organisation. Community links <a href="/community/mailinglists">here</a>.</td>
				<td> 
					<ul>
						<li>Can participates in meetings.</li>
						<li>Subscribed to openEHR discussion list(s).</li>
						<li>Access to all openEHR IP.</li>
					</ul>
				</td>
				<td> Free.</td>
			</tr>
			<tr>
				<td> <b>Subscribing<br/>Member</b>	</td>
				<td> Paid individual membership. Join <a href="http://members.openehr.org/join-us" target="_blank">here</a>.</td>
				<td> 
					<ul>
						<li>Can vote in Management Board elections; </li>
						<li>Can nominate or be nominated for Management Board position; </li>
						<li>Can be a member of Program project groups and Committees;</li>
						<li>Can vote in meetings.</li>
					</ul>
				</td>
				<td> 15 euro annually</td>
			</tr>
			</tbody>
			</table>
			
			
			<h2 id="nationalpartner">Organisations</h2>
			<p>Organisational membership is available for vendor companies, public sector organisations (such as ministries of health), and research institutions.</p>
			<table class="TableBasic">
			<tbody>
			<tr>
				<th> Category</th>
				<th> Description</th>
				<th> Benefits</th>
				<th> Financial<br/>Basis</th>
			</tr>
			<tr>
				<td id="industrypartner"> <b>Industry Partner</b></td>
				<td> Vendor companies using openEHR. Join <a href="http://members.openehr.org/join-us" target="_blank">here</a>.</td>
				<td> 
					<ul>
						<li>With other Industry Partners, is able to collectively elect 2 Management Board members for a period of two years;</li>
						<li>Is entitled to nominate or be nominated for Management Board office-holder positions;</li>
						<li>Right to contribute to development of accreditation/certification process;</li>
						<li>Will have Clinical Model ‘requests for change’ prioritised over those from Individual members or non-Members, as directed by the Clinical modelling Program leads;</li>
						<li>Visibility on openEHR website and right to post to the industry news and events;</li>
						<li>Employees of an Industry Partner can be a member of Program project groups and Committees;</li>
						<li>Can vote in meetings.</li>
					</ul>
				</td>
				<td> Based on annual gross revenue</td>
			</tr>
			<tr>
				<td> <b>Organisational Partner</b></td>
				<td> Organisational Partnership is available to jurisdictional, academic or other non-profit organisations. An annual fee is payable at a banded level determined by the openEHR Foundation.</td>
				<td> 
					<ul>
						<li>With other Organisational Partners, is able to collectively elect 2 Management Board members for a period of two years;</li>
						<li>Is entitled to nominate or be nominated for a Management Board office-holder positions;</li>
						<li>Has visibility on the openEHR website and the right to post to Organisational news and events;</li>
						<li>Has the right to contribute to development of the Training accreditation/certification process;</li>
						<li>Will have Clinical Model ‘requests for change’ prioritised over those from Individual members or non-Members, as directed by the Clinical modelling Program leads;</li>
						<li>Employees of an Organisational Partner can be a member of Program project groups and Committee;</li>
						<li>Up to 70% of the fees paid by an Organisational Partner may be directed specifically to the openEHR Clinical modelling program. Exact use of that funding will be determined by the openEHR Management Board, subject to the advice of the Clinical Modelling Program and the overall funding available.
Examples of likely use of such funding is:</li>
						<ul>
							<li>Support for protected time for a Chief Clinical Information Officer to lead development;</li>
							<li>Project management support for the Clinical modelling program to help handle change requests, translation requests, facilitate communications between Editorial team members;</li>
							<li>Support for protected time for new Editorial Team members.</li>
						</ul>
						<li>Has the right to contribute to development of the Training accreditation/certification process;</li>
						<li>Can vote in meetings.</li>
					</ul>
				</td>
				<td> Table of fees.</td>
			</tr>
			</tbody>
			</table>
				
			
			<h2>Frequently Asked Questions</h2>
			<ul>
				<li>Q: if my employer is an Industry Partner, does that make me an openEHR Individual Member?
					<ul>
						<li>A: No. As an employee of an Industry Partner you can be a member of Program project groups and Editorial Committees but you cannot vote as an Individual Member in Management Board elections or be nominated for a Management Board position. You are, of course, free to register separately as an Individual Member and your employer may pay for your membership, if they wish.</li>
					</ul>
				</li>
				<li>Q: if my employer is an Industry Partner, can I nominate for an Industry Partner position on the Management Board?
					<ul>
						<li>A: You will need to be registered as an Individual Member first.</li>
					</ul>
				</li>
				<li>Q: do I need to be an openEHR Member to be on the Editorial Committee of one of the oenEHR programs?
					<ul>
						<li>A: No. If your company is an Industry Partner you are entitled to be on the Editorial Committee of one of the openEHR programs.</li>
					</ul>
				</li>
			</ul>

<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
