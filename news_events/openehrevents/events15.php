<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

	<title>openEHR - Events</title>
	<link rel="bookmark" href="http://www.openehr.org/news_events/openehrevents/events15" title="openEHR - Events">
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
		
		<div id="TextArea">
		
			<h1>Events</h1>
			
			<h2>OpenEHR sessions at HL7</h2>
			<h6>9. - 14. January 2011 | Sydney</h6>
			<br/>
			
			<p>Two openEHR sessions are scheduled at the next HL7 WGM in Sydney, both on Friday 14 January,
			the last day of the meeting. The first session is 'openEHR - Introduction to openEHR, Archetypes & Templates',
			9:00 - 12:30. The second is 'openEHR - Application of openEHR with HL7 & SNOMED'.</p>
			
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