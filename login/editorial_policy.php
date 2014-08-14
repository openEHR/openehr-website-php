<?php
	// The user is redirected here from user_home.php.

	session_start();  //Start the session
	
	// If no value is present, redirect the user:
	if (!isset($_SESSION['user_id'])) {

		// Need the functions to create an absolute URL:
		require_once ('login_functions.php');
		$url = absolute_url();
		header("Location: $url");
		exit(); // Quit the script.
	}
?>

<?php
$PageName = 'Editorial Policy';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header_english.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->

			<h1><?php echo $PageName;?></h1>
			
			<p>Welcome! You have been given permission to create and edit the content in openEHR News &amp; Events section. To maintain the consistency of the content across the pages, please follow these guidelines. Before you start creating and editing news items, make sure JavaScript is enabled in your browser.</p>
			
			<h2>News Categories</h2>
			<p>You can add the content in the five categories:</p>
			<ul>
				<li>Industry News - news from the industry (companies, government, standards) connected to the openEHR. If there is press release or article containing more information, please provide the link in the 'Other resources' part of the form.</li>
				<li>Community News - news from the openEHR community members about work on non-commercial activities connected with openEHR they are involved. There will be also news about openEHR projects and technical services.</li>
				<li>Foundation News - news about the current work and future development of openEHR Foundation. Usually posted by openEHR Board or one of its members.</li>
				<li>Events - information  about conferences, workshops, presentations and other events connected with openEHR. Please provide date and place information, when adding news items in this category. If you know about event in advance, please provide information for other openEHR members, you can add more information about the event after.</li>
				<li>Releases - information about new versions of openEHR tools, standards and specifications. Please provide the links to the tools and specification pages when it is relevant.</li>
			</ul>
			
			<h2>Adding and editing news items</h2>
			<p>The news items you will create will be added directly on the live openEHR website, so please make sure the information are relevant and correct before you posting your news item. You can always edit your news items later in the section <a href="my_news">My News Items</a>. If you later find out that your news item have stopped being relevant, please contact the <a href="mailto:webmaster@openehr.org">web administrator</a> for removal.</p>
			<p>The mandatory fields for every news item are 'News category', 'News title', 'News summary' and 'News text'. Use the field 'Other resources' when relevant and field 'Date and place' for events.</p>
			
			<h2>Adding and editing links</h2>
			<p>Adding the links to your news items enhances the information value of your news items. You can crosslink information on the openEHR website or link to different sites. When you are providing the links to different sites (the ones with different design), please set the 'New window' option of the Target.</p>
			<p>If you find out that link provided in your news item is not live any more, please remove it, or replace it with more relevant link.</p>
			
			<h2>Editing and removing content by web administrator</h2>
			<p>Your web content can be edited or removed by web administrator in the case of irrelevant content, errors in the news items, inappropriate content, and content which is damaging for openEHR Foundation. You will be consulted about content changes by web administrator.</p>
			
			<h2>Your account</h2>
			<p>Please take care of the login information to your account. Change your password from the one provided by administrator. We recommend you to not use the same password to openEHR account as to your other accounts. In case you decide to change your email, please inform <a href="mailto:webmaster@openehr.org">web administrator</a> immediately, since we will answer the request for new password only from registered email.</p>
			<p>Please do not provide your login information to third parties. You can be hold legally responsible for malicious activities coming from your account</p>
			<p>If you decide that you don't want to actively edit content of openEHR news items anymore, please inform <a href="mailto:webmaster@openehr.org">web administrator</a>. However, openEHR Foundation has the right to keep the content created by you on its website.</p>
			
			<h2>Updates of editorial policy</h2>
			<p>This editorial policy can be updated in the future. You will be informed about the updates on you User Home page.</p>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>