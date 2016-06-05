<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'IP and Licensing';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>Copyright</h2>
			<p>Artefacts produced by the Software Program are copyrighted to the openEHR Foundation. This establishes the Foundation to be the owner of the 'moral rights' to the artefacts, on behalf of all the contributors,
			and for the safety of the user community.</p>
			
			<h2>Attribution</h2>
			<p>The contributors to an artefact are recognised in the contributor's list section in the license block.</p>
			
			<table class="TableBasic">
			<tbody>
			<tr>
				<th>Artefact type</th>
				<th>License for use</th>
				<th>Comments</th>
			</tr>
			<tr>
				<td><em>Source code</em></td>
				<td><a href="http://www.apache.org" target="_blank"><img src="http://www.apache.org/images/feather-small.gif" height="25px"/></a><br/>
				<a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache 2 License</a></td>
				<td>Computable artefacts are licensed in the same way as software, using the Apache license, which is widely accepted and industry friendly.</td>
			</tr>
			<tr>
				<td><em>Documentation</em></td>
				<td><a href="http://creativecommons.org/licenses/by-nd/3.0/deed.en_GB" target="_blank"><img src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png"/></a><br/>
				WORK by <a href="http://www.openEHR.org">openEHR Foundation</a> is licensed under a
				<a href="http://creativecommons.org/licenses/by-sa/3.0/" target="_blank">Creative Commons Attribution-ShareAlike 3.0 Unported License</a>.</td>
				<td>Software documentation is intended for wide use, and improvement. Translation and re-use are encouraged.</td>
			</tr>
			</tbody>
			</table>
		
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
