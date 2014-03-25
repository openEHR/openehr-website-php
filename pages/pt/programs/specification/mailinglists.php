<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Listas de Discussão';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>The openEHR mailing lists are sited at <a href="http://www.mailmanhost.com/" target="_blank">dot.list</a>, a mailing list hoster run by one of the developers of the mailman software. </p>
			
			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT">List</th>
				<th class="TableMainT">Name</th>
				<th class="TableMainT">Description</th>
				<th class="TableMainT">Access</th>
				<th class="TableMainT">Moderated</th>
				<th class="TableMainT">Admins</th>
			</tr>
			<tr>
				<th class="TableMainT">Technical list</th>
				<td class="TableMainC">openehr-technical</td>
				<td class="TableMainC">This list is for technical discussions about any aspect of modelling, archetypes, software building relevant to the openEHR architecture and specifications.<br/>
				All reviews and discussions relating to new specifications and changes to existing specifications will be flagged on this list by the Specifications Program editorial committee.</td>
				<td class="TableMainC"><a href="http://lists.openehr.org/mailman/listinfo/openehr-technical_lists.openehr.org">subscribe<br/>
				unsubscribe</a><br/>
				<a href="mailto:openehr-technical@lists.openehr.org">post</a><br/>
				<a href="http://lists.openehr.org/pipermail/openehr-technical_lists.openehr.org/">archive</a></td>
				<td class="TableMainC">No</td>
				<td class="TableMainC"></td>
			</tr>
			<tr>
				<th class="TableMainT">ISO 13606 list</th>
				<td class="TableMainC">openehr-13606</td>
				<td class="TableMainC">This list is for discussions about the use of openEHR methods and technology for current and future revisions of the ISO 13606 standard.</td>
				<td class="TableMainC">
				<a href="http://lists.openehr.org/mailman/listinfo/openehr-13606_lists.openehr.org">subscribe<br/>
				unsubscribe</a><br/>
				<a href="mailto:openehr-13606@lists.openehr.org">post</a><br/>
				<a href="http://lists.openehr.org/pipermail/openehr-13606_lists.openehr.org/">archive</a></td>
				<td class="TableMainC">No</td>
				<td class="TableMainC"></td>
			</tr>
			</tbody>
			</table>
			
			<p>Other mailing lists you can find <a href="/community/mailinglists">here</a>.</p>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>