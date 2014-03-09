<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'ADL Workbench Home';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>ADL 1.5 Workbench beta release 10, 5 Mar 2014</h2>
			<p><a href="release_notes">Release notes</a> - <a href="http://www.openehr.org/issues/browse/AWBPR" target="_blank">Report an issue (Jira)</a> - <a href="http://www.openehr.org/issues/browse/AWB" target="_blank">Development Project (Jira)</a></p>
         
			<h2>What is the Workbench?</h2>
			<p>The ADL Workbench (AWB) is an compiler and IDE for working with the archteypes and templates written in the Achetype Definition Language (ADL). The latest version of ADL makes it <b>one of the most powerful domain modelling formalisms available</b>. Create models of clinical content (archetypes), data set definitions (templates) and then visualise and generate fully compiled output form in ADL, JSON, XML, YAML or ODIN.</p>

			<h2>News</h2>
			<ul>
				<li>New tuple syntax replaces domain specific syntax for quantities, ordinals etc (<a href="http://www.openehr.org/wiki/display/spec/ADL+1.5+Power+Syntax+Proposals">wiki</a>)</li>
				<li>New internal coding system uses id-codes, at-codes and ac-codes (<a href="http://www.openehr.org/wiki/pages/viewpage.action?pageId=49053703">wiki</a>)</li>
				<li>Value sets now defined in archetype terminology (<a href="http://www.openehr.org/wiki/display/spec/ADL+1.5+-+where+to+define+value+sets">wiki</a>)</li>
				<li>All code bindings are IHTSDO URIs</li>
				<li>Fully independent of specific reference models - can load any RM</li>
				<li>ADL 1.4 archetypes fully converted to 1.5, including with extraction and synthesis of value sets</li>
				<li>Namespaced archetype identifiers (<a href="http://www.openehr.org/wiki/display/spec/Development+and+Governance+of+Knowledge+Artefacts">wiki</a>)</li>
			</ul>
          
		  
			<h2>Learn how the workbench works</h2>
			<iframe width="560" height="315" src="http://www.youtube.com/embed/videoseries?list=PLhWi0RtmG26U6PGezBrDD2QPeQL8tQYTZ&amp;hl=en_GB" frameborder="0" allowfullscreen></iframe>
          
			<h2>Download</h2>
			
			<h3>Executables</h3>
            <table class="TableBasic">
				<tbody>
					<tr>
						<th> Platform </th>
						<th> Build</td>
						<th> Executable</th>
						<th> Installation Notes</th>
					</tr>
					<tr>
						<td> Windows (32-bit)</td>
						<td> beta 10</td>
						<td> <a href="/download_files/adl_workbench/adl_workbench_1.5beta10-windows_32bit.exe">.exe installer</a></td>
						<td><br/> </td>
					</tr>
					<tr>
						<td> Mac OS X 10.9 (Mavericks)<br/></td>
						<td> beta 10</td>
						<td> <a href="/download_files/adl_workbench/adl_workbench_1.5beta10-macosx_mavericks.dmg">.dmg installer</a></td>
						<td> <a href="installation_notes#mac">here</a> <br/></td>
					</tr>
					<tr>
						<td>Linux (32-bit Intel)<br/></td>
						<td>beta 10</td>
						<td> <a href="/download_files/adl_workbench/adl_workbench_1.5beta10-linux_32bit.tar.bz2">.tar.bz2 archive</a></td>
						<td> <a href="installation_notes#linux">here</a></td>
					</tr>
				</tbody>
            </table>
			
			<h3>Source Code</h3>
			<p>The source code can be accessed from the <a href="https://github.com/openEHR/adl-tools/wiki" target="_blank">adl-tools GitHub home page</a>.</p>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>
