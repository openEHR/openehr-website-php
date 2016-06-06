<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Membros';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
		<p>The details of membership to the Localisation Programme is explained in the <a href="governance">Governance section</a>, but basicaly these are:</p>
			<p><em>1) Qualified Members:</em> these are the people who will do the actual work with substantial understanding of openEHR, experience and skill set. Current members are:</p>
			<ul>
				<li><a href="#shinji_kobayashi">Shinji Kobayashi</a> (Japan / Ehime University)</li>
				<li>Eizen Kimura (Japan / Ehime University)</li>
				<li><a href="#erik_sundvall">Erik Sundvall</a> (Sweden / Link&ouml;ping University)</li>
				<li><a href="#rong_chen">Rong Chen</a> (Sweden / Cambio Systems)</li>
				<li><a href="#pablo_pazos">Pablo Pazos Gutierrez</a> (Uruguay / Independent ICT)</li>
				<li><a href="#jussara_rotzsch">Jussara R&ouml;tzsch</a> (Brazil / Independent Consultant and Ministry of Health)</li>
				<li>Nuno Miguel Monteiro (Portugal / Critical Software)</li>
				<li>Ricardo Correia (Portugal / University of Porto)</li>
				<li>Sergio Carmona (Chile / Obstetrics &amp; Gynecology MD)</li>
				<li><a href="#ian_mcnicoll">Ian McNicoll</a> (UK / Ocean Informatics)</li>
				<li><a href="#thomas_beale">Thomas Beale</a> (UK / Ocean Informatics )</li>
				<li><a href="#sebastian_garde">Sebastian Garde</a> (Germany / Ocean Informatics)</li>
				<li>Shahla Fozonkhah (Australia / Ocean Informatics)</li>
				<li><a href="#sam_heard">Sam Heard</a> (Australia / Ocean Informatics)</li>
				<li>Alastair Kenworthy (New Zealand / Ministry of Health)</li>
				<li>Chris Paton (New Zealand / University of Auckland)</li>
				<li>David Hay (New Zealand / Orion Health &amp; HL7 NZ)</li>
				<li>Jim Warren (New Zealand / University of Auckland)</li>
				<li><a href="#koray_atalag">Koray Atalag</a> (New Zealand / University of Auckland)</li>
				<li>Rowena Cullen (New Zealand / Victoria University of Wellington)</li>
			</ul>
			<p><em>2) Local Members:</em> these are enthusiastic individuals in a particular locale who have an interest in and potential to contribute to openEHR. They will be under each country in the Countries page.</p>
			<p><em>3) Programme Committe:</em> qualified and elected members with decision making responsibility ( between 5 and 9 individuals)</p>
			<br/>
			
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/shinji_kobayashi.php');?>
			<br/>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/erik_sundvall.php');?>
			<br/>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/rong_chen.php');?>
			<br/>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/pablo_pazos.php');?>
			<br/>			
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/jussara_rotzsch.php');?>
			<br/>			
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/ian_mcnicoll.php');?>
			<br/>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/thomas_beale.php');?>
			<br/>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/sebastian_garde.php');?>
			<br/>
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/sam_heard.php');?>
			<br/>	
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/bios/koray_atalag.php');?>
			<br/>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>