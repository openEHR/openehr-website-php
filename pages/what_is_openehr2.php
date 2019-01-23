<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'What is openEHR?';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header_top.php');
?>

	<div id="MainArea">
		
		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->

			<h1><?php echo "$PageName";?></h1>
			
			<h2>Motivations</h2>
			<p>In recent decades, it has become clear that the value of information technology in health (often called e-health) has lagged far behind other domains such as banking, process control and logistics. People in all countries still wonder why their health records don't move with them when they move to a different place to live, why hospitals and general practice can't share medication lists, and why they repeatedly get asked the same questions whenever they go to a new clinic or even a new department of a hospital they are already admitted to.</p> 
			<p>Healthcare professionals wonder why it is that preventable adverse events occur in 8 - 12% of hospital admissions across the EU [<a href="http://www.euro.who.int/en/health-topics/Health-systems/patient-safety/data-and-statistics">WHO</a>]; why their EMR systems still don't talk to each other or to other products and indeed, why hospital EMR solutions are so expensive; why there has not been more progress on analysis of health data for prevention; and why they still have to use non-computable guidelines and protocols instead of having IT tool support, such as we use when navigating in our cars.</p>

			<p>The single greatest problem in e-health however, is the <b>lack of support for continuity of care</b>, across provider facilities and independent of particular vendors. Missed referrals, hand-offs, investigation orders continue to frustrate basic care provision, often dangerously for the patient. The <b>lack of a process view</b> driven by care pathways and guidelines is a major impediment to quality of care.</p>

			<p>A number of major, heavily-funded national e-Health programmes in Western countries since 2005 have failed to significantly change this state of affairs.</p>

			<p>There are many contingent reasons for the poor progress of IT in health relating to politics, commercial interests, and inability to focus funding across the mixture of public and private economic actors, but there are also in-principle causal factors at work, which if not addressed will continue to block progress. Chief among these are:</p>

			<ul>
				<li><i>complexity and rate of change of information and processes</i> - ultimately due to the innate complexity both of human biology and society;</li>
				<li>the growth of specialisation and <i>team-based care</i>, such as for acute stroke and sepsis, requires an over-arching model of care process, plans and real-time notification <i>across facilities</i> and to the patient;</li>
				<li>the fact that the focus of healthcare - the patient - routinely <i>moves across enterprise and jurisdictional boundaries</i> while expecting seamless care;</li>
				<li>the rapid <i>march of technology</i> versus the longevity of care processes: healthcare process state must be constantly transferrable across changing OSs, DBs, programming languages and user devices.</li>
			</ul>

			<p>The first factor can only be addressed by a technology approach that makes <i>domain semantics a central concern</i>. The sheer size and rate of change of the semantics problem renders standard methods of IT architecture unsustainable. Instead, the modelling must be done by those with intimate knowledge of the domain  healthcare professionals  enabled by advanced languages and tools.</p>

			<p>The second challenge of simultaneous teamwork, coupled with case complexity requires a new generation of clinical process support: <i>computable care pathways</i> and executable <i>adaptive task plans</i>.</p>

			<p>The third factor - the moving patient - presents a challenge to standard IT architectures in which data usually reside inside single institutions and then inside single products. The need in healthcare however is that coherent data be <i>associated with the patient</i>, not with the institution or product, and to make things worse, remain available and intellible for a human lifetime, regardless of technology churn. This requires a new kind of health computing environment, based on an <i>open platform architecture</i> deployed in a <i>horizontal services layer</i>.</p>

			<p>The last factor, the march of technology requires an approach to representation that is formal and abstract with respect to specific technologies, but can always be concretised in a form appropriate to what is in use. This requires the <i>primary expression</i> <i>of semantics to be separate from concrete technologies</i> like XML schemas, REST APIs and so on, while being <i>machine-convertible</i> to such targets.</p>

			<p>These four challenges must be addressed by any technology that aims to materially improve the situation in the e-health domain.</p>

			<h2>OpenEHR as a Technology</h2>

			<p>openEHR is designed to fulfill this need, by providing the following:</p>

			<ul>
				<li>A multi-level framework that <i>separates data models from domain models</i>;</li>
				<li>An open platform architecture that can be used to represent patient-centric health data, which are <i>accessed</i> by institutions and products <i>but not controlled</i> by them;</li>
				<li>A domain modelling formalism supporting <i>composition</i>, <i>specialisation</i>, <i>localisation</i> and flexible binding to terminology;</li>
				<li>A modelling <i>factory</i> environment that continually produces computable domain models, known as <i>archetypes</i> and <i>templates</i>, developed by domain professionals, in any language;</li>
				<li>Tools that <i>machine-convert</i> domain models into technical forms that can be used to build:</li>
				<ul>
					<li>applications (e.g. screen definitions);</li>
					<li>interoperability components (message definitions) and </li>
					<li>be consumed by platform implementations at runtime (data set definitions).</li>
				</ul>
			</ul>

			<p>We can visualise an <b>openEHR technology ecosystem</b> that implements the above as follows:</p>

			<p><img border=0 src="/files/what_is_openehr/openEHR-what_is_it-architecture.png"></p>

			<p>Under this architectural approach, the entirety of the deployed software solution is based on (at design time) and driven by (at runtime) computable models of content and process created by domain professionals. Notably, the data representation depends only on the <i>data</i> model, which ensures that <b>physical database contents are not affected by new domain models</b>.</p>

			<p>As a community-based organisation, openEHR undertakes three kinds of activity: </p>

			<ul>
				<li>publishing the <b>technical specifications</b> that define both the platform and the domain models;</li>
				<li>developing <b>software</b> for modelling tools and repository;</li>
				<li>publishing <b>clinical models</b>, which act as <i>de facto</i> standards for fragments of the domain.</li>
			</ul>

			<p>All of these are published freely, with liberal licences.</p>

			<p>The <a href="https://specifications.openehr.org">technical specifications</a> include <b>information models for healthcare data</b>, including the EHR (how to record clinical observations?) and demographics (parties, roles and relationships); a portable <a href="https://specifications.openehr.org/releases/QUERY/latest/index"><b>query language</b></a>, the <a href="https://specifications.openehr.org/releases/AM/latest/index">archetype formalism</a> for expressing domain content (what does a 'blood pressure measurement' look like?) and data sets (what does the clinical note for a 12-month diabetic visit look like?), and finally, an <a href="https://specifications.openehr.org/releases/ITS-REST/latest/"><b>open API</b> specification</a>. Additionally, it defines a formal conformance test approach for use in validating implementations.</p>

			<p>The openEHR query language represents a major innovation, which enables the writing of <b>model-based queries</b> that are independent of physical DB schemas, and thus <b>portable across systems</b>. This enables a sustainable approach to clinical decision support and business analytics, which are otherwise either tied to a single database, or else have to be rewritten for every target system.</p>

			<p>The most recent specifications address the area of <a href="https://specifications.openehr.org/releases/PROC/latest/index"><b>clinical process</b></a>, via <b>adaptive workflow</b> and <a href="https://specifications.openehr.org/releases/CDS/latest/index"><b>guidelines</b></a> formalisms that will ultimately be used to represent clinical care pathways.</p>

			<p>These specifications, which have attained <i>de facto</i> standards status in the industry, form the basis of openEHR implementations of the platform (both open and closed source), as well as the modelling tools. They also define openEHR clinical data in a form independent of any particular technology, but of course expressible in currently available technologies (XML, JSON, modern DBs etc).</p>

			<p><b>Interoperability is solved</b> in a way common outside of the healthcare domain, which is <b>by machine-generation</b> <b>of schemas and software</b> components from models, rather than hand-building of message or document definitions, the historical approach in health. Where messages or documents are an integration requirement, a degree of automated openEHR model-based mapping is usually possible.</p>

			<p>In a similar way, the <b>difficulty of application development is greatly reduced</b> via machine-generation of application software and UI components. Via specialised tools, the building of some UI applications directly by clinical professionals is now possible.</p>

			<h2>The Value of Using openEHR</h2>

			<p>An openEHR platform solution may be deployed in a single hospital much as any EMR solution is, but also across a city, region or whole country. It is in the latter deployments where the capability of persisting data in a patient-centric rather than institution- or product-centric fashion is realised, and <b>vendor lock-in is avoided</b>.</p>

			<p>The separation of domain models from the technical layers qualitatively changes the software engineering economics of solutions, because it allows the platform to be built and deployed independently, with domain models being <i>injected at runtime</i>, removing one of the major sources of cost at a stroke. It also allows <b>domain professionals</b>, who know their own data and workflows, to be <b>in the driving seat</b> when specifying the semantics of HIS solutions.</p>

			<p>In the most advanced form, the technical advances of openEHR lead naturally to a <b>plug-and-play platform economy</b>, in which any vendor or developer can produce a solution component, as long as it conforms to the published data and API base standards of openEHR, and additionally, the domain content models created by the community of clinical professionals, including those from the customer. This puts the customer in back in charge of their own system environment, while enabling <b>incremental procurement</b>.</p>

			<p>Significant benefits are available in more routine deployments in which openEHR is deployed in a bimodal form, alongside monolithic EMR systems, to add semantic power and flexibility.</p>

			<p>The use of openEHR also entails new <b>freedom with respect to health data</b>: initially, it is liberated from <i>products and vendors</i>, to be owned by providers; eventually it can move to full patient ownership, with healthcare professionals as managers and guardians  the ultimate realisation of the patient-centric EHR.</p>

			<p>It is the goal of the openEHR Foundation and community to fundamentally change the quality of information technology in the service of medicine, so as to improve outcomes in clinical healthcare, public health and the value of secondary data use.</p>
	
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
			
		</div>
		
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
