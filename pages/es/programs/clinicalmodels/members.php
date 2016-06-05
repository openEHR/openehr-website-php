<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Miembros';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>You can find detailed information about openEHR CKM users <a href="http://openehr.org/ckm/#userstatistics" target="_blank">here</a>.</p>
			
			<h2>Coordinators</h2>
			<ul>
			    <li><a href="#heather_leslie">Heather Leslie</a></li>
                <li><a href="#silje_ljosland_bakke">Silje Ljosland Bakke</a></li>
				<li><a href="#ian_mcnicoll">Ian McNicoll</a></li>
			</ul>
			
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/heather_leslie.php');?>
			<br/>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/silje_ljosland_bakke.php');?>
			<br/>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/ian_mcnicoll.php');?>
			<br/>

			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_footer.php');?>
