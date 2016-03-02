<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Universities / Research';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">

<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>What openEHR Research exists today?</h2>
			<p>Numerous papers and dissertations have been published that relate to and/or use openEHR.</p>
			<p><a href="https://www.zotero.org/groups/openehr/items">Full openEHR Research Library (Zotero)</a></p>

			<p>PhD Dissertations</p>
            <ul>
                <li>Nadim Anani. Exploring openEHR-Based Clinical Guidelines in Acute Stroke Care and Research. Karolinska Institutet, 2016.  <a href="https://www.zotero.org/groups/openehr/items/itemKey/???">Ref</a>.</li>
                <li>Erik Sundvall. Scalability and Semantic Sustainability in Electronic Health Record Systems. Linköping University, 2013.  <a href="https://www.zotero.org/groups/openehr/items/itemKey/???">Ref</a>.</li>
                <li>Sistine Barretto. Designing Guideline-based Workflow-integrated Electronic Health Records. University South Australia, 2005.  <a href="https://www.zotero.org/groups/openehr/items/itemKey/???">Ref</a>.</li>
                <li>Eric Browne. Workflow Modelling of Coordinated Inter-Health-Provider Care Plans. University Adelaide, 2005</li>
                <li>Rong Chen. Towards Interoperable and Knowledge-Based Electronic Health Records Using Archetype Methodology. Linköping University, Sweden, 2011.  <a href="https://www.zotero.org/groups/openehr/items/itemKey/???">Ref</a>.</li>
                <li>Rahil Qamar. Semantic Mapping Of Clinical Model Data To Biomedical Terminologies To Facilitate Interoperability. U Manchester 2008.  <a href="https://www.zotero.org/groups/openehr/items/itemKey/???">Ref</a>.</li>
                <li>Koray Atalag. Archetype based Domain Modelling for Health Information Systems. METU, Turkey 2007.  <a href="https://www.zotero.org/groups/openehr/items/itemKey/???">Ref</a>.</li>
            </ul>
   
            <p>Masters Dissertations</p>

			<p>Foundational papers</p>
            <ul>
                <li>Kalra D et al. Design and Implementation of a Federated Health Record Server. TEHRE 2001. <a href="https://www.zotero.org/groups/openehr/items/itemKey/???">Ref</a></li>
                <li>Kalra D. Clinical foundations and information architecture for the implementation of a federated health record service. PhD thesis UCL 2006. <a href="https://www.zotero.org/groups/openehr/items/itemKey/???">Ref</a></li>
                <li>Beale T, Heard S. An ontology-based model of clinical information. MedInfo 2007. <a href="https://www.zotero.org/groups/openehr/items/itemKey/VZA5C2G4">Ref</a></li>
                <li>Beale T. Archetypes: Constraint-based domain models for future-proof information systems. OOPSLA 2002.<a href="https://www.zotero.org/groups/openehr/items/itemKey/TFUGIEKR">Ref</a></li>
                <li>Archetypes - An Interoperable Knowledge Methodology for Future-proof Information Systems.<a href="https://www.zotero.org/groups/openehr/items/itemKey/I3HV2UFV">Ref</a></li>
            </ul>
			<h2>Research networks</h2>

			<h2>Research opportunities</h2>
			<p>Below are some of the areas that represent good opportunities for academic research.</p>

            <h3>Clinical Gudelines </h3>
			
            <h3>Querying in archetype-based systems </h3>

            <h3>Generating software artefacts from ADL templates </h3>

            <h3>Efficient Persistence </h3>

            <h3>Legacy Data Integration </h3>

            <h3>REST Interfaces to archetyped data </h3>

			<h2>How openEHR works for others</h2>
			<p>For list of universities and centres which are working and contributing to openEHR see <a href="/who_is_using_openehr/academic_research">who is using openEHR</a></p>
					
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
