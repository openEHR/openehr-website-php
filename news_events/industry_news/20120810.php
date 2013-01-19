<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

	<title>openEHR - Industry News</title>
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
			<?php $current = 5; include '../menu/newsmenu.php' ?>
		</div>
		
		<div id="TextArea" style="height:450px;">
		
			<h1>Industry News</h1>
			
			<h2>Infection Control System deployed by Queensland Health</h2>
			<h6>10. August 2012 | from: Queensland, Australia</h6>
			<br/>
			<p><a href="http://www.health.qld.gov.au/">Queensland Health</a> deploys Multiprac Infection Control system, based on the Ocean OceanEHR platform in 22 state hospitals.</p>
			
			<br/>
			<a href="/news_events/industry_news/">>> Back to Industry News</a>
			
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