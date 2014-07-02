<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'Fornecedores / Desenvolvedores';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>openEHR oferece muitas vantagens para sistemas de informação em saúde e para aplicativos de fornecedores. Por se tratar de uma plataforma computacional padronizada permite que muitos fornecedores evitem re-inventar seu próprio back-end para EHR, demografia, integração de dados e assim por diante, e em vez disso usem implementações de alta qualidade disponíveis. Todas as especificações de API e serviços já estão ou estarão em breve disponíveis publicamente.</p>

			<p>A principal fonte de eficiência no uso da plataforma openEHR é a capacidade de usar os arquétipos aprovados oficialmente em outros lugares, garantindo uma verdadeira interoperabilidade semântica de registros de saúde. Isso pode ser considerado uma forma cooperativa de configuração clínica. Embora essa configuração seja uma fonte de renda para os fornecedores no ambiente atual, é um desperdício para o sistema de saúde como um todo e a raiz de muitos dos problemas de integração que estamos experimentando atualmente.</p>
			<p style="text-align:center;"><a href="/files/getting_involved/vendors_developers.png"><img src="/files/getting_involved/vendors_developers.png" alt="openEHR Ecossistema - Fornecedores / Desenvolvedores" title="openEHR Ecossistema - Fornecedores / Desenvolvedores" width="480px" style="border: solid 1px #CCCCCC;"></a></p>	
			
			
			<h2>O que openEHR pode fazer por você</h2>
			
			<h3>Fornecedores de aplicações</h3>
			<p>Fornecedores de aplicações, tais como sistemas clínicos para a prática geral, departamentos hospitalares, apoio à decisão e muitos outros podem usar a plataforma openEHR para toda a informação clínica e demográfica, ao invés de ter que fornecer sua própria implementação. A aplicação interage com a plataforma openEHR via virtual EHR (vEHR) API, Linguagem de Consulta Arquetipada (Archetype Query Language - AQL) e XML, independentemente de qual implementação é utilizada. Suporte a implementações maiores garantindo alta-performance, alto-volume de repositórios EHR.</p>
			<p>Os modelos openEHR podem ser efetivamente usado para construir a captura de dados, visualização e consulta dos formulários para uma aplicação. Os formulários podem ser gerados a partir do modelo openEHR usando uma ferramenta para construção de modelos, como por exemplo, o XFORM, .Net ou outros formatos. Isso garante que a semântica dos arquétipos serão preservadas através da pilha de aplicativos.</p>

			<h3>Fornecedores de Integração</h3>
			<p>Integração com outras fontes de dados é facilitada pelo uso dos modelos openEHR, que pode ser usado para acionar um mecanismo de integração que converte todos os tipos de fonte de dados e documentos em formato openEHR, onde o arquétipo pode ser tratado como parte de um prontuário centrado no paciente. Toda auditoria e sistema alimentadores de metadados (e.g. identificadores) são capturados na estrutura openEHR, garantindo que a associação com a fonte de dados sejam preservadas.</p>
			<p>Dados a partir de fontes federadas, podem ser geradas em vários formatos, incluindo openEHR, CEN EN13606, HL7 CDA rel2, PDF, e vários XML e HTML.</p>
			
			<h3>Fornecedores de sistema de Informação Hospitalar</h3>
			<p>Usando uma implementação da plataforma openEHR como o back-end de um grande sistema oferece muitas vantagens. Ao invés de ter que manter constantemente uma estrutura de banco de dados proprietária, usando o openEHR back-end as aplicações do sistema se torna muito mais fácil de gerenciar e evoluir. A integração com outros sistemas provavelmente será mais fácil através dos formatos padrões suportados pela plataforma, incluindo CEN EN13606, HL7 CDA, HL7v2.x e outros.</p>
			
			
			<h2>Como você pode participar</h2>
			<p>Você pode se tornar um Parceiro openEHR através da filiação organizacional, ou membros de sua equipe podem se tornar parte do openEHR como membros individuais. Saiba mais sobre<a href="/about/membership#industrypartner">associação</a>.</p>
			
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>
