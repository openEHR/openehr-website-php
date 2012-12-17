<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

	<title>openEHR - Events</title>
	<link rel="bookmark" href="http://www.openehr.org/news_events/openehrevents/events16" title="openEHR - Events">
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
			
			<h2>MIE 2011</h2>
			<h6>28. - 31. August 2011 | Oslo</h6>
			<br/>
			
			<p>MIE2011 is the 23rd International Conference of EFMI - the European Federation for Medical Informatics,
			and takes place in Oslo August 28-31 2011. The conference will cover various topics in the area of e-health,
			health informatics, telemedicine etc. There will also be commercial and scientific exhibitions.</p>
			<p>The opening day will be at Akershus University Hospital, one of the technologically most advanced hospitals in Europe.</p>
			<p>See the home page <a href="http://www.mie2011.org/">here.</a></p>
			
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