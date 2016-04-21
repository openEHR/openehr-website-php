<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Membros do Conselho Últimos';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
			
			<h1><?php echo "$PageName";?></h1>
			
			<h2 id="foundationboard">Board of Governors 2012 - Feb 28 2015</h2>
			
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/sam_heard.php');?>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/david_ingram.php');?>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/dipak_kalra.php');?>
			
			<h2 id="managementboard">Management Board 2012 - Feb 28 2015</h2>
		
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/sam_heard.php');?>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/bill_aylward.php');?>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/david_ingram.php');?>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/dipak_kalra.php');?>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/ian_mcnicoll.php');?>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/jussara_rotzsch.php');?>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/joana_feijo.php');?>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/rong_chen.php');?>
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>
