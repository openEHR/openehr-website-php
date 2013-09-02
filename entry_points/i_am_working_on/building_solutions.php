<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'Building Solutions';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>openEHR provides many advantages for health information system and application vendors. Because it is a standardised computing platform it enables many vendors to avoid re-inventing their own back-end for EHR, demographics, data integration and so on, and instead use one of the high-quality implementations becoming available. All of the API and service specifications are already or will soon be publicly available.</p>
			<p>A prime source of efficiency when using the openEHR platform is the ability to use archetypes agreed formally elsewhere, ensuring genuine semantic interoperability of health records. This might be considered a form of cooperative clinical configuration. While such configuration is a source of income to vendors in the current environment, it is a waste for the health system as a whole and a source of many of the integration problems we are currently experiencing.</p>
			
			<h2>Building Applications</h2>
			<p>Vendors of applications such as clinical systems for general practice, hospital departments, decision support and many others can use the openEHR platform for all clinical and potentially demographic information, rather than having to provide their own implementation. The application interacts with the openEHR platform via the virtual EHR (vEHR) API, Archetype Query Language (AQL) and XML, regardless of which implementation is used. Larger implementations support secure high-performance, high-volume EHR repositories.</p>
			<p>openEHR Templates can be effectively used to build data capture, viewing and querying forms for an application. The forms can be generated from openEHR Templates using a template-building tool, in e.g. Xform, .Net or other formats. This ensures that the semantics of archetypes ar preserved through the application stack.</p>
			
			<h2>Building Integration Solutions</h2>
			<p>Integrating with other data sources is facilitated by the use of openEHR Templates, which can be used to drive an integration engine that converts all manner of source data and documents into openEHR form, where it is archetype-conformant and can treated as part of a patient-centric record. All audit trailing and feeder system meta-data (e.g. identifiers) is captured in openEHR structures, ensuring that links to source data are preserved.</p>
			<p>Data from sources that are federated in this way can then be output in a number of formats, including openEHR, CEN EN13606, HL7 CDA rel2, PDF, and various XML and HTML.</p>
			
			<h2>Building Hospital Information Systems</h2>
			<p>Using an implementation of the openEHR platform as the back-end of a large system provides many advantages. Rather than having to constantly maintain a proprietary database structure, using the openEHR back-end will make the system applications much easier to manage and evolve. Integration with other systems is likely to be easier via the standard formats supported by the platform, including CEN EN13606, HL7 CDA, HL7v2.x and others.</p>
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>