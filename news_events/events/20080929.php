<?php
$PageName = 'Events';
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
		
		<div id="TextArea" style="height:450px;">
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>openEHR+SNOMED CT training course</h2>
			<h6>29. - 30. September 2008 | London</h6>
			<br/>
			
			<p>The CHIME department, University College London, is hosting a 2-day training course on openEHR and SNOMED CT at the Whittington campus, Archway London on 29 and 30 September. See <a href="http://www.chime.ucl.ac.uk/news/latest/news-20080804a.htm">http://www.chime.ucl.ac.uk/news/latest/news-20080804a.htm</a>.</p>
			
			<br/>
			<a href="../events">>> Back to <?php echo "$PageName";?></a>
			
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