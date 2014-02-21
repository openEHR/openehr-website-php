<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Estructura de Gobernanza';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
			
			<h1><?php echo "$PageName";?></h1>
			
			<p>The governance structure of the openEHR Foundation is based on the division of activities into four Programs: Specifications, Clinical models, Software and Localisation. Work is carried out in projects within these Programs by Program leaders and Qualified members, with all Members having the right of access to work items and particpation in meetings.</p>
			<p>The openEHR Foundation is governed in terms of legal and fiduciary responsibilities by a small number Directors appointed by University College London (UCL) and known as the openEHR Foundation Board. Strategic and operational decisions are made by a larger Management Board, representative of the wider community, which includes Members appointed by the various interest groups that make up the openEHR community. A Foundation Office is responsible for administration and communicaions.</p>
			<p>The structure is shown below.</p>
			<p style="text-align:center;"><img src="/files/about/OrganisationalStructure.png" alt="Foundation Governance Structure" title="Foundation Governance Structure" style="border: solid 1px #CCCCCC;" usemap="#orgstructure"></p>
			<map name="orgstructure">
				<area shape="rect" coords="180,40,300,100" href="#foundationboard"/>
				<area shape="rect" coords="320,150,430,210" href="#foundationoffice"/>
				<area shape="rect" coords="180,150,300,210" href="#managementboard"/>
				<area shape="rect" coords="55,260,140,315" href="/programs/specification"/>
				<area shape="rect" coords="150,260,235,315" href="/programs/clinicalmodels"/>
				<area shape="rect" coords="245,260,330,315" href="/programs/software"/>
				<area shape="rect" coords="340,260,425,315" href="/programs/localisation"/>
			</map> 
			
			
			<h2><a name="foundationboard"></a>openEHR Foundation Board</h2>
			<p>The openEHR Foundation Board oversees the proper functioning of the openEHR Foundation with respect to its charter and status as a not-for-profit organisation. The Foundation Board appoints the Chair and one other Member of the Management Board from the openEHR Foundation Board, to ensure close cooperation and mutual understanding between these two governance groups.</p>
			<p>The openEHR Foundation Board responsibilities include:</p>
			<ul>
				<li>Ensure the organisation remains 'on mission';</li>
				<li>Maintain strategic connections to the e-health sector;</li>
				<li>Develop strategy and determine overall priorities for use of funds.</li>
			</ul>
			<p>See members of openEHR Foundation Board <a href="people_in_governance#foundationboard">here</a>.</p>
			
			<h2 id="managementboard">openEHR Management Board</h2>
			<p>The openEHR Management Board exists to coordinate Programme activities, and ensure they are synchronised with the current priorities of the Foundation Board. Its membership consists of the Chair and one other Member of the Foundation Board. A further five Members of the Management Board are elected; two by Qualified Members working within the 4 Program Areas (Specification, Software, Clinical Modelling, Localisation), two by the Industry Partners Group and 1 by the Academic Partners Group. A further two Management Board positions are available to be appointed by the Management Board, to extend its skill base. The Management Board Chair is entitled to invite additional individuals to attend, as required for specific purposes.</p>
			<p>The openEHR Management Board responsibilities include:</p>
			<ul>
				<li>Manage requirements gathering and documentation;</li>
				<li>Coordinate development of the openEHR specifications, clinical models and software projects;</li>
				<li>Liaise with industry, eHealth standards bodies and national eHealth programmes;</li>
				<li>Meet monthly.</li>
			</ul>
			<p>See members of openEHR Management Board <a href="people_in_governance#managementboard">here</a>.</p>
			
			<h2 id="foundationoffice">openEHR Foundation Office</h2>
			<p>The Foundation Office manages the day-to-day operation of the Foundation and has paid staff. The responsibilities are as follows;</p>
			<ul>
				<li>Routine administration as required by all parts of the Foundation;</li>
				<li>Managing communications between the various parts of the Foundation;</li>
				<li>Public relations activities;</li>
				<li>Organising meetings and meeting resources;</li>
				<li>Running an annual openEHR community conference;</li>
				<li>Book-keeping and liaising with accountants.</li>
			</ul>
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_footer.php');?>