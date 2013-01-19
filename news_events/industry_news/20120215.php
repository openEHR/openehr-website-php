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
			
			<h2>Web-based openEHR ambulatory care EHR system deployed in Brazil</h2>
			<h6>15. February 2012 | from: S&atilde;o Jos&eacute; dos Campos, Brazil</h6>
			<br/>
			<p>P2D, Brazil, deploys web-based ambulantory care EHR to around 3,000 health professionals including doctors, physiotherapists, nurses and receptionists (primarily Brazilian College of Ophthalmologists).</p>
			
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