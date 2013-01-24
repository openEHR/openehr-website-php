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
		
			<h1><a name="nonprofit"></a>Non-profit and Open Source Organisations</h1>
			<p>If you are using openEHR in a non-profit, standards or similar organisation, and would like to be included on this list, or you want to submit updates or corrections, then <a href="about/contacts">contact us</a>.</p>
			<br/>
			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT"><p>Organisation</p></th>
				<th class="TableMainT"><p>Team/Contacts</p></th>
				<th class="TableMainT"><p>Description</p></th>
			</tr>
			<tr>
				<td class="TableMainC"><img alt="clinical_templates_logo" title="clinical_templates_logo" src="../files/basic/clinical_templates_logo.png"><br/><br/>
				<a href="http://www.clinicaltemplates.org">ClinicalTemplates.org</a></td>
				<td class="TableMainC"></td>
				<td class="TableMainC"><em>ClinicalTemplates.org</em> supports clinical communities, local and international, which:
				<ul>
					<li>form round clinical topics</li>
					<li>collect resources and develop new information tools or share existing ones</li>
					<li>gather feedback on their templates and discuss how to improve them</li>
				</ul>
				<a href="http://www.clinicaltemplates.org/info/ehealth-and-informatics/">Role of openEHR</a><br/>
				<em>Status</em> (Jun 2011): active</td>
			</tr>
			<tr>
				<td class="TableMainC"><a href="http://code.google.com/p/open-ehr-gen-framework/"><img alt="openEHRgen_logo" title="openEHRgen_logo" src="../files/basic/openEHRgen_logo.png"></a></td>
				<td class="TableMainC">Pablo Pazos</td>
				<td class="TableMainC"><em>openEHRgen Framework</em><br/>
				A system building framework for EMR systems based on openEHR and other dynamic technologies, including <em>Grails Framework</em> and the <em>Groovy</em> language.
				<ul>
					<li>Technology: Java</li>
					<li>License: Apache 2.0</li>
				</ul>
				<em>Status</em> (Jun 2011): active</td>
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
