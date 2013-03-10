<?php
$PageName = 'Industry News';
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
			
			<h2>IBS consortium including three openEHR vendors to build Moscow eHealth infrastructure</h2>
			<h6>26. December 2012 | from: Moscow, Russia</h6>
			<br/>
			
			<p>A consortium led by <a href="http://www.ibs.ru/">IBS Moscow</a> and including three openEHR vendors - Marand, Infinnity, and Ocean Informatics - has won the contract for the pilot of the Moscow city integrated medical information system. See <a href="http://www.openehr.org/who_is_using_openehr#IBS_Moscow">here</a> for details.</p>

			<p>More in Marand press release <a href="http://www.marand-thinkmed.com/news-title" target="_blank">here</a>.</p>
			
			<br/>
			<a href="/news_events/industry_news/">>> Back to <?php echo "$PageName";?></a>
			
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