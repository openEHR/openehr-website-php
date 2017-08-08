<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'ADL Workbench Home';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------ -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>ADL Workbench release 2.0.6, 10 Mar 2017</h2>
			<p><a href="release_notes">Release notes</a> - <a href="https://openehr.atlassian.net/browse/AWBPR" target="_blank">Report an issue</a> - <a href="https://openehr.atlassian.net/browse/AWB/?selectedTab=com.atlassian.jira.jira-projects-plugin:summary-panel" target="_blank">Development Project (Jira)</a></p>
         
			<h2>What is the Workbench?</h2>
			<p>The ADL Workbench (AWB) is a compiler and IDE for working with the archetypes and templates written in the Achetype Definition Language (ADL), and based on any reference model, including openEHR, ISO 13606 and CIMI. The <a href="http://www.openehr.org/programs/specification/releases/currentbaseline#ADL2">latest version of the archetype formalism</a> makes it one of the most powerful domain modelling tools available. Create models of clinical content (archetypes), data set definitions (templates), add terminology bindings and translations and then visualise and generate fully compiled output form in ADL, JSON, XML, YAML or ODIN.</p>

			<p><a href="browsing_and_compiling">Screenshots</a></p>

			<h2>News</h2>
			<ul>
				<li>GitHub integration and new smart archetype repository management</li>
				<li><a href="http://opencimi.org">CIMI</a> archetypes and templates supported</li>
				<li>Many new visualisation and usability features</li>
				<li>New governance meta-data supported</li>
				<li>New tuple syntax replaces domain specific syntax for quantities, ordinals etc (<a href="http://www.openehr.org/wiki/display/ADL/Tuple+Proposal">wiki</a>)</li>
				<li>New internal coding system uses id-codes, at-codes and ac-codes (<a href="http://www.openehr.org/wiki/display/ADL/Id-codes+unification+proposal">wiki</a>)</li>
				<li>Value sets now defined in archetype terminology (<a href="http://www.openehr.org/wiki/display/ADL/Value+sets+proposal">wiki</a>)</li>
				<li>All code bindings are IHTSDO URIs</li>
				<li>Standard lifecycle states (<a href="http://www.openehr.org/wiki/display/ADL/Knowledge+Artefact+Identification">wiki</a>)</li>
				<li>Fully independent of specific reference models - can load any RM</li>
				<li>ADL 1.4 archetypes fully converted to ADL 2, including with extraction and synthesis of value sets</li>
				<li>Namespaced archetype identifiers (<a href="http://www.openehr.org/wiki/display/ADL/Knowledge+Artefact+Identification">wiki</a>)</li>
			</ul>
          
			<h2>Roadmap</h2>
			<ul>
				<li>Support for ADL 1.4 OPT generation</li>
				<li>Support for ADL 2 template form visualisation</li>
				<li>Live terminology service integration</li>
				<li>Full visual editing</li>
			</ul>

		  
			<h2>Download</h2>

<!--
			<h3 id="currentrelease">Current Release</h3>
            <table class="TableBasic">
				<tbody>
					<tr>
						<th> Platform </th>
						<th> Build</th>
						<th> Date</th>
						<th> Executable</th>
						<th> Installation Notes</th>
						<th> Integrity</th>
					</tr>
					<tr>
						<td> Windows (32-bit)</td>
						<td> 2.0.5.2717</td>
						<td> 4 Dec 2014</td>
						<td> <a href="/download_files/adl_workbench/adl_workbench_2.0.5-windows_32bit.exe">.exe installer</a></td>
						<td><br/> </td>
						<td> MD5: 83e8ea8368e5ce2515035a3accf24b5c<br/> SHA1: b93661faace4adca2652a37c67cfdb79af5047b1</td>
					</tr>
					<tr>
						<td> Mac OS X 10.9 (Mavericks)<br/></td>
						<td> 2.0.5.2717</td>
						<td> 4 Dec 2014</td>
						<td> <a href="/download_files/adl_workbench/adl_workbench_2.0.5-macosx_mavericks.dmg">.dmg installer</a></td>
						<td> <a href="installation_notes#mac">here</a> <br/></td>
						<td> MD5: 4cf322e32437e8fc0848532057df5651<br/> SHA1: 7a65635bbdf5567a5ae099b8b30c9b15a49b3219</td>
					</tr>
					<tr>
						<td>Linux (32-bit Intel)<br/></td>
						<td> 2.0.5.2717</td>
						<td> 4 Dec 2014</td>
						<td> <a href="/download_files/adl_workbench/adl_workbench_2.0.5-linux_32bit.tar.bz2">.tar.bz2 archive</a></td>
						<td> <a href="installation_notes#linux">here</a></td>
						<td> MD5: 7f0c23068a9c439fbf79bdb73292643c<br/> SHA1: 3bd53ee3732666e497746fb57f6207d152812fb2</td>
					</tr>
				</tbody>
            </table>
-->			
			<h3 id="latest_build">Latest Builds</h3>
            <table class="TableBasic">
				<tbody>
					<tr>
						<th> Platform </th>
						<th> Build</th>
						<th> Date</th>
						<th> Executable</th>
						<th> Notes</th>
					</tr>
					<tr>
						<td> Windows (64-bit)</td>
						<td> 2.0.6.2931</td>
						<td> 31 Jul 2017</td>
						<td> <a href="/download_files/adl_workbench/adl_workbench_2.0.6.2931-windows_64bit.exe">.exe installer</a></td>
						<td> Correct ADL converter regex bug.</td>
					</tr>
					<tr>
						<td> Mac OS X 10.11 (Yosemite)<br/></td>
						<td> 2.0.6.2926-alpha</td>
						<td> 14 Mar 2017</td>
						<td> <a href="/download_files/adl_workbench/adl_workbench_2.0.6.2926-macosx_el_capitan.dmg">.dmg installer</a></td>
						<td> Improve output of adlc.</td>
					</tr>
					<tr>
						<td>Linux (32-bit Intel)<br/></td>
						<td> 2.0.6.2784-alpha</td>
						<td> 02 Feb 2015</td>
						<td> <a href="/download_files/adl_workbench/adl_workbench_2.0.6.2784-alpha-linux_32bit.tar.bz2">.tar.bz2 archive</a></td>
						<td> Rewritten export function (Archetypes>Export); faster XML export; single-file templates.</td>
					</tr>
				</tbody>
            </table>
			
			<h2>Learn how the workbench works</h2>
			<iframe width="560" height="315" src="http://www.youtube.com/embed/videoseries?list=PLhWi0RtmG26U6PGezBrDD2QPeQL8tQYTZ&amp;hl=en_GB" frameborder="0" allowfullscreen></iframe>
          
			<h3>Source Code</h3>
			<p>The source code can be accessed from the <a href="https://github.com/openEHR/adl-tools/wiki" target="_blank">adl-tools GitHub home page</a>.</p>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
