<!DOCTYPE HTML>

<html lang="es">

<head>

	<title><?php echo "$PageName";?></title>
	<meta charset="utf-8">		
	<meta name="description" content="openEHR provee especificaciones abiertas e implementaciones de referencia de código abierto para sistemas de HCE">
	<meta name="keywords" content="arquetipos, historia clínica electróncia, registro clínico electrónico, Estándares de HCE, modelos clínicos, atención sanitaria, informática en salud, informática médica, software clínico">
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
	<link rel="index" href="/es/using_the_site/sitemap">
	
	<script src="/functions/menu_dropdown.js"></script> 
	<script src="/functions/paragraph_dropdown.js"></script> 
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="/functions/js/bootstrap.js"></script>

	<?php 
	$pageOn = basename($_SERVER['PHP_SELF']); 
	$english = str_replace('/es','',$_SERVER['PHP_SELF']);
	?>
	
</head>

<body>

<div id="MainFrame">

	<div id="TopPanelContainer">

		<div id="TopPanel">
		
			<div id="Logo">
			
				<a href="/es/home"></a>	
				
			</div>
			
			<div id="Motto">
			
				Una plataforma abierta para el desarrollo de sistemas clínicos flexibles preparados para el futuro
				
			</div>
			
			<div id="Utilities">
				
				<a href="<?php echo $english;?>"><img src="/gui/british_flag.png" style="float:right; margin: 0 0 0 10px; padding: 0 0 0 0;"></a>
				<?php
				if( (isset($_SESSION['user_id'])) && (!strpos($_SERVER['PHP_SELF'],'logout.php')) ) { 
					echo '<a href="/login/user_home">User Home</a> | <a href="/login/logout">Logout</a> |';
				} 
				?> <a href="/es/about_this_website">Acerca de Esta Web</a> | <a href="/wiki" target="_blank">Wiki</a> | <a href="/issues" target="_blank">Jira</a> | <a href="http://www.openehr.org/ckm">CKM</a>
			
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
		
			<ul id="menu" class="menu">
			
				<li><a href="/es/home">Página Principal</a>
				<ul>
					<li><a href="/es/what_is_openehr">Qué es openEHR?</a></li>
					<li><a href="/es/who_is_using_openehr">¿Quiénes Utilizan openEHR?</a></li>
					<li><a href="/es/industry_partners">Socios de la Industria openEHR</a></li>
				</ul>
				</li>
				
				<li><a href="/es/openehr_programs">Programas</a>
				<ul>
					<li><a href="/es/programs/specification">Especificación</a></li>
					<li><a href="/es/programs/clinicalmodels">Modelos Clínicos</a></li>
					<li><a href="/es/programs/software">Software</a></li>
					<li><a href="/es/programs/localisation">Localización</a></li>
				</ul>
				</li>
				
				<li><?php include $_SERVER['DOCUMENT_ROOT'].'/pages/es/getting_involved/menu.php'?>
				</li>
				
				<li><?php include $_SERVER['DOCUMENT_ROOT'].'/pages/es/downloads/menu.php'?>
				</li>
				
				<li><?php include $_SERVER['DOCUMENT_ROOT'].'/pages/es/news_events/menu.php'?>
				</li>
			
				<li><?php include $_SERVER['DOCUMENT_ROOT'].'/pages/es/about/menu.php'?>
				</li>

			</ul>
			
			<br class="clear">
			
		</div> 
		
	</div>
