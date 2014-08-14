<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');
$PageName = 'Página Inicial';
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header_top.php');
?>
	<div id="MainArea">

		<div id="SmallFrame">
			<img src="/files/home/what_is_openehr.png" alt="What is openEHR image" usemap="#what"/>
			<map name="what">
			  <area shape="rect" coords="0,0,220,150" href="/pt/what_is_openehr" alt="What is openEHR" />
			</map> 
			<div class="TextFrame">
				<h1 class="HomeTitle">O que é openEHR?</h1>
				<p>openEHR se refere a como tornar as TICs capazes de apoiar todos os aspectos dos cuidados em saúde de forma efetiva.
				<br/><a href="/pt/what_is_openehr" style="line-height:200%;">Saber mais</a></p>
			</div>
		</div>
		
		<div id="SmallFrame">
			<img src="/files/home/who_is_using_openehr.png" alt="Who is using openEHR image" usemap="#who"/>
			<map name="who">
			  <area shape="rect" coords="0,0,220,150" href="/pt/who_is_using_openehr" alt="Who is using openEHR" />
			</map> 
			<div class="TextFrame">
				<h1 class="HomeTitle">Quem está usando <br/>openEHR?</h1>
				<p>Empresas, governos, universidades, centros de pesquisa em todo o mundo.
				<br/><a href="/pt/who_is_using_openehr" style="line-height:200%;">Saiba mais</a></p>
			</div>
		</div>

		<!-- <div id="SmallFrame">
			<img src="/files/home/about_openehr_foundation.png" alt="About openEHR Foundation image" usemap="#about"/>
			<map name="about">
			  <area shape="rect" coords="0,0,220,150" href="/pt/about/foundation" alt="About openEHR Foundation" />
			</map> 
			<div class="TextFrame">
				<h1 class="HomeTitle">Sobre a <br/>Fundação</h1>
				<p>A Fundação openEHR é aberta à participação e adesão de todos interessados.
				<br/><a href="/pt/about/foundation"  style="line-height:200%;">Saiba mais</a></p>
			</div>
		</div> -->
			
		<div id="SmallFrame">
			<img src="/files/home/openehr_programs.png" alt="The openEHR programs image" usemap="#join"/>
			<map name="join">
			  <area shape="rect" coords="0,0,220,150" href="/pt/openehr_programs" alt="openEHR Programs" />
			</map> 
			<div class="TextFrame">
				<h1 class="HomeTitle">openEHR<br/>Programas</h1>
				<p>4 Programas openEHR: Especificações, Modelos Clínicos, Aplicativos, Localização.
				<br/><a href="/pt/openehr_programs" style="line-height:200%;">Saiba mais</a></p>
			</div> 
		</div>
		
		<div id="SmallFrame">
			<div id="PartnersLogo">
				<p><a href="/pt/industry_partners/cambio_healthcare_systems"><img src="/files/industry_partners/cambio_logo.png"></a></p>
				<p><a href="/pt/industry_partners/code24"><img src="/files/industry_partners/code24_logo.png"></a></p>
				<p><a href="/pt/industry_partners/critical_software"><img src="/files/industry_partners/critical_logo.png"></a></p>
				<p><a href="/pt/industry_partners/dips"><img src="/files/industry_partners/dips_logo.png"></a></p>
				<p><a href="/pt/industry_partners/infinnity_solutions"><img src="/files/industry_partners/infinnity_logo.png"></a></p>
				<p><a href="/pt/industry_partners/marand"><img src="/files/industry_partners/marand_logo.png"></a></p>
				<p><a href="/pt/industry_partners/ocean_informatics"><img src="/files/industry_partners/ocean_logo.png"></a></p>
				<!--[if lt IE 7]><a href="/pt/industry_partners"><img src="/files/industry_partners/industry_logo.png"></a><![endif]-->
			</div>
			<div class="TextFrame">
				<h1 class="HomeTitle">openEHR Parceiros <br/>da Indústria</h1>
				<p>Informe-se sobre soluções eHealth desenvolvidas por parceiros.
				<br/><a href="/pt/industry_partners" style="line-height:200%;">Saiba mais</a></p>
			</div>
		</div>
		<br class="clear">
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="/functions/rotating_logos.js"></script>
		
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>
