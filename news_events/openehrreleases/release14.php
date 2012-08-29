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

	<div id="MainArea" style="height:450px;">
	
		<div id="SideMenu">
		<?php $current = 3; include '../menu/newsmenu.php' ?>
		</div>
		
		<div id="TextArea">
			<h1>Releases</h1>
			<h2>ADL 1.5 Workbench - beta release 2</h2>
			<h6>28. September 2010 | from: Thomas Beale</h6>
			<br/>
			<p>A second beta of the ADL/AOM 1.5 Workbench has been released. The main
			feature added is support for regression testing of archetypes.
			A new SVN repository has been added <a href="http://www.openehr.org/svn/knowledge2/TRUNK/">here</a> that contains test archetypes as
			well as the object model schemas used to drive the ADL Workbench. Around 150
			test archetypes are available, each now with a test result tag included in the
			description meta-data, covering most pass/fail conditions defined in ADL 1.5.
			Other features include text searching for archetypes, and various compiler bug
			fixes.</p>
			<p class="par">Builds are available for:</p>
			<ul>
			<li>Windows XP/Vista/Windows 7</li>
			<li>Mac OS X 10.6</li>
			<li>Mac OS X 10.5</li>
			<li>Linux</li>
			</ul><p>
			<br/>
			<a href="http://www.openehr.org/svn/ref_impl_eiffel/TRUNK/apps/adl_workbench/doc/web/index.html ">Download page</a>;
			<a href="http://www.openehr.org/svn/ref_impl_eiffel/TRUNK/apps/adl_workbench/doc/web/release_notes.html ">Release notes</a>.</p>
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