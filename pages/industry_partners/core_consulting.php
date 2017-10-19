<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'CORE Consulting';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
			
			<h1><?php echo "$PageName";?></h1>

			<a href="http://www.coreconsulting.com.br/" target="_blank"><img src="/files/industry_partners/core_consulting_logo.png" class="IndustryLogo"></a>
			
			<p><em>Headquarters:</em>Brasilia, Brazil</p>
			<p><em>Size:</em> 50 employees</p>
			<p><em>Trading since:</em> 2003</p>
			<p><a href="http://www.coreconsulting.com.br/" target="_blank">website</a></p>
			
			<h2>Overview</h2>
			<p>CORE Consulting's experience in Business Architecture, Service Oriented Architecture (SOA), Application Programming Interface (API) and Business Process Management (BPM) enables us to provide the architectural vision and critical advice to support the development and implementation of innovative eHealth solutions in Brazil.</p>
			<p>CORE Consulting provides also architecture governance to safeguard existing information technology strategies.</p>
			<p>The CORE team is involved in several ehealth projects, including the proposal to create a national center for terminology resources and clinical knowledge artifacts based on the openEHR specifications. This center will publish and conduct governance of national agreed clinical models and terminologies, aiming to support clinical interoperability between disparate information systems and continuous and personalized quality care for the Brazilian population. These models will be adopted in all health information exchanges across the country and will be used to build a national clinical data repository based on openEHR. </p>
			<p>To support and enhance our strategic vision, CORE takes part in several standardization committees and also in technical and scientific communities, standards such as OpenEHR, IHE (PIX / MPI, PDQ, XDS.b), HL7, SNOMED-CT.</p>

			<h2>Services</h2>
			<h3>Consultancy</h3>
			<p>CORE provides consultancy on ehealth enterprise architecture and clinical knowledge management to support the deployment of Electronic Health Records and clinical applications.</p>

			<h3>Training</h3>
			<p>SOA, BPM, BIGDATA and training courses in Health Informatics, openEHR and terminologies.</p>

			<h2>Software and Devops</h2>
			<ul>
				<li>Rendering engine for EHR clinical documents using IHE/XDS.b interface on openEHR standards.</li>
				<li>API for Patient Consent Authorization for sharing EHR.</li>
			</ul>

<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
