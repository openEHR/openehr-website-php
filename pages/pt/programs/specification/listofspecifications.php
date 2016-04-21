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
			<table class="TableBasic">
			<tbody>
				<tr>
					<th> Componente</th>
					<th> Documentação da Especificação </th>
					<th> Descrição </th>
				</tr>
				<tr>
					<td colspan=3> <b>Requisitos</b> </td>
				</tr>
				<tr>
					<td> Padrões de conformidade </td>
					<td> Declaração de conformidade ISO 18308</td>
					<td> Documento descrevendo a conformidade de arquitetura openEHR pela ISO TS 18308, &quot;Requisitos da arquitetura de Registro Eletrônico de Saúde (EHR). </td>
				</tr>
				<tr>
					<td colspan=3> <b>Arquitetura</b> </td>
				</tr>
				<tr>
					<td> Arquitetura <br class="atl-forced-newline" /> </td>
					<td> Visão geral da arquitetura <br class="atl-forced-newline" /> </td>
					<td> O documento "Read me first" (Leia-me primeiro) em toda a arquitetura fornece um resumo dos modelos de referência, arquétipo e de serviços, e descreve a semântica global. </td>
				</tr>
				<tr>
					<td> Modelo de Referência</td>
					<td> EHR IM</td>
					<td> O modelo de informações dO Registro Eletrônico de Saúde (do inglês, Eletronic Health Record - EHR) openEHR. </td>
				</tr>
				<tr>
					<td> &nbsp;</td>
					<td> EHR Extract IM</td>
					<td> O modelo de informação do extrator de EHR, que é uma serialização do conteúdo de um EHR. </td>
				</tr>
				<tr>
					<td> &nbsp;</td>
					<td> Common IM </td>
					<td> Modelo de informação que contém conceitos comuns, incluindo a habilitação do arquétipo pela classe LOCATABLE, referências partidárias, auditorias e certificações, controle de alterações e os recursos de autoria. </td>
				</tr>
				<tr>
					<td> &nbsp;</td>
					<td> Data Structures IM </td>
					<td> Modelo de informação de estruturas de dados, incluindo um poderoso modelo de HISTORY e EVENT. </td>
				</tr>
				<tr>
					<td> &nbsp;</td>
					<td> Data Types IM </td>
					<td> Modelo de informação dos tipos de dados (datatypes), incluindo quantidades, data/hora, texto simples e codificado, especificações de tempo, multimídia e URIs. </td>
				</tr>
				<tr>
					<td> &nbsp;</td>
					<td> Support IM </td>
					<td> Modelo de suporte que define identificadores, tipos assumidos e especificação de interfaces terminológicas utilizadas no resto das especificações. </td>
				</tr>
				<tr>
					<td> Archetype Model  </td>
					<td> ADL 1.4  </td>
					<td> O modelo de arquétipo é uma abstração da especificação de sintaxe da linguagem de arquétipos edição 1.4 (usado na ISO 13606-2). </td>
				</tr>
				<tr>
					<td> &nbsp;</td>
					<td> AOM 1.4 </td>
					<td> Modelo de objetos dos arquétipos correspondentes a ADL 1.4. </td>
				</tr>
				<tr>
					<td> &nbsp;</td>
					<td> ADL 1.5 </td>
					<td> ADL 1.5 rascunho: ADL agora inclui seção destacada na especialização, muitos exemplos novos, descrições melhoradas e correções de erros. </td>
				</tr>
				<tr>
					<td> &nbsp;</td>
					<td> AOM 1.5 </td>
					<td> AOM 1.5 rascunho - a descrição AOM agora inclui identificadores únicos e condições formalmente testáveis e que permitem validação (adequado para execução em compiladores), tipos primitivos revisados, seção de ontologia melhorada e modelo de restrição estendido para representar arquétipos diferenciais. </td>
				</tr>
				<tr>
					<td> &nbsp;</td>
					<td> Template model </td>
					<td> Modelos de objetos de templates. </td>
				</tr>
				<tr>
					<td> Service Model  </td>
					<td> Serviços EHR, etc  </td>
					<td> &nbsp;</td>
				</tr>
				<tr>
					<td> Terminology </td>
					<td> Vocabulário openEHR  </td>
					<td> Documentação formal da terminológia openEHR, que é um conjunto de vocabulários e conjuntos de códigos utilizados pelos modelos de referência e arquétipos. </td>
				</tr>
				<tr>
					<td> Querying  </td>
					<td> Archetype Query Language, a-path  </td>
					<td> Linguagem de consulta arquetipada.</td>
				</tr>
				<tr>
					<td> Guidelines and&nbsp; Decision Support </td>
					<td> Guideline Definition Language (GDL) </td>
					<td> A linguagem para expressar diretrizes computáveis ​​para uso com componentes de apoio à decisão.</td>
				</tr>
				</tbody>
			</table>

			<br />
			
			
			<h2>Facilitadores</h2>
			<table class="TableMain">
			<tbody>
				<tr>
					<th> Componentes  </th>
					<th> Documentação da especificação  </th>
					<th> Descrição  </th>
				</tr>
				<tr>
					<td colspan=3> <b>Implementação</b>  </td>
				</tr>
				<tr>
					<td> XML  </td>
					<td> XML development guide  </td>
					<td> Guia de desenvolvimento XML</td>
				</tr>
				<tr>
					<td> &nbsp;</td>
					<td> TDS (XSD) specification </td>
					<td> Especificação XSD</td>
				</tr>
				<tr>
					<td> Java </td>
					<td> Java development guide  </td>
					<td> Guia para implementação openEHR em Java.</td>
				</tr>
				<tr>
					<td> &nbsp;</td>
					<td> TDO specification </td>
					<td> Especificação TDO</td>
				</tr>
				<tr>
					<td> &nbsp;</td>
					<td> Lightweight JSON specification </td>
					<td> Especificação JSON compacta</td>
				</tr>
				<tr>
					<td> .Net  </td>
					<td> .Net development guide  </td>
					<td> GUia de desenvolvimento .Net</td>
				</tr>
				<tr>
					<td> &nbsp;</td>
					<td> TDO specification </td>
					<td> Especificação TDO</td>
				</tr>
				<tr>
					<td> Form languages  </td>
					<td> Form generation specification  </td>
					<td> Especificação para geração de formulários</td>
				</tr>
				<tr>
					<td> &nbsp;</td>
					<td> User interface specifications  </td>
					<td> Especificação de interface de usuário</td>
				</tr>
				<tr>
					<td colspan=3> <b>Educação</b>  </td>
				</tr>
				<tr>
					<td> Software Development </td>
					<td> TBD  </td>
					<td> &nbsp;</td>
				</tr>
				<tr>
					<td colspan=3> <b>Interface padrão</b>  </td>
				</tr>
				<tr>
					<td> ISO 13606  </td>
					<td> standardised mapping / converged model  </td>
					<td> Mapeamento padronizado / modelo convergente</td>
				</tr>
				<tr>
					<td> HL7v2  </td>
					<td> Standard openEHR template library for message interfacing  </td>
					<td> Biblioteca de modelos openEHR padrão para interface de mensagem</td>
				</tr>
				<tr>
					<td> HL7 CDA  </td>
					<td> Transformationalgorithms  </td>
					<td> Algoritmos de transformação</td>
				</tr>
				<tr>
					<td> ASTM CCR  </td>
					<td> Standard archetype / template expression.  </td>
					<td> Expressão padrão para arquétipos/templates.</td>
				</tr>
			</tbody>
			</table>
		
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>
