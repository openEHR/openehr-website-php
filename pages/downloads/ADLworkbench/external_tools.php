<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'External Tools';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header_english.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			<h2>Required Tools</h2>
			<p>The only required tools are an external editor and a web browser. You will have both of those, but can change them in the Tools>Options dialog.</>

			<h2>Recommended Tools</h2>
			<p>The following tools are not required, but are recommended for better functioning of the ADL Workbench:</>
			<ul>
				<li><em>Git</em>: if the Git version control command line tools are installed on your machine, you will be able to interact with various remote repositories, including the openEHR ADL 2 test repository, CKM mirror and CIMI archetypes repository. Git can be obtained as follows:</li>
				<ul>
					<li><em>Windows</em>: there are two ways to obtain git on windows: 1) if you have <a href="https://www.cygwin.com/">cygwin</a>, install it via the normal cygwin setup program; 2) if not, <a href="http://sourceforge.net/projects/gitextensions/">GitExtensions</a> is excellent, and installing it will provide a command line and windows interface to Git. </li>
					<li><em>MacOSX</em>: <a href="http://git-scm.com/download/mac">This page</a> provides resources for installing Git on a Mac OS X machine.</li>
					<li><em>Linux</em>: Git is probably already on your Linux machine. Just type "which git" on the command line. If it isn't, do the usual: use apt-get. There's usually a bit more to do after installation, so here are some help pages <a href="https://www.digitalocean.com/community/tutorials/how-to-install-git-on-ubuntu-12-04">Ubuntu</a>; <a href="https://access.redhat.com/documentation/en-US/Red_Hat_Enterprise_Linux/6/html/Developer_Guide/collaboration.git.html">redhat</a>; <a href="https://en.opensuse.org/Git">Suse</a>. If it's not one of these, well, you're a Linux user, you'll figure it out.</li>
				</ul>
				<li><em>Diff tool</em>: a diff tool can be invoked from the <a href="http://www.openehr.org/downloads/ADLworkbench/test_tool">test tool</a> in the ADL Workbench. There are various possibilities on each platform, including <a href="http://winmerge.org/">WinMerge</a> for Windows; <a href="https://sourcegear.com/diffmerge/">DiffMerge</a> for the Mac and <a href="http://kdiff3.sourceforge.net/">KDiff3</a>, which runs on all platforms.</li>
			</ul>
		  
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
