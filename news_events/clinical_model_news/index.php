<?php
$PageName = 'CKM Activity';
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

	<div id="MainArea" style="height:500px;">
	
		<div id="SideMenu">
			<?php include '../menu.php' ?>
		</div>
		
		<div id="TextArea" style="height:500px;">
			
			<h1><?php echo "$PageName";?></h1>
			<br/>
			<div style="position: absolute; top:30px; padding-left:1px; padding-right:10px; word-wrap:break-word; ">
					<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
					<script>
					new TWTR.Widget({
					  version: 2,
					  type: 'search',
					  search: 'from:@clinicalmodels OR from:@openEHRCKM',
					  interval: 30000,
					  title: '',
					  subject: '',
					  width: 700,
					  height: 350,
					  theme: {
						shell: {
						  background: 'none',
						  color: '#3386AE'
						},
						tweets: {
						  background: 'none',
						  color: '#000000',
						  links: '#3386AE'
						}
					  },
					  features: {
						scrollbar: true,
						loop: true,
						live: false,
						behavior: 'default'
					  }
					}).render().start();
					</script>
			</div>
			
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