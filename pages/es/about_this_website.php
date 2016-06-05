<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Sobre este sitio';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_header_top.php');
?>

	<div id="MainArea">
	
		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>The openEHR website aims to be representative of the openEHR community aims and activities and particularly what people are working on out there. Don't consider it as fixed, but rather as a living thing. We are interested in feedback on any aspect of the website.</p>
			<p>The technical approach taken with this site is a manual one - that is, it is constructed from hand-built HTML, PHP, and Java-script. This gives more freedom than the controlled environment of a CMS. Moving to a CMS is not out of the question in the future, but for now, the current approach seems more maintainable. The website code is maintained on Github, and contributors can participate by providing material via that route.</p>
			
			
			<h2>Providing feedback</h2>
			<p>Design ideas, feedback, problems <a href="https://openehr.atlassian.net/projects/WEB/issues" target="_blank">Jira issue tracker</a>.</p>
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_footer.php');?>