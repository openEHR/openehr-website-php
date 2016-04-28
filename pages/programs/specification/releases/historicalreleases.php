<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Historical Releases';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header_english.php');
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
						<td> <a href="currentbaseline">Current baseline</a></td>
						<td> (latest) </td>
						<td> </td>
					</tr>
					<tr>
						<td> <a href="/releases/1.0.2">Release 1.0.2</a></td>
						<td> 31 December 2008 </td>
						<td> 22 Change Requests. </br><a href="https://openehr.atlassian.net/projects/SPEC/versions/10030">Release notes.</a></td>
					</tr>
					<tr>
						<td> <a href="/releases/1.0.1">Release 1.0.1</a></td>
						<td> 15 April 2007 </td>
						<td> 56 Change Requests. </br><a href="https://openehr.atlassian.net/projects/SPEC/versions/10019">Release notes.</a></td>
					</tr>
					<tr>
						<td> <a href="/releases/1.0"><b>Release 1.0</a></td>
						<td> 07 February 2006 </td>
						<td> 54 Change Requests. </br><a href="https://openehr.atlassian.net/projects/SPEC/versions/10018">Release notes.</a></td>
					</tr>
					<tr>
						<td> <em>Release 0.96</em></td>
						<td> 01 August 2005 </td>
						<td> Error correction release. <br/>12 Change Requests </br><a href="https://openehr.atlassian.net/projects/SPEC/versions/10017">Release notes.</a></td>
					</tr>
					<tr>
						<td> <a href="/releases/0.95"><b>Release 0.95</b></a></td>
						<td> 15 March 2005 </td>
						<td> Basic modelling changes. <br/>17 Change Requests. </br><a href="https://openehr.atlassian.net/projects/SPEC/versions/10016">Release notes.</a></td>
					</tr>
					<tr>
						<td> <a href="/releases/0.9"><b>Release 0.9</b></a></td>
						<td> 04 May 2004 </td>
						<td> First complete release of openEHR. <br/>84 Change Requests </br><a href="https://openehr.atlassian.net/projects/SPEC/versions/10015">Release notes.</a></td>
					</tr>
				</tbody>
			</table>
		
<!-- =========================================== Content ends here =============================================== -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
