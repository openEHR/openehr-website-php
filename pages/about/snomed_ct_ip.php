<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Use of SNOMED CT in openEHR';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
			
			<h1><?php echo "$PageName";?></h1>
			<p>This page provides the formal agreement between SNOMED International and openEHR Foundation regarding use of SNOMED CT IP by openEHR, as well as an informal guide to how and where SNOMED CT is used in openEHR artefacts.</p>
			
			<h2>RE: LICENSED USE OF SNOMED CT IN openEHR ARTEFACTS</h2>
			<p>The folowing text reproduces the content of the letter of agreement between SNOMED International and openEHR Foundation, from 20 April 2017. <a href="/files/ip_licensing/IHTSDO-openEHR-licensing-letter-20170420 v1.0.pdf">(Original letter (PDF) here)</a>.</p>
			<p>20 April 2017</p>
			<p>We understand that you have a SNOMED CT Affiliate Licence issued by UK Terminology Centre for use of the SNOMED CT International Release and UK extension to undertake development of openEHR artefacts and usage in the UK. This licence is breached as soon as products are used outside the UK without a licence and the UK TC would normally expect to be made aware of usage outside the UK, particularly in IHTSDO non-member countries.</p>
			<p>We are aware that openEHR does not have any information about or management of those who consequently use/implement the products outside the UK at this time. SNOMED International therefore asks that you undertake the following:</p>
			<ol>
				<li>Add the following statement to all openEHR artefacts containing SNOMED CT, regardless of where the artefact is to be deployed:<br>
					This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact <a href="http://www.snomed.org/snomed-ct/get-snomed-ct">http://www.snomed.org/snomed-ct/get-snomed-ct</a> or <a href="mailto:info@snomed.org">info@snomed</a>.</li>
				<li>Provide on your website more detailed guidance about SNOMED CT, its usage in openEHR artefacts and licensing. The copyright and licence content can be further agreed with SNOMED International.</li>
			</ol>
			<p>At this time, in the spirit of partnership, SNOMED International is prepared to allow the continued use of SNOMED CT with the above licensing statement but, however, would encourage openEHR to investigate possible mechanisms for understanding use of SNOMED CT outside of member countries. We will visit the situation in a year to determine next steps. Therefore, at this time, we do not ask you to put in place a mechanism for monitoring downloads/usage of openEHR products using SNOMED CT, however if you become aware of anyone using SNOMED CT in openEHR without the appropriate SNOMED CT Affiliate licence it would be helpful if you could remind them of the need for a licence.</p>
			<p></p>
			<p>Don Sweete</p>
			<p>CEO SNOMED International</p>
			
			<h2>Use / reference of SNOMED CT IP in openEHR artefacts</h2>
			<p>SNOMED CT is used by reference in the following way by openEHR:</p>
			
			<table class="TableBasic">
			<tbody>
			<tr>
				<th>SNOMED CT element</th>
				<th>openEHR artefact</th>
				<th>Usage</th>
			</tr>
			<tr>
				<td><em>Concept code</em></td>
				<td>Archetype, Template</td>
				<td>Reference</td>
			</tr>
			<tr>
				<td><em>Value set reference</em></td>
				<td>Archetype, Template</td>
				<td>Reference</td>
			</tr>
			<tr>
				<td><em>Ref set reference</em></td>
				<td>Archetype, Template</td>
				<td>Reference</td>
			</tr>
			</tbody>
			</table>
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
