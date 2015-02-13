<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Government Bodies';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>Three key problems need to be solved for government e-health programmes:</p>
			<ul>
				<li>the sharing of health information across provider enterprises, enabling healthcare professionals to deliver efficient team-based care;</li>
				<li>the sharing of health information between systems where it is captured and consumer systems, e.g. decision support, medication management;</li>
				<li>the computability of health information, ensuring that the power of ICT can be used safely on data, e.g. in support of medical research.</li>
			</ul>
			<p>If these requirements can be met, the quality of preventative medicine, medical research, and medication management, to name a few, should significantly increase. Similarly the efficiency of data collection (capture once, share many times) should reduce the costs and adverse events in the system. The key to solving these problems is 'standardisation', but not just any standardisation. Firstly, not only does the data representation have to be standardised so as to be shared, its semantics - i.e. clinical structure and meaning - have to be standardised. A standard approach to querying is also needed.</p>
			<p>openEHR supports such an information infrastructure, because it is designed to represent semantic models of content, from the GUI through to the database. It is an integrated framework rather than a set of disparate official standards which themselves need to be integrated. It supports the definition of clinical content via archetypes - in fact, the archetype formalism is now a CEN standard (EN13606-2), and will be an ISO standard by end 2008. Via the use of openEHR Templates, shareable data sets can be defined across any jurisdiction. These features provide a basis for defining the shared clinical, demographic and administrative semantics across jurisdictions up to and including the national level.</p>
			<p style="text-align:center;"><a href="/files/getting_involved/government_bodies.png"><img src="/files/getting_involved/government_bodies.png" alt="openEHR Ecosystem - Government Bodies" title="openEHR Ecosystem - Government Bodies" width="480px" style="border: solid 1px #CCCCCC;"></a></p>	
			
			<h2>What can openEHR do for you</h2>
			<p>Strategically, openEHR offers 3 key features for national e-health programmes:</p>
			<ul>
				<li>a health computing platform approach, which opens up health data for use by multiple applications; this leads to a <em>platform-based health ICT economy</em>, in which various suppliers can produce back- or front-end systems that integrate across a defined interface, rather than the current situation of numerous silos;</li>
				<li><em>clinical content and process modelling is managed by clinicians</em>, separately from the software, using the powerful openEHR archetype and template formalisms;</li>
				<li><em>integration of existing standards and systems</em> currently supporting existing standards is managed semantically, using the openEHR template data schema approach.</li>
			</ul>
			<p>The openEHR platform is designed to provide a coherent basis for using and integrating de jure and industry standards, including <a href="http://www.ihtsdo.org/" target="_blank">IHTSDO</a> SNOMED CT, <a href="http://www.who.int/classifications/icd/en/" target="_blank">WHO ICD</a> and many other terminologies, <a href="http://www.ihe.net/">IHE</a> services, <a href="http://www.hl7.org/" target="_blank">HL7</a> message, document and service definitions, <a href="http://www.cen.eu/CEN/Sectors/TechnicalCommitteesWorkshops/CENTechnicalCommittees/Pages/Standards.aspx?param=6232&title=CEN%2FTC+251" target="_blank">CEN TC251</a> and <a href="http://www.iso.org/iso/iso_technical_committee?commid=54960" target="_blank">ISO TC 215</a> health standards, health standards from <a href="http://www.who.int/classifications/icd/en/" target="_blank">OMG HDTF</a>, and many others.</p>
			
			<h2>How you can get involved</h2>
			<p>You can become openEHR Partner through the Organisational membership, or members of your team can become part of openEHR as the Individual members. Find out more about <a href="/about/membership#nationalpartner">membership</a>.</p> 
			
			<h2>How openEHR works for others</h2>
			<p>The clinical modelling is already in use at the UK NHS, where some 220 archetypes and 45 templates have been developed in 2007/2008 (NHS archetypes; NHS templates),
			and is under review by many other government e-health programmes, including in Australia, Denmark, Brazil and various Eastern European countries. In 2008, the Danish and Swedish governments decided to use openEHR for clinical modelling.</p>
			<p>For list of countries which are using openEHR technology see <a href="/who_is_using_openehr/governments">who is using openEHR</a>.</p>
				
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
