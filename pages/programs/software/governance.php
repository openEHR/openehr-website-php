<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Governance';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>Most current openEHR-related software projects are self-governed sparate entities. The principles below only govern the common openEHR Software Programme itself and it's provided resources (sometimes including code donated to the openEHR foundation).</p>
			<p>The governance structure of the openEHR software program/group is mosly mail-list based and inspired by the <a href="http://www.apache.org/foundation/" target="_blank">Apache Software Foundation</a> and <a href="http://www.apache.org/foundation/how-it-works.html#management" target="_blank">the way it works</a>. That is combined with the general <a href="/about/governance_structure">governance structure</a> of the openEHR Foundation that requires both a <em>Program Committee</em> and a list of <em>Program Qualified Members</em>.</p>
			
			
			<h2>Community, including Program Qualified Members</h2>
			<p>The majority of the work and software decisions should be discussed on the <a href="/community/mailinglists.php">openehr-implementers mailing list</a> where anybody can contribute to the concensus-targeted discussion (no qualified membership required).</p>
			<p>If voting is needed then votes from <em>Program Qualified Members</em> will be evaluated using <a href="http://www.apache.org/foundation/voting.html" target="_blank"> Apache style voting and interpretation</a>.</p>
			<p>Qualified Membership should be based on meritocracy and willingness to contribute. Qualified Membership is not time-limited. Qualified Membership can be ended if the member requests to be removed.</p>
			<p>If three independent* <em>Qualified Members</em> agree to suggest a new member and presents the candidate (including openEHR related merits), then the <em>Program Committee</em> should discuss and consider if the
			new member should be:</p>
			<p>a) approved at present or</p>
			<p>b) be recommended to first gain more experience in order to get suggested again later.</p>
			<p>If thorny vendor/institution-related issues arise that at least three independent* Qualified Members think would benefit from vendor/institution balance, then the issue can be transferred to the program committee instead.</p>
			<p>*) Independent in this case refers to not being dependent on the same organisation for salary or other benefits.</p>
			
			
			<h2>Program Committee</h2>
			<p>The <em>Program Committee</em> is responsible for reporting to and relating to the openEHR foundation board and it also maintains the official (and incubating) openEHR software project listings and approves new <em>Program Qualified Member</em> suggestions (as described above).</p>
			<p> The <em>Program Committee</em> is according to openEHR foundation <a href="https://sites.google.com/a/openehrfoundation.org/foundation/home/foundation-committees" target="_blank">program rules</a> limited to a maximum of 9 and minimum of 5 Qualified Members. During initial/bootstrap committee formation we have strived to set it up in a way so that no specific company or institution is represented more than once (since the number of seats is limited).</p>
			<p>The <em>Program Committee</em> positions should be renewed or changed on a regular basis as decided by the openEHR foundation. The <em>Software Program Qualified Members</em> suggest new and/or renewed positions in the <em>Software Program Committee</em> to the openEHR foundation board that does final approval (or asks the <em>Software Program Qualified Members</em> for a new suggestion).</p>
			
		
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
