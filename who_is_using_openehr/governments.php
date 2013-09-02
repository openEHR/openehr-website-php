<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'Governments';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>The following table indicates use or interest in openEHR known to the openEHR Foundation. Other governments may be using it. If any government or other jurisdictional entity wants to be added to this list please <a href="/about/contacts">contact us</a>, since it enables potential users to find out more about openEHR from a user perspective.</p>

			<table class="TableBasic">
			<tbody>
			<tr>
				<th>Country</th>
				<th>Entity</th>
				<th>Usage</th>
			</tr>
			<tr>
				<td rowspan="3"><img src="/files/who_is_using_openehr/australia.gif" alt="Flag of Australia" title="Flag of Australia" style="width:80px;"><p>Australia</p></td>
				<td>NeHTA (National e-Health Transition Authority)</td>
				<td>Clinical data modelling based on openEHR methodology. Use of transformation from openEHR models to CDA schemas.</td>
			</tr>
			<tr>
				<td>Queensland Health</td>
				<td>An openEHR-based repository has been running at Qld Health for about 3 years, managing discharge summaries.</td>
			</tr>
			<tr>
				<td>Victoria Health</td>
				<td>Various projects including the state cancer registry are using or will use openEHR.</td>
			</tr>
			<tr>
				<td rowspan="2"><img src="/files/who_is_using_openehr/brazil_S.gif" alt="Flag of Brazil" title="Flag of Brazil" style="width:80px;"><p>Brazil</p></td>
				<td>Ministry of Health / various government agencies</td>
				<td>In Brazil some Health Informatics companies are learning and developing archetype-based systems, as they reckon the value of archetypes for representing health knowledge. Also, some of the Brazilian Government Agencies intend to embody archetypes as part of their technological arsenal, as is the case of the Brazilian Suplementary Health Agency (ANS), responsible for regulating the Health Plan market. The Technical Committee on Health Informatics of the Brazilian Standards Association (ABNT) now a "P" member of ISO, has recently joined the work that can eventually lead to archetypes becoming an ISO standard.</td>
			</tr>
			<tr>
				<td>Brazilian Agency for Supplementary Health<br/>State University of Rio de Janeiro</td>
				<td>The Brazilian Agency for Supplementary Health (ANS) established a national standard to support the exchange of information among health providers and health care insurance companies. This standard, called (TISS in Portuguese), was conceived as a traditional message exchange standard. This project aims at designing archetypes that could be used to carry all information represented in TISS. It also aims at implementing a prototype software that will use openEHR reference model to exchange TISS information. This proof of concept will show an alternative way of implementing TISS that could be more effective in dealing with the standard evolution.</td>
			</tr>
			<tr>
				<td><img src="/files/who_is_using_openehr/chile.gif" alt="Flag of Chile" title="Flag of Chile" style="width:80px;"><p>Chile</p></td>
				<td>Ministry of Health</td>
				<td>Interest in openEHR as basis for EHR communication, interest from some providers.</td>
			</tr>
			<tr>
				<td rowspan="2"><img src="/files/who_is_using_openehr/denmark.gif" alt="Flag of Denmark" title="Flag of Denmark" style="width:80px;"><p>Denmark</p></td>
				<td>Connected Digital <br/>Health in Denmark</td>
				<td>National proof-of-concept project.</td>
			</tr>
			<tr>
				<td>Various Danish<br/> regions</td>
				<td>Evaluation of archetype methodology in progress 2008/9.</td>
			</tr>
			<tr>
				<td><img src="/files/who_is_using_openehr/netherlands.gif" alt="Flag of Netherlands" title="Flag of Netherlands" style="width:80px;"><p>Netherlands</p></td>
				<td>TNO (national <br/>research agency)</td>
				<td>TNO is using openEHR archetypes and templates in a diabetic management project. A number of companies are evaluating the approach with a view to implementation.</td>
			</tr>
			<tr>
				<td><img src="/files/who_is_using_openehr/newzealand.gif" alt="Flag of New Zealand" title="Flag of New Zealand" style="width:80px;"><p>New Zealand</p>
				<td>National Institute for Health Innovation (NIHI)<br/>on behalf of the Ministry of Health</td>
				<td>New Zealand's <a href="http://www.ithealthboard.health.nz/sites/all/files/Interoperability%20Reference%20Architecture%20v%201.0.pdf" target="_blank">Interoperability Reference Architecture</a> is underpinned by openEHR. One of the building blocks of this national standard (<a href="http://www.ithealthboard.health.nz/sites/all/files/HISO%2010040.2%20HIE%20Content%20Model%20v1.pdf" target="_blank">HISO 10040.2 Exchange Content Model</a>) describes a uniform content model for the purpose of health information exchange. The Content Model follows CCR in its top level headings and comprises archetypes from various sources including Nehta and openEHR CKM as well as newly modelled ones. It is intended not to establish own CKM but share Australian CKM as the healthcare systems and cultures are very similar.<br/>
				<a href="http://www.nihi.auckland.ac.nz/" target="_blank">National Institute for Health Innovation (NIHI)</a> within University of Auckland runs the national Cardiac Registry (on behalf of the Ministry of Health) which uses an openEHR based backend for data warehousing and reporting. An openEHR template was created to represent the registry dataset by reusing mostly Nehta archetypes that is used for data linkages to national collections and clinical data repositories.<br/>
				Dr. Koray Atalag, who works for NIHI, is also commissioned by the Ministry of Health to revise a set of emerging clinical content standards that represent eReferrals/Discharges, Health Status/Event Summaries and medication records. Using openEHR modelling methodology the aim is to align current drafts with archetypes and other clinical models from other national programs - especially those from Australia.</td>
			</tr>
			<tr>
				<td><img src="/files/who_is_using_openehr/slovakia.gif" alt="Flag of Slovakia" title="Flag of Slovakia" style="width:80px;"><p>Slovakia</p></td>
				<td>Ministry of Health</td>
				<td>Invited presentation by openEHR to government, 2007. MoH &euro;32m contract awarded to consortium using openEHR in 2010. 
				National CKM established in 2012.</td>
			</tr>
			<tr>
				<td><img src="/files/who_is_using_openehr/slovenia.gif" alt="Flag of Slovenia" title="Flag of Slovenia" style="width:80px;"><p>Slovenia</p></td>
				<td>Ministry of Health</td>
				<td>Invited presentation by openEHR to government, 2007, 2010, 2011.</td>
			</tr>
			<tr>
				<td><img src="/files/who_is_using_openehr/sweden_S.gif" alt="Flag of Sweden" title="Flag of Sweden" style="width:80px;"><p>Sweden</p></td>
				<td>Sveriges Kommuner ock Landsting <br/>(Swedish Association of Local Authorities and Regions)</td>
				<td>Adoption of openEHR 2009. The Swedish government has decided on the use of ISO 13606 as a base standard for national health data communication. openEHR will be used to define clinical models, terminology integration, and to implement 13606 in some contexts.</td>
			</tr>
			<tr>
				<td><img src="/files/who_is_using_openehr/uk_S.gif" alt="Flag of United Kingdom" title="Flag of United Kingdom" style="width:80px;"><p>UK</p></td>
				<td>National Health <br/>Service (NHS)<br/>Connecting for <br/>Health (CFH)</td>
				<td>The NHS has developed and used openEHR archetypes and templates as a formal way of capturing clinical content requirements. In a pilot in Q1&amp;2 2007, around 220 archetypes and 40 templates were developed in the maternity and emergency department (ED) specialties. By end 2008, the number of archetypes was around 1000.</td>
			</tr>
			</tbody>
			</table>

<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>