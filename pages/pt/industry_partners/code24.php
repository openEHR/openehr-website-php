<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Code24';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<a href="https://www.code24.nl/" target="_blank"><img src="/files/industry_partners/code24_logo.png" class="IndustryLogoImg"></a>
			
			<p><em>Headquarters:</em> The Netherlands</p>
			<p><em>Size:</em> 7 employees</p>
			<p><em>Trading since:</em> 2010</p>
			<p><a href="https://www.code24.nl/" target="_blank">website</a></p>
			
			<h2>Services</h2>
			<p><a href="http://www.code24.nl/consultancy" target="_blank">Consultancy</a></p>
			<p><a href="http://www.code24.nl/training" target="_blank">Training</a></p>
			
			<h2>Solutions</h2>
			<p>mConsole - Care provider portal</p>
			<p>Base24 - Clinical Data Repository, based on the openEHR specifications release 1.0.2</p>
			
			<h2>Customers</h2>
			<p><a href="http://www.ggzfriesland.nl" target="_blank">GGZ Friesland mental health solution</a></p>
			<p><a href="http://www.ggz-nhn.nl/" target="_blank">GGZ Noord-Holland-Noord e-pharmacy / e-medications solution</a></p>
			<p><a href="http://www.rkz.nl/" target="_blank">RKZ e-referrals solution</a></p>
		
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>
