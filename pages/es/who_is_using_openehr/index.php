<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = '¿Quiénes utilizan openEHR?';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<ul>
				<li><a href="healthcare_providers_and_authorities">Proveedores de Salud y Autoridades</a></li>
				<li><a href="funded_research_projects">Proyectos de Investigación Financiados</a></li>
				<li><a href="nonprofit_and_open_source_organisation">Organizaciones sin Fines de Lucro y Código Abierto</a></li>
				<li><a href="governments">Gobiernos</a></li>
				<li><a href="academic_research">Investigación Académica</a></li>
			</ul>
		
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_footer.php');?>