<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Qué es openEHR?';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_header_top.php');
?>

	<div id="MainArea">
		
		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>openEHR is a virtual community working on means of <em>turning health data from the physical form into electronic form</em> and ensuring <em>universal interoperability</em> among all forms of electronic data. The primary focus of its endeavour is on <em>electronic health records (EHR)</em> and related systems.</p>
			
			<h2>Why do we need the openEHR approach?</h2>
			<p>The term 'eHealth', which encompasses the use of information and communication technologies in health care, has become inseparable from the vision of modern health care in future. In the last 15 years, many approaches towards 'making eHealth happen' have been developed and many eHealth projects of various scale and success have been implemented. The experience with eHealth projects concerning EHR systems showed that there are a number of major recurring challenges.</p> 
			<div class="more text1" t="1"><a href="#">>> More</a></div>
			<div class="text1 dropDown">
			<p>The first problem usually occurs during the course of the project and involves <em>lack of the clinical input</em> from the health practitioners who are the end users of the system. This may be for different reasons, such as a lack of health professional consultants in the company implementing the project, inability to communicate properly in the mixed teams of IT and health professional or simply the scale of health knowledge required for a given project unforeseen during the project planning and budgeting. The result is very often the production of EHR system that causes difficulties to health professionals in their daily work and sometimes even coupled documentation.</p>
			<p>The second problem arises shortly after the deployment of the system, even in cases when the first problem is completely avoided. Because of health procedures and health data being not static but developing with the progress in medicine, sooner or later a content change in EHR system would be required. EHR systems whose software design was inspired by software design practices in other areas, usually suffer from <em>inseparability of structure and content</em>, which requires major input from project implementer every time a change need to be realised.</p>
			<p>The third problem concerns long time horizon, when <em>limits of system scalability and interoperability</em> are exposed only when systems need to be deployed in the large scale and in conjunction with other systems.</p>
			<p>All these problems are addressed and reflected in the approach proposed by openEHR community. The endeavour of this community is coordinated and promoted by <a href="/es/about/foundation">openEHR Foundation</a>.</p>
			<div class="less" t="1"><a href="#"><< Less</a></div>
			</div>
			
			<h2>What is the openEHR approach?</h2>
			<p>The openEHR approach is <em>multi-level, single source modelling</em> within a service-oriented software architecture, in which models built by domain experts are in their own layer. It is delineated by a <a href="/es/programs/specification/workingbaseline">set of specifications</a> published by the openEHR Foundation.</p>
			<div class="more text2" t="2"><a href="#">>> More</a></div>
			<div class="text2 dropDown">
			<a href="/files/what_is_openehr/4layers.png"> <img src="/files/what_is_openehr/4layers.png" alt="openEHR 4 layers image" title="Click to enlarge" class = "imgMiddle width40"/></a>
			<p>The foundational artefact of the openEHR approach is its <em>reference model</em> - a very stable information model that defines the logical structures of EHR and demographic data. All EHR data in any openEHR system obey this reference model. The openEHR Foundation provides the <a href = "http://www.openehr.org/releases/RM/latest/docs/index" target = "_blank">reference model specification</a>, which is a formal, logical definition of the information, not the concrete physical data schema.</p>
			<p>The next level consists of a library of data points/data groups that are independent of particular use – these are called <em>archetypes</em>. The creation of a library of use-independent data points removes the need for modelling the same data point more than once. The international library of <a href = "http://openehr.org/ckm/" target="_blank">openEHR archetypes (CKM)</a> currently contains about 500 archetypes, or 6,500 data points. Another advantage is that these archetypes can be modelled by clinical professionals or health informatics experts without any technological knowledge of the final EHR systems. The openEHR approach also allows to make use of external health terminologies, such as SNOMED CT, LOINC and ICDx in the modelling process. The openEHR Foundation provides the <a href="http://www.openehr.org/releases/AM/latest/docs/index" target = "_blank">archetype model specification</a> and also <a href="/es/downloads/modellingtools">tools for their authoring and editing</a>.</p>
			<p>At the next level, the data-points and data-groups are assembled into context-specific data sets – it could be the data for a form, a particular message, or a document. In openEHR, these are called <em>templates</em>. All openEHR systems are built with templates, which contain the relevant bits of various archetypes. Templates preserve the paths of archetype elements they use, even within variable depth structures. Templates are usually developed by implementers local to the solution being built, but it is also possible to build a standard template for a country, e.g. a discharge summary. The <a href="/es/downloads/modellingtools">tools for template design and editing</a> are provided by the openEHR Fondation.</p>
			<p>The last level, closest to the user are <em>template-generated artefacts</em>, such as application program interfaces, XSDs, UI forms. These artefacts are used by application developers. The openEHR Foundation provides the <a href="http://www.openehr.org/releases/AM/latest/docs/OPT2/OPT2.html" target = "_blank">operational template specification</a>.</p>
			<div class="less" t="2"><a href="#"><< Less</a></div>
			</div>
			
			<h2>The openEHR approach benefits</h2>
			<p>The essential outcome of the openEHR approach is systems and tools for computing with health information at a semantic level, thus enabling true analytic functions like decision support, and research querying.</p>
			<div class="more text3" t="3"><a href="#">>> More</a></div>
			<div class="text3 dropDown">
			<p>There are some key benefits to openEHR's approach. Firstly, it is now possible to build an EHR repository independently of content specifications. In other words, your EHR system doesn't need to know a priori about any of the clinical data it will process, such as vital signs, diagnoses or orders. Models for those things are developed separately. Models for data sets and forms are also developed separately, and UI form components are generated from these definitions. This enables <em>a new generation of EHR systems that routinely adapts to new requirements</em> - because that's how the architecture is designed in the first place.</p>
			<p>Secondly, building software is now very different. Significant parts of the software are now generated by tools from the templates, reducing the amount of work to do, and greatly improving semantic traceability. Model-generated code and UI (user interface) is an area of continual innovation in openEHR, and promises to revolutionise health computing.</p>
			<div class="less" t="3"><a href="#"><< Less</a></div>
			</div>
			
			<h2>The openEHR approach in practice</h2>
			<p>Components and systems conforming to openEHR are 'open' in terms of data, models and APIs. They share the key openEHR innovation of adaptability, due to the archetypes being external to the software, and significant parts of the software being machine-derived from the archetypes. The archetype specification is now an ISO standard (ISO 13606-2). These are now being used by several national governments to specify national e-health information standards.</p>
			<div class="more text4" t="4"><a href="#">>> More</a></div>
			<div class="text4 dropDown">
			<p>Strategically, the openEHR approach enables a <em>platform-based e-health software market</em>, in which vendors and developers of back-end and front-end solutions interface via standardised information models, content models, terminologies and service interfaces. This gives procurement stakeholders new choices, enabling them to:</p>
			<ul>
				<li>avoid product and vendor lock-in;</li>
				<li>retain ownership of the data for secondary use;</li>
				<li>let their clinical experts be directly involved in solution development, via archetype authoring.</li>
			</ul>
 			<p>It also allows application developers to concentrate on their applications, and simply plug in to a reliable back-end.</p>
 			<p><a href="/resources/white_paper_docs/openEHR_vendor_independent_platform.pdf" target="_blank">The openEHR White Paper</a> provides a more detailed discussion of the advantages of an open, extensible health computing platform.</p>
			<div class="less" t="4"><a href="#"><< Less</a></div>
			</div>

			<h2>Getting Involved</h2>
			<p>This website will give you information on how it all works, and how to become a <a href="/es/about/membership">member of openEHR</a>. The openEHR approach offers opportunities and value to many different stakeholders, including clinicians, health care providers, governments, software developers and research institutions.</p>
			<div class="more text5" t="5"><a href="#">>> More</a></div>
			<div class="text5 dropDown">
			<a href="/files/what_is_openehr/openehr_platform_stakeholders.png"> <img src="/files/what_is_openehr/openehr_platform_stakeholders.png" alt="openEHR platform stakeholders image" title="Click to enlarge" class = "imgMiddle width40"/></a>
			<p>Are you a <a href = "/es/getting_involved/providers_clinicians">clinician or health care provider</a>? You can help creating and reviewing the <a href="http://www.openehr.org/ckm/" target="_blank">archetypes</a>. Are you a message designer? You may want to get involved in building template-based message specifications, based on the archetypes. Are you a <a href = "/es/getting_involved/vendors_developers">software vendor or developer</a>? You can help build the new generation of EHR tools. If you are a <a href = "/es/getting_involved/universities_researchcentres">researcher</a>, you can get involved in specifying how openEHR querying, published terminologies and standards like CDISC can be used to improve how longitudinal data-based studies are done. Maybe you want to obtain tools and solutions? You will find <a href = "/es/industry_partners/">vendor solutions</a>, as well as <a href="/es/programs/software">open source components</a>. If you are from the <a href = "/es/getting_involved/governmentbodies_programmes">government institution</a>, the openEHR approach can provide a platform to integrate your local eHealth systems.</p>
			<div class="less" t="5"><a href="#"><< Less</a></div>
			</div>
		
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->

		</div>
		
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_footer.php');?>