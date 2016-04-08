<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Specifications Editorial Committee (SEC)';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
			
			<h1><?php echo "$PageName";?></h1>
			
			<h2>Meeting Reports</h2>
			Meeting proceedings are available <a href="https://openehr.atlassian.net/wiki/display/spec/Specifications+Editorial+Committee+%28SEC%29+Work+area">here</a>.
			A community-wide <a href="/news_events/meetings">roadmap meeting</a> was held in 2014.

			<h2>Members</h2>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/koray_atalag.php');?>
				<p>Member since 1 Feb 2015.</p>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/thomas_beale.php');?>
				<p>Member since 1 Feb 2015. <em>Joint Program Lead</em></p>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/diego_bosca.php');?>
				<p>Member since 1 Feb 2015.</p>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/rong_chen.php');?>
				<p>Member since 1 Feb 2015. <em>Joint Program Lead</em></p>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/heath_frankel.php');?>
				<p>Member since 1 Feb 2015.</p>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/sebastian_iancu.php');?>
				<p>Member since 1 Feb 2015.</p>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/shinji_kobayashi.php');?>
				<p>Member since 1 Feb 2015.</p>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/bostjan_lah.php');?>
				<p>Member since 1 Feb 2015.</p>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/ian_mcnicoll.php');?>
				<p>Member since 1 Feb 2015.</p>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/pablo_pazos.php');?>
				<p>Member since 1 Feb 2015.</p>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/bjorn_naess.php');?>
				<p>Member since 1 Feb 2015.</p>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/erik_sundvall.php');?>
				<p>Member since 1 Feb 2015.</p>
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
