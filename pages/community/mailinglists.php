<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'Mailing Lists';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
		<h1><?php echo "$PageName";?></h1>
		<p>The openEHR mailing lists are sited at <a href="http://www.mailmanhost.com/" target="_blank">dot.list</a>, a mailing list hoster run by one of the developers of the mailman software. The ICANN lists are also hosted here, so we think it's safe. All lists have the address of the form listname@lists.openehr.org. Only the openehr-announce list is moderated.</p>
		
		<h2>openEHR Foundation</h2>

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
			<th>Announce list (read-only)</th>
			<td>openehr-announce</p></td>
			<td>This list is used to inform participants about key events, releases, changes in openEHR. openehr-announce is a <em>low-traffic list for announcements only</em>. All other material should be the subject of a message to one of the other lists, typically openehr-technical or openehr-clinical. Anyone interested in openEHR should subscribe to at least this list.</td>
			<td><a href="http://lists.openehr.org/mailman/listinfo/openehr-announce_lists.openehr.org">subscribe<br/>
			unsubscribe</a><br/>
			<a href="http://lists.openehr.org/pipermail/openehr-announce_lists.openehr.org/">archive</a>
			</td>
			<td>Yes</td>
			<td></td>
		</tr>
		</tbody>
		</table>
		
		
		<h2>Specification Program</h2>

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
			<th>Technical list</th>
			<td>openehr-technical</td>
			<td>This list is for technical discussions about any aspect of modelling, archetypes, software building relevant to the openEHR architecture and specifications.<br/>
			All reviews and discussions relating to new specifications and changes to existing specifications will be flagged on this list by the Specifications Program editorial committee.</td>
			<td><a href="http://lists.openehr.org/mailman/listinfo/openehr-technical_lists.openehr.org">subscribe<br/>
			unsubscribe</a><br/>
			<a href="mailto:openehr-technical@lists.openehr.org">post</a><br/>
			<a href="http://lists.openehr.org/pipermail/openehr-technical_lists.openehr.org/">archive</a></td>
			<td>No</td>
			<td></td>
		</tr>
		<tr>
		<th>ISO 13606 list</th>
			<td>openehr-13606</td>
			<td>This list is for discussions about the use of openEHR methods and technology for current and future revisions of the ISO 13606 standard.</td>
			<td><a href="http://lists.openehr.org/mailman/listinfo/openehr-13606_lists.openehr.org">subscribe<br/>
			unsubscribe</a><br/>
			<a href="mailto:openehr-13606@lists.openehr.org">post</a><br/>
			<a href="http://lists.openehr.org/pipermail/openehr-13606_lists.openehr.org/">archive</a></td>
			<td>No</td>
			<td></td>
		</tr>
		</tbody>
		</table>


		<h2>Clinical Models Program</h2>	

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
			<th>Clinical list</th>
			<td>openehr-clinical</td>
			<td>This list is for discussions about any clinical aspect of the EHR, including clinical design of archetypes.</td>
			<td><a href="http://lists.openehr.org/mailman/listinfo/openehr-clinical_lists.openehr.org">subscribe<br/>
			unsubscribe</a><br/>
			<a href="mailto:openehr-clinical@lists.openehr.org">post</a><br/>
			<a href="http://lists.openehr.org/pipermail/openehr-clinical_lists.openehr.org/">archive</a></td>
			<td>No</td>
			<td></td>
		</tr>
		</tbody>
		</table>


		<h2>Localisation Program</h2>
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
			<th>Localistion list</th>
			<td>openehr-localisation</td>
			<td>This list is for discussions about issues of templates, archetypes and model localisation.</td>
			<td>
			subscribe <br/>
			unsubscribe <br/>
			archive</td>
			<td>No</td>
			<td></td>
		</tr>
		</tbody>
		</table>

		
		<h2>Software Program</h2>
		
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
			<td><a href="http://lists.openehr.org/mailman/listinfo/ref_impl_eiffel_lists.openehr.org">subscribe<br/>
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
			<td><a href="http://lists.openehr.org/mailman/listinfo/ref_impl_java_lists.openehr.org">subscribe<br/>
			unsubscribe</a><br/>
			<a href="mailto:ref_impl_java@lists.openehr.org">post</a><br/>
			<a href="http://lists.openehr.org/pipermail/ref_impl_java_lists.openehr.org/">archive</a></td>
			<td>No</td>
			<td></td>
		</tr>
		</tbody>
		</table>
		
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>