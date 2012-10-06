<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title>openEHR - Governance Structure</title>
	<link rel="bookmark" href="http://www.openehr.org/about/govstructure" title="openEHR - Governance Structure">
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
			
			<h1>Governance Structure</h1>
			<br/>
			<p>The governance structure of the openEHR Foundation is based on the division of activities into four Programs: Specifications, Clinical models, Software and Localisation. Work is carried out in projects within these Programs by Contributing and Qualified members, with all Members having the right of access to work items and particpation in meetings. </p>
			<p>A Program Coordination Board will coordinate and prioritise the work done by the Programs. The Foundation Office is responsible for administration and communicaions. The Foundation Board, elected by both the Individual and Organisational Membership sets the strategy according to stakeholder requirements. An Advisory Panel provides a way to formalise external expert input. The structure is shown below.</p>
			<br/>
			<p style="text-align:center;"><img src="../files/about/OrganisationalStructure.png" alt="Organisational Structure" style="border: solid 1px #CCCCCC;" usemap="#orgstructure"></p>
			<map name="orgstructure">
				<area shape="rect" coords="180,50,300,120" href="#foundationboard"/>
				<area shape="rect" coords="60,130,160,190" href="#advisorypanel"/>
				<area shape="rect" coords="185,180,295,250" href="#foundationoffice"/>
				<area shape="rect" coords="55,280,140,335" href="../programs/specification"/>
				<area shape="rect" coords="150,280,235,335" href="../programs/clinicalmodels"/>
				<area shape="rect" coords="245,280,330,335" href="../programs/software"/>
				<area shape="rect" coords="340,280,425,335" href="../programs/localisation"/>
			</map> 
			<br/>
			
			
			<h2><a name="foundationboard"></a>Foundation Board</h2>
			<p>The Foundation Board oversees the proper functioning of the openEHR Foundation with respect to its charter and status as a not-for-profit organisation. 10 Board Members are nominated and voted by the membership, with the following composition:</p>
			<ul>
				<li>2 positions nominated and elected from among and by Contributing Individual Members (3 year term)</li>
				<li>5 positions elected one per region collectively by the National Partners from that region (2 year term):
					<ul>
						<li>The Americas</li>
						<li>Asia (Former Soviet States, China and India)</li>
						<li>South-east Asia and Pacific</li>
						<li>Africa</li>
						<li>Europe and Middle East</li>
					</ul>
				</li>
				<li>2 positions elected collectively by Industry Partners (2 year term)</li>
				<li>1 position elected collectively by Academic Partners (3 year term)</li>
				<li>1 position - the chair (2 year term)</li>
			</ul>

			<p>Board positions for a given member are for a maximum of two consecutive terms, apart from the Chair, where the maximum is one consecutive term. Minutes of Board meetings and all non-confidential correspondence will be openly available.</p>
			<p>The Foundation Board's responsibilities are:</p>
			<ul>
				<li>Ensure the organisation remains 'on mission';</li>
				<li>Maintain strategic connections to the e-health sector;</li>
				<li>Develop strategy and determine overall priorities for use of funds;</li>
				<li>Appointments:
					<ul>
						<li>Program Coordination Board</li>
						<li>Advisory panel</li>
					</ul>
				</li>
			</ul>
			<p>An interim Board has been appointed to oversee the transition to the new arrangements. Bembers <a href="peopleingovernance#foundationboard">here</a>.</p>
			
			<h2><a name="advisorypanel"></a>Advisory Panel</h2>
			<p>Key experts will be appointed by the Board to join the Advisory Panel and advise the Board based on nominations by Members. Program Leads will be invited to attend the Advisory Panel meetings. The panel will elect a chair person and deputy (who will not be a Program Lead). The Advisory Panel will meet at least twice each year. The elected Chair of the Advisory Panel (or deputy if the Chair is not available) will be invited to attend Board meetings.</p>

			<h2><a name="foundationoffice"></a>Foundation Office</h2>
			<p>The Foundation Office manages the day-to-day operation of the Foundation and has paid staff. The responsibilities are as follows;</p>
			<ul>
				<li>Routine administration as required by all parts of the Foundation</li>
				<li>Managing communications between the various parts of the Foundation</li>
				<li>Public relations activities</li>
				<li>Organising meetings and meeting resources</li>
				<li>Running an annual openEHR community conference</li>
				<li>Book-keeping and liaising with accountants</li>
			</ul>
			<p>See members of Foundation Office <a href="peopleingovernance#foundationoffice">here</a>.</p>
				
			<h2><a name="programcoordinationboard"></a>Program Coordination Board</h2>
			<p>The Programme Coordination Board (PCB) exists to coordinate Programme activities, and ensure they are synchronised with the current priorities of the Foundation Board. Its membership consists of four Foundation Board members and the four Programme Leads.</p>
			<p>PCB responsibilities include:</p>
				<ul>
					<li>Manage requirements gathering and documentation;</li>
					<li>Coordinate development of the openEHR specifications, clinical models and software projects;</li>
					<li>Liaise with industry, eHealth standards bodies and national eHealth programmes;</li>
					<li>Meet monthly.</li>
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
