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
			<p style="text-align:center;"><img src="./openehr_membership.png" alt="openEHR Foundation membership categories" style="border: solid 1px #CCCCCC;"></p>	
			<h2>Individual membership</h2>
			<p>Individual Membership in openEHR is free. There are various categories of membership, based on experience and responsibility. Transitioning from one level of involvement to the next is done on the basis of merit, in a similar fashion to the Apache Software Foundation ‘meritocracy’ concept.</p>
			<table class="TableMain">
			<tbody>
				<tr>
					<th class="TableMainT"> Category </th>
					<th class="TableMainT"> How btained</th>
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
					<td class="TableMainC"> Programme Committee co-chair</td>
					<td class="TableMainC"> Elected by relevant Program Qualified Membership.</td>
					<td class="TableMainC"> 
						<ul>
							<li>Chair Programme Committees.</li>
							<li>Represent Programme on Programme Coordination Board.</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td class="TableMainC"> Foundation Board member (2 positions)</td>
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
				<p>The openEHR Foundation will establish an Organisational membership category known as Partners, consisting of the following types:</p>
				<ul>
					<li>Industry Partners: Software suppliers using openEHR</li>
					<li>Academic Partners: Universities and training organisations</li>
					<li>National Partners: Ministries of Health or other permanent bodies, typically sponsoring / funding national e-health Programmes</li>
					<li>Sponsoring Partners: Large companies or organisations who want to provide resources to raise the profile of openEHR and their own organisation for mutual benefit.</li>
				</ul>
				<p>Partners gain the following benefits:</p>
				<ul>
					<li>Preferential access to and planning of conferences and educational events</li>
					<li>Access to a dedicated Clinical Knowledge Manager (CKM) resource, either with a national domain (national eHealth Programmes) or with a sub-domain in a national or international CKM instance</li>
					<li>Industry Partners will have the right to veto openEHR specification changes with a greater than two thirds majority.</li>
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
