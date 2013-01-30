<?php
$PageName = 'Publications';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

	<?php include '../panel/headpanel.php' ?>
	
</head>

<body>

<div id="MainFrame">
	
	<div id="TopPanel">
		<?php include '../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu">
	
		<div class="nav">
			<?php include '../menu/topmenu.php' ?>
		</div>
		
	</div> 

	<div id="MainArea">
	
		<div id="SideMenu">
		<?php include 'menu.php' ?>
		</div>
		
		<div id="TextArea">
			
			<h1><?php echo "$PageName";?></h1>
			<p class="content1"><a href="#workflow">Publications on Workflow</a></p>
				<p class="content2"><a href="#workflowinhealthcare">Workflow in Healthcare</a></p>
			<p class="content1"><a href="#archetypes">Publications on Archetypes</a></p>
				<p class="content2"><a href="#thesesanddisertations">PhD Theses and other Disssertations about openEHR Archetypes</a></p>
				<p class="content2"><a href="#paperscenopenehr">Papers Specifically about openEHR/CEN Archetypes</a></p>
				<p class="content2"><a href="#papersmentioning">Papers and Theses mentioning archetypes</a></p>
				<p class="content2"><a href="#papersrelated">Papers about Related Subjects</a></p>
			<p class="content1"><a href="#healthict">Publications on Health ICT</a></p>
				<p class="content2"><a href="#governanceandsustainability">Governance and Sustainability</a></p>
				<p class="content2"><a href="#openehr">openEHR</a></p>
				<p class="content2"><a href="#regionalhealth">Regional Health</a></p>
				<p class="content2"><a href="#architecture">Health Information System Architecture</a></p>
				<p class="content2"><a href="#healthrecords">Health Records</a></p>
				
			<h2><a name="workflow"></a>Publications on Workflow</h2>
			<h3><a name="workflowinhealthcare"></a>Workflow in Healthcare</h3>
			<ul>
				<li>
				<p><h4>Designing Guideline-based Workflow-integrated Electronic Health Records (<a href="http://www.openehr.org/files/publications/workflow/Barretto_PhD_Thesis_2005.zip">zipped PDF</a>)</h4></p>
				<p><b>Sistine Ann Barretto</b></p>
				<p><i>PhD thesis submitted to the department of Information Technology (Research),
				University of South Australia. June 2005.</i></p>
				<p><i>Abstract:</i> The recent trend in health care has been on the development and implementation of clinical guidelines to support
				and comply with evidence-based care. Evidence-based care is established with a view to improve the overall quality of care for patients,
				reduce costs, and address medico-legal issues. One of the main questions addressed by this thesis is how to support guideline-based care.
				It is recognised that this is better achieved by taking into consideration the provider workflow. However, workflow support remains a challenging
				(and hence rarely seen) accomplishment in practice, particularly in the context of chronic disease management (CDM).</p>
				<p>Our view is that guidelines can be knowledge-engineered into four main artefacts: electronic health record (EHR) content,
				computer-interpretable guideline (CiG), workflow and hypermedia. The next question is then how to coordinate and make use of
				these artefacts in a health information system (HIS). We leverage the EHR since we view this as the core component to any HIS.</p>
				<p>We use the openEHR architecture, which allows extension of a core Reference Model via Archetypes, to refine the detailed information recording options
				for specific points in the healthcare process, to represent decision support information needs, and to represent the composite instruction that is the workflow itself.
				We present an Instruction Reference Model from which composite instructions can be defined and is an extension to the current openEHR's Instruction model (revision 4.3).
				We define constructs for the rationale of the decisions made to be recorded explicitly within the record - including the specific guideline step, didacticism,
				and links to relevant EHR data items that were used to arrive at a decision.</p>
				<p>We develop a prototype system that makes use of two key components: the Breeze workflow architecture, and our implementation of the EHR Persistence Layer
				- both of which interact in the initiation and execution of instructions. We illustrate our approach on two distinct but common CDM scenarios: Early Supported Discharge
				and associated Post-stroke Rehabilitation, which is process-oriented and less clinical in nature; and Hypertension in Diabetes which is of a highly clinical nature, and decision-based.</p>
				<p>We found that there is a real distinction between the roles that guideline-based recommendations provided by CiGs, workflow and EHR play in supporting and managing patient care:
				(1) CiGs model decision-making steps and recommended actions; (2) workflows model the work to be done for that recommended action, by whom, when and how,
				and help ensure that it gets done; (3) archetypes help ensure that the appropriate information is collected within the EHR for the workflow.
				Moreover, the extent to which each of these components can be used in supporting CDM, particularly CiGs and workflow, is dependent on the clinical context in which it is applied.</p>
				<p>Our research has implications on various stakeholders. The extended EHR architecture allows the application designer to choose a usable balance of compliance
				encouragement and human judgment. The ability to track healthcare process steps within the EHR content is also of medico-legal significance. It is envisioned that
				extensible EHR recording allows the EHR to serve as the basis for care coordination, and potentially improve communication amongst providers and even improve patient health outcomes.
				Our open framework can be used to further explore the problem of effective support for CDM (such as presentation of hypermedia), and can inform a range of standards bodies (such as HL7),
				researchers (such as clinical guideline representation and workflow) and vendors about specific requirements for integrating EHR, workflow and guideline-based decision support.</p>
				</li>
				
				<li>
				<p><h4>Workflow Modelling of Coordinated Inter-Health-Provider Care Plans (<a href="http://www.openehr.org/files/publications/workflow/Eric_Browne_WF_thesis_2005.pdf">PDF</a>)</h4></p>
				<p><b>Eric Browne</b></p>
				<p><i>PhD thesis submitted to&nbsp;the Division of Information Technology, Engineering and
				the Environment. January 2005.</i></p>
				<p><i>Abstract:</i> Workflow in healthcare, particularly for the shared and coordinated management of chronic illnesses, is very difficult to model.
				It is also difficult to support via current Clinical Information Systems and current information technologies.
				This dissertation contributes significant enhancements to the current methodologies for designing and implementing Workflow Management Systems (Wf MSs )
				suitable for healthcare. The contribution comprises three interrelated aspects of workflow system architecture as follows:</p>
				<ul>
					<li>Firstly, it shifts the emphasis of workflow modelling and enactment to a focus on goals, and the monitoring and facilitation of their achievement.</li>
					<li>Secondly, it introduces the concept of self-modifying workflow in the context of health care planning, whereby explicit tasks in the goal-based
					care plan are devoted to assessing and modifying downstream workflow.</li>
					<li>Thirdly, this dissertation proposes methodologies for identifying and dealing with tasks which overlap, subsume or interfere with other tasks elsewhere in a given workflow.</li>	
				</ul>
				<p>The language and methods introduced in goal-based requirements engineering research have been carried into the domain of Wf MSs and adapted by the author
				as a mechanism for deriving workflow models that can be communicated and enacted by health care providers contributing to the shared care of a patient.
				A methodology is described, whereby a hierarchical goal-based view for the management of a chronic condition or conditions can be automatically translated into a workflow schema.
				This workflow schema contains subworkflows corresponding to each goal, together with specfic tasks dedicated to monitoring, and, if necessary, altering the downstream workflow
				to optimally achieve each goal target.</p>
				<p>For self-modifying workflow, certain tasks in the workflow schema are devoted to modifying the downstream workflow on an instance by instance basis. Such
				self-modifying schemas provide the necessary exibility to suit the evolving diagnostic and therapeutic processes encountered in Chronic Disease Management
				(CDM), particularly in complex areas requiring significant individualisation. The management of Diabetes Mellitus in a community care setting provides an example
				to illustrate this complexity. In order to facilitate self-modification of workflow schemas, this dissertation enunciates a set of valid operations that can be applied
				to downstream components of a workflow schema. These operations are primarily concerned with turning abstract subworkflows into concrete ones through completion
				and alteration of template primitives. There are many situations in inter-organisational health care, where, for a given care process,
				activities might be undertaken in one clinic that overlap with, or repeat activities undertaken elsewhere.
				This dissertation proposes solutions to situations where duplicated tests and procedures are costly and can have negative health impacts on patients undergoing unnecessary
				tests and interventions.<p>
				<p>The approach builds on the two-tier goal/process representation of healthcare processes and describes an execution model comprising a candidate discovery phase,
				followed by a component crediting phase. The notions of full vs. partial crediting, and goal-level vs. activity-level crediting are introduced.
				The role that temporal constraints play in determining candidate components for crediting is also examined.</p>
				<p>Aspects of a prototype Workflow Management System (called StreamLine ) that the author has built, are described in order to illustrate
				how the approach of goal-based workflow schema derivation, self-modifying worklow schemas, and activity overlap identication and crediting can provide sufficient flexibility and
				focus to substantially improve the management of complex, chronic conditions.</p>
				<p>The author's prototype is tested using the current local work practices for treating Non-Insulin Dependent Diabetes Mellitus involving shared care plans based on
				Australian guidelines. The dissertation concludes with an assessment of the implications of goalbased, self-modifying, redundancy-reducing workflow models for developers
				and implementors of Wf MSs as well as for implementors of future Health Information Networks employing such complex workflow solutions.</p>
				</li>
				
				<li>
				<p><h4>Event-Oriented Dynamic Adaptation of Workflows: Model, Architecture, and Implementation (<a href="http://www.imn.htwk-leipzig.de/%7Emueller/references/diss.pdf">PDF</a>)</h4></p>
				<p><b>Robert M&uuml;ller</b></p>
				<p><i>PhD thesis submitted to&nbsp;Fakult&auml;t f&uuml;r Mathematik und Informatik at the Universit&auml;t Leipzig, 2003.</i></p>
				<p><i>Abstract:</i> Workflow management is widely accepted as a core technology to support long-term business processes in heterogeneous and distributed environments.
				However, conventional workflow management systems do not provide sufficient flexibility support to cope with the broad range of failure situations
				that may occur during workflow execution. In particular, most systems do not allow to dynamically adapt a workflow due to a failure situation, e.g.,
				to dynamically drop or insert execution steps.</p>
				<p>As a contribution to overcome these limitations, this dissertation introduces the agent-based workflow management system AGENTWORK.
				AGENTWORK supports the definition, the execution and, as its main contribution, the event-oriented and semi-automated dynamic adaptation of workflows.
				Two strategies for automatic workflow adaptation are provided. Predictive adaptation adapts workflow parts affected by a failure in advance (predictively),
				typically as soon as the failure is detected. This is advantageous in many situations and gives enough time to meet organizational constraints for adapted workflow parts.
				Reactive adaptation is typically performed when predictive adaptation is not possible. In this case, adaptation is performed when the affected workflow part is to be executed, e.g.,
				before an activity is executed it is checked whether it is subject to a workflow adaptation such as dropping, postponement or replacement.
				In particular, the following contributions are provided by AGENTWORK.</p>
				<p>A Formal Model for Workflow Definition, Execution, and Estimation: In this context, AGENTWORK first provides an object-oriented workflow definition language.
				This language allows for the definition of a workflow's control and data flow. Furthermore, a workflow's cooperation with other workflows or workflow systems can be specified.
				Second, AGENTWORK provides a precise workflow execution model. This is necessary, as a running workflow usually is a complex collection of concurrent activities
				and data flow processes, and as failure situations and dynamic adaptations affect running workflows. Furthermore, mechanisms for the estimation
				of a workflow's future execution behavior are provided. These mechanisms are of particular importance for predictive adaptation.
				Mechanisms for Determining and Processing Failure Events and Failure Actions: AGENTWORK provides mechanisms to decide whether an event constitutes a failure situation
				and what has to be done to cope with this failure. This is formally achieved by evaluating event-condition-action rules where the eventcondition part describes
				under which condition an event has to be viewed as a failure event. The action part represents the necessary actions needed to cope with the failure.
				To support the temporal dimension of events and actions, this dissertation provides a novel event-condition-action model based on a temporal object-oriented logic.</p>
				<p>Mechanisms for the Adaptation of Affected Workflows: In case of failure situations it has to be decided how an affected workflow has to be dynamically adapted on
				the node and edge level. AGENTWORK provides a novel approach that combines the two principal strategies reactive adaptation and predictive adaptation.
				Depending on the context of the failure, the appropriate strategy is selected. Furthermore, control flow adaptation operators are provided which translate failure actions
				into structural control flow adaptations. Data flow operators adapt the data flow after a control flow adaptation, if necessary.</p>
				<p>Mechanisms for the Handling of Inter-Workflow Implications of Failure Situations: AGENTWORK provides novel mechanisms to decide whether a failure situation
				occurring to a workflow affects other workflows that communicate and cooperate with this workflow. In particular, AGENTWORK derives the temporal implications of a dynamic adaptation
				by estimating the duration that will be needed to process the changed workflow definition (in comparison with the original definition).
				Furthermore, qualitative implications of the dynamic change are determined. For this purpose, so-called quality measuring objects are introduced.</p>
				<p>All mechanisms provided by AGENTWORK include that users may interact during the failure handling process. In particular, the user has the possibility
				to reject or modify suggested workflow adaptations. A Prototypical Implementation: Finally, a prototypical CORBA-based implementation of AGENTWORK is described.
				This implementation supports the integration of AGENTWORK into the distributed and heterogeneous environments of real-world organizations such as hospitals
				or insurance business enterprises.</p>
				</li>
			</ul>
			
			<br/>
			<h2><a name="archetypes"></a>Publication on Archetypes</h2>
			<h3><a name="thesesanddisertations"></a>PhD Theses and other Dissertations about openEHR Archetypes</h3>
			<ul>
				<li>
				<p><h4>Towards Interoperable and Knowledge-Based Electronic Health Records Using Archetype Methodology (<a href="https://docs.google.com/open?id=0BywkVxKayXoSSVEzQVBHTWxMVzg">PDF</a>)</h4></p>
				<p><b>Rong Chen</b></p>
				<p><i>PhD thesis (som f&ouml;r avl&auml;ggande av filosofie doktorsexamen vid Link&ouml;pings universitet och tekniska h&ouml;gskola kommer att offentligt f&ouml;rsvaras i Eken, Campus
				US ing&aring;ng 65, Link&ouml;ping, torsdagen 5 november 2009, kl. 9.00)</i></p>
				<p><i>Abstract</i>: The use of Electronic Health Records (EHR) is wide spread
				in healthcare today. EHRs are not only used to support daily care but also used
				to support important secondary uses, e.g. clinical research, quality assurance
				and education. Although considered advantageous compared to paper-based records,
				EHRs still have a long way to go in realizing its full potential as an integral
				part of a safe, effective and efficient health care system.</p>
				<p>Making EHRs interoperable is a prerequisite to support increasingly distributed
				and diverse healthcare. Bringing up-to-date knowledge into EHRs for decision
				support is a critical step to foster evidence based care. EHR data from
				different sources need to be analyzed in research in order to find new evidence
				for improvement of the current practice. Knowledge in the form of guidelines
				needs to be disseminated and applied in practice through continuous education.</p>
				<p>This cyclic flow of information and knowledge between care, research and education
				must be facilitated in order to achieve a safer and more efficient healthcare.
				An interoperable EHR framework can facilitate the sharing of information and
				knowledge between not only human users but also participating software systems.
				This is the aim of this thesis, which is built upon the research in the field of
				semantic interoperability, in particular the pioneering work by the
				openEHR Foundation.</p>
				<p>The journey of this thesis started with a template-based supplementary EHR
				system - Julius, which allows clinicians to define and share record structures
				for care and research. The formalism behind Julius is comparable to the openEHR
				archetype formalism but less expressive and without the backing of international
				standards. This finding led to an open source implementation of the openEHR
				design, which in turn initiated the validation and further improvements of the
				archetype formalism. The software components made the archetype formalism more
				accessible to academic and commercial projects around the world. </pS>
				<p>The investigation of the convertibility between a legacy EHR content model and
				the archetype model showed that the archetype format is more expressive and thus
				can be used to preserve legacy EHR content definitions. A general strategy for
				migration from legacy EHRs to archetype-based EHRs was formulated. A novel way
				of representing clinical practice guidelines using archetype formalism was
				proposed and tested on a lymphoma chemotherapy guideline.</p>
				<p>The implication of this study is improved interoperability between guidelines
				and EHRs that could facilitate both clinical decision support and
				guideline-compliance checking. Maintainability of guidelines could be increased
				through reuse of EHR content models as building blocks of guidelines. In the
				last part of the research, a way of expressing fully structured care plans using
				openEHR and CONTsys has been explored based on the requirements for elderly home
				care. A sharable and semantically well-defined care plan could contribute to the
				coordination of shared care.</p>
				<p>The key contribution of the thesis can be summarized as the validation and
				further improvement of the openEHR archetype formalism through software
				implementation and the explorations on clinical guidelines, shared care plans
				and legacy EHR content models in relation to archetype-based EHR framework.</p>
				</li>

				<li>
				<p><h4>Introducing an openEHR-Based Electronic Health Record System in a Hospital (<a href="http://www.openehr.org/files/publications/archetypes/goek-masters-thesis_2008.pdf">PDF</a>)</h4></p>
				<p><b>Murat G&ouml;k</b></p>
				<p><i>Masters Thesis submitted to Department of Medical Informatics, University of G&ouml;ttingen, Germany, May 2008</i></p>
				<p><i>Abstract</i>: this thesis reports a case study of an openEHR
				system at the Emergency Department, Austin Health, Melbourne, and arose from the
				collaboration with Austin Health, the Austin Centre for Applied Clinical
				Informatics (ACACI), the Nursing Informatics Group, the Biomedical Engineering
				Department, the Emergency Department, the Central Queensland University Health
				Informatics Research Group, Ocean Informatics, and the Department of Medical
				Informatics (University of G&ouml;ttingen).</p>
				<p>The aim of this thesis is to provide a roadmap for the introduction of an
				electronic health record system based on the openEHR (http://www.openehr.org)
				approach for a health service within a public hospital in Australia. The idea
				of&nbsp; electronic health records (EHRs) was born approximately 40 years ago [GL96]
				and consequently several concepts were developed. One of these approaches is the
				&rdquo;Good European Health Record&rdquo; (GEHR) project on which the openEHR Foundation
				builds.</p>
				<p>Over time the openEHR approach has matured, however, there is still a lack of
				knowledge on how to introduce an openEHR-based system (implementation and
				migration strategies). To tackle this problem, the thesis gives an overview of
				the openEHR approach by presenting the history, architecture, and relations to
				other standards in electronic health care. The patient flow in an emergency
				department (ED) of a public hospital (Austin Health) is then analysed in regards
				to the information produced and documented. This thesis investigates how the
				data items in the ED can be gathered and mapped to openEHR archetypes, thus
				formally representing the clinical knowledge.&nbsp; The reusable archetypes cover
				more than 70% of all archetypes needed in the ED. This figure may vary for other
				departments. It also points at the development of openEHR templates (a
				combination of archetypes) through utilising mind maps. Using an example of a&nbsp;
				ventilation system, data can be migrated from proprietary systems and
				transferred to an openEHR-based data storage. An explanation is given for an
				openEHR architecture based EHR system, providing the foundation for the&nbsp;
				implementation of an openEHRbased prototype.</p>
				<p>The thesis shows how an openEHR architecture based EHR system can be introduced
				in practical terms and how this could lead to interoperability within a
				department.</p>
				</li>

				<li>
				<p><h4>Semantic Mapping Of Clinical Model Data To Biomedical Terminologies To Facilitate Interoperability
				(<a href="http://www.openehr.org/files/publications/archetypes/RQamar-PhD-Thesis-Mar2008.pdf">PDF</a>)</h4></p>
				<p><b>Rahil Qamar</b></p>
				<p><i>Submitted to the University of Manchester for the degree of Doctor of Philosophy
				in the Faculty of Engineering and Physical Sciences, Mar 2008, 
				Supervisor: Prof Alan Rector</i></p>
				<p><i>Abstract</i>: The thesis presents and evaluates, the Model
				<p>Standardisation using Terminology Systems (MoST) methodology, for integrating
				the clinical content in data models and terminology models. The MoST system
				developed for the purpose, aims to find semantically equivalent SNOMED
				terminology codes to map to archetype data model fragments. The two key stages
				of MoST include, (i) term finding, and (ii) data mapping. While the term finding
				procedure is&nbsp; completely automated, the data mapping procedure is assisted by
				clinical experts. The research recognises the significance of human intervention
				in ensuring the quality of the terminology codes being mapped to the data model
				fragments. Ensuring the quality of the mappings, helps maintain accuracy and
				unambiguity of coded data. The evaluation of the MoST system shows the
				importance of incorporating linguistic and semantic procedures, in addition to
				lexical lookups, to increase the chances of finding semantic matches. </p>
				<p>A significant contribution of the thesis is the description of the issues with
				current Archetype and SNOMED models with regards to the information needed to
				achieve effective model integration at content level. These issues were&nbsp;
				highlighted by the qualitative analysis of the evaluation. The issues point to
				semantic gaps in both the data and terminology models, which inhibit automated
				systems, such as MoST, from making intelligent inferences on the semantic
				appropriateness of the content. Suggestions for resolving these issues are
				detailed, where appropriate. A final contribution of the thesis is the set of
				guidelines that are suggested to the two modeling (Archetype and SNOMED)
				communities, to improve the quality of their model content. The hypothesis is
				that an increase in the content compatibility of the two models will increase
				the likelihood of the overall integration of the models, to achieve
				interoperability</p>
				</li>

				<li>
				<p><h4>Archetype based Domain Modelling for Health Information Systems
				(<a href="http://www.openehr.org/files/publications/archetypes/KorayAtalag-THESIS_Final.pdf">PDF</a>)</h4></p>
				<p><b>Koray Atalag</b></p>
				<p><i>Submitted to Department of Information Systems, Middle East Technical University (METU), July 2007, Supervisor: Prof. Dr. Semih Bilgen</i></p>
				<p><i>Abstract</i>: A major problem to be solved in health informatics is
				high quality, structured and timely data collection. Standard terminologies and
				uniform domain conceptual models are important steps to alleviate this problem
				which are also proposed to enable interoperability among systems. With the aim
				of contributing to the solution of this problem, this study proposes novel
				features for the Archetypes and multi-level modeling technique in health
				information and knowledge modeling. The study consists of the development of a
				research prototype for endoscopic data management, and based on that experience,
				the extension of Minimal Standard Terminology in Digestive Endoscopy (MST). </p>
				<p>A major contribution of the study consists of significant extensions to the
				modeling formalism. The proposed modeling approach may be used in the design and
				development of health information systems based on archetypes for structured
				data collection, validation and dynamic user interface creation. The thesis work
				is aimed to make considerable contribution to the emerging Electronic Health
				Records (EHR) standards and specifications.</p>
				</li>
			</ul>
			
			<h3><a name="paperscenopenehr"></a>Papers Specifically about openEHR/CEN Archetypes</h3>
			<h4>User Interface</h4>
			<ul>
				<li>
				<p><h4>Generic screen representations for future-proof systems, is it possible? There is more to a GUI than meets the eye.
				(<a href="http://www.ncbi.nlm.nih.gov/pubmed/19368989">PDF</a>)</h4></p>
				<p><b>Helma van der Linden</b>(a,&lowast;), <b>Tony Austin</b>(b), <b>Jan Talmon</b>(a)</p>
				<p><i>(a) School for Public Health and Primary Care: Caphri, Maastricht University, Maastricht, The Netherlands<br/>
				(b) CHIME, University College London, United Kingdom<br/>
				&lowast; Corresponding author at: Medical Informatics, Maastricht, University, POBOX 616, 6200 MD Maastricht, The Netherlands.<br/>
				pp213&ndash;226 Computer methods and programs in biomedicine 95 (2009)</i></p>
				<p><i>Abstract:</i></p>
				<p>Background: Future-proof EHR systems must be capable
				of interpreting information structures for medical concepts that were not
				available at the build-time of the system. The two-model approach of CEN
				13606/openEHR using archetypes achieves this by separating generic clinical
				knowledge from domain-related knowledge. The presentation of this information
				can either itself be generic, or require design time awareness of the domain
				knowledge being employed.</p>
				<p>Objective: To develop a Graphical User Interface (GUI)
				that would be capable of displaying previously unencountered clinical data
				structures in a meaningful way.</p>
				<p>Methods: Through &ldquo;reasoning by analogy&rdquo; we defined an
				approach for the representation and implementation of &ldquo;presentational
				knowledge&rdquo;. A proof-of-concept implementation was built to validate its
				implementability and to test for unanticipated issues.</p>
				<p>Results: A two-model approach to specifying and
				generating a screen representation for archetype-based information, inspired by
				the two-model approach of archetypes, was developed. There is a separation between software-related display knowledge and
				domain- related display knowledge and the toolkit is designed with the reuse of
				components in mind.</p>
				<p>Conclusions: The approach leads to a flexible GUI that
				can adapt not only to information structures that had not been predefined within
				the receiving system, but also to novel ways of displaying the information.We
				also found that, ideally, the openEHR Archetype Definition Language should
				receive minor adjustments to allow for generic binding.</p>
				<p>&copy; 2009 Elsevier Ireland Ltd. All rights reserved.</p>
				</li>
			</ul>
			
			<h4>Querying</h4>
			<ul>
				<li>
				<p><h4>EHR Query Language (EQL) &ndash; a query language for archetype-based health records.(<a href="http://www.openehr.org/files/publications/archetypes/MedInfo_2007_EQL_MA.pdf">PDF</a>)</h4></p>
				<p><b>Chunlan Ma, Heath Frankel, Thomas Beale, Sam Heard</b></p>
				<p><i>Ocean Informatics<br/>
				pp 397-401 Proceedings of MedInfo 2007, K. Kuhn et al. (Eds), IOS publishing, 2007.</i></p>
				<p><i>Abstract</i>: OpenEHR specifications have been developed to standardise
				the representation of an international electronic health record (EHR). The
				language used for querying EHR data is not as yet part of the specification. To
				fill in this gap, Ocean Informatics has developed a query language currently
				known as EHR Query Language (EQL), a declarative language supporting queries on
				EHR data. EQL is neutral to EHR systems, programming languages and system
				environments and depends only on the openEHR archetype model and semantics.</p>
				<p>Thus, in principle, EQL can be used in any archetype-based computational
				context. In the EHR context described here, particular queries&nbsp; mention concepts
				from the openEHR EHR Reference Model (RM). EQL can be used as a common query
				language for disparate archetype-based applications. The use of a common RM,
				archetypes, and a companion query language, such as EQL, semantic
				interoperability of EHR information is much closer. This paper introduces the
				EQL syntax&nbsp; and provides example clinical queries to illustrate the syntax.
				Finally, currentimplementations and future directions are outlined.</p>
				</li>
			</ul>
			
			<h4>Archetypes, Semantic Integration and Ontology</h4>
			<ul>
				<li>
				<p><h4>Archetype-based semantic mediation: Incremental provisioning of data services
				(<a href="http://www.dtic.upf.edu/~jbisbal/publications/Bisbal-155-CBMS2010.pdf">PDF</a>)</h4></p>
				<p><b>Jesus Bisbal, Gerhard Engelbrecht, and Alejandro Frangi</b></p>
				<p><i>CISTIB - Universitat Pompeu Fabra, and CIBER-BBN, Barcelona, Spain<br/>
				23RD IEEE International Symposium on Computer-Based Medical Systems
				(<a href="http://www.cbms2010.curtin.edu.au/">http://www.cbms2010.curtin.edu.au/</a>).</i></p>
				<p><i>Abstract:</i> Modern organizations need to exploit the information stored in heterogeneous and
				interrelated data sources, but often have no means to integrate them in a
				principled fashion. This general database research challenge is particularly
				relevant in distributed e-Science. Specifically, biomedical research generates a
				vast amount of heterogeneous data, which exceeds the current technological
				capacity to exploit it efficiently. </p>
				<p>Typically, service-oriented architectures
				are used in this context to define a unified view over all sources to be
				integrated. This unified schema needs to be mapped onto the underlying data
				sources, often including also semantic annotations. This approach suffers from
				high complexity and setup costs. In this paper we propose a novel application of
				semantic and mediation technologies, which leads to an incremental and on-demand
				definition of data mediation services. The so-called archetypes provide the
				context and semantics needed to setup such services, which significantly
				simplify their definition.
				</p>
				</li>
				
				<li>
				<p><h4>Combining OpenEHR archetype definitions with SWRL rules &ndash; a translation approach.
				(<a href="http://www.springerlink.com/content/k706u20xg1176042/">Springer link</a>)</h4></p>
				<p><b>Lezcano, L., Sicilia, M.A. and Serrano-Balazote, P.</b></p>
				<p><i>In Proceedings of the First World Summit on the Knowledge Society (WSKS'08),
				Springer Lecture Notes in Artificial Intelligence, 52880, pp. 80-89.</i></p>
				<p><i>Abstract:</i>The interoperability of electronic healthcare information systems is critical
				for a more effective healthcare management. Several specifications and standards
				have been created for facilitating such interoperability at different levels.
				Among them, the OpenEHR initiative emphasizes the sharing of flexible
				specifications of healthcare information pieces in the form of archetypes.
				However, the OpenEHR ADL language does not provide support for rules and
				inference which are important pieces of clinical knowledge. </p>
				<p>This paper reports
				on an approach to convert ADL definitions to OWL and then attach rules to the
				semantic version of the archetypes. This allows for an automated means to reuse
				knowledge expressed in the form of rules which is also flexible and follows the
				same philosophy of sharing archetypes.
				</p>
				</li>
			
				<li>
				<p><h4>Expressing Clinical Data Sets with openEHR Archetypes: A Solid Basis for Ubiquitous Computing.
				(<a href="http://dx.doi.org/10.1016/j.ijmedinf.2007.02.004">IJMI link</a>)</h4></p>
				<p><b>Garde S, Hovenga E, Buck J, Knaup P</b></p>
				<p><i>International Journal of Medical Informatics.&nbsp; 76 (S3): S334-S341.</i></p>
				<p><i>Abstract:</i></p>
				<p>Purpose: The purpose of this paper is to analyse the feasibility and
				usefulness of expressing clinical data sets (CDSs) as openEHR
				archetypes. For this, we present an approach to transform CDS into archetypes,
				and outline typical problems with CDS and analyse whether some of these problems
				can be overcome by the use of archetypes.</p>
				<p>Methods: Literature review and analysis of a selection of existing
				Australian, German, other European and international CDSs; transfer of a CDS for
				Paediatric Oncology into openEHR archetypes; implementation of CDSs in
				application systems.</p>
				<p>Results: To explore the feasibility of expressing CDS as archetypes an
				approach to transform existing CDSs into archetypes is presented in this paper.
				In case of the Paediatric Oncology CDS (which consists of 260 data items) this
				lead to the definition of 48 openEHR archetypes. To analyse the
				usefulness of expressing CDS as archetypes, we identified nine problems with CDS
				that currently remain unsolved without a common model underpinning the CDS.
				Typical problems include incompatible basic data types and overlapping and
				incompatible definitions of clinical content. A solution to most of these
				problems based on openEHR archetypes is motivated. With regard to
				integrity constraints, further research is required.</p>
				<p>Conclusions: While openEHR cannot overcome all barriers to
				Ubiquitous Computing, it can provide the common basis for ubiquitous presence of
				meaningful and computer-processable knowledge and information, which we believe
				is a basic requirement for Ubiquitous Computing. Expressing CDSs as
				openEHR archetypes is feasible and advantageous as it fosters semantic
				interoperability, supports ubiquitous computing, and helps to develop archetypes
				that are arguably of better quality than the original CDS.</p>
				</li>
				
				<li>
				<p><h4>Semantic Issues in Integrating Data from Different Models to Achieve Data Interoperability (<a href="http://www.openehr.org/files/publications/archetypes/Medinfo_2007_QamarRector.pdf">PDF</a>)</h4></p>
				<p><b>Rahil Qamar, Alan Rector </b></p>
				<p><i>Medical Informatics Group, University of Manchester, Manchester, U.K.<br/>
				pp 674-678 Proceedings of MedInfo 2007, K. Kuhn et al. (Eds), IOS publishing, 2007.</i></p>
				<p><i>Abstract:</i> Matching clinical data to codes in controlled
				terminologies is the first step towards achieving standardisation of data for
				safe and accurate data interoperability. The MoST automated system was used to
				generate a list of candidate SNOMED CT code mappings. The paper discusses the
				semantic issues which arose when generating&nbsp; lexical and semantic matches of
				terms from the archetype model to relevant SNOMED codes. It also discusses some
				of the solutions that were developed to address the issues.</p>
				<p>The aim of the paper
				is to highlight the need to be flexible when integrating data from two separate
				models. However, the paper also stresses that the context and semantics of the
				data in either model should be taken into consideration at all times to increase
				the chances of true positives andreduce the occurrence of false negatives.
				</p>
				</li>
				
				<li>
				<p><h4>Framework for Clinical Data Standardization Based on Archetypes (<a href="http://www.openehr.org/files/publications/archetypes/Medinfo_2007_JAM.pdf">PDF</a>)</h4></p>
				<p><b>Jose A. Maldonado</b> (a), <b>David Moner</b> (a), <b>Diego Tom&aacute;s</b> (a), <b>Carlos &Aacute;ngulo</b> (a), <b>Montserrat Robles</b> (a), <b>Jesualdo T. Fern&aacute;ndez</b> (b)</p>
				<p><i>(a) Biomedical Informatics Group, ITACA Institute, Technical University of Valencia, Spain<br/>
				(b) Departamento de Inform&aacute;tica y Sistemas, University of Murcia, Spain<br/>
				pp 454-458 Proceedings of MedInfo 2007, K. Kuhn et al. (Eds), IOS Press, 2007</i></p>
				<p><i>Abstract:</i>
				Standardization of data is a prerequisite to achieve
				semantic interoperability in any domain. This is even more important in the
				healthcare sector where the need for
				exchanging health related data among professional and institutions is not an
				exception but the rule. Currently, there are several international organizations
				working on the definition of electronic health record architectures, some of
				them based on a dual-model approach.</p>
				<p>We present both an archetype modeling framework and LinkEHR-ED, an archetype
				editor and mapping tool for transforming existing electronic healthcare data
				which do not conform to a particular electronic healthcare record architecture
				into compliant electronic health records extracts. In particular, archetypes in
				LinkEHR-ED are formal representations of clinical concepts built on a particular
				reference model but enriched with mapping information to data sources which
				define how to extract and transform&nbsp;existing data in order to generate
				standardized XML documents.</p>
				</li>
			
				<li>
				<p><h4>Exploiting ebXML registry semantic constructs for handling archetype metadata in healthcare informatics.
				(<a href="http://www.openehr.org/files/publications/archetypes/IJMSO_dogac_et_al_2006.pdf">PDF</a>)</h4></p>
				<p><b>Dogac, A., Laleci, G.B., Kabak, Y., Unal, S., Beale, T., Heard, S., Elkin, P.L., Najmi, F., Mattocks, C., Weber, D. and Kernberg, M.</b></p>
				<p><i>Int. J. Metadata, Semantics and Ontologies, Vol. 1, No. 1, pp.21&ndash;36.</i></p>
				</li>
				
				<li>
				<p><h4>Archetype-Based Semantic Integration and Standardization of Clinical Data.</h4></p>
				<p><b>Moner, D.&nbsp;&nbsp; Maldonado, J.A.&nbsp;&nbsp; Bosca, D.&nbsp;&nbsp; Fernandez, J.T.&nbsp;&nbsp; Angulo, C.&nbsp;&nbsp; Crespo, P.&nbsp;&nbsp; Vivancos, P.J.&nbsp;&nbsp; Robles, M.</b></p>
				<p><i>In: <a href="http://ieeexplore.ieee.org/xpl/RecentCon.jsp?punumber=4028925">Engineering
				in Medicine and Biology Society, 2006. EMBS '06. 28th Annual International Conference of the IEEE</a>. Aug. 2006. pp 5141-5144.</i></p>
				</li>
				
				<li>
				<p><h4>Integration of Tools for Binding Archetypes to SNOMED CT. 
				(<a href="http://www.hiww.org/smcs2006/proceedings/12SundvallSMCS2006final.pdf">PDF</a>)</h4></p>
				<p><b>Erik Sundvall, Rahil Qamar, Mikael Nystr&ouml;m, Mattias Forss, H&aring;kan Petersson, Hans &Aring;hlfeldt, Alan Rector.</b></p>
				<p><i>Semantic Mining Conference 2006.</i></p>
				</li>
			</ul>
			
			<h4>Archetypes and Governance</h4>
			<ul>
				<li>
				<p><h4>Towards Semantic Interoperability for Electronic Health Records: Domain Knowledge Governance for openEHR Archetypes.
				(<a href="http://healthinformatics.cqu.edu.au/downloads/Garde_openEHR_Methods_2007.pdf">PDF</a>)</h4></p>
				<p><b>Garde S, Knaup P, Hovenga EJS, Heard S</b></p>
				<p><i>Methods of Information in Medicine. 46(3): 332-343. (doi:10.1160/ME5001).</i></p>
				</li>
				
				<li>
				<p><h4>Nursing Constraint Models for Electronic Health Records: a vision for domain knowledge governance.
				(<a href="http://dx.doi.org/10.1016/j.ijmedinf.2005.07.013">PDF</a>)</h4></p>
				<p><b>Hovenga E, Garde S, Heard S</b></p>
				<p><i>Int J Med Inform. 74(11-12): pp886-898.</i></p>
				</li>
			</ul>
			
			<h4>Archetypes in Use</h4>
			<ul>
				<li>
				<p><h4>Importing Clinical Data into Electronic Health Records - Lessons Learnt from the First Australian GEHR Trials.
				(<a href="http://www.openehr.org/files/publications/archetypes/HIC2002_bird_goodchild_heard.pdf">PDF</a>)</h4></p>
				<p><b>Bird L, Goodchild A, Heard S</b></p>
				<p><i>Proceedings HIC 2002 conference.</i></p>
				</li>
				
				<li>
				<p><h4>Experiences with a Two-Level Modelling Approach to Electronic Health Records.
				(<a href="http://www.jrpit.acs.org.au/jrpit/JRPITVolumes/JRPIT35/JRPIT35.2.121.pdf">PDF</a>)</h4></p>
				<p><b>L. Bird, A. Goodchild, Z. Tun</b></p>
				<p><i>Journal of Research and Practice in Information Technology 35 (2003).</i></p>
				</li>
			</ul>
			
			<h4>Principles</h4>
			<ul>
				<li>
				<p><h4>Templates and Archetypes: how do we know what we are talking about?
				(<a href="http://www.openehr.org/files/publications/archetypes/templates_and_archetypes_heard_et_al.pdf">PDF</a>)</h4></p>
				<p><b>S. Heard, T. Beale, G. Freriks, A. Rossi-Mori, O. Pishev.</b></p>
				<p><i>HL7 internal paper, 2003.</i></p>
				</li>
				
				<li>
				<p><h4>Archetypes: Constraint-based domain models for future-proof information systems.
				(<a href="http://www.openehr.org/files/publications/archetypes/archetypes_beale_oopsla_2002.pdf">PDF</a>)</h4></p>
				<p><b>Beale T.</b></p>
				<p><i>In: Eleventh OOPSLA Workshop on Behavioral Semantics: Serving the Customer
				(Seattle, Washington, USA, November 4, 2002). Edited by Kenneth Baclawski and
				Haim Kilov. Northeastern University, Boston, 2002, pp. 16-32.</i></p>
				</li>
				
				<li>
				<p><h4>Archetypes - An Interoperable Knowledge Methodology for Future-proof Information Systems.
				(<a href="http://www.openehr.org/files/publications/archetypes/archetypes_beale_web_2000.pdf">PDF</a>)</h4></p>
				<p><b>Beale T.</b></p>
				<p><i>Published on the internet in 2000.</i></p>
				</li>
			</ul>
			
			
			<h3><a name="papersmentioning"></a>Papers and Theses mentioning archetypes</h3>
			<h4>Knowledge Engineering &amp; Use</h4>
			<ul>
				<li>
				<p><h4>Knowledge Mobilization: Architectures, Models and Applications 
				(<a href="http://hera.ugr.es/tesisugr/17611404.pdf">PDF</a>)</h4></p>
				<p><b>Juan G&oacute;mez Romero</b></p>
				<p><i>2008 Doctoral thesis, Universidad de Granada, Technical School of Engineering Informatics, Department of Science and Computing</i></p>
				<p>This thesis mentions openEHR archetypes in the context of mobilising knowledge in the health sector.</p>
				</li>
			</ul>
			
			<h3><a name="papersrelated"></a>Papers about related subjects</h3>
			<h4>Frame Logic (F-logic)</h4>
			<ul>
				<li>
				<p><h4>Logical Foundations of Object-Oriented and FrameBased Languages. (See <a href="http://www.cs.sunysb.edu/%7Ekifer/dood/papers.html">here</a> for link
				to PDF)</h4></p>
				<p><b>Kifer M, Lausen G, Wu J</b></p>
				<p><i>JACM May 1995.</i></p>
				<p>The Archetype cADL syntax and semantics are formally speaking a synthesis of F-logic queries with terminology (the node encoding).</p>
				</li>
			</ul>
			
			
			<br/>
			<h2><a name="healthict"></a>Publications on Health ICT</h2>
			<h3><a name="governanceandsustainability"></a>Governance and Sustainability</h3>
			<ul>
				<li>
				<p><h4>Towards Sustainability of Health Information Systems: How Can We Define, Measure and Achieve It?
				(<a href="http://www.openehr.org/files/publications/health_ict/Medinfo2007-sustainability-Garde.pdf">PDF</a>)</h4><p>
				<p><b>Sebastian Garde</b> (a, b), <b>Carola M. Hullina</b> (b), <b>Rong Chen</b> (c), <b>Thilo Schuler</b> (d), <b>Jana Gr&auml;nz</b> (a, e), <b>Petra Knaup</b> (f), <b>Evelyn J.S. Hovenga</b> (a)</p>
				<p><i>(a) Health Informatics Research Group, Central Queensland University, Melbourne VIC &amp; Rockhampton, QLD, Australia<br/>
				(b) Austin Centre for Applied Clinical Informatics, Austin Health, Heidelberg VIC, Australia<br/>
				(c) Department of Biomedical Engineering, Link&ouml;ping University, Sweden<br/>
				(d) Department of Medical Informatics, University of Freiburg, Germany<br/>
				(e) Faculty of Computer Science, University of Applied Sciences Ulm, Germany<br/>
				(f) Department of Medical Informatics, University of Heidelberg, Germany<br/>
				pp 1179-1183 Proceedings MedInfo 2007, K. Kuhn et al. (Eds), IOS Publishing 2007.</i></p>
				<p><i>Abstract:</i> Health information systems (HIS) in their current form
				are rarely sustainable. In order to sustain our health information systems and
				with it our health systems, we need to focus on defining and maintaining
				sustainable Health Information System building blocks or components. These
				components need to be easily updatable when clinical knowledge (or anything
				else) changes, easily adaptable when business requirements or processes change,
				and easily exchangeable when technology advances. One major prerequisite for
				this is that we need to be able to define and measure sustainability, so that it
				can become one of the major business drivers in HIS development.</p>
				<p>Therefore, this
				paper analyses general definitions and indicators for sustainability, and
				analyses their applicability to HIS. We find that general &lsquo;Emergy analysis&rsquo; is
				one possibility to measure sustainability for HIS. Based on this, we investigate
				major enablers and inhibitors to sustainability in a highlevel framework
				consisting of four pillars: clinical, technical, socio-technical, and
				political/business.
				</p>
				</li>
			</ul>
			
			<h3><a name="openehr"></a>openEHR</h3>
			<ul>
				<li>
				<p><h4>Towards a comprehensive electronic patient record to support an innovative individual care concept for premature
				infants using the openEHR approach (<a href="http://linkinghub.elsevier.com/retrieve/pii/S1386505609000380">Elsevier
				pub site</a>)</h4><p>
				<p><b>Buck J, Garde S, Kohl C, Knaup-Gregori P</b></p>
				<p><i>International Journal of Medical Informatics. 78(8): 521-531, 2009</i></p>
				</li>
				
				<li>
				<p><h4>Graphical Overview and Navigation of Electronic Health Records in a prototyping environment using Google Earth and openEHR
				Archetypes (<a href="http://www.openehr.org/files/publications/health_ict/MedInfo2007-graphicalEHR-Sundvall.pdf">PDF</a>)</h4><p>
				<p><b>Erik Sundvall, Mikael Nystr&ouml;m, Mattias Forss, Rong Chen, H&aring;kan Petersson, Hans &Aring;hlfeldt</b></p>
				<p><i>Link&ouml;ping University, Sweden<br/>
				pp1043-1047 Proceedings MedInfo 2007, K. Kuhn et al. (Eds), IOS Publishing 2007.</i></p>
				<p><i>Abstract:</i> This paper describes selected earlier approaches to
				graphically relating events to each other and to time; some new combinations are
				also suggested. These are then combined into a unified prototyping environment
				for visualization and navigation of electronic health records. Google Earth (GE)
				is used for handling display and interaction of clinical information stored
				using openEHR data structures and &lsquo;archetypes&rsquo;. The strength of the approach
				comes from GE&rsquo;s sophisticated handling of detail levels, from coarse overviews
				to fine-grained details that has been combined with linear, polar and
				region-based views of clinical events related to time. The system should be easy
				to learn since all the visualization styles can use the same navigation.</p>
				<p>The structured and multifaceted approach to handling time that is possible with
				archetyped openEHR data lends itself well to visualizing and integration with
				openEHR components is provided in the environment.</p>
				</li>
				
				<li>
				<p><h4>The openEHR Java Reference Implementation Project (<a href="http://www.openehr.org/files/publications/health_ict/Medinfo2007-openehr_java-ChenKlein.pdf">PDF</a>)</h4><p>
				<p><b>Rong Chen</b> (a), <b>Gunnar O Klein</b> (b)</p>
				<p><i>(a) Department of Biomedical Engineering, Link&ouml;ping University, Sweden<br/>
				(b) Department of Medicine, Karolinska Institutet, Sweden
				pp 58-62 Proceedings MedInfo 2007, K. Kuhn et al. (Eds), IOS Publishing 2007
				</i></p>
				<p><i>Abstract:</i> The openEHR foundation has developed an innovative design
				for interoperable and future-proof Electronic Health Record (EHR) systems based
				on a dual model&nbsp; approach with a stable reference information model complemented
				by archetypes for specific clinical purposes.</p>
				<p>A team from Sweden has implemented all the stable&nbsp;specifications in the Java
				programming language and donated the source code to the openEHR foundation. It
				was adopted as the openEHR Java Reference Implementation in March 2005 and
				released under open source licenses. This encourages early EHR implementation
				projects around the world and a number of groups have already started to use
				this code.</p>
				<p>The early Java implementation experience has also led to the publication of the
				openEHR Java Implementation Technology Specification. A number of design changes
				to the specifications and important minor corrections have been directly
				initiated by the implementation project over the last two years. The Java
				Implementation has been important for the validation and improvement of the
				openEHR design specifications and provides building blocks for future EHR
				systems.
				</p>
				</li>
				
				<li>
				<p><h4>Generic screen representations for future proof systems</h4><p>
				<p><b>Helma van der Linden</b> (a), <b>Thilo Schuler </b>(b), <b>Rong Chen</b> (c), <b>Jan Talmon</b> (a)</p>
				<p><i>(a) Medical Informatics, University Maastricht, The Netherlands<br/>
				(b) Department of Medical Informatics, University of Freiburg, Germany<br/>
				(c) Department of Biomedical Engineering, Link&ouml;ping University, Sweden<br/>
				Proceedings MedInfo 2007, K. Kuhn et al. (Eds), IOS Publishing 2007. (PDF)</i></p>
				<p><i>Abstract:</i> Semantic interoperability should not only cover system
				interpretation of incoming information, but should be extended to include screen
				representation. This article describes a two-model approach to generate a screen
				representation for archetype-based information, which is inspired by the
				two-model approach used by openEHR for their archetypes. It provides a
				separation between software-related display knowledge and domain-related display
				knowledge and is designed with reuse of components in mind. </p>
				<p>This approach leads
				to a flexible GUI that can adapt not only to information structures that are not
				predefined within the receiving system and display them in a meaningful way, but
				also to novel ways of displaying the in-formation.We are working on a proof of
				concept implementation to vali-date the approach.
				</p>
				</li>
				
				<li>
				<p><h4>Julius &ndash; a template based supplementary electronic health record system (<a href="http://www.biomedcentral.com/1472-6947/7/10">Biomed
				Central link</a>)</h4><p>
				<p><b>Rong Chen, G&ouml;sta Enberg, Gunnar O Klein</b></p>
				<p><i>BMC Medical Informatics and Decision Making 2007,<br/>
				7:10 doi:10.1186/1472-6947-7-10</i></p>
				</li>
			</ul>
			
			<h3><a name="regionalhealth"></a>Regional Health</h3>
			<ul>
				<li>
				<p><h4>Regional Health Economies and ICT Services: the PICNIC Experience (<a href="http://www.iospress.nl/loadtop/load.php?isbn=158603538x">IOS
				Press page for this book</a>)</h4><p>
				<p><b>Niilo Saranummi, David Piggott, DG Katehakis, M Tsiknakis, Knut Bernstein (Eds.)<br/>
				Includes a chapter by Dipak Kalra, Thomas Beale, Sam Heard on openEHR.</b></p>
				<p><i>Volume 115 in Health Technology and Informatics series. IOS Press 2005.</i></p>
				</li>
			</ul>
			
			<h3><a name="architecture"></a>Health Information System Architecture</h3>
			<ul>
				<li>
				<p><h4>A flexible model for the delivery of multi-facet information in patient&ndash;centric Healthcare Information Systems
				(<a href="http://www.ejeta.org/specialMay07-issue/ejeta-special-07may-3.pdf">PDF pub link</a>)</h4><p>
				<p><b>Iraklis Varlamis (varlamis AT aueb.gr)</b></p>
				<p><i>Athens University of Economics and Business, Department of Computer Science<br/>
				published in eJETA.org
				<a href="http://www.ejeta.org/specialMay07-issue.php">Special Issue</a> on
				Interoperability &amp; Security in Medical Information Systems, May 2007</i></p>
				<p><i>Abstract:</i>  This paper suggests a new approach for the development of
				healthcare information standards, which is based on widely used and open
				frameworks. The paper attempts a review of existing standards for healthcare
				information, analyses their deficiencies and focuses on the need for
				interoperability. Healthcare information, in order to be useful, has to be well
				formed, valid and flexible. Healthcare information standards are the
				pre-requisites for well-formed ness and validity of information. Flexibility
				expects "plug-and-play" information, which will be operable in any system, any
				time and any place. A standard that will be accepted world-wide and will cover
				all possible aspects of healthcare information needs sounds both infeasible and
				inconvenient due to its size and complexity. A more practicable solution is to
				provide an interconnection mechanism on top of all existing and future
				standards. This work specifies the two fundamental problems of information
				interoperability, which are structure and semantics, and suggests a mechanism
				that facilitates the integration of existing information, the mutation and
				transfer of information between healthcare information systems and eases
				interoperability.</p>
				</li>
			</ul>
			
			<h3><a name="healthrecords"></a>Health Records</h3>
			<ul>
				<li>
				<p><h4>An Ontology-based Model of Clinical Information</em></strong>. 
				(<a href="http://www.openehr.org/files/publications/health_ict/MedInfo2007-BealeHeard.pdf">PDF</a>)</h4><p>
				<p><b>Thomas Beale</b> (a), <b>Sam Heard</b> (b)</p>
				<p><i>
				(a) CTO Ocean Informatics, visiting Senior Research Fellow, University College London<br/>
				(b) CEO Ocean Informatics, Adjunct Professor, University Central Queensland<br/>
				pp 760-764 Proceedings MedInfo 2007, K. Kuhn et al. (Eds), IOS Publishing 2007.</i></p>
				<p><i>Abstract:</i> In this paper we describe a model of clinical information
				designed to make health information systems properly interoperable and safely
				computable. The model is a response to a number of categories of requirements,
				ranging from the semantic to the performance of software at runtime. We argue
				that the starting point of a successful model must be an ontological analysis of
				the process of clinical care delivery, seen as a scientific problem-solving
				process. From this approach we develop a classification of types of clinical
				information called the Clinical InvestigatorRecord (CIR) ontology.</p>
				</li>
				
				<li>
				<p><h4>PhD thesis: Clinical foundations and information architecture for the implementation of a federated health record service
				(<a href="http://eprints.ucl.ac.uk/archive/00001584/">UCL ePrints link</a> - includes abstract)</h4><p>
				<p><b>Dipak Kalra</b></p>
				<p><i>UCL (University College London) deposited 24 January 2006</i></p>
				</li>
				
				<li>
				<p><h4>Person-Centered Health Records - Toward HealthePeople
				(<a href="http://www.springer.com/west/home/public+health/health+administration+?SGWID=4-40471-22-34953411-detailsPage=ppmmedia%7Ctoc">Springer
				page for this book</a>)</h4><p>
				<p><b>Jim E Demetriades, Robert M Kolodner, Gary A Christopherson (Eds.)</b></p>
				<p><i>Springer 2005.<br/>
				Includes a chapter by Ken Rubin, Thomas Beale, Bernd Blobel on Modelling for Health Care.</i></p>
				</li>
				
				<li>
				<p><h4>Electronic Health Records and Communication for Better Health Care
				(<a href="http://www.iospress.nl/loadtop/load.php?isbn=1586032534">IOS Press page for this book</a>)</h4><p>
				<p><b>Fran&ccedil;ois Mennerat (Ed.)<br/>
				Includes a chapter by Dipak Kalra, Thomas Beale, Sam Heard on openEHR.</b></p>
				<p><i>IOS Press 2002.</i></p>
				</li>
				
				<li>
				<p><h4>Design and Implementation of a Federated Health Record Server (<a href="http://www.openehr.org/files/publications/health_ict/UCL-TEHRE01-Reprint.pdf">PDF</a>)</h4><p>
				<p><b>Kalra D</b> (a), <b>Austin A</b> (a), <b>O&rsquo;Connor A</b> (a), <b>Lloyd D</b> (a), <b>Patterson D</b> (b), <b>Ingram D</b> (a)</p>
				<p><i>(a) University College London, CHIME, Holborn Union Building, Highgate Hill, London, N19 3UA<br/>
				(b) The Whittington Hospital, Highgate Hill, London N19 5NF<br/>
				Reprinted from: TEHRE 2001 m-Health Conference Proceedings; Paper 001 11-14 November 2001 Page 1
				</i></p>
				</li>
			</ul>
		</div>
			

	</div>

	<div id="BottomMenu">
	<?php include '../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
	<?php include '../panel/bottompanel.php' ?>
	</div>

</div>
	
<?php include '../panel/scriptpanel.php' ?>

</body>

</html>