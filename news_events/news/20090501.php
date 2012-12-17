<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

	<title>openEHR - News</title>
	<link rel="bookmark" href="http://www.openehr.org/news_events/openehrnews/news13" title="openEHR - News">
	<?php include '../../panel/headpanel.php' ?>
	
</head>


<body>

<div id="MainFrame">
	
	<div id="TopPanel">
		<?php include '../../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu" style="text-align:left">
		<div class="nav">
			<?php include '../../menu/topmenu.php' ?>
		</div>
	</div> 

	<div id="MainArea">
	
		<div id="SideMenu">
			<?php $current = 1; include '../menu/newsmenu.php' ?>
		</div>
		
		<div id="TextArea">
		
			<h1>News</h1>
			
			<h2>svn.openehr.org turned off</h2>
			<h6>1. May 2009 | from: Thomas Beale</h6>
			
			<br/>
			<p>The old URL http://svn.openehr.org has been turned off; use http://www.openehr.org/svn. If you have an error when doing an SVN operation on a local repository, check if this is the initial part of the URL. If it is, do a Subversion 'relocate' operation - in TortoiseSVN, this is very easy - right click on the repository root &gt; Tortoise SVN &gt; Relocate. You can then enter the new URL, according to the following:</p>
			<p>&nbsp;&nbsp;&nbsp; if the old URL was http://svn.openehr.org/repo_name[/some_path...]</p>
			<p>then change it to:</p>
			<p>&nbsp;&nbsp;&nbsp; http://www.openehr.org/svn/repo_name[/some_path...]</p>
			<p>i.e.:</p>
			<ul>
			<li>1. change the leading 'svn' to 'www'</li>
			<li>2. insert '/svn' after 'www.openehr.org'</li>
			</ul>
			<p>based on tests so far, this should resolve any access problems.</p>
			
						
			<br/>
			<a href="../news">>> Back to News</a>
			
		</div>
			
	</div>
	
	<div id="BottomMenu">
		<?php include '../../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
		<?php include '../../panel/bottompanel.php' ?>	
	</div>

</div>
	
<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>