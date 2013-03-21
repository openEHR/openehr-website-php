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

	<div id="MainArea" style="height:450px">
	
		<div id="SideMenu">
			<?php include '../menu.php' ?>
		</div>
		
		<div id="TextArea">
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>openEHR Primary Care project starts in Salvador, Brazil</h2>
			<h6>15. March 2013 | from: Salvador, Brazil</h6>
			<br/>
			<p>Gustavo M. Bacelar-Silva MD has launched a new project "openEHR-based pervasive health information system for primary care: First Brazilian Experience for Public Care" at SENAI - Cimatec (industrial college in Salvador). The team includes: Gustavo M. Bacelar-Silva, Hilton V. Cesar, Patricia F. Braga, Rodney N. Guimar&#227;es</p>

			
			

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