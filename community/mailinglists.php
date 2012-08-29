<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title>openEHR - Mailing lists</title>
	<?php include '../panel/headpanel.php' ?>
</head>


<body>

<div id="MainFrame">
	
	<div id="TopPanel">
	<?php include '../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu" style="text-align:left">
		
		<div class="nav">
   		 <?php include '../menu/topmenu.php' ?>
		</div>
	</div> 

	<div id="MainArea">
		
		<div id="SideMenu">
		<?php include 'menu/communitymenu.php' ?>
		</div>
		
		<div id="TextArea">
		<h1>Mailing lists</h1>
		<p>The openEHR mailing lists are sited at <a href="http://www.mailmanhost.com/">dot.list</a>, a mailing list hoster run by one of the developers of the mailman software. The ICANN lists are also hosted here, so we think it's safe. All lists have the address of the form listname@lists.openehr.org. Only the openehr-announce list is moderated.</p>
		
		<h2>openEHR Foundation</h2>

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
		<th class="TableMainT">Announce list (read-only)</th>
		<td class="TableMainC">openehr-announce</p></td>
		<td class="TableMainC">This list is used to inform participants about key events, releases, changes in&nbsp;openEHR. openehr-announce is a <em>low-traffic list for
		announcements only</em>. All other material should be the subject of a message to one of the other lists, typically openehr-technical or
		openehr-clinical. Anyone interested in openEHR should subscribe to at least this list.</td>
		<td class="TableMainC">
		<a href="http://lists.openehr.org/mailman/listinfo/openehr-announce_lists.openehr.org">subscribe</a>
		<br>
		<a href="http://lists.openehr.org/mailman/listinfo/openehr-announce_lists.openehr.org">unsubscribe</a>
		<br>
		<a href="http://lists.openehr.org/pipermail/openehr-announce_lists.openehr.org/">archive</a>
		</td>
		<td class="TableMainC">Yes</td>
		<td class="TableMainC"></td>
		</tr>
		</tbody>
		</table>
		<br/>
		
		
		<h2>Specification Program</h2>

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
		<td class="TableMainC">
		This list is for technical discussions about any aspect of modelling,
		archetypes, software building relevant to the openEHR architecture and
		specifications.<br/>
		>All reviews and discussions relating to new specifications and changes to
		existing specifications will be flagged on this list by the Specifications
		Program editorial committee.</td>
		<td class="TableMainC">
		<a href="http://lists.openehr.org/mailman/listinfo/openehr-technical_lists.openehr.org">subscribe
		<br>
		unsubscribe</a> 
		<br>
		<a href="mailto:openehr-technical@lists.openehr.org">post</a>
		<br>
		<a href="http://lists.openehr.org/pipermail/openehr-technical_lists.openehr.org/">archive</a></td>
		<td class="TableMainC">No</td>
		<td class="TableMainC"></td>
		</tr>
		<tr>
		<th class="TableMainT">ISO 13606 list</th>
		<td class="TableMainC">openehr-13606</td>
		<td class="TableMainC">This list is for discussions about the use of openEHR methods and technology
		for current and future revisions of the ISO 13606 standard.</td>
		<td class="TableMainC">
		<a href="http://lists.openehr.org/mailman/listinfo/openehr-13606_lists.openehr.org">subscribe
		<br>
		unsubscribe</a> 
		<br>
		<a href="mailto:openehr-13606@lists.openehr.org">post</a>
		<br>
		<a href="http://lists.openehr.org/pipermail/openehr-13606_lists.openehr.org/">archive</a></td>
		<td class="TableMainC">No</td>
		<td class="TableMainC"></td>
		</tr>
		</tbody>
		</table>
		<br/>


		<h2>Clinical Models Program</h2>	

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
		<th class="TableMainT">Clinical list</th>
		<td class="TableMainC">openehr-clinical</td>
		<td class="TableMainC">This list is for discussions about any clinical aspect of the EHR. including
		clinical design of archetypes.</td>
		<td class="TableMainC">
		<a href="http://lists.openehr.org/mailman/listinfo/openehr-clinical_lists.openehr.org">subscribe
		<br>
		unsubscribe</a> 
		<br>
		<a href="mailto:openehr-clinical@lists.openehr.org">post</a>
		<br>
		<a href="http://lists.openehr.org/pipermail/openehr-clinical_lists.openehr.org/">archive</a>
		</td>
		<td class="TableMainC">No</td>
		<td class="TableMainC"></td>
		</tr>
		</tbody>
		</table>
		<br/>


		<h2>Localisation Program</h2>
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
		<th class="TableMainT">Localistion list</th>
		<td class="TableMainC">openehr-localisation</td>
		<td class="TableMainC">This list is for discussions about issues of templates, archetypes and model localisation.</td>
		<td class="TableMainC">
		subscribe <br>
		unsubscribe <br>
		archive</td>
		<td class="TableMainC">No</td>
		<td class="TableMainC"></td>
		</tr>
		</tbody>
		</table>
		<br/>

		
		<h2>Software Program</h2>
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
		<th class="TableMainT">Implementers<br> list</th>
		<td class="TableMainC">openehr-implementers</td>
		<td class="TableMainC">This list is for those implementing openEHR to discuss low-level
		technicalities in detail, including methods of programming, tools, schemas and
		so on.</td>
		<td class="TableMainC">
		<a href="http://lists.openehr.org/mailman/listinfo/openehr-implementers_lists.openehr.org">subscribe
		<br>
		unsubscribe</a> 
		<br>
		<a href="mailto:openehr-implementers@lists.openehr.org">post</a>
		<br>
		<a href="http://lists.openehr.org/pipermail/openehr-implementers_lists.openehr.org/">archive</a></td>
		<td class="TableMainC">No</td>
		<td class="TableMainC"></td>
		</tr>
		<tr>
		<th class="TableMainT">Eiffel implementation list</th>
		<td class="TableMainC">ref_impl_eiffel</td>
		<td class="TableMainC">This list is for those implementing openEHR in Eiffel and/or .Net, C, and other Eiffel-connectable technologies.</td>
		<td class="TableMainC">
		<a href="http://lists.openehr.org/mailman/listinfo/ref_impl_eiffel_lists.openehr.org">subscribe
		<br>
		unsubscribe</a> 
		<br>
		<a href="mailto:ref_impl_eiffel@lists.openehr.org">post</a>
		<br>
		<a href="http://lists.openehr.org/pipermail/ref_impl_eiffel_lists.openehr.org/">archive</a></td>
		<td class="TableMainC">No</td>
		<td class="TableMainC"></td>
		</tr>
		<tr>
		<th class="TableMainT">Java implementation list</th>
		<td class="TableMainC">ref_impl_java</td>
		<td class="TableMainC">This list is for those implementing openEHR in Java and Java-related
		technologies.</td>
		<td class="TableMainC">
		<a href="http://lists.openehr.org/mailman/listinfo/ref_impl_java_lists.openehr.org">subscribe
		<br>
		unsubscribe</a> 
		<br>
		<a href="mailto:ref_impl_java@lists.openehr.org">post</a>
		<br>
		<a href="http://lists.openehr.org/pipermail/ref_impl_java_lists.openehr.org/">archive</a></td>
		<td class="TableMainC">No</td>
		<td class="TableMainC"></td>
		</tr>
		</tbody>
		</table>
		
		</div>

	</div>

	<div id="BottomMenu">
	<?php include '../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
	<?php include '../panel/bottompanel.php' ?>
	</div>

</div>

<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>