<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Quem está usando openEHR?';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<ul>
				<li><a href="healthcare_providers_and_authorities">Prestadores e Gestores de Serviços de Saúde</a></li>
				<li><a href="funded_research_projects">Projetos de Pesquisas Patrocinados</a></li>
				<li><a href="nonprofit_and_open_source_organisation">Organizações sem fins lucrativos e de Código Livre</a></li>
				<li><a href="governments">Governos</a></li>
				<li><a href="academic_research">Pesquisa Acadêmica</a></li>
			</ul>
		
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>