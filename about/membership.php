<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title>openEHR - Membership</title>
	<link rel="bookmark" href="http://www.openehr.org/about/membership" title="openEHR - Membership">
	<?php include '../panel/headpanel.php' ?>
</head>


<body>

<div id="MainFrame">
	
	<div id="TopPanel">
		<?php include '../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu" style="text-align:left">
		
		<div class="nav">
			<?php include '../menu/topmenu.php' ?>
		</div>
		
	</div> 

	<div id="MainArea">
	
		<div id="SideMenu">
			<?php include 'menu/aboutmenu.php' ?>
		</div>
		
		<div id="TextArea">
			
			<h1>Membership</h1>
			<br/>
			<p>Direct participation in the Foundation is by Individual Members and Partners (Organisational Members), with indirect participation possible via National Affiliates, as illustrated below.</p>
			
			<br/>
			<p style="text-align:center;"><img src="./openehr_membership.png" alt="openEHR Foundation membership categories" style="border: solid 1px #CCCCCC;"></p>	
			<br/>
			
			
			<h2>Individual membership</h2>
			<p>Individual Membership in openEHR is free. There are various categories of membership, based on experience and responsibility. Transitioning from one level of involvement to the next is done on the basis of merit, in a similar fashion to the Apache Software Foundation 'meritocracy' concept.</p>
			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT"> Category </th>
				<th class="TableMainT"> How Obtained</th>
				<th class="TableMainT"> Rights & Responsibilities</th>
			</tr>
			<tr>
				<td class="TableMainC"> Member</td>
				<td class="TableMainC"> Subscription to openEHR discussion list(s).</td>
				<td class="TableMainC"> 
					<ul>
						<li>Can participate in  all meetings, online work groups.</li>
					</ul>
				</td>
			</tr>
			<tr>
				<td class="TableMainC"> Contributor	</td>
				<td class="TableMainC"> Fulfill qualifying criteria; elected by Programme Committee.</td>
				<td class="TableMainC"> 
					<ul>
						<li>Can be a member of Programme project groups and Committees.</li>
						<li>Can vote in meetings.</li>
					</ul>
				</td>
			</tr>
			<tr>
				<td class="TableMainC"> Qualified</td>
				<td class="TableMainC"> Elected by relevant Program Committee.</td>
				<td class="TableMainC"> 
					<ul>
						<li>openEHR.org email address.</li>
						<li>Can take formal roles in Programmes and Project groups.</li>
						<li>Right to make changes to deliverables.</li>
						<li>Elect all higher posts.</li>
					</ul>
				</td>
			</tr>
			<tr>
				<td class="TableMainC"> Programme<br/>Committee<br/>co-chair</td>
				<td class="TableMainC"> Elected by relevant Program Qualified Membership.</td>
				<td class="TableMainC"> 
					<ul>
						<li>Chair Programme Committees.</li>
						<li>Represent Programme on Programme Coordination Board.</li>
					</ul>
				</td>
			</tr>
			<tr>
				<td class="TableMainC"> Foundation<br/>Board<br/>member<br/>(2 positions)</td>
				<td class="TableMainC"> Nominated and elected by Contributing Membership.</td>
				<td class="TableMainC"> 
					<ul>
						<li>Strategic decision-making for the openEHR Foundation.</li>
					</ul>
				</td>
			</tr>
			</tbody>
			</table>
			
			
			<h2>Organisational Membership - Partners</h2>
				<p>The openEHR Foundation will establish an Organisational membership category known as Partners, which includes four types. Becoming a Foundation Partner involves the organisation making a financial contribution, determined in a way that depends on the type of organisation. The Partner member types are as follows:</p>
				<table class="TableMain">
				<tbody>
					<tr>
						<th class="TableMainT"> Category </th>
						<th class="TableMainT"> Description</th>
						<th class="TableMainT"> Benefits</th>
						<th class="TableMainT"> Financial</br>Basis</th>
					</tr>
					<tr>
						<td class="TableMainC"> Industry Partner</td>
						<td class="TableMainC"> Software suppliers using openEHR</td>
						<td class="TableMainC"> 
							<ul>
								<li>Ability to collectively elect 2 board members</li>
								<li>Participation in planning of conferences and educational events</li>
								<li>Clinical Knowledge Manager (CKM) sub-domain within a national or international CKM domain</li>
								<li>Right of review and veto (> 2/3 majority with quorum) openEHR specification changes.</li>
							</ul>
						</td>
						<td class="TableMainC"> Annual gross revenue</td>
					</tr>
					<tr>
						<td class="TableMainC"> National Partner</br>(one per country)</td>
						<td class="TableMainC"> Ministries of Health or other permanent bodies, typically sponsoring / funding national e-health Programmes</td>
						<td class="TableMainC"> 
							<ul>
								<li>Ability to collectively elect 5 board members, 1 per region</li>
								<li>Participation in planning of conferences and educational events</li>
								<li>Clinical Knowledge Manager (CKM) national domain</li>
							</ul>
						</td>
						<td class="TableMainC"> Based on World Bank country multipliers</td>
					</tr>
					<tr>
						<td class="TableMainC"> Academic Partner</td>
						<td class="TableMainC"> Universities and other educational organisations</td>
						<td class="TableMainC"> 
							<ul>
								<li>Ability to collectively elect 1 board member</li>
								<li>Participation in planning of conferences and educational events</li>
								<li>Clinical Knowledge Manager (CKM) sub-domain within a national or international CKM domain</li>
							</ul>
						</td>
						<td class="TableMainC"> TBD</td>
					</tr>
					<tr>
						<td class="TableMainC"> Sponsoring Partner</td>
						<td class="TableMainC"> Large companies or organisations who want to provide resources to raise the profile of openEHR and their own organisation for mutual benefit</td>
						<td class="TableMainC"> 
							<ul>
								<li>Visibility on opneEHR website and conferences</li>
							</ul>
						</td>
						<td class="TableMainC"> Negotiated</td>
					</tr>
				</tbody>
				</table>
			</ul>
				
				
			<h2>National Affiliates</h2>
			<p>The openEHR Foundation will work with other not-for-profit organisations, including Standards Development Organisations (SDOs) under the <a href="../programs/localisation">Localisation Programme</a>. Any organisation taking on the lead in development and uptake of openEHR in a country can be recognised as an Affiliate. Affiliate status is decided by the Foundation Board and recognised with a formal bilateral MOU.</p>
			<p>openEHR Affiliates must satisfy the following criteria:</p>
			<ul>
				<li>non-for-profit or public organisation;</li>
				<li>demonstrable open membership;</li>
				<li>agree to engage with openEHR Foundation on a regular basis in order to facilitate planning;</li>
				<li>agree to requirements on use of openEHR trademarks, domain names, and other elements of branding.</li>
			</ul>
		</div>
			
	</div>

	<div id="BottomMenu">
		<?php include '../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
		<?php include '../panel/bottompanel.php' ?>
	</div>

</div>
	
<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>
