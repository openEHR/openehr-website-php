<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'Releases';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>The current working baseline is <a href="currentbaseline">here</a>.</p>
			<br/>
			
			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT"> Release </th>
				<th class="TableMainT"> Date</th>
				<th class="TableMainT"> Description </th>
			</tr>
			<tr>
				<td class="TableMainC"> <a href="/releases/1.0.2">Release 1.0.2</a></td>
				<td class="TableMainC"> 31 December 2008 </td>
				<td class="TableMainC"> 22 Change Requests. </br><a href="http://www.openehr.org/issues/browse/SPEC/fixforversion/10030">Release notes.</a></td>
			</tr>
			<tr>
				<td class="TableMainC"> <a href="/releases/1.0.1">Release 1.0.1</a></td>
				<td class="TableMainC"> 15 April 2007 </td>
				<td class="TableMainC"> 56 Change Requests. </br><a href="http://www.openehr.org/issues/browse/SPEC/fixforversion/10019">Release notes.</a></td>
			</tr>
			<tr>
				<td class="TableMainC"> <a href="/releases/1.0"><b>Release 1.0</a></td>
				<td class="TableMainC"> 07 February 2006 </td>
				<td class="TableMainC"> 54 Change Requests. </br><a href="http://www.openehr.org/issues/browse/SPEC/fixforversion/10018">Release notes.</a></td>
			</tr>
			<tr>
				<td class="TableMainC"> <em>Release 0.96</em></td>
				<td class="TableMainC"> 01 August 2005 </td>
				<td class="TableMainC"> Error correction release. 12 Change Requests </br><a href="http://www.openehr.org/issues/browse/SPEC/fixforversion/10017">Release notes.</a></td>
			</tr>
			<tr>
				<td class="TableMainC"> <a href="/releases/0.95"><b>Release 0.95</b></a></td>
				<td class="TableMainC"> 15 March 2005 </td>
				<td class="TableMainC"> Basic modelling changes. 17 Change Requests. </br><a href="http://www.openehr.org/issues/browse/SPEC/fixforversion/10016">Release notes.</a></td>
			</tr>
			<tr>
				<td class="TableMainC"> <a href="/releases/0.9"><b>Release 0.9</b></a></td>
				<td class="TableMainC"> 04 May 2004 </td>
				<td class="TableMainC"> First complete release of openEHR. 84 Change Requests </br><a href="http://www.openehr.org/issues/browse/SPEC/fixforversion/10015">Release notes.</a></td>
			</tr>
			</tbody>
			</table>
		
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>