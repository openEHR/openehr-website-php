<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'Meetings';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			<h2>Face to face meetings</h2>
			<ul>
				<li>2014-09-16: Roadmap Meeting. <a href="2014-09-16_openehr_meeting_report">Report</a>; <a href="http://www.openehr.org/wiki/display/oecom/September+2014+Roadmap+Meeting">wiki page</a>.</li>
			</ul>
			
					
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>
