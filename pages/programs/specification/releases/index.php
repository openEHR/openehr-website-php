<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Releases';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header_english.php');
?>

		<div id="Content">
<!-- ================================= Content starts here ============================== -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<ul>
			<li><a href="/programs/specification/releases/latestreleases">Latest Releases</a></li>
			<li><a href="/programs/specification/releases/historicalrelease">Historical Releases</a></li>
			</ul>

<!-- =========================================== Content ends here =============================================== -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
