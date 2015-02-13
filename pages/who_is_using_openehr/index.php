<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Who is using openEHR?';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<ul>
				<li><a href="healthcare_providers_and_authorities">Deployed Solutions</a></li>
				<li><a href="funded_research_projects">Funded Research Projects</a></li>
				<li><a href="nonprofit_and_open_source_organisation">Non-profit and Open Source Organisations</a></li>
				<li><a href="governments">Governments</a></li>
				<li><a href="academic_research">Academic Research</a></li>
			</ul>
		
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
