<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Members';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>Software Program Qualified Members</h2>
			<ul>
				<li>David Moner</li>
				<li><a href="#diego_tomas_bosca">Diego Tomas Boscá</a></li>
				<li><a href="#erik_sundvall">Erik Sundvall</a> (Coordinator)</li>
				<li><a href="#heath_frankel">Heath Frankel</a></li>
				<li><a href="#heather_leslie">Heather Leslie</a></li>
				<li><a href="#koray_atalag">Koray Atalag</a></li>
				<li><a href="#pablo_pazos">Pablo Pazos Gutierrez</a></li>
				<li>Ricardo Correia</li>
				<li><a href="#rong_chen">Rong Chen</a></li>
				<li><a href="#sam_heard">Sam Heard</a></li>
				<li>Seref Arikan</li>
				<li>Sergio Freire</li>
				<li><a href="#shinji_kobayashi">Shinji Kobayashi</a></li>
				<li><a href="#thomas_beale">Thomas Beale</a></li>
				<li>Tony Shannon</li>
			</ul>
			
			<h2>Software Program Committee Members</h2>
			<ul>
				<li>Alan James</li>
				<li><a href="#diego_tomas_bosca">Diego Tomas Boscá</a></li>
				<li><a href="#erik_sundvall">Erik Sundvall</a> (Coordinator)</li>
				<li><a href="#pablo_pazos">Pablo Pazos Gutierrez</a></li>
				<li><a href="#rong_chen">Rong Chen</a></li>
				<li>Seref Arikan</li>
			</ul> 
			
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/diego_bosca.php');?>
			<br/>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/erik_sundvall.php');?>
			<br/>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/heath_frankel.php');?>
			<br/>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/heather_leslie.php');?>
			<br/>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/koray_atalag.php');?>
			<br/>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/pablo_pazos.php');?>
			<br/>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/rong_chen.php');?>
			<br/>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/sam_heard.php');?>
			<br/>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/shinji_kobayashi.php');?>
			<br/>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/thomas_beale.php');?>
			<br/>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
