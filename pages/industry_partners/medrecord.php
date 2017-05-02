<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'MEDrecord BV';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<a href="http://www.medrecord.nl/" target="_blank"><img src="/files/industry_partners/medrecord_logo.png" class="IndustryLogo"></a>
			
			<p><em>Headquarters:</em> Netherlands</p>
			<p><em>Size:</em> 10-20 employees</p>
			<p><em>Trading since:</em> 2007</p>
			<p><a href="http://www.medrecord.nl/" target="_blank">website</a></p>
			
			<h2>Services</h2>
			<p>MEDrecord provides a ground-breaking eHealth platform completely based on the openEHR standard. With our extensive experience in the eHealth sector our Cloud based API's are the most competitive solution in the market to date.</p>
			
			<h2>Solutions</h2>
			<ul>
				<li>CE II certified automated analysis of EEG for epilepsy patients</li>
		          <li>Prediction models for patients with Atrial fibrillation</li>
		          <li>A wearable for Asthma/COPD patients</li>
		          <li>A wearable for the prediction of hypo attacks at Diabetic patients</li>
            </ul>
			
			<h2>Customers</h2>
            <p>Horizon2020 myAirCoach project, funded to end 2018.</p> 
            <p>Within the myAirCoach project an advanced wearable for Asthma COPD patients is being developed. The infrastructure is based on the MEDrecord openEHR platform. Our research is in use by the UK National Institute for Health and Care Excellence (NICE) <a href="https://www.nice.org.uk/advice/mib90/chapter/Patient-organisation-comments">[ref]</a>.</p>
		
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
