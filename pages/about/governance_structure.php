<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'Governance Structure';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
			
			<h1><?php echo "$PageName";?></h1>
			
			<p>The openEHR Foundation is governed in terms of legal and fiduciary responsibilities by a small number Directors appointed by University College London (UCL) to the openEHR Foundation Board.</p>
			<p>Strategic and operational decisions are made by a larger Management Board, representative of the wider community, which includes Members appointed by the various interest groups that make up the openEHR community.</p>
			<p>The organisational structure below this is based on a division of activities into four Programs: Specifications, Clinical models, Software and Localisation. Work is carried out in projects within these Programs by Program leads and members.</p>
			<p>The structure is shown below.</p>
			<p style="text-align:center;"><img src="/files/about/OrganisationalStructure.png" alt="Foundation Governance Structure" title="Foundation Governance Structure" style="border: solid 1px #CCCCCC;" usemap="#orgstructure"></p>
			<map name="orgstructure">
				<area shape="rect" coords="206,8,300,62" href="#foundationboard"/>
				<area shape="rect" coords="206,105,300,160" href="#managementboard"/>
				<area shape="rect" coords="70,208,150,250" href="/programs/specification"/>
				<area shape="rect" coords="160,208,250,250" href="/programs/clinicalmodels"/>
				<area shape="rect" coords="260,208,338,250" href="/programs/software"/>
				<area shape="rect" coords="345,208,424,250" href="/programs/localisation"/>
			</map> 
			
			
			<h2><a name="foundationboard"></a>Foundation Board</h2>
			<p>The openEHR Foundation Board oversees the proper functioning of the openEHR Foundation with respect to its charter and status as a not-for-profit organisation. The Foundation Board appoints the Chair and one other Member of the Management Board from the openEHR Foundation Board, to ensure close cooperation and mutual understanding between these two governance groups.</p>
			<p>The openEHR Foundation Board responsibilities include:</p>
			<ul>
				<li>Ensure the organisation remains 'on mission';</li>
				<li>Maintain strategic connections to the e-health sector;</li>
				<li>Develop strategy and determine overall priorities for use of funds.</li>
			</ul>
			<p>See members of the Foundation Board <a href="people_in_governance#foundationboard">here</a>.</p>
			
			<h2 id="managementboard">Management Board</h2>
			<p>The openEHR Management Board exists to coordinate Programme activities, and ensure they are synchronised with the current priorities of the Foundation Board. Its membership consists of the Chair and one other Member of the Foundation Board. A further five Members of the Management Board are elected; two by Qualified Members working within the 4 Program Areas (Specification, Software, Clinical Modelling, Localisation), two by the Industry Partners Group and 1 by the Academic Partners Group. A further two Management Board positions are available to be appointed by the Management Board, to extend its skill base. The Management Board Chair is entitled to invite additional individuals to attend, as required for specific purposes.</p>
			<p>The openEHR Management Board responsibilities include:</p>
			<ul>
				<li>Manage requirements gathering and documentation;</li>
				<li>Coordinate development of the openEHR specifications, clinical models and software projects;</li>
				<li>Liaise with industry, eHealth standards bodies and national eHealth programmes;</li>
				<li>Meet monthly.</li>
			</ul>
			<p>See members of openEHR Management Board <a href="people_in_governance#managementboard">here</a>.</p>
			
			<h2 id="webcommittee">Web Committee</h2>
			<p>The Web Committee is responsible for the e-presence of openEHR, undertaking the following tasks:</p>
			<ul>
				<li>Design & manage the online resources, including website, educational resources, and social media;</li>
				<li>Respond to and implement board directives relating to online communications.</li>
			</ul>

			<h2 id="instrastructureadmin">Infrastructure Administration</h2>
			<p>The Infrastructure admin group is responsible for the computing infrastructure of openEHR, including all online services, hosting etc.</p>

			<h2 id="foundationoffice">Foundation Office</h2>
			<p>The Foundation Office manages the day-to-day operation of the Foundation and has paid staff. The responsibilities are as follows;</p>
			<ul>
				<li>Routine administration as required by all parts of the Foundation;</li>
				<li>Managing communications between the various parts of the Foundation;</li>
				<li>Public relations activities;</li>
				<li>Organising meetings and meeting resources;</li>
				<li>Running an annual openEHR community conference;</li>
				<li>Book-keeping and liaising with accountants.</li>
			</ul>
			
			<h2>openEHR Representatives</h2>
			<p>openEHR Representatives refer to individuals given the capacity by the openEHR Foundation Board to formally represent the openEHR Foundation on openEHR matters, and lead localisation activities in respective locales (e.g. countries, group of countries or language/culture bound groups with one or more jurisdictions). This is part of the <a href="/programs/localisation/governance">Localisation Programme governance structure</a>. The Representatives need to be nominated by the Localisation Programme Committee (LPC) and approved by the Board.</p>
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>
