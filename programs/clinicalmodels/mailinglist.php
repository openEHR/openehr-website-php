<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title>openEHR - Clinical Models Program</title>
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


	<div id="MainArea" style="height:450px;">
	
		<div id="SideMenu">
		<?php include 'menu/modelsmenu.php' ?>
		</div>

		<div id="TextArea">
		
		<h1>Mailing List</h1>
		<p>The openEHR mailing lists are sited at <a href="http://www.mailmanhost.com/">dot.list</a>, a mailing list hoster run by one of the developers of the mailman software.</p>
		<br/>
		<table class="TableMain">
		<tbody>
		<tr>
		<th class="TableMainT">List</th>
		<th class="TableMainT">Name</th>
		<th class="TableMainT">Description</th>
		<th class="TableMainT">Access</th>
		<th class="TableMainT">Moderated</th>
		<th class="TableMainT">Admins</th>
		</tr>
		<tr>
		<th class="TableMainT">Clinical list</th>
		<td class="TableMainC">openehr-clinical</td>
		<td class="TableMainC">This list is for discussions about any clinical aspect of the EHR. including
		clinical design of archetypes.</td>
		<td class="TableMainC">
		<a href="http://lists.openehr.org/mailman/listinfo/openehr-clinical_lists.openehr.org">subscribe
		<br>
		unsubscribe</a> 
		<br>
		<a href="mailto:openehr-clinical@lists.openehr.org">post</a>
		<br>
		<a href="http://lists.openehr.org/pipermail/openehr-clinical_lists.openehr.org/">archive</a>
		</td>
		<td class="TableMainC">No</td>
		<td class="TableMainC"></td>
		</tr>
		</tbody>
		</table>
		<br/>
		<br/>
		<p>Other mailing lists you can find <a href="../../community/mailinglists">here</a>.</p>
	
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
