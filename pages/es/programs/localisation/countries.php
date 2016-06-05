<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Países';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>You can find a list of the countries with openEHR deployed <a href = "/es/who_is_using_openehr">here</a>.</p>

<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_footer.php');?>