<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Governments';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
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

			<!-- Australia -->
			<tr>
				<td><img src="/files/who_is_using_openehr/australia.gif" alt="Flag of Australia" title="Flag of Australia" style="width:80px;"><p>Australia</p></td>
				<td>Australian Digital Health Agency (was NeHTA - National e-Health Transition Authority)</td>
				<td>Clinical data modelling based on openEHR methodology. Use of transformation from openEHR models to various output formats.<br/>
					Library of archetypes, templates and terminology subsets in <a href="http://dcm.nehta.org.au/ckm/">Clinical Knowledge Manager</a>.<br/>
					(Updated 2017).
				</td>
			</tr>

			<!-- Brazil -->
			<tr>
				<td><img src="/files/who_is_using_openehr/brazil_S.gif" alt="Flag of Brazil" title="Flag of Brazil" style="width:80px;"><p>Brazil</p></td>
				<td>Ministry of Health / various government agencies</td>
				<td>MOH National EHR project is based on openEHR and openEHR archetypes.<br/>
					(Updated 2017).
				</td>
			</tr>

			<!-- India -->
			<tr>
				<td><img src="/files/who_is_using_openehr/Flag_of_India.png" alt="Flag of India" title="Flag of India" style="width:80px;"><p>India</p></td>
				<td><a href="http://mohfw.nic.in">Ministry of Health &amp; Family Welfare, Government of India</a></td>
				<td>The Department of Health &amp; Family Welfare, e-Health Division has chosen in 2016 a number of standards for use in Indian e-Health, including SNOMED CT, LOINC, ISO 13940, ISO 13606, and openEHR. See the document <a href="http://mohfw.nic.in/showfile.php?lid=4138">ELECTRONIC HEALTH RECORD(EHR) STANDARDS FOR INDIA</a>.<br/>
					(Updated 2017).
				</td>
			</tr>

			<!-- New Zealand -->
			<tr>
				<td><img src="/files/who_is_using_openehr/newzealand.gif" alt="Flag of New Zealand" title="Flag of New Zealand" style="width:80px;"><p>New Zealand</p>
				<td>Health Information Standards Organisation (HISO)</td>
				<td>New Zealand's <a href="http://www.ithealthboard.health.nz/sites/all/files/Interoperability%20Reference%20Architecture%20v%201.0.pdf" target="_blank">Interoperability Reference Architecture</a> is underpinned by openEHR. One of the building blocks of this national standard (<a href="http://www.ithealthboard.health.nz/sites/all/files/HISO%2010040.2%20HIE%20Content%20Model%20v1.pdf" target="_blank">HISO 10040.2 Exchange Content Model</a>) describes a uniform content model for the purpose of health information exchange. The Content Model follows CCR in its top level headings and comprises archetypes from various sources including Nehta and openEHR CKM as well as newly modelled ones. It is intended not to establish own CKM but share Australian CKM as the healthcare systems and cultures are very similar.<br/>
					(Updated 2015).
				</td>
			</tr>

			<!-- Norway -->
			<tr>
				<td><img src="/files/who_is_using_openehr/Flag_of_Norway.png" alt="Flag of Norway" title="Flag of Norway" style="width:80px;"><p>Norway</p></td>
				<td>Nasjonal IKT</td>
				<td><a href="http://arketyper.no/ckm/">Norwegian Clinical Knowledge Manager</a>.<br/>
					(Updated 2017).
				</td>
			</tr>

			<!-- Slovenia -->
			<tr>
				<td><img src="/files/who_is_using_openehr/slovenia.gif" alt="Flag of Slovenia" title="Flag of Slovenia" style="width:80px;"><p>Slovenia</p></td>
				<td>Ministry of Health</td>
				<td>National health information exchange network enabling sharing of clinical information among all healthcare stakeholders. <br/>
					<a href="http://ukz.ezdrav.si/ckm/OKM_sl.html">National Archetype repository</a> <br/>
					Provides the interoperability backbone for eHealth applications such as eReferral, ePrescription as well as national health registries. <a href="http://www.openehr.org/who_is_using_openehr/healthcare_providers_and_authorities">See here for details</a>.<br/>
					(Updated 2015).
				</td>
			</tr>

			<!-- UK -->
			<tr>
				<td><img src="/files/who_is_using_openehr/uk_S.gif" alt="Flag of United Kingdom" title="Flag of United Kingdom" style="width:80px;"><p>UK</p></td>
				<td>National Health <br/>Service (NHS)</td>
				<td>The NHS has supports development of clinical models via the Apperta Foundation, which has a <a href="http://www.clinicalmodels.org.uk/ckm/">Clinical Knowledge Manager archetype repository</a>.<br/>
					(Updated 2017).
				</td>
			</tr>
			</tbody>
			</table>

<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
