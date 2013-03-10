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
			
			<h2>IBS and Moscow city to host second openEHR Workshop</h2>
			<h6>28. January | from: Moscow, Russia</h6>
			<br/>
			
			<p>On 5. - 7. February the second part of a series of seminars on the use of the international open standard medical management, storage and exchange of electronic medical records (openEHR) will be hosted in Moscow. The seminar organizers are the Department of Information Technology in Moscow together with IBS.</p>
			<p><a href="http://translate.google.com/translate?sl=auto&tl=en&js=n&prev=_t&hl=en&ie=UTF-8&eotf=1&u=http%3A%2F%2Fwww.ibs.ru%2Fcontent%2Frus%2F704%2F7041-article.asp&act=url">Full article</a></p>

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