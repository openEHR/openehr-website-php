<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

	<title>openEHR - Events</title>
	<link rel="bookmark" href="http://www.openehr.org/news_events/openehrevents/events4" title="openEHR - Events">
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
			
			<h2>MIE 2008</h2>
			<h6>25. - 28. May 2008 | G&ouml;teborg</h6>
			<br/>
			
			<p>Various openEHR-related events are occurring at <a href="http://sfmi.medako.se/mie2008/index.html">MIE 2008</a>, this year at G&ouml;teborg, Sweden. A number of papers relating to archetypes and associated terminology issues are on the <a href="http://www.hst.aau.dk/~ska/MIE2008/ParalleSessions/AllParallelSessionsV096.htm">programme</a>, as well as two openEHR-related <a href="http://www.sfmi.org/home/page.asp?sid=63&mid=2&PageId=1834">tutorials</a>.</p>
			
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