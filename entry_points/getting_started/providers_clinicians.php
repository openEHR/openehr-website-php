<?php
$PageName = 'Providers / Clinicians';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

	<?php include '../../panel/headpanel.php' ?>
	
</head>

<body>

<div id="MainFrame">
	
	<div id="TopPanel">
		<?php include '../../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu">
		
		<div class="nav">
			<?php include '../../menu/topmenu.php' ?>
		</div>
		
	</div> 

	<div id="MainArea">
	
		<div id="SideMenu">
		<?php include 'menu.php' ?>
		</div>
		
		<div id="TextArea">
			
			<h1><?php echo "$PageName";?></h1>
			<br/>
			
			<p>Clinicians and their clients are what openEHR is about. The power to create life-long and future-proof health records that support health and health care across the full range of health care environments. By separating the specification of clinical information from the model on which the software operates, clinicians can go on extending their shared information requirements to meet evolving needs.</p>
			
			
			<h2>What can openEHR do for you</h2>
			<p>As a clinician you are in the position to present your information requirements to the openEHR community and ensure that the specifications really do allow you to do what you need. These are specified as archetypes - allowing them to be shared across systems implementing the openEHR architecture.</p>
			<p>The openEHR community is presently building a repository for the web-based authoring of archetypes. This <a href="http://www.openehr.org/knowledge/">Archetype Library</a> is an early prototype and includes an OWL repository for aiding the documentation of archetypes and helping us find them.</p>
			<p>Some of the benefits available from openEHR-baed systems for clinical professionals:</p>
			<ul>
				<li><em>Domain specialists can model their own information and workflows</em> using archetypes, and have these used directly in the openEHR-enabled environments. Archeype modelling can occur at an international as well as local level, enabled by the openEHR online archetype library, a managed global archetype development and governance environment. By this means, even doctors in remote locations can participate directly in building health content models for the needs of their local environment and speciality.</li>
				<li><em>Medico-legal support</em> for all decisions made and recorded, due to a permanent, versioned record, digital attestations, and a chain of evidence supporting clinical decisions.</li>
				<li>openEHR <em>supports all phases of care delivery</em>, from recording observations, measurements, test results, through clinical evaluation and care-planning, to active intervention and management.</li>
				<li>Workflow-based action archetypes enable the <em>state of an activity to be accurately known at all times</em> and be utilised in intelligent clinical decision support applications.</li>
				<li><em>Location-independent medication management</em> is possible with the use of shared openEHR medication instructions, supporting electronic prescribing, and allergy and interaction checking.</li>
				<li>All openEHR <em>information is globally sharable</em> in the care community.</li>
				<li>Linking and threading allows <em>longitudinal views of issues and problems</em> for each patient.</li>
			</ul>
			
			
			<h2>How you can get involved</h2>
			<p>You can join the <a href="../../community/mailinglists">mailing lists</a> as a first step. There are more than 1000 people from 75+ countries already there. You can also become part of openEHR as an Individual member. Find out more about <a href="../../about/membership">membership</a>.</p>
			
			
			<h2>How openEHR works for others</h2>
			<p>You can find information about openEHR users <a href="http://openehr.org/knowledge/#userstatistics">here</a>.</p>

		</div>
			
	</div>

	<div id="BottomMenu">
	<?php include '../../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
	<?php include '../../panel/bottompanel.php' ?>
	</div>

</div>
	
<?php include '../../panel/scriptpanel.php' ?>

</body>

</html>