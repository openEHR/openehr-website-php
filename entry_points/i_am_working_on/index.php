<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'I am working on';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>Following links will provide you guidelines according to your area of interest:</p>
			<ul>
				<li><a href="/entry_points/i_am_working_on/clinical_standardisation">Clinical Standardisation</a></li>
				<li><a href="/entry_points/i_am_working_on/government_programme">Government Programme</a></li>
				<li><a href="/entry_points/i_am_working_on/building_solutions">Building Solutions</a></li>
				<li><a href="/entry_points/i_am_working_on/obtaining_solutions">Obtaining Solutions</a></li>
			</ul>
				
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>