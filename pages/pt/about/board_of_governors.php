<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Conselho de Governadores';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
			
			<h1><?php echo "$PageName";?></h1>
			<h2>2015 Governance Refresh - status</h2>
			<p>In accordance with the openEHR Foundation Governance renewal process, and the appointment of an elected Management Board, membership of the Board of Governors is expected to change in coming weeks after consultation with Past Board Members and the wider community.</p>

			<h2>Members</h2>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/david_ingram.php');?>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/sam_heard.php');?>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/jussara_rotzsch.php');?>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/bill_aylward.php');?>
			
			<h2>Contact</h2>
			<p><a href="mailto:govboard@openehr.org">Contact Board of Governors</a></p>

<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>
