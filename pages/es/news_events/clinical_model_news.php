<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Actividad del CKM';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			<div style="position: relative; top:10px; padding-left:1px; padding-right:10px; word-wrap:break-word; height:600px; ">
			<a class="twitter-timeline"  href="https://twitter.com/clinicalmodels"  data-widget-id="362155991539806208">Tweets by @clinicalmodels</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
				
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_footer.php');?>
