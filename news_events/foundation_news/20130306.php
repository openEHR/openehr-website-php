<?php
$PageName = 'Foundation News';
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
		
		<div id="TextArea">
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>Professor Dipak Kalra becomes President of EuroRec</h2>
			<h6>6. March 2013 | from: Interim Board</h6>
			<br/>
			
			<p>In a slightly belated announcement, the Foundation would like to recognise that Professor Dipak Kalra MD, PhD, head of department at the UCL Center for Health Informatics and Multi-Professional Education (CHIME) and openEHR board member, took office as president of <a href="http://www.eurorec.org/" target="_blank">Eurorec</a>, along with the new board on 19 Nov 2012.</p>
			<p>Detailed press releases: <a href="http://www.eurorec.org/news_events/index.cfm?actief=news&show=upcoming&newsID=280" target="_blank">EuroRec</a>, <a href="http://www.ucl.ac.uk/silva/chime/news/chime-news/news-20121129" target="_blank">CHIME</a>.</p>
			
			<br/>
			<a href="../foundation_news">>> Back to <?php echo "$PageName";?></a>
			
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