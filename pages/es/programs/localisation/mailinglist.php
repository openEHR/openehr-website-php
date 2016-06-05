<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Listas de Correo';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>The openEHR mailing lists are sited at <a href="http://www.mailmanhost.com/" target="_blank">dot.list</a>, a mailing list hoster run by one of the developers of the mailman software.</p>
			
			<table class="TableBasic">
			<tbody>
			<tr>
				<th>List</th>
				<th>Name</th>
				<th>Description</th>
				<th>Access</th>
				<th>Moderated</th>
			</tr>
			<tr>
				<th>Localistion list</th>
				<td>openehr-localisation</td>
				<td>This list is for discussions about issues of templates, archetypes and model localisation.</td>
				<td>subscribe <br/>
				unsubscribe <br/>
				archive</td>
				<td>No</td>
			</tr>
			</tbody>
			</table>
	
			<p>Other mailing lists you can find <a href="/es/community/mailinglists">here</a>.</p>
	
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_footer.php');?>