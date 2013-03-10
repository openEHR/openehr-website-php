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
			
			<h2>Interconnected Health 2012</h2>
			<h6>2. - 4. April 2012 | Chicago</h6>
			<br/>
			
			<p>Needham, MA, USA and Ann Arbor, MI, USA and Chicago USA - December 22, 2011 - OMG &reg;, Health Level Seven &reg; International (HL7),
			and Healthcare Information and Management Systems Society (HIMSS), today announced the Call for Participation for "Interconnected Health 2012:
			Enabling Health through High-Impact IT." The event will be held at the Hyatt Regency O'Hare in Chicago, IL on April 2-4, 2012. Registration and
			abstract submission details may be found online <a href="http://www.interconnected-health.org/cfp">here</a>.</p>
			<p>Interconnected Health 2012 will focus on approaches, challenges, and solutions affecting the ability to connect health organizations and systems,
			and the role of IT as an enabler in achieving this connectivity. Geared toward the CxO suite and senior leaders within healthcare organizations,
			Interconnected Health provides a venue to hear what peer organizations are doing (both within the US and abroad), to exchange ideas,
			and to interact with peers who are leaders in this space.</p>
			
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