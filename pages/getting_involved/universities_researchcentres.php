<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Universities / Research';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">

<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>Universities and research centres have a number of basic priorities with respect to health research:</p>
			<ul>
				<li>being able to reuse the information in different stages of research and for different purposes</li>
				<li>being able to share the information across systems</li>
				<li>being able to share some of the information with other research partners</li>
				<li>being able to compute with the health information they create</li>
				<li>being able to integrate multiple software applications and packages without losing meaning - preferably avoiding vendor lock-in</li>
			</ul>
			<a href="/files/getting_involved/universities_research.png"><img src="/files/getting_involved/universities_research.png" alt="openEHR Ecosystem - Privders / Clinicians" title="openEHR Ecosystem - Privders / Clinicians" class = "imgMiddle width50"/></a>
			
			<h2>Current openEHR Research</h2>
			<p>Click below to go to the Zotero openEHR publications library.</p>
			<a href="https://www.zotero.org/groups/openehr/items" target="_blank"><img src="/files/getting_involved/zotero_logo.png" style="width:150px"></a>

			<h2>Research opportunities</h2>
			<p>Below are some of the areas that represent good opportunities for academic research:</p>
			<ul>
				<li>Clinical Gudelines </li>
				<li>Querying in archetype-based systems </li>
				<li>Generating software artefacts from ADL templates </li>
				<li>Efficient persistence </li>
				<li>Legacy data integration </li>
				<li>REST interfaces to archetyped data </li>
			</ul>

			<h2>How openEHR works for others</h2>
			<p>For list of universities and centres which are working and contributing to openEHR see <a href="/who_is_using_openehr/academic_research">who is using openEHR</a>.</p>
					
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
