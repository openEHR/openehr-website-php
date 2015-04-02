<?php
header('Content-type: text/html; charset=utf-8');
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Management Board';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
			
			<h1><?php echo "$PageName";?></h1>
			
			<h2 id="bogrep">Board of Governors representative</h2>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/sam_heard.php');?>

			<h2 id="industrypartners">Industry Partner representatives</h2>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/rong_chen.php');?>
				<p>Elected Feb 2015.</p>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/tomaz_gornik.php');?>
				<p>Elected Feb 2015.</p>
			
			<h2 id="memberreps">Membership representatives</h2>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/koray_atalag.php');?>
				<p>Elected Feb 2015.</p>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/ian_mcnicoll.php');?>
				<p>Elected Feb 2015.</p>
			
			<h2 id="invitedspecialists">Invited specialist members</h2>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/thomas_beale.php');?>
				<p>Accepted Mar 2015.</p>

<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
