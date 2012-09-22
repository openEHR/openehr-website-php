<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title>openEHR - Releases</title>
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
		<?php $current = 3; include 'menu/newsmenu.php' ?>
		</div>
		
		<div id="TextArea">
			
			<h1>Releases</h1>
			<br/>
			<a href="openehrnews/news21">ADL - syntax highlight for Notepad++</a>
			<h6>13. August 2012</h6>
			<p>ADL syntax highlight for Notepad++ was developed by Armando Prieto from Venezuela.
			Find more information about ADL Text Editors on Wiki.</p>
			<br/>
			<a href="openehrreleases/release19">ADL 1.5 Workbench - beta release 8</a>
			<h6>2. August 2012</h6>
			<p>A new beta release of the ADL 1.5 Workbench is now available here. Release includes a complete makeover of the user interface, with numerous usability improvements,
			plus a number of compiler corrections.</p>
			<br/>
			<a href="openehrreleases/release18">ADL 1.5 Workbench - beta release 4</a>
			<h6>9. September 2011</h6>
			<p>A new beta release of the ADL 1.5 Workbench is now available here. Quite a lot of new features have been added, as described in the release notes. Please note that this release only includes a Windows build; Linux and Mac builds will follow in the next couple of weeks.</p>
			<br/>
			<a href="openehrreleases/release17">First open source release of openEHR.NET</a>
			<h6>4. March 2011</h6>
			<p>The first release of openEHR.NET is available here. openEHR.NET is a C# implementation of the openEHR Reference Model (RM) and Archetype Model (AM) specifications (Release 1.0.1), allowing developers to build openEHR applications by composing RM objects, validate against AM objects and serialise to/from XML.</p>
			<br/>
			<a href="openehrreleases/release16">ADL 1.5 Workbench - beta release 3</a>
			<h6>14. January 2011</h6>
			<p>The latest beta of the ADL 1.5 Workbench for Windows, Mac and Linux can now be downloaded from the help page. It includes significant UI improvements, and an implementation of annotations as recently discussed on the lists.</p>
			<br/>
			<a href="openehrreleases/release15">Achetype Editor 2.2 beta release</a>
			<h6>21. December 2010</h6>
			<p>A new beta release of the Archetype Editor is now available here. Bug fixes and enhancements are described in the release notes. Issues can be reported on the Problem Report tracker here.</p>
			<br/>
			<a href="openehrreleases/release14">ADL 1.5 Workbench - beta release 2</a>
			<h6>28. September 2010</h6>
			<p>A second beta of the ADL/AOM 1.5 Workbench has been released. The main feature added is support for regression testing of archetypes. A new SVN repository has been added that contains test archetypes as well as the object model schemas used to drive the ADL Workbench.</p>
			<br/>
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