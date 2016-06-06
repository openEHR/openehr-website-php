<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Fundação';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>Legal Status</h2>
			<p>The openEHR Foundation is a not-for-profit company, limited by guarantee, of University College London, UK. It is regulated under the UK Companies Acts 1985 and 1989. The name 'openEHR' has been registered internationally as a Trade Mark. One of its main legal functions is as the holder of its Intellectual Property, which it <a href="/pt/about/intellectual_property">makes freely available</a>.</p>
			
			<h2>openEHR Vision</h2>
			<p>The openEHR Foundation vision is of a world in which healthcare routinely obtains benefit from ICT, in particular:</p>
			<ul>
				<li>life-long interoperable electronic health records (EHRs);</li>
				<li>computing on EHRs to improve the quality of health care and research.</li>
			</ul>
			
			
			<h2>openEHR Mission</h2>
			<p>The Foundation is proceeding on the basis of three principles: rigour, engagement and trust. These correspond to the key activities of the Foundation, organised under the four Programs:</p>
			<ul>
				<li><a href="/pt/programs/specification/">Specification Program</a>:
					<ul>
						<li>developing rigorous, open specifications, validated by implementation;</li>
						<li>participating in international standards development;</li>
					</ul>
				</li>
				<li><a href="/pt/programs/clinicalmodels/">Clinical Models Program</a>: 
					<ul>
						<li>developing clinical models (archetypes and templates), terminology interfaces;</li>
						<li>engaging in clinical implementation projects;</li>
					</ul>
				</li>
				<li><a href="/pt/programs/software/">Software Program</a>: 
					<ul>
						<li>developing open-source software and tools;</li>
						<li>participating in connectathons and implementation trials;</li>
					</ul>
				</li>
				<li><a href="/pt/programs/localisation/">Localisation Program</a>: 
					<ul>
						<li>advocacy and locale-based education and dissemination;</li>
						<li>working with national standards organisations;</li>
					</ul>
				</li>
			</ul>
			<p>All of openEHR Programs will support health informatics education.</p>
			
			<h3>Developing Trust: patients and citizens at the centre</h3>
			<p>As we develop the specifications and engage clinicians, it is increasingly important to ensure that the platform benefits people using the health service.
			At this point the openEHR architecture ensures:</p>
			<ul>
				<li>that information (rather than just authorisation data) can be kept in personal storage such as a memory key or phone;</li>
				<li>that information can be stored with no identifying information within the EHR;</li>
				<li>that information does not have to be centralised, being stored and/or made available only where it is required;</li>
				<li>accountability of users and providers;</li>
				<li>that the owner of the record can partition the information and control access if required.</li>
			</ul>
			<p>The next phase of uptake and implementation will require careful scrutiny by those using the health service and providers of personal health record services.</p>
			
			<h3>openEHR as a standard</h3>
			<p>The success of openEHR is in no small part due to the formal acceptance of CEN 13606 as a European and ISO standard. This standard is based on many aspects of the openEHR design approach, and part 2 of the standard is a snapshot of the openEHR Archetype specifications. The openEHR Foundation will work closely with CEN, ISO, HL7 and OMG and other standards organisations on EHR-related and clinical modelling standards.</p>
			<p>As terminology is a key-stone component of semantic interoperability, openEHR archetypes explicitly provide various ways to implement terminology bindings. The Foundation will work closely with IHTSDO on all terminology-related matters, as well as with other terminology maintainers.</p>
			
			<h3>Finally...</h3>
			<p>The openEHR Foundation will continue to proceed based on its usual 3 key activities ... implementation, implementation, implementation.</p>
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>