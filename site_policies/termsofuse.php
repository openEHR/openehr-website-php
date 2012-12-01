<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title>openEHR - Terms of Use</title>
	<?php include '../panel/headpanel.php' ?>
</head>


<body>

<div id="MainFrame">
	
	<div id="TopPanel">
	<?php include '../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu" style="text-align:left">
		<div class="nav">
   		<?php include '../menu/topmenu.php' ?>
		</div>
	</div> 

	<div id="MainArea">
	
		<div id="SideMenu">
		<?php include 'menu/sitepoliciesmenu.php' ?>
		</div>
		
		<div id="TextArea">
			
			<h1>Terms of Use</h1>
			<h2>Introduction</h2>
			<p>Welcome to www.openehr.org (for further reference "the website").
			The openEHR Foundation owns the website. You may access and use the website if you accept the terms and conditions (for futher reference "the terms") set out below.
			If you do not accept the terms and conditions please do not access and use the website.</p>
			
			
			<h2>Changes to terms and conditions</h2>
			<p>The openEHR Foundation may make changes to the website, including these terms, at any time.
			You will have to accept the amended terms and conditions after we put the changes online.</p>
			
			
			<h2>Website's scope and structure</h2>
			<p>Under website's scope we understand all pages and applications accessible under http://www.openehr.org domain, regardless the graphical
			apperance and implemented technology (e.g. http://www.openehr.org/wiki/; http://openehr.org/knowledge/; http://www.openehr.org/svn/; http://lists.openehr.org/mailman/; etc.). 
			The terms of use are applied to whole scope of website.</p>
			<p>You may access most areas of the website without registering with us. Certain activities on the website (e.g. editing wiki) are possible only if you register with us.</p>

			
			<h2>Using the website</h2>
			<p>For non-commercial use, including personal use, or for use by an educational institution, a not-for-profit organisation or a public sector body, you may copy,
			download or print off copies of the materials, information, data and other content included on the website. You will need to obtain permission in writing from openEHR Foundation
			before you make any other use of content of the website.</p>
			<p>You are not permitted to create unauthorized framing of the website. No part of the website can be reproduced or stored in any other website
			or included in any electronic retrieval system without prior written permission of openEHR Foundation.</p>

			
			<h2>Limks to other websites</h2>
			<p>Links to third party websites on the website are provided solely for your convenience. If you use these links, you leave openEHR website. We have not reviewed all of
			these third party websites and do not control and are not responsible for these websites or their content or availability. We do not accept any responsibility
			for any third party website.</p>

			
			<h2>Website access</h2>
			<p>While we endeavour to ensure that the website is normally available 24 hours a day, we shall not be liable if for any reason the website is unavailable at
			any time or for any period. Access to the website may be suspended temporarily and without notice in the case of system failure,
			maintenance or repair or for reasons beyond our control.</p>
			
			
			<h2>Disclaimer</h2>
			The openEHR Foundation provides medical information for use as information or for educational purposes.
			We do not warrant that information we provide will meet your medical requirements.</p>
			<p>While we endeavour to ensure that the information on the website is correct, we do not warrant the accuracy and completeness of the material on the
			website. Some materials on the website may be out of date, and we make no commitment to update such materials.</p>
			<p>We do not give any commitments or accept any liability to you in respect of website's content provided by other users of the website or third parties.</p>

		</div>
			

	</div>

	<div id="BottomMenu">
	<?php include '../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
	<?php include '../panel/bottompanel.php' ?>
	</div>

</div>
	
<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>