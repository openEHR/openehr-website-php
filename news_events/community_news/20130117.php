<?php
$PageName = 'Community News';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

	<?php include '../../panel/headpanel.php' ?>
	
</head>

<body>

<div id="MainFrame">
	
	<div id="TopPanel">
		<?php include '../../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu">
		
		<div class="nav">
			<?php include '../../menu/topmenu.php' ?>
		</div>
		
	</div> 

	<div id="MainArea">
	
		<div id="SideMenu">
			<?php include '../menu.php' ?>
		</div>
		
		<div id="TextArea">
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>Publications on openEHR and open source</h2>
			<h6>17. January 2013 | from: David Ingram</h6>
			<br/>
			
			<p>Dear openEHR Members</p>
			<p>A special issue of the Canadian journal, Technology Innovation Management Review, has just been published and features open source software sustainability - see <a href="http://timreview.ca/issue/2013/january">TIM Review website</a>.</p>
			<p>The special issue draws on a range of experiences and insights from different domains and David Ingram and Seref Arikan have contributed an invited article, drawing on personal perspectives and with examples from their work on openEHR and Opereffa, as follows:</p>
			<p><a href="http://timreview.ca/article/648">The Evolving Role of Open Source Software in Medicine and Health Services</a><br/>
			<a href="http://timreview.ca/user/549/article">David Ingram</a>, <a href="http://timreview.ca/article?f[author]=975">Sevket Seref Arikan</a><br/>
			<a href="http://timreview.ca/sites/default/files/article_PDF/IngramArikan_TIMReview_January2013.pdf" target="_blank">Download this article as a PDF</a><br/>
			</p>
			<p>In addition, Daniel Curto-Millet, a PhD student at London's LSE, who is observing and reviewing the development of the openEHR mission and community, has contributed an article based on early findings from his research programme, as follows:</p>
			<p><a href="http://timreview.ca/article/649">Sustainability and Governance in Developing Open Source Projects as Processes of In-Becoming</a><br/>
			<a href="http://timreview.ca/user/593/article">Daniel Curto-Millet</a><br/>
			<a href="http://timreview.ca/sites/default/files/article_PDF/Curto-Millet_TIMReview_January2013.pdf">Download this article as a PDF</a><br/>
			</p>
			<p>We hope the special issue as a whole, as well as the openEHR related papers, will be of interest for the wide ranging and international membership of the openEHR lists.</p>
			<br/>
			
			<p>David Ingram</p>
			
			<br/>
			<a href="../community_news">>> Back to <?php echo "$PageName";?></a>
			
		</div>
			
	</div>

	<div id="BottomMenu">
		<?php include '../../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
		<?php include '../../panel/bottompanel.php' ?>	
	</div>

</div>
	
<?php include '../../panel/scriptpanel.php' ?>

</body>

</html>