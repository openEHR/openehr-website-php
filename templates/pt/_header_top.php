<!DOCTYPE HTML>

<html lang="pt">

<head>
	<title><?php echo "$PageName";?></title>
	<meta charset="utf-8">	
	<meta name="description" content="openEHR fornece especificações de código livre e implementações de referência para sistemas de Registro Eletrônico de Saúde (S-RES) à prova de futuro">
	<meta name="keywords" content="arquétipos, Registro Eletrônico de Saúde (RES), Prontuário Eletrônico do Paciente (PEP), modelo de referência, modelos clínicos, cuidados em saúde, informática em saúde, informática médica, Padrões de RES, aplicativo de saúde, aplicativo de código livre">
	<meta name="author" content="Sam Heard, Thomas Beale">
	<meta name="designer" content="Adriana Danilakova">
	<meta name="rating" content="General">
	<meta name="robots" content="All">
	<meta name="revisit-after" content="15 days">
	<meta name="viewport" content="1024">
	
	<link rel="stylesheet" href="/styles/basic.css"  type="text/css">
	<link rel="stylesheet" href="/styles/home.css"  type="text/css"> 
	<link rel="stylesheet" href="/styles/menu.css" type="text/css"> 
	
	<link rel="shortcut icon" href="/gui/favicon.ico">
	<link rel="home" href="http://www.openehr.org">
	<link rel="index" href="/sitemap">
	
	<script type="text/javascript" src="/menu/dropdown.js"></script> 
	<?php $pageOn = basename($_SERVER['PHP_SELF']); ?>
	
</head>

<body>

<div id="MainFrame">
	
	<div id="TopPanel">
	
		<div id="Logo">

			<a href="/pt/home"></a>
			
		</div>
			
		<div id="Motto">
		
			Uma plataforma  aberta, orientada ao domínio, <br/>para o desenvolvimento de sistemas <br/>de e-saúde flexíveis
		
		</div>
		
		<div id="Utilities">
			
			<?php
			if( (isset($_SESSION['user_id'])) && (!strpos($_SERVER['PHP_SELF'],'logout.php')) ) { 
				echo '<a href="/login/user_home">User Home</a> | <a href="/login/logout">Logout</a> |';
			} 
			?> <a href="/pt/about_this_website">Sobre esse Sítio</a> | <a href="/wiki" target="_blank">Wiki</a> | <a href="http://www.openehr.org/knowledge">CKM</a>
		
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
		
			<li><a href="/pt/home">Página Inicial</a></li>
			
			<li><a href="/pt/openehr_programs">Programas</a>
			<ul>
				<li><a href="/pt/programs/specification">&nbsp; Especificações</a></li>
				<li><a href="/pt/programs/clinicalmodels">&nbsp; Modelos Clínicos</a></li>
				<li><a href="/pt/programs/software">&nbsp; Aplicativos</a></li>
				<li><a href="/pt/programs/localisation">&nbsp; Localizaçãp</a></li>
			</ul>
			</li>
			
			<li><?php include $_SERVER['DOCUMENT_ROOT'].'/pages/pt/getting_involved/menu.php'?>
			</li>
			
			<li><?php include $_SERVER['DOCUMENT_ROOT'].'/pages/pt/downloads/menu.php'?>
			</li>
			
			<li><?php include $_SERVER['DOCUMENT_ROOT'].'/pages/pt/news_events/menu.php'?>
			</li>
		
			<li><?php include $_SERVER['DOCUMENT_ROOT'].'/pages/pt/about/menu.php'?>
			</li>

		</ul>
		
	</div> 
