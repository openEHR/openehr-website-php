<!DOCTYPE HTML>

<html lang="en">

<head>

	<title><?php echo "$PageName";?></title>
	<meta charset="utf-8">		
	<meta name="description" content="openEHR provides open source specifications and reference implementations of future proof EHR systems">
	<meta name="keywords" content="archetypes, openEHR, EHR, electronic health record, electronic medical record, ADL, reference model, clinical models, healthcare, health informatics, medical informatics, EHR standards, ISO 18308, CEN 13606, health care software, open source software, knowledge modelling, patient-centric">
	<meta name="author" content="Sam Heard, Thomas Beale">
	<meta name="designer" content="Adriana Danilakova">
	<meta name="rating" content="General">
	<meta name="robots" content="All">
	<meta name="revisit-after" content="15 days">

	<meta name="viewport" content="width=device-width; initial-scale=1.0">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="/styles/basic.css"  type="text/css">
	<link rel="stylesheet" href="/styles/home.css"  type="text/css"> 
	
	<link rel="shortcut icon" href="/gui/favicon.ico">
	<link rel="home" href="http://www.openehr.org">
	<link rel="index" href="/using_the_site/sitemap">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="/functions/js/bootstrap.js"></script>
	
	<script src="/functions/menu_dropdown.js"></script> 
	<script src="/functions/paragraph_dropdown.js"></script>
	
	<?php
	$pageOn = basename($_SERVER['PHP_SELF']);
	$portuguese = 'http://'.str_replace('.org','.org/pt',$_SERVER['SERVER_NAME']).$_SERVER['PHP_SELF'];
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
				
				<a href="<?php echo $portuguese;?>"><img src="/gui/brasil_flag.png" style="float:right; margin: 0 0 0 10px; padding: 0 0 0 0;"></a>
				<?php
				if( (isset($_SESSION['user_id'])) && (!strpos($_SERVER['PHP_SELF'],'logout.php')) ) { 
					echo '<a href="/login/user_home">User Home</a> | <a href="/login/logout">Logout</a> |';
				} 
				?> <a href="/about_this_website">About this Website</a> | <a href="/wiki" target="_blank">Wiki</a> | <a href="/issues" target="_blank">Jira</a> | <a href="http://www.openehr.org/ckm">CKM</a>
				
				<div id="Search">
					
					<div id="cse-search-form" style="width: 100%;">Loading</div>
					
					<script src="http://www.google.com/jsapi" type="text/javascript"></script>
					<script type="text/javascript"> 
					  google.load('search', '1', {language : 'en', style : google.loader.themes.ESPRESSO});
					  google.setOnLoadCallback(function() {
						var customSearchOptions = {};  var customSearchControl = new google.search.CustomSearchControl(
						  '012150377208032227381:uwpn0z1deyi', customSearchOptions);
						customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
						var options = new google.search.DrawOptions();
						options.enableSearchboxOnly("http://www.openehr.org/search");
						customSearchControl.draw('cse-search-form', options);
					  }, true);
					</script>

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
	