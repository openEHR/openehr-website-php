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
			
			<h2>Python/openEHR workshop, XVIII IEA World Congress of Epidemiology</h2>
			<h6>20. - 21. September 2008 | Brazil</h6>
			<br/>
			
			<p>There will be a 1.5 day workshop on openEHR using the Python implementation (aka. OSHIP) at the XVIII IEA World Congress of Epidemiology in Porto Alegre, Brazil <a href="http://www.epi2008.com.br/ingles/index.php">http://www.epi2008.com.br/ingles/index.php</a> on 20 &amp; 21 September, 2008.</p>
			<p>The workshop registration link is at:<a href="http://www.epi2008.com.br/cursos/index.php#16">http://www.epi2008.com.br/cursos/index.php#16</a>.</p>
			
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