<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Localisation';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>If you want to help translate the openEHR website please <a href="mailto:webmaster@openehr.org">contact us</a>.</p>

			<h2>Updating the translation of an existing language</h2>
			<p>If you want to translate new or change content to a language that is already established in the website, we will provide you a contact to the person responsible for that language so as to coordinate the work. Normally you will use the 'fork/pull-request' workflow as described below to do the changes.</p>

			<h2>Translating the website into a new language</h2>
			<p>If you want to translate to a language that is not yet established in the website, the process is as follows:</p>
			<ul>
				<li><a href="mailto:webmaster@openehr.org">Contact us</a></li>
				<li>We will send a spreadsheet with words and phrases necessary to create the templates of the website for the new language.</li>
				<li>After you send us the translated spreadsheet, we will create copy of the website for your language with localised templates.</li>
				<li>When we inform you the templates are ready, you can fork the openehr-website Git repo.</li>
				<li>You will then make your changes, and perform a 'pull request', which will notify the webmaster and cause your changes to be integrated to the website.</li>
			</ul>
			<p>The latter steps are described in detail below.</p>

			<h2>How the website is structured</h2>
			<p>The website content for a given language translation exists under the directory <code>/pages/lang</code>, for example <code>/pages/es</code>. The translation work consists of translating the main content within a page, delimited by the 'Content starts here' / 'content ends here' lines, e.g. as per <a href ="https://github.com/openEHR/openehr-website/blob/master/pages/es/openehr_programs.php" target="_blank">this example</a>. You don't need to worry about the markup content inside the angle brackets, but you need to translate content outside of the brackets e.g. 'Deployed Solutions' as per <a href="https://github.com/openEHR/openehr-website/blob/master/pages/who_is_using_openehr/index.php" target="_blank">this example</a>.</p>
				
	
			<a href="/files/using_the_site/translation.png"><img src="/files/using_the_site/translation.png" alt="Translation" title="Click to enlarge" class = "imgMiddle width50"/></a>
			<p>Translating diagrams may require some extra effort, since diagram source files may be PPT or other formats. Please contact the webmaster for diagram translations.</p>

			<h2>Github workflow</h2>
			<p>The version control workflow you will use is known as 'fork / pull', which means that you will create (or use existing) fork of the master openEHR website repository, make your changes, and then make a 'pull request', which will cause the webmaster to integrate your changes into the master website copy.</p>

			<p>You can fork the <a href="https://github.com/openEHR/openehr-website" target="_blank">Github openehr-website repository</a>. To do this you need to have an account on Github (just register), then you perform a 'fork' operation, which you do via the highlighted button in the screen-shot below.</p>
			<a href="/files/using_the_site/repository_fork.png"><img src="/files/using_the_site/repository_fork.png" alt="Repository fork" title="Click to enlarge" class = "imgMiddle width50"/></a>
			<p>This creates a complete copy of the openEHR website Git repository in your own Github account. You can then edit content of pages under the particular language section (e.g.: /pages/es for Spanish language, /pages/pt for Portuguese language). The translation job is as described above.</p>
			<p>There are two ways to do the editing: either do it directly on the Github web interface {you can see an 'Edit' button in the screenshot above that will allow you to do this), or clone the repository to your machine - the normal way of working with Github. You need to get a tool called <a href="https://code.google.com/p/gitextensions/" target="_blank">GitExtensions</a> and install it. Use it to do a clone of the repository to your local machine and do the translation work. You can commit it in small steps if you want 'push' your changes from the local repository to the your Github one</p>
			<p>Once you finished translating pages (and committed and pushed, if you used a local clone), your translations are in the forked repository on your Github account. To get the changes to flow to the master openEHR website repository, you create what is called a 'pull' request, which sends a message to the main repository owner that someone has changes you want to commit. See the screen-shot below.</p>
			<a href="/files/using_the_site/integrating_changes.png"><img src="/files/using_the_site/integrating_changes.png" alt="Integrating Changes" title="Click to enlarge" class = "imgMiddle width50"/></a>
			
			<p>When administrator processes this pull request, it will cause the changes to be incorporated into the master repository.</p>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
