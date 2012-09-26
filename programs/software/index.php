<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

	<title>openEHR - Software Program</title>
	<link rel="bookmark" href="http://www.openehr.org/programs/software" title="openEHR - Software Program">
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
			<?php include 'menu/softwaremenu.php' ?>
		</div>
		
		<div id="TextArea">
			
			<h1>Software Program</h1>
			<br/>
			<p>The openEHR software program aims to support software development based on, or related to, the openEHR specifications.</p>

			
			<h2>Current Activities</h2>
			<p>Most current openEHR related software projects are self-governed and self-funded by various organisations doing research or commercial services/product development. The <em>openEHR Software Program</em> is an arena for sharing experience and ideas between projects. Most such sharing is currently done via the <a href="mailinglists"> software focused mailing lists</a> and partly also the <a href="../specification/mailinglists">specification focused mailing lists</a>.</p>
			<p>The program also coordinates hosting of some software projects that have donated code to openEHR or previously have requested openEHR hosting. More outspoken rules for what is required to host a project under the openEHR "umbrella" and/or to "brand" it as an openEHR project is under discussion in the community. A suggestion is to reuse the project experiences from the Apache Foundation, <a href="http://www.apache.org/foundation/how-it-works.html#incubator"> including some incubation process</a> etc. (See also: <a href="iplicense">license preferences</a>.)</p>
			<p>The program strives to increase awareness of available openEHR implementations. A wiki page lists <a href="http://www.openehr.org/wiki/display/projects/">known openEHR-related software projects</a>. Other implementation related information can be found at the <a href="http://www.openehr.org/wiki/display/dev/">developer related wiki-pages</a></p>

			
			<h2>Potential future activities</h2>
			<p>The future direction of the software programme is always open for community discussion (primarily using the <a href="mailinglists">openehr-implementers mail list</a>). Some initial suggestions are:</p> 
			<ul>
				<li>Conformance and interoperability test tools - to be designed and developed together with the openEHR Specifications Programme.</li>
				<li>Clarification of procedures for openEHR hosting and "branding" of open software projects</li>
				<li>Start and maintain a list of "project suggestions" as a service to e.g. educational or commercial actors wanting to explore unfulfilled openEHR software needs.</li>
			</ul>
			
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