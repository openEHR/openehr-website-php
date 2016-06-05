<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Publicaciones@Zotero';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p><a href="https://www.zotero.org/" target="_blank">Zotero</a> is a reference manager which is freely available for which we have set up a group repository for openEHR-related publications and other related material (e.g. presentations, blogs, videos and more).</p>
			<p>The link below takes you to the Zotero web-based repository where you can browse and search bibliographic information. This generally does not include actual PDFs due to copyright restrictions, but full texts can be uploaded where copyright allows.</p>
			<p>The collection is organised in categories – with the first three being:</p>
			<ol>
				<li>Foundational</li>
				<li>Theses and dissertations</li>
				<li>Introduction-Primers</li>
			</ol>
			<br/>
			<p>You can do much more than online browsing with Zotero: you can use the Zotero application to locally manage a collection and also edit citations and create reference lists via browser plugins and word processors. To do this, Zotero is available as a <a href="https://www.zotero.org/download/" target="_blank">FireFox plugin</a>, or else as a <a href="https://www.zotero.org/download/" target="_blank">standalone desktop version</a>, for which connectors to Chrome, LibreOffice etc are available. There are also apps for all phone and tablet platforms.</a>
			<p>The openEHR collection at Zotero is curated carefully and on an almost daily basis – so if you can’t find a particular paper or you think an openEHR-related resource is missing, please notify Koray Atalag <a href="mailto:koray.atalag@openehr.org">by email</a>. If you have legitimate access to paywalled journal content via your university or organisation you can also ask to be added as a member so you can gain access to full text.</a>
			<p>We hope you’ll find this resource helpful and also help us better curate it by letting us know of new material.</p>
			<p>Click below to go to the Zotero openEHR publications library.</p>
			<a href="https://www.zotero.org/groups/openehr/items/order/dateModified/sort/desc" target="_blank"><img src="/files/getting_involved/zotero_logo.png" style="width:150px"></a>

<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_footer.php');?>
