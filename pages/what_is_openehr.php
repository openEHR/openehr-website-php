<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'What is openEHR?';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header_top.php');
?>

	<div id="MainArea" style=" margin-left:60px; margin-top:35px; margin-bottom:100px; width:900px;">
		
		<div id="Content">
		
			<h1><?php echo "$PageName";?></h1>
			
			<p><a href="/files/what_is_openehr/abstract_architecture.png"> <img src="/files/what_is_openehr/abstract_architecture.png" alt="Abstract architecture image" title="Click to enlarge" width="240" style="margin-left:30px; margin-bottom:20px; border: solid 1px #CCCCCC; float:right;"/></a>
			openEHR é uma comunidade virtual trabalhando sobre <em>interoperabilidade e computabilidade em e-saúde</em>. Seu foco principal é em prontuários eletrônicos e sistemas de Registro Eletrônico de Saúde (EHR). </p>
			<p>A Fundação openEHR tem publicado um <a href="/programs/specification/releases/currentbaseline">conjunto de especificações</a> que define um <em>modelo de referência</em> de informação em saúde, uma linguagem para construir 'modelos clínicos', ou <em>arquétipos</em>, que são separados do software, e uma linguagem de consulta. A arquitetura é projetada para fazer uso de terminologias de saúde externas, como SNOMED CT, LOINC e CID X. Componentes e sistemas em conformidade com openEHR são 'abertos' em termos de dados (eles obedecem o esquemas XML openEHR publicado), modelos (eles são orientados por arquétipos, escritos no formalismo ADL publicado) e API. Eles compartilham a chave de inovação do openEHR de adaptabilidade, devido aos arquétipos serem externo ao software, e partes significativas do software serem derivadas de máquina de arquétipos.</p>
			<p>O resultado essencial são sistemas e ferramentas para computação de informações de saúde em um nível semântico, permitindo, assim, funções analíticas verdadeiras como apoio à decisão e consultas de pesquisa.</p>


			<h2>Arquitetura Técnica</h2>
			<p><a href="/files/what_is_openehr/multi_level_modelling.png"> <img src="/files/what_is_openehr/multi_level_modelling.png" alt="Multi level modelling image" title="Click to enlarge" width="240" style="margin-right:30px; margin-bottom:20px; border: solid 1px #CCCCCC; float:left;"/></a>
			A abordagem técnica do openEHR é de <em>modelagem multi-nível</em> com arquitetura orientada a serviços, no qual os modelos construídos por especialistas de domínio estão em sua própria camada.</p>
			<p>Isso permite que os especialistas de domínio - médicos, profissionais de saúde e outros especialistas - a estarem diretamente envolvidos na definição da semântica de sistemas de informações clínicas, e também torna mais fácil usar a terminologias. Você pode ver todo um repositório destes modelos, conhecidos por 'arquétipos' <a href="http://www.openehr.org/ckm/" target="_blank">aqui</a>, e a especificação de arquétipos constitui hoje um padrão ISO (ISO 13606-2). Estes já estão sendo utilizados por diversos governos nacionais para especificar padrões nacionais de informação de e-saúde.</p>
			<p><a href="/files/what_is_openehr/single_source_modelling.png"> <img src="/files/what_is_openehr/single_source_modelling.png" alt="Single source modelling image" title="Click to enlarge" width="240" style="margin-left:30px; margin-bottom:20px; border: solid 1px #CCCCCC; float:right;"/></a> openEHR também definiu especificações para os modelos de informação clínica, Extratos de RES, dados demográficos, tipos de dados e vários tipos de interfaces de serviço. Estes têm sido utilizados em hospitais e sumários clínicos de sistemas de RES em vários países.</p>
			<p>A segunda dimensão, através do qual a abordagem de modelagem openEHR pode ser vista é de <em>modelagem de fonte única</ em>. Dentro desta abordagem, os arquétipos e templates são definitivamente modelos semânticos, sem compromisso com mensagens específicas ou padrões de documentos, ou outras tecnologias. Em vez disso, expressões concretas agora geram artefatos. Na prática, isso significa que esquemas de dados, tais como HL7 CDA, ASTM CCR e HL7 e outros formatos de mensagens agora são gerados, em vez de modelados manualmente. Uma vez que a modelagem de fonte única é estabelecida, outras saídas, incluindo as formas de interface do usuário e código-fonte do software. Isto significa que um modelo de 'resultado de microbiologia' só precisa ser feito uma vez para permitir relatórios, formulários de interface do usuário, CDAs e outros formatos de mensagem a ser gerado.</p>
			
			<h2>Abordagem de Desenvolvimento</h2>
			<p><a href="/files/what_is_openehr/openehr_platform_stakeholders.png"> <img src="/files/what_is_openehr/openehr_platform_stakeholders.png" alt="openEHR platform stakeholders image" title="Click to enlarge" width="240" style="margin-right:30px; margin-bottom:20px; border: solid 1px #CCCCCC; float:left;"/></a>
			Existem alguns benefícios importantes para a abordagem de desenvolvimento openEHR. Primeiramente, agora é possível construir um repositório de RES, independentemente de especificações de conteúdo. Em outras palavras, o seu sistema de RES não precisa saber a priori sobre qualquer um dos dados clínicos que vai processar, como sinais vitais, diagnósticos ou solicitações. Modelos para essas coisas são desenvolvidos separadamente. Modelos para conjuntos de dados e formulários também são desenvolvidos separadamente, e os componentes de interface do usuário de formulários são agora gerados a partir dessas definições. Isso permite <em> uma nova geração de sistemas de RES que rotineiramente se adaptam às novas exigências </ em> - porque é assim que a arquitetura é projetada em primeiro lugar.</p>
			<p>Em segundo lugar, criação de software agora é muito diferente. Partes significativas do software agora são gerados por ferramentas a partir dos modelos, reduzindo a quantidade de trabalho a fazer, e melhorando muito a rastreabilidade semântica. Geração de código por modelos e GUI (interface de usuário) é uma área de inovação contínua no openEHR, e promete revolucionar a informática em saúde.</p>
			<p>Outro benefício são as <em>consultas portáteis (portable queries)</ em> - consultas com base em modelos de conteúdo, não de esquemas de banco de dados. Juntamente com RES e virtual-RES as APIs de interface de serviço estão permitindo uma nova classe de ferramentas de apoio à decisão.</p>
			<p>Em termos clínicos, os profissionais de saúde estão agora pela primeira vez experimentando envolvimento direto na construção e desenvolvimento contínuo dos sistemas de RES. Isso significa que <em> a qualidade dos dados é melhor </ em> - eles os projetaram, e isso também permite que os aplicativos que trabalham para eles sejam construídos.</p>
			

			<h2>Uma plataforma de aplicativo para um mundo de aplicativos</h2>
			<p>Estrategicamente, a abordagem openEHR permite um mercado de software <em> baseada em plataforma de e-saúde </ em>, no qual fornecedores e desenvolvedores de soluções de back-end e front-end através de informações padronizadas, modelos de conteúdo e terminologia padronizadas e interfaces de serviço padronizadas. Isto dá aos interessados de aquisição novas escolhas. Ela também permite que os desenvolvedores de aplicativos se concentrarem em seus aplicativos, e simplesmente conectem a um back-end confiável.</p>
			
			
			<h2>Se Envolvendo</h2>
			<p>Este site vai lhe dar informações sobre como tudo funciona, e como se tornar um <a href="/about/membership">membro do openEHR</a>. Você é um profissional de saúde? Você pode ajudar a criar e rever os <a href="http://www.openehr.org/ckm/" target="_blank">arquétipos</a>. Você é um designer de mensagens? Você pode querer se envolver na construção de especificações de mensagens baseadas em templates, com base nos arquétipos. Você é um desenvolvedor de software? Você pode ajudar a construir a nova geração de ferramentas de RES. Se você é um pesquisador, você pode se envolver especificando como consultas openEHR, terminologias publicados e padrões como CDISC podem ser usados para melhorar a forma como estudos baseados em dados longitudinais são feitos. Talvez você queira obter ferramentas e soluções? Você vai encontrar <a href = "/entry_points/i_am_working_on/obtaining_solutions">diretórios de sistemas e fornecedores de aplicativos</a>, assim como <a href="/programs/software">componentes de código aberto</a>.</p>
		
		</div>
		
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>
