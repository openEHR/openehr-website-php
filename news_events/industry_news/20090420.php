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
			
			<h2>Microsoft Connected Health Framework (CHF) uses archetypes</h2>
			<h6>20. April 2009 | from: Thomas Beale</h6>
			<br/>
			
			<p>The latest edition of Microsoft's Connected Health Framework - a strategy based on the idea of 'knowledge-driven health' (see http://www.microsoft.com/industry/healthcare/technology/HealthFramework.mspx) - includes openEHR (ISO 13606-2) archetypes as part of its domain knowledge architecture. There is much worth reading in this set of documents, including a good analysis of the problem space, deployment scenarios and issues, semantic and services architecture and much else besides.</p>
			<p>See also: <a href="http://www.microsoft.com/industry/healthcare/technology/HealthFramework.mspx">MS CHF documents</a></p>
			
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