<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title>openEHR - Releases</title>
	<?php include '../../panel/headpanel.php' ?>
</head>


<body>

<div id="MainFrame">
	
	<div id="TopPanel">
	<?php include '../../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu" style="text-align:left">
		<div class="nav">
   		<?php include '../../menu/topmenu.php' ?>
		</div>
	</div> 

	<div id="MainArea">
	
		<div id="SideMenu">
		<?php $current = 3; include '../menu/newsmenu.php' ?>
		</div>
		
		<div id="TextArea">
			<h1>Releases</h1>
			<h2>ADL 1.5 Workbench - beta release 4</h2>
			<h6>9. September 2011 | from: Thomas Beale</h6>
			<br/>
			<p>A new beta release of the ADL 1.5 Workbench is now available <a href="http://www.openehr.org/svn/ref_impl_eiffel/BRANCHES/adl1.5/apps/adl_workbench/doc/web/index.html">here</a>.
			Quite a lot of new features have been added, as described in the <a href="http://www.openehr.org/svn/ref_impl_eiffel/BRANCHES/adl1.5/apps/adl_workbench/doc/web/release_notes.html">release notes</a>. 
			Please note that this release only includes a Windows build; Linux and Mac builds will follow in the next couple of weeks. (I would be interested to know if anyone uses the Linux build...). It's still a beta, and there are
			bugs and deficiencies - please take the trouble to report them <a href="http://www.openehr.org/issues/browse/AWBPR">here</a>.</p>
			
			<p>Some highlights:</p>
			<ul>
			<li>
			<a href="http://www.openehr.org/svn/ref_impl_eiffel/BRANCHES/adl1.5/apps/adl_workbench/doc/web/images/docking_side_by_side_definitions.png">New
			docking</a> UI, enabling multiple Archetype and Class Tools at once;</li>
			<li>
			<a href="http://www.openehr.org/svn/ref_impl_eiffel/BRANCHES/adl1.5/apps/adl_workbench/doc/web/images/rm_schema_tool.png">Reference
			Model browsing</a>, including any reference model, and supporting
			<a href="http://www.openehr.org/svn/ref_impl_eiffel/BRANCHES/adl1.5/apps/adl_workbench/doc/web/images/rm_schema_tool_duplex_classes.png">cross-model
			comparisons</a>;</li>
			<li>Greatly enhanced
			<a href="http://www.openehr.org/svn/ref_impl_eiffel/BRANCHES/adl1.5/apps/adl_workbench/doc/web/images/explorer_class_view.png">class
			viewer</a>, enabling not only exploration of the static type model, but also
			dynamic replacements at runtime, providing a way of understanding realistic data
			structures;</li>
			<li>
			<a href="http://www.openehr.org/svn/ref_impl_eiffel/BRANCHES/adl1.5/apps/adl_workbench/doc/web/images/address_bar.png">Search
			bar </a>allowing you to search for classes or archetypes;</li>
			<li>
			<a href="http://www.openehr.org/svn/ref_impl_eiffel/BRANCHES/adl1.5/apps/adl_workbench/doc/web/images/apgar_RM_icons.png">CKM
			icons</a> are now switchable in to replace the standard icons in the Archetype
			tool and Archetype Catalog;</li>
			<li>beta version of
			<a href="http://www.openehr.org/svn/ref_impl_eiffel/BRANCHES/adl1.5/apps/adl_workbench/doc/web/images/xml_serialisation.png">XML
			OPT output</a>, based on a rule set to control details of XML serialisation
			(it's not yet conformant with either ADL 1.4 or 1.5 XSD - but will be soon);
			</li>
			<li>the RM schema files now include proper package structures, and the
			<a href="http://www.openehr.org/svn/knowledge2/TRUNK/rm_schemas/openehr_ehr_102.bmm">openEHR
			RM schema</a> is now a faithful representation of the published specifications;
			</li>
			<li>the
			<a href="http://www.openehr.org/svn/knowledge2/TRUNK/rm_schemas/cen_EN13606_0.95.bmm">EN13606
			model schema</a> has been substantially improved, although it is still not
			complete. Any offers to help with this are welcome!</li>
			</ul>
			<br/>
			<p>As you might guess, these features presage more powerful functionality still.
			In the next weeks and months, the following will be added:</p>
			<ul>
			<li>archetype editing based on RM instance structure building and constraining
			(this is not meant to compete with other tools but rather allow people to use
			the AWB, which already does validation, to correct faults in archetypes, and
			also create new archetypes for RMs that currently have no proper editor);</li>
			<li>single-file ADL 1.5 templates;</li>
			<li>an ADL/AOM 1.5 XSD;</li>
			<li>the tool XML output will be improved to support ADL 1.4 and 1.5 level XSD;
			</li>
			<li>a JSON OPT generator;</li>
			<li>an example instance generator, with dADL, JSON and XML output;</li>
			<li>remaining ADL 1.5 semantics, including grouping and node-level
			documentation;</li>
			<li>extract RM documentation from PDFs into XML DITA, and link with the RM
			schemas, so that the entire documentation for any class is available in one
			place;</li>
			<li>connection to Seref Arikan's Bosphorous Java wizardry, enabling deployment
			as both a server and a web/cloud side tool for any kind of front end.</li>
			</ul>
			<br/>
			<p>The tool is in Eiffel (the most efficient language for me to develop in), and
			anyone who thinks they know OO properly, even if they have never seen Eiffel
			before, is welcome to join in. Peter Gummer, Seref and I can help them with
			Eiffel. (At some point, the whole thing can be fully replicated in Eclipse,
			Ruby, Python, etc, but for the moment, our feeling is that it is worth
			continuing for a while longer with a single ADL 1.5 compiler, and to develop a
			Java and other front-ends, while ADL 1.5 completely matures.)</p>
			
			<p>If there are people from national programmes and also vendors out there who
			find this work useful, I recommend they consider how to take advantage of the
			emerging new openEHR governance to help resource this kind of work better.</p>
			
			<br/>
			<a href="../releases">>> Back to Releases</a>
			
		</div>
			

	</div>
	<div id="BottomMenu">
	<?php include '../../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
	<?php include '../../panel/bottompanel.php' ?>	
	</div>

</div>
	
<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>