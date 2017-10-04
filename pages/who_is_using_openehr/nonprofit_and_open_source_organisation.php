<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Non-profit and Open Source Organisations';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>If you are using openEHR in a non-profit, standards or similar organisation, and would like to be included on this list, or you want to submit updates or corrections, then <a href="/about/contacts">contact us</a>.</p>

			<h2>Active Projects</h2>
			<table class="TableBasic">
			<tbody>
			<tr>
				<th>Organisation</th>
				<th>Team/Contacts</th>
				<th>Description</th>
			</tr>
			<tr>
				<td><a href="https://www.cabolabs.com/en"><img src="/files/who_is_using_openehr/ehrserver_logo.png" alt="EHRServer logo" title="EHRServer logo"></a></td>
				<td><a href = "https://www.cabolabs.com/en">Cabo-labs</a></td>
				<td><em>EHRServer</em><br/>
				<p>EHRServer is an open source, service‐oriented, openEHR clinical data repository. It provides a secure REST API to store and query clinical data.<br>
					<a href="http://www.openehr.org/downloads/ehrcomponents">More details here</a>
				</p>
				<ul>
					<li>Technology: Java</li>
					<li>License: Apache 2.0</li>
				</ul>
				<em>Status</em> (2017): active</td>
			</tr>
			<tr>
				<td>
					<a href="http://docs.ethercis.org/"><img src="/files/who_is_using_openehr/ethercis_logo.png" alt="EtherCIS logo" title="EtherCIS logo"></a><br>
					<a href="http://docs.ethercis.org/"><strong>EtherCIS</strong></a>
				</td>
				<td><a href="http://ripple.foundation/">Ripple Foundation</a></td>
				<td><em>Enterprise Clinical Data Repository</em><br/>
				EtherCIS (Ethereal Clinical Information System) is an Open Source platform compatible with the openEHR clinical information standard.
				<ul>
					<li>Technology: Java</li>
					<li>License: Apache 2.0</li>
				</ul>
				<em>Status</em> (2017): active</td>
			</tr>
			</tbody>
			</table>
		

			<h2>Past Projects</h2>
			<table class="TableBasic">
			<tbody>
			<tr>
				<th>Organisation</th>
				<th>Team/Contacts</th>
				<th>Description</th>
			</tr>
			<tr>
				<td><img src="/files/who_is_using_openehr/clinical_templates_logo.png" alt="Clinical Templates logo" title="Clinical Templates logo"><p><a href="http://www.clinicaltemplates.org">ClinicalTemplates.org</a></p></td>
				<td></td>
				<td><em>ClinicalTemplates.org</em> supports clinical communities, local and international, which:
				<ul>
					<li>form round clinical topics</li>
					<li>collect resources and develop new information tools or share existing ones</li>
					<li>gather feedback on their templates and discuss how to improve them</li>
				</ul>
				<a href="http://www.clinicaltemplates.org/info/ehealth-and-informatics/">Role of openEHR</a>
				</td>
			</tr>
			</tbody>
			</table>
		
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
