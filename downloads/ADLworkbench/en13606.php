<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'EN 13606';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>Overview</h2>
			<p>A draft version of the EN13606-1 schema for the AWB has been developed, along with some example archetypes. This is intended to show how ADL / AOM 1.5 functions for archetypes built on a different reference model, and also to enable organisations working with EN13606 to have a more formal tool basis for developing archetypes, templates and generally migrating to ADL/AOM 1.5. The entire EN13606 model can be viewed in the AWB RM schema and Class tools, and comparisons can be made with classes in the openEHR reference model.</p>
			
			
			<h2>EN13606 schema for AWB</h2>
			<p>An initial schema for EN13606-1 has been included in the set of RM schemas used by AWB. This was produced by Christoph Rinner (Medical University of Vienna) and Thomas Beale (Ocean Informatics). The definitive copy of this resides in the openEHR <a href="https://github.com/openEHR/reference-models/tree/master/models/ISO_13606/2008/BMM" target="_blank">openEHR reference-models GitHub repository</a>. If you are interested in being added to the committers list to work on this schema, please email webmaster@openehr.org.</p>
			<a href="images/rm_schema_en13606.png"><img border="0" alt="RM Schema EN13606 schema view" src="images/rm_schema_en13606.png" width="150"/></a>
			
			
			<h2>Comparison of 13606 and openEHR Classes</h2>
			<p>The entire EN13606 model can be viewed in the AWB RM schema and Class tools, and comparisons can be made with classes in the openEHR reference model.</p>
			<a href="images/rm_schema_tool_duplex_classes.png"><img border="0" alt="RM Schema Tool duplex class view" src="images/rm_schema_tool_duplex_classes.png" width="150"/></a>
			
			
			<h2>EN13606 archetypes</h2>
			<p>Some initial 13606 archetypes have been created <a href="https://github.com/openEHR/adl-archetypes/tree/master/Example/EN13606" target="_blank">here</a> in the adl-archetypes Github repository. These are currently purely experimental and unreviewed.</p>

<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>