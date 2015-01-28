<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'Membership';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
			
			<h1><?php echo "$PageName";?></h1>
			
			<p>Participation in the openEHR community, and access to the openEHR specifications and other IP is free to all. Formal membership is paid, and allows participation in the formal processes of the Foundation.</p>
			<p style="text-align:center;"><img src="/files/about/MembershipStructure.png" width="400" alt="openEHR Foundation membership categories" title="openEHR Foundation membership categories"></p>	
		
			
			<h2 id="individualmembership">Individual Membership</h2>
			<p>Individual participation in openEHR is free, and includes access to all openEHR published resources and specifications. Paid membership enables an individual to participate in Foundation elections, nominate for a board position and take part in formal processes. <a href="http://members.openehr.org">Membership site</a>.</p>
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
				<td> Open to individuals from any company or organisation. Community links <a href="http://www.openehr.org/community/mailinglists">here</a>.</td>
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
				<td> <b>Individual<br/>Member</b>	</td>
				<td> Paid individual membership. Join <a href="http://members.openehr.org/join-us">here</a>.</td>
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
			
			
			<h2>Organisations</h2>
			<p>Organisational membership currently relates to vendor companies. The openEHR Foundation is interested in proposals from public sector and academic organisations on an equivalent basis for institutional membership.</p>
			<table class="TableBasic">
			<tbody>
			<tr>
				<th> Category</th>
				<th> Description</th>
				<th> Benefits</th>
				<th> Financial<br/>Basis</th>
			</tr>
			<tr>
				<td> <b id="industrypartner">Industry Partner</b></td>
				<td> Vendor companies using openEHR. Join <a href="http://members.openehr.org/join-us">here</a>.</td>
				<td> 
					<ul>
						<li>Ability to collectively elect 2 Management Board members;</li>
						<li>Right to contribute to development of accreditation/certification process;</li>
						<li>Right to participate in development of openEHR certification criteria;</li>
						<li>Visibility on openEHR website and right to post to the industry news and events.</li>
					</ul>
				</td>
				<td> Based on annual gross revenue</td>
			</tr>
			<tr>
				<td> <b>Sponsoring Partner</b></td>
				<td> Organisations who want to support the openEHR Foundation.</td>
				<td> 
					<ul>
						<li>Visibility on openEHR website and conferences.</li>
					</ul>
				</td>
				<td> Negotiated</td>
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
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>
