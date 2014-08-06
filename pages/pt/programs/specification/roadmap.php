<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Roteiro';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>Tendo estabelecido um sólido conjunto de especificações de referência, a Fundação openEHR e comunidade pretende construir sobre estes, a fim de fornecer mais valor direto para os implementadores, médicos e usuários de sistemas de informação de saúde. O envolvimento da comunidade e fornecedores é incentivada em todas as atividades. </p>
			<p>A seguir são descritos os objetivos atuais.</p>
			
			
			<h2>Especificações novas e aprimoradas</h2>
			
			<h3>Template Model</h3>
			<p>Modelos openEHR já está em uso no NHS por mais de um ano, proporcionando valiosa experiência de implementação. Isso será usado para informar o desenvolvimento de especificações abertas e esquemas para os modelos, incluindo adições à linguagem ADL suporte a especialização da linguagem e de templates (formulários); o modelo de definição de templates (TDM; um modelo de objeto de definições de templates) e um Esquema para o Modelo de Definição de Templates (.xsd da TDM).</p>

			<h3>Integração openEHR e Snomed CT</h3>
			<p>Trabalho permanente ocorre no openEHR e dentro da  Conect Health do  NHS do Reino Unido  a fim de definir abordagens técnicas que vincule arquétipos e modelos openEHR com SNOMED CT. Este trabalho destina-se a resolver uma série de desafios, incluindo como determinar o conjunto correto de atributos ao criar pontos de dados codificados em um arquétipo e como mapear uma expressão de código de pós-coordenada a uma série de pontos de dados em um arquétipo.</p>
			<p>O subconjunto de linguagem terminológica criada pela Ocean Informatics para o servidor de  terminologia está sendo oferecido a IHTSDO como base para uma linguagem aberta usada para definir subconjuntos dinâmicos. openEHR adotará o resultado desta colaboração com IHTSDO como subconjunto de terminologias, o que permitirá a criação de subconjuntos reutilizáveis de SNOMED CT e outras terminologias.</p>

			<h3>Interface Virtual do RES  (vEHR) e Serviço de RES</h3>
			<p>Várias definições de interface são disponibilizadas pela indústria, porém duas interfaces que contemplam o RES se destacam. A API vEHR é uma interface virtual que pode ser usado em um componente de middleware oferecendo uma interface de programação integrada (IDE) para serviços de back-end de uma aplicação clínica. Ele fornece acesso ao RES, demografia, arquétipos, templates, terminologia, consultas e contempla segurança de identidade.

</p>
			<p>O  Interface de Serviço de RES fornece uma interface de alta granularidade a um serviço de RES, permitindo o acesso a composições do RES  e outros objetos  de alto nível do RES, bem como a consulta.</p>

			<h3>Suporte a çinhas de cuidados</h3>
			<p>Com muitas especificações e bases instituídas e estáveis em openEHR, um novo trabalho irá se concentrar no apoio a linhas de cuidados distribuídos. Isto irá fornecer uma maneira padronizada de encontrar e fundir ordens distribuídas de medicamentos e status, bem como permitir a geração de um mapa de referências, admissões, descartes (dispensação) e outros eventos de transferência.</p>

			<h3>Consulta e recuperação de dados</h3>
			<p>Há uma crescente ênfase na consulta e recuperação de dados. openEHR foi projetado desde o início para garantir que os dados sejam pesquisáveis com base em um caminho de arquétipos. Caminho de arquétipos atua como identificadores confiáveis para valores de dados, além de fornecer suporte à implementação direta, por ser compatível com XPath. Uma nova linguagem de consulta, linguagem de consulta arquetipada (do inglés, Archetype Query Language - AQL) já foi <a title="Publications on Archetypes" href="../resources/publications">descrita</a> no Medinfo 2007 (sob o trabalho intitulado EQL) , e já está em uso extensivo em uma implementação openEHR. O desenvolvimento está previsto, a fim de adicionar a capacidade de consulta à base do subconjunto terminológico, de modo a oferecer suporte a consultas adequadas e inferenciais.
</p>


			<h2>Implementação</h2>
			
			<h3>Templates operacionais</h3>
			<p>Um template operacional openEHR é gerado através da avaliação de uma definição de templates junto com os arquétipos e terminologia que faz referência, para produzir uma única resultante 'template' que é o equivalente a um única e grande arquétipo. Isto é usado diretamente em tempo de execução em sistemas openEHR, além de ser o precursor para os formalismos de captura de dados (incluindo o uso de vários formalismos XML como XAML, XForms), e como a entrada do modelo de esquemas de dados (veja abaixo).</p>

			<h3>Modelo de Esquema de Dados (do inglês, Template Data Schema - TDS)</h3>
			<p>O conceito de Modelo de Esquema de Dados é novo no openEHR, e oferece uma capacidade muito melhor para a integração. A abordagem padrão para templates openEHR é expressá-los em um formalismo genérico, que tem um esquema XML genérico associado. No entanto, com uma simples transformação um TDS pode ser gerado para cada template. O esquema resultante é uma ligação chumbada (hard-wired) com o conteúdo dos templates e adaptado para transformação de dados XML e comunicação, por exemplo, como uma mensagem. Isso permite que as fontes de dados, tais como laboratórios de patologia possam gerar seu conteúdo de acordo com esquemas descrevendo diretamente seus tipos de resultados, sem ter que entender openEHR . A mesma lógica segue para qualquer tipo de conteúdo. A abordagem TDS é uma grande promessa para a integração, porque todos os dados que estão em conformidade com TDS .Xsd formato XML padrão é garantido porque pode ser convertido para o formato de conteúdo openEHR padrão. A capacidade de produzir TDSs a partir dos templates é efetivamente uma facilidade para geração por máquina de definições de mensagem, substituindo abordagens de definição de mensagem manuais anteriores.</p>

			<h3>Templates e esquemas para o ASTM Continuity of Care Record (CCR)&nbsp; and HL7 CCD</h3>
			<p>A definição de templates e esquemas será criado para o ASTM CCR, mostrando como este modelo é conveniente usado em sistemas openEHR.</p>
			<br/>
			<p>Veja também <a href="http://www.openehr.org/issues/browse/SPEC?report=com.atlassian.jira.plugin.system.project:roadmap-panel" target="_blank">Roteiro Jira</a>.</p>
		
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>
