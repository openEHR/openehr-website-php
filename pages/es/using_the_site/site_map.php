<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Mapa del Sitio';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_header.php');
?>

		<div id="Content">
		
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->		
			<h1><?php echo "$PageName";?></h1>
			
			Sitio
			<ul>
				<li><a href="/es/home">Página Principal</a></li>
				<li><a href="/es/what_is_openehr">¿Qué es openEHR?</a></li>
				<li><a href="/es/about_this_website">Sobre este sitio</a></li>
				<li><a href="/wiki" target="_blank">Wiki</a></li>
				<li><a href="/issues" target="_blank">Jira</a></li>
				<li><a href="http://www.openehr.org/ckm">CKM</a></li>
				<li><a href="/es/openehr_programs">openEHR Programas</a></li>
			</ul>
			<br/>
		
			<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/es/programs/specification/menu.php' ?>
			<br/>
			<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/es/programs/clinicalmodels/menu.php' ?>
			<br/>
			<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/es/programs/software/menu.php' ?>
			<br/>
			<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/es/programs/localisation/menu.php' ?>
			<br/>
				
			<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/es/who_is_using_openehr/menu.php' ?>
			<br/>
			
			<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/es/industry_partners/menu.php' ?>
			<br/>
				
			<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/es/getting_involved/menu.php' ?>
			<br/>
		
			<br/>
			Descargas
				<ul>
					<li><a href="/es/downloads/modellingtools">Herramientas de Modelado</a></li>
						<ul>
							<li><a href="/downloads/ADLworkbench/home">ADL Workbench</a></li>
							<li><a href="/downloads/archetypeeditor/home">Archetype Editor</a></li>
						</ul>
					<li><a href="/es/downloads/applications">Aplicaciones</a></li>
					<li><a href="/es/downloads/ds_and_guidelines">Directrices</a></li>
					<li><a href="/es/downloads/ehrcomponents">Componentes de la HCE</a></li>
					<li><a href="/es/downloads/applicationbuilding">Construcción de Aplicaciones</a></li>
				</ul>
			<br/>
			
			<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/es/news_events/menu.php' ?>
			<br/>
			
			<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/es/about/menu.php' ?>
			<br/>
			
			Specifications (Quick Links)
			<ul>
				<li><a href="/programs/specification/releases/" title="Current official release of specifications">Liberación Actual</a></li>
				<li><a href="/programs/specification/releases/currentbaseline" title="Specifications development baseline">Versión Actual</a></li>
				<li><a href="https://openehr.atlassian.net/secure/Dashboard.jspa?selectPageId=10190" target="_blank"  title="Specifications issue tracker (Jira)">Gestor de Incidencias</a></li>
				<li><a href="/releases/1.0.2/reference-models/openEHR/BMM" target="_blank" title="Reference Model Basic Meta-Model schemas (dADL format object model schemas)">RM BMM Esquemas</a></li>
			</ul>
			<br/>
			
			Clinical Models (Quick Links)
			<ul>
				<li><a href="/ckm/" target="_blank" title="Clinical Knowledge Manager">CKM</a></li>
				<li><a href="/ckm/#repositoryoverview" target="_blank" title="Clinical Knowledge Manager mindmap of all archetypes">CKM Mapas Mentales de Arquetipos</a></li>
				<li><a href="/ckm/#userstatistics" target="_blank" title="Clinical Knowledge Manager user statistics">CKM Estadísticas de Usuarios</a></li>
				<li><a href="/wiki/display/spec/openEHR+Terminology" target="_blank" title="openEHR terminology/vocabulary page">Terminología de openEHR</a></li>
				<li><a href="https://github.com/openEHR/adl-archetypes/tree/master/ADL15-reference/" target="_blank" title="Library of ADL reference archetypes for compiler testing">Arquetipos de Prueba</a></li>
			</ul>
			<br/>
				
			<?php include $_SERVER['DOCUMENT_ROOT'].'/es/pages/resources/menu.php' ?>
			<br/>
			
			<?php include $_SERVER['DOCUMENT_ROOT'].'/es/pages/community/menu.php' ?>
			<br/>
		
			<?php include $_SERVER['DOCUMENT_ROOT'].'/es/pages/using_the_site/menu.php' ?>
			<br/>

			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_footer.php');?>