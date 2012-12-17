<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

	<title>openEHR - Releases</title>
	<link rel="bookmark" href="http://www.openehr.org/news_events/releases/release13" title="openEHR - Releases">
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
			
			<h2>New ADL 1.5 Workbench - beta release</h2>
			<h6>11. August 2010 | from: Thomas Beale</h6>
			<br/>
			
			<p>A new beta of the ADL Workbench (AWB) has been published. This version of the
			tool has been greatly improved from previous versions and has many new features.
			It also implements most of the ADL / AOM 1.5 draft specifications, which
			completely replace the ADL and AOM 1.4 vintage. Note that the new specifications
			and tooling are backwardly compatible, so your existing archetypes are safe!
			Some of the new features of the tool:</p>
			<ul>
				<li>Improved validation, with code-based error messages matching ADL and AOM 1.5 <a href="/programs/specification/currentbaseline">draft&nbsp;specifications</a> (see bottom of page);</li>
				<li>Support for referencing from one archetype to another without slots;</li>
				<li>Support for ADL 1.5 templates, including slot-filling and exclusions;</li>
				<li>Separate explorers for archetypes and templates;</li>
				<li>Multiple RM schemas can be loaded and managed in the options dialog;</li>
				<li>Archetype files can now be arranged anywhere on the file-system; compiler uses RM and specialisation relationships to build directory in tool;</li>
				<li>Repositories are now defined / selected using profiles;</li>
				<li>Archetype search facility;</li>
				<li>An initial 13606 schema is available, allowing validation of EN 13606 archetypes.</li>
				<li>Test function changed to prevent any .adl file overwriting; instead, outputs files for viewing in diff tools.</li>
			</ul>
			<p>The <a href="/downloads/ADLworkbench/home">help pages</a> are completely revamped (you can download the tool from there as well). There are builds for Windows, MacOS X 10.5 and Linux.</p>
			<p>A heavily reworked set of test archetypes as well as the Reference Model schemas used to drive the tool (and other tools in the future) have been published in a <a href="/svn/knowledge2/TRUNK/">new SVN repository</a>, where we are starting to build up comprehensive examples of openEHR as well as EN13606 archetypes and templates.</p>
			<p>The new version of the Archetype Definition Language (ADL) and the Archetype Object Model (AOM) have been quite some time coming. They are are still in late draft form, and contributions via testing, tool use, specification review and archetype development is encouraged. See the <a href="/downloads/ADLworkbench/supportandcontributing">support page</a> for how to get involved. There are many details that require the help of implementers and the community in general.</p>
			<p>In the coming weeks and months, further release candidates will be published, containing the remaining ADL/AOM 1.5 features, in particular the XML OPT (operational template) generator. This is a key piece of openEHR (and open health computing) technology, which acts as the bridge between knowledge models and downstream computing artefacts including XML schemas and source code, opening the door to completely tool-generated messages, code and&nbsp; GUI components.</p>
			<p>Beyond the short to medium term, this tool and related resources will come under a joint programme being actively pursued by openEHR Foundation with <a href="http://www.ihtsdo.org">IHTSDO</a>. This will greatly facilitate the integration of tooling and standards in the knowledge and terminology area.</p>
			<p>Please direct all feedback as described in the <a href="/downloads/ADLworkbench/supportandcontributing">support page</a>.</p>
			
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