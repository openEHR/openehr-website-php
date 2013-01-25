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
		
		<div id="TextArea">
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>openEHR Foundation Meeting</h2>
			<h6>10. - 12. September 2012 | London</h6>
			<br/>
			
			<p>openEHR Foundation Strategic Planning Seminar had focused on discussion of the current state of openEHR
			in order to develop both short and long term strategies. Board and the community members found the opportunity
			to share their insights into key matters, covering both policy and technology aspects of openEHR.</p>
			
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