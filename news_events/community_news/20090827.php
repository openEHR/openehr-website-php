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
			
			<h2>OSHIP gets CLIPS decision support engine</h2>
			<h6>27. August 2009 | from: Tim Cook</h6>
			<br/>
			
			<p>The Open Source Health Information Platform (OSHIP) has integrated the "gold standard" forward chaining inference engine CLIPS in order to support complex decision support requirements.</p>
			<p>OSHIP is based on the Python reference implementation of the openEHR specifications; adding proven open source components to provide a web services based development base for any type of healthcare application.</p>
			<p>OSHIP is heavily internationalized. There are 12 translations started with 4 major ones almost completed. OSHIP uses WSGI web services, it is event driven, it has transparent persistence, it can be complimented with any Python or C module as required. Many more features.</p>
			<p>OSHIP source code governance is based on the stable trunk principle. All work is carried out in task specific branches by individuals or small teams. They can request a merge to the trunk at any time. The latest trunk is merged into the branch then the branch is peer-reviewed by two or more developers outside of the team. If the peer reviewers find that the branch meets quality control standards then the OSHIP management team is notified that the specific revision number of the branch is qualified to be merged to the trunk.</p>
			<p>Planning for OSHIP is managed using the Blueprints on Launchpad in conjunction with the openEHR.org Wiki. The Blueprints and the code branches are linked on Launchpad as well as the Bug Reports. This provides complete continuity for the project. There is a visual dependency view of all Blueprints available that represent the series goals as well. This provides every developer with the ability to see how and where they fit into the project plan.</p>
			<p>Though OSHIP is very functional at this point. There is some code review that needs to be done due to an update in the openEHR specifications as well as some re-factoring in some of the underlying components has kept them in a formal alpha state. We expect to move into a 1.0 beta very soon and a 1.0 final almost immediately afterwards.</p>
			<p>If you are interested in moving into the world of truly, semantically interoperable healthcare applications then we invite you to try out the OSHIP demos and begin learning how to build the apps you need. Join the OSHIP Community by going to https://launchpad.net/oship and following the instructions.</p>
			<p>If you do not have a Bazaar client and just want to try installing OSHIP anyway we have provided a zip file of the source code on our SourceForge site https://sourceforge.net/projects/oship/files/ you will still need to follow the installation instructions at https://answers.launchpad.net/oship/+faqs for your operating system (we need help from Windows users) but instead of using the bzr branch command; unzip the file you retrieved from SourceForge into your virtual environment and then continue. Again, if you have any problems at all you can join the mailing list by joining the community on Launchpad and you will automatically become a member of the list.</p>
			<p>I look forward to your participation.</p>
			<br/>
			
			<p>Kind Regards<br/>
			Tim Cook on behalf of the entire OSHIP Team</p>
			
			<br/>
			<a href="/news_events/community_news/">>> Back to <?php echo "$PageName";?></a>
			
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