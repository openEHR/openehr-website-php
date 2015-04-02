<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Board of Governors';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
			
			<h1><?php echo "$PageName";?></h1>
			<h2>2015 Governance Refresh - status</h2>
			<p>In accordance with the openEHR Foundation Governance renewal process, and the appointment of an elected Management Board, membership of the Board of Governors is expected to change in coming weeks after consultation with Past Board Members and the wider community.</p>

			<h2>Members</h2>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/david_ingram.php');?>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/sam_heard.php');?>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/dipak_kalra.php');?>
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
