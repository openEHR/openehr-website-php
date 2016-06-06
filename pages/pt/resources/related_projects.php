<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Projetos Relacionados';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>This page provides links to some of the projects which have influenced openEHR, or are in some other way relevant.</p>
			
			<ul>
				<li><a href="#gehr">GEHR - The Good European Health Record</a></li>
				<li><a href="#gehraus">GeHR in Australia - The Good electronic Health Record</a></li>
				<li><a href="#chime">CHIME EHR Server</a></li>
				<li><a href="#picnic">PICNIC</a></li>
				<li><a href="#clef">CLinical E-science Framework - CLEF (2002-2005)</a></li>
				<li><a href="#nautilus">Nautilus/Odyssée</a></li>
			</ul>
			
			
			<a name="gehr"></a><h2>GEHR - The Good European Health Record</h2>
			<p>The <a href="http://cordis.europa.eu/project/rcn/17093_en.html" target="_blank">GEHR project</a> was an EU 3rd Framework project (Advanced Informatics in Medicine project 2014), and ran from 1992 - 1995. There were 21 participating organisations from 8 countries. The main achievements of the GEHR project were:</p>
			<ul>
				<li>comprehensive <strong>requirements</strong> of the EHR, which have since fed into many other projects, including ISO 18308;</li>
				<li>a structured <strong>object-oriented model of the EHR</strong>, which contained basic data types, versioning semantics, and the multi-level structuring now accepted in CEN and HL7 (now known as Folder/Composition/Section/Entry/Cluster/Element; on GEHR it was Transaction/Headed_section/Entry/Compound/Item)</li>
			</ul>
			
			<h3>Deliverables</h3>
			<p>The following is a partial set of the GEHR deliverables.</p>
			<ul>
				<li><a href="/files/resources/related_projects/gehr/gehr_deliverable-4.pdf">Deliverables 4 - Requirements for Clinical Comprehensiveness</a></li>
				<li><a href="/files/resources/related_projects/gehr/gehr_deliverable-8.pdf">Deliverables 8 - Ethical and Legal Requirements</a></li>
				<li><a href="/files/resources/related_projects/gehr/gehr_deliverable-19_20_24.pdf">Deliverables 19, 20, 24 - The GEHR Archtecture</a></li>
			</ul>

			<a name="gehr_implementers"></a><h2>GEHR Implementers</h2>
			<h3>HealthOne</h3>
			<p>The flagship product of Health Data Management Partners (<a href="http://www.hdmp.com/" target="_blank">HDMP</a>), a Belgian company, is its Health<i>one</i> clinical data management product, based on the architecture of the original GEHR Project. Health<i>one</i> is used in a large number of hospitals in Belgium and France, as well as elsewhere in Europe.</p>

			<h3>Black Sea Telediab</h3>
			<p>The first successful operational medical record system based on the Good European Health Record (GEHR). The diabetes data is based on the WHO (Europe) Diabcare dataset. This system is written in C++ and uses Microsoft Access as its database.</p>
			<p><a href="http://www.telemed.ro/BSTD/BSTD_Broch.pdf#search=%22black%20sea%20telediab%22" target="_blank">Project Brochure</a>.</p>

			
			<a name="gehraus"></a><h2>GeHR in Australia - The Good electronic Health Record</h2>
			<h3>Overview</h3>
			<p>The GeHR (Australia) project was the precursor to the modern openEHR project. It was undertaken with funding from the (then) Australian Department of Health, and was carried out by Ocean Informatics and DSTC personnel. It built on the experience of the European GEHR project, but radically changed the models and introduced archetypes for the first time. A significant amount of software was built (in Java, Eiffel and VB) which ran exactly according to the published designs. These lessons led to many of the numerous improvements which consistute openEHR today. The development programme of GeHR included as deliverables:</p>
			<ul>
				<li>Clear statement of requirements;</li>
				<li>A description of the architecture;</li>
				<li>Formal expression of the architecture as compilable source code;</li>
				<li>A generated CASE (diagrammatic) expression of the model;</li>
				<li>Various exchange specifications (IDL, XML, etc.);</li>
				<li>An application programming interface (API);</li>
				<li>Provisional set of archetypes;</li>
				<li>Detailed technical documentation; and</li>
				<li>development guidelines.</li>
			</ul>
			<p>All of these were made available in the public domain through the efforts of Thomas Beale and Sam Heard. This publication provided the impetus for using GeHR in a series of four trials organised under the auspices of the General Practice Computing Group (GPCG) and funded by the Commonwealth Department of Health and Ageing (DoHA) in Australia.</p>

			<h3>Documentation</h3>
			<p>The following documents describe the GeHR architecture.</p>
			<ul>
				<li><a href="/files/resources/related_projects/gehr_australia/gehr_requirements.pdf">Requirements</a> - a comprehensive set of technical requirements for the EHR, based on original GEHR requirements</li>
				<li><a href="/files/resources/related_projects/gehr_australia/gehr_system_architecture.pdf">System architecture</a> - a description of the deployed system</li>
				<li><a href="/files/resources/related_projects/gehr_australia/gehr_kernel_architecture.pdf">Kernel architecture</a> - describing in detail how archetypes were used in the software</li>
				<li><a href="/files/resources/related_projects/gehr_australia/gehr_gom.pdf">Gehr Object Model</a> (the GOM) - the reference object model &nbsp;of GeHR</li>
				<li><a href="/files/resources/related_projects/gehr_australia/gehr_api.pdf">The kernel API</a> - the Application Programmers Interface</li>
				<li><a href="/files/resources/related_projects/gehr_australia/gehr_archetypes.pdf">Gehr archetype system</a> - overview of archeytpes in GeHR and simple server API</li>
			</ul>
			
			<h2>GeHR-related Projects</h2>
			<p>The GeHR family of projects is described below.</p>

			<h3>GPCG GeHR Electronic Health Record Architecture Project</h3>
			<p>This project was the first implementation of GEHR in Australia. It extended over an 18 month period from January 2000 to June 2001. The aim of the project was to integrate three GP clinical software applications to the GEHR EHR kernel via a Microsoft COM interface. The server was built and successfully tested, but integration to vendor software did not succeed due to lack of vendor resources to implement the integration. Instead, a VB test program was built. This project produced a wealth of knowledge and experience about using archetypes computationally, which has led to today's Archetype Description Language (ADL) and openEHR EHR specifications.</p>

			<h3>GPCG Hospital Data Transformation Project</h3>
			<p>This project developed and successfully trialed an XML-based data transformation methodology for converting legacy data from clinical data repositories (CDRs) to GeHR-compliant format. The aim was to develop a proof-of-concept for hospital to GP communication between non-GeHR and GeHR-compliant systems. The CDR used was the world's largest implemenation of Oacis which is being deployed state-wide in South Australia. This project was undertaken by Flinders University, South Australia, and DSTC Pty Ltd, a research organisation funded in part by the Australian Federal Government's Cooperative Research Centre program, that has worked with Ocean Informatics since 2001. This project ran from January to May 2001. Final GPCG report <a href="/files/resources/related_projects/GPCG_australia/GPCG_Project2_01.pdf">here</a>.</p>

			<h3>GPCG Diabetes Messaging and Data Communication</h3>
			<p>This project was undertaken jointly with Medical Communications Associates, a health applications vendor specialising in HL7-based systems, from March to December 2001. The task was the development of a set of HL7 messages and a corresponding set of GeHR archetypes for diabetes shared care. Final report <a href="/files/resources/related_projects/GPCG_australia/GPCG_Project5_01.PDF">here</a>.</p>

			<h3>GP Data Transformation Project</h3>
			<p>Following the successful proof-of-concept trial in the acute hospital sector, this project aimed to extend the legacy data transformation methodology into the primary care sector. Data was extracted from the two leading (and incompatible) Australian GP clinical systems and transformed to GeHR-compliant data for use in diabetes shared care between a specialist diabetician and several GPs. An internet-based shared EHR was created in what is believed to be the first demonstration of this kind in the world. The project was undertaken in partnership with the DSTC from January to June 2002.</p>
			<p>The research undertaken during 1998-2001 formed the basis of the openEHR body of work and contributed to the establishment of the openEHR architecture, which has become a major element of national (Standards Australia) and international (CEN) standardisation efforts and R&amp;D collaborations.</p>

			
			<a name="chime"></a><h2>CHIME EHR Server</h2>
			<p>The Centre of Health Informatics and Multiprofessional Education (CHIME), part of University College London, has been active in several EU projects over the past decade on the requirements, specification, implementation and evaluation of EHR systems and middleware services. These European Commission sponsored projects include:</p>
			<ul>
				<li><a href="http://www.chime.ucl.ac.uk/work-areas/ehrs/GEHR/index.htm" target="_blank">GEHR</a>,</li>
				<li><a href="http://www.chime.ucl.ac.uk/work-areas/ehrs/SYNAPSES/index.htm" target="_blank">Synapses</a>,</li>
				<li><a href="http://www.chime.ucl.ac.uk/work-areas/ehrs/EHCR-SupA/index.htm" target="_blank">EHCR-SupA</a>,</li>
				<li><a href="http://www.chime.ucl.ac.uk/work-areas/ehrs/SynEx/index.htm" target="_blank">SynEx</a>,</li>
				<li><a href="http://www.chime.ucl.ac.uk/work-areas/ehrs/Medicate/index.htm" target="_blank">Medicate</a>,</li>
				<li><a href="http://www.6winit.org" target="_blank">6WINIT</a>.</li>
			</ul>
			
			<h3>Deployments</h3>
			<p>Over the past five years this EHR research team has implemented a component-based federated EHR server drawing on those R&amp;D results, and piloted its live use at the <em>Whittington Hospital</em> in north London. The research underpinning and technical approach of this work, including the use of archetypes, is described in the following <a href="/files/resources/related_projects/UCL_CHIME/UCL-TEHRE01-Reprint.pdf">reprint</a> of a paper published in Toward an Electronic Health Record Europe (TEHRE) 2001. The reference and archetype information models used in this implementation work are given in a technical <a href="/files/resources/related_projects/UCL_CHIME/UCL-FHR-Models-Annexe.pdf">appendix</a> to this paper.</p>
			<p>The CHIME UCL server was deployed as part of the NHS Electronic Record Demonstration and Implementation Programme (ERDIP) in <em>South West Devon</em>.</p>

			<h3>Background</h3>
			<p>A comprehensive review of the field and the UCL demonstrator is contained in Dipak Kalra's <a href="http://eprints.ucl.ac.uk/archive/00001584/" target="_blank">PhD Thesis</a> (45MB).</p>
			<p>The Java middleware components described in these papers are intended for open source, to be licensed through openEHR on this site, during 2004-5.</p>
			<p>The demonstration described here has benefited from extensive collaboration within several European project consortia, the results of which have been piloted in many other health care settings as illustrated in the map below.</p>
			
			<img src="/files/resources/related_projects/EU-EHR-demonstrator-sites.jpg" alt="EHR demonstrator" class = "imgMiddle width50"/>
			
			<p>This practical implementation and demonstration, building on a long and iterative R&amp;D journey, has been a principal feed into the present version of the openEHR specifications, drafted jointly with our colleagues from Ocean Informatics. UCL is, with them, also contributing to the CEN EHRcom Task Force.</p>
			<p>The UCL team is a partner in the Medical Research Council e-Science project <a href="http://www.cs.man.ac.uk/mig/projects/current/clef/" target="_blank">CLEF</a>, developing a large-scale anonymised EHR repository of cancer records with access for biomedical and genomics research, via the Grid.</p>

			<h3>Future</h3>
			<p>The EHR server will be redeveloped during 2004/5, building on the latest openEHR specifications and the early proposals from EHRcom, and to evaluate these in live clinical settings during 2005.</p>
			
			
			<a name="picnic"></a><h2>PICNIC</h2>
			<p><a href="http://www.euser-eu.org/ShowCase.asp?CaseTitleID=490&CaseID=1013&MenuID=56" target="_blank">PICNIC</a> (Professionals and Citizens Network for Integrated Care) was an EU-funded 5th Framework project which developed a multi-tier architecture designed for regional shared care, and based on recognised previous works including the OMG's Health Domain Task Force (HDTF) specifications (COAS, PIDS and RAD), and the Distributed Healthcare Environment (DHE) developed and refined in a number of EU projects including RICHE, its successor,
			<a href="http://www.ehto.org/aim/volume2/nucleus.html" target="_blank">NUCLEUS</a>, EDITH and
			<a href="http://www.ehto.org/aim/volume2/shine.html" target="_blank">SHINE</a>. It is
			implemented in many hospitals across Europe under the
			<a href="http://www.ehto.org/ht_projects/initial_project_description/hansa.html" target="_blank">HANSA
			</a>project. The
			<a href="http://books.google.co.uk/books?vid=ISBN158603538X&id=gKEVkfRB6XoC&pg=PA2&lpg=PA2&ots=EQSfFGC4U4&dq=professionals+and+citizens+network+for+integrated+care&sig=FO5K5qRxyXOcSKIVTFZTzvVAWmc" target="_blank">book</a>
			"Regional Health Economies and ICT Services" documents PICNIC and other similar
			efforts.</p>
			<p>PICNIC is relevant to openEHR because it represents a deployment of distributed middleware based on ideas and standards which are also being used by openEHR. For example, openEHR implementations of the OMG PIDS and RAD specifications are likely to emerge in the future, using PICNICs experience to guide the implementation.</p>

			
			<a name="clef"></a><h2>CLinical E-science Framework - CLEF (2002-2005)</h2>
			<p>CLEF is a UK Medical Research Council funded project in the E-Science programme that aims to establish methodologies and a technical infrastructure for the next generation of integrated clinical and bioscience research. With UCl, the other collaborating universities are at Manchester (co-ordinating), Sheffield, Brighton and Cambridge. The clinical centres are the Royal Marsden Hospital, UCL Hospital and the Institute of Child Health.</p>
			<p>One of the major goals of the project is to provide a pseudonymised repository of histories of cancer patients that can be accessed by researchers. The hypothesis of CLEF is that a useful research resource can be legitimately generated from routine clinical data. The project is developing a research workbench supporting queries on large volumes of anonymised cancer and genetic records. This resource is being enriched through the lexical analysis of narrative reports and summaries, which make up a considerable proportion of the fine-grained clinical information that is held electronically in contemporary systems.</p>
			<p>The ethical, policy and technical aspects of preserving confidentiality when migrating data from a real hospital information system to the pseudonymous repository, and on subsequent query of it, are important aspects of the work.</p>
			<p>The UCL record server is providing the repository for CLEF including relevant archetypes, the security architecture and the query middleware component.</p>


			<a name="nautilus"></a><h2>Nautilus/Odyssée</h2>
			<p>The open source Odysée product from Nautilus, France, was a highly innovative recording and reporting system for endoscopy and echocardiography, based on a generic architecture and kernel. One of its key innovations is <em>"fils guides"</em> (guide paths) - the terminological approach of Odysée is to have a completely "generative" or "compositional" lexicon, with no pre-coordination, and a separate database of coordination rules (in the form of trees, indexed by path patterns), called "fils guides", which control how terms can be coordinated in actual notes and reports. The advantage of this approach is that it allows for a small lexicon (&lt; 50,000 terms) to cover a large amount of medicine (contrast with Snmoed-ct - 1.3 million node semantic net); it is easily managable due to being very systematic and relatively small.</p>
			<p>Odysée has also adopted a variant of archetypes, and uses them in concert with the fils guides. Where non-deterministic input is desired by the user (i.e input doesn't follow and pre-modelled pattern), the fils guides are employed; when deterministic input is required, archetypes are loaded and used. According to Philippe Ameline, head of Nautilus, both techniques perfectly mix, since fils guides can extend Archetypes leaves, and an Archetype can be fired by a fil guide.</p>
			<p>Another endeavour underway at Nautilus is the "Ligne de Vie" (life line) health record server, which is a multi-tier EHR architecture combining birth-to-death patient health records, available on a per-issue/problem basis, with a simple security approach.</p>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>