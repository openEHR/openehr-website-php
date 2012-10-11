<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

	<title>openEHR - Events</title>
	<link rel="bookmark" href="http://www.openehr.org/news_events/openehrevents/events10" title="openEHR - Events">
	<?php include '../../panel/headpanel.php' ?>
	
</head>


<body>

<div id="MainFrame">
	
	<div id="TopPanel">
		<?php include '../../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu" style="text-align:left">
	
		<div class="nav">
			<?php include '../../menu/topmenu.php' ?>
		</div>
		
	</div> 

	<div id="MainArea" style="height:450px;">
	
		<div id="SideMenu">
			<?php $current = 2; include '../menu/newsmenu.php' ?>
		</div>
		
		<div id="TextArea" style="height:450px;">
		
			<h1>Events</h1>
			
			<h2>PatientOS openEHR demo at virtual HIMSS</h2>
			<h6>9. - 10. June 2009</h6>
			<br/>
			
			<p><a href="http://www.patientos.com/">PatientOS Inc.</a> will be demonstrating with a live system which users can log into, the interoperability between two distinct systems using <a href="http://www.openehr.org/knowledge">openEHR Archetypes</a>. You can see and experience a live, hands on demo at the HIMSS Virtual Conference June 9-10.</p>
			<p>The demo will include:</p>
			<ul>
				<li>1) Provide a live Physician Office environment</li>
				<li>2) Provide a live Hospital environment</li>
				<li>3) Demonstrate various workflows in both (office visit, hospital closed loop medication management)</li>
				<li>4) Demonstrate a patient portal with a consolidated view of the two systems clinical data.</li>
			</ul>
			<p>Register for free at <a href="http://www.himssvirtual.org/">http://www.himssvirtual.org</a>.</p>
			
			<br/>
			<a href="../events">>> Back to Events</a>
			
		</div>
			 
	</div>
	
	<div id="BottomMenu">
		<?php include '../../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
		<?php include '../../panel/bottompanel.php' ?>	
	</div>

</div>
	
<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>