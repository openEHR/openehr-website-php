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
				<th>Clinical list</th>
				<td>openehr-clinical</td>
				<td>This list is for discussions about any clinical aspect of the EHR. including clinical design of archetypes.</td>
				<td>
				<a href="http://lists.openehr.org/mailman/listinfo/openehr-clinical_lists.openehr.org" target="_blank">subscribe<br/>
				unsubscribe</a><br/>
				<a href="mailto:openehr-clinical@lists.openehr.org">post</a><br/>
				<a href="http://lists.openehr.org/pipermail/openehr-clinical_lists.openehr.org/" target="_blank">archive</a></td>
				<td>No</td>
			</tr>
			</tbody>
			</table>
			
			<p>Other mailing lists you can find <a href="/es/community/mailinglists">here</a>.</p>
	
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_footer.php');?>