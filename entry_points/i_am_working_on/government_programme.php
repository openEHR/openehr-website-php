<?php
$PageName = 'Government Programme';
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
			<p>Government e-health programmes are generally created
			to help define the interfaces and interactions of different actors in the healthcare sector,
			including provider organisations, healthcare professionals, payer organisations, patients,
			and jurisdictional entities, in other words, health information communications.
			They may also try to publish standard protocols for use in clinical care delivery within
			institutions or care networks.  Finally, they may try to improve the usability of health
			information, i.e. make it more reliable for decision support, analytics, secondary use
			and re-imbursement. On top of this, governments eventually need to be able to show benefits
			in terms of improved outcomes, e.g. reduction in prescribing errors, fewer bed days
			due to decision support and so on.</p>
			<p>Enabling the communications part means taking into account not just what information
			can and can't flow, but also notifications across enterprises (e.g. of a transfer of care),
			identification of actors (patients, providers) and rights of access and sharing (privacy).
			Improving usability of health data means taking into account the semantics of the data,
			which means considering the use of ontologies and terminologies.</p>
			<p>This can only be achieved by the use of standardisation, i.e. the adoption by
			the relevant players of standards relevant to their interaction in the overall health system.</p>
			<p>The 'grand challenge' for government programmes is therefore not just what to standardise,
			but how to manage standards and how to measure benefits. Part of the challenge is
			working out how to interact with the stakeholders: providers, professionals, vendors
			and citizens. History shows that this is a massive task, and billions have already
			been spent trying to achieve it, so far with mixed results.</p>
			<p>How can openEHR help meet the challenge?</p>
			<p>One lesson that has been drawn universally from e-health programmes to date is that 'standardisation'
			does not equal 'choosing and mandating standards', where the standards are obtained
			from official Standards Development Organisations (SDOs). This is because what is needed
			is a coherent framework for producing different kinds of standards in an ongoing fashion
			, not a fixed list of schemas or interfaces that don't work together. SDO standards can
			be useful, but what is crucial is the standards-producing framework.</p>
			<p>openEHR's primary focus has been on this framework.
			What we have learned over the last 15 years of working in e-health:</p>
			<ul>
				<li>reliable, stable standards are needed for health data, otherwise noone can build any software;</li>
				<li>clinical content and workflows keep changing, and only domain experts (healthcare professionals)
				really know what they are.</li>
			</ul>
			<p>Conclusion: if we want to standardise the latter, we need a different approach than for the former.</P>
			<p>Other lessons that we have been learned:</p>
			<ul>
				<li>reliable semantics are needed in health data, otherwise noone can safely compute with it;</li>
				<li>a standard approach to querying is needed that is independent of physical data storage.</li>
			</ul>
			<p>The openEHR approach has been called a 'two-level' or 'multi-level' modelling approach.
			In essence it consists of the following:</p>
			<ul>
				<li><em>stable, standardised information models</em>, known collectively as the Reference Model(RM).
				This includes clinical data types. These on their own guarantee basic data interoperability,
				and can be used for building back-end systems and interfaces;</li>
				<li><em>formalisms and tools for defining models of clinical and workflow</em>. These models include archetypes,
				templates and terminology subsets. These models are used to machine generate message and document schemas,
				as well as developer APIs and forms, which can be directly incorporated into software;</li>
				<li><em>a portable model-based query language</em>, completely independent of data representation.
				For the first time, this enables the development and publishing of queries with standard
				semantics, that can be used in decision support and analytics tools.</li>
			</ul>
			<p>The openEHR platform is designed to provide a coherent basis for using and integrating de jure
			and industry standards, including <a href="http://www.ihtsdo.org/">IHTSDO</a> SNOMED CT,
			<a href="http://www.who.int/classifications/icd/en/">WHO ICD</a> and many other terminologies,
			<a href="http://www.ihe.net/">IHE</a> services, <a href="http://www.hl7.org/">HL7</a> message, document and service definitions,
			<a href="http://www.cen.eu/CEN/Sectors/TechnicalCommitteesWorkshops/CENTechnicalCommittees/Pages/Standards.aspx?param=6232&title=CEN%2FTC+251">CEN TC251</a>
			and <a href="http://www.iso.org/iso/iso_technical_committee?commid=54960">ISO TC 215</a> health standards,
			health standards from <a href="http://www.who.int/classifications/icd/en/">OMG HDTF</a>, and many others.
			openEHR adds value, because it is an integrated framework rather than a set of disparate
			standards. It supports the definition of clinical content via archetypes - in fact,
			the archetype formalism is now a CEN standard (EN13606-2), and ISO standard (ISO 13606-2).</p>
			<p>The key thing that it offers is the ability to create a standards production capability,
			rather than just a set of fixed standard schemas or messages. Its framework enables every
			new archetype, template and terminology subset to work with the standard information model
			underpinning. This means the clinical models can be produced indefinitely into the future.</p>
			<p>Strategically, openEHR offers 3 key features for e-health programmes:</p>
			<ul>
				<li>a health computing platform approach, which opens up health data for use by multiple
				applications; this may lead to a platform-based health ICT economy, in which various
				suppliers can produce back- or front-end systems that integrate across a defined
				interface, rather than the current situation of numerous silos;</li>
				<li>clinical content and workflow modelling is managed by clinicians, using tools based
				on the powerful openEHR archetype and template formalisms - this allows not only
				the definition of standard information, but solves the problem of engaging with
				clinicians;</li>
				<li>a way of automatically publishing domain-built data-sets as artefacts directly
				consumable by software developers and vendors.</li>
			</ul>
			<p>The openEHR framework is already in use by several governments, including 
			<a href="http://www.openehr.org/who_is_using_openehr/governments">these</a>.</p>
			
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