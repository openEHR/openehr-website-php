<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
	<meta http-equiv="Content-Language" content="en">

	<title>openEHR - Foundation</title>

	<meta name="description" content="openEHR provides open source specifications and reference implementations of future proof EHR systems">
	<meta name="keywords" content="archetypes, openEHR, EHR, electronic health record, electronic medical record, ADL, reference model, clinical models, healthcare, health informatics, medical informatics, EHR standards, ISO 18308, CEN 13606, health care software, open source software, knowledge modelling, patient-centric">
	<meta name="author" content="Sam Heard, Thomas Beale">
	<meta name="copyright" content="The openEHR Foundation">
	<meta name="design" content="Adriana Danilakova">
	<meta name="distribution" content="Global">
	
	<meta name="rating" content="General">
	<meta name="robots" content="All">
	<meta name="revisit-after" content="15 days">
	<meta name="viewport" content="1024">

	<link rel="stylesheet" href="../styles/basic.css"  type="text/css">
	<link rel="stylesheet" href="../styles/programs.css"  type="text/css">
	<link rel="stylesheet" href="../styles/menu.css" type="text/css"> 

	<link rel="home" href="http://www.openehr.org">
	<link rel="bookmark" href="http://www.openehr.org" title="openEHR - Homepage">
	<link rel="index" href="http://www.openehr.org/sitemap">

	<script type="text/javascript" src="../menu/dropdown.js"></script> 
	
</head>


<body>

<div id="MainFrame">
	
	<div id="TopPanel">
	<?php include '../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu" style="text-align:left">
		
		<div class="nav">
   		 <?php include '../menu/topmenu.php' ?>
		</div>
	</div> 

	<div id="MainArea">
	
		<div id="SideMenu">
	
		<?php include 'menu/aboutmenu.php' ?>
		</div>
		
		<div id="TextArea">
			
			<h1>Foundation</h1>
			
			<h2><a name="status"></a>openEHR Status</h2>
			<p>The openEHR Foundation is a non-profit company, limited by guarantee. Its founding shareholders are University College London,
			UK and Ocean Informatics pty, Australia. It is regulated under the UK Companies Acts 1985 and 1989. The name openEHR has been registered internationally as a Trade Mark.</p>
			<p>The openEHR Foundation governance structure is described <a href="govstructure">here</a>.</p>
			<p>Key announcements are found <a href="../news_events/announcements">here</a>.
			
			
			<h2><a name="mission"></a>openEHR Mission</h2>
			<p class="par">openEHR Foundation is an international organisation, working towards:</p>
			<ul>
				<li>making the interoperable, life-long electronic health record a reality;</li>
				<li>improving health care in the information society.</li>
			</ul><br/>
			<p class="par">It does this by:</p>
			<ul>
				<li>developing open specifications, open-source software and knowledge resources;</li>
				<li>engaging in clinical implementation projects;</li>
				<li>participating in international standards development;</li>
				<li>supporting health informatics education.</li>
			</ul>
			
			
			<h2><a name="vision"></a>openEHR Vision</h2>
			<p>The openEHR Foundation is proceeding on the basis of three principles: rigour, engagement and trust.
			They have arisen from consideration of the key aspects of the Foundation's work: the specifications of the EHR computing platform,
			archetype development by clinicians and ensuring that we achieve real benefit to the community through implementation trials.</p>
			
			<h3>Specifications: rigorous and proven through implementation</h3>
			<p>Managed by the Architecture Review Board (ARB), these are the fundamental output of the organisation providing the rigorous platform on which the archetypes
			and other clinical artefacts are based. The ARB has determined their strategic directions and published a delivery roadmap for 2008.
			This group will be finalising the Template model, which is key to using openEHR in real systems,
			and amongst other things ensuring correct integration with SNOMED and other complex terminologies.
			Implementation, the critical step in the design process, is proceeding with Java, .Net, Eiffel, Python and Ruby.</p>
		
			<h3>Developing Trust: patients and citizens at the centre</h3>
			<p class="par">As we develop the specifications and engage clinicians, it is increasingly important to ensure that the platform benefits people using the health service.
			At this point the openEHR architecture ensures:</p>
			<ul>
			<li>that information (rather than just authorisation data) can be kept in personal storage such as a memory key or phone;</li>
			<li>that information can be stored with no identifying information within the EHR;</li>
			<li>that information does not have to be centralised, being stored and/or made available only where it is required;</li>
			<li>accountability of users and providers;</li>
			<li>that the owner of the record can partition the information and control access if required.</li>
			</ul>
			<br/>
			<p>The next phase of uptake and implementation will require careful scrutiny by those using the health service and providers of personal health record services. </p>
			
			<h3>openEHR as a standard</h3>
			<p>The success of openEHR is in no small part due to the formal acceptance of CEN 13606 as a European and ISO standard. This standard is based on many aspects of the openEHR design approach. openEHR implementations can easily generate and consume 13606 communication extracts should this standard be widely adopted. Many see openEHR as a more suitable environment for carrying this work forward due to its lean and more appropriate processes for technology advancement. Whatever the future holds, the openEHR Foundation will seek to work very closely with CEN, ISO and other standards organisations. We will, however, seek to develop the standards in a suitable technical environment with implementation testing and then put these to the formal organisations rather than attempt to develop standards by committee.</p>
			<p>As terminology is a key-stone component of semantic interoperability, the specifications need to include the binding of clinical models to terminology subsets. There are a few proposals for how to make this work efficiently and, to ensure the solution will support future EHR environments, the openEHR Foundation is seeking a formal relationship with IHTSDO, the international SNOMED group.</p>
			
			<h3>Finally...</h3>
			<p>The openEHR Foundation will continue to proceed based on its usual 3 key activities ... implementation, implementation, implementation.</p>
			<br/>
			<p>To find out more about origins of openEHR click <a href="originsofopenehr">here</a>.
		</div>
			

	</div>

	<div id="BottomMenu">
	<?php include '../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
	<?php include '../panel/bottompanel.php' ?>
	</div>

</div>
	
<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>