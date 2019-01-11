<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Accenda';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<a href="http://www.accenda.eu" target="_blank"><img src="/files/industry_partners/accenda_logo.png" class="IndustryLogo"></a>
			
			<p><em>Headquarters:</em> United Kingdom</p>
			<p><em>Size:</em> 8 employees</p>
			<p><em>Trading since:</em> 2007</p>
			<p><a href="http://www.accenda.eu" target="_blank">website</a></p>

			<h2>Overview</h2>
			<p>Accenda Limited is a UK-based software consulting business.  We help our clients streamline processes, reduce waste and improve efficiencies. We work closely with NHS Digital to help deliver solutions based on cutting-edge technology. We have a 'sleeves-rolled-up' approach to engaging on projects and are passionate about delivering solutions that deliver real value for patients, clinicians and stakeholders.</p>

			<h2>Services</h2>
			<p>We provide consulting and development services for:</p>
			<ul>
				<li>HL7 FHIR integration</li>
				<li>openEHR integration</li>
				<li>Primary and Secondary Care systems integration</li>
				<li>NHS Digital accredited Commercial Third Party HSCN-connected secure and resilient hosting facilities</li>
			</ul>
    
			<h2>Customers</h2>
			<h3>UK</h3>
			<ul>
				<li>NHS Clinical Commissioning Groups (CCGs)</li>
				<li>NHS Foundation Trusts</li>
			</ul>
			<h3>Global</h3>
			<ul>
				<li>Pharmaceutical</li>
			</ul>

		
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
