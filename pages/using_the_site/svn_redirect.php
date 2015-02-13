<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Subversion Relocation';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>The openEHR Subversion site is now turned off. Most projects that were housed there are now available under the <a href="https://github.com/openEHR" target="_blank">openEHR GitHub project.</a> Some projects have been shelved due to obsolescence, and their Subversion repository archives can be obtained on request. Please contact <a href="mailto:webmaster@openehr.org">the webmaster</a> if you require access.</p>

<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
