<?php
$PageName = 'Community News';
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
			
			<h2>Vivici announce PHR</h2>
			<h6>28. October 2007 | from: Thomas Beale</h6>
			<br/>
			
			<p><a href="http://www.vivici.nl/">Vivici</a> of the Netherlands announce their <a href="http://vivici.wordpress.com/2007/10/26/a-personal-health-care-record-phr-based-on-international-open-standards-facilitates-true-patient-empowerment/">personal health record</a> based on openEHR.</p>
						
			<br/>
			<a href="/news_events/community_news/">>> Back to <?php echo "$PageName";?></a>
			
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