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

	<div id="MainArea" style="height:450px;">
	
		<div id="SideMenu">
			<?php include '../menu.php' ?>
		</div>
		
		<div id="TextArea">
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>David Ingram interview with Talkstandards</h2>
			<h6>25. February 2010 | from: Thomas Beale</h6>
			<br/>
			
			<p>In an exclusive interview with Talkstandards, Professor David Ingram of openEHR, outlines some of his expectations for the future of ICT in the health care sector.
			See <a href="http://www.talkstandards.com/best-approach-to-ehealth-standardization-is-learning-by-doing/">Talkstandards website</a>.</p>

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