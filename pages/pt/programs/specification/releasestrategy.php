<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Estratégia de Edições';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>Release Identifiers</h2>
			<p>With the advent of Release 1.0 of openEHR, more rigorous change management rules come into play. These are designed to protect developers and users from adverse effects of changes, and to allow them to upgrade in an orderly fashion. Future releases will follow a 3-digit numbering scheme similar to many open source projects, e.g. Apache, using identifiers like 1.0.1 etc. The meaning of a change in each digit is as follows:</p>
			<ul>
				<li>3rd position: used to indicate <em>error corrections and minor additions that do not change the semantics</em>. Thus, Release 1.0.2 is the second error correction release after Release 1.0.</li>
				<li>2nd position: used to indicate <em>significant additions that do not change the semantics</em> of the existing part of the release. Release 1.3.0 would be the 3rd release containing compatible additions to Release 1.0.</li>
				<li>1st position: used to indicate <em>changes to the semantics or large changes</em>. Release 2.0 would contain changes incompatible in some way with Release 1.0, most likely requiring software upgrade and possibly data migration.</li>
			</ul>
			
			<h2>Changes to Documentation</h2>
			<p> Where changes to documentation are made, e.g. due to a request to clarify an explanation, fix a typographical error, a CR will be raised, and the revision number of the affected document(s) will change, but there will not be a new release number.</p>
			
			<h2>Error corrections</h2>
			<p>Where the changes made are to correct an error in a model, parsing rules or some other aspect of the formal semantics of the specifications (and possibly accompanying changes to explanatory text), an error-correction release will be made. </p>
			
			<h2>Compatible Additions</h2>
			<p>Where the changes have the effect of adding a new specification or other artifact which is completely compatible with the current release, an enhancement release is made. </p>
			
			<h2>Major Changes</h2>
			<p>Where changes actually alter semantics of existing artefacts (other than for minor error corrections),
			a new major release is declared. Such changes would normally be grouped into as few such releases as possible.</p>
			
			<h2>Change Management</h2>
			<p>As with pre-1.0 releases, change management will remain a disciplined process.
			Two types of online document, the Problem Report (PR) and the Change Request (CR),
			are used to track problems and changes. These are used as follows:</p>
			<ul>
				<li>anyone can <a href="https://openehr.atlassian.net/projects/SPECPR/issues/SPECPR-168?filter=allopenissues" target="_blank">raise a PR</a> to indicate some issue or problem with the current release. A PR documents the issue seen from the user's perspective, with the resolution being provided by the development team.</li>
				<li>only a member of the development team can raise a CR. All open CRs can be <a href="https://openehr.atlassian.net/secure/Dashboard.jspa?selectPageId=10190" target="_blank">viewed here</a> (completed CRs are <a href="https://openehr.atlassian.net/projects/SPEC/issues/SPEC-305?filter=doneissues" target="_blank">here</a>). A CR documents a change to the current release. A CR will either describe the problem it is solving, or refer to one or more PRs it is designed to address. The CR is a document of the change and the process of applying it to the release.</li>
			</ul>
			<p>From Release 1.0 on, the way CRs  are processed will change slightly. All changes to the specifications, apart from document text changes (e.g. improving explanations, fixing typos)
			will be signalled to the community via the openehr-technical mailing list, and a period of time given for the community to inspect the proposed changes and provide feedback.
			This is particularly aimed at allowing implementers to indicate the knock-on effects of changes. In the process of such discussions it may turn out that the proposed change will not go ahead,
			or that it will go ahead in a later release than originally planned. In this way, the community will be able to ensure that releases into the future remain stable and occur at a reasonable rate.</p>
			<p>All changes in the Release 1.0 mainline must also be implemented in at least one instance of software, schemas or other appropriate formal expression before being accepted as a change to the specifications.</p>
			<br/>
		
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>
