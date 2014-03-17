
		<div id="Logo">

			<a href="/home"></a>
			
		</div>
			
		<div id="Motto">
		
			An open domain-driven platform for<br/>developing flexible e-health systems
		
		</div>
		
		<div id="Utilities">
			
			<?php
			if( (isset($_SESSION['user_id'])) && (!strpos($_SERVER['PHP_SELF'],'logout.php')) ) { 
				echo '<a href="/login/user_home">User Home</a> | <a href="/login/logout">Logout</a> |';
			} 
			?> <a href="/about_this_website">About this Website</a> | <a href="/wiki" target="_blank">Wiki</a> | <a href="http://www.openehr.org/knowledge">CKM</a>
		
		</div>
		
		<div id="Search">
		
			<div id="cse-search-form" style="width: 100%;">Loading</div>
			
			<script src="http://www.google.com/jsapi" type="text/javascript"></script>
			<script type="text/javascript"> 
			  google.load('search', '1', {language : 'en', style : google.loader.themes.ESPRESSO});
			  google.setOnLoadCallback(function() {
				var customSearchOptions = {};  var customSearchControl = new google.search.CustomSearchControl(
				  '012150377208032227381:uwpn0z1deyi', customSearchOptions);
				customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
				var options = new google.search.DrawOptions();
				options.enableSearchboxOnly("http://www.openehr.org/search");
				customSearchControl.draw('cse-search-form', options);
			  }, true);
			</script>

		</div>

