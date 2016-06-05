<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Programa de Especificación';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>Mission</h2>
			<p>The openEHR Specification Program is the part of openEHR that develops, manages and maintains specifications and their computable expressions, in support of the openEHR goal to enable the development and deployment of open, interoperable and computable patient-centric health information systems. </p>
			<p>The responsibilities of the Program are:</p>
			<ul>
				<li>to build and maintain quality of the specifications library;</li>
				<li>to ensure the utility and relevance of the specifications to the larger e-health community;</li>
				<li>to work with de jure standards development organisations (SDOs) to improve the coherence and robustness and reduce the cost of use of formal standards.</li>
			</ul>
			<p>The Program achieves its goals in the following way:</p>
			<ul>
				<li>by developing new technical specifications where required by the community;</li>
				<li>by accepting and adapting donated specifications;</li>
				<li>by managing and maintaining the openEHR specifications in a coherent way, so that they satisfy the needs of production systems/solutions developers, application and data users (including patients), and user organisations;</li>
				<li>by making all specifications openly available and free to use, under liberal open source / content licenses.</li>
			</ul>
			
			
			<h2>Goals</h2>
			<p>The goals of the Specification Program include:</p>			
			<ul>
    			<li>quality in health information: to enable data quality, validity, reliability, consistency and currency of clinical data across the data lifecycle from creation to archival, and across enterprises and sectors;</li>
    			<li>support current technology: to actively support widely used ICT technologies e.g. major programming languages and frameworks;</li>
				<li>de jure standards connections: to provide means for the specifications to be useful to users of related de jure standards, e.g. by providing additional transformation or mapping specifications and/or implementation guides;</li>
				<li>manage impact of change: to ensure the preservation of validity of clinical data created according to previous releases of the openEHR specifications.</li>
			</ul>
			
			
			<h2>Quality</h2>
			<p>In order to realise the mission, the Specification Program adopts the following quality criteria for its work.</p>
			<ul>
				<li><em>Clear scope:</em> the scope of any specification or computable artefact should be clearly described, indicating which use cases, situations etc, for which the artefact is appropriate.</li>
				<li><em>Modularity:</em> the specifications should be organised into a set of components, following basic principles of low coupling and uni-directional dependence, enabling a) incremental deployability and b) limited impact of any given change to a particular specification.</li>
				<li><em>Design:</em> the specifications are not created by committees, but designed in an appropriate technical way for the given artefact, based on the following precepts:
				<ul>
					<li>requirements-based: the development process includes a requirements capture phase in which requirements are either documented de novo, or obtained by research and communication with the community. This ensures that it is stated what requirements a specification tries to satisfy and provides the specification user an idea of its valid scope.</li>
					<li>theory-based: a clear design philosophy should be evident and stated in all specifications. References to published works should be included where relevant.</li>
					<li>evidence-based: the models and specifications must be based on evidence: knowledge of how well current implementations have functioned; knowledge of clinical data and workflow; knowledge of real use cases.</li>
				</ul>
				</li>
				<li><em>Coherent:</em> the specifications are all mutually compatible, forming a coherent whole. No specifications are added or changes made that cause inconsistencies within the specification library.</li>
				<li><em>Comprehensible:</em> the specifications must be easily understandable to a person with the appropriate general competencies; complexity of models and documentation must be consciously managed.</li>
				<li><em>Unambiguous:</em> particular effort should be made to eliminate the possibility of misinterpretation, misuse, and inconsistency in use.</li>
				<li><em>Computable:</em> all specifications describing formal models and languages should have an associated computable expression available for tool use. The computable expression should have the same semantics as the documentary form (ideally it would be used to generate some / all of the documentary form, but this is not always practically possible). Specifications which are essentially guides or overviews do not need formal expressions, although concrete examples in the form of code etc are always encouraged.</li>
				<li><em>Implementable:</em> all formal specifications have expressions in implementation technologies. In any given technology, usually only a partial view of a specification can be expressed, and there may be semantic differences. For example in XML Schema, behaviour, some constraints and inheritance are not available, or are substantially different to these things in the core specifications. Nevertheless, XML schema is widely used, hence the need for a normative expression of the relevant specifications.</li>
				<li><em>Change-managed:</em> the specifications are managed over time in a known way, i.e. following industry norms for versioning, releases and so on. The versioning rules at semver.org are applied to all specifications (although they may not have been in the past, i.e. prior to current governance rules). Issue trackers are used to record problem reports and change requests. Breaking or major changes are assigned to major releases, and impact carefully assessed before proceeding.</li>
			</ul>
		

			<h2>More information about Program</h2>
			<p class="content">
			<a href="workingbaseline">List of specifications</a><br/>
			<a href="governance">Governance process</a><br/>
			<a href="changeprocess">Change process</a></p>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_footer.php');?>