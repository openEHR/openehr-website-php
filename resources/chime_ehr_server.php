<?php
$PageName = 'CHIME EHR Server';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

	<?php include '../panel/headpanel.php' ?>
	
</head>

<body>

<div id="MainFrame">
	
	<div id="TopPanel">
		<?php include '../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu">
	
		<div class="nav">
			<?php include '../menu/topmenu.php' ?>
		</div>
		
	</div> 

	<div id="MainArea">
	
		<div id="SideMenu">
			<?php include 'menu.php' ?>
		</div>
		
		<div id="TextArea">
			
			<h1><?php echo "$PageName";?></h1>
			<p>The Centre of Health Informatics and Multiprofessional Education (CHIME),
			part of University College London, has been active in several EU projects over
			the past decade on the requirements, specification, implementation and
			evaluation of EHR systems and middleware services. These European Commission
			sponsored projects include
			<a href="http://www.chime.ucl.ac.uk/work-areas/ehrs/GEHR/index.htm">GEHR</a>,
			<a href="http://www.chime.ucl.ac.uk/work-areas/ehrs/SYNAPSES/index.htm">Synapses</a>,
			<a href="http://www.chime.ucl.ac.uk/work-areas/ehrs/EHCR-SupA/index.htm">EHCR-SupA</a>,
			<a href="http://www.chime.ucl.ac.uk/work-areas/ehrs/SynEx/index.htm">SynEx</a>,
			<a href="http://www.chime.ucl.ac.uk/work-areas/ehrs/Medicate/index.htm">Medicate</a>
			and <a href="http://www.6winit.org">6WINIT</a>.</p>
			
			<h2>Deployments</h2>
			<p>Over the past five years this EHR research team has implemented a
			component-based federated EHR server drawing on those R&amp;D results, and
			piloted its live use at the <em>Whittington Hospital</em> in north
			London. The research underpinning and technical approach of this work, including
			the use of archetypes, is described in the following
			<a href="../files/gehr/UCL-TEHRE01-Reprint.pdf">reprint</a>
			of a paper published in Toward an Electronic Health Record Europe (TEHRE) 2001.
			The reference and archetype information models used in this implementation work
			are given in a technical
			<a href="../files/gehr/UCL-FHR-Models-Annexe.pdf">appendix</a> to this paper.</p>
			<p>The CHIME UCL server was deployed as part of the NHS Electronic Record
			Demonstration and Implementation Programme (ERDIP) in <em>South West
			Devon</em>.</p>

			<h2>Background</h2>
			<p>A comprehensive review of the field and the UCL demonstrator is contained in
			Dipak Kalra's <a href="http://eprints.ucl.ac.uk/archive/00001584/">PhD
			Thesis</a> (45MB).</p>
			<p>The Java middleware components described in these papers are intended for
			open source, to be licensed through openEHR on this site, during
			2004-5.</p>
			<p>The demonstration described here has benefited from extensive collaboration
			within several European project consortia, the results of which have been
			piloted in many other health care settings as illustrated in the
			map below.</p>
			<br/>
			<p style="text-align:center;"><img src="../files/gehr/EU-EHR-demonstrator-sites.jpg" alt="EHR demonstrator" style="border: solid 1px #CCCCCC;"></p>
			<br/>
			<p>This practical implementation and demonstration, building on a long and
			iterative R&amp;D journey, has been a principal feed into the present version of
			the openEHR specifications, drafted jointly with our colleagues from
			Ocean Informatics. UCL is, with them, also contributing to the
			CEN EHRcom Task Force.</p>
			<p>The UCL team is a partner in the Medical Research Council e-Science project
			<a href="http://www.cs.man.ac.uk/mig/projects/current/clef/">CLEF</a>,
			developing a large-scale anonymised EHR repository of cancer records with access
			for biomedical and genomics research, via the Grid.</p>

			<h2>Future</h2>
			<p>The EHR server will be redeveloped during 2004/5, building on the latest
			openEHR specifications and the early proposals from EHRcom, and to
			evaluate these in live clinical settings during 2005.</p>
				
		</div>
			

	</div>

	<div id="BottomMenu">
	<?php include '../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
	<?php include '../panel/bottompanel.php' ?>
	</div>

</div>

<?php include '../panel/scriptpanel.php' ?>

</body>

</html>
