<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Membresía';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
			
			<h1><?php echo "$PageName";?></h1>
			
			<p>Direct participation in the Foundation is by Individual Members and Partners (Organisational Members), with indirect participation possible via National Affiliates, as illustrated below.</p>
			<p style="text-align:center;"><img src="/files/about/MembershipStructure.png" alt="openEHR Foundation membership categories" title="openEHR Foundation membership categories" style="border: solid 1px #CCCCCC;"></p>	
		
			
			<h2 id="individualmembership">Individual membership</h2>
			<p>Individual Membership in openEHR is free. There are various categories of membership, based on experience and responsibility. Transitioning from one level of involvement to the next is done on the basis of merit, in a similar fashion to the Apache Software Foundation 'meritocracy' concept.</p>
			<table class="TableBasic">
			<tbody>
			<tr>
				<th> Category </th>
				<th> How Obtained</th>
				<th> Rights & Responsibilities</th>
			</tr>
			<tr>
				<td> <b>Member</b></td>
				<td> Subscription to openEHR discussion list(s).</td>
				<td> 
					<ul>
						<li>Can participate in  all meetings, online work groups.</li>
					</ul>
				</td>
			</tr>
			<tr>
				<td> <b>Contributing<br/>Member</b>	</td>
				<td> Fulfill qualifying criteria; elected by Program Committee.</td>
				<td> 
					<ul>
						<li>Can be a member of Program project groups and Committees;</li>
						<li>Can vote in meetings.</li>
					</ul>
				</td>
			</tr>
			<tr>
				<td> <b>Qualified<br/>Member</b></td>
				<td> Elected by relevant Program Committee.</td>
				<td> 
					<ul>
						<li>Right to take formal roles in Program and Project groups;</li>
						<li>Right to make changes to deliverables;</li>
						<li>Right to post to the community news, releases and events;</li>
						<li>Right to elect 2 Members of the openEHR Management Board.</li>
					</ul>
				</td>
			</tr>
			<tr>
				<td> <b>Management<br/>Board<br/>member<br/></b>(2 positions)</td>
				<td> Nominated and elected by Qualified Members.</td>
				<td> 
					<ul>
						<li>Strategic decision-making for the openEHR Foundation.</li>
					</ul>
				</td>
			</tr>
			</tbody>
			</table>
			
			
			<h2>Organisational Membership - Partners</h2>
			<p>The openEHR Foundation will establish an Organisational membership category known as Partners, which includes four types. Becoming a Foundation Partner involves the organisation making a financial contribution, determined in a way that depends on the type of organisation. The Partner member types are as follows:</p>
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
				<td> Software developers and vendors using openEHR</td>
				<td> 
					<ul>
						<li>Ability to collectively elect 2 Management Board members;</li>
						<li>Right to contribute to development of accreditation/certification process;</li>
						<li>Right to propose their solutions being tested against openEHR certification criteria;</li>
						<li>Visibility on openEHR website and right to post to the industry news and events;</li>
						<li>Participation in planning of conferences and educational events;</li>
						<li>Clinical Knowledge Manager (CKM) sub-domain within a national or international CKM domain;</li>
						<li>Right of review and veto (> 2/3 majority with quorum) openEHR specification changes.</li>
					</ul>
				</td>
				<td> Annual gross revenue</td>
			</tr>
			<tr>
				<td> <b id="academicpartner">Academic Partner</b></td>
				<td> Universities and other educational organisations</td>
				<td> 
					<ul>
						<li>Ability to collectively elect 1 Management Board member;</li>
						<li>Participation in planning of conferences and educational events;</li>
						<li>Clinical Knowledge Manager (CKM) sub-domain within a national or international CKM domain.</li>
					</ul>
				</td>
				<td> TBD</td>
			</tr>
			<tr>
				<td> <b id="nationalpartner">National Partner</b><br/>(one per country)</td>
				<td> Ministries of Health or other permanent bodies, typically sponsoring / funding national e-health Programs</td>
				<td> 
					<ul>
						<li>Participation in planning of conferences and educational events;</li>
						<li>Clinical Knowledge Manager (CKM) national domain.</li>
					</ul>
				</td>
				<td> Based on World Bank country multipliers</td>
			</tr>
			<tr>
				<td> <b>Sponsoring Partner</b></td>
				<td> Large companies or organisations who want to provide resources to raise the profile of openEHR and their own organisation for mutual benefit</td>
				<td> 
					<ul>
						<li>Visibility on opneEHR website and conferences.</li>
					</ul>
				</td>
				<td> Negotiated</td>
			</tr>
			</tbody>
			</table>
				
				
			<h2>openEHR Representatives</h2>
			<p>openEHR Representatives refer to individuals given the capacity by the openEHR Foundation Board to formally represent the openEHR Foundation on openEHR matters, and lead localisation activities in respective locales (e.g. countries, group of countries or language/culture bound groups with one or more jurisdictions). This is part of the <a href="/es/programs/localisation/governance">Localisation Programme governance structure</a>. The Representatives need to be nominated by the Localisation Programme Committee (LPC) and approved by the Board.</p>
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/es/_footer.php');?>