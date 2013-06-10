<?php
$PageName = 'GEHR';
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
			
			<h2>GEHR - The Good European Health Record</h2>
			<p>The <a href="http://www.chime.ucl.ac.uk/work-areas/ehrs/GEHR/Deliverables.htm">GEHR
			project</a> was and EU 3rd Framework project (Advanced Informatics in Medicine
			project 2014), and ran from 1992 - 1995. There were 21 participating
			organisations from 8 countries. A
			<a href="http://www.chime.ucl.ac.uk/work-areas/ehrs/GEHR/EUCEN/overview.pdf">project
			summary</a> is available. The main achievements of the GEHR project were:</p>
			<ul>
				<li>comprehensive <strong>requirements</strong> of the EHR, which have since fed
				into many other projects, including ISO 18308 (see <a title="ISO EHR Standards" href="/openehr/standards/iso.html">ISO
				FAQ</a>);</li>
				<li>a structured <strong>object-oriented model of the EHR</strong>, which
				contained basic data types, versioning semantics, and the multi-level
				structuring now accepted in CEN and HL7 (now known as
				Folder/Composition/Section/Entry/Cluster/Element; on GEHR it was
				Transaction/Headed_section/Entry/Compound/Item)</li>
			</ul>
			
			
			<h3>Healthone</h3>
			<p>The flagship product of Health Data Management Partners
			(<a href="http://www.hdmp.com/">HDMP</a>), a Belgian company, is its
			Health<i>one</i> clinical data management product, based on the architecture
			of the original GEHR Project. Health<i>one</i> is used in a large number of
			hospitals in Belgium and France, as well as elsewhere in Europe.</p>

			<h3>Black Sea Telediab</h3>
			<p>The first successful operational medical record system based on the Good
			European Health Record (GEHR). The diabetes data is based on the WHO (Europe)
			Diabcare dataset. This system is written in C++ and uses Microsoft Access as its
			database.
			<a href="http://www.telemed.ro/BSTD/BSTD_Broch.pdf#search=%22black%20sea%20telediab%22">Project Brochure</a>.</p>

			
			<h2>GeHR in Australia - The Good electronic Health Record</h2>
			<ul>
				<li><a href="../files/gehr/gehr_requirements.pdf">Requirements</a> - a comprehensive set of technical requirements for the EHR, based on original GEHR requirements</li>
				<li><a href="../files/gehr/gehr_system_architecture.pdf">System architecture</a> - a description of the deployed system</li>
				<li><a href="../files/gehr/gehr_kernel_architecture.pdf">Kernel architecture</a> - describing in detail how archetypes were used in the software</li>
				<li><a href="../files/gehr/gehr_gom.pdf">Gehr Object Model</a> (the GOM) - the reference object model &nbsp;of GeHR</li>
				<li><a href="../files/gehr/gehr_api.pdf">The kernel API</a> - the Application Programmers Interface</li>
				<li><a href="../files/gehr/gehr_archetypes.pdf">Gehr archetype system</a> - overview of archeytpes in GeHR and simple server API</li>
			</ul>
			
			<h3>Overview</h3>
			<p>The GeHR (Australia) project was the precursor to the modern
			openEHR project. It was undertaken with funding from the (then)
			Australian Department of Health, and was carried out by Ocean Informatics and
			DSTC personnel. It built on the experience of the European GEHR project, but
			radically changed the models and introduced archetypes for the first time. A
			significant amount of software was built (in Java, Eiffel and VB) which ran
			exactly according to the published designs. These lessons led to many of the
			numerous improvements which consistute openEHR today.&nbsp;The development
			programme of GeHR included as deliverables:</p>
			<ul>
				<li>Clear statement of requirements;</li>
				<li>A description of the architecture;</li>
				<li>Formal expression of the architecture as compilable source code;</li>
				<li>A generated CASE (diagrammatic) expression of the model;</li>
				<li>Various exchange specifications (IDL, XML, etc.);</li>
				<li>An application programming interface (API);</li>
				<li>Provisional set of archetypes;</li>
				<li>Detailed technical documentation; and</li>
				<li>development guidelines.</li>
			</ul>
			<p>All of these were made available in the public domain through the efforts of
			Thomas Beale and Sam Heard. This publication provided the impetus for using&nbsp;GeHR
			in a series of four trials organised under the auspices of the General Practice
			Computing Group (GPCG) and funded by the Commonwealth Department of Health and
			Ageing (DoHA) in Australia.</p>
			<p>The&nbsp;GeHR family of projects&nbsp; is described below.</p>

			<h3>GPCG GeHR Electronic Health Record Architecture Project</h3>
			<p>This project was the first implementation of GEHR in Australia. It extended
			over an 18 month period from January 2000 to June 2001. The aim of the project
			was to integrate three GP clinical software applications to the GEHR EHR kernel
			via a Microsoft COM interface. The server was built and successfully tested, but
			integration to vendor software did not succeed due to lack of vendor resources
			to implement the integration. Instead, a VB test program was built. This project
			produced a wealth of knowledge and experience about using archetypes
			computationally, which has led to today's Archetype Description Language (ADL)
			and openEHR EHR specifications.</p>

			<h3>GPCG Hospital Data Transformation Project</h3>
			<p>This project developed and successfully trialed an XML-based data
			transformation methodology for converting legacy data from clinical data
			repositories (CDRs) to GeHR-compliant format. The aim was to develop a
			proof-of-concept for hospital to GP communication between non-GeHR and
			GeHR-compliant systems. The CDR used was the world&rsquo;s largest implemenation of
			Oacis which is being deployed state-wide in South Australia. This project was
			undertaken by Flinders University, South Australia, and DSTC Pty Ltd, a research
			organisation funded in part by the Australian Federal Government's Cooperative
			Research Centre program, that has worked with Ocean Informatics since 2001. This
			project ran from January to May 2001. Final GPCG report
			<a href="../files/gehr/GPCG_Project2_01.pdf">here</a>.</p>

			<h3>GPCG Diabetes Messaging and Data Communication</h3>
			<p>This project was undertaken jointly with Medical Communications Associates, a
			health applications vendor specialising in HL7-based systems, from March to
			December 2001. The task was the development of a set of HL7 messages and a
			corresponding set of GeHR archetypes for diabetes shared care. Final report
			<a href="../files/gehr/GPCG_Project5_01.PDF">here</a>.</p>

			<h3>GP Data Transformation Project</h3>
			<p>Following the successful proof-of-concept trial in the acute hospital sector,
			this project aimed to extend the legacy data transformation methodology into the
			primary care sector. Data was extracted from the two leading (and incompatible)
			Australian GP clinical systems and transformed to GeHR-compliant data for use in
			diabetes shared care between a specialist diabetician and several GPs. An
			internet-based shared EHR was created in what is believed to be the first
			demonstration of this kind in the world. The project was undertaken in
			partnership with the DSTC from January to June 2002.</p>
			<p>The research undertaken during 1998-2001 formed the basis of the
			openEHR body of work and contributed to the establishment of the
			openEHR architecture, which has become a major element of national
			(Standards Australia) and international (CEN) standardisation efforts and
			R&amp;D collaborations.</p>
				
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
