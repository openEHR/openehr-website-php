<?php
$PageName = "Mailing List";
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

	<?php include '../../panel/headpanel.php' ?>
	
</head>

<body>

<div id="MainFrame">
	
	<div id="TopPanel">
		<?php include '../../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu">
	
		<div class="nav">
			<?php include '../../menu/topmenu.php' ?>
		</div>
		
	</div> 

	<div id="MainArea" style="height:450px;">
	
		<div id="SideMenu">
			<?php include 'menu.php' ?>
		</div>
		
		<div id="TextArea">
			
			<h1><?php echo "$PageName";?></h1>
			<br/>
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
				<th class="TableMainT">Localistion list</th>
				<td class="TableMainC">openehr-localisation</td>
				<td class="TableMainC">This list is for discussions about issues of templates, archetypes and model localisation.</td>
				<td class="TableMainC">subscribe <br/>
				unsubscribe <br/>
				archive</td>
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
	
<?php include '../../panel/scriptpanel.php' ?>

</body>

</html>