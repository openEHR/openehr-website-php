<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Board of Governors';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
			
			<h1><?php echo "$PageName";?></h1>
			<h2>Members</h2>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/david_ingram.php');?>
				<p>Member since inception.</p>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/sam_heard.php');?>
				<p>Member since inception.</p>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/bill_aylward.php');?>
				<p>Member since 2013.</p>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/thomas_beale.php');?>
				<p>Member since October 2016.</p>
			
			<h2>Contact</h2>
			<p><a href="mailto:govboard@openehr.org">Contact Board of Governors</a></p>

<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
