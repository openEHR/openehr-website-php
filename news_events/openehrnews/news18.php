<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title>openEHR - News</title>
	<?php include '../../panel/headpanel.php' ?>
</head>


<body>

<div id="MainFrame">
	
	<div id="TopPanel">
	<?php include '../../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu" style="text-align:left">
		<div class="nav">
   		<?php include '../../menu/topmenu.php' ?>
		</div>
	</div> 

	<div id="MainArea">
	
		<div id="SideMenu">
		<?php $current = 1; include '../menu/newsmenu.php' ?>
		</div>
		
		<div id="TextArea">
			
			<h1>News</h1>
			<h2>Brazil chooses openEHR for EHR at all levels of government</h2>
			<h6>6. January 2011 | from: Jussara R&ouml;tzsch, Ministry of Health, Brazil</h6>
			<br/>
			<p>Brazil has chosen to use openEHR and archetypes for the shareable EHR at
			three levels of government - federal, state and municipal.</p>
			<p>On 16. December 2010, at the 8th ordinary meeting of the
			Brazilian Tripartite Commission (CTI), a draft Ministerial Order establishing 
			the standards for interoperability to be adopted by health information systems
			of the various levels of the Brazilian National Health System (SUS) was
			submitted for agreement. CTI is the Brazilian collegiate body representing the
			Ministry of Health (MoH), the National Council of State Health Secretaries
			(CONASS) and the National Council of Municipal Health Secretaries (CONASEMS),
			i.e. 3 levels of government. The CTI is responsible for setting regulation
			and operational policies within SUS. The interoperability framework consists
			of a set of basic assumptions, operational rules and technical specifications
			to regulate the exchange of information between public and private municipal,
			state and federal health information systems, establishing also conditions of
			interaction with the other spheres of government and society in general.
			(Minutes of agreement meeting:
			<a href="http://portal.saude.gov.br/portal/arquivos/pdf/decisoes_cit2010.pdf">http://portal.saude.gov.br/portal/arquivos/pdf/decisoes_cit2010.pdf</a>
			; in Portuguese).</p>
			<p>The standards will be publicly available on the DATASUS (SUS's IT department)
			website (draft statement:
			<a href="http://portal.saude.gov.br/portal/arquivos/pdf/2c_221210.pdf">http://portal.saude.gov.br/portal/arquivos/pdf/2c_221210.pdf</a>
			; in Portuguese). They will be updated on a regular basis and will contain a
			set of meta-data that follow the format already defined by the Brazilian
			E-government programme. Version 1.0, attached to the above resolution, contain 
			two sets of standards, one of web services and one of data structures and
			semantics, the latter only defined at the logical level (business) and
			non-physical archival database, so that legacy systems can communicate through
			nationally agreed XML Schemas.</p>
			<p class="par">The standards choices are as follows:</p>
			<ul>
				<li>EHR information model: openEHR</li>
				<li>clinical reference terminology: SNOMED CT</li>
				<li>clinical documents: HL7 CDA</li>
				<li>record location: IHE PIX (Patient Identifier Cross-Referencing) and PDQ
				(Patients Demographics Query)</li>
			</ul>
			<p>The draft was approved unanimously and agreed by the members of CTI to be
			adopted nationally. The draft has been revised and, according to the
			Coordinator of Information Systems of DATASUS, Francisco Jos&eacute; Marques, it is
			expected to be signed by the the new Minister of Health in the near future.</p>
			<br/>
			<p>Jussara R&ouml;tzsch<br/>
			Ministry of Health, Brazil</p>

			<br/>
			<a href="../news">>> Back to News</a>
		</div>
			

	</div>
	<div id="BottomMenu">
	<?php include '../../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
	<?php include '../../panel/bottompanel.php' ?>	
	</div>

</div>
	
<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>