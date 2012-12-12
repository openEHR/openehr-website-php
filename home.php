<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

	<title>Welcome to openEHR - Homepage</title>
	<?php include 'panel/headpanelhome.php' ?>
	
</head>


<body>

<div id="MainFrame">
	
	<div id="TopPanel">
		<?php include 'panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu">
	
		<div class="nav">
			<?php include 'menu/topmenu.php' ?>
		</div>
		
	</div> 

	<div id="MainArea" style="height:690px">

		<div id="WhatFrame">
			<img src="gui/WhatFrame.png" usemap="#what"/>
			<map name="what">
			  <area shape="rect" coords="0,0,220,150" href="whatisopenehr" alt="What is openEHR" />
			</map> 
			<div id="TextFrame">
				<h1>What is<br/>openEHR?</h1>
				<p>openEHR is about enabling ICT to effectively support all aspects of healthcare.
				<br/><a href="whatisopenehr" style="line-height:200%;">Learn more</a></p>
			</div>
		</div>
		
		<div id="WhoFrame">
			<img src="gui/WhoFrame.png" usemap="#who"/>
			<map name="who">
			  <area shape="rect" coords="0,0,220,150" href="whoisusingopenehr" alt="Who is using openEHR" />
			</map> 
			<div id="TextFrame">
				<h1>Who is using<br/>openEHR?</h1>
				<p>Companies, governments, universities, research centres all around the world.
				<br/><a href="whoisusingopenehr" style="line-height:200%;">Learn more</a></p>
			</div>
		</div>

		<div id="AboutFrame">
			<img src="gui/AboutFrame.png" usemap="#about"/>
			<map name="about">
			  <area shape="rect" coords="0,0,220,150" href="about/foundation" alt="About openEHR Foundation" />
			</map> 
			<div id="TextFrame">
				<h1>About openEHR<br/>Foundation</h1>
				<p>openEHR Foundation is open for everybody to join and participate.
				<br/><a href="about/foundation"  style="line-height:200%;">Learn more</a></p>
			</div>
		</div>
			
		<div id="JoinFrame">
			<img src="gui/JoinFrame.png" usemap="#join"/>
			<map name="join">
			  <area shape="rect" coords="0,0,220,150" href="openehrprograms" alt="openEHR Programs" />
			</map> 
			<div id="TextFrame">
				<h1>The openEHR<br/>Programs</h1>
				<p>4 openEHR Programs: Specification, Clinical Models, Software, Localisation 
				<br/><a href="openehrprograms" style="line-height:200%;">Learn more</a></p>
			</div> 
		</div>
		
		<div id="HomeFrame2">
			<div id="TwitterFrame">
				<h2>openEHR News</h2>
				<div style="position: absolute; top:30px; padding-left:1px; padding-right:10px; word-wrap:break-word; ">
					<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
					<script>
					new TWTR.Widget({
					 version: 2,
					 type: 'search',
					 search: 'openEHR AND -openehrCKM',
					 lang: 'en',
					 interval: 30000,
					 title: '',
					 subject: '',
					 width: 190,
					 height: 250,
					 theme: {
					   shell: {
						 background: 'none',
						 color: '#3386AE'
					   },
					   tweets: {
						 background: 'none',
						 color: '#000000',
						 links: '#3386AE'
					   }
					 },
					 features: {
					   scrollbar: false,
					   loop: true,
					   live: true,
					   behavior: 'default'
					 }
					}).render().start();
					</script>
				</div>
			</div>
			
			
			<div id="Twitter2Frame">
				<h2>Clinical Model News</h2>
				<div style="position: absolute; top:30px; padding-left:1px; padding-right:10px; word-wrap:break-word; ">
					<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
					<script>
					new TWTR.Widget({
					  version: 2,
					  type: 'search',
					  search: 'from:@clinicalmodels OR from:@openEHRCKM',
					  interval: 30000,
					  title: '',
					  subject: '',
					  width: 190,
					  height: 250,
					  theme: {
						shell: {
						  background: 'none',
						  color: '#3386AE'
						},
						tweets: {
						  background: 'none',
						  color: '#000000',
						  links: '#3386AE'
						}
					  },
					  features: {
						scrollbar: false,
						loop: true,
						live: true,
						behavior: 'default'
					  }
					}).render().start();
					</script>
				</div>
			</div>
			

			<div id="NewsFrame">
				<div id="LinksFrame">
					<h2>News & Events</h2>
					<a href="news_events/openehrannouncements/announcement14">openEHR Transition Update</a>
					<h6>12. December 2012</h6>
					<br/>
					<a href="news_events/openehrevents/events21">openEHR Foundation Meeting</a>
					<h6>10.-12. September 2012</h6>
					<br/>
					<a href="news_events/openehrevents/events20">HL7 Australia Seminar on Future HL7 Standards</a>
					<h6>2. July 2012</h6>
					<br/>
					<a href="news_events/openehrevents/events19">openEHR @ HINZ</a>
					<h6>21.-22. June 2012</h6>
					<br/>
					<a href="news_events/openehrnews/news20">Brazil re-affirms commitement to openEHR</a>
					<h6>16. May 2012</h6>
				</div>	
			</div>
			
			
			<div id="ReleasesFrame">
				<div id="LinksFrame">
					<h2>Releases</h2>
					<a href="news_events/openehrreleases/release20">ADL - syntax highlight for Notepad++</a>
					<h6>13. August 2012</h6>
					<br/>
					<a href="news_events/openehrreleases/release19">ADL 1.5 Workbench - beta release 8</a>
					<h6>2. August 2012</h6>
					<br/>
					<a href="news_events/openehrreleases/release18">ADL 1.5 Workbench - beta release 4</a>
					<h6>9. September 2011</h6>
					<br/>
					<a href="news_events/openehrreleases/release17">First open source release of openEHR.NET</a>
					<h6>4. March 2011</h6>
					<br/>
					<a href="news_events/openehrreleases/release16">ADL 1.5 Workbench - beta release 3</a>
					<h6>14. January 2011</h6>
				</div>
			</div>	 
		</div>
	</div>

	<div id="BottomMenu">
		<?php include 'menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
		<?php include 'panel/bottompanel.php' ?>
	</div>

</div>

<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>