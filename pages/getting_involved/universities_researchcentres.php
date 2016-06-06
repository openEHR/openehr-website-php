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
			<p>openEHR research papers and resources are managed online in Zotero. See the <a href="/resources/zotero">openEHR Zotero page</a>.</p>

			<h2>Research opportunities</h2>
			<p>Below are some of the areas that represent good opportunities for academic research:</p>
			<ul>
				<li>Clinical Guidelines </li> 
				<li>Querying in archetype-based systems </li>
				<li>Generating software artefacts from ADL templates </li>
				<li>Efficient persistence </li>
				<li>Legacy data integration </li>
				<li>REST interfaces to archetyped data </li>
			</ul>
			<a href="/files/getting_involved/universities_research.png"><img src="/files/getting_involved/universities_research.png" alt="openEHR Ecosystem - Universities / Research" title="openEHR Ecosystem - Universities / Research" class = "imgMiddle width50"/></a>

			<h2>How openEHR works for others</h2>
			<p>For list of universities and centres which are working and contributing to openEHR see <a href="/who_is_using_openehr/academic_research">who is using openEHR</a>.</p>
					
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
