<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title>openEHR - Who is using openEHR?</title>
	<?php include 'panel/headpanel.php' ?>
</head>


<body>
<div id="MainFrame">
	
	<div id="TopPanel">
		<?php include 'panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu">
	
		<div class="nav">
			<?php include 'menu/topmenu.php' ?>
		</div>
		
	</div> 

	<div id="MainArea" style=" margin-left:30px; width:900px; height:5850px;">
	
		<div id="TextArea" style="left:0px; width:900px; height:5850px;">
		
			<h1>Who is using openEHR?</h1>
			
			<h2><a name="providers"></a>Healthcare Providers and Authorities</h2>
			<p>The following&nbsp; table indicates known current and contracted future deployments of openEHR solutions into production healthcare 
			delivery settings and operational secondary use contexts, including medical research and public health. 
			Please <a href="about/contacts">contact us</a>, to notify of other openEHR deployments.</p>
			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT"><p>Country</p></th>
				<th class="TableMainT"><p>Provider/authority</p></th>
				<th class="TableMainT"><p>Description</p></th>
				<th class="TableMainT"><p>Vendor(s)</p></th>
				<th class="TableMainT"><p>Status</p></th>
			</tr>
			<tr>
				<td class="TableMainC" rowspan="4"><p><img width="80px" alt="australia_flag" title="australia_flag" src="files/basic/australia.gif"></p><p>Australia</p></td>
				<td class="TableMainC"><a href="http://www.health.qld.gov.au/">Queensland Health</a><br/>Australian state health authority responsible for the providing public health 4.5m consumers; Centre for Healthcare Related Infection Surveillance and Prevention (CHRISP)</td>
				<td class="TableMainC">Infection Control system, Multiprac, for 22 large hospitals in Queensland based on the Ocean OceanEHR platform</td>
				<td class="TableMainC"><a href="http://www.oceaninformatics.com/">Ocean Informatics, Australia</a></td>
				<td class="TableMainC">Deployed Aug 2012</td>
			</tr>
			<tr>
				<td class="TableMainC"><a href="http://www.health.nt.gov.au/">Northern Territory Health</a><br/>Australian state health authority responsible for the providing public health 233,000 consumers</td>
				<td class="TableMainC">Shared Electronic Health record for over 50,000 remote indigenous people in the NT and other states in Australia</td>
				<td class="TableMainC"><a href="http://www.oceaninformatics.com/">Ocean Informatics, Australia</a><br/><br/><a href="http://dialog.com.au/">Dialog Information Technology, Australia</a></td>
				<td class="TableMainC">Deployed October 2012</td>
			</tr>
			<tr>
				<td class="TableMainC"><a href="http://www.sath.org.au/">St Andrews Hospital Toowoomba, Queensland, Australia</a><br/>Regional private hospital</td>
				<td class="TableMainC">Multiprac Infection Control and Staff Health system based on the Ocean OceanEHR platform</td>
				<td class="TableMainC"><a href="http://www.oceaninformatics.com/">Ocean Informatics, Australia</a></td>
				<td class="TableMainC">Deployed June 2012</td>
			</tr>
			<tr>
				<td class="TableMainC"><a href="http://hsnph.org.au/about-us/welcome/">St Vincents Holy Spirit Hospital, Brisbane, Australia</a><br/>Large private 225 bed hospital</td>
				<td class="TableMainC">Multiprac Infection Control and Staff Health system based on the Ocean OceanEHR platform</td>
				<td class="TableMainC"><a href="http://www.oceaninformatics.com/">Ocean Informatics, Australia</a></td>
				<td class="TableMainC">Deployed December 2012</td>
			</tr>
			<tr>
				<td class="TableMainC" rowspan="2"><p><img width="80px" alt="brazil_flag" title="brazil_flag" src="files/basic/brazil_S.gif"></p><p>Brazil</p></td>
				<td class="TableMainC">Around 3,000 health professionals including doctors (primarily ophthalmologists - Brazilian College of Ophthalmologists), physiotherapists, nurses and receptionists.</td>
				<td class="TableMainC">Web-based ambulatory care EHR system</td>
				<td class="TableMainC"><a href="http://www.p2d.com.br/">P2D, Brazil</a></td>
				<td class="TableMainC">Deployed Feb 2012</td>
			</tr>
			<tr>
				<td class="TableMainC"><a href="http://www.spasaude.org.br/">SPAsaude health plan</a><br/>Boa Esperan&ccedil;a, S&atilde;o Paulo</td>
				<td class="TableMainC">Web-based ambulatory care system for chronic care management</td>
				<td class="TableMainC"><a href="http://ricardoquintano.wix.com/ezvida/">ezVida, Brazil</a></td>
				<td class="TableMainC">Deployed June 2012</td>
			</tr>
			<tr>
				<td class="TableMainC" rowspan="3"><p><img width="80px" alt="netherlands_flag" title="netherlands_flag" src="files/basic/netherlands.gif"></p><p>The Netherlands</p></td>
				<td class="TableMainC"><a href="http://www.ggznhn.nl">GGZ Noord Holland Noord</a><br/>Mental health organisation</td>
				<td class="TableMainC">MedPlus24 medication viewer (openEHR 1.0.2), to view all prescribed medication for a specific patient. The information 
				is digitally collected from all the surrounding city pharmacies in the region.</td>
				<td class="TableMainC"><a href="http://www.code24.nl/">Code24, The Netherlands</a></td>
				<td class="TableMainC">Deployed April 2011</td>
			</tr>
			<tr>
				<td class="TableMainC"><a href="http://www.ggzfriesland.nl">GGZ Friesland</a><br/>Mental health organisation</td>
				<td class="TableMainC">mConsole &amp; Base24 EHR solution (openEHR 1.0.2), where Base24 is used as an integrated database which links the patient portal and several other 
				3rd party systems directly with the EHR. Patients and care providers work seamlessly with the same data.</td>
				<td class="TableMainC"><a href="http://www.code24.nl/">Code24, The Netherlands</a></td>
				<td class="TableMainC">Deployed August 2011</td>
			</tr>
			<tr>
				<td class="TableMainC"><a href="http://www.rkz.nl">Rode Kruis Ziekenhuis</a><br/>Hospital</td>
				<td class="TableMainC">BeterVerwijzen a digital referral system (openEHR 1.0.2), where a home physician is able to make an electronic referral which is managed 
				and processed in combination the EHR.</td>
				<td class="TableMainC"><a href="http://www.code24.nl/">Code24, The Netherlands</a></td>
				<td class="TableMainC">Deployed November 2011</td>
			</tr>
				<td class="TableMainC" rowspan="1"><p><img width="80px" alt="portugal_flag" title="portugal_flag" src="files/basic/portugal_flag.jpg"></p><p>Portugal</p></td>
				<td class="TableMainC"><a href="http://www.idealmed.pt/index.php/en/idealmed/uhc-unidade-hospitalar-de-coimbra#/como-chegar">IdealMed, Coimbra, Portugal</a><br/>Large private hospital covering all medical specialties and settings including inpatient, outpatient, surgery, emergency, Medical Training, Clinical Research and Clinical Trials</td>
				<td class="TableMainC">Clinical Repository &amp; Clinical Trials Management System</td>
				<td class="TableMainC"><a href="http://solutions.criticalsoftware.com/health/">Critical Software S.A., Portugal</a></td>
				<td class="TableMainC">Deployed May 2011</td>
			</tr>
			<tr>
				<td class="TableMainC" rowspan="4"><p><img width="80px" alt="russia_flag" title="russia_flag" src="files/basic/Flag_of_Russia.svg.png"></p><p>Russia</p></td>
				<td class="TableMainC"><a href="http://www.mos.ru/en/authority/dit/">Moscow City Department of Information Technologies</a><br/>Authority responsible for e-health solutions for Moscow's 12 million, and 130,000 users in 780 facilities.</td>
				<td class="TableMainC">The Integrated Medical Information System (SIMI) project will centralise electronic health records for Moscow, including all primary health centres and city hospitals</td>
				<td class="TableMainC">Prime: <a href="http://www.ibs.ru/">IBS, Moscow</a><br/>
					EHR platform: <a href="http://www.marand-thinkmed.com/">Marand (Slovenia)</a><br/>
					Clinical apps: <a href="http://www.infinnity.ru/">Infinnity (Russia)</a><br/>
					Clinical strategy &amp; tooling: <a href="http://www.oceaninformatics.com">Ocean Informatics UK</a><br/>
					IHE/XDS: <a href="http://www.forcare.nl/">Forcare (Netherlands)</a></td>
				<td class="TableMainC">Pilot phase contracted; deployment during 2013</td>
			</tr>
			<tr>
				<td class="TableMainC"><em>Clinic of Chelyabinsk Medical Academy</em><br/>572 beds, 196 physicians, 386 staff in total</td>
				<td class="TableMainC">openEHR-based EHR system covering specialities including Infectious Diseases, Reanimation and Intensive Care, Surgery (including Cardio and Emergency departments), Gyneacology, Neurology, Obstetrics etc.</td>
				<td class="TableMainC"><a href="http://www.infinnity.ru/">Infinnity (Russia)</a></td>
				<td class="TableMainC">Deployed late 2012</td>
			</tr>
			<tr>
				<td class="TableMainC"><em>Federal Medical Biological Agency of Trekhgorny, Chelyabinskaya oblast</em><br/>403 beds, 119 physicians<br/>
				<em>Federal Medical Biological Agency of Chelyabinsk, Radiation Rehabilitation Center</em></br>200 beds, 36 physicians, 76 staff in total</td>
				<td class="TableMainC">openEHR-based EHR system covering specialities including Infectious Diseases, Reanimation and Intensive Care, Surgery (including Cardio and Emergency departments), Gyneacology, Neurology, Obstetrics etc.</td>
				<td class="TableMainC"><a href="http://www.infinnity.ru/">Infinnity (Russia)</a></td>
				<td class="TableMainC">Deployed 2012</td>
			</tr>
			<tr>
				<td class="TableMainC"><em>Russian Railways Medical Center, Chelyabinsk, Department of Southern Urals</em><br/>630 beds, 700 physicians, 1500 of staff in total</td>
				<td class="TableMainC">openEHR-based EHR system covering specialities including Infectious Diseases, Reanimation and Intensive Care, Surgery (including Cardio and Emergency departments), Gyneacology, Neurology, Obstetrics etc.</td>
				<td class="TableMainC"><a href="http://www.infinnity.ru/">Infinnity (Russia)</a></td>
				<td class="TableMainC">Deployed 2011</td>
			</tr>
			<tr>
				<td class="TableMainC" rowspan="1"><p><img width="80px" alt="slovenia_flag" title="slovenia_flag" src="files/basic/slovenia.gif"></p><p>Slovenia</p></td>
				<td class="TableMainC"><a href="http://www4.kclj.si/ang/index.php">University Medical Center Ljubljana, Slovenia</a><br/>UMCL is a tertiary care institution covering all medical specialties with more that 2,000 beds and 7,500 employees including 1,200 physicians.</td>
				<td class="TableMainC">The Children's Hospital has been using Think!Med Clinical for two years. The system is being expanded to other departments such as Radiology, Nuclear Medicine, Cardio Surgery and Infectious Diseases.</td>
				<td class="TableMainC"><a href="http://www.marand-thinkmed.com/">Marand, Slovenia</a></td>
				<td class="TableMainC">Deployed April 2011</td>
			</tr>
			</tbody>
			</table>
			<br/><br/>


			<h2><a name="research_projects"></a>Funded Research Projects</h2>
			<p>The following&nbsp; table indicates known funded research projects using openEHR. Please <a href="about/contacts">contact us</a>, to notify of other projects.</p>
			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT"><p>Location</p></th>
				<th class="TableMainT"><p>Project</p></th>
				<th class="TableMainT"><p>Description</p></th>
				<th class="TableMainT"><p>Vendor(s) / consortium</p></th>
				<th class="TableMainT"><p>Status</p></th>
			</tr>
			<tr>
				<td class="TableMainC" rowspan="2"><p><img width="80px" alt="eu_flag" title="eu_flag" src="files/basic/Flag_of_Europe.svg.png"></p><p>European Union</p></td>
				<td class="TableMainC"><a href="http://www.chiron-project.eu/">CHIRON</a><br/>Integrated Healthcare approach for home, mobile and clinical environments.<br/>
				CHIRON is a European Research Project co-financed by the ARTEMIS Joint Undertaking (call 2009 – Artemis Sub-program ASP2: Person-centric Healthcare).<br/>
				27 partners.</td>
				<td class="TableMainC">The CHIRON project intends to combine state-of-the art technologies and innovative solutions into an integrated framework designed for an 
				effective and person-centric health management along the complete care cycle. Will monitor 100 patients with atrial fibrillation during 2013.</td>
				<td class="TableMainC"><a href="http://www.medvision360.com/?lang=en">MedVision360 (Zorg Gemak), Netherlands</a></td>
				<td class="TableMainC">March 2010 - end 2013</td>
			</tr>
			<tr>
				<td class="TableMainC"><a href="http://www.mobiguide-project.eu/">MOBIGUIDE</a><br/>MobiGuide (FP7-287811) is a supported project under the European 
				Commission Seventh Framework Programme (2007-2013).<br/>
				13 partners.</td>
				<td>The aim of the MobiGuide project is to develop an intelligent decision-support system for patients with chronic illnesses. The system accompanies 
				the patients wherever they go and helps them and their care providers in managing their illness,
				whether they are at home, at work, out and about or travelling abroad on holiday or for business.</td>
				<td class="TableMainC"><a href="http://www.medvision360.com/?lang=en">MedVision360 (Zorg Gemak), Netherlands</a></td>
				<td class="TableMainC">ends 2013</td>
			</tr>
			</tbody>
			</table>
			<br/><br/>


			<h2><a name="nonprofit"></a>Non-profit and Open Source Organisations using openEHR</h2>
			<p>If you are using openEHR in a non-profit, standards or similar organisation, and would like to be included on this list, or you want to submit updates or corrections, then <a href="about/contacts">contact us</a>.</p>
			<br/>
			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT"><p>Organisation</p></th>
				<th class="TableMainT"><p>Team/Contacts</p></th>
				<th class="TableMainT"><p>Description</p></th>
			</tr>
			<tr>
				<td class="TableMainC"><img alt="clinical_templates_logo" title="clinical_templates_logo" src="files/basic/clinical_templates_logo.png"><br/><br/>
				<a href="http://www.clinicaltemplates.org">ClinicalTemplates.org</a></td>
				<td class="TableMainC">Derek Hoy</td>
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
				<td class="TableMainC"><a href="http://code.google.com/p/open-ehr-gen-framework/"><img alt="openEHRgen_logo" title="openEHRgen_logo" src="files/basic/openEHRgen_logo.png"></a></td>
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


			<h2><a name="governments"></a>Governments</h2>
			<p>The following&nbsp; table indicates use or interest in openEHR known to the openEHR Foundation. Other governments may be using it. If any government or other jurisdictional entity wants to be added to this list please <a href="about/contacts">contact us</a>, since it enables potential users to find out more about openEHR from a user perspective.</p>
			<br/>

			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT"><p>Country</p></th>
				<th class="TableMainT"><p>Entity</p></th>
				<th class="TableMainT"><p>Usage</p></th>
			</tr>
			<tr>
				<td class="TableMainC" rowspan="3"><p><img width="80px" alt="australia_flag" title="australia_flag" src="files/basic/australia.gif"></p><p>Australia</p></td>
				<td class="TableMainC">NeHTA (National e-Health Transition Authority)</td>
				<td class="TableMainC">Clinical data modelling based on openEHR methodology. Use of transformation from openEHR models to CDA schemas.</td>
			</tr>
			<tr>
				<td class="TableMainC">Queensland Health</td>
				<td class="TableMainC">An openEHR-based repository has been running at Qld Health for about 3 years, managing discharge summaries.</td>
			</tr>
			<tr>
				<td class="TableMainC">Victoria Health</td>
				<td class="TableMainC">Various projects including the state cancer registry are using or will use openEHR.</td>
			</tr>
			<tr>
				<td class="TableMainC" rowspan="2"><p><img width="80px" alt="brazil_flag" title="brazil_flag" src="files/basic/brazil_S.gif"></p><p>Brazil</p></td>
				<td class="TableMainC">Ministry of Health / various government agencies</td>
				<td class="TableMainC">In Brazil some Health Informatics companies are learning and developing archetype-based systems, as they reckon the value of archetypes for representing health knowledge. Also, some of the Brazilian Government Agencies intend to embody archetypes as part of their technological arsenal, as is the case of the Brazilian Suplementary Health Agency (ANS), responsible for regulating the Health Plan market. The Technical Committee on Health Informatics of the Brazilian Standards Association (ABNT) now a "P" member of ISO, has recently joined the work that can eventually lead to archetypes becoming an ISO standard.</td>
			</tr>
			<tr>
				<td class="TableMainC">Brazilian Agency for Supplementary Health<br/>State University of Rio de Janeiro</td>
				<td class="TableMainC">The Brazilian Agency for Supplementary Health (ANS) established a national standard to support the exchange of information among health providers and health care insurance companies. This standard, called (TISS in Portuguese), was conceived as a traditional message exchange standard. This project aims at designing archetypes that could be used to carry all information represented in TISS. It also aims at implementing a prototype software that will use openEHR reference model to exchange TISS information. This proof of concept will show an alternative way of implementing TISS that could be more effective in dealing with the standard evolution.</td>
			</tr>
			<tr>
				<td class="TableMainC"><p><img width="80px" alt="chile_flag" title="chile_flag" src="files/basic/chile.gif"></p><p>Chile</p></td>
				<td class="TableMainC">Ministry of Health</td>
				<td class="TableMainC">Interest in openEHR as basis for EHR communication, interest from some providers.</td>
			</tr>
			<tr>
				<td class="TableMainC" rowspan="2"><p><img width="80px" alt="denmark_flag" title="denmark_flag" src="files/basic/denmark.gif"></p><p>Denmark</p></td>
				<td class="TableMainC">Connected Digital <br/>Health in Denmark</td>
				<td class="TableMainC">National proof-of-concept project.</td>
			</tr>
			<tr>
				<td class="TableMainC">Various Danish<br/> regions</td>
				<td class="TableMainC">Evaluation of archetype methodology in progress 2008/9.</td>
			</tr>
			<tr>
				<td class="TableMainC"><p><img width="80px" alt="netherlands_flag" title="netherlands_flag" src="files/basic/netherlands.gif"></p><p>Netherlands</p></td>
				<td class="TableMainC">TNO (national <br/>research agency)</td>
				<td class="TableMainC">TNO is using openEHR archetypes and templates in a diabetic management project. A number of companies are evaluating the approach with a view to implementation.</td>
			</tr>
			<tr>
				<td class="TableMainC"><p><img width="80px" alt="slovakia_flag" title="slovakia_flag" src="files/basic/slovakia.gif"> </p><p>Slovakia</p></td>
				<td class="TableMainC">Ministry of Health</td>
				<td class="TableMainC">Invited presentation by openEHR to government, 2007. MoH &euro;32m contract awarded to consortium using openEHR in 2010. 
				National CKM established in 2012.</td>
			</tr>
			<tr>
				<td class="TableMainC"><p><img width="80px" alt="slovenia_flag" title="slovenia_flag" src="files/basic/slovenia.gif"> </p><p>Slovenia</p></td>
				<td class="TableMainC">Ministry of Health</td>
				<td class="TableMainC">Invited presentation by openEHR to government, 2007, 2010, 2011.</td>
			</tr>
			<tr>
				<td class="TableMainC"><p><img width="80px" alt="sweden_flag" title="sweden_flag" src="files/basic/sweden_S.gif"></p><p>Sweden</p></td>
				<td class="TableMainC">Sveriges Kommuner ock Landsting <br/>(Swedish Association of Local Authorities and Regions)</td>
				<td class="TableMainC">Adoption of openEHR 2009. The Swedish government has decided on the use of ISO 13606 as a base standard for national health data communication. openEHR will be used to define clinical models, terminology integration, and to implement 13606 in some contexts.</td>
			</tr>
			<tr>
				<td class="TableMainC" rowspan="2"><p><img width="80px" alt="uk_flag" title="uk_flag" src="files/basic/uk_S.gif"></p><p>UK</p></td>
				<td class="TableMainC">National Health <br/>Service (NHS)<br/>Connecting for <br/>Health (CFH)</td>
				<td class="TableMainC">The NHS has developed and used openEHR archetypes and templates as a formal way of capturing clinical content requirements. In a pilot in Q1&amp;2 2007, around 220 archetypes and 40 templates were developed in the maternity and emergency department (ED) specialties. By end 2008, the number of archetypes was around 1000.</td>
			</tr>
			</tbody>
			</table>
			<br/><br/>
			
			
			<h2><a name="academicresearch"></a>Academic Research</h2>
			<p>If you are using openEHR for an academic (including open source) product, and would like to be included on the list, or you want to submit updates or corrections, then please <a href="about/contacts">contact us</a>.</p>
			<br/>
			
			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT"><p>Country</p></th>
				<th class="TableMainT"><p>Institution</p></th>
				<th class="TableMainT"><p>Team</p></th>
				<th class="TableMainT"><p>Description</p></th>
			</tr>
			<tr>
				<td class="TableMainC"><p><img width="80px" alt="argentina_flag" title="argentina_flag" src="files/basic/Flag_of_Argentina.svg.png"></p>
				<p>Argentina</p></td>
				<td class="TableMainC"><a href="http://www.hospitalaustral.edu.ar/">Austral University Hospital</a></td>
				<td class="TableMainC">Alan March</td>
				<td class="TableMainC">
				<ul>
					<li>implementation of openEHR EHR as a long-term project.</li>
					<li>initial phase is working on discharge summary</li>
				</ul>
				</td>
			</tr>
			<tr>
				<td class="TableMainC" rowspan="4"><p><img width="80px" alt="brazil_flag" title="brazil_flag" src="files/basic/brazil_S.gif"></p>
				<p>Brazil</p></td>
				<td class="TableMainC"><a href="http://www.ufrj.br/">University of Rio de Janiero</a>
				</td>
				<td class="TableMainC">Rigoleta Dutra
				</td>
				<td class="TableMainC">PhD Thesis on archetype-based systems<br/>
				[2009]</td>
			</tr>
			<tr>
				<td class="TableMainC"><a href="http://www.uff.br/">Fluminense Federal University</a></td>
				<td class="TableMainC">Luciana Tricai Cavalini, <br/>
				Helia Kawa, <br/>
				Israel Figueiredo Junior, postgrad/undergrad students</td>
				<td class="TableMainC">Epidemiologic Surveillance Support System (EpiS3): a decision-support system
				for epidemiological surveillance (disease control and prevention for communities
				and healthcare settings).<br/>
				Current activities:
				<ul>
					<li>Building archetypes in order to fit the interface between clinical and
					epidemiological concepts</li>
					<li>Developing the application on the top of OSHIP (Open Source Health
					Information Platform), the reference implementation of openEHR specs in
					Python/Zope3</li>
				</ul>
				[2009]</td>
			</tr>
			<tr>
				<td class="TableMainC"><a href="http://www.ufmg.br/">Minas Gerais Federal University</a><br/>
				School of Information Sciences</td>
				<td class="TableMainC">Marcelo Rodrigues dos Santos</td>
				<td class="TableMainC">Phd Thesis on semantic interoperability involving the usage of
				openEHR RM and AM models.<br/>
				[2009]</td>
			</tr>
			<tr>
				<td class="TableMainC">Hospital das Clinicas<br/>University of S&atilde;o Paulo<br/>
				<a href="http://www.fmrp.usp.br/novo_portal/">Ribeir&atilde;o Preto School of Medicine</a></td>
				<td class="TableMainC">Center of Information and Analyses (contact: Flavio Barbosa)</td>
				<td class="TableMainC">Applying archetypes for construction of clinical observations and radiological reports.<br/>
				[May 2009]</td>
			</tr>
			<tr>
				<td class="TableMainC"><p><img width="80px" alt="germany_flag" title="germany_flag" src="files/basic/germany_S.gif"></p>
				<p>Germany</p></td>
				<td class="TableMainC">University of Heidelberg / <br/>Heilbronn University</td>
				<td class="TableMainC">Petra Knaup, <br/>
				Jasmin Buck, <br/>
				Christian Kohl</td>
				<td class="TableMainC">
				<ul>
					<li>Expressing Clinical Data Sets with openEHR Archetypes</li>
					<li>Modelling of a comprehensive electronic patient record for the Neonatology
					Department of the University Hospital Heidelberg using the openEHR
					approach</li>
				</ul>
				</td>
			</tr>
			<tr>
				<td class="TableMainC"><p><img width="80px" alt="japan_flag" title="japan_flag" src="files/basic/japan_S.gif"></p>
				<p>Japan</p></td>
				<td class="TableMainC"><a href="http://www.ehime-u.ac.jp/">Ehime University</a></td>
				<td class="TableMainC">Shinji KOBAYASHI, <br/>
				Eizen KIMURA, <br/>
				Ken ISHIHARA</td>
				<td class="TableMainC">Ruby reference implementation of openEHR.<a href="http://openehr.jp/">Home page</a>.<br/>
				[2008-]</td>
			</tr>
			<tr>
				<td class="TableMainC"><p><img width="80px" alt="new_zealand_flag" title="japan_flag" src="files/basic/newzealand.gif"></p>
				<p>New Zealand</p></td>
				<td class="TableMainC"><a href="http://www.fmhs.auckland.ac.nz/soph/centres/nihi/">The University of Auckland, National Institute for Health Innovation</a></td>
				<td class="TableMainC">
				Koray Atalag, <br/>Hong Yul Yang</td>
				<td class="TableMainC">GastrOS is an endoscopic reporting application based on open standards:
				openEHR and MST. GUI is driven by Archetypes/Templates. It is part of our
				research at the University of Auckland to investigate software maintainability
				and interoperability.<br/>
				Uses <a href="http://openehr.codeplex.com/">openEHR.Net on CodePlex</a><br/>
				[Mar 2012]</td>
			</tr>
			<tr>
				<td class="TableMainC"><p><img width="80" alt="portugal_flag" title="portugal_flag" src="files/basic/portugal_flag.jpg"></p>
				<p>Portugal</p></td>
				<td class="TableMainC">Center for Research in Health Technologies and Information Systems (CINTESIS),<br/>
				Faculty of Medicine,<br/>Porto University</td>
				<td class="TableMainC">Gustavo Bacelar,<br/>
				Jos&eacute; Patriarca-Almeida,<br/>
				Paulo R. Ferreira,<br/>
				Pedro M Vieira-Marques,<br/>
				Ricardo Cruz-Correia</td>
				<td class="TableMainC">Master Thesis (Gustavo Bacelar) on&nbsp;conversion of&nbsp;clinical guidelines
				statements to&nbsp;openEHR archetypes and templates.<br/>
				<a href="http://www.sahib.gim.med.up.pt/">SAHIB</a> - Enhancing
				multi-institutional health data availability through multi-agent systems<br/>
				This project aims to&nbsp;build applications that find, retrieve and deliver patient
				information (using openEHR) to the&nbsp;point-of-care in a secure and timely fashion,
				event though it is distributed across multiple healthcare institutions,
				whilst&nbsp;safeguarding the different agendas and constraints of the various actors.<br/>
				[Apr 2012]</td>
			</tr>
			<tr>
				<td class="TableMainC" rowspan="5">
				<p><img width="80" alt="spain_flag" title="spain_flag" src="files/basic/spain.gif"></p>
				<p>Spain</p></td>
				<td class="TableMainC">University of Alcal&aacute;, Madrid<br/>
				<a href="http://www.ieru.org/">Information Engineering Research Unit</a></td>
				<td class="TableMainC">L. Lezcano, <br/>
				Miguel-Angel Sicilia,<br/>
				P. Serrano-Balazote,<br/>
				E. Rivero-Ruiz</td>
				<td class="TableMainC">Activities:
				<ul>
					<li>Development of Java libraries to translate openEHR archetypes to OWL:
					<a href="http://oe.dynalias.net:8080/JSPWebArchetypeOntologizer/">ADL2OWL translator</a>
					</li>
					<li>Integrating SWRL rules with archetypes translated to OWL.</li>
					<li>Mapping archetypes in OWL form to ontologies.</li>
				</ul>
				[Dec 2011]</td>
			</tr>
			<tr>
				<td class="TableMainC">
				<a href="http://www.upv.es/">Technical University of Valencia</a>,<br/>Biomedical Informatics Group<br/>
				*Faculty of Informatics.<br/><a href="http://www.um.es/">Murcia University</a>.</td>
				<td class="TableMainC">David Moner,<br/>
				Jesualdo Tom&aacute;s Fern&aacute;ndez*,<br/>
				Jos&eacute; Alberto Maldonado,<br/>
				Montserrat Robles,<br/>
				Diego Bosc&aacute;</td>
				<td class="TableMainC">
				Activities:
				<ul>
					<li>Description of existing information as legacy archetypes.</li>
					<li>Formalisation of the constraint part of archetypes as semi-structured data types.</li>
					<li>Ontological engineering of Archetypes: cooperative development, translation to ontological languages.</li>
				</ul>
				See LinkEHR editor tool - a generic, schema-based archetype tool -
				<a href="http://www.linkehr.com/">http://www.linkehr.com/</a>.<br/>
				[June 2009]</td>
			</tr>
			<tr>
				<td class="TableMainC"><a href="http://www-en.us.es/">University of Seville</a></td>
				<td class="TableMainC">Isabel Rom&aacute;n Mart&iacute;nez</td>
				<td class="TableMainC">Integration of Federated EHR Systems Using Semantic Web Techniques - the integration of heterogeneous systems using the openEHR Reference Model and archetype methodology.
				<ul>
					<li>This has led to the implementation of the <a href="http://trajano.us.es/%7Eisabel/EHR/">openEHR models in OWL</a>
					(note that these are around 0.95 Release vintage and have not been updated since mid? 2004).[2003-2005]</li>
					<li>Currently working on SOA for healthcare, using ISO RM/ODP, OMG MDA, openEHR [2009]</li>
				</ul>
				</td>
			</tr>
			<tr>
				<td class="TableMainC">Departamento de Inform&aacute;tica y Sistemas<br/>Campus de Espinardo,<br/>
				<a href="http://www.um.es/">Murcia University</a></td>
				<td class="TableMainC"><a href="http://webs.um.es/valencia">Jesualdo Tom&aacute;s Fern&aacute;ndez Breis<br/>
				Rafael Valencia Garc&iacute;a</a><br/>
				Marcos Men&aacute;rguez Tortosa <br/> 
				<a href="http://klt.inf.um.es/%7Ecati">Catalina Mart&iacute;nez Costa</a></td>
				<td class="TableMainC">
				The <a href="http://webs.um.es/jfernand/miwiki/doku.php?id=projects:poseacle_gen">POSEACLE
				project</a> started in 2004 aiming at facilitating a semantic management of
				electronic healthcare records related information and knowledge. This research
				project has been done in cooperation with the <a href="http://gim.upv.es/">
				Biomedical Informatics group</a> at the <a href="http://www.upv.es"> Technical
				University of Valencia (Spain)</a> The main objectives are:
				<ul>
					<li>Development of ontologies for the design, generation and use of standardised
					federated electronic health records;</li>
					<li>Publishing existing clinical information as a valid extract of an EHR
					compliant with the European standard;</li>
					<li>Intelligent and customised access to existing clinical information
					compatible with ISO13606 and OpenEHR;</li>
					<li>Development of tools supporting clinical investigation.</li>
				</ul>
				[March 2010]</td>
			</tr>
			<tr>
				<td class="TableMainC">
				<a href="http://www.usc.es/">University of Santiago de Compostela</a>, <a href="http://www.usc.es/keam">Knowledge Engineering Applied to Medicine Group.</a></td>
				<td class="TableMainC">Mar&iacute;a Jes&uacute;s Taboada Iglesias<br/>
				Mar&iacute;a Meizoso Garc&iacute;a<br/>
				Jos&eacute; Luis Iglesias Allones<br/>
				Diego Martinez Hern&aacute;ndez<br/>
				Seraf&iacute;n Tellado L&oacute;pez<br/>
				Rosario Lal&iacute;n</td>
				<td class="TableMainC">The project "<a href="http://www.usc.es/keam/project.html">Management of terminologies for archetypes</a>" started in 2009 aiming at:
				<ul>
					<li>developing automated methods to recover and integrate relevant clinical
					terminology based on the definition of OpenEHR archetypes.</li>
					<li>providing semantic interoperability between healthcare information and
					clinical practice guidelines, through the archetypes and terminology systems.
					</li>
				</ul>
				[March 2012]</td>
			</tr>
			<tr>
				<td class="TableMainC"><p><img width="80" alt="slovakia_flag" title="slovakia_flag" src="files/basic/slovakia.gif"></p>
				<p>Slovak Republic</p></td>
				<td class="TableMainC">NCA STU &ndash; National archetype center,<br/>
				Slovak Technical University, Bratislava.</td>
				<td class="TableMainC"><a href="mailto:peter.linhardt at stuba dot sk">Peter Linhardt, PhD</a></td>
				<td class="TableMainC">The National Archetype Centre programme, established September 2011 undertakes the following activities:
				<ul>
					<li>Localisation of openEHR archetypes for National health information system;</li>
					<li>Development of archetypes for GP Information systems;</li>
					<li>Research project: transformation of free text medical records to the archetype-based form.</li>
				</ul>
				[March 2012]</td>
			</tr>
			<tr>
				<td class="TableMainC" rowspan="2"><p><img width="80" alt="sweden_flag" title="sweden_flag" src="files/basic/sweden_S.gif"></p>
				<p>Sweden</p></td>
				<td class="TableMainC"><a href="http://www.imt.liu.se/mi/ehr/">Medical Informatics group at the Department of Biomedical Engineering, <br/>
				Link&ouml;pings universitet, Sweden</a></td>
				<td class="TableMainC">Erik Sundvall,<br/>
				Daniel Karlsson</td>
				<td class="TableMainC">For current details see: <a href="http://www.imt.liu.se/mi/ehr/ ">http://www.imt.liu.se/mi/ehr/ </a>
				<br/>
				Project examples:
				<ul>
					<li>Exploration of archetype-based approaches to the EHR</li>
					<li>Creation of the Java based LiU Archetype Editor</li>
				</ul>
				[2012]</td>
			</tr>
			<tr>
				<td class="TableMainC">Karolinska Institutet</td>
				<td class="TableMainC">Nadim Anani,<br/>
				Rong Chen,<br/>
				Sabine Koch</td>
				<td class="TableMainC">Ongoing PhD program to explore how semantic EHR technology, openEHR in
				particular, can be extended to support distributed clinical processes. This will
				be done by exploring how to incorporate clinical practice guidelines and
				clinical pathways into openEHR, using guidelines from the clinical domain of
				stroke care.<br/>
				[Mar 2012]</td>
			</tr>
			<tr>
				<td class="TableMainC">
				<p><img width="80" alt="uk_flag" title="uk_flag" src="files/basic/uk_S.gif"></p>
				<p>UK</p></td>
				<td class="TableMainC"><a href="http://www.chime.ucl.ac.uk/">CHIME (Centre for
				Health Informatics and Multi-professional Education),<br/>
				University College London</a></td>
				<td class="TableMainC"><a href="http://www.openehr.org/wiki/display/%7Eserefarikan">Seref Arikan</a>,<br/>
				Professor David Ingram</td>
				<td class="TableMainC"><a href="http://opereffa.chime.ucl.ac.uk">Opereffa</a> is a proof of concept
				implementation of key aspects of openEHR specification. Its initial version
				explores the key requirements of implementation, all the way from a web based UI
				to a RDMS based back end. It includes some Eclipse plugins and Eclipse BIRT
				(Business Intelligence and Reporting Tools) integration.<br/>
				[Mar 2012]</td>
			</tr>
			</tbody>
			</table>
			<br/><br/>
		
		</div>
		
	</div>

	<div id="BottomMenu">
		<?php include 'menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
		<?php include 'panel/bottompanel.php' ?>
	</div>

</div>

<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>
