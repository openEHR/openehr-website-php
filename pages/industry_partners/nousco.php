<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Nousco';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<a href="http://nousco.com/" target="_blank"><img src="/files/industry_partners/nousco_logo.png" class="IndustryLogoImg"></a>
			
			<p><em>Headquarters:</em> South Korea</p>
			<p><em>Branches:</em> Seoul, South Korea</p>
			<p><em>Size:</em> 20+ employees</p>
			<p><em>Trading since:</em> 2008</p>
			<p><a href="http://nousco.com/" target="_blank">website</a></p>
			
			
			<h2>Services</h2>
			<p>Healthcare technology:</p>
			<ul>
				<li>EHR Platform (based on openEHR & HI standards)</li>
				<li>HIS (Hospital Information System) incorporating openEHR-based EHR</li>
				<li>PHR service with EHR platform</li>
				<li>Health information Exchange</li>
				<li>Services of hospital logistics</li>
				<li>Consulting related to EHR</li>
			</ul>
			<p>Software development:</p>
			<ul>
				<li>Secure OS / mobile OS</li>
				<li>VDI (Virtual Desktop Infrastructure)</li>
				<li>IoT (Internet of Things) platform</li>
			</ul>
			
			<h2>Solutions</h2>
			<ul>
				<li>easyEHR(TM) is a Health Information System based on openEHR & HI standards (ISO/HL7 ...)</li>
				<li>easyPHR is a kind of interconnected PHR providing smart personal health manager. easyPHR is interoperable with HIS and supports ISO/IEEE 11073 standard</li>
				<li>NUSTACK is a scalable and secure VDI system for Hospital</li>
			</ul>
			
			<h2>Customers</h2>
			<p>Nousco's customers are general Hospitals, PHD (Personal Health Device) manufacturers, patients using PHR service, and researchers in healthcare field.</p>
		
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
