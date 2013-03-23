<?php
$PageName = 'Community News';
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
			<?php include '../menu.php' ?>
		</div>
		
		<div id="TextArea">
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>Erik Sundvall's EHR PhD thesis published online</h2>
			<h6>27. January 2013 | from: Erik Sundvall</h6>
			<br/>
			
			<p><a href="http://www.imt.liu.se/%7Eerisu/" target="_blank">Erik Sundvall</a>'s PhD thesis entitled "Scalability and Semantic Sustainability in Electronic Health Record Systems" is now available <a href="http://urn.kb.se/resolve?urn=urn:nbn:se:liu:diva-87702" target="_blank">online</a>. It contains many openEHR-related papers and discussions (see abstract included below).</p>
			<p>Public PhD defence will be held the 15:th of February, in Link&ouml;ping, Sweden. Faculty opponent: prof. Dipak Kalra, UCL. (Temporary <a href="http://www.imt.liu.se/%7Eerisu/2013/phd/" target="_blank">event-information page</a>; can be used for online participation or getting a recording.)</p>
			
			<h3>Abstract</h3>
			<i><p>This work is a small contribution to the greater goal of making software systems used in healthcare more useful and sustainable. To come closer to that goal, health record data will need to be more computable and easier to exchange between systems.</p>
			<p>Interoperability refers to getting systems to work together and semantics concerns the study of meanings. If Semantic interoperability is achieved then information entered in one information system is usable in other systems and reusable for many purposes. Scalability refers to the extent to which a system can gracefully grow by adding more resources. Sustainability refers more to how to best use available limited resources. Both aspects are important.</p>
			<p>The main focus and aim of the thesis is to increase knowledge about how to support scalability and semantic sustainability. It reports explorations of how to apply aspects of the above to Electronic Health Record (EHR) systems, associated infrastructure, data structures, terminology systems, user interfaces and their mutual boundaries.</p>
			<p>Using terminology systems is one way to improve computability and comparability of data. Modern complex ontologies and terminology systems can contain hundreds of thousands of concepts that can have many kinds of relationships to multiple other concepts. This makes visualization challenging. Many visualization approaches designed to show the local neighbourhood of a single concept node do not scale well to larger sets of nodes. The interactive TermViz approach described in this thesis, is designed to aid users to navigate and comprehend the context of several nodes simultaneously. Two applications are presented where TermViz aids management of the boundary between EHR data structures and the terminology system SNOMED CT.</p>
			<p>The amount of available time from people skilled in health informatics is limited. Adequate methods and tools are required to develop, maintain and reuse health-IT solutions in a sustainable way. Multiple levels of modelling including a fixed reference model and another layer of flexible reusable ?archetypes? for domain specific data structures, is an approach with that aim used in openEHR and the ISO 13606 standard. This approach, including learning, implementing and managing it, is explored from different angles in this thesis. An architecture applying Representational State Transfer (REST) to archetype-based EHR systems, in order to address scalability, is presented. Combined with archetyping this architecture also aims at enabling a sustainable way of continuously evolving multi-vendor EHR solutions. An experimental open source implementation of it, aimed for learning and prototyping, is also presented.</p>
			<p>Manually changing database structures used for storage every time new versions of archetypes and associated data structures are needed is likely not a sustainable activity. Thus storage systems that can handle change with minimal manual interventions are desirable. Initial explorations of performance and scalability in such systems are also reported.</p>
			<p>Graphical user interfaces focused on EHR navigation, time-perspectives and highlighting of EHR content are also presented ? illustrating what can be done with computable health record data and the presented approaches.</p>
			<p>Desirable aspects of semantic sustainability have been discussed, including: sustainable use of limited resources (such as available time of skilled people), and reduction of unnecessary risks. A semantic sustainability perspective should be inspired and informed by research in complex systems theory, and should also include striving to be highly aware of when and where technical debt is being built up. Semantic sustainability is a shared responsibility.</p>
			<p>The combined results presented contribute to increasing knowledge about ways to support scalability and semantic sustainability in the context of electronic health record systems. Supporting tools, architectures and approaches are additional contributions.</p></i>

			<br/>
			<a href="/news_events/community_news/">>> Back to <?php echo "$PageName";?></a>
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