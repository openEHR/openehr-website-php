<?php
$PageName = 'Feedback';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

	<?php include '../panel/headpanel.php' ?>
	
</head>

<body>

<div id="MainFrame">
	
	<div id="TopPanel">
		<?php include '../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu">
	
		<div class="nav">
			<?php include '../menu/topmenu.php' ?>
		</div>
		
	</div> 

	<div id="MainArea" style="height:450px;">
	
		<div id="SideMenu">
		<?php include 'menu.php' ?>
		</div>
		
		<div id="TextArea">
			
			<h1><?php echo "$PageName";?></h1>
			<br/>
			<p>Please provide website design ideas/feedback <a href="http://www.openehr.org/wiki/display/oecom/2012+Website+-+feedback+page">here</a>.</p>
			<p>Routine webmaster requests <a href="mailto:webmaster@openehr.org">here</a>.</p>
			
		</div>
			
	</div>

	<div id="BottomMenu">
	<?php include '../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
	<?php include '../panel/bottompanel.php' ?>
	</div>

</div>
	
<?php include '../panel/scriptpanel.php' ?>

</body>

</html>