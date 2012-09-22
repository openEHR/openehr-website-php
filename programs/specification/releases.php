<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title>openEHR - Specifications Program</title>
	<?php include '../../panel/headpanel.php' ?>
</head>

<body>

<div id="MainFrame">
	
	<div id="TopPanel">
	<?php include '../../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu" style="text-align:left">
		<div class="nav">
   		 <?php include '../../menu/topmenu.php' ?>
		</div>
	</div> 


	<div id="MainArea">
	
		<div id="SideMenu">
		<?php include 'menu/specificationsmenu.php' ?>
		</div>

		<div id="TextArea">
		
		<h1>Releases</h1>
		<br/>
		<p>The current working baseline is <a href="http://www.openehr.org/svn/specification/TRUNK/publishing/roadmap.html">here</a>.</p><br/>
		<table class="TableMain">
			<tbody>
			<tr>
			<th class="TableMainT"> Release </th>
			<th class="TableMainT"> Date</th>
			<th class="TableMainT"> Description </th>
			</tr>
			<tr>
			<td class="TableMainC"> <a href="releasehistory/release102">Release 1.0.2</a></td>
			<td class="TableMainC"> 31 December 2008 </td>
			<td class="TableMainC"> 22 Change Requests. </br><a href="http://www.openehr.org/issues/browse/SPEC/fixforversion/10030">Release notes.</a></td>
			</tr>
			<tr>
			<td class="TableMainC"> <a href="releasehistory/release101">Release 1.0.1</a></td>
			<td class="TableMainC"> 15 April 2007 </td>
			<td class="TableMainC"> 56 Change Requests. </br><a href="http://www.openehr.org/issues/browse/SPEC/fixforversion/10019">Release notes.</a></td>
			</tr>
			<tr>
			<td class="TableMainC"> <a href="releasehistory/release10"><b>Release 1.0</a></td>
			<td class="TableMainC"> 07 February 2006 </td>
			<td class="TableMainC"> 54 Change Requests. </br><a href="http://www.openehr.org/issues/browse/SPEC/fixforversion/10018">Release notes.</a></td>
			</tr>
			<tr>
			<td class="TableMainC"> <em>Release 0.96</em></td>
			<td class="TableMainC"> 01 August 2005 </td>
			<td class="TableMainC"> Error correction release. 12 Change Requests </br><a href="http://www.openehr.org/issues/browse/SPEC/fixforversion/10017">Release notes.</a></td>
			</tr>
			<tr>
			<td class="TableMainC"> <a href="releasehistory/release095"><b>Release 0.95</b></a></td>
			<td class="TableMainC"> 15 March 2005 </td>
			<td class="TableMainC"> Basic modelling changes. 17 Change Requests. </br><a href="http://www.openehr.org/issues/browse/SPEC/fixforversion/10016">Release notes.</a></td>
			</tr>
			<tr>
			<td class="TableMainC"> <a href="releasehistory/release09"><b>Release 0.9</b></a></td>
			<td class="TableMainC"> 04 May 2004 </td>
			<td class="TableMainC"> First complete release of openEHR. 84 Change Requests </br><a href="http://www.openehr.org/issues/browse/SPEC/fixforversion/10015">Release notes.</a></td>
			</tr>
			</tbody>
		</table>
		
		</div>
			
	</div>

	<div id="BottomMenu">
	<?php include '../../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
	<?php include '../../panel/bottompanel.php' ?>	
	</div>
	
</div>

<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>
