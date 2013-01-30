<?php
$PageName = 'Academic Research';
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
			<p>If you are using openEHR for an academic (including open source) product, and would like to be included on the list, or you want to submit updates or corrections, then please <a href="about/contacts">contact us</a>.</p>
			<br/>
			
			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT"><p>Country</p></th>
				<th class="TableMainT"><p>Institution</p></th>
				<th class="TableMainT"><p>Team</p></th>
				<th class="TableMainT"><p>Description</p></th>
			</tr>
			<tr>
				<td class="TableMainC"><p><img width="80px" alt="argentina_flag" title="argentina_flag" src="../files/basic/Flag_of_Argentina.svg.png"></p>
				<p>Argentina</p></td>
				<td class="TableMainC"><a href="http://www.hospitalaustral.edu.ar/">Austral University Hospital</a></td>
				<td class="TableMainC">Alan March</td>
				<td class="TableMainC">
				<ul>
					<li>implementation of openEHR EHR as a long-term project.</li>
					<li>initial phase is working on discharge summary</li>
				</ul>
				</td>
			</tr>
			<tr>
				<td class="TableMainC" rowspan="4"><p><img width="80px" alt="brazil_flag" title="brazil_flag" src="../files/basic/brazil_S.gif"></p>
				<p>Brazil</p></td>
				<td class="TableMainC"><a href="http://www.ufrj.br/">University of Rio de Janiero</a>
				</td>
				<td class="TableMainC">Rigoleta Dutra
				</td>
				<td class="TableMainC">PhD Thesis on archetype-based systems<br/>
				[2009]</td>
			</tr>
			<tr>
				<td class="TableMainC"><a href="http://www.uff.br/">Fluminense Federal University</a></td>
				<td class="TableMainC">Luciana Tricai Cavalini, <br/>
				Helia Kawa, <br/>
				Israel Figueiredo Junior, postgrad/undergrad students</td>
				<td class="TableMainC">Epidemiologic Surveillance Support System (EpiS3): a decision-support system
				for epidemiological surveillance (disease control and prevention for communities
				and healthcare settings).<br/>
				Current activities:
				<ul>
					<li>Building archetypes in order to fit the interface between clinical and
					epidemiological concepts</li>
					<li>Developing the application on the top of OSHIP (Open Source Health
					Information Platform), the reference implementation of openEHR specs in
					Python/Zope3</li>
				</ul>
				[2009]</td>
			</tr>
			<tr>
				<td class="TableMainC"><a href="http://www.ufmg.br/">Minas Gerais Federal University</a><br/>
				School of Information Sciences</td>
				<td class="TableMainC">Marcelo Rodrigues dos Santos</td>
				<td class="TableMainC">Phd Thesis on semantic interoperability involving the usage of
				openEHR RM and AM models.<br/>
				[2009]</td>
			</tr>
			<tr>
				<td class="TableMainC">Hospital das Clinicas<br/>University of S&atilde;o Paulo<br/>
				<a href="http://www.fmrp.usp.br/novo_portal/">Ribeir&atilde;o Preto School of Medicine</a></td>
				<td class="TableMainC">Center of Information and Analyses (contact: Flavio Barbosa)</td>
				<td class="TableMainC">Applying archetypes for construction of clinical observations and radiological reports.<br/>
				[May 2009]</td>
			</tr>
			<tr>
				<td class="TableMainC"><p><img width="80px" alt="germany_flag" title="germany_flag" src="../files/basic/germany_S.gif"></p>
				<p>Germany</p></td>
				<td class="TableMainC">University of Heidelberg / <br/>Heilbronn University</td>
				<td class="TableMainC">Petra Knaup, <br/>
				Jasmin Buck, <br/>
				Christian Kohl</td>
				<td class="TableMainC">
				<ul>
					<li>Expressing Clinical Data Sets with openEHR Archetypes</li>
					<li>Modelling of a comprehensive electronic patient record for the Neonatology
					Department of the University Hospital Heidelberg using the openEHR
					approach</li>
				</ul>
				</td>
			</tr>
			<tr>
				<td class="TableMainC"><p><img width="80px" alt="japan_flag" title="japan_flag" src="../files/basic/japan_S.gif"></p>
				<p>Japan</p></td>
				<td class="TableMainC"><a href="http://www.ehime-u.ac.jp/">Ehime University</a></td>
				<td class="TableMainC">Shinji KOBAYASHI, <br/>
				Eizen KIMURA, <br/>
				Ken ISHIHARA</td>
				<td class="TableMainC">Ruby reference implementation of openEHR.<a href="http://openehr.jp/">Home page</a>.<br/>
				[2008-]</td>
			</tr>
			<tr>
				<td class="TableMainC"><p><img width="80px" alt="new_zealand_flag" title="japan_flag" src="../files/basic/newzealand.gif"></p>
				<p>New Zealand</p></td>
				<td class="TableMainC"><a href="http://www.fmhs.auckland.ac.nz/soph/centres/nihi/">The University of Auckland, National Institute for Health Innovation</a></td>
				<td class="TableMainC">
				Koray Atalag, <br/>Hong Yul Yang</td>
				<td class="TableMainC">GastrOS is an endoscopic reporting application based on open standards:
				openEHR and MST. GUI is driven by Archetypes/Templates. It is part of our
				research at the University of Auckland to investigate software maintainability
				and interoperability.<br/>
				Uses <a href="http://openehr.codeplex.com/">openEHR.Net on CodePlex</a><br/>
				[Mar 2012]</td>
			</tr>
			<tr>
				<td class="TableMainC"><p><img width="80" alt="portugal_flag" title="portugal_flag" src="../files/basic/portugal_flag.jpg"></p>
				<p>Portugal</p></td>
				<td class="TableMainC">Center for Research in Health Technologies and Information Systems (CINTESIS),<br/>
				Faculty of Medicine,<br/>Porto University</td>
				<td class="TableMainC">Gustavo Bacelar,<br/>
				Jos&eacute; Patriarca-Almeida,<br/>
				Paulo R. Ferreira,<br/>
				Pedro M Vieira-Marques,<br/>
				Ricardo Cruz-Correia</td>
				<td class="TableMainC">Master Thesis (Gustavo Bacelar) on&nbsp;conversion of&nbsp;clinical guidelines
				statements to&nbsp;openEHR archetypes and templates.<br/>
				<a href="http://www.sahib.gim.med.up.pt/">SAHIB</a> - Enhancing
				multi-institutional health data availability through multi-agent systems<br/>
				This project aims to&nbsp;build applications that find, retrieve and deliver patient
				information (using openEHR) to the&nbsp;point-of-care in a secure and timely fashion,
				event though it is distributed across multiple healthcare institutions,
				whilst&nbsp;safeguarding the different agendas and constraints of the various actors.<br/>
				[Apr 2012]</td>
			</tr>
			<tr>
				<td class="TableMainC" rowspan="5">
				<p><img width="80" alt="spain_flag" title="spain_flag" src="../files/basic/spain.gif"></p>
				<p>Spain</p></td>
				<td class="TableMainC">University of Alcal&aacute;, Madrid<br/>
				<a href="http://www.ieru.org/">Information Engineering Research Unit</a></td>
				<td class="TableMainC">L. Lezcano, <br/>
				Miguel-Angel Sicilia,<br/>
				P. Serrano-Balazote,<br/>
				E. Rivero-Ruiz</td>
				<td class="TableMainC">Activities:
				<ul>
					<li>Development of Java libraries to translate openEHR archetypes to OWL:
					<a href="http://oe.dynalias.net:8080/JSPWebArchetypeOntologizer/">ADL2OWL translator</a>
					</li>
					<li>Integrating SWRL rules with archetypes translated to OWL.</li>
					<li>Mapping archetypes in OWL form to ontologies.</li>
				</ul>
				[Dec 2011]</td>
			</tr>
			<tr>
				<td class="TableMainC">
				<a href="http://www.upv.es/">Technical University of Valencia</a>,<br/>Biomedical Informatics Group<br/>
				*Faculty of Informatics.<br/><a href="http://www.um.es/">Murcia University</a>.</td>
				<td class="TableMainC">David Moner,<br/>
				Jesualdo Tom&aacute;s Fern&aacute;ndez*,<br/>
				Jos&eacute; Alberto Maldonado,<br/>
				Montserrat Robles,<br/>
				Diego Bosc&aacute;</td>
				<td class="TableMainC">
				Activities:
				<ul>
					<li>Description of existing information as legacy archetypes.</li>
					<li>Formalisation of the constraint part of archetypes as semi-structured data types.</li>
					<li>Ontological engineering of Archetypes: cooperative development, translation to ontological languages.</li>
				</ul>
				See LinkEHR editor tool - a generic, schema-based archetype tool -
				<a href="http://www.linkehr.com/">http://www.linkehr.com/</a>.<br/>
				[June 2009]</td>
			</tr>
			<tr>
				<td class="TableMainC"><a href="http://www-en.us.es/">University of Seville</a></td>
				<td class="TableMainC">Isabel Rom&aacute;n Mart&iacute;nez</td>
				<td class="TableMainC">Integration of Federated EHR Systems Using Semantic Web Techniques - the integration of heterogeneous systems using the openEHR Reference Model and archetype methodology.
				<ul>
					<li>This has led to the implementation of the <a href="http://trajano.us.es/%7Eisabel/EHR/">openEHR models in OWL</a>
					(note that these are around 0.95 Release vintage and have not been updated since mid? 2004).[2003-2005]</li>
					<li>Currently working on SOA for healthcare, using ISO RM/ODP, OMG MDA, openEHR [2009]</li>
				</ul>
				</td>
			</tr>
			<tr>
				<td class="TableMainC">Departamento de Inform&aacute;tica y Sistemas<br/>Campus de Espinardo,<br/>
				<a href="http://www.um.es/">Murcia University</a></td>
				<td class="TableMainC"><a href="http://webs.um.es/valencia">Jesualdo Tom&aacute;s Fern&aacute;ndez Breis<br/>
				Rafael Valencia Garc&iacute;a</a><br/>
				Marcos Men&aacute;rguez Tortosa <br/> 
				<a href="http://klt.inf.um.es/%7Ecati">Catalina Mart&iacute;nez Costa</a></td>
				<td class="TableMainC">
				The <a href="http://webs.um.es/jfernand/miwiki/doku.php?id=projects:poseacle_gen">POSEACLE
				project</a> started in 2004 aiming at facilitating a semantic management of
				electronic healthcare records related information and knowledge. This research
				project has been done in cooperation with the <a href="http://gim.upv.es/">
				Biomedical Informatics group</a> at the <a href="http://www.upv.es"> Technical
				University of Valencia (Spain)</a> The main objectives are:
				<ul>
					<li>Development of ontologies for the design, generation and use of standardised
					federated electronic health records;</li>
					<li>Publishing existing clinical information as a valid extract of an EHR
					compliant with the European standard;</li>
					<li>Intelligent and customised access to existing clinical information
					compatible with ISO13606 and OpenEHR;</li>
					<li>Development of tools supporting clinical investigation.</li>
				</ul>
				[March 2010]</td>
			</tr>
			<tr>
				<td class="TableMainC">
				<a href="http://www.usc.es/">University of Santiago de Compostela</a>, <a href="http://www.usc.es/keam">Knowledge Engineering Applied to Medicine Group.</a></td>
				<td class="TableMainC">Mar&iacute;a Jes&uacute;s Taboada Iglesias<br/>
				Mar&iacute;a Meizoso Garc&iacute;a<br/>
				Jos&eacute; Luis Iglesias Allones<br/>
				Diego Martinez Hern&aacute;ndez<br/>
				Seraf&iacute;n Tellado L&oacute;pez<br/>
				Rosario Lal&iacute;n</td>
				<td class="TableMainC">The project "<a href="http://www.usc.es/keam/project.html">Management of terminologies for archetypes</a>" started in 2009 aiming at:
				<ul>
					<li>developing automated methods to recover and integrate relevant clinical
					terminology based on the definition of OpenEHR archetypes.</li>
					<li>providing semantic interoperability between healthcare information and
					clinical practice guidelines, through the archetypes and terminology systems.
					</li>
				</ul>
				[March 2012]</td>
			</tr>
			<tr>
				<td class="TableMainC"><p><img width="80" alt="slovakia_flag" title="slovakia_flag" src="../files/basic/slovakia.gif"></p>
				<p>Slovak Republic</p></td>
				<td class="TableMainC">NCA STU &ndash; National archetype center,<br/>
				Slovak Technical University, Bratislava.</td>
				<td class="TableMainC"><a href="mailto:peter.linhardt at stuba dot sk">Peter Linhardt, PhD</a></td>
				<td class="TableMainC">The National Archetype Centre programme, established September 2011 undertakes the following activities:
				<ul>
					<li>Localisation of openEHR archetypes for National health information system;</li>
					<li>Development of archetypes for GP Information systems;</li>
					<li>Research project: transformation of free text medical records to the archetype-based form.</li>
				</ul>
				[March 2012]</td>
			</tr>
			<tr>
				<td class="TableMainC" rowspan="2"><p><img width="80" alt="sweden_flag" title="sweden_flag" src="../files/basic/sweden_S.gif"></p>
				<p>Sweden</p></td>
				<td class="TableMainC"><a href="http://www.imt.liu.se/mi/ehr/">Medical Informatics group at the Department of Biomedical Engineering, <br/>
				Link&ouml;pings universitet, Sweden</a></td>
				<td class="TableMainC">Erik Sundvall,<br/>
				Daniel Karlsson</td>
				<td class="TableMainC">For current details see: <a href="http://www.imt.liu.se/mi/ehr/ ">http://www.imt.liu.se/mi/ehr/ </a>
				<br/>
				Project examples:
				<ul>
					<li>Exploration of archetype-based approaches to the EHR</li>
					<li>Creation of the Java based LiU Archetype Editor</li>
				</ul>
				[2012]</td>
			</tr>
			<tr>
				<td class="TableMainC">Karolinska Institutet</td>
				<td class="TableMainC">Nadim Anani,<br/>
				Rong Chen,<br/>
				Sabine Koch</td>
				<td class="TableMainC">Ongoing PhD program to explore how semantic EHR technology, openEHR in
				particular, can be extended to support distributed clinical processes. This will
				be done by exploring how to incorporate clinical practice guidelines and
				clinical pathways into openEHR, using guidelines from the clinical domain of
				stroke care.<br/>
				[Mar 2012]</td>
			</tr>
			<tr>
				<td class="TableMainC">
				<p><img width="80" alt="uk_flag" title="uk_flag" src="../files/basic/uk_S.gif"></p>
				<p>UK</p></td>
				<td class="TableMainC"><a href="http://www.chime.ucl.ac.uk/">CHIME (Centre for
				Health Informatics and Multi-professional Education),<br/>
				University College London</a></td>
				<td class="TableMainC"><a href="http://www.openehr.org/wiki/display/%7Eserefarikan">Seref Arikan</a>,<br/>
				Professor David Ingram</td>
				<td class="TableMainC"><a href="http://opereffa.chime.ucl.ac.uk">Opereffa</a> is a proof of concept
				implementation of key aspects of openEHR specification. Its initial version
				explores the key requirements of implementation, all the way from a web based UI
				to a RDMS based back end. It includes some Eclipse plugins and Eclipse BIRT
				(Business Intelligence and Reporting Tools) integration.<br/>
				[Mar 2012]</td>
			</tr>
			</tbody>
			</table>
			<br/><br/>
		
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