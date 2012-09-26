<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

	<title>openEHR - Software Program</title>
	<link rel="bookmark" href="http://www.openehr.org/programs/software/iplicense" title="openEHR - Software Program">
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
			<?php include 'menu/softwaremenu.php' ?>
		</div>

		<div id="TextArea">

			<h1>IP and Licensing</h1>
			
			<h2>IP Rights</h2>
			
			<h3>Copyright</h3>
			<p>Artefacts produced by the Software Program are copyrighted to the openEHR Foundation. This establishes the Foundation to be the owner of the 'moral rights' to the artefacts, on behalf of all the contributors,
			and for the safety of the user community.</p>
			
			<h3>Attribution</h3>
			<p>The contributors to an artefact are recognised in the contributor's list section in the license block.</p>
			
			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT"> Artefact type</th>
				<th class="TableMainT"> License for use</th>
				<th class="TableMainT"> Comments</th>
			</tr>
			<tr>
				<td class="TableMainC"> <b>Source code</b> </td>
				<td class="TableMainC"> <img src="http://www.apache.org/images/feather-small.gif" style="border: 1px solid black; height:30px;" /><br/>
										<a href="http://www.apache.org/licenses/LICENSE-2.0">Apache 2 License</a></td>
				<td class="TableMainC"> <br/><br/>Computable artefacts are licensed in the same way as software, using the Apache license, which is widely accepted and industry friendly.<br/><br/></td>
			</tr>
			<tr>
				<td class="TableMainC"> <b>Documentation</b> </td>
				<td class="TableMainC"> <img src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png" style="border: 1px solid black" /><br/>WORK by <a href="http://www.openEHR.org">openEHR Foundation</a> is licensed under a
										<a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution-ShareAlike 3.0 Unported License</a>.</td>
				<td class="TableMainC"> <br/><br/>Software documentation is intended for wide use, and improvement. Translation and re-use are encouraged. <br/><br/><br/> </td>
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