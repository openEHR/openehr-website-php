<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'What is openEHR?';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header_top.php');
?>

	<div id="MainArea" style=" margin-left:60px; margin-top:35px; margin-bottom:100px; width:900px;">
		
		<div id="Content">
		
			<h1><?php echo "$PageName";?></h1>
			
			<p><a href="/files/what_is_openehr/abstract_architecture.png"> <img src="/files/what_is_openehr/abstract_architecture.png" alt="Abstract architecture image" title="Click to enlarge" width="240" style="margin-left:30px; margin-bottom:20px; border: solid 1px #CCCCCC; float:right;"/></a>
			openEHR is a virtual community working on <em>interoperability and computability in e-health</em>. Its main focus is electronic patient records (EHRs) and systems. </p>
			<p>The openEHR Foundation has published a <a href="/programs/specification/releases/currentbaseline">set of specifications</a> defining a health information <em>reference model</em>, a language for building 'clinical models', or <em>archetypes</em>, which are separate from the software, and a query language. The architecture is designed to make use of external health terminologies, such as SNOMED CT, LOINC and ICDx. Components and systems conforming to openEHR are 'open' in terms of data (they obey the published openEHR XML Schemas), models (they are driven by archetypes, written in the published ADL formalism) and APIs. They share the key openEHR innovation of adaptability, due to the archetypes being external to the software, and significant parts of the software being machine-derived from the archetypes.</p>
			<p>The essential outcome is systems and tools for computing with health information at a semantic level, thus enabling true analytic functions like decision support, and research querying.</p>


			<h2>Technical Architecture</h2>
			<p><a href="/files/what_is_openehr/multi_level_modelling.png"> <img src="/files/what_is_openehr/multi_level_modelling.png" alt="Multi level modelling image" title="Click to enlarge" width="240" style="margin-right:30px; margin-bottom:20px; border: solid 1px #CCCCCC; float:left;"/></a>
			The openEHR technical approach is <em>multi-level modelling</em> within a service-oriented software architecture, in which models built by domain experts are in their own layer.</p>
			<p>This allows domain experts - clinicians, allied health workers, and other experts - to be directly involved in defining the semantics of clinical information systems, and it also makes using terminology much easier. You can see a whole repository of these models, known as 'archetypes' <a href="http://www.openehr.org/ckm/" target="_blank">here</a>, and the archetype specification is now an ISO standard (ISO 13606-2). These are now being used by several national governments to specify national e-health information standards.</p>
			<p><a href="/files/what_is_openehr/single_source_modelling.png"> <img src="/files/what_is_openehr/single_source_modelling.png" alt="Single source modelling image" title="Click to enlarge" width="240" style="margin-left:30px; margin-bottom:20px; border: solid 1px #CCCCCC; float:right;"/></a> openEHR has also defined specifications for clinical information models, EHR Extracts, demographics, data types and various kinds of service interfaces. These have been used in hospitals and summary EHR systems in various countries.</p>
			<p>A second dimension via which the openEHR modelling approach can be viewed is <em>single-source modelling</em>. Within this approach, archetypes and templates are definitive models of semantics, without commitment to specific messaging or document standards, or other technologies. Instead, concrete expressions are now generated artefacts. Practically, this means that data schemas such as HL7 CDA, ASTM CCR and HL7 and other message formats are now generated rather than manually modelled. Once single-source modelling is established, other outputs including UI forms and software source code. This means that a model for 'microbiology result' only needs to be done once to enable reports, UI forms, CDAs and other message formats to be generated.</p>
			<p><a href="/files/what_is_openehr/instruction_state_machine.png"> <img src="/files/what_is_openehr/instruction_state_machine.png" alt="Instruction state machine image" title="Click to enlarge" width="240" style="margin-right:30px; margin-bottom:20px; border: solid 1px #CCCCCC; float:left;"/></a> Above the data level, clinical process must be supported. openEHR does this in various ways. Central to its EHR information model is the concept of the 'Instruction' and 'Action', which represent orders and actions. The Instruction State Machine provides a standard model of process, and is used to map steps for specific intervention workflows, like vaccination, medication prescription, radiology and surgery. Actions (e.g. drug administrations) can be tracked with respect to their original order, and this provides the basis for modelling higher-level concepts such as active Care Plans. Rule engines are used to detect relevant actions and update current statuses of patient intervention workflows.</p>
			
			<h2>Development Approach</h2>
			<p><a href="/files/what_is_openehr/openehr_platform_stakeholders.png"> <img src="/files/what_is_openehr/openehr_platform_stakeholders.png" alt="openEHR platform stakeholders image" title="Click to enlarge" width="240" style="margin-right:30px; margin-bottom:20px; border: solid 1px #CCCCCC; float:right;"/></a>
			There are some key benefits to openEHR's approach. Firstly, it is now possible to build an EHR repository independently of content specifications. In other words, your EHR system doesn't need to know a priori about any of the clinical data it will process, such as vital signs, diagnoses or orders. Models for those things are developed separately. Models for data sets and forms are also developed separately, and UI form components are now generatable from these definitions. This enables <em>a new generation of EHR systems that routinely adapts to new requirements</em> - because that's how the architecture is designed in the first place.</p>
			<p>Secondly, building software is now very different. Significant parts of the software are now generated by tools from the templates, reducing the amount of work to do, and greatly improving semantic traceability. Model-generated code and UI (user interface) is an area of continual innovation in openEHR, and promises to revolutionise health computing.</p>
			<p>Another benefit is <em>portable queries</em> - queries based on content models, not phsyical database schemas. Coupled with EHR and vEHR service interface APIs, these are enabling a new class of decision support tools.</p>
			<p>In clinical terms, health professionals are now for the first time experiencing direct involvement in the construction and ongoing development of EHR systems. This means that <em>the quality of the data is better</em> - they designed it, and it also enables applications that work for them to be built.</p>
			

			<h2>An App Platform for an App World</h2>
			<p>Strategically, the openEHR approach enables a <em>platform-based e-health software market</em>, in which vendors and developers of back-end and front-end solutions interface via standardised information, standardised content models and terminology, and standardised service interfaces. This gives procurement stakeholders new choices. It also allows app developers to concentrate on their apps, and simply plug in to a reliable back-end.</p>
			
			
			<h2>Getting Involved</h2>
			<p>This website will give you information on how it all works, and how to become a <a href="/about/membership">member of openEHR</a>. Are you a clinical professional? You can help creating and reviewing the <a href="http://www.openehr.org/ckm/" target="_blank">archetypes</a>. Are you a message designer? You may want to get involved in building template-based message specifications, based on the archetypes. Are you a software developer? You can help build the new generation of EHR tools. If you are a researcher, you can get involved in specifying how openEHR querying, published terminologies and standards like CDISC can be used to improve how longitudinal data-based studies are done. Maybe you want to obtain tools and solutions? You will find <a href = "/industry_partners/">vendor solutions</a>, as well as <a href="/programs/software">open source components</a>.</p>
		
		</div>
		
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
