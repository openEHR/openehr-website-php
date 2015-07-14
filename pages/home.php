<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Welcome to openEHR';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header_top.php');
?>
	<div id="MainArea">
	
		<div id="ButtonsFrame">
			<a href="what_is_openehr" class="button1 org">What is openEHR?</a>
			<a href="who_is_using_openehr" class="button1 org">Who is using openEHR?</a>
			<a href="/programs/specification/" class="button3 progs">Specifications</a>
			<a href="http://www.openehr.org/releases/trunk/UML/#Diagrams___18_1_83e026d_1423485599937_29309_4372" class="button4 progs" target="_blank">UML</a>
			<a href=" http://www.openehr.org/releases/1.0.2/reference-models/openEHR/XSD/" class="button4 progs" target="_blank">XSD</a>
			<a href="/programs/clinicalmodels" class="button3 progs">Clinical Models</a>
			<a href="http://www.openehr.org/ckm/" class="button4 progs" target="_blank">CKM</a>
			<a href="https://github.com/openEHR/CKM-mirror" class="button_git" target="_blank"><img src="/files/home/git_hub.png"/></a>
			<a href="/programs/software" class="button2 progs">Software</a>
			<a href="https://github.com/openEHR" class="button_git" target="_blank"><img src="/files/home/git_hub.png"/></a>
		</div>
		
		<div id="MiddleFrame">
			
			<div id="NewsImage">
				
				<p><img src="/files/home/blueprint.png"><span class="HomeSubtitle">Forthcoming Releases</span>
				<br/> <a href="https://openehr.atlassian.net/projects/SPECPR?selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page" target="_blank">Release roadmap</a>.<br/>
				<br/><a href="https://openehr.atlassian.net/projects/SPECRM?selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page" target="_blank">RM releases</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://openehr.atlassian.net/projects/SPECAM?selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page" target="_blank">ADL releases</a><br/>
				<a href="https://openehr.atlassian.net/projects/SPECITS?selectedItem=com.atlassian.jira.jira-projects-plugin%3Arelease-page" target="_blank">ITS releases</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://openehr.atlassian.net/wiki/display/spec/openEHR+REST+APIs" target="_blank">REST APIs page</a><br/>
				<br/><a href="https://openehr.atlassian.net/issues/secure/Dashboard.jspa" target="_blank">Specifications Dashboard (Jira)</a>
				</p>
				
				<p><img src="/files/home/sprint.jpg"><span class="HomeSubtitle">Industry Sprint</span>
				<br/> OpenEHR Archetype publication '<a href="https://openehr.atlassian.net/wiki/pages/viewpage.action?pageId=2949155" target="_blank">Industry Sprint</a>'<br/>
				<br/> <a href="https://openehr.atlassian.net/wiki/display/healthmod/Proposed+archetypes+for+%27Industry+Sprint%27+Publication" target="_blank">Latest progress</a> <br/>
				<br/> Health professionals: <a href="https://openehr.atlassian.net/wiki/display/healthmod/Adopt+an+archetype" target="_blank">Adopt an Archetype</a> <br/>
				</p>

				<p><img src="http://area51.stackexchange.com/ads/proposal/87508.png"><span class="HomeSubtitle">openEHR.StackExchange.com</span>
				<br/>Proposed Q&amp;A site for people and organisations developing and using the openEHR open health computing platform.
				<br/>
				<br/> Phase 2: committers - <a href="http://area51.stackexchange.com/proposals/87508/openehr?referrer=w4Wq6VpjyxQPC4BojQudOA2">Commit here</a>
				</p>

				<p><img src="/files/home/membership.png"><span class="HomeSubtitle">Membership</span>
				<br/> Become an openEHR member!  <br/>
				<br/> <a href="/about/membership">How does openEHR membership work?</a> <br/>
				<br/> <a href="http://members.openehr.org/join-us" target="_blank">Membership sign-up page</a>
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
				<div style="position: relative; top:5px; padding-left:1px; padding-right:4px; word-wrap:break-word; height:410px; ">
					<a class="twitter-timeline" href="https://twitter.com/search?q=%23openehr" 
						data-widget-id="347727645871570946" 
						width="200" 
						height="470" 
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
				require_once ($_SERVER['DOCUMENT_ROOT'].'/functions/meta_db_conn.php');
			?>
			<div id="NewsFrame">
				<a href="news_events/industry_news" style="color:#023670;"><h1 class="HomeTitle">Industry News</h1></a>
				<?php
					//Retrieve industry news
					$q = "SELECT item_id, title, DATE_FORMAT(date, '%M %d, %Y') AS dr FROM news_items WHERE category='industry_news' ORDER BY date DESC LIMIT 7";
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
					$q = "SELECT item_id, title, DATE_FORMAT(date, '%M %d, %Y') AS dr FROM news_items WHERE category='community_news' ORDER BY date DESC LIMIT 4";
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
				<a href="news_events/foundation_news" style="color:#023670;"><h1 class="HomeTitle">Foundation News</h1></a>
				<?php
					//Retrieve releases
					$q = "SELECT item_id, title, DATE_FORMAT(date, '%M %d, %Y') AS dr FROM news_items WHERE category='foundation_news' ORDER BY date DESC LIMIT 4";
					$r = @mysqli_query ($conx, $q);
					
					//Count the number of the rows
					$num = mysqli_num_rows($r);
					
					if ($num > 0) { //everything went ok, display results
						
						//Fetch and print all releases:
						while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
							echo '<a href="news_events/foundation_news.php?id=' . $row['item_id'] . '">'.$row['title'].'</a><br/><h6>'
								. $row['dr'] . '</h6><br/>';
						}
						mysqli_free_result ($r); //Free up the resources
					}
					else { //if it didnt run ok
						echo '<p>There are currently no foundation news.</p>';
					} 
				?>
				
				<a href="news_events/releases" style="color:#023670;"><h1 class="HomeTitle">Releases</h1></a>
				<?php
					//Retrieve releases
					$q = "SELECT item_id, title, DATE_FORMAT(date, '%M %d, %Y') AS dr FROM news_items WHERE category='releases' ORDER BY date DESC LIMIT 4";
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
