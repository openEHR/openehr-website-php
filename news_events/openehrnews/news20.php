<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title>openEHR - News</title>
	<?php include '../../panel/headpanel.php' ?>
</head>


<body>

<div id="MainFrame">
	
	<div id="TopPanel">
	<?php include '../../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu" style="text-align:left">
		<div class="nav">
   		<?php include '../../menu/topmenu.php' ?>
		</div>
	</div> 

	<div id="MainArea">
	
		<div id="SideMenu">
		<?php $current = 1; include '../menu/newsmenu.php' ?>
		</div>
		
		<div id="TextArea">
			<h1>News</h1>
			<h2>Brazil re-affirms commitement to openEHR</h2>
			<h6>16. May 2012 | from: Thomas Beale</h6>
			<h3>From: Brazil Ministry of health - Secretary of Participative management of SUS-DATASUS</h3>
			<p>As part of operationalising chapter III of the government decree <a href="http://bvsms.saude.gov.br/bvs/saudelegis/gm/2011/prt2073_31_08_2011.html">(Nº 2.073, DE 31 DE AGOSTO DE 2011)</a>, a national EHR Workshop was held aimed at defining methods and standards to be used in the Brazilian EHR Project (RES-National). The conclusions were largely underpinned by openEHR. Held in Brasilia between 8th to 10th of May 2012, this workshop broadly covered topics such as architectural principles, scope of implementation and governance. It was agreed that the Ministry of Health and the recently created workgroup will kick off initial work by reviewing Minas Gerais Health Department archetypes based on openEHR formalism. This will be the base for the first of four phases of the RES-National Project, which ultimately aims at making health information within the current national systems electronically available in a secure manner through a citizen portal and supporting healthcare professionals and administrators. The main focus will be to promote the continuity of care, especially at the primary care facilities.</p>
			<p>The first step to action is to draft documents describing the information model, model of access to information (role based access, standard queries) and archetype governance process.</p>
			<p>At the workshop there was clear acceptance to use openEHR EHR extracts as the means to exchange health information. Among the participating  organisations, including SBIS, CONASS, CONASEMS, ABRASCO, universities, supplementary health organizations, states of Minas Gerais, São Paulo and Goias, city of Belo Horizonte, supported the final document which defines terminology service and archetype management.</p>
			<p>Jussara Macedo, a Director of the openEHR Foundation, and her colleagues who have been the driving force behind this effort describe the outcome as &quot;<i>a historical moment for our country and we should celebrate it. There is a long road full of work, but there is also a very important convergence of efforts towards it. A rare moment of understanding of what is about to come and what is the best way to address those issues.</i>&quot;</p>
			<br/>
			<p>Workshop report: <a href="../../files/news_events/Oficina RES Brasil Maio 2012.pdf">Oficina RES Brasil Maio 2012</a> (application/download, 233.1 kB) (Portuguese); <a href="../../files/news_events/National EHR Workshop Brazil May 2012(EN).pdf">National EHR Workshop Brazil May 2012(EN)</a> (application/download, 226.5 kB) (English).</p>
			<p>Further information: <a href="mailto:jussara.macedo@gmail.com">Jussara Macedo Rotzsch</a></p>
			<p>Other references: <a href="http://www.blog.saude.gov.br/oficina-debate-ferramenta-de-registro-do-cartao-nacional-de-saude/">Ministry of Health Blog</a></p>
			<br/>
			<a href="../news">>> Back to News</a>
		</div>
			

	</div>

	<div id="BottomMenu">
	<?php include '../../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
	<?php include '../../panel/bottompanel.php' ?>
	</div>

</div>
	
<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>