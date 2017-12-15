<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Virtual Care';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
			
			<h1><?php echo "$PageName";?></h1>

			<a href="http://virtualcare.pt/" target="_blank"><img src="/files/industry_partners/virtual_care_logo.png" class="IndustryLogo"></a>
			
			<p><em>Headquarters:</em>Porto, Portugal</p>
			<p><em>Size:</em> 6 employees</p>
			<p><em>Trading since:</em> 2012</p>
			<p><a href="http://virtualcare.pt/" target="_blank">website</a></p>
			
			<h2>Overview</h2>
			<p>VirtualCare is a leading company in openEHR education and training. We provide online and in-company courses; we have also developed ebooks and tools, such as the openEHR modelling canvas kit. We have a comprehensive obstetrics solution that is being migrated to openEHR.</p>
			<p>VirtualCare is a spin-off founded by researchers at University of Porto, which developed innovative systems for obstetrics, anesthesiology and psychology.</p>

			<h2>Solutions</h2>
			<h3>VC ObsCare</h3>
			<p>VC ObsCare is a comprehensive and fully integrated e-Health system for obstetrics suitable for hospitals and clinics of all sizes. In 2015, the Northern Health Regional Administration (ARS Norte) acquired a regional version of VC ObsCare, as well as the license to use this software in all public hospitals in Portugal. VC ObsCare is migrating to openEHR.</p>

			<h2>Customers</h2>
			<p>Currently (2017), VC ObsCare is installed in 11 Hospitals and 2 local health units in Portugal.</p>

			<h2>Training</h2>
			<p>VirtualCare provides the online course Introduction to openEHR. This is a certificated education and training program, and at the end of this course the students are expected to know:</p>
			<ul>
				<li>Basic principles of clinical content modeling and its processes</li>
				<li>The Electronic Health Record architecture based on openEHR model</li>
				<li>How to use the modeling tools to create and edit archetypes and templates</li>
				<li>What is the Clinical Knowledge Manager (openEHR CKM) and how to use it</li>
				<li>How to participate and contribute in the creation and maintenance of openEHR content</li>
				<li>How to implement openEHR in software.</li>
			</ul>

			<h2>Software and Devops</h2>
			<ul>
				<li>Rendering engine for EHR clinical documents using IHE/XDS.b interface on openEHR standards.</li>
				<li>API for Patient Consent Authorization for sharing EHR.</li>
			</ul>

<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
