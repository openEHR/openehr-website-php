<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'IRYO';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			<a href="http://www.iryo.io" target="_blank"><img src="/files/industry_partners/iryo_logo.png" class="IndustryLogo"></a>
			
			<p><em>Headquarters:</em> Slovenia</p>
			<p><em>Size:</em> 10 employees</p>
			<p><em>Trading since:</em>(startup - 2018)</p>
			<p><a href="http://www.iryo.io" target="_blank">website</a></p>
			
			<p>Iryo is a Slovenia-based IT company focused on improving the user experience of all stakeholders in the healthcare system. The Iryo system is using openEHR for increasing interoperability in healthcare, zero-knowledge data storage for data security and patient enforceable privacy, alongside ZeroPass distributed private key recovery. On top of that, the company is able to build global open-sourced permisionless protocol for healthcare solutions that any third party can join.</p>
            
			<h2><a href="http://www.code24.nl/en/Home/Medische-database" target="_blank">Solutions</a></h2>
			<p>Pilot phase openEHR-based secure CDR.</p>

			<h2><a href="http://www.code24.nl/en/Home/Referenties" target="_blank">Customers</a></h2>
			<ul>
				<li>Middle East - <a href="https://www.tyingvines.org/tyingvines/">Tying Vines Inc</a>: EHR system for refugee camps (<a href="https://medium.com/iryo-network/announcing-the-¡rst-deployment-of-the-iryo-systemimproving-healthcare-for-refugees-bee8c441e7e6">deployment announcement</a>;</li>
				<li>Slovenia - Adriatic Slovenica health insurance company (<a href="https://medium.com/iryo-network/iryo-teams-up-with-adriatic-slovenica-insurancecompany-to-disrupt-healthcare-e5568d0e8e85">partnership announcement</a>).</li>
			</ul>
		
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
