<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Aplicações';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<table class="TableBasic">
			<tbody>
			<tr>
				<th>Projeto</th>
				<th>Descrição</th>
				<th>Tecnologia</th>
				<th>Download</th>
			</tr>	
			<tr>
				<td>GastrOS</td>
				<td>GastrOS é uma aplicação de relatórios endoscópicos baseado em padrões abertos: openEHR e MST. A GUI utiliza Arquétipos/Templates. É parte de nossa pesquisa na Universidade de Auckland para investigar manutenção de software e interoperabilidade.</td>
				<td>C#, Microsoft .Net</td>
				<td><a href="http://gastros.codeplex.com/">GastrOS codeplex homepage</a></td>
			</tr>
			</tbody>
			</table>
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>
