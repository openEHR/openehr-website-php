<?php
$PageName = 'Vendors / Developers';
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
			
			<p>openEHR provides many advantages for health information system and application vendors. Because it is a standardised computing platform it enables many vendors to avoid re-inventing their own back-end for EHR, demographics, data integration and so on, and instead use one of the high-quality implementations becoming available. All of the API and service specifications are already or will soon be publicly available.</p>
			<p>A prime source of efficiency when using the openEHR platform is the ability to use archetypes agreed formally elsewhere, ensuring genuine semantic interoperability of health records. This might be considered a form of cooperative clinical configuration. While such configuration is a source of income to vendors in the current environment, it is a waste for the health system as a whole and a source of many of the integration problems we are currently experiencing.</p>
			
			
			<h2>What can openEHR do for you</h2>
			
			<h3>Application Vendors</h3>
			<p>Vendors of applications such as clinical systems for general practice, hospital departments, decision support and many others can use the openEHR platform for all clinical and potentially demographic information, rather than having to provide their own implementation. The application interacts with the openEHR platform via the virtual EHR (vEHR) API, Archetype Query Language (AQL) and XML, regardless of which implementation is used. Larger implementations support secure high-performance, high-volume EHR repositories.</p>
			<p>openEHR Templates can be effectively used to build data capture, viewing and querying forms for an application. The forms can be generated from openEHR Templates using a template-building tool, in e.g. Xform, .Net or other formats. This ensures that the semantics of archetypes ar preserved through the application stack.</p>
			
			<h3>Integration Vendors</h3>
			<p>Integrating with other data sources is facilitated by the use of openEHR Templates, which can be used to drive an integration engine that converts all manner of source data and documents into openEHR form, where it is archetype-conformant and can treated as part of a patient-centric record. All audit trailing and feeder system meta-data (e.g. identifiers) is captured in openEHR structures, ensuring that links to source data are preserved.</p>
			<p>Data from sources that are federated in this way can then be output in a number of formats, including openEHR, CEN EN13606, HL7 CDA rel2, PDF, and various XML and HTML.</p>
			
			<h3>Hospital Information System Vendors</h3>
			<p>Using an implementation of the openEHR platform as the back-end of a large system provides many advantages. Rather than having to constantly maintain a proprietary database structure, using the openEHR back-end will make the system applications much easier to manage and evolve. Integration with other systems is likely to be easier via the standard formats supported by the platform, including CEN EN13606, HL7 CDA, HL7v2.x and others.</p>
			
			
			<h2>How you can get involved</h2>
			<p>You can become openEHR Partner through the Organisational membership, or members of your team can become part of openEHR as the Individual members. Find out more about <a href="../../about/membership">membership</a>.</p>
			
			
			<h2>How openEHR works for others</h2>
			<p>For list of companies which have built solutions on openEHR see <a href="../../who_is_using_openehr">who is using openEHR</a>.</p>
			
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