<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Universities / Research';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">

<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>Current openEHR Research</h2>
			<p>Click below to go to the Zotero openEHR publications library.</p>
			<a href="https://www.zotero.org/groups/openehr/items" target="_blank"><img src="/files/getting_involved/zotero_logo.png" style="width:100"></a>

			<h2>Research opportunities</h2>
			<p>Below are some of the areas that represent good opportunities for academic research.</p>
			<ul>
				<li>Clinical Gudelines </li>
				<li>Querying in archetype-based systems </li>
				<li>Generating software artefacts from ADL templates </li>
				<li>Efficient persistence </li>
				<li>Legacy data integration </li>
				<li>REST interfaces to archetyped data </li>
			</ul>

			<h2>How openEHR works for others</h2>
			<p>For list of universities and centres which are working and contributing to openEHR see <a href="/who_is_using_openehr/academic_research">who is using openEHR</a></p>
					
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
