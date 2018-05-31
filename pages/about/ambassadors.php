<?php
header('Content-type: text/html; charset=utf-8');
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'openEHR Ambassadors';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
			
			<h1><?php echo "$PageName";?></h1>
			
			<h2 id="china">China</h2>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/huilong_duan.php');?>
				<p>Reappointed Feb 2017.</p>
			
			<h2 id="japan">Japan</h2>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/shinji_kobayashi.php');?>
				<p>Reappointed Apr 2018.</p>
			
			<h2 id="philippines">The Philippines</h2>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/ryan_banez.php');?>
				<p>Appointed Sep 2017.</p>
			
			<h2 id="germany">Germany</h2>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/birger_haarbrandt.php');?>
				<p>Appointed May 2018.</p>
			
			<h2 id="south_america">South America</h2>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/pablo_pazos.php');?>
				<p>Appointed May 2018.</p>
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
