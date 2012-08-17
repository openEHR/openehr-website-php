<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
	<meta http-equiv="Content-Language" content="en">

	<title>openEHR - Membership</title>

	<meta name="description" content="openEHR provides open source specifications and reference implementations of future proof EHR systems">
	<meta name="keywords" content="archetypes, openEHR, EHR, electronic health record, electronic medical record, ADL, reference model, clinical models, healthcare, health informatics, medical informatics, EHR standards, ISO 18308, CEN 13606, health care software, open source software, knowledge modelling, patient-centric">
	<meta name="author" content="Sam Heard, Thomas Beale">
	<meta name="copyright" content="The openEHR Foundation">
	<meta name="design" content="Adriana Danilakova">
	<meta name="distribution" content="Global">
	
	<meta name="rating" content="General">
	<meta name="robots" content="All">
	<meta name="revisit-after" content="15 days">
	<meta name="viewport" content="1024">

	<link rel="stylesheet" href="../styles/basic.css"  type="text/css">
	<link rel="stylesheet" href="../styles/programs.css"  type="text/css">
	<link rel="stylesheet" href="../styles/menu.css" type="text/css"> 

	<link rel="home" href="http://www.openehr.org">
	<link rel="bookmark" href="http://www.openehr.org" title="openEHR - Homepage">
	<link rel="index" href="http://www.openehr.org/sitemap">

	<script type="text/javascript" src="../menu/dropdown.js"></script> 
	
</head>


<body>

<div id="MainFrame">
	
	<div id="TopPanel">
	<?php include '../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu" style="text-align:left">
		
		<div class="nav">
   		 <?php include '../menu/topmenu.php' ?>
		</div>
	</div> 

	<div id="MainArea">
	
		<div id="SideMenu">
		<?php include 'menu/aboutmenu.php' ?>
		</div>
		
		<div id="TextArea">
			
			<h1>Membership</h1>
			<br/>
			<p>Participation of individuals in the Foundation can be at different levels. The key participants
			are Members who can become Contributors and, through that experience, become qualified to commit 
			changes to the core assets of the Foundation. These Committers (qualified members) are then able to go on to be 
			members of a Program Team and perhaps lead a Project within that Program.</p>
			<p>Participation of industry, universities, governments and other organisations is established
			through associates membership.</p>	
			
			<h2>Individuals membership</h2>
			<p class="par">Individuals membership model is:</p>
			<ul>
				<li><em>Members</em> - free individual membership, enables participation in the affairs of the Foundation and access to all assets.</li>
				<li><em>Contributors</em> - official members of Program Committee who can do internal reviews and have voting rights.</li>
				<li><em>Committers</em> - Contributors who have qualified for the right to commit work or take on other key roles (become leaders of the 
				Programs or Software Projects.</li>
			</ul>
			<br/>
			<p class="par">You can find information about current members on following links:</p>
			<ul>
				<li><a href="../programs/specification/members">Specification Program Members</a></li>
				<li><a href="../programs/clinicalmodels/members">Clinical Models Program Members</a></li>
				<li><a href="../programs/software/members">Software Program Members</a></li>
				<li><a href="../programs/localisation/members">Localisation Program Members</a></li>
			</ul>
			<br/>
			<p>If you want to become member click <a href="#">here to register</a>.</p>
			
			<h2>Associates membership</h2>
			<p>The openEHR Foundation establishes a group of fee-paying <em>Organisational Associates</em>.<p>
			<p class="par">The group of Organisational Associates:</p>
			<ul>
				<li>is open to industry, universities, governments, standards development organisations;</li>
				<li>nominates Foundation Board directors and vote for directors if there are excess nominations;</li>
				<li>has preferential access to and planning of conferences and educational events;</li>
				<li>is able to establish bilateral relationships with the Foundation if appropriate.</li>
			</ul>
			<br/>
			<p class="par">You can find information about current associates on following links:</p>
			<ul>
				<li><a href="#">Industry</a></li>
				<li><a href="#">Universities</a></li>
				<li><a href="#">Governments</a></li>
			</ul>
			<br/>
			<p>If your organisation wants to become member click <a href="#">here to register</a>.</p>

			
		</div>
			

	</div>

	<div id="BottomMenu">
	<?php include '../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
	<?php include '../panel/bottompanel.php' ?>
	</div>

</div>
	
<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>