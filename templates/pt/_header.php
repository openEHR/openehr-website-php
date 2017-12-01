<!DOCTYPE html>

<html lang="pt">

<head>

	<title>openEHR - <?php echo "$PageName";?></title>
	<meta charset="utf-8">	
	<meta name="description" content="openEHR fornece especificações de código livre e implementações de referência para sistemas de Registro Eletrônico de Saúde (S-RES) à prova de futuro">
	<meta name="keywords" content="arquétipos, Registro Eletrônico de Saúde (RES), Prontuário Eletrônico do Paciente (PEP), modelo de referência, modelos clínicos, cuidados em saúde, informática em saúde, informática médica, Padrões de RES, aplicativo de saúde, aplicativo de código livre">
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
	<link rel="index" href="/pt/using_the_site/sitemap">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	
	<script src="/functions/menu_dropdown.js"></script> 
	<script src="/functions/paragraph_dropdown.js"></script>
	
	<?php 
	$pageOn = basename($_SERVER['PHP_SELF']); 
	$english = str_replace('/pt','',$_SERVER['PHP_SELF']);
	$spanish = str_replace('/pt','/es',$_SERVER['PHP_SELF']);
	?>
	
</head>

<body>

<div id="MainFrame">
	
	<div id="TopPanelContainer">
	
		<div id="TopPanel">
		
			<div id="Logo">

				<a href="/pt/home"></a>
				
			</div>
				
			<div id="Motto">
			
				Uma plataforma  aberta, orientada ao domínio, para o desenvolvimento de sistemas de e-saúde flexíveis
			
			</div>
			
			<div id="Utilities">
				
				<a href="<?php echo $spanish;?>"><img src="/gui/spanish_flag.png" class="flagIcon"></a>
				<a href="<?php echo $english;?>"><img src="/gui/british_flag.png" class="flagIcon"></a>
				
				<?php
				if( (isset($_SESSION['user_id'])) && (!strpos($_SERVER['PHP_SELF'],'logout.php')) ) { 
					echo '<a href="/login/user_home">User Home</a> | <a href="/login/logout">Logout</a> |';
				} 
				?> <a href="/pt/about_this_website">Sobre Este Site</a> | <a href="/wiki" target="_blank">Wiki</a> | <a href="https://openehr.atlassian.net/secure/BrowseProjects.jspa?selectedCategory=all&selectedProjectType=all" target="_blank">Jira</a> | <a href="/ckm">CKM</a>
				
				<div id="Search">
				
					<div id="cse-search-form">Loading</div>
					
					<script src="https://www.google.com/jsapi" type="text/javascript"></script>
					<script type="text/javascript"> 
					  google.load('search', '1', {language : 'en', style : google.loader.themes.ESPRESSO});
					  google.setOnLoadCallback(function() {
						var customSearchOptions = {};  var customSearchControl = new google.search.CustomSearchControl(
						  '012150377208032227381:uwpn0z1deyi', customSearchOptions);
						customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
						var options = new google.search.DrawOptions();
						options.enableSearchboxOnly("/search");
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
			
				<li><a href="/pt/home">Página Inicial</a>
				<ul>
					<li><a href="/pt/what_is_openehr">O que é openEHR?</a></li>
					<li><a href="/pt/who_is_using_openehr">Quem está usando openEHR?</a></li>
					<li><a href="/pt/industry_partners">openEHR Parceiros da Indústria</a></li>
				</ul>
				</li>
				
				<li><a href="/pt/openehr_programs">Programas</a>
				<ul>
					<li><a href="/pt/programs/specification">Especificações</a></li>
					<li><a href="/pt/programs/clinicalmodels">Modelos Clínicos</a></li>
					<li><a href="/pt/programs/software">Aplicativos</a></li>
					<li><a href="/pt/programs/localisation">Localização</a></li>
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
			
			<br class="clear">
			
		</div>
	
	</div>
	
	<div id = "MainAreaContainer">

	<div id="MainArea">
		
		<div id="SideMenu">
			<?php include 'menu.php' ?>
		</div>
