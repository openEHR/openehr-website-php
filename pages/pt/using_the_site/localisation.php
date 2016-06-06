<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Localização';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>If you want to help translate openEHR website please contact us <a href="mailto:webmaster@openehr.org">here</a>. If you want to translate to language which is already established, we will provide you contact to person who is responsible for translation to that particular language to coordinate your work.</p>
			<p>If you want to translate to language which is not yet established, following steps will explain the process:</p>
		
			<p>First, you will receive spreadsheet with basic words and sentences necessary to create template of website for new language.</p>
			<p>After you send us translation, we will create copy of the website for your language with localised templates.</p>
			<p>Once, we inform you the templates are ready, you can fork the <a href="https://github.com/openEHR/openehr-website" target="_blank">Github openehr-website repository</a>. To do this you need to have an account on Github (just register), then you perform a 'fork' operation, which you do via the highlighted button in the screen-shot below.</p>
			<a href="/files/using_the_site/repository_fork.png"><img src="/files/using_the_site/repository_fork.png" alt="Repository fork" title="Click to enlarge" class = "imgMiddle width50"/></a>
			
			<p>This creates a complete copy of the openEHR website Git repository in your own Github account. Then you will edit content of pages under the particular language section (e.g.: /pages/es for Spanish language, /pages/pt for Portuguese language). The translation job consists of replacing the content (between Contents starts here and Content ends here) in most of the pages with your language translations, as illustrated in the screen-shot below.</p>
			<a href="/files/using_the_site/translation.png"><img src="/files/using_the_site/translation.png" alt="Translation" title="Click to enlarge" class = "imgMiddle width50"/></a>
			
			<p>There are two ways to do the editing: either do it directly on the Github web interface {you can see an 'Edit' button in the screenshot above that will allow you to do this), or clone the repository to your machine - the normal way of working with Github. You need to get a tool called <a href="https://code.google.com/p/gitextensions/" target="_blank">GitExtensions</a> and install it. Use it to do a clone of the repository to your local machine and do the translation work. You can commit it in small steps if you want 'push' your changes from the local repository to the your Github one</p>
			<p>Once you finished translating pages, your translations are in the forked repository on your Github account. To get the changes to flow to the master openEHR website repository, you create what is called a 'pull' request, which sends a message to the main repository owner that someone has changes you want to commit. See the screen-shot below.</p>
			<a href="/files/using_the_site/integrating_changes.png"><img src="/files/using_the_site/integrating_changes.png" alt="Integrating Changes" title="Click to enlarge" class = "imgMiddle width50"/></a>
			
			<p>When administrator processes this pull request, it will cause the changes to be incorporated into the master repository.</p>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>
