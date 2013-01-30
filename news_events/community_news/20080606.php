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
			
			<h2>New openEHR Decision Support mailing list</h2>
			<h6>6. June 2008 | from: Thomas Beale</h6>
			<br/>
			
			<p>A new openEHR Decision Support mailing list has been created. openEHR has only a small number of lists outside of the specific programming language sub-communities, and each is broad, reflecting a belief in the interdisciplinary nature of things. The decision support list is the first new list for a couple of years, and is intended to support discussions around solving problems in decision support with openEHR. See <a href="../../community/mailinglists">mailing list page</a> for subscription.</p>
						
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