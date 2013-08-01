<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'Healthcare Providers and Authorities';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>The following table indicates known current and contracted future deployments of openEHR solutions into production healthcare delivery settings and operational secondary use contexts, including medical research and public health. Please <a href="/about/contacts">contact us</a>, to notify of other openEHR deployments.</p>
			
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
				<td class="TableMainC" rowspan="4"><p><img width="80px" alt="australia_flag" title="australia_flag" src="/files/who_is_using_openehr/australia.gif"></p><p>Australia</p></td>
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
				<td class="TableMainC" rowspan="2"><p><img width="80px" alt="brazil_flag" title="brazil_flag" src="/files/who_is_using_openehr/brazil_S.gif"></p><p>Brazil</p></td>
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
				<td class="TableMainC" rowspan="3"><p><img width="80px" alt="netherlands_flag" title="netherlands_flag" src="/files/who_is_using_openehr/netherlands.gif"></p><p>The Netherlands</p></td>
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
				<td class="TableMainC">Deployed August 2012</td>
			</tr>
			<tr>
				<td class="TableMainC"><a href="http://www.rkz.nl">Rode Kruis Ziekenhuis</a><br/>Hospital</td>
				<td class="TableMainC">BeterVerwijzen a digital referral system (openEHR 1.0.2), where a home physician is able to make an electronic referral which is managed 
				and processed in combination the EHR.</td>
				<td class="TableMainC"><a href="http://www.code24.nl/">Code24, The Netherlands</a></td>
				<td class="TableMainC">Deployed November 2012</td>
			</tr>
				<td class="TableMainC" rowspan="1"><p><img width="80px" alt="portugal_flag" title="portugal_flag" src="/files/who_is_using_openehr/portugal_flag.jpg"></p><p>Portugal</p></td>
				<td class="TableMainC"><a href="http://www.idealmed.pt/index.php/en/idealmed/uhc-unidade-hospitalar-de-coimbra#/como-chegar">IdealMed, Coimbra, Portugal</a><br/>Large private hospital covering all medical specialties and settings including inpatient, outpatient, surgery, emergency, Medical Training, Clinical Research and Clinical Trials</td>
				<td class="TableMainC">Clinical Repository &amp; Clinical Trials Management System</td>
				<td class="TableMainC"><a href="http://solutions.criticalsoftware.com/health/">Critical Software S.A., Portugal</a></td>
				<td class="TableMainC">Deployed May 2011</td>
			</tr>
			<tr>
				<td class="TableMainC" rowspan="4"><p><img width="80px" alt="russia_flag" title="russia_flag" src="/files/who_is_using_openehr/Flag_of_Russia.svg.png"></p><p>Russia</p></td>
				<td class="TableMainC"><a name="IBS_Moscow"><a href="http://www.mos.ru/en/authority/dit/">Moscow City Department of Information Technologies</a><br/>Authority responsible for e-health solutions for Moscow's 12 million, and 130,000 users in 780 facilities.</td>
				<td class="TableMainC">The Integrated Medical Information System (SIMI) project will centralise electronic health records for Moscow, including all primary health centres and city hospitals, using the Marand Think!Med EHR platform.</td>
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
				<td class="TableMainC"><a href="http://www.infinnity.ru/">Infinnity, Russia</a></td>
				<td class="TableMainC">Deployed late 2012</td>
			</tr>
			<tr>
				<td class="TableMainC"><em>Federal Medical Biological Agency of Trekhgorny, Chelyabinskaya oblast</em><br/>403 beds, 119 physicians<br/>
				<em>Federal Medical Biological Agency of Chelyabinsk, Radiation Rehabilitation Center</em></br>200 beds, 36 physicians, 76 staff in total</td>
				<td class="TableMainC">openEHR-based EHR system covering specialities including Infectious Diseases, Reanimation and Intensive Care, Surgery (including Cardio and Emergency departments), Gyneacology, Neurology, Obstetrics etc.</td>
				<td class="TableMainC"><a href="http://www.infinnity.ru/">Infinnity, Russia</a></td>
				<td class="TableMainC">Deployed 2012</td>
			</tr>
			<tr>
				<td class="TableMainC"><em>Russian Railways Medical Center, Chelyabinsk, Department of Southern Urals</em><br/>630 beds, 700 physicians, 1500 of staff in total</td>
				<td class="TableMainC">openEHR-based EHR system covering specialities including Infectious Diseases, Reanimation and Intensive Care, Surgery (including Cardio and Emergency departments), Gyneacology, Neurology, Obstetrics etc.</td>
				<td class="TableMainC"><a href="http://www.infinnity.ru/">Infinnity, Russia</a></td>
				<td class="TableMainC">Deployed 2011</td>
			</tr>
			<tr>
				<td class="TableMainC" rowspan="3"><p><img width="80px" alt="slovenia_flag" title="slovenia_flag" src="/files/who_is_using_openehr/slovenia.gif"></p><p>Slovenia</p></td>
				<td class="TableMainC"><a href="http://www4.kclj.si/ang/index.php">University Medical Center Ljubljana, Slovenia</a><br/>UMCL is a tertiary care institution covering all medical specialties with more that 2,000 beds and 7,500 employees including 1,200 physicians.</td>
				<td class="TableMainC">The Children's Hospital has been using the Marand Think!Med Clinical applications over the Think!Med EHR platform for two years. The system is being expanded to other departments such as Radiology, Nuclear Medicine, Cardio Surgery and Infectious Diseases.</td>
				<td class="TableMainC"><a href="http://www.marand-thinkmed.com/">Marand, Slovenia</a></td>
				<td class="TableMainC">Deployed April 2011</td>
			</tr>
			<tr>
				<td class="TableMainC"><a href="http://www.onko-i.si/">Institute of Oncology, Ljubljana</a><br/>The Institute is the leading cancer care and research institution in the 
				region. 400 beds, 150 physicans and 800 staff.</td>
				<td class="TableMainC">Think!Med Screening, based on the Think!EHR Platform, provides a medical data repository and supports the workflow for Slovenia's National Breast Cancer Screening program. 
				It covers screening of all women between the ages of 50 and 69 and is run countrywide by the Institute of Oncology.</td>
				<td class="TableMainC"><a href="http://www.marand-thinkmed.com/">Marand, Slovenia</a></td>
				<td class="TableMainC">Deployed Dec 2012</td>
			</tr>
			<tr>
				<td class="TableMainC"><a href="http://www.mz.gov.si">Ministry of Health, Slovenia</a><br/>The Slovenian Ministry of Health is responsible for the majority of all healthcare delivery institutions in the country.</td>
				<td class="TableMainC">National health information exchange network enabling sharing of clinical information among all healthcare stakeholders. Once completed, it will serve as the interoperability backbone providing 
				services to eHealth applications such as eReferral, ePrescription as well as national health registries. Based on established industry standards including <a href = "http://www.ihe.net">IHE</a> and <a href = "http://www.openEHR.org">openEHR</a>.</td>
				<td class="TableMainC">Consoritum led by <a href="http://www.marand-thinkmed.com/">Marand, Slovenia</a></td>
				<td class="TableMainC">Contracted Sep 2012; initial deployment Q2 2013</td>
			</tr>
			</tbody>
			</table>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>