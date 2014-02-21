<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'IP and Licensing';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>Copyright</h2>
			<p>Artefacts produced by the Clinical Program are copyrighted to the openEHR Foundation. This establishes the Foundation to be the owner of the 'moral rights' to the artefacts, on behalf of all the contributors, and for the safety of the user community.</p>
			
			
			<h2>Attribution</h2>
			<p>The contributors to an artefact are recognised in a contributors section of the work.</p>
			
			
			<h2>Licensing</h2>
			<p>A standard license is attached to each artefact produced within the Clinical Program.</p>
			<p>The license assignments are as follows:</p>
			
			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT"> Artefact type</th>
				<th class="TableMainT"> License for use</th>
				<th class="TableMainT"> Comments</th>
			</tr>
			<tr>
				<td class="TableMainC"> <b>Archetypes, templates</b> </td>
				<td class="TableMainC"> <img src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png" style="border: 1px solid black" /> <br/>
										WORK by <a href="http://www.openEHR.org">openEHR Foundation</a> is licensed under a <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution-ShareAlike 3.0 Unported License</a>. </td>
				<td class="TableMainC"> The use of the CC-BY-SA license allows for public sharing, republishing and forking of the specifications. This acts as a safeguard against subversion of the openEHR Foundation preventing the community using the specifications in a fair way. <br/>
				</td>
			</tr>
			<tr>
				<td class="TableMainC"> <b>Terminology subsets</b> </td>
				<td class="TableMainC"> <img src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png" style="border: 1px solid black" /> <br/>
										WORK by <a href="http://www.openEHR.org">openEHR Foundation</a> is licensed under a <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution-ShareAlike 3.0 Unported License</a>. </td>
				<td class="TableMainC"> <br/><br/><br/>ibid <br/><br/><br/></td>
			</tr>
			<tr>
				<td class="TableMainC"> <b>Documentation</b> </td>
				<td class="TableMainC"> <img src="http://i.creativecommons.org/l/by/3.0/88x31.png" style="border: 1px solid black" /><br/>WORK by <a href="http://www.openEHR.org">openEHR Foundation</a> is licensed under a <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 Unported License</a>.</td>
				<td class="TableMainC"> <br/><br/>Documentation is intended for wide dissemination. Improvement, translation and re-use are encouraged. <br/><br/><br/> </td>
			</tr>
			</tbody>
			</table>
		
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>