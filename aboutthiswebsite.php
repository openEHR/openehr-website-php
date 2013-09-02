<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'About this website';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header_top.php');
?>

	<div id="MainArea" style="margin-left:60px; margin-top:35px; margin-bottom:100px; width:900px;">
	
		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>This new website aims to be more representative of the openEHR community aims and activities and particularly what people are working on out there. Don't consider it as fixed, but rather as a living thing. We are interested in feedback on any aspect of the website. In the initial development phase, visual elements and style are 'draft', and we welcome ideas for improvement.</p>
			<p>Note that the technical approach we have taken with this site is a totally manual one - that is, it is constructed from hand-built HTML, PHP, and Java-script. This gives more freedom than the controlled environment of a CMS. Moving to a CMS is not out of the question in the future, but for now, the current approach seems more maintainable. The website code is maintained on Github, and contributors can participate by providing material via that route.</p>
			
			
			<h2>Providing feedback</h2>
			<p>Please provide website design ideas/feedback <a href="http://www.openehr.org/wiki/display/oecom/2012+Website+-+feedback+page" target="_blank">here</a>.</p>
			<p>Routine website problems/issues/requests <a href="https://github.com/openEHR/openehr-website/issues" target="_blank">here</a>.</p>
			<p>Email <a href="mailto:webmaster@openehr.org">webmaster</a>.</p>
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>