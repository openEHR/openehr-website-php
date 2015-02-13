<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Governance Structure';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
			
			<h1><?php echo "$PageName";?></h1>
			
			<p>The openEHR Foundation is governed in terms of legal and fiduciary responsibilities by a small number Directors appointed by University College London (UCL) to the openEHR Board of Governors.</p>
			<p>Strategic and operational decisions are made by a larger Management Board, representative of the wider community, which includes Members appointed by the various interest groups that make up the openEHR community.</p>
			<p>The organisational structure below this is based on a division of activities into four Programs: Specifications, Clinical models, Software and Localisation. Work is carried out in projects within these Programs by Program leads and members.</p>
			<p>The structure is shown below.</p>
			<p style="text-align:center;"><img src="/files/about/OrganisationalStructure.png" alt="Foundation Governance Structure" title="Foundation Governance Structure" style="border: solid 1px #CCCCCC;" usemap="#orgstructure"></p>
			<map name="orgstructure">
				<area shape="rect" coords="206,8,300,62" href="#boardofgovernors"/>
				<area shape="rect" coords="206,105,300,160" href="#managementboard"/>
				<area shape="rect" coords="70,208,150,250" href="/programs/specification"/>
				<area shape="rect" coords="160,208,250,250" href="/programs/clinicalmodels"/>
				<area shape="rect" coords="260,208,338,250" href="/programs/software"/>
				<area shape="rect" coords="345,208,424,250" href="/programs/localisation"/>
			</map> 
			
			
			<h2><a name="boardofgovernors"></a>Board of Governors</h2>
			<p>The openEHR Board of Governors oversees the proper functioning of the openEHR Foundation with respect to its charter and status as a not-for-profit organisation. The Board of Governors appoints the Chair and one other Member of the Management Board from the openEHR Board of Governors, to ensure close cooperation and mutual understanding between these two governance groups.</p>
			<p>The openEHR Board of Governors responsibilities include:</p>
			<ul>
				<li>Ensure the organisation remains 'on mission';</li>
				<li>Maintain strategic connections to the e-health sector;</li>
				<li>Develop strategy and determine overall priorities for use of funds.</li>
			</ul>
			
			<h2 id="managementboard">Management Board</h2>
			<p>The openEHR Management Board exists to coordinate Programme activities, and ensure they are synchronised with the current priorities of the Board of Governors. Its membership consists of five members, with up to three further co-opted positions:
			<ul>
				<li>One position appointed by the Board of Governors, from the Board of Governors;</li>
				<li>Two positions elected by Individual Members;</li>
				<li>Two positions elected by the Industry Partner Members.</li>
				<li>Up to three further Individual Members may be co-opted to extend the skill base, where agreed unanimously by the Management Board.</li>
			</ul>
			
			<p>The Management Board Chair is entitled to invite additional individuals to attend, as required for specific purposes.</li>
			<p>The terms for members of the Management Board will be three years.  Individual Members may stand for a total of three terms.</p>
			<p>The openEHR Management Board responsibilities include:</p>
			<ul>
				<li>Manage requirements gathering and documentation;</li>
				<li>Coordinate development of the openEHR specifications, clinical models and software projects;</li>
				<li>Liaise with industry, eHealth standards bodies and national eHealth programmes;</li>
				<li>Meet monthly.</li>
			</ul>
			<p>See members of openEHR Management Board <a href="people_in_governance#managementboard">here</a>.</p>
			
			<h2 id="administration">Administration</h2>
			<h3 id="foundationoffice">Foundation Office</h3>
			<p>The Foundation Office manages the day-to-day operation of the Foundation and has paid staff. The responsibilities are as follows:</p>
			<ul>
				<li>Routine administration as required by all parts of the Foundation;</li>
				<li>Managing communications between the various parts of the Foundation;</li>
				<li>Public relations activities;</li>
				<li>Organising meetings and meeting resources;</li>
				<li>Running an annual openEHR community conference;</li>
				<li>Book-keeping and liaising with accountants.</li>
			</ul>
			<h3 id="webcommittee">Web Committee</h3>
			<p>The Web Committee is responsible for the e-presence of openEHR, undertaking the following tasks:</p>
			<ul>
				<li>Design & manage the online resources, including website, educational resources, and social media;</li>
				<li>Respond to and implement board directives relating to online communications.</li>
			</ul>
			<h3 id="instrastructuregroup">Infrastructure</h3>
			<p>The Infrastructure admin group is responsible for the computing infrastructure of openEHR, including all online services, hosting etc.</p>

			<h2 id="programs">Programs</h2>
			<p>Each Program has its own governance Terms of Reference, as follows:</p>
			<ul>
				<li><a href="/programs/specification/governance">Specification Program</li>
				<li><a href="/programs/clinicalmodels/governance">Clinical Program</li>
				<li><a href="/programs/software/governance">Software Program</li>
				<li><a href="/programs/localisation/governance">Localisation Program</a></li>
			</ul>

<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
