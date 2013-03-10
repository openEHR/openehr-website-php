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
			
			<h2>IHTSDO 2008 Summer Conference</h2>
			<h6>29. June - 4. July 2008 | Birningham</h6>
			<br/>
			
			<p>The IHTSDO 2008 Summer Conference: Community of Practice Meetings is at Birmingham NEC from 29 June to 4 July. This six-day international working conference is being hosted by NHS Connecting for Health to bring together IHTSDO's working group and project group members and members of National Release Centres from across the Globe, to progress the quality and development of SNOMED Clinical Terms, to discuss the enhanced release format and to look at better working practice in a volunteer community. This is primarily for clinical terminologists to contribute to the future development of SNOMED CT itself. Details are at <a href="http://etdevents.connectingforhealth.nhs.uk/1629">http://etdevents.connectingforhealth.nhs.uk/1629</a>.</p>
			
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