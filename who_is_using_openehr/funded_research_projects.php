<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

	<title>openEHR - Who is using openEHR?</title>
	<link rel="bookmark" href="http://www.openehr.org/who_is_using_openehr" title="openEHR - Who is using openEHR?">
	<?php include '../panel/headpanel.php' ?>
	
</head>


<body>

<div id="MainFrame">
	
	<div id="TopPanel">
		<?php include '../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu">
	
		<div class="nav">
			<?php include '../menu/topmenu.php' ?>
		</div>
		
	</div> 

	<div id="MainArea">
	
		<div id="SideMenu">
			<?php include 'menu.php' ?>
		</div>
	
		<div id="TextArea">

			<h1><a name="research_projects"></a>Funded Research Projects</h1>
			<p>The following&nbsp; table indicates known funded research projects using openEHR. Please <a href="about/contacts">contact us</a>, to notify of other projects.</p>
			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT"><p>Location</p></th>
				<th class="TableMainT"><p>Project</p></th>
				<th class="TableMainT"><p>Description</p></th>
				<th class="TableMainT"><p>Vendor(s) / consortium</p></th>
				<th class="TableMainT"><p>Status</p></th>
			</tr>
			<tr>
				<td class="TableMainC" rowspan="2"><p><img width="80px" alt="eu_flag" title="eu_flag" src="../files/basic/Flag_of_Europe.svg.png"></p><p>European Union</p></td>
				<td class="TableMainC"><a href="http://www.chiron-project.eu/">CHIRON</a><br/>Integrated Healthcare approach for home, mobile and clinical environments.<br/>
				CHIRON is a European Research Project co-financed by the ARTEMIS Joint Undertaking (call 2009 - Artemis Sub-program ASP2: Person-centric Healthcare).<br/>
				27 partners.</td>
				<td class="TableMainC">The CHIRON project intends to combine state-of-the art technologies and innovative solutions into an integrated framework designed for an 
				effective and person-centric health management along the complete care cycle. Will monitor 100 patients with atrial fibrillation during 2013.</td>
				<td class="TableMainC"><a href="http://www.medvision360.com/?lang=en">MedVision360 (Zorg Gemak), Netherlands</a></td>
				<td class="TableMainC">March 2010 - end 2013</td>
			</tr>
			<tr>
				<td class="TableMainC"><a href="http://www.mobiguide-project.eu/">MOBIGUIDE</a><br/>MobiGuide (FP7-287811) is a supported project under the European 
				Commission Seventh Framework Programme (2007-2013).<br/>
				13 partners.</td>
				<td>The aim of the MobiGuide project is to develop an intelligent decision-support system for patients with chronic illnesses. The system accompanies 
				the patients wherever they go and helps them and their care providers in managing their illness,
				whether they are at home, at work, out and about or travelling abroad on holiday or for business.</td>
				<td class="TableMainC"><a href="http://www.medvision360.com/?lang=en">MedVision360 (Zorg Gemak), Netherlands</a></td>
				<td class="TableMainC">ends 2013</td>
			</tr>
			</tbody>
			</table>
			<br/><br/>
		
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
