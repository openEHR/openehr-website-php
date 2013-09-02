<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'Obtaining Solutions';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>These pages provide an index to known usable solutions, both commercial and academic. The criterion for inclusion is availability of a demonstrable 'solution' with existing reference deployment and/or online demonstrator.</p>
			<p>Solutions listed here potentially occur in three lists: the overall solutions by category list; the developer organisations list; and the apps list. In order to describe solutions in a standard way, a standardised picture of the openEHR ecosystem is used as the organising principle. This is described below.</p>
			
			
			<h2>openEHR Ecosystem</h2>
			<p>The following diagram illustrates a standard view of any software ecosystem based on the openEHR methodology.</p>
			<p style="padding-left:100px;"><img src="/files/entry_points/ehrecosystem.png" alt="openEHR Ecosystem" title="openEHR Ecosystem" style="border: solid 1px #CCCCCC;"></p>	
			
			<h3>Modelling Tools</h3>
			<p>openEHR systems are based on domain models, i.e. archetypes, templates, and terminology subsets. This part of the ecosystem includes tools capable of producing and/or analysing such models, including editors, compilers and validators.</p>
			
			<h3>Model Management</h3>
			<p>This solution category includes tools and systems for storing, indexing and managing models. These may include collaborative repositories, ontology-based indexes and model transformation and publishing tools.</p>
			
			<h3>Development Tools</h3>
			<p>Solutions in this category include tools and toolkits designed to help transform and/or use domain models in software, and may include things like archetype-based form generators, AQL query builders, report builders and so on.</p>
			
			<h3>Operational Solutions</h3>
			<p>This category includes all components deployable in operational patient care and secondary use contexts. Three sub-categories of components are identified.</p>
			
			<h4>Application</h4>
			<p>Applications are any component with a user interface, deployable on any user device.</p>
			
			<h4>Services</h4>
			<p>Services include any component that exposes an API, performs an identified function - such as medication interaction evaluation - and provides responses or output to the caller or to other parts of the overall system. This category includes things like notification services, scheduling services, medication management service and many others.</p>
			
			<h4>Health system persistence</h4>
			<p>This category includes components that provide large-scale persistence for health data, including EHR and demographics, as well as terminology and other knowledge persistence services.</p>
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>