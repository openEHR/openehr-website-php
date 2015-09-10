<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Conferences';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			<h2>MedInfo</h2>
			<table class="TableInvisible">
			<tbody>
			<tr>
				<td style="text-align:center;"><img width="100" src="http://medinfo2015.com/wp-content/uploads/2014/10/LOGO-MEDINFO-site-2.jpg"></td>
				<td width="650px">
				<p>August 2015: MedInfo 2015. <a href="/pages/news_events/conference_reports/2015-08-19_medinfo_2015">Report</a>; <a href="https://openehr.atlassian.net/wiki/display/resources/MEDINFO+2015+-+Sao+Paulo%2C+Brazil">wiki page</a>.</p>
				</td>
			</tr> 
			</tbody>
			</table>	
					
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
