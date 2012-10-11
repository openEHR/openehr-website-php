<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

	<title>openEHR - Events</title>
	<link rel="bookmark" href="http://www.openehr.org/news_events/openehrevents/events5" title="openEHR - Events">
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
			<?php $current = 2; include '../menu/newsmenu.php' ?>
		</div>
		
		<div id="TextArea" style="height:450px;">
		
			<h1>Events</h1>
			
			<h2>Implementing SNOMED CT</h2>
			<h6>10. - 11. June 2008 | London</h6>
			<br/>
			
			<p>This is a practical conference concerned with how to design, implement, deploy, migrate, support and evolve computer applications that use SNOMED CT. It is aimed primarily at healthcare IT professionals working with suppliers and healthcare organisations involved in the practicalities of implementing SNOMED CT. Implementing SNOMED CT 2008 is sponsored by BT Health, CareCom A/S, Health Language Inc, Ocean Informatics and SNOMED Terminology Solutions. It is being held in association with Smart Healthcare EXPO 2008. The early-bird-cut off date has been extended to Friday 9 May, 2008. Registration details on <a href="http://www.abies.co.uk/">www.abies.co.uk</a>.</p>
			
			<br/>
			<a href="../events">>> Back to Events</a>
			
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