<?php
$PageName = 'Industry News';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

	<?php include '../../panel/headpanel.php' ?>
	
</head>

<body>

<div id="MainFrame">
	
	<div id="TopPanel">
		<?php include '../../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu">
	
		<div class="nav">
			<?php include '../../menu/topmenu.php' ?>
		</div>
		
	</div> 

	<div id="MainArea">
	
		<div id="SideMenu">
			<?php include '../menu.php' ?>
		</div>
		
		<div id="TextArea" style="height:450px;">
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>Northern Territory Health deploys Shared EHR</h2>
			<h6>5. October 2012 | from: Northern Territory, Australia</h6>
			<br/>
			
			<p><a href="http://www.health.nt.gov.au/">Northern Territory Health</a> has deployed a Shared Electronic Health Record system for over 50,000 remote indigenous people based on the Ocean Informatics EHR platform.</p>
			
			<br/>
			<a href="/news_events/industry_news/">>> Back to <?php echo "$PageName";?></a>
			
		</div>
			
	</div>
	
	<div id="BottomMenu">
		<?php include '../../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
		<?php include '../../panel/bottompanel.php' ?>	
	</div>

</div>

<?php include '../../panel/scriptpanel.php' ?>

</body>

</html>