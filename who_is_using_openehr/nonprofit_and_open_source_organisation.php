<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'Non-profit and Open Source Organisations';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>If you are using openEHR in a non-profit, standards or similar organisation, and would like to be included on this list, or you want to submit updates or corrections, then <a href="/about/contacts">contact us</a>.</p>

			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT"><p>Organisation</p></th>
				<th class="TableMainT"><p>Team/Contacts</p></th>
				<th class="TableMainT"><p>Description</p></th>
			</tr>
			<tr>
				<td class="TableMainC"><img alt="clinical_templates_logo" title="clinical_templates_logo" src="/files/who_is_using_openehr/clinical_templates_logo.png"><br/><br/>
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
				<td class="TableMainC"><a href="http://code.google.com/p/open-ehr-gen-framework/"><img alt="openEHRgen_logo" title="openEHRgen_logo" src="/files/who_is_using_openehr/openEHRgen_logo.png"></a></td>
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
		
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>