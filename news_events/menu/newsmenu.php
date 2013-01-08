		<p class="SideMenuHeading">News & Events</p>
		
		<?php
		$active[$current] = 'class="active"';
		?>
			<ul>
			<li <?php echo $active[5] ?>><a href="/news_events/industry_news">Industry News</a></li>
			<li <?php echo $active[1] ?>><a href="/news_events/foundation_news">Foundation News</a></li>
			<li <?php echo $active[4] ?>><a href="/news_events/announcements">Announcements</a></li>
			<li <?php echo $active[2] ?>><a href="/news_events/events">Events</a></li>
			<li <?php echo $active[3] ?>><a href="/news_events/releases">Releases</a></li>
			<li <?php echo $active[6] ?>><a href="/news_events/clinical_model_news">CKM Activity</a></li>
			</ul>