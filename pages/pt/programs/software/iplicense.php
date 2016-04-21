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
			<p>Artefatos produzidos pelo Programa de Software são protegidos pelos direitos autorais da Fundação openEHR. Isso determina que a Fundação será a proprietária dos 'direitos morais' dos artefatos, em nome de todos os colaboradores e para a segurança da comunidade de usuários.</p>
			
			<h2>Atribuição</h2>
			<p>Os contribuintes para um artefato são reconhecidos em uma seção no bloco de licença.</p>
			
			<table class="TableBasic">
			<tbody>
			<tr>
				<th> Tipo do artefato</th>
				<th> Licença para uso</th>
				<th> Comentários</th>
			</tr>
			<tr>
				<td> <b>Código Fonte</b> </td>
				<td> <img src="http://www.apache.org/images/feather-small.gif" style="border: 1px solid black; height:30px;" /><br/>
										<a href="http://www.apache.org/licenses/LICENSE-2.0">Licença Apache 2 </a></td>
				<td> <br/><br/>Artefatos computáveis ​​são licenciados, da mesma forma que software, usando a licença do Apache, que é amplamente aceito e amigável à indústria.
			<tr>
				<td> <b>Documentação</b> </td>
				<td> <img src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png" style="border: 1px solid black" /><br/>PRODUZIDO pela <a href="http://www.openEHR.org">Fundação openEHR</a> está licenciado sob
										<a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution-ShareAlike 3.0 Unported License</a>.</td>
				<td> <br/><br/>A documentação é destinada a ampla divulgação, e melhorias. Traduções e re-uso são incentivados.<br/><br/><br/> </td>
			</tr>
			</tbody>
			</table>
		
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>
