<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'Clinical Standardisation';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>openEHR's ultimate aims are to improve clinical care provision. It does this in two ways:</p>
			<ul>
				<li>enabling <em>interoperable, longitudinal health records</em> by standardising both health data (text, quantities, etc) and clinical content (vital signs, diagnoses, care plans) across all care settings;</li>
				<li>enabling <em>computation on health data</em>, via the inclusion of shared semantics. This is the basis of true decision support and analytics, including all secondary data use.</li>
			</ul>
			<p>This is achieved by the innovation of 'multi-level modelling', whereby clinical content is standardised using a modelling layer known as 'archetypes' that is separate from the data standards layer. This enables system software to be built and deployed independently of clinical modelling of content and workflows. Clinicians are now in the driving seat for system content and semantics, while IT specialists can safely build scalable solutions, safe in the knowledge that adding new data points and content models won't affect them.</p>
			<p>The 'clinical standardisation' occurs at two levels:</p>
			<ul>
				<li>definition of standard <em>data points</em> and <em>data groups</em> as <em>archetypes</em>: define standard clinical concepts once, including data items for vital signs, medications, investigations. Archetypes act as a unit of governance. This is the level at which clinicians agree on how to record a blood pressure or diagnosis.</li>
				<li>definition of standard <em>data sets</em> as <em>templates</em>: define collections of data elements taken from archetypes for particular uses, e.g. medication summary, discharge summary, referral, lab panels etc. These definitions can be used to generate message definitions, document definitions, and programming APIs for immediate use by industry.</li>
			</ul>
			<p>To date, openEHR at the international level has concentrated on the first category - international definitions of standard clinical information. Within national programmes, archetypes have been both developed and re-used as the basis for templates for national use.</p>
			<p>As a clinician you can get involved in the first category purely on the basis of professional interest, and/or as part of a professional or national programme. To do this, you can join the openEHR community, joining the <a href="http://lists.openehr.org/mailman/listinfo/openehr-announce_lists.openehr.org">announcements</a> and <a href="http://lists.openehr.org/mailman/listinfo/openehr-clinical_lists.openehr.org">clinical</a> mailing lists as a first step. There are more than 1000 people from 75+ countries already there. You can also join the openEHR <a href="http://www.openehr.org/knowledge/" target="_blank">Clinical Knowledge Manager</a> (CKM) as a contributor, and build archetypes for open international use. If you are a specialist, your expertise will be particularly valued. The CKM operates as an online community, with individuals discussing and working on archetypes in their interest area.</p>

<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>