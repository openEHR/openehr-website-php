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
			<p>It is proposed to alter the structure of the openEHR Foundation by dividing the activities into four Programs, namely Specifications, Clinical models, Software and Localisation. Work will be carried out in projects within these Program areas by community members. A Foundation Office will supervise the Programs. An openEHR Board of Directors will be a larger group elected by the Associates, and an Advisory Panel added to provide external strategic input.</p>
			<br/>
			<p style="text-align:center;"><img src="../files/about/OrganisationalStructure.png" alt="Organisational Structure" style="border: solid 1px #CCCCCC;" usemap="#orgstructure"></p>
			<map name="orgstructure">
				<area shape="rect" coords="180,50,300,120" href="#boardofdirectors"/>
				<area shape="rect" coords="60,130,160,190" href="#advisorypanel"/>
				<area shape="rect" coords="185,180,295,250" href="#foundationoffice"/>
				<area shape="rect" coords="55,280,140,335" href="../programs/specification"/>
				<area shape="rect" coords="150,280,235,335" href="../programs/clinicalmodels"/>
				<area shape="rect" coords="245,280,330,335" href="../programs/software"/>
				<area shape="rect" coords="340,280,425,335" href="../programs/localisation"/>
			</map> 
			<br/>
			
			
			<h2><a name="boardofdirectors"></a>Board of Directors</h2>
			<p>The Board of Directors oversees the proper functioning of the openEHR Foundation with respect to its charter and status as a not-for-profit organisation. The Board will aim to be skills based and balanced. 10 Board Members are nominated and voted by Associates. The Board positions are for two years when the Board member will need to be re-nominated and stand for election. Minutes of Board meetings and all non-confidential correspondence will be circulated to Associates and Members of the Advisory Panel.</p>
			<p>Board's responsibilities are:</p>
			<ul>
				<li>develop strategy and delegation of responsibilities;</li>
				<li>appoint key members of the Foundation Office;</li>
				<li>approve leaders of each Program Group whom are determined by the Members;</li>
				<li>appoint Advisory Panel from nominations by Members.</li>
			</ul>
			<p>An interim Board of Directors has been appointed to oversee the transition to the new arrangements.</p>
			<p>See members of Board of Directors <a href="peopleingovernance#boardofdirectors">here</a>.</p>
			
			
			<h2><a name="advisorypanel"></a>Advisory Panel</h2>
			<p>Key experts will be appointed by the Board to join the Advisory Panel and advise the Board. Nominations for the Advisory Panel can be made by Members or Associates. Program Leads will be invited to attend the Advisory Panel meetings. The panel will elect a chair person and deputy (who will not be a Program Lead). The Advisory Panel will meet at least twice each year. The elected Chair of the Advisory Panel (or deputy if the Chair is not available) will be invited to attend Board meetings.</p>

			
			<h2><a name="foundationoffice"></a>Foundation Office</h2>
			<p>The Foundation Office manages the day-to-day operation of the Foundation and provides over-arching management of the four Foundation Programs. The Foundation will aim to have a number of paid staff to support this work including a Chief Executive Office and four Programme Leads. All work is performed in projects, administered by the respective program groups.</p>
			<p>Core activities of Foundation Office include:</p>
			<ul>
				<li>manage requirements gathering and documentation;</li>
				<li>manage development of the openEHR specifications;</li>
				<li>manage authoring of archetypes and other knowledge artefacts;</li>
				<li>manage open source software projects;</li>
				<li>oversee organisational and professional development work - supporting education, uptake and evaluation;</li>
				<li>member communications and relationships;</li>
				<li>running an annual conference where the openEHR community meets face-to-face;</li>
				<li>liaise with industry, eHealth standards bodies and national eHealth programs.</li>
			</ul>
			<p>See members of Foundation Office <a href="peopleingovernance#foundationoffice">here</a>.</p>
			
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