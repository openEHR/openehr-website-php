<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Mapa do Site';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header.php');
?>

		<div id="Content">
		
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->		
			<h1><?php echo "$PageName";?></h1>
			
			<div style="position:relative; left:0px; top:0px;">
			Site
			<ul>
				<li><a href="/pt/home">Página Inicial</a></li>
				<li><a href="/pt/what_is_openehr">O que é openEHR?</a></li>
				<li><a href="/pt/about_this_website">Sobre esse sítio</a></li>
				<li><a href="mailto:webmaster@openehr.org">Webmaster</a></li>
				<li><?php include $_SERVER['DOCUMENT_ROOT'].'/pages/pt/who_is_using_openehr/menu.php' ?></li>
			</ul>
			<br/>
			
			<a href="/openehr_programs">openEHR Programas</a>
			<br/>
			<br/>
				<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/pt/programs/specification/menu.php' ?>
				<br/>
				<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/pt/programs/clinicalmodels/menu.php' ?>
				<br/>
				<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/pt/programs/software/menu.php' ?>
				<br/>
				<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/pt/programs/localisation/menu.php' ?>
				<br/>
				
			<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/pt/getting_involved/menu.php' ?>
			<br/>
			</div>
			
			<div style="position:absolute; left:400px; top:50px;">
			<br/>
			Downloads
				<ul>
					<li><a href="/pt/downloads/modellingtools">Ferramentas de Modelagem</a></li>
						<ul>
							<li><a href="/downloads/ADLworkbench/home">ADL Workbench</a></li>
							<li><a href="/downloads/archetypeeditor/home">Archetype Editor</a></li>
						</ul>
					<li><a href="/pt/downloads/applications">Aplicativos</a></li>
					<li><a href="/pt/downloads/ds_and_guidelines">Protocolos e Diretrizes Clínicas</a></li>
					<li><a href="/pt/downloads/ehrcomponents">Componentes do RES</a></li>
					<li><a href="/pt/downloads/applicationbuilding">Desenvolvimento de Aplicativos</a></li>
				</ul>
			<br/>
			
			<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/pt/news_events/menu.php' ?>
			<br/>
			
			<?php include $_SERVER['DOCUMENT_ROOT'].'/pages/pt/about/menu.php' ?>
			<br/>
			
			Especificações
				<ul>
					<li><a href="/pt/programs/specification/releases/1.0.2">Edição Atual</a></li>
					<li><a href="/pt/programs/specification/releases/currentbaseline">Cenário Atual</a></li>
					<li><a href="http://www.openehr.org/issues/browse/SPECPR" target="_blank">Rastreador de Problemas</a></li>
					<li><a href="http://www.openehr.org/releases/1.0.2/its/XML-schema/index.html">Esquemas XML</a></li>
					<li>RM UML<a href="/releases/1.0.1/reference-models/openEHR/UML/HTML" target="_blank" title="Reference Model UML">[1.0.1]</a>, <a href="/releases/1.0.2/reference-models/openEHR/UML/HTML" target="_blank" title="Reference Model UML">[1.0.2]</a></li>
					<li><a href="https://github.com/openEHR/reference-models/tree/master/models/openEHR/Release-1.0.2/BMM">RM BMM Esquemas</a></li>
				</ul>
			<br/>
			
			Modelos Clínicos
				<ul>
					<li><a href="http://openehr.org/knowledge/" target="_blank">CKM</a></li>
					<li><a href="http://openehr.org/knowledge/#repositoryoverview" target="_blank">CKM Mindmap de Arquétipos</a></li>
					<li><a href="http://openehr.org/knowledge/#userstatistics" target="_blank">CKM Estatísticas de Usuários</a></li>
					<li><a href="http://www.openehr.org/wiki/display/spec/openEHR+Terminology" target="_blank">Terminologia openEHR</a></li>
					<li><a href="https://github.com/openEHR/adl-archetypes/tree/master/ADL15-reference/" target="_blank">Arquétipos em Fase de Teste</a></li>
				</ul>
			<br/>
				
			<?php include $_SERVER['DOCUMENT_ROOT'].'/pt/pages/resources/menu.php' ?>
			<br/>
			
			<?php include $_SERVER['DOCUMENT_ROOT'].'/pt/pages/community/menu.php' ?>
			<br/>
		
			<?php include $_SERVER['DOCUMENT_ROOT'].'/pt/pages/using_the_site/menu.php' ?>
			<br/>
			</div>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>