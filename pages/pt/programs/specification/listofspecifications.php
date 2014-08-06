<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Lista de Especificações';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>Visão geral</h2>
			<p>As tabelas a seguir definem resultados do Programa de Especificação.</p>
			
			
<h2>Núcleo</h2>
			<table class="TableMain">
			<tbody>
				<tr>
					<th class="TableMainT"> Componente</th>
					<th class="TableMainT"> Documentação da Especificação </th>
					<th class="TableMainT"> Descrição </th>
				</tr>
				<tr>
					<td class="TableMainC" colspan=3> <b>Requisitos</b> </td>
				</tr>
				<tr>
					<td class="TableMainC"> Padrões de conformidade </td>
					<td class="TableMainC"> Declaração de conformidade ISO 18308</td>
					<td class="TableMainC"> Documento descrevendo a conformidade de arquitetura openEHR pela ISO TS 18308, &quot;Requisitos da arquitetura de Registro Eletrônico de Saúde (EHR). </td>
				</tr>
				<tr>
					<td class="TableMainC" colspan=3> <b>Arquitetura</b> </td>
				</tr>
				<tr>
					<td class="TableMainC"> Arquitetura <br class="atl-forced-newline" /> </td>
					<td class="TableMainC"> Visão geral da arquitetura <br class="atl-forced-newline" /> </td>
					<td class="TableMainC"> O documento "Read me first" (Leia-me primeiro) em toda a arquitetura fornece um resumo dos modelos de referência, arquétipo e de serviços, e descreve a semântica global. </td>
				</tr>
				<tr>
					<td class="TableMainC"> Modelo de Referência</td>
					<td class="TableMainC"> EHR IM</td>
					<td class="TableMainC"> O modelo de informações dO Registro Eletrônico de Saúde (do inglês, Eletronic Health Record - EHR) openEHR. </td>
				</tr>
				<tr>
					<td class="TableMainC"> &nbsp;</td>
					<td class="TableMainC"> EHR Extract IM</td>
					<td class="TableMainC"> O modelo de informação do extrator de EHR, que é uma serialização do conteúdo de um EHR. </td>
				</tr>
				<tr>
					<td class="TableMainC"> &nbsp;</td>
					<td class="TableMainC"> Common IM </td>
					<td class="TableMainC"> Modelo de informação que contém conceitos comuns, incluindo a habilitação do arquétipo pela classe LOCATABLE, referências partidárias, auditorias e certificações, controle de alterações e os recursos de autoria. </td>
				</tr>
				<tr>
					<td class="TableMainC"> &nbsp;</td>
					<td class="TableMainC"> Data Structures IM </td>
					<td class="TableMainC"> Modelo de informação de estruturas de dados, incluindo um poderoso modelo de HISTORY e EVENT. </td>
				</tr>
				<tr>
					<td class="TableMainC"> &nbsp;</td>
					<td class="TableMainC"> Data Types IM </td>
					<td class="TableMainC"> Modelo de informação dos tipos de dados (datatypes), incluindo quantidades, data/hora, texto simples e codificado, especificações de tempo, multimídia e URIs. </td>
				</tr>
				<tr>
					<td class="TableMainC"> &nbsp;</td>
					<td class="TableMainC"> Support IM </td>
					<td class="TableMainC"> Modelo de suporte que define identificadores, tipos assumidos e especificação de interfaces terminológicas utilizadas no resto das especificações. </td>
				</tr>
				<tr>
					<td class="TableMainC"> Archetype Model  </td>
					<td class="TableMainC"> ADL 1.4  </td>
					<td class="TableMainC"> O modelo de arquétipo é uma abstração da especificação de sintaxe da linguagem de arquétipos edição 1.4 (usado na ISO 13606-2). </td>
				</tr>
				<tr>
					<td class="TableMainC"> &nbsp;</td>
					<td class="TableMainC"> AOM 1.4 </td>
					<td class="TableMainC"> Modelo de objetos dos arquétipos correspondentes a ADL 1.4. </td>
				</tr>
				<tr>
					<td class="TableMainC"> &nbsp;</td>
					<td class="TableMainC"> ADL 1.5 </td>
					<td class="TableMainC"> ADL 1.5 rascunho: ADL agora inclui seção destacada na especialização, muitos exemplos novos, descrições melhoradas e correções de erros. </td>
				</tr>
				<tr>
					<td class="TableMainC"> &nbsp;</td>
					<td class="TableMainC"> AOM 1.5 </td>
					<td class="TableMainC"> AOM 1.5 rascunho - a descrição AOM agora inclui identificadores únicos e condições formalmente testáveis e que permitem validação (adequado para execução em compiladores), tipos primitivos revisados, seção de ontologia melhorada e modelo de restrição estendido para representar arquétipos diferenciais. </td>
				</tr>
				<tr>
					<td class="TableMainC"> &nbsp;</td>
					<td class="TableMainC"> Template model </td>
					<td class="TableMainC"> Modelos de objetos de templates. </td>
				</tr>
				<tr>
					<td class="TableMainC"> Service Model  </td>
					<td class="TableMainC"> Serviços EHR, etc  </td>
					<td class="TableMainC"> &nbsp;</td>
				</tr>
				<tr>
					<td class="TableMainC"> Terminology </td>
					<td class="TableMainC"> Vocabulário openEHR  </td>
					<td class="TableMainC"> Documentação formal da terminológia openEHR, que é um conjunto de vocabulários e conjuntos de códigos utilizados pelos modelos de referência e arquétipos. </td>
				</tr>
				<tr>
					<td class="TableMainC"> Querying  </td>
					<td class="TableMainC"> Archetype Query Language, a-path  </td>
					<td class="TableMainC"> Linguagem de consulta arquetipada.</td>
				</tr>
				<tr>
					<td class="TableMainC"> Guidelines and&nbsp; Decision Support </td>
					<td class="TableMainC"> Guideline Definition Language (GDL) </td>
					<td class="TableMainC"> A linguagem para expressar diretrizes computáveis ​​para uso com componentes de apoio à decisão.</td>
				</tr>
				</tbody>
			</table>

			<br />
			
			
			<h2>Facilitadores</h2>
			<table class="TableMain">
			<tbody>
				<tr>
					<th class="TableMainT"> Componentes  </th>
					<th class="TableMainT"> Documentação da especificação  </th>
					<th class="TableMainT"> Descrição  </th>
				</tr>
				<tr>
					<td class="TableMainC" colspan=3> <b>Implementação</b>  </td>
				</tr>
				<tr>
					<td class="TableMainC"> XML  </td>
					<td class="TableMainC"> XML development guide  </td>
					<td class="TableMainC"> Guia de desenvolvimento XML</td>
				</tr>
				<tr>
					<td class="TableMainC"> &nbsp;</td>
					<td class="TableMainC"> TDS (XSD) specification </td>
					<td class="TableMainC"> Especificação XSD</td>
				</tr>
				<tr>
					<td class="TableMainC"> Java </td>
					<td class="TableMainC"> Java development guide  </td>
					<td class="TableMainC"> Guia para implementação openEHR em Java.</td>
				</tr>
				<tr>
					<td class="TableMainC"> &nbsp;</td>
					<td class="TableMainC"> TDO specification </td>
					<td class="TableMainC"> Especificação TDO</td>
				</tr>
				<tr>
					<td class="TableMainC"> &nbsp;</td>
					<td class="TableMainC"> Lightweight JSON specification </td>
					<td class="TableMainC"> Especificação JSON compacta</td>
				</tr>
				<tr>
					<td class="TableMainC"> .Net  </td>
					<td class="TableMainC"> .Net development guide  </td>
					<td class="TableMainC"> GUia de desenvolvimento .Net</td>
				</tr>
				<tr>
					<td class="TableMainC"> &nbsp;</td>
					<td class="TableMainC"> TDO specification </td>
					<td class="TableMainC"> Especificação TDO</td>
				</tr>
				<tr>
					<td class="TableMainC"> Form languages  </td>
					<td class="TableMainC"> Form generation specification  </td>
					<td class="TableMainC"> Especificação para geração de formulários</td>
				</tr>
				<tr>
					<td class="TableMainC"> &nbsp;</td>
					<td class="TableMainC"> User interface specifications  </td>
					<td class="TableMainC"> Especificação de interface de usuário</td>
				</tr>
				<tr>
					<td class="TableMainC" colspan=3> <b>Educação</b>  </td>
				</tr>
				<tr>
					<td class="TableMainC"> Software Development </td>
					<td class="TableMainC"> TBD  </td>
					<td class="TableMainC"> &nbsp;</td>
				</tr>
				<tr>
					<td class="TableMainC" colspan=3> <b>Interface padrão</b>  </td>
				</tr>
				<tr>
					<td class="TableMainC"> ISO 13606  </td>
					<td class="TableMainC"> standardised mapping / converged model  </td>
					<td class="TableMainC"> Mapeamento padronizado / modelo convergente</td>
				</tr>
				<tr>
					<td class="TableMainC"> HL7v2  </td>
					<td class="TableMainC"> Standard openEHR template library for message interfacing  </td>
					<td class="TableMainC"> Biblioteca de modelos openEHR padrão para interface de mensagem</td>
				</tr>
				<tr>
					<td class="TableMainC"> HL7 CDA  </td>
					<td class="TableMainC"> Transformationalgorithms  </td>
					<td class="TableMainC"> Algoritmos de transformação</td>
				</tr>
				<tr>
					<td class="TableMainC"> ASTM CCR  </td>
					<td class="TableMainC"> Standard archetype / template expression.  </td>
					<td class="TableMainC"> Expressão padrão para arquétipos/templates.</td>
				</tr>
			</tbody>
			</table>
		
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>
