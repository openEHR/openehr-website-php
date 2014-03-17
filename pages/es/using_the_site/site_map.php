<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Mapa del Sitio';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_header.php');
?>

		<div id="Content">
		
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->		
			<h1><?php echo "$PageName";?></h1>
			
			<div style="position:relative; left:0px; top:0px;">
			Site
			<ul>
				<li><a href="/es/home">Página Principal</a></li>
				<li><a href="/es/what_is_openehr">¿Qué es openEHR?</a></li>
				<li><a href="/es/about_this_website">Sobre este sitio</a></li>
				<li><a href="mailto:webmaster@openehr.org">Webmaster</a></li>
				<li><?php include $_SERVER['DOCUMENT_ROOT'].'/pages/es/who_is_using_openehr/menu.php' ?></li>
			</ul>
			<br/>
			
			<a href="/openehr_programs">openEHR Programas</a>
			<br/>
			<br/>
				<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/es/programs/specification/menu.php' ?>
				<br/>
				<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/es/programs/clinicalmodels/menu.php' ?>
				<br/>
				<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/es/programs/software/menu.php' ?>
				<br/>
				<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/es/programs/localisation/menu.php' ?>
				<br/>
				
			<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/es/getting_involved/menu.php' ?>
			<br/>
			</div>
			
			<div style="position:absolute; left:400px; top:50px;">
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
					<li><a href="/es/programs/specification/releases/1.0.2">Liberación Actual</a></li>
					<li><a href="/es/programs/specification/releases/currentbaseline">Versión Actual</a></li>
					<li><a href="http://www.openehr.org/issues/browse/SPECPR" target="_blank">Gestor de Incidencias</a></li>
					<li><a href="http://www.openehr.org/releases/1.0.2/its/XML-schema/index.html">Esquemas XML</a></li>
					<li>RM UML<a href="/releases/1.0.1/reference-models/openEHR/UML/HTML" target="_blank" title="Reference Model UML">[1.0.1]</a>, <a href="/releases/1.0.2/reference-models/openEHR/UML/HTML" target="_blank" title="Reference Model UML">[1.0.2]</a></li>
					<li><a href="https://github.com/openEHR/reference-models/tree/master/models/openEHR/Release-1.0.2/BMM">RM BMM Esquemas</a></li>
				</ul>
			<br/>
			
			Clinical Models (Quick Links)
				<ul>
					<li><a href="http://openehr.org/knowledge/" target="_blank">CKM</a></li>
					<li><a href="http://openehr.org/knowledge/#repositoryoverview" target="_blank">CKM Mapas Mentales de Arquetipos</a></li>
					<li><a href="http://openehr.org/knowledge/#userstatistics" target="_blank">CKM Estadísticas de Usuarios</a></li>
					<li><a href="http://www.openehr.org/wiki/display/spec/openEHR+Terminology" target="_blank">Terminología de openEHR</a></li>
					<li><a href="https://github.com/openEHR/adl-archetypes/tree/master/ADL15-reference/" target="_blank">Arquetipos de Prueba</a></li>
				</ul>
			<br/>
				
			<?php include $_SERVER['DOCUMENT_ROOT'].'/es/pages/resources/menu.php' ?>
			<br/>
			
			<?php include $_SERVER['DOCUMENT_ROOT'].'/es/pages/community/menu.php' ?>
			<br/>
		
			<?php include $_SERVER['DOCUMENT_ROOT'].'/es/pages/using_the_site/menu.php' ?>
			<br/>
			</div>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_footer.php');?>