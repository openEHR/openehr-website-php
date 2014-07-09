<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'Governança';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>A maioria dos projetos atuais de software relacionados com openEHR são entidades autônomas. Os princípios abaixo só governam o programa de softwares comuns  openEHR que fornecem algum recurso (às vezes incluindo o código, doados à Fundação openEHR).</p>
			<p>A estrutura de governança do programa / grupo de software openEHR é principalmente uma lista de email baseada e inspirada pela<a href="http://www.apache.org/foundation/" target="_blank">Fundação do Software Apache</a> e <a href="http://www.apache.org/foundation/how-it-works.html#management" target="_blank">a forma como ela funciona</a>. Isto é combinado em geral com a  <a href="/about/governance_structure"> estrutura de governança</a> da Fundação openEHR que requer tanto um <em>Comitê do Programa</em> quanto uma lista de <em>Membros Qualificados no Programa</em>.</p>
			
			
			<h2>Comunidade,  incluindo os Membros Qualificados no Programa</h2>
			<p>A maior parte das decisões de trabalho e software devem ser discutidos<a href="/community/mailinglists.php">na lista de discussão openehr-implementers</a>onde qualquer um pode contribuir para o assunto em pauta (não é necessário ser um associado).</p>
			<p>Se a votação for necessária então votos dos<em>Membros Qualificados no Programa</em>serão avaliados usando <a href="http://www.apache.org/foundation/voting.html" target="_blank">o modelo de votação e interpretação do Apache</a>.</p>
			<p>Associados Qualificados devem se basear na meritocracia e vontade de contribuir. Não há limite de tempo para Associados Qualificados. Associados Qualificados podem ser excluídos se houver uma solicitação a um membro para ser removido.</p>
			<p>Se três <em>Membros Qualificados</em> independentes* concordarem em sugerir um novo membro e apresentar o candidato (incluindo méritos relacionados ao openEHR), então o<em>Comitê do Programa</em> deve discutir e considerar se o novo membro deve ser:</p>
			<p>a) aprovado no momento ou</p>
			<p>b) ser recomendado para primeiro adquirir mais experiência, a fim de mais tarde ser novamente sugerido.</p>
			<p>Caso surjam questões difíceis relacionadas aos fornecedores e instituições, que pelo menos três Membros Qualificados independentes analisem qual o benefício que o fornecedor/instituição traria no balanço geral, então o assunto pode ser transferido para o comitê do programa.</p>
			<p>*)Independente, neste caso, significa não dependender financeiramente de uma mesma organização (salário) ou outros benefícios.</p>
			
			<h3>Membros Qualificados no Programa Atual</h3>
			<ul>
				<li>David Moner</li>
				<li>Diego Boscá;</li>
				<li>Erik Sundvall (coordinator)</li>
				<li>Heath Frankel</li>
				<li>Heather Leslie</li>
				<li>Koray Atalag</li>
				<li>Pablo Pazos</li>
				<li>Ricardo Correia</li>
				<li>Rong Chen</li>
				<li>Sam Heard</li>
				<li>Seref Arikan</li>
				<li>Sergio Freire</li>
				<li>Shinji Kobayashi</li>
				<li>Thomas Beale</li>
				<li>Tony Shannon</li>
			</ul>
			
			
			<h2>Comitê do Programa</h2>
			<p>O <em>Comitê do Programa</em> é responsável por informar e se relacionar com o conselho da fundação openEHR e também manter a listagem dos projetos de software openEHR oficiais (e incubado) e aprovar novos regulamentos.
			<em>Membros Qualificados no Programa</em> sugestões (como descrito acima).</p>
			<p> O <em>Comitê do Programa</em> é de acordo com o regulamento da <a href="https://sites.google.com/a/openehrfoundation.org/foundation/home/foundation-committees" target="_blank">fundação openEHR</a>limitado a um máximo de 9 e mínimo de 5 membros qualificados. Durante a formação inicial do comitê nos esforçamos para configurá-lo de modo que nenhuma empresa ou instituição específica seja representada mais de uma vez (porque o número de mandatos é limitado).</p>
			<p>As <em>posições do Comitê do Programa</em>devem ser renovadas ou alteradas em uma base regular conforme decidido pela fundação openEHR. O <em>Programa de Software dos Membros Qualificados</em> sugerem que novos e/ou renovados cargos no <em>Comitê do Programa de Software</em> ao conselho da fundação openEHR que faz a aprovação final (ou pede ao <em>Programa de Software dos Membros Qualificados</em> para uma nova sugestão).</p>
			
			<h3>Membros Qualificados no Programa Atual</h3>
			<ul>
				<li>Alan James</li>
				<li>Diego Boscá (coordenador)</li>
				<li>Pablo Pazos</li>
				<li>Rong Chen</li>
				<li>Seref Arikan</li>
			</ul> 
		
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>
