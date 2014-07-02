<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'IP e Licenciamento';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>Introdução</h2>
			<p>O Programa de Especificação gera artefatos que se destinam a ser livremente utilizável por qualquer tipo de interessado (stakeholder), incluindo empresas comerciais. Os direitos autorais (copyright) são controlados por licenças de código e conteúdo aberto que contemplam esse objetivo.</p>
			<p>As especificações openEHR e suas expressões computáveis ​​são publicadas abertamente e de uso livre para todas as categorias de uso, tanto comerciais como não-comerciais. Direitos autorais e licenças são usadas ​​para proteger esses artefatos garantindo uso livre e gratuito pela comunidade.</p>
			
			<h2>Categorias de artefatos</h2>
			<p>Do ponto de vista da propriedade intelectual, existem os seguintes tipos de artefatos:</p>
			<ul>
				<li><em>Documentação das especificações - formato publicável</em>, em um ou ambos dos seguintes formatos:
				<ul>
					<li>HTML (formatado com layout wiki),</li>
					<li>PDF ou algum tipo de visualização imediata;</li>
				</ul>
				</li>
				<li><em>Documentação das especificações - formato fonte</em>: dependendo do estágio do ciclo de vida:
				<ul>
					<li>fonte wiki;</li>
					<li>para as especificações no formato PDF, atualmente os arquivos são criados no FrameMaker (sendo convertidas para o formato DITA);</li>
				</ul>
				</li>
				<li><em>Artefatos computáveis</em>: qualquer artefacto computável ou formal reconhecido, incluindo, mas não se limitando a:
				<ul>
					<li>Arquivos XMI de modelos UML;</li>
					<li>Fontes de ferramentas UML sempre que possível;</li>
					<li>XSDs de exibição de dados de especificações pertinentes;</li>
					<li>WSDLs de especificações de serviço;</li>
					<li>esqueletos de código de APIs;</li>
					<li>códigos de exemplo.</li>
				</ul> 
				</li>
				<li><em>Materiais educacionais</em>: incluindo:
				<ul>
					<li>arquivos de apresentações de slides (ex. Microsoft .ppt, .pptx) ou formatos publicáveis, geralmente PDF</li>
					<li>apresentações de vídeo em um formato de filme reconhecido, geralmente uma coleção de arquivos, por exemplo, .swf, .mpeg, .html, etc..</li>
				</ul>
				</li>
			</ul>
			
			
			<h2>Direitos de Propriedade Intelectual</h2>
			<h3>Direitos autorais</h3>
			<p>Artefatos de qualquer um dos tipos acima produzidos pelo Programa de Especificação são de direitos autorais da Fundação openEHR. Isso garante a Fundação ser proprietária dos "direitos morais" dos artefatos em nome de todos os colaboradores e para a segurança da comunidade de usuários.</p>
			
			<h3>Atribuição</h3>
			<p>Os contribuintes de um artefato são reconhecidos numa seção de atribuição do trabalho. Para especificações documentais, isto está no histórico de revisões de cada especificação. Para artefatos computáveis​​, isto está na seção de lista do contribuinte no bloco de licença.</p>
			
			<h3>Licenciamento</h3>
			<p>Uma licença padrão é anexada a cada artefato, definindo explicitamente os direitos de utilização. Quando isso não ocorre, a definição de direitos de utilização recai diretamente para a lei de direitos autorais de alguma jurisdição, ou uma das convenções internacionais de direitos autorais.</p>
			<br/>
			<p>As atribuições de licença são as seguintes:</p>
			
			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT"> Tipos de artefatos</th>
				<th class="TableMainT"> Licença de uso</th>
				<th class="TableMainT"> Comentários</th>
			</tr>
			<tr>
				<td class="TableMainC"> <em>Arquivos de documento de especificações publicados </em> </td>
				<td class="TableMainC"> <a rel="license" href="http://creativecommons.org/licenses/by-nd/3.0/deed.en_GB"><img alt="Creative Commons Licence" style="border-width:0" src="http://i.creativecommons.org/l/by-nd/3.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">Especificações openEHR</span> produzidas pela <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.openEHR.org" property="cc:attributionName" rel="cc:attributionURL">Fundação openEHR</a> é licenciada sob a <a rel="license" href="http://creativecommons.org/licenses/by-nd/3.0/deed.en_GB">Creative Commons Attribution-NoDerivs 3.0 Unported License</a>.<br />Permissões além do escopo desta licença podem estar disponíveis <a xmlns:cc="http://creativecommons.org/ns#" href="/programs/specification/iplicense" rel="cc:morePermissions">aqui</a>. </td>
				<td class="TableMainC"> <p>O uso da licença CC-BY-ND permite o compartilhamento público, a republicação, e uso comercial sem restrições. Ele protege os usuários das especificações de modificações desconhecidos e / ou locais, adulteração etc sendo feito fora do próprio processo aberto da Fundação. Esta é a mesma coisa que o W3C faz com sua  <a href="http://www.w3.org/Consortium/Legal/2002/copyright-documents-20021231">licença documento</a>.</p>
										<p>A opção CC 'SA' (Share-alike) também foi considerada, mas rejeitada por duas razões: <br> <ul><li>Em primeiro lugar, as especificações openEHR são consideradas obras definitivas da Fundação, e não interpretações de qualquer outra coisa. Seu conteúdo e evolução, portanto, precisa refletir corretamente os processos da própria comunidade openEHR.</li><li>Em segundo lugar, a integridade das especificações no qual o software e os sistemas de saúde são baseados diretamente é considerado de suma importância para os pacientes e os profissionais clínicos.</li></ul></p></td>
			</tr>
			<tr>
				<td class="TableMainC"> <em>Arquivos de origem do documento de especificação </em> </td>
				<td class="TableMainC"> <a rel="license" href="http://creativecommons.org/licenses/by-nd/3.0/deed.en_GB"><img alt="Creative Commons Licence" style="border-width:0" src="http://i.creativecommons.org/l/by-nd/3.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">Especificações openEHR</span> produzidos pela <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.openEHR.org" property="cc:attributionName" rel="cc:attributionURL">Fundação openEHR</a> são licenciadas sob a <a rel="license" href="http://creativecommons.org/licenses/by-nd/3.0/deed.en_GB">Creative Commons Attribution-NoDerivs 3.0 Unported License</a>.<br />Permissões além do escopo desta licença podem estar disponíveis <a xmlns:cc="http://creativecommons.org/ns#" href="/programs/specification/iplicense" rel="cc:morePermissions">aqui</a>. </td>
				<td class="TableMainC"> <br/><br/><br/>idem <br/><br/><br/></td>
			</tr>
			<tr>
				<td class="TableMainC"> <em>Especificação de artefatos computáveis</em> </td>
				<td class="TableMainC"> <img src="http://www.apache.org/images/feather-small.gif" style="border: 1px solid black; height:30px;" /><br/>
										<a href="http://www.apache.org/licenses/LICENSE-2.0">Apache 2 License</a></td>
				<td class="TableMainC"> <br/><br/>Artefactos computáveis ​​são licenciados da mesma forma que software, ou seja, usando a licença Apache que é amplamente aceita e amigável a indústria.<br/><br/></td>
			</tr>
			<tr>
				<td class="TableMainC"> <em>Artefatos educacionais</em> </td>
				<td class="TableMainC"> <img src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png" style="border: 1px solid black" /><br/>PRODUZIDO pela <a href="http://www.openEHR.org">Fundação openEHR</a> é licenciado sob a
										<a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution-ShareAlike 3.0 Unported License</a>.</td>
				<td class="TableMainC"> <br/><br/>Artefatos educacionais devem ser amplamente utilizados e a melhoria das traduções e a reutilização são incentivadas.<br/><br/><br/> </td>
			</tr>
			</tbody>
			</table></body>
			</table>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>
