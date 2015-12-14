<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Releases';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header_english.php');
?>

		<div id="Content">
<!-- ================================= Content starts here ============================== -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>Current Releases</h2>

			<table class="TableMain">
				<tbody>
					<tr>
						<th class="TableMainT"> Release </th>
						<th class="TableMainT"> Date</th>
						<th class="TableMainT"> Description </th>
					</tr>
					<tr>
						<td class="TableMainC"> <a href="currentbaseline">Current baseline</a></td>
						<td class="TableMainC"> (latest) </td>
						<td class="TableMainC"> Current development version of all specifications</td>
					</tr>
					<tr>
						<td class="TableMainC"> <a href="/releases/RM/Release-1.0.3/docs/index">RM Release 1.0.3</a></td>
						<td class="TableMainC"> 15 December 2015 </td>
						<td class="TableMainC"> <a href="https://openehr.atlassian.net/projects/SPECRM/versions/10860">23 Changes made.</a>; <a href="https://openehr.atlassian.net/projects/SPECPR/versions/10060">29 Problems fixed</a></td>
					</tr>
					<tr>
						<td class="TableMainC"> <a href="/releases/BASE/Release-1.0.3/docs/index">BASE Release 1.0.3</a></td>
						<td class="TableMainC"> 15 December 2015 </td>
						<td class="TableMainC"> <a href="https://openehr.atlassian.net/projects/SPECBASE/versions/11360">2 Changes made.</a>; <a href="https://openehr.atlassian.net/issues/?jql=project%20%3D%20SPECPR%20AND%20status%20%3D%20Closed%20AND%20fixVersion%20%3D%20%22RM%20Release%201.0.3%22%20AND%20text%20~%20%22overview%22%20ORDER%20BY%20priority%20DESC%2C%20updated%20DESC">5 Problems fixed</a></td>
					</tr>
				</tbody>
			</table>


			<h2>Historical Releases</h2>

			<table class="TableMain">
				<tbody>
					<tr>
						<th class="TableMainT"> Release </th>
						<th class="TableMainT"> Date</th>
						<th class="TableMainT"> Description </th>
					</tr>
					<tr>
						<td class="TableMainC"> <a href="currentbaseline">Current baseline</a></td>
						<td class="TableMainC"> (latest) </td>
						<td class="TableMainC"> </td>
					</tr>
					<tr>
						<td class="TableMainC"> <a href="/releases/1.0.2">Release 1.0.2</a></td>
						<td class="TableMainC"> 31 December 2008 </td>
						<td class="TableMainC"> 22 Change Requests. </br><a href="https://openehr.atlassian.net/projects/SPEC/versions/10030">Release notes.</a></td>
					</tr>
					<tr>
						<td class="TableMainC"> <a href="/releases/1.0.1">Release 1.0.1</a></td>
						<td class="TableMainC"> 15 April 2007 </td>
						<td class="TableMainC"> 56 Change Requests. </br><a href="https://openehr.atlassian.net/projects/SPEC/versions/10019">Release notes.</a></td>
					</tr>
					<tr>
						<td class="TableMainC"> <a href="/releases/1.0"><b>Release 1.0</a></td>
						<td class="TableMainC"> 07 February 2006 </td>
						<td class="TableMainC"> 54 Change Requests. </br><a href="https://openehr.atlassian.net/projects/SPEC/versions/10018">Release notes.</a></td>
					</tr>
					<tr>
						<td class="TableMainC"> <em>Release 0.96</em></td>
						<td class="TableMainC"> 01 August 2005 </td>
						<td class="TableMainC"> Error correction release. <br/>12 Change Requests </br><a href="https://openehr.atlassian.net/projects/SPEC/versions/10017">Release notes.</a></td>
					</tr>
					<tr>
						<td class="TableMainC"> <a href="/releases/0.95"><b>Release 0.95</b></a></td>
						<td class="TableMainC"> 15 March 2005 </td>
						<td class="TableMainC"> Basic modelling changes. <br/>17 Change Requests. </br><a href="https://openehr.atlassian.net/projects/SPEC/versions/10016">Release notes.</a></td>
					</tr>
					<tr>
						<td class="TableMainC"> <a href="/releases/0.9"><b>Release 0.9</b></a></td>
						<td class="TableMainC"> 04 May 2004 </td>
						<td class="TableMainC"> First complete release of openEHR. <br/>84 Change Requests </br><a href="https://openehr.atlassian.net/projects/SPEC/versions/10015">Release notes.</a></td>
					</tr>
				</tbody>
			</table>
		
<!-- =========================================== Content ends here =============================================== -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
