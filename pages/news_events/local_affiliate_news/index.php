<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Local Affiliate News';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header_english.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			<h2>openEHR Brazil</h2>
			<p><a href="http://openehr.org.br/">openEHR Brazil website</a></p>

			<h2>openEHR China</h2>
			<p><a href="http://www.openehr.org.cn:8080/MyOpenEHRWeb/index.jsp">openEHR China website</a></p>
			<p>News</p>
			<ul>
				<li><a href="/pages/news_events/local_affiliate_news/2016_11_25_openehr_china">Using and Promoting openEHR in China in 2016.</a>.</li>
			</ul>
					
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
