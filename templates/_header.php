<!DOCTYPE HTML>

<html lang="en">

<head>
	
	<title>openEHR - <?php echo "$PageName";?></title>
	<meta charset="utf-8">	
	<meta name="description" content="openEHR provides open source specifications and reference implementations of future proof EHR systems">
	<meta name="keywords" content="archetypes, openEHR, EHR, electronic health record, electronic medical record, ADL, reference model, clinical models, healthcare, health informatics, medical informatics, EHR standards, ISO 18308, CEN 13606, health care software, open source software, knowledge modelling, patient-centric">
	<meta name="author" content="Sam Heard, Thomas Beale">
	<meta name="designer" content="Adriana Danilakova">
	<meta name="rating" content="General">
	<meta name="robots" content="All">
	<meta name="revisit-after" content="15 days">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="/styles/basic.css"  type="text/css">
	<link rel="stylesheet" href="/styles/pages.css"  type="text/css"> 
	
	<link rel="shortcut icon" href="/gui/favicon.ico">
	<link rel="home" href="/">
	<link rel="index" href="/using_the_site/sitemap">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	
	<script src="/functions/menu_dropdown.js"></script> 
	<script src="/functions/paragraph_dropdown.js"></script>
	
	<?php
	$pageOn = basename($_SERVER['PHP_SELF']);
	$portuguese = 'https://'.str_replace('.org','.org/pt',$_SERVER['SERVER_NAME']).$_SERVER['PHP_SELF'];
	$spanish = 'https://'.str_replace('.org','.org/es',$_SERVER['SERVER_NAME']).$_SERVER['PHP_SELF'];
	?>
	
</head>

<body>

<div id="MainFrame">
	
	<div id="TopPanelContainer">
	
		<div id="TopPanel">
			
			<div id="Logo">

				<a href="/home"></a>
				
			</div>
				
			<div id="Motto">
			
				An open domain-driven platform for developing flexible e-health systems
			
			</div>
			
			<div id="Utilities">
				
				<a href="<?php echo $spanish;?>"><img src="/gui/spanish_flag.png" class="flagIcon"></a>
				<a href="<?php echo $portuguese;?>"><img src="/gui/brasil_flag.png" class="flagIcon"></a>
				
				<?php
				if( (isset($_SESSION['user_id'])) && (!strpos($_SERVER['PHP_SELF'],'logout.php')) ) { 
					echo '<a href="/login/user_home">User Home</a> | <a href="/login/logout">Logout</a> |';
				} 
				?> <a href="/about_this_website">About this Website</a> | <a href="/wiki" target="_blank">Wiki</a> | <a href="https://openehr.atlassian.net/secure/BrowseProjects.jspa?selectedCategory=all&selectedProjectType=all" target="_blank">Jira</a> | <a href="/ckm">CKM</a>
				
				<div id="Search">
			
					<script>
					  (function() {
						var cx = '013258992131926468583:q3vo4hyneyu';
						var gcse = document.createElement('script');
						gcse.type = 'text/javascript';
						gcse.async = true;
						gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
						var s = document.getElementsByTagName('script')[0];
						s.parentNode.insertBefore(gcse, s);
					  })();
					</script>
					<gcse:search></gcse:search>

				</div>
			
			</div>
			
		</div>
	
	</div>
	
	<div id = "TopMenuContainer">
	
		<div id="TopMenu">
			<?php include $_SERVER['DOCUMENT_ROOT'].'/menu/topmenu.php' ?>
		</div> 
		
	</div>

	<div id = "MainAreaContainer">
	
	<div id="MainArea">
		
		<div id="SideMenu">
			<?php include 'menu.php' ?>
		</div>
		
