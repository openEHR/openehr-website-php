<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Latest Releases';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- ================================= Content starts here ============================== -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<table class="TableBasic">
				<tbody>
					<tr>
						<th> Release </th>
						<th> Date</th>
						<th> Description </th>
					</tr>
					<tr>
						<td> <a href="/releases/RM/Release-1.0.3/docs/index" target="_blank">RM Release 1.0.3</a></td>
						<td> 15 December 2015 </td>
						<td> <a href="https://openehr.atlassian.net/projects/SPECRM/versions/10860" target="_blank">23 Changes made</a>; <a href="https://openehr.atlassian.net/projects/SPECPR/versions/10060" target="_blank">29 Problems fixed</a></td>
					</tr>
					<tr>
						<td> <a href="/releases/BASE/Release-1.0.3/docs/index" target="_blank">BASE Release 1.0.3</a></td>
						<td> 15 December 2015 </td>
						<td> <a href="https://openehr.atlassian.net/projects/SPECBASE/versions/11360" target="_blank">2 Changes made</a>; <a href="https://openehr.atlassian.net/issues/?jql=project%20%3D%20SPECPR%20AND%20status%20%3D%20Closed%20AND%20fixVersion%20%3D%20%22RM%20Release%201.0.3%22%20AND%20text%20~%20%22overview%22%20ORDER%20BY%20priority%20DESC%2C%20updated%20DESC" target="_blank">5 Problems fixed</a></td>
					</tr>
				</tbody>
			</table>

<!-- =========================================== Content ends here =============================================== -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
