<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Propriedade Intelectual e Licenças';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>Direitos autorais</h2>
			<p>Artefatos produzidos pelo Programa Clínico são protegidos pelos direitos autorais da Fundação openEHR. Isso determina que a Fundação será a proprietária dos 'direitos morais' dos artefatos, em nome de todos os colaboradores e para a segurança da comunidade de usuários.</p>
		
			
			<h2>Atribuição</h2>
			<p>Os contribuintes de um artefato são reconhecidos em uma seção nomeada "trabalho dos colaboradores".</p>

			<h2>Licenciamento</h2>
			<p>Uma licença padrão é anexada em cada artefato produzido no âmbito do Programa Clínico.</p>
			<p>As atribuições da licença são as seguintes:</p>
			
			<table class="TableBasic">
			<tbody>
			<tr>
				<th> Tipo do artefato</th>
				<th> Licença para uso</th>
				<th> Comentários</th>
			</tr>
			<tr>
				<td> <b>Arquétipos, modelos</b> </td>
				<td> <img src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png" style="border: 1px solid black" /> <br/>
										PRODUZIDO pela <a href="http://www.openEHR.org">Fundação openEHR</a>está licenciado sob<a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution-ShareAlike 3.0 Unported License</a>. </td>
				<td> O uso da licença CC-BY-SA permite o compartilhamento com o público, republicação e bifurcação das especificações. Isso funciona como uma salvaguarda contra a subversão da Fundação openEHR prevenindo a comunidade e usando as especificações de uma forma justa. <br/>
				</td>
			</tr>
			<tr>
				<td> <b>Subconjunto de terminologia</b> </td>
				<td> <img src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png" style="border: 1px solid black" /> <br/>
										PRODUZIDO pela <a href="http://www.openEHR.org">Fundação openEHR</a>está licenciado sob<a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution-ShareAlike 3.0 Unported License</a>. </td>
				<td> <br/><br/><br/>idem <br/><br/><br/></td>
			</tr>
			<tr>
				<td> <b>Documentação</b> </td>
				<td> <img src="http://i.creativecommons.org/l/by/3.0/88x31.png" style="border: 1px solid black" /><br/>PRODUZIDO pela <a href="http://www.openEHR.org">Fundação openEHR</a> está licenciado sob <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 Unported License</a>.</td>
				<td> <br/><br/>A documentação é destinada a ampla divulgação. Melhorias, traduções e re-uso são incentivados <br/><br/><br/> </td>
			</tr>
			</tbody>
			</table>
		
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>
