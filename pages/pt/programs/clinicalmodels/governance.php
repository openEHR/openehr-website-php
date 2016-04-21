<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Governança';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>

			<p>The <a href="http://www.openehr.org/ckm/" target="_blank">openEHR Clinical Knowledge Manager (CKM)</a> is an international, online clinical knowledge resource. It has gathered an active Web 2.0 community of interested and motivated individuals focused on furthering an open and international approach to clinical informatics - an application- and message-independent lingua franca for sharing health information between individuals, clinicians and organisations; between applications, and across regional and national borders. All contributions to CKM is on a voluntary basis, and all CKM content is open source and freely available under a Creative Commons licence.</p>
			<p>The latest release of CKM:</p>
			<ul>
				<li>is a library of clinical knowledge artefacts - currently openEHR archetypes and templates;</li>
				<li>supports the full life cycle management of openEHR archetypes through a review and publication process;</li>
				<li>provides governance of the knowledge artefacts.</li>
			</ul>
			<p>In the near future we anticipate a complementary repository for other related artefacts including terminology subsets.</p>
			<p>The Clinical Knowledge Manager provides the opportunity and means for users interested in modelling clinical content to become participate in the creation and/or enhancement of an international set of archetypes, and these in turn have the potential to provide the foundation for interoperable Electronic Health Records. </p>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>
