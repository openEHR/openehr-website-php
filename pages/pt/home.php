<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');
$PageName = 'Página Inicial';
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header_top.php');
?>
	<div id="MainArea" style="height:340px">

		<div id="WhatFrame">
			<img src="/gui/WhatFrame.png" alt="What is openEHR image" usemap="#what"/>
			<map name="what">
			  <area shape="rect" coords="0,0,220,150" href="/pt/what_is_openehr" alt="What is openEHR" />
			</map> 
			<div class="TextFrame">
				<h1 class="HomeTitle">O que é openEHR?</h1>
				<p>openEHR se refere a como tornar as TICs capazes de apoiar todos os aspectos dos cuidados em saúde de forma efetiva.
				<br/><a href="/pt/what_is_openehr" style="line-height:200%;">Saber mais</a></p>
			</div>
		</div>
		
		<div id="WhoFrame">
			<img src="/gui/WhoFrame.png" alt="Who is using openEHR image" usemap="#who"/>
			<map name="who">
			  <area shape="rect" coords="0,0,220,150" href="/pt/who_is_using_openehr" alt="Who is using openEHR" />
			</map> 
			<div class="TextFrame">
				<h1 class="HomeTitle">Quem está usando <br/>openEHR?</h1>
				<p>Empresas, governos, universidades, centros de pesquisa em todo o mundo.
				<br/><a href="/pt/who_is_using_openehr" style="line-height:200%;">Saiba mais</a></p>
			</div>
		</div>

		<div id="AboutFrame">
			<img src="/gui/AboutFrame.png" alt="About openEHR Foundation image" usemap="#about"/>
			<map name="about">
			  <area shape="rect" coords="0,0,220,150" href="/pt/about/foundation" alt="About openEHR Foundation" />
			</map> 
			<div class="TextFrame">
				<h1 class="HomeTitle">Sobre a <br/>Fundação</h1>
				<p>A Fundação openEHR é aberta à participação e adesão de todos interessados.
				<br/><a href="/pt/about/foundation"  style="line-height:200%;">Saiba mais</a></p>
			</div>
		</div>
			
		<div id="ProgramsFrame">
			<img src="/gui/ProgramsFrame.png" alt="The openEHR programs image" usemap="#join"/>
			<map name="join">
			  <area shape="rect" coords="0,0,220,150" href="/pt/openehr_programs" alt="openEHR Programs" />
			</map> 
			<div class="TextFrame">
				<h1 class="HomeTitle">openEHR<br/>Programas</h1>
				<p>4 Programas openEHR: Especificações, Modelos Clínicos, Aplicativos, Localização.
				<br/><a href="/pt/openehr_programs" style="line-height:200%;">Saiba mais</a></p>
			</div> 
		</div>
		
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>
