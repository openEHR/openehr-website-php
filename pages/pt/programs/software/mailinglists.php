<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Listas de Discussão';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header.php');
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
				<th>Admins</th>
			</tr>
			<tr>
				<th>Implementers<br> list</th>
				<td>openehr-implementers</td>
				<td>This list is for those implementing openEHR to discuss low-level technicalities in detail, including methods of programming, tools, schemas and so on.</td>
				<td><a href="http://lists.openehr.org/mailman/listinfo/openehr-implementers_lists.openehr.org">subscribe<br/>
				unsubscribe</a><br/>
				<a href="mailto:openehr-implementers@lists.openehr.org">post</a><br/>
				<a href="http://lists.openehr.org/pipermail/openehr-implementers_lists.openehr.org/">archive</a></td>
				<td>No</td>
				<td></td>
			</tr>
			<tr>
				<th>Eiffel implementation list</th>
				<td>ref_impl_eiffel</td>
				<td>This list is for those implementing openEHR in Eiffel and/or .Net, C, and other Eiffel-connectable technologies.</td>
				<td>
				<a href="http://lists.openehr.org/mailman/listinfo/ref_impl_eiffel_lists.openehr.org">subscribe<br/>
				unsubscribe</a><br/>
				<a href="mailto:ref_impl_eiffel@lists.openehr.org">post</a><br/>
				<a href="http://lists.openehr.org/pipermail/ref_impl_eiffel_lists.openehr.org/">archive</a></td>
				<td>No</td>
				<td></td>
			</tr>
			<tr>
				<th>Java implementation list</th>
				<td>ref_impl_java</td>
				<td>This list is for those implementing openEHR in Java and Java-related technologies.</td>
				<td>
				<a href="http://lists.openehr.org/mailman/listinfo/ref_impl_java_lists.openehr.org">subscribe<br/>
				unsubscribe</a><br/>
				<a href="mailto:ref_impl_java@lists.openehr.org">post</a><br/>
				<a href="http://lists.openehr.org/pipermail/ref_impl_java_lists.openehr.org/">archive</a></td>
				<td>No</td>
				<td></td>
			</tr>
			</tbody>
			</table>
			
			<p>Other mailing lists you can find <a href="/community/mailinglists">here</a>.</p>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>