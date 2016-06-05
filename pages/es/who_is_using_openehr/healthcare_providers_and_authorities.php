<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Proveedores de Salud y Autoridades';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>The following table indicates known current and contracted future deployments of openEHR solutions into production healthcare delivery settings and operational secondary use contexts, including medical research and public health. Please <a href="/about/contacts">contact us</a>, to notify of other openEHR deployments.</p>
			
			<table class="TableBasic">
			<tbody>
			<tr>
				<th>Country</th>
				<th>Provider/authority</th>
				<th>Description</th>
				<th>Vendor(s)</th>
				<th>Status</th>
			</tr>
			<tr>
				<td rowspan="6"><img src="/files/who_is_using_openehr/australia.gif" alt="Flag of Australia" title="Flag of Australia" style="width:80px;"><p>Australia</p></td>
				<td><a href="http://www.health.qld.gov.au/">Queensland Health</a><br/>Australian state health authority responsible for the providing public health 4.5m consumers; Centre for Healthcare Related Infection Surveillance and Prevention (CHRISP).</td>
				<td>Infection Control system, Multiprac, for 140+ hospitals in Queensland based on the Ocean OceanEHR platform. <a href="http://oceaninformatics.com/case_studies/queensland_health">Case study</a></td>
				<td><a href="http://www.openehr.org/industry_partners/ocean_informatics">Ocean Informatics, Australia</a></td>
				<td>Deployed Aug 2012</td>
			</tr>
			<tr>
				<td><a href="http://www.wentwest.com.au/">Western Sydney Primary Healthcare Network & Western Sydney local Health District</a><br/>Community health organisation</td>
				<td>Integrate care project between acute care and primary care for NSW health. </td>
				<td><a href="http://www.openehr.org/industry_partners/ocean_informatics">Ocean Informatics, Australia</a><br/></td>
				<td>Deployed June 2015</td>
			</tr>
			<tr>
				<td><a href="http://www.wentwest.com.au/">Western Sydney Medicare Local</a><br/>Community health organisation</td>
				<td>Community Health record for 350 GP clinics in Western Sydney. <a href="http://oceaninformatics.com/case_studies/western_sydney">Case study</a></td>
				<td><a href="http://www.openehr.org/industry_partners/ocean_informatics">Ocean Informatics, Australia</a><br/></td>
				<td>Deployed December 2013</td>
			</tr>
			<tr>
				<td><a href="http://www.health.nt.gov.au/">Northern Territory Health</a><br/>Australian state health authority responsible for the providing public health 233,000 consumers</td>
				<td>Shared Electronic Health record for over 50,000 remote indigenous people in the NT and other states in Australia. <a href="http://oceaninformatics.com/case_studies/northern_territory">Case study</a></td>
				<td><a href="http://www.openehr.org/industry_partners/ocean_informatics">Ocean Informatics, Australia</a></td>
				<td>Deployed October 2012</td>
			</tr>
			<tr>
				<td><a href="http://www.sath.org.au/">St Andrews Hospital Toowoomba, Queensland, Australia</a><br/>Regional private hospital</td>
				<td>Multiprac Infection Control and Staff Health system based on the Ocean OceanEHR platform</td>
				<td><a href="http://www.openehr.org/industry_partners/ocean_informatics">Ocean Informatics, Australia</a></td>
				<td>Deployed June 2012</td>
			</tr>
			<tr>
				<td><a href="http://hsnph.org.au/about-us/welcome/">St Vincents Holy Spirit Hospital, Brisbane, Australia</a><br/>Large private 225 bed hospital</td>
				<td>Multiprac Infection Control and Staff Health system based on the Ocean OceanEHR platform</td>
				<td><a href="http://www.openehr.org/industry_partners/ocean_informatics">Ocean Informatics, Australia</a></td>
				<td>Deployed December 2012</td>
			</tr>
			<tr>
				<td rowspan="2"><img src="/files/who_is_using_openehr/brazil_S.gif" alt="Flag of Brazil" title="Flag of Brazil" style="width:80px;"><p>Brazil</p></td>
				<td>Around 3,000 health professionals including doctors (primarily ophthalmologists - Brazilian College of Ophthalmologists), physiotherapists, nurses and receptionists.</td>
				<td>Web-based ambulatory care EHR system</td>
				<td><a href="http://www.p2d.com.br/">P2D, Brazil</a></td>
				<td>Deployed Feb 2012</td>
			</tr>
			<tr>
				<td><a href="http://www.spasaude.org.br/">SPAsaude health plan</a><br/>Boa Esperan&ccedil;a, S&atilde;o Paulo</td>
				<td>Web-based ambulatory care system for chronic care management</td>
				<td><a href="http://ricardoquintano.wix.com/ezvida/">ezVida, Brazil</a></td>
				<td>Deployed June 2012</td>
			</tr>
			<tr>
				<td rowspan="3"><img src="/files/who_is_using_openehr/netherlands.gif" alt="Flag of Netherlands" title="Flag of Netherlands" style="width:80px;"><p>The Netherlands</p></td>
				<td><a href="http://www.ggznhn.nl">GGZ Noord Holland Noord</a><br/>Mental health organisation</td>
				<td>MedPlus24 medication viewer (openEHR 1.0.2), to view all prescribed medication for a specific patient. The information 
				is digitally collected from all the surrounding city pharmacies in the region.</td>
				<td><a href="http://www.openehr.org/industry_partners/code24">Code24, The Netherlands</a></td>
				<td>Deployed April 2011</td>
			</tr>
			<tr>
				<td><a href="http://www.ggzfriesland.nl">GGZ Friesland</a><br/>Mental health organisation</td>
				<td>mConsole &amp; Base24 EHR solution (openEHR 1.0.2), where Base24 is used as an integrated database which links the patient portal and several other 
				3rd party systems directly with the EHR. Patients and care providers work seamlessly with the same data.</td>
				<td><a href="http://www.openehr.org/industry_partners/code24">Code24, The Netherlands</a></td>
				<td>Deployed August 2012</td>
			</tr>
			<tr>
				<td><a href="http://www.rkz.nl">Rode Kruis Ziekenhuis</a><br/>Hospital</td>
				<td>BeterVerwijzen a digital referral system (openEHR 1.0.2), where a home physician is able to make an electronic referral which is managed 
				and processed in combination the EHR.</td>
				<td><a href="http://www.openehr.org/industry_partners/code24">Code24, The Netherlands</a></td>
				<td>Deployed November 2012</td>
			</tr>
			<tr>
				<td><img src="/files/who_is_using_openehr/Flag_of_Norway.png" alt="Flag of Norway" title="Flag of Norway" style="width:80px;"><p>Norway</p></td>
				<td>The DIPS EPR solution is in use in 3 of the 4 regions in Norway, corresponding to about 85% of beds.</td>
				<td>
					<p>DIPS Arena, based on openEHR archetypes and release 1.0.2 is being rolled out across the country from 2014 - 2018 to DIPS hospitals using the existing DIPS 'classic' system. The first production version of DIPS Arena was put in production at Oslo University Hospital on October 2014 alongside the current DIPS Classic. As of now the trauma center and the orthopedic ER are using archetypes for documentation. OUS are expanding the use of Arena to other areas, first up is a large clinic for STDs where archetypes are now under development and will support both clinical notes and patient self registrations which are used both for the clinicians and for public health reporting. During 2015 the medication solution will be converte to be fully archetype based, and similarly the CPOE-modules.</p>
					<p>The two other regions are in different stages of planning. The Nordic region will start using our surgery planning system which is fully archetype based in September and will receive modules for psychiatry by the end of the year. Similarly the western regions plan to start implementation projects for outpatient clinics this fall, with projected startup January 2016.</p>
					<p>DIPS also cooperates on the national ICT archetype development project, utilising the <a href="http://arketyper.no/ckm/">Norwegian CKM</a>.</p>
				</td>
				<td><a href="http://www.openehr.org/industry_partners/dips">DIPS asa</a></td>
				<td>Deploying since 2014</td>
			</tr>
			<tr>
				<td><img src="/files/who_is_using_openehr/portugal_flag.jpg" alt="Flag of Portugal" title="Flag of Portugal" style="width:80px;"><p>Portugal</p></td>
				<td><a href="http://www.idealmed.pt/index.php/en/idealmed/uhc-unidade-hospitalar-de-coimbra#/como-chegar">IdealMed, Coimbra, Portugal</a><br/>Large private hospital covering all medical specialties and settings including inpatient, outpatient, surgery, emergency, Medical Training, Clinical Research and Clinical Trials</td>
				<td>Clinical Repository &amp; Clinical Trials Management System</td>
				<td><a href="http://www.openehr.org/industry_partners/critical_software">Critical Software S.A., Portugal</a></td>
				<td>Deployed May 2011</td>
			</tr>
			<tr>
				<td rowspan="4"><img src="/files/who_is_using_openehr/Flag_of_Russia.svg.png" alt="Flag of Russia" title="Flag of Russian" style="width:80px;"><p>Russia</p></td>
				<td id="IBS_Moscow"><a href="http://www.mos.ru/en/authority/dit/">Moscow City Department of Information Technologies</a><br/>Authority responsible for e-health solutions for Moscow's 12 million, and 130,000 users in 780 facilities.</td>
				<td>The Integrated Medical Information System (SIMI) project will centralise electronic health records for Moscow, including all primary health centres and city hospitals, using the Marand Think!Med EHR platform.</td>
				<td>Prime: <a href="http://www.ibs.ru/">IBS, Moscow</a><br/>
					EHR platform: <a href="http://www.openehr.org/industry_partners/marand">Marand (Slovenia)</a><br/>
					Clinical apps: <a href="http://www.openehr.org/industry_partners/infinnity_solutions">Infinnity (Russia)</a><br/>
					Clinical strategy &amp; tooling: <a href="http://www.openehr.org/industry_partners/ocean_informatics">Ocean Informatics UK</a><br/>
					IHE/XDS: <a href="http://www.forcare.nl/">Forcare (Netherlands)</a></td>
				<td>Pilot phase contracted; deployment during 2013</td>
			</tr>
			<tr>
				<td><em>Clinic of Chelyabinsk Medical Academy</em><br/>572 beds, 196 physicians, 386 staff in total</td>
				<td>openEHR-based EHR system covering specialities including Infectious Diseases, Reanimation and Intensive Care, Surgery (including Cardio and Emergency departments), Gyneacology, Neurology, Obstetrics etc.</td>
				<td><a href="http://www.openehr.org/industry_partners/infinnity_solutions">Infinnity, Russia</a></td>
				<td>Deployed late 2012</td>
			</tr>
			<tr>
				<td><em>Federal Medical Biological Agency of Trekhgorny, Chelyabinskaya oblast</em><br/>403 beds, 119 physicians<br/>
				<em>Federal Medical Biological Agency of Chelyabinsk, Radiation Rehabilitation Center</em><br/>200 beds, 36 physicians, 76 staff in total</td>
				<td>openEHR-based EHR system covering specialities including Infectious Diseases, Reanimation and Intensive Care, Surgery (including Cardio and Emergency departments), Gyneacology, Neurology, Obstetrics etc.</td>
				<td><a href="http://www.openehr.org/industry_partners/infinnity_solutions">Infinnity, Russia</a></td>
				<td>Deployed 2012</td>
			</tr>
			<tr>
				<td><em>Russian Railways Medical Center, Chelyabinsk, Department of Southern Urals</em><br/>630 beds, 700 physicians, 1500 of staff in total</td>
				<td>openEHR-based EHR system covering specialities including Infectious Diseases, Reanimation and Intensive Care, Surgery (including Cardio and Emergency departments), Gyneacology, Neurology, Obstetrics etc.</td>
				<td><a href="http://www.openehr.org/industry_partners/infinnity_solutions">Infinnity, Russia</a></td>
				<td>Deployed 2011</td>
			</tr>
			<tr>
				<td rowspan="3"><img src="/files/who_is_using_openehr/slovenia.gif" alt="Flag of Slovenia" title="Flag of Slovenia" style="width:80px;"><p>Slovenia</p></td>
				<td><a href="http://www4.kclj.si/ang/index.php">University Medical Center Ljubljana, Slovenia</a><br/>UMCL is a tertiary care institution covering all medical specialties with more that 2,000 beds and 7,500 employees including 1,200 physicians.</td>
				<td>The Children's Hospital has been using the Marand Think!Med Clinical applications over the Think!Med EHR platform for two years. The system is being expanded to other departments such as Radiology, Nuclear Medicine, Cardio Surgery and Infectious Diseases.</td>
				<td><a href="http://www.openehr.org/industry_partners/marand">Marand, Slovenia</a></td>
				<td>Deployed April 2011</td>
			</tr>
			<tr>
				<td><a href="http://www.onko-i.si/">Institute of Oncology, Ljubljana</a><br/>The Institute is the leading cancer care and research institution in the 
				region. 400 beds, 150 physicans and 800 staff.</td>
				<td>Think!Med Screening, based on the Think!EHR Platform, provides a medical data repository and supports the workflow for Slovenia's National Breast Cancer Screening program. 
				It covers screening of all women between the ages of 50 and 69 and is run countrywide by the Institute of Oncology.</td>
				<td><a href="http://www.openehr.org/industry_partners/marand">Marand, Slovenia</a></td>
				<td>Deployed Dec 2012</td>
			</tr>
			<tr>
				<td><a href="http://www.mz.gov.si">Ministry of Health, Slovenia</a><br/>The Slovenian Ministry of Health is responsible for the majority of all healthcare delivery institutions in the country.</td>
				<td>National health information exchange network enabling sharing of clinical information among all healthcare stakeholders. Provides the interoperability backbone providing 
				services to eHealth applications such as eReferral, ePrescription as well as national health registries. Based on established industry standards including <a href = "http://www.ihe.net">IHE</a> and <a href = "http://www.openEHR.org">openEHR</a>.</td>
				<td>Consoritum led by <a href="http://www.openehr.org/industry_partners/marand">Marand, Slovenia</a></td>
				<td>Contracted Sep 2012; deployed Q2 2013</td>
			</tr>
			<tr>
				<td rowspan="1"><img src="/files/who_is_using_openehr/sweden_flag.png" alt="Flag of Sweden" title="Flag of Sweden" style="width:80px;"><p>Sweden</p></td>
				<td>Cambio COSMIC customers in Europe including: 
					<p>Sweden:</p>
						<ul>
							<li>Capio St Göran Hospital (Stockholm)</li>
							<li>Region Jönköpings Län</li>
							<li>Region Östergötland</li>
							<li>Landstinget i Karmar Län</li>
							<li>Region Kronoberg</li>
							<li>Landstinget Västmanland</li>
							<li>Landstignet i Värmland</li>
							<li>Landstinget i Uppsala Län</li>
							<li>Region Jämtland</li>
						</ul>
					<p>Denmark:</p>
						<ul>
							<li>South Region</li>
						</ul>
					<p>United Kingdom:</p>
						<ul>
							<li><a href="http://www.pah.nhs.uk/">Princess Alexandra Hospital - NHS trust</a></li>
							<li><a href="http://www.inhealthgroup.com/">InHealth UK</a></li>
							<li><a href="http://www.ramsayhealth.co.uk/">Ramsay Healthcare UK</a></li>
						</ul>
				</td>
				<td>
					<p>The openEHR archetype-based Cambio COSMIC 8.1 is being rolled out to 8 regions (30% of Swedish EHR market) in 2015 and onwards. Some of these deployments are among the largest in Europe covering more than half million population with one instance that covers entire healthcare delivery across primary care centres, regional hospitals and University hospital.</p>
					<p>The new COSMIC Clinical Decision Support (CDS) product line is built entirely based on openEHR archetypes and <a href="https://github.com/openEHR/gdl-tools/wiki">Guideline Definition Language (GDL)</a>. In 2014, the Cambio Stroke Prevention CDS application was tested successfully at 5 clinics in Östergötland. The CDS products will be gradually deployed to the Cambio Swedish region customers from 2015.</p>
				</td>
				<td><a href="http://www.openehr.org/industry_partners/cambio_healthcare_systems">Cambio Healthcare, Sweden</a></td>
				<td>Deploying 2014, 2015, ...</td>
			</tr>
			<tr>
				<td><img src="/files/who_is_using_openehr/uk_S.gif" alt="Flag of United Kingdom" title="Flag of United Kingdom" style="width:80px;"><p>UK</p></td>
				<td><a href="http://www.leedsnorthccg.nhs.uk/about-us/leeds-care-record.htm" target="_blank">NHS Leeds North Clinical Commissioning Group</a></td>
				<td>The Leeds Care Record is a city-wide community-based shared health records system that enables clinicians at Leeds Hospital to see GP records of admitted patients, and GPs to see other GP records (e.g. in case of patient move). It aims to support 'source of truth' key health data such as medications list, problem list and shared care plan. Based on established industry standards including openEHR.</td>
				<td><a href="http://www.openehr.org/industry_partners/ocean_informatics" target="_blank">Ocean Informatics UK</a></td>
				<td>Pilot contracted Sep 2012; initial deployment October 2013</td>
			</tr>
			</tbody>
			</table>
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_footer.php');?>