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
				<a href="http://www.clinicaltemplates.org/info/ehealth-and-informatics/">Role of openEHR</a><br/>
				<em>Status</em> (Jun 2011): active</td>
			</tr>
			<tr>
				<td><a href="http://code.google.com/p/open-ehr-gen-framework/"><img src="/files/who_is_using_openehr/openEHRgen_logo.png" alt="openEHRgen logo" title="openEHRgen logo"></a></td>
				<td>Pablo Pazos</td>
				<td><em>openEHRgen Framework</em><br/>
				A system building framework for EMR systems based on openEHR and other dynamic technologies, including <em>Grails Framework</em> and the <em>Groovy</em> language.
				<ul>
					<li>Technology: Java</li>
					<li>License: Apache 2.0</li>
				</ul>
				<em>Status</em> (Jun 2011): active</td>
			</tr>
			</tbody>
			</table>
		
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
