<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

	<title>openEHR - Industry News</title>
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
			<?php $current = 5; include '../menu/newsmenu.php' ?>
		</div>
		
		<div id="TextArea">
		
			<h1>Industry News</h1>
			
			<h2>openEHR in &pound;1.1m Wellcome Trust Sintero project</h2>
			<h6>9. July 2009 | from: Thomas Beale</h6>
			
			<br/>
			<p>The openEHR health computing platform will be used as the basis of the core clinical repository for the Sintero project (<a href="http://www.cs.cf.ac.uk/newsandevents/wellcome.html">http://www.cs.cf.ac.uk/newsandevents/wellcome.html</a>); funded by a &pound;1.1m grant from the Wellcome Trust. The central aim of Sintero is to provide a reliable means of solving a key problem in medical research: the difficulty (often an economic impossibility) of semantically aggregating data from multiple sources, and making it amenable to research querying and inferencing. This allows longitudinal patient histories to be reconstructed from heterogeneous systems, which can the be mined for outcomes studies and patient risks.</p>
			<p>Led by Drs. Ed Conley and Ian Taylor of Cardiff University's School of Computer Science (COMSC), the project will develop computer hardware and software that automatically forms and maintains high quality collaborative networks between sets of geographically-distributed installation sites. Sintero will co-integrate a number of key interoperability technologies including openEHR, Continua Health Alliance, Integrating the Healthcare Enterprise (IHE) and the Clinical Data Interchange Standards Consortium (CDISC) for the primary purpose of high quality outcomes analysis.</p>
			<p>Benefits of the technology include cross-site elimination of ambiguous meanings that can cause medical errors, cross-site sharing of single functional processes, and document sharing or data aggregation across heterogeneous health IT systems in support of outcomes analysis. Sintero will answer unmet needs by simplifying establishment of secure collaborations where meanings of complex sets of clinical information need to be standardised and shared.&nbsp; When installed across multiple sites, Sintero will also support a useful set of data collection, storage, aggregation and cross-site semantic query functions. Sintero has major potential internationally to give isolated clinical communities a state-of-the-art, multi-site semantic data capability.</p>
			<p>All openEHR archetypes developed in the course of the project will be created and maintained in the openEHR Clinical Knowledge Manager at <a href="http://www.openehr.org/knowledge">http://www.openEHR.org/knowledge</a>, and will be open to review by the clinical community at large.</p>
						
			<br/>
			<a href="/news_events/industry_news/">>> Back to Industry News</a>
			
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