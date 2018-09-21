<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Welcome to openEHR';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header_top.php');
?>
	<div id="MainArea">
		
		<div id="TopLeftFrame">
			<a href="what_is_openehr" class="button1 col1">What is openEHR?</a>
			<a href="who_is_using_openehr" class="button1 col1">Who is using openEHR?</a>
			<a href="https://openehr.atlassian.net/wiki/questions" class="button1 col1" target="_blank">Questions and Answers</a>
			<a href="/programs/specification/workingbaseline" class="button3 col2">Specifications</a>
			<a href="/releases/trunk/UML/" class="button4 col2" target="_blank">UML</a>
			<a href="/releases/trunk/its/XML-schema/" class="button4 col2" target="_blank">XSD</a>
			<a href="/programs/clinicalmodels" class="button3 col3">Clinical Models</a>
			<a href="/ckm/" class="button4 col3" target="_blank">CKM</a>
			<a href="https://github.com/openEHR/CKM-mirror" class="button4 col3" target="_blank">Git</a>
			<a href="/programs/software" class="button2 col4">Software</a>
			<a href="https://github.com/openEHR" class="button4 col4" target="_blank">Git</a>
		</div>
		
		<div id="TopRightFrame">
			<div id="MembershipContainer">
				<img src = "/files/home/world_map.png"/>
				<div id="MembershipText">
					<a href="/about/membership">Membership</a> | <a href="http://members.openehr.org/join-us" target="_blank">Join Us</a>
				</div>
			</div>
			
			<div id="PartnersContainer">
				
				<div id="LogoImage">
					<p><a href="/industry_partners/iryo"><img src="/files/industry_partners/iryo_logo.png"></a></p>
					<p><a href="/industry_partners/virtual_care"><img src="/files/industry_partners/virtual_care_logo.png"></a></p>
					<p><a href="/industry_partners/core_consulting"><img src="/files/industry_partners/core_consulting_logo.png"></a></p>
					<p><a href="/organisational_partners/norway"><img src="/files/organisational_partners/norway_ikt_logo.png"></a></p>
					<p><a href="/industry_partners/inidus"><img src="/files/industry_partners/inidus_logo.png"></a></p>
					<p><a href="/industry_partners/tieto"><img src="/files/industry_partners/tieto_logo.png"></a></p>
					<p><a href="/industry_partners/dips"><img src="/files/industry_partners/dips_logo.png"></a></p>
					<p><a href="/industry_partners/infinnity_solutions"><img src="/files/industry_partners/infinnity_logo.png"></a></p>
					<p><a href="/industry_partners/code24"><img src="/files/industry_partners/code24_logo.png"></a></p>
					<p><a href="/industry_partners/cambio_healthcare_systems"><img src="/files/industry_partners/cambio_logo.png"></a></p>
					<p><a href="/industry_partners/marand"><img src="/files/industry_partners/marand_logo.png"></a></p>
					<p><a href="/industry_partners/ocean_health_systems"><img src="/files/industry_partners/ocean_logo.png"></a></p>
				</div>
				
				<div id="PartnersText">
					<a href="/organisational_partners">Org Partners</a> | <a href="/industry_partners">Industry Partners</a> | <a href="http://members.openehr.org/join-us" target="_blank">Join Us</a>
				</div>
				
			</div>
			
		</div>
		
		<div id="TopMiddleFrame">
					
			<!-- image settings for carousel in /styles/home.css -->
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
		
				<div class="carousel-inner" role="listbox">
						
					<div class="item active">
						<div id = "Item0">
							<div id = "CarouselText">
								
								<span class="HomeSubtitle1">CDS Summer app challenge 2018</span>
								<p>Find out on <a href="https://cds-apps.com/" target="_blank" >CDS site</a>!</p>
							</div>
						</div>
					</div>
					
					<div class="item">
						<div id = "Item1">
							<div id = "CarouselText">
								
								<span class="HomeSubtitle1">Oslo Apen Platform</span>
								<p>Check out the <a href="https://www.youtube.com/playlist?list=PLnMJHuL5FeHYAEdH-eJT_tX2Ag9Fwc5So" target="_blank">Presentation videos (YouTube)</a>!</p>
							</div>
						</div>
					</div>
					
			<!-- 
					<div class="item">
						<div id = "Item1">
							<div id = "CarouselText">
								<span class="HomeSubtitle1">openEHR Task Planning</span>
								<p>Task Planning &amp; process specification</p>
								<p><a href="/releases/PROC/latest/task_planning.html" target="_blank">Release 1.0.0</a></p>
								<p><a href="https://wolandscat.net/2017/01/23/initial-foundations-for-clinical-workflow/" target="_blank">Clinical workflow foundations</a></p>
							</div>
						</div>
					</div>
			 -->
					
					<div class="item">
						<div id = "Item2">
							<div id = "CarouselText">
								<span class="HomeSubtitle1">Membership</span>
								<p>Become an openEHR member!</p>
								<p><a href="/about/membership">How does openEHR membership work?</a></p>
								<p><a href="http://members.openehr.org/join-us" target="_blank">Membership sign-up page</a></p>
							</div>
						</div>
					</div>
				
				</div>
				
			</div>
			
			<br class="clear">
			
		</div>
		
		<br class="clear">
		
		<div id="BottomLeftFrame">
			<div style="position: relative; word-wrap:break-word;">

				<a href="https://twitter.com/search?q=%40openehr+OR+%23openEHR+-RT"><span class="HomeSubtitle1">openehr / #openEHR</span></a>
				<a class="twitter-timeline"  href="https://twitter.com/search?q=%40openehr%20OR%20%23openEHR%20-RT" 
					data-widget-id="910876752528003072"
					height="500" 
					lang="EN"
					data-chrome="noheader"
					data-chrome="nofooter">@openehr / #openEHR</a>
				<script>
					!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0], p=/^http:/.test(d.location)?'http':'https';
						if(!d.getElementById(id)) {
							js=d.createElement(s);
							js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
							fjs.parentNode.insertBefore(js,fjs);
						}
					}
					(document,"script","twitter-wjs");
				</script>
			</div>
		</div>
	
		<?php 
			require_once ($_SERVER['DOCUMENT_ROOT'].'/functions/meta_db_conn.php');
		?>
		
		
		<div id="BottomRightFrame">
			<a href="news_events/events"><span class="HomeSubtitle3">Events</span></a>
			<div id = "EventsContainer">
			<?php
				//Retrieve events
				$q = "SELECT item_id, title, coordinates FROM news_items WHERE category='events' ORDER BY item_id DESC LIMIT 9";
				$r = @mysqli_query ($conx, $q);
				
				//Count the number of the rows
				$num = mysqli_num_rows($r);
				
				if ($num > 0) { //everything went ok, display results
					
					//Fetch and print all releases:
					while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
						echo '<a href="news_events/events.php?id=' . $row['item_id'] . '">'.$row['title'].'</a><br/><h6>'
							. $row['coordinates'] . '</h6>';
					}
					mysqli_free_result ($r); //Free up the resources
				}
				else { //if it didnt run ok
					echo '<p>There are currently no events.</p>';
				} 
			?>
			</div>
		</div>
		
		
		<div id="BottomMiddleFrame">
			<a href="news_events/community_news"><span class="HomeSubtitle2">News</span></a>
			
			<div id = "NewsContainer">
			<?php
				//Retrieve community news
				$q = "SELECT item_id, title, category, DATE_FORMAT(date, '%M %d, %Y') AS dr FROM news_items WHERE (category='community_news') OR (category='foundation_news') OR (category='industry_news') OR (category='releases') ORDER BY date DESC LIMIT 0, 7";
				$r = @mysqli_query ($conx, $q);
				
				//Count the number of the rows
				$num = mysqli_num_rows($r);
				
				if ($num > 0) { //everything went ok, display results
					
					//Fetch and print all releases:
					while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
						if ($row['category'] == 'industry_news') {
							echo '<a href = "/news_events/industry_news" ><img src = "/files/home/industry.png" alt = "Industry News" title = "Industry News"/></a>';
						}
						else if ($row['category'] == 'releases') {
							echo '<a href = "/news_events/releases" ><img src = "/files/home/releases.png" alt = "Releases" title = "Releases"/></a>';
						}
						else if ($row['category'] == 'community_news') {
							echo '<a href = "/news_events/community_news"><img src = "/files/home/community.png" alt = "Community News" title = "Community News"/></a>';
						}
						else {
							echo '<a href = "/news_events/foundation_news"><img src = "/files/home/foundation.png" alt = "Foundation News" title = "Foundation News"/></a>';
						}
						echo '<a href="news_events/' . $row['category'] . '.php?id=' . $row['item_id'] . '">'.$row['title'].'</a><br/><h6>'
							. $row['dr'] . '</h6>';
					}
					mysqli_free_result ($r); //Free up the resources
				}
				else { //if it didnt run ok
					echo '<p>There are currently no community news.</p>';
				} 
			?>
			</div>
			
			<div id = "NewsContainer">
			<?php
				//Retrieve community news
				$q = "SELECT item_id, title, category, DATE_FORMAT(date, '%M %d, %Y') AS dr FROM news_items WHERE (category='community_news') OR (category='foundation_news') OR (category='industry_news') OR (category='releases') ORDER BY date DESC LIMIT 7, 7";
				$r = @mysqli_query ($conx, $q);
				
				//Count the number of the rows
				$num = mysqli_num_rows($r);
				
				if ($num > 0) { //everything went ok, display results
					
					//Fetch and print all releases:
					while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
						if ($row['category'] == 'industry_news') {
							echo '<a href = "/news_events/industry_news" ><img src = "/files/home/industry.png" alt = "Industry News" title = "Industry News"/></a>';
						}
						else if ($row['category'] == 'releases') {
							echo '<a href = "/news_events/releases" ><img src = "/files/home/releases.png" alt = "Releases" title = "Releases"/></a>';
						}
						else if ($row['category'] == 'community_news') {
							echo '<a href = "/news_events/community_news"><img src = "/files/home/community.png" alt = "Community News" title = "Community News"/></a>';
						}
						else {
							echo '<a href = "/news_events/foundation_news"><img src = "/files/home/foundation.png" alt = "Foundation News" title = "Foundation News"/></a>';
						}
						echo '<a href="news_events/' . $row['category'] . '.php?id=' . $row['item_id'] . '">'.$row['title'].'</a><br/><h6>'
							. $row['dr'] . '</h6>';
					}
					mysqli_free_result ($r); //Free up the resources
				}
				else { //if it didnt run ok
					echo '<p>There are currently no community news.</p>';
				} 
			?>
			</div>
		</div>
		
		<?php mysqli_close($conx);?>
			
		<br class="clear">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="/functions/rotating_logos.js"></script>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
