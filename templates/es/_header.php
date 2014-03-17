<!DOCTYPE HTML>

<html lang="es">

<head>
	
	<title>openEHR - <?php echo "$PageName";?></title>
	<meta charset="utf-8">	
	<meta name="description" content="openEHR provee especificaciones abiertas e implementaciones de referencia de código abierto para sistemas de HCE">
	<meta name="keywords" content="arquetipos, historia clínica electróncia, registro clínico electrónico, Estándares de HCE, modelos clínicos, atención sanitaria, informática en salud, informática médica, software clínico">
	<meta name="author" content="Sam Heard, Thomas Beale">
	<meta name="designer" content="Adriana Danilakova">
	<meta name="rating" content="General">
	<meta name="robots" content="All">
	<meta name="revisit-after" content="15 days">
	<meta name="viewport" content="1024">

	<link rel="stylesheet" href="/styles/basic.css"  type="text/css">
	<link rel="stylesheet" href="/styles/pages.css"  type="text/css"> 
	<link rel="stylesheet" href="/styles/menu.css" type="text/css"> 
	
	<link rel="shortcut icon" href="/gui/favicon.ico">
	<link rel="home" href="http://www.openehr.org">
	<link rel="index" href="/es/sitemap">

	<script type="text/javascript" src="/menu/dropdown.js"></script> 
	
	<?php
	$pageOn = basename($_SERVER['PHP_SELF']);
	?>
	
</head>

<body>

<div id="MainFrame">
	
	<div id="TopPanel">
	
		<div id="Logo">

			<a href="/es/home"></a>
			
		</div>
			
		<div id="Motto">
		
			Una plataforma abierta para el desarrollo<br/>de sistemas clínicos flexibles preparados<br/>para el futuro
		
		</div>
		
		<div id="Utilities">
			
			<?php
			if( (isset($_SESSION['user_id'])) && (!strpos($_SERVER['PHP_SELF'],'logout.php')) ) { 
				echo '<a href="/login/user_home">User Home</a> | <a href="/login/logout">Logout</a> |';
			} 
			?> <a href="/es/about_this_website">Sobre este Sitio</a> | <a href="/wiki" target="_blank">Wiki</a> | <a href="http://www.openehr.org/knowledge">CKM</a>
		
		</div>
		
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
	
	<div id="TopMenu">
	
		<ul id="menu" class="menu">
		
			<li><a href="/es/home">Página Principal</a></li>
			
			<li><a href="/es/openehr_programs">Programas</a>
			<ul>
				<li><a href="/es/programs/specification">&nbsp; Especificación</a></li>
				<li><a href="/es/programs/clinicalmodels">&nbsp; Modelos Clínicos</a></li>
				<li><a href="/es/programs/software">&nbsp; Software</a></li>
				<li><a href="/es/programs/localisation">&nbsp; Localización</a></li>
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
		
	</div> 

	<div id="MainArea">
		
		<div id="SideMenu">
			<?php include 'menu.php' ?>
		</div>
		