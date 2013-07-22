<?php
session_start();
$PageName = 'Welcome to openEHR';
//Connect to the database
require_once ('../con_real.php');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

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

	<div id="MainArea" style="height:740px">

		<div id="WhatFrame">
			<img src="gui/WhatFrame.png" usemap="#what"/>
			<map name="what">
			  <area shape="rect" coords="0,0,220,150" href="what_is_openehr" alt="What is openEHR" />
			</map> 
			<div id="TextFrame">
				<h1>What is<br/>openEHR?</h1>
				<p>openEHR is about enabling ICT to effectively support all aspects of healthcare.
				<br/><a href="what_is_openehr" style="line-height:200%;">Learn more</a></p>
			</div>
		</div>
		
		<div id="WhoFrame">
			<img src="gui/WhoFrame.png" usemap="#who"/>
			<map name="who">
			  <area shape="rect" coords="0,0,220,150" href="who_is_using_openehr" alt="Who is using openEHR" />
			</map> 
			<div id="TextFrame">
				<h1>Who is using<br/>openEHR?</h1>
				<p>Companies, governments, universities, research centres all around the world.
				<br/><a href="who_is_using_openehr" style="line-height:200%;">Learn more</a></p>
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
			
		<div id="ProgramsFrame">
			<img src="gui/ProgramsFrame.png" usemap="#join"/>
			<map name="join">
			  <area shape="rect" coords="0,0,220,150" href="openehr_programs" alt="openEHR Programs" />
			</map> 
			<div id="TextFrame">
				<h1>The openEHR<br/>Programs</h1>
				<p>4 openEHR Programs: Specification, Clinical Models, Software, Localisation 
				<br/><a href="openehr_programs" style="line-height:200%;">Learn more</a></p>
			</div> 
		</div>
		
		<div id="BigFrame">
		
			<div id="TwitterFrame">
				<div style="position: absolute; top:5px; padding-left:1px; padding-right:4px; word-wrap:break-word; ">
					<a class="twitter-timeline" href="https://twitter.com/search?q=%23openehr" 
						data-widget-id="347727645871570946" 
						data-tweet-limit="1" 
						width="190" 
						height="250" 
						lang="EN"
						data-chrome="nofooter noborders transparent noscrollbar">openEHR Talk</a>
					<script>
						!function(d,s,id) {var js, fjs=d.getElementsByTagName(s)[0], p=/^http:/.test(d.location)?'http':'https';
							if(!d.getElementById(id))
								{js=d.createElement(s);
									js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
									fjs.parentNode.insertBefore(js,fjs);
								}
						}
						(document,"script","twitter-wjs");
					</script>
				</div>
			</div>
			
			<div id="IndustryFrame">
				<div id="LinksFrame">
					<a href="news_events/industry_news" style="color:#023670;"><h2>Industry News</h2></a>
					<?php
						//Retrieve industry news
						$q = "SELECT item_id, title, DATE_FORMAT(date, '%M %d, %Y') AS dr FROM news_items WHERE category='industry_news' ORDER BY date DESC LIMIT 3";
						$r = @mysqli_query ($conx, $q);
						
						//Count the number of the rows
						$num = mysqli_num_rows($r);
						
						if ($num > 0) { //everything went ok, display results
							
							//Fetch and print all releases:
							while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
								echo '<a href="news_events/industry_news/index.php?id=' . $row['item_id'] . '">'.$row['title'].'</a><br/><h6>'
									. $row['dr'] . '</h6><br/>';
							}
							mysqli_free_result ($r); //Free up the resources
						}
						else { //if it didnt run ok
							echo '<p>There are currently no industry news.</p>';
						} 
					?>
					
					<a href="news_events/community_news" style="color:#023670;"><h2>Community News</h2></a>
					<?php
						//Retrieve community news
						$q = "SELECT item_id, title, DATE_FORMAT(date, '%M %d, %Y') AS dr FROM news_items WHERE category='community_news' ORDER BY date DESC LIMIT 2";
						$r = @mysqli_query ($conx, $q);
						
						//Count the number of the rows
						$num = mysqli_num_rows($r);
						
						if ($num > 0) { //everything went ok, display results
							
							//Fetch and print all releases:
							while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
								echo '<a href="news_events/community_news/index.php?id=' . $row['item_id'] . '">'.$row['title'].'</a><br/><h6>'
									. $row['dr'] . '</h6><br/>';
							}
							mysqli_free_result ($r); //Free up the resources
						}
						else { //if it didnt run ok
							echo '<p>There are currently no community news.</p>';
						} 
					?>
				</div>
			</div>
			
			<div id="NewsFrame">
				<div id="LinksFrame">
					<a href="news_events/foundation_news" style="color:#023670;"><h2>Foundation News</h2></a>
					<?php
						//Retrieve foundation news
						$q = "SELECT item_id, title, DATE_FORMAT(date, '%M %d, %Y') AS dr FROM news_items WHERE category='foundation_news' ORDER BY date DESC LIMIT 3";
						$r = @mysqli_query ($conx, $q);
						
						//Count the number of the rows
						$num = mysqli_num_rows($r);
						
						if ($num > 0) { //everything went ok, display results
							
							//Fetch and print all releases:
							while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
								echo '<a href="news_events/foundation_news/index.php?id=' . $row['item_id'] . '">'.$row['title'].'</a><br/><h6>'
									. $row['dr'] . '</h6><br/>';
							}
							mysqli_free_result ($r); //Free up the resources
						}
						else { //if it didnt run ok
							echo '<p>There are currently no foundation news.</p>';
						} 
					?>
					
					<a href="news_events/events" style="color:#023670;"><h2>Events</h2></a>
					<?php
						//Retrieve events
						$q = "SELECT item_id, title, coordinates FROM news_items WHERE category='events' ORDER BY item_id DESC LIMIT 2";
						$r = @mysqli_query ($conx, $q);
						
						//Count the number of the rows
						$num = mysqli_num_rows($r);
						
						if ($num > 0) { //everything went ok, display results
							
							//Fetch and print all releases:
							while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
								echo '<a href="news_events/events/index.php?id=' . $row['item_id'] . '">'.$row['title'].'</a><br/><h6>'
									. $row['coordinates'] . '</h6><br/>';
							}
							mysqli_free_result ($r); //Free up the resources
						}
						else { //if it didnt run ok
							echo '<p>There are currently no events.</p>';
						} 
					?>
				</div>	
			</div>
					
			<div id="ReleasesFrame">
				<div id="LinksFrame">
					<a href="news_events/releases" style="color:#023670;"><h2>Releases</h2></a>
					<?php
						//Retrieve releases
						$q = "SELECT item_id, title, DATE_FORMAT(date, '%M %d, %Y') AS dr FROM news_items WHERE category='releases' ORDER BY date DESC LIMIT 5";
						$r = @mysqli_query ($conx, $q);
						
						//Count the number of the rows
						$num = mysqli_num_rows($r);
						
						if ($num > 0) { //everything went ok, display results
							
							//Fetch and print all releases:
							while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
								echo '<a href="news_events/releases/index.php?id=' . $row['item_id'] . '">'.$row['title'].'</a><br/><h6>'
									. $row['dr'] . '</h6><br/>';
							}
							mysqli_free_result ($r); //Free up the resources
						}
						else { //if it didnt run ok
							echo '<p>There are currently no releases.</p>';
						} 
					?>
					
					<?php 
					mysqli_close($conx);
					?>
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

<?php include 'panel/scriptpanel.php' ?>

</body>

</html>