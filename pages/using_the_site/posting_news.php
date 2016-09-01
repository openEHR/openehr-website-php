<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Posting News';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>News posting is available to openEHR Foundation officers, Industry Partners and other authorised individuals.</p>

			<h2>News Categories</h2>
			<p>All news items are classified as one of the following categories:</p>
			<ul>
				<li><em>Industry News</em> - news from the industry (companies, government, standards) connected to the openEHR. </li>
				<li><em>Community News</em> - news from the openEHR community about work on non-commercial activities connected with openEHR. This includes news about openEHR projects and technical services.</li>
				<li><em>Foundation News</em> - news posted by openEHR Board members about current work and future development of openEHR Foundation. </li>
				<li><em>Events</em> - information about conferences, workshops, presentations and other events connected with openEHR. </li>
				<li><em>Releases</em> - information about new versions of openEHR tools, standards and specifications. </li>
			</ul>

			<h2>Posting Guidelines</h2>
			<p>When posting news please ensure that information is current and wherever possible link to the original news source.</p>

			<p>Try to post information that you think the community will find interesting, as concisely as possible. </p>

			<p>News may not be directly promotional or advertorial, although we are happy that products, services and events are mentioned if relevant to the community.</p>

			<p>Do not publish company-specific news, press releases or other directly promotional material unless of relevant interest to the community.</p>

			<p>Event promotion if of interest to the community as a whole is permitted.</p>

			<p>Surveys are not permitted in news.</p>

			<p>Do not post anything that would cause you problems by being made public.</p>

			<p>News is not intended for daily postings and we would ask that you normally post news no more than once or twice a month, where perhaps several items of interest can be put into one posting.</p>

			<h2>Frequently Asked Questions</h2>
			<h3>How do I post news?</h3>
			<p>In order to post news you need to send us a note of the email address you would like to use to post news. Send this information to comms@openehr.org.  We will send you a password and you should be able to login using the email you provided and the password we send you.</p>
			<h3>Where is the login page? </h3>
			<p>You can login <a href="http://www.openehr.org/login/index.php">here</a> </p>
			<h3>I can't remember my username/password! What can I do? </h3>
			<p>Please contact <a href="mailto:comms@openehr.org">comms@openehr.org</a> and will sort this for you.</p>
			<h3>Who do I contact if I feel news is being used inappropriately? </h3>
			<p>Please contact <a href="mailto:comms@openehr.org">comms@openehr.org</a> who will pass your concerns to the Management Board.</p>
				
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
