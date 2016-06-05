<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Contacto';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
			
			<h1><?php echo "$PageName";?></h1>
			
			<p>For issues with openEHR website, wiki etc: <a href="mailto:webmaster@openehr.org">contact webmaster</a></p>
			<p>For administrative questions: <a href="mailto:foundationoffice@openehr.org">contact Foundation Office</a>.</p>			
			<p>For Management Board queries: <a href="mailto:mgtboard@openehr.org">contact Management Board</a>.</p>			
			<p>For Board of Governors queries: <a href="mailto:govboard@openehr.org">contact Board of Governors</a>.</p>
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_footer.php');?>