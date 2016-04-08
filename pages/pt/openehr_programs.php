<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'openEHR Programas';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header_top.php');
?>

	<div id="MainArea">
		
		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->

			<h1><?php echo "$PageName";?></h1>
			
			<p>O principal trabalho da Fundação openEHR é realizada por quatro "programas" que respectivamente, focam sobre especificações, modelagem clínica, software e localização. Os três primeiros correspondem aos principais tipos de ações da comunidade openEHR. O trabalho em todos os programas é realizada por membros da comunidade. Um sistema de governança leve, influenciado pelos sistemas de governança da Apache Foundation e da International Health Terminology Standards Development Organisation (IHTSDO), foi definido para permitir uma tomada de decisão defensável.</p>
			
			<a href="/pt/programs/specification"><img src="/files/programs/SpecificationFrame.png" alt="Specification program image" class="floatLeft"/></a>
			<h2>Programa de Especificações</h2>
			<p>O Programa de Especificações define os modelos formais e linguagens que definem dados openEHR, modelos de conteúdo openEHR (arquétipos e templates), e serviços e APIs openEHR. Estas especificações são publicadas e usadas em seu próprio direito e também sustentam os Programas de Modelagem Clínica (que prevêem a linguagem dos arquétipos) e de Software (para o qual eles fornecem esquemas e definições de interface para o software).</p>
			<a href="/pt/programs/specification">Saber mais</a>
			<br class="clear">
			
			<a href="/pt/programs/clinicalmodels"><img src="/files/programs/ModelsFrame.png" alt="Clinical models program image" class="floatLeft"/></a>
			<h2>Programa de Modelos Clínicos</h2>
			<p>O trabalho do Programa de Modelagem Clínica é realizada em grande parte por profissionais clínicos e especialistas em informática da saúde que trabalham na Clinical Knowledge Manager (CKM), a construção de arquétipos que agem como as normas internacionais de conteúdo reutilizável. Estes arquétipos pode ser usado por programas nacionais e locais, e são a base para modelos de construção, a partir do qual os artefatos de software são gerados por ferramentas.</p>
			<a href="/pt/programs/clinicalmodels">Saber mais</a>
			<br class="clear">
			
			<a href="/pt/programs/software"><img src="/files/programs/SoftwareFrame.png" alt="Software program image" class="floatLeft"/></a>
			<h2>Programa de Software</h2>
			<p>O Programa de Software é responsável pelo desenvolvimento de implementações de código aberto de referência de ambas ferramentas e componentes do sistema de informação. Tais componentes podem ser usados ​​livremente pelos implementadores openEHR para construir a sua própria ferramentaria e sistemas, e estão disponíveis sob a licença Apache 2. O programa de software executa um outro trabalho muito importante: garantir a exequibilidade de todas as especificações.</p>
			<a href="/pt/programs/software">Saber mais</a>
			<br class="clear">
				
			<a href="/pt/programs/localisation"><img src="/files/programs/LocalisationFrame.png" alt="Localisation program image" class="floatLeft"/></a>
			<h2>Programa de Localização</h2>
			<p>Trazer os resultados técnicos dos outros programas para o mundo real é o trabalho do Programa de Localização, que trabalha de forma distribuída em todo o mundo, geralmente em colaboração com grupos de padrões locais, regionais e nacionais, bem como grupos industriais e acadêmicas. O Programa de Localização visa tornar os resultados de openEHR disponível e utilizável em idiomas locais e em diversas culturas de saúde e ambientes de financiamento.</p>
			<a href="/pt/programs/localisation">Saber mais</a>
			<br class="clear">
			
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>
