<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title>openEHR - Site Map</title>
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
		<?php include 'menu/sitepoliciesmenu.php' ?>
		</div>
		
		<div id="TextArea">
			
			<h1>Site Map</h1>
			
			<h2>Site</h2>
			<ul>
				<li><a href="http://www.openehr.org/new-ws/site/home">Home</a></li>
				<li><a href="http://www.openehr.org/new-ws/site/whatisopenehr">What is openEHR?</a></li>
				<li><a href="http://www.openehr.org/new-ws/site/whoisusingopenehr">Who is using openEHR?</a></li>
				<li><a href="http://www.openehr.org/new-ws/site/aboutthiswebsite">About This Website</a></li>
				<li><a href="http://www.openehr.org/home.html">Old Website</a></li>
				<li><a href="mailto:webmaster@openehr.org">Contact Webmaster</a></li>
			</ul>
			
			<h2>Programs</h2>
				<br/>
				<?php include '../programs/specification/menu/specificationsmenu.php' ?>
				<br/>
				<?php include '../programs/clinicalmodels/menu/modelsmenu.php' ?>
				<br/>
				<?php include '../programs/software/menu/softwaremenu.php' ?>
				<br/>
				<?php include '../programs/localisation/menu/localisationmenu.php' ?>
				<br/>
				
			<h2>Entry Points</h2>
				<br/>
				<?php include '../entry_points/getting_started/menu/guide.php' ?>
				<br/>
				<?php include '../entry_points//i_am_working_on/menu/activities.php' ?>
				<br/>
				
			<h2>Downloads</h2>
				<ul>
					<li><a href="http://www.openehr.org/new-ws/site/downloads/modellingtools">Modelling Tools</a></li>
					<li><a href="http://www.openehr.org/new-ws/site/downloads/applicationbuilding">Application Building</a></li>
					<li><a href="http://www.openehr.org/new-ws/site/downloads/ehrcomponents">EHR Components</a></li>
				</ul>
			
			<h2>News & Events</h2>
				<ul>
					<li><a href="http://www.openehr.org/new-ws/site/news_events/news">News</a></li>
					<li><a href="http://www.openehr.org/new-ws/site/news_events/events">Events</a></li>
					<li><a href="http://www.openehr.org/new-ws/site/news_events/releases">Releases</a></li>
					<li><a href="http://www.openehr.org/new-ws/site/news_events/announcements">Announcements</a></li>
				</ul>
				
			<h2>About Us</h2>	
				<ul>
					<li><a href="http://www.openehr.org/new-ws/site/about/foundation">Foundation</a></li>
					<li><a href="http://www.openehr.org/new-ws/site/about/membership">Membership</a></li>
					<li><a href="http://www.openehr.org/new-ws/site/about/govstructure">Governance Structure</a></li>
					<li><a href="http://www.openehr.org/new-ws/site/about/peopleingovernance">People in Governance</a></li>
					<li><a href="http://www.openehr.org/new-ws/site/about/ip">Intellectual Property</a></li>
					<li><a href="http://www.openehr.org/new-ws/site/about/logos">Logos</a></li>
					<li><a href="http://www.openehr.org/new-ws/site/about/contacts">Contacts</a></li>
				</ul>
			
			<h2>Specifications (Quick Links)</h2>
				<ul>
					<li><a href="http://www.openehr.org/new-ws/site/programs/specification/releasehistory/release102">Current Release</a></li>
					<li><a href="http://www.openehr.org/new-ws/site/programs/specification/currentbaseline">Development Baseline</a></li>
					<li><a href="http://www.openehr.org/issues/browse/SPECPR">Issue Tracker</a></li>
					<li><a href="http://www.openehr.org/releases/1.0.2/its/XML-schema/index.html">XML Schemas</a></li>
					<li><a href="http://www.openehr.org/svn/specification/TAGS/Release-1.0.1/publishing/architecture/computable/UML/uml_start_view.html">RM UML</a></li>
					<li><a href="http://www.openehr.org/svn/knowledge2/TRUNK/rm_schemas/">RM Schemas</a></li>
				</ul>
			
			<h2>Clinical Models (Quick Links)</h2>
				<ul>
					<li><a href="http://openehr.org/knowledge/">Model Repository</a></li>
					<li><a href="http://openehr.org/knowledge/#repositoryoverview">Archetypes Mindmap</a></li>
					<li><a href="http://openehr.org/knowledge/#userstatistics">User Statistics</a></li>
					<li><a href="http://www.openehr.org/wiki/display/spec/openEHR+Terminology">openEHR Terminology</a></li>
					<li><a href="http://www.openehr.org/svn/knowledge2/TRUNK/archetypes/">Test Archetypes</a></li>
					<li><a href="http://www.ihtsdo.org/fileadmin/user_upload/doc/tig/">SNOMED CT TIG</a></li>
				</ul>
				
			<h2>Resources (Learn More)</h2>
				<ul>
					<li><a href="http://www.openehr.org/new-ws/site/resources/learningcentre">Learning Centre</a></li>
					<li><a href="http://www.openehr.org/new-ws/site/resources/publications">Publications</a></li>
					<li><a href="https://github.com/openEHR">GitHub</a></li>
					<li><a href="http://www.openehr.org/wiki/display/resources/FAQs+-+Frequently+Asked+Questions">FAQs</a></li>
				</ul>
			
			<h2>Community (Follow Us)</h2>
				<ul>
					<li><a href="http://www.openehr.org/wiki">Wiki</a></li>
					<li><a href="http://www.openehr.org/new-ws/site/community/mailinglists">Mailing Lists</a></li>
					<li><a href="http://www.youtube.com/user/openehr?feature=results_main" target="_blank">YouTube</a></li>
					<li><a href="http://www.facebook.com/pages/openEHR/109178295780185?sk=info" target="_blank">Facebook</a></li>
					<li><a href="http://twitter.com/#!/openehr" target="_blank">Twitter</a></li>
					<li><a href="http://www.openehr.org/new-ws/site/community/rss">RSS</a></li>
				</ul>
		
			<h2>Using the Site (Policies)</h2>
				<ul>
					<li><a href="http://www.openehr.org/new-ws/site/site_policies/termsofuse">Terms of Use</a></li>
					<li><a href="http://www.openehr.org/new-ws/site/site_policies/editorialpolicy">Editorial Policy</a></li>
					<li><a href="http://www.openehr.org/new-ws/site/site_policies/privacypolicy">Privacy Policy</a></li>
					<li><a href="http://www.openehr.org/new-ws/site/site_policies/syndication">Syndication</a></li>
					<li><a href="http://www.openehr.org/new-ws/site/site_policies/feedback">Feedback</a></li>
					<li><a href="http://www.openehr.org/new-ws/site/site_policies/sitemap">Site Map</a></li>
				</ul>
		
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