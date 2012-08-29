<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title>openEHR - News</title>
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
			<h2>CIMI Forum - 5th meeting</h2>
			<h6>12. - 14. January 2012 | San Antonio</h6>
			<br/>
			<p>CIMI held its 5th group meeting in San Antonio from January 12 – 14, 2012. Over 35 people attended in person with an additional 5 participants attending via WebEx. At this meeting, the group:</p>
			<ul>
			<li>Established the criteria for membership and the process for adding members to the CIMI group</li>
			<li>Authorised an interim executive committee</li>
			<li>Determined a tentative schedule of meetings for 2012</li>
			<li>Moved forward with the definition of the modeling framework</li>
			<li>Formalized two task forces to begin the modeling work so that example models can be presented at the next meeting</li>
			<li>Recognized the formation of a Glossary Group (lead to be announced)</li>
			<li>Agreed to plans for utilizing existing tools to rapidly develop and test a candidate reference model and to create a small group of example CIMI models that build on the reference model work</li>
			</ul>
			<br/>
			<p>For further details click <a href="http://informatics.mayo.edu/CIMI/index.php/San_Antonio_2012">here</a>.</p>
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