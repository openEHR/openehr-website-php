<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'CKMs Nacionales';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>

			<p>The following national and other Clinical Knowledge Manager (CKM) instances exist around the world:</p>
			<ul>
				<li><a href="http://ckm.hscic.gov.uk/ckm/" target="_blank">UK HSCIC</a></li>
				<li><a href="http://www.clinicalmodels.org.uk/ckm/" target="_blank">ClinicalModels.org.uk</a></li>
				<li><a href="http://dcm.nehta.org.au/ckm/" target="_blank">NeHTA (Australia)</a></li>
				<li><a href="http://arketyper.no/ckm/" target="_blank">Norway Nasjonal IKT</a></li>
				<li><a href="http://ukz.ezdrav.si/ckm/OKM_sl.html" target="_blank">Slovenia Ministry of Health</a></li>
				<li><a href="http://www.centerms.org.br:8009/ckm/" target="_blank">Brasil Minstry of Health</a></li>
			</ul>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_footer.php');?>
