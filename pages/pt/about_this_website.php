<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Sobre esse Sítio';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header_top.php');
?>

	<div id="MainArea">
	
		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>Esse novo sítio internet pretende ser mais representativo dos objeticoe e atividades da comunidade openEHR e particularmente sobre o que se está trabalhando na comunidade no mundo real. Não deve ser considerado como uma estrutura fixa, mas uma coisa viva. Nós estamos interessados em ter feedback de qualquer aspecto desse sítio. Nessa fase inicial  os elementos visuais e estilos são um rascunho e são bem-vindas quaisquer ideias para aprimorá-los.</p>
			<p>Observe que a abordagem técnica que nós adotamos nesse sítio é totalmente manual, isto é, ele está sendo construído utilizandp hand-built HTML, PHP, e Java-script. Isto dá mais liberdade do que usar uma ambiente controlado de um Sistema de Gerenciamento de Conteúdo. Não está fora de questão se utilizar no futuros um sistema para gerir automaticamente o conteúdo, mas a abordagem atual nos pareceu ser de mais facil manutenção no momento. O código desse  website é mantido no Github, e contribuidores podem participar da confecção desse sítio fornecendo material via Github.</p>
			
			
			<h2>Enviando feedback</h2>
			<p>Por favor envie feedback ou novas idéias de design ou relatar problemas e requisições de mundança <a href="https://openehr.atlassian.net/projects/WEB/issues" target="_blank">aqui</a>.</p>
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>
