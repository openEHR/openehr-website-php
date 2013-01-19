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
			
			<h2>IBS consortium including three openEHR vendors to build Moscow eHealth infrastructure</h2>
			<h6>26. December 2012 | from: Moscow, Russia</h6>
			<br/>
			<p>A consortium led by <a href="http://www.ibs.ru/">IBS Moscow</a> and including three openEHR vendors - Marand, Infinnity, and Ocean Informatics - has won the contract for the pilot of the Moscow city integrated medical information system. See <a href="http://www.openehr.org/who_is_using_openehr#IBS_Moscow">here</a> for details.</p>

			<p>More in Marand press release <a href="http://www.marand-thinkmed.com/news-title" target="_blank">here</a>.</p>
			
			
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