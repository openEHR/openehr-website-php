<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'ADL Workbench Home';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>ADL 1.5 Workbench beta release 9, 9 April 2013</h2>
			<p><a href="release_notes">Release notes</a> - <a href="http://www.openehr.org/issues/browse/AWBPR" target="_blank">Report an issue (Jira)</a> - <a href="http://www.openehr.org/issues/browse/AWB" target="_blank">Development Project (Jira)</a></p>
         

			<h2>News</h2>
			<ul>
				<li>This release adds AOM / RM mappings for AOM built-in syntax for coded text, ordinals and quantities;</li>
				<li>Numerous other improvements.</li>
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
				<td> Windows</td>
				<td> beta 9</td>
				<td> <a href="https://github.com/openEHR/downloads/blob/master/windows/adl_workbench/ADLWorkbenchInstall.exe?raw=true">.exe installer</a></td>
				<td><br/> </td>
			</tr>
			<tr>
				<td> Mac OS X 10.7 (Lion)<br/></td>
				<td> beta 8</td>
				<td> <a href="https://github.com/openEHR/downloads/blob/master/mac_osx/adl_workbench/ADL%20Workbench%20for%20Lion%20i386.dmg?raw=true">.dmg installer</a></td>
					<td> <a href="installation_notes#mac">here</a> <br/></td>
            </tr>
            <tr>
					<td> Mac OS X 10.8 (Mountain Lion)<br/></td>
					<td> beta 9</td>
					<td> <a href="https://github.com/openEHR/downloads/blob/master/mac_osx/adl_workbench/ADL%20Workbench%20for%20Mountain%20Lion%20i386.dmg?raw=true">.dmg installer</a></td>
				<td> <a href="installation_notes#mac">here</a> <br/></td>
			</tr>
			<tr>
				<td>Linux (32-bit Intel)<br/></td>
				<td>beta 9</td>
				<td> <a href="https://github.com/openEHR/downloads/blob/master/linux/adl_workbench/adl_workbench-linux.tar.bz2?raw=true">.tar bz2 archive</a></td>
				<td> <a href="installation_notes#linux">here</a></td>
			</tr>
			<tr>
				<td>Linux (32-bit Intel)<br/></td>
				<td>beta 10</td>
				<td> <a href="https://github.com/openEHR/downloads/blob/master/linux/adl_workbench/adl_workbench-linux-beta10.tar.bz2?raw=true">.tar bz2 archive</a></td>
				<td> <a href="installation_notes#linux">here</a></td>
			</tr>
			</tbody>
            </table>
			
			<h3>Source Code</h3>
			<p>The source code can be accessed from the <a href="https://github.com/openEHR/adl-tools/wiki" target="_blank">adl-tools GitHub home page</a>.</p>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>
