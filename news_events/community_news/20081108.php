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
			
			<h2>CfH / NEHTA / Canada Health Infoway - openEHR presentation</h2>
			<h6>8. November 2008 | from: Thomas Beale</h6>
			<br/>
			
			<p>Professor David Ingram (Head of CHIME, UCL, chair of openEHR Foundation) delivered an invited presentation at a workshop in Helsingor, Denmark, at the invitation of NHS Connecting for Health (CFH), Australia's National e-Health Transition Authority (NEHTA) and Canada Health Infoway.</p>
						
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