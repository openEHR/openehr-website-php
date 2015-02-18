<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Welcome to openEHR';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header_top.php');
?>
	<div id="MainArea">
	
		<div id="ButtonsFrame">
		
			<ul>
				<li><a href="what_is_openehr"  style="line-height:200%">What is openEHR?</a></li>
				<li><a href="who_is_using_openehr"  style="line-height:200%">Who is using openEHR?</a></li>
				<li class="progs"><a href="/programs/specification/releases"  style="line-height:200%">Specifications</a></li>
				<li class="progs"><a href="/programs/clinicalmodels"  style="line-height:200%">Clinical Models</a></li>
				<li class="progs"><a href="/programs/software"  style="line-height:200%">Software</a></li>
			</ul>
		
		</div>
		
		<div id="MiddleFrame">
			
			<div id="NewsImage">
				<p><img src="/files/home/board.png"><span class="HomeSubtitle">Management Board Election Feb 2015</span>
				<br/>
				Voting open until 28 Feb
				<br/>
				<br/>
				<a href="/about/governance_structure">What is the Management Board?</a>
				<br/>
				<br/>
				<a href="http://members.openehr.org/page-7745" target="_blank">Board elections page</a>
				<br/>
				<br/>
				<a href="http://members.openehr.org/2015-Management-Board-Nominees" target="_blank">The nominees</a>
				</p>
				<p><img src="/files/home/membership.png"><span class="HomeSubtitle">Membership</span>
				<br/>
				Become an openEHR member!
				<br/>
				<br/>
				<a href="/about/membership">How does openEHR membership work?</a>
				<br/>
				<br/>
				<a href="http://members.openehr.org/join-us" target="_blank">Membership sign-up page</a>
				</p>
			</div>	
		</div>
		
		<div id="SmallFrame">
			<div id="Membership">
				<a href="/about/membership"><span class="HomeSubtitle2">Membership</span></a>
				
				<div id="MembershipFrame">
					<a href="http://members.openehr.org/join-us" target="_blank">Join Us</a>
				</div>
				
			</div>
			
			<div id="PartnersLogo">
				<a href="/industry_partners"><span class="HomeSubtitle2">Industry Partners</span></a>
				<p><a href="/industry_partners/cambio_healthcare_systems"><img src="files/industry_partners/cambio_logo.png"></a></p>
				<p><a href="/industry_partners/code24"><img src="files/industry_partners/code24_logo.png"></a></p>
				<p><a href="/industry_partners/critical_software"><img src="files/industry_partners/critical_logo.png"></a></p>
				<p><a href="/industry_partners/dips"><img src="files/industry_partners/dips_logo.png"></a></p>
				<p><a href="/industry_partners/infinnity_solutions"><img src="files/industry_partners/infinnity_logo.png"></a></p>
				<p><a href="/industry_partners/marand"><img src="files/industry_partners/marand_logo.png"></a></p>
				<p><a href="/industry_partners/nousco"><img src="files/industry_partners/nousco_logo.png"></a></p>
				<p><a href="/industry_partners/ocean_informatics"><img src="files/industry_partners/ocean_logo.png"></a></p>
				<!--[if lt IE 7]><a href="/industry_partners"><img src="files/industry_partners/industry_logo.png"></a><![endif]-->
			</div>
			
		</div>
		
		<div id="BigFrame">
		
			<div id="TwitterFrame">
				<div style="position: relative; top:5px; padding-left:1px; padding-right:4px; word-wrap:break-word; height:360px; ">
					<a class="twitter-timeline" href="https://twitter.com/search?q=%23openehr" 
						data-widget-id="347727645871570946" 
						width="200" 
						height="420" 
						lang="EN"
						data-chrome="nofooter">openEHR Talk</a>
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
			
			<?php 
				$db_conn = "";
				if ($_SERVER['DOCUMENT_ROOT'] == "www.openehr.org") {
					$db_conn .= "db_conn.php";
				}
				else {
					$db_conn .= "db_conn_test.php";
				}
				require_once ("../../$db_conn");
			?>
			<div id="NewsFrame">
				<a href="news_events/industry_news" style="color:#023670;"><h1 class="HomeTitle">Industry News</h1></a>
				<?php
					//Retrieve industry news
					$q = "SELECT item_id, title, DATE_FORMAT(date, '%M %d, %Y') AS dr FROM news_items WHERE category='industry_news' ORDER BY date DESC LIMIT 6";
					$r = @mysqli_query ($conx, $q);
					
					//Count the number of the rows
					$num = mysqli_num_rows($r);
					
					if ($num > 0) { //everything went ok, display results
						
						//Fetch and print all releases:
						while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
							echo '<a href="news_events/industry_news.php?id=' . $row['item_id'] . '">'.$row['title'].'</a><br/><h6>'
								. $row['dr'] . '</h6><br/>';
						}
						mysqli_free_result ($r); //Free up the resources
					}
					else { //if it didnt run ok
						echo '<p>There are currently no industry news.</p>';
					} 
				?>
			</div>
			
			<div id="NewsFrame">
				<a href="news_events/community_news" style="color:#023670;"><h1 class="HomeTitle">Community News</h1></a>
				<?php
					//Retrieve community news
					$q = "SELECT item_id, title, DATE_FORMAT(date, '%M %d, %Y') AS dr FROM news_items WHERE category='community_news' ORDER BY date DESC LIMIT 3";
					$r = @mysqli_query ($conx, $q);
					
					//Count the number of the rows
					$num = mysqli_num_rows($r);
					
					if ($num > 0) { //everything went ok, display results
						
						//Fetch and print all releases:
						while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
							echo '<a href="news_events/community_news.php?id=' . $row['item_id'] . '">'.$row['title'].'</a><br/><h6>'
								. $row['dr'] . '</h6><br/>';
						}
						mysqli_free_result ($r); //Free up the resources
					}
					else { //if it didnt run ok
						echo '<p>There are currently no community news.</p>';
					} 
				?>
				
				<a href="news_events/events" style="color:#023670;"><h1 class="HomeTitle">Events</h1></a>
				<?php
					//Retrieve events
					$q = "SELECT item_id, title, coordinates FROM news_items WHERE category='events' ORDER BY item_id DESC LIMIT 3";
					$r = @mysqli_query ($conx, $q);
					
					//Count the number of the rows
					$num = mysqli_num_rows($r);
					
					if ($num > 0) { //everything went ok, display results
						
						//Fetch and print all releases:
						while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
							echo '<a href="news_events/events.php?id=' . $row['item_id'] . '">'.$row['title'].'</a><br/><h6>'
								. $row['coordinates'] . '</h6><br/>';
						}
						mysqli_free_result ($r); //Free up the resources
					}
					else { //if it didnt run ok
						echo '<p>There are currently no events.</p>';
					} 
				?>	
			</div>
					
			<div id="NewsFrame">
				<a href="news_events/releases" style="color:#023670;"><h1 class="HomeTitle">Releases</h1></a>
				<?php
					//Retrieve releases
					$q = "SELECT item_id, title, DATE_FORMAT(date, '%M %d, %Y') AS dr FROM news_items WHERE category='releases' ORDER BY date DESC LIMIT 7";
					$r = @mysqli_query ($conx, $q);
					
					//Count the number of the rows
					$num = mysqli_num_rows($r);
					
					if ($num > 0) { //everything went ok, display results
						
						//Fetch and print all releases:
						while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
							echo '<a href="news_events/releases.php?id=' . $row['item_id'] . '">'.$row['title'].'</a><br/><h6>'
								. $row['dr'] . '</h6><br/>';
						}
						mysqli_free_result ($r); //Free up the resources
					}
					else { //if it didnt run ok
						echo '<p>There are currently no releases.</p>';
					} 
				?>
			</div>
			<?php mysqli_close($conx);?>
				
		</div>
		<br class="clear">
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="/functions/rotating_logos.js"></script>
		<script src="/functions/rotating_news.js"></script>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
