<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Fale Conosco';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
			
			<h1><?php echo "$PageName";?></h1>
			
			<p>Para contactar o  webmaster clique aqui <a href="mailto:webmaster@openehr.org">aqui</a>.</p>
			<p>Para contactar um membro da diretoria clique aqui<a href="mailto:foundationoffice@openehr.org">aqui</a>.</p>			
			<p>Para contactar a secretaria  da fundação clique aqui<a href="mailto:foundationoffice@openehr.org">aqui</a>.</p>
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>
