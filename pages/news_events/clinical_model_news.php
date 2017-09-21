<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'CKM Activity';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			<div style="position: relative; top:10px; padding-left:1px; padding-right:10px; word-wrap:break-word; ">

			<a class="twitter-timeline" data-width="280" data-height="500" href="https://twitter.com/openEHRCKM">@openEHRCKM</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

			</div>
				
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
