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
			
			<h2>Creation of National Center for Archetypes (NCA), based at Slovak University of Technology (STU), Bratislava</h2>
			<h6>9. February 2012 | from: Bratislava, Slovakia</h6>
			<br/>
			<p>A National Center for Archetypes (NCA STU), specialising in knowledge structures for Slovak e-health, has been launched, supported by the management of Slovak University of Technology in Bratislava (STU) and the Faculty of Electrical Engineering and Information Technology (FEI STU). An initial training course in clinical modelling, openEHR archetypes and model-driven EHRs for the NCA professional team took place on 9/10 February. Archetypes will become the central focus of the NCA, and allow mutual sharing of relevant health information between the health care provider systems and the National Health Information System, as well as with international providers.</p>
			<p> The role of NCA STU in the close cooperation with the National Health Information Centre is to transfer, localize and develop in Slovakia standards for health informatics in the area of structured health records.</p>
			<p>Further information: <a href="mailto:peter.linhardt@stuba.sk">Peter Linhardt</a></p>
			<p>Other references: <a href="http://www.stuba.sk/english.html?page_id=132" target="_blank">STU website</a></p>

			
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