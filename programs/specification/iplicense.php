<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'IP and Licensing';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>Introduction</h2>
			<p>The Specification Program generates artefacts which are intended to be freely usable by all stakeholder types, including commercial enterprises. Controlled copyright, and open source and content licenses are used to achieve these aims.</p>
			<p>The openEHR specifications and their computable expressions are openly published and free to use for all categories of use, both commercial and non-commercial.Copyright and licenses are used to protect these artefacts for ongoing open and free use by the community.</p>
			
			<h2>Artefact Categories</h2>
			<p>From the IP point of view, there are the following kinds of artefact:</p>
			<ul>
				<li><em>Documentary specifications - published format</em>, in one or both of the following forms:
				<ul>
					<li>HTML (rendered format on a wiki),</li>
					<li>PDF or some other immediately viewable format;</li>
				</ul>
				</li>
				<li><em>Documentary specifications - source format</em>: depending on the lifecycle stage:
				<ul>
					<li>wiki source;</li>
					<li>for the PDF format specifications, it is currently the FrameMaker source files (being converted to DITA format);</li>
				</ul>
				</li>
				<li><em>Computable artefacts</em>: any recognised computable or formal artefact, including but not limited to:
				<ul>
					<li>XMI files of UML models;</li>
					<li>UML tool sources where feasible;</li>
					<li>XSDs of the data view of relevant specifications;</li>
					<li>WSDLs of service specifications;</li>
					<li>code skeletons of APIs;</li>
					<li>code examples.</li>
				</ul> 
				</li>
				<li><em>Educational materials</em>: including:
				<ul>
					<li>slideshow presentations in source (e.g. Microsoft .ppt, .pptx) format or published format, typically PDF</li>
					<li>video presentations in a recognised movie format, typically a collection of files e.g. .swf, .mpeg, .html etc.</li>
				</ul>
				</li>
			</ul>
			
			
			<h2>IP Rights</h2>
			<h3>Copyright</h3>
			<p>Artefacts of all of the above types produced by the Specification Program are copyrighted to the openEHR Foundation. This establishes the Foundation to be the owner of the 'moral rights' to the artefacts, on behalf of all the contributors, and for the safety of the user community.</p>
			
			<h3>Attribution</h3>
			<p>The contributors to an artefact are recognised in an attribution section of the work. For documentary specifications, this is the revision history of every specification. For computable artefacts, this is the contributor's list section in the license block.</p>
			
			<h3>Licensing</h3>
			<p>A standard license is attached to each artefact, explicitly defining rights for use. Without this, the definition of usage rights reverts directly to the copyright law of some jurisdiction, or one of the international copyright conventions.</p>
			<br/>
			<p>The license assignments are as follows:</p>
			
			<table class="TableBasic">
			<tbody>
			<tr>
				<th> Artefact type</th>
				<th> License for use</th>
				<th> Comments</th>
			</tr>
			<tr>
				<td> <em>Specification document published files </em> </td>
				<td> <a rel="license" href="http://creativecommons.org/licenses/by-nd/3.0/deed.en_GB"><img alt="Creative Commons Licence" style="border-width:0" src="http://i.creativecommons.org/l/by-nd/3.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">openEHR Specifications</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.openEHR.org" property="cc:attributionName" rel="cc:attributionURL">openEHR Foundation</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nd/3.0/deed.en_GB">Creative Commons Attribution-NoDerivs 3.0 Unported License</a>.<br />Permissions beyond the scope of this license may be available <a xmlns:cc="http://creativecommons.org/ns#" href="/programs/specification/iplicense" rel="cc:morePermissions">here</a>. </td>
				<td> <p>The use of the CC-BY-ND license allows for public sharing, republishing, and unencumbered commercial use. It protects users of the specifications from unknown and/or local modifications, tampering etc being made outside of the Foundation's own open processes. This is the same thing that W3C does with its <a href="http://www.w3.org/Consortium/Legal/2002/copyright-documents-20021231">document license</a>.</p>
										<p>The CC 'SA' (Share-alike) option was also considered, but rejected for two reasons. Firstly the openEHR Specifications are considered definitive works of the Foundation, not interpretations of anything else. Their contents and evolution therefore accurately and correctly reflect the processes of the openEHR community itself. Secondly, the integrity of specifications on which healthcare software and systems are directly based is considered of paramount importance to patients and clinical professionals.</p></td>
			</tr>
			<tr>
				<td> <em>Specification document source files </em> </td>
				<td> <a rel="license" href="http://creativecommons.org/licenses/by-nd/3.0/deed.en_GB"><img alt="Creative Commons Licence" style="border-width:0" src="http://i.creativecommons.org/l/by-nd/3.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">openEHR Specifications</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.openEHR.org" property="cc:attributionName" rel="cc:attributionURL">openEHR Foundation</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nd/3.0/deed.en_GB">Creative Commons Attribution-NoDerivs 3.0 Unported License</a>.<br />Permissions beyond the scope of this license may be available <a xmlns:cc="http://creativecommons.org/ns#" href="/programs/specification/iplicense" rel="cc:morePermissions">here</a>. </td>
				<td> <br/><br/><br/>ibid <br/><br/><br/></td>
			</tr>
			<tr>
				<td> <em>Specification computable artefacts</em> </td>
				<td> <img src="http://www.apache.org/images/feather-small.gif" style="border: 1px solid black; height:30px;" /><br/>
										<a href="http://www.apache.org/licenses/LICENSE-2.0">Apache 2 License</a></td>
				<td> <br/><br/>Computable artefacts are licensed in the same way as software, using the Apache license, which is widely accepted and industry friendly.<br/><br/></td>
			</tr>
			<tr>
				<td> <em>Educational artefacts </em> </td>
				<td> <img src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png" style="border: 1px solid black" /><br/>WORK by <a href="http://www.openEHR.org">openEHR Foundation</a> is licensed under a
										<a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution-ShareAlike 3.0 Unported License</a>.</td>
				<td> <br/><br/>Educational artefacts are intended for wide use, and improvement, translation and re-use is encouraged. <br/><br/><br/> </td>
			</tr>
			</tbody>
			</table>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>