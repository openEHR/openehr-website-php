<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Direções Futuras';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>Having established a solid set of baseline specifications, the openEHR Foundation and community aims to build on these in order to provide more direct value to implementers, clinicians and users of health information systems. Community and vendor involvement is encouraged in all activities. </p>
			<p>The following describes future directions. The operational Roadmap is always available on the <a href="https://openehr.atlassian.net/browse/SPEC" target="_blank">Specifications tracker</a>. </p>
			
			
			<h2>Specifications</h2>
			
			<h3>ADL 2 and a formal Template Model</h3>
			<p>ADL/AOM 2 bring the possibility of a formal unified model of templates, enabling archetype and template tools to be effectively the same thing.</p>

			<h3>openEHR / Snomed CT integration</h3>
			<p>The ADL 2 specifications define how terminology may be bound to archetypes, using IHTSDO URI guidelines, and experience gained from the community, and also from the <a href="http://opencimi.org" target="_blank">CIMI</a> community's use of ADL 2. The best approach to dealing with differing levels of model and terminology post-coordination are under active investigation.</p>

			<h3>Virtual EHR (vEHR) and other Service Interfaces</h3>
			<p>A number of service API definitions are available from industry for key services, including EHR, Demographics and Decision Support. These are being actively integrated into a coherent set of openEHR specifications.</p>

			<h3>Decision Support</h3>
			<p>An initial release of the Guidelines Definition Language (GDL), based on ADL, has been followed by successful implementation in Sweden. GDL will become an openEHR specification, and form the basis for the computable guidelines approach of openEHR in the future.</p>

			<h3>Care Pathway Support</h3>
			<p>With base specifications in place and stable in openEHR, new work will concentrate on supporting distributed care pathways. This will provide a standardised way of finding and merging distributed medication orders and statuses, as well as enable the generation of a map of referrals, admissions, discharges and other transfer events.</p>

			<h2>Implementation</h2>
			<p>New directions in implementation include the following:</p>
			<ul>
				<li>Standardised Operational Templates (OPTs);</li>
				<li>Standardised Template Data Schema - an XSD generated from a template;</li>
				<li>Standardised Template Data Object - an API generated from a template.</li>
			</ul>

			<h2>Standards</h2>
			<p>New directions in standards include the following:</p>
			<ul>
				<li>a standard transform from openEHR templates to HL7 FHIR profiles;</li>
				<li>Cooperation with ISO and CEN on a new revision of ISO 13606.</li>
			</ul>
		
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>
