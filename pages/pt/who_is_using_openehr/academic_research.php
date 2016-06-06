<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Pesquisa Acadêmica';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<p>See <a href="https://www.zotero.org/groups/openehr/items">here</a> for the Zotero openEHR Research library, which contains an up to date index of all papers and theses published on opeEHR-related topics.</p>
			
			<p>If you are using openEHR for an academic (including open source) product, and would like to be included on the list, or you want to submit updates or corrections, then please <a href="/about/contacts">contact us</a>.</p>
			
			<table class="TableBasic">
			<tbody>
			<tr>
				<th>Country</th>
				<th>Institution</th>
				<th>Team</th>
				<th>Description</th>
			</tr>
			<tr>
				<td><img src="/files/who_is_using_openehr/Flag_of_Argentina.svg.png" alt="Flag of Argentina" title="Flag of Argentina" style="width:80px;"><p>Argentina</p></td>
				<td><a href="http://www.hospitalaustral.edu.ar/">Austral University Hospital</a></td>
				<td>Alan March</td>
				<td>
				<ul>
					<li>implementation of openEHR EHR as a long-term project.</li>
					<li>initial phase is working on discharge summary</li>
				</ul>
				</td>
			</tr>
			<tr>
				<td rowspan="5"><img src="/files/who_is_using_openehr/brazil_S.gif" alt="Flag of Brazil" title="Flag of Brazil" style="width:80px;"><p>Brazil</p></td>
				<td><a href="http://www.ufrj.br/">University of Rio de Janiero</a></td>
				<td>Rigoleta Dutra</td>
				<td>PhD Thesis on archetype-based systems<br/>
				[2009]</td>
			</tr>
			<tr>
				<td><a href="http://www.senai.fieb.org.br/">SENAI - Cimatec</a><br/>Industry training centre</td>
				<td>Gustavo M. Bacelar-Silva<br/>Hilton V. Cesar<br/>Patricia F. Braga<br/>Rodney N. Guimarães</td>
				<td>openEHR-based pervasive health information system for primary care: First Brazilian Experience for Public Care.<br/>
				[2013]</td>
			</tr>
			<tr>
				<td><a href="http://www.uff.br/">Fluminense Federal University</a></td>
				<td>Luciana Tricai Cavalini, <br/>Helia Kawa, <br/>Israel Figueiredo Junior, postgrad/undergrad students</td>
				<td>Epidemiologic Surveillance Support System (EpiS3): a decision-support system
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
				<td><a href="http://www.ufmg.br/">Minas Gerais Federal University</a><br/>
				School of Information Sciences</td>
				<td>Marcelo Rodrigues dos Santos</td>
				<td>Phd Thesis on semantic interoperability involving the usage of
				openEHR RM and AM models.<br/>
				[2012]</td>
			</tr>
			<tr>
				<td>Hospital das Clinicas<br/>University of S&atilde;o Paulo<br/>
				<a href="http://www.fmrp.usp.br/novo_portal/">Ribeir&atilde;o Preto School of Medicine</a></td>
				<td>Center of Information and Analyses (contact: Flavio Barbosa)</td>
				<td>Applying archetypes for construction of clinical observations and radiological reports.<br/>
				[May 2009]</td>
			</tr>
			<tr>
				<td><img src="/files/who_is_using_openehr/germany_S.gif" alt="Flag of Germany" title="Flag of Germany" style="width:80px;"><p>Germany</p></td>
				<td>University of Heidelberg / <br/>Heilbronn University</td>
				<td>Petra Knaup, <br/>
				Jasmin Buck, <br/>
				Christian Kohl</td>
				<td>
				<ul>
					<li>Expressing Clinical Data Sets with openEHR Archetypes</li>
					<li>Modelling of a comprehensive electronic patient record for the Neonatology Department of the University Hospital Heidelberg using the openEHR approach</li>
				</ul>
				</td>
			</tr>
			<tr>
				<td><img src="/files/who_is_using_openehr/japan_S.gif" alt="Flag of Japan" title="Flag of Japan" style="width:80px;"><p>Japan</p></td>
				<td><a href="http://www.ehime-u.ac.jp/">Ehime University</a></td>
				<td>Shinji KOBAYASHI, <br/>
				Eizen KIMURA, <br/>
				Ken ISHIHARA</td>
				<td>Ruby reference implementation of openEHR.<a href="http://openehr.jp/">Home page</a>.<br/>
				[2008-]</td>
			</tr>
			<tr>
				<td><img src="/files/who_is_using_openehr/newzealand.gif" alt="Flag of New Zealand" title="Flag of New Zealand" style="width:80px;"><p>New Zealand</p></td>
				<td><a href="http://www.fmhs.auckland.ac.nz/soph/centres/nihi/">The University of Auckland, National Institute for Health Innovation</a></td>
				<td>
				Koray Atalag, <br/>Hong Yul Yang</td>
				<td>GastrOS is an endoscopic reporting application based on open standards:
				openEHR and MST. GUI is driven by Archetypes/Templates. It is part of our
				research at the University of Auckland to investigate software maintainability
				and interoperability.<br/>
				Uses <a href="http://openehr.codeplex.com/">openEHR.Net on CodePlex</a><br/>
				[Mar 2012]</td>
			</tr>
			<tr>
				<td><img src="/files/who_is_using_openehr/portugal_flag.jpg" alt="Flag of Portugal" title="Flag of Portugal" style="width:80px;"><p>Portugal</p></td>
				<td>Center for Research in Health Technologies and Information Systems (CINTESIS),<br/>
				Faculty of Medicine,<br/>Porto University</td>
				<td>Gustavo Bacelar,<br/>
				Jos&eacute; Patriarca-Almeida,<br/>
				Paulo R. Ferreira,<br/>
				Pedro M Vieira-Marques,<br/>
				Ricardo Cruz-Correia</td>
				<td>Master Thesis (Gustavo Bacelar) on&nbsp;conversion of&nbsp;clinical guidelines
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
				<td rowspan="5"><img src="/files/who_is_using_openehr/spain.gif" alt="Flag of Spain" title="Flag of Spain" style="width:80px;"><p>Spain</p></td>
				<td>University of Alcal&aacute;, Madrid<br/>
				<a href="http://www.ieru.org/">Information Engineering Research Unit</a></td>
				<td>L. Lezcano, <br/>
				Miguel-Angel Sicilia,<br/>
				P. Serrano-Balazote,<br/>
				E. Rivero-Ruiz</td>
				<td>Activities:
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
				<td>
				<a href="http://www.upv.es">Technical University of Valencia</a>,<br/><a href="http://www.ibime.upv.es">Biomedical Informatics Group</a></td>
				<td>Jos&eacute; Alberto Maldonado,<br/>
				David Moner,<br/>
				Diego Bosc&aacute;,<br/>
				Montserrat Robles</td>
				<td>
				Since 2004 the research group has been working on the application of the dual model methodology in legacy systems, providing tools and methodologies to upgrade existing data into archetyped instances according to any selected reference model.<br/>
				Activities:
				<ul>
					<li>Formalisation of the constraint part of archetypes as semi-structured data types.</li>
					<li>Description of existing information as legacy archetypes.</li>
					<li>Data integration and transformation based on archetype definitions.</li>
					<li>Archetyped data reuse and abstraction for clinical research.</li>
					<li>Definition of generic an reusable clinical models based on the archetype methodology.</li>
				</ul>
				See LinkEHR - a reference model-independent archetype editor and data transformation tool (<a href="http://www.linkehr.com/">www.linkehr.com</a>).<br/>
				[April 2013]</td>
			</tr>
			<tr>
				<td><a href="http://www-en.us.es/">University of Seville</a></td>
				<td>Isabel Rom&aacute;n Mart&iacute;nez</td>
				<td>Integration of Federated EHR Systems Using Semantic Web Techniques - the integration of heterogeneous systems using the openEHR Reference Model and archetype methodology.
				<ul>
					<li>This has led to the implementation of the <a href="http://trajano.us.es/%7Eisabel/EHR/">openEHR models in OWL</a>
					(note that these are around 0.95 Release vintage and have not been updated since mid? 2004).[2003-2005]</li>
					<li>Currently working on SOA for healthcare, using ISO RM/ODP, OMG MDA, openEHR [2009]</li>
				</ul>
				</td>
			</tr>
			<tr>
				<td>Departamento de Inform&aacute;tica y Sistemas<br/>Campus de Espinardo,<br/>
				<a href="http://www.um.es/">Murcia University</a></td>
				<td><a href="http://webs.um.es/valencia">Jesualdo Tom&aacute;s Fern&aacute;ndez Breis<br/>
				Rafael Valencia Garc&iacute;a</a><br/>
				Marcos Men&aacute;rguez Tortosa <br/> 
				<a href="http://klt.inf.um.es/%7Ecati">Catalina Mart&iacute;nez Costa</a></td>
				<td>
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
				<td>
				<a href="http://www.usc.es/">University of Santiago de Compostela</a>, <a href="http://www.usc.es/keam">Knowledge Engineering Applied to Medicine Group.</a></td>
				<td>Mar&iacute;a Jes&uacute;s Taboada Iglesias<br/>
				Mar&iacute;a Meizoso Garc&iacute;a<br/>
				Jos&eacute; Luis Iglesias Allones<br/>
				Diego Martinez Hern&aacute;ndez<br/>
				Seraf&iacute;n Tellado L&oacute;pez<br/>
				Rosario Lal&iacute;n</td>
				<td>The project "<a href="http://www.usc.es/keam/project.html">Management of terminologies for archetypes</a>" started in 2009 aiming at:
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
				<td><img src="/files/who_is_using_openehr/slovakia.gif" alt="Flag of Slovakia" title="Flag of Slovakia" style="width:80px;"><p>Slovak Republic</p></td>
				<td>NCA STU &ndash; National archetype center,<br/>
				Slovak Technical University, Bratislava.</td>
				<td><a href="mailto:peter.linhardt@stuba.sk">Peter Linhardt, PhD</a></td>
				<td>The National Archetype Centre programme, established September 2011 undertakes the following activities:
				<ul>
					<li>Localisation of openEHR archetypes for National health information system;</li>
					<li>Development of archetypes for GP Information systems;</li>
					<li>Research project: transformation of free text medical records to the archetype-based form.</li>
				</ul>
				[March 2012]</td>
			</tr>
			<tr>
				<td rowspan="2"><img src="/files/who_is_using_openehr/sweden_S.gif" alt="Flag of Sweden" title="Flag of Sweden" style="width:80px;"><p>Sweden</p></td>
				<td><a href="http://www.imt.liu.se/mi/ehr/">Medical Informatics group at the Department of Biomedical Engineering, <br/>
				Link&ouml;pings universitet, Sweden</a></td>
				<td>Erik Sundvall,<br/>
				Daniel Karlsson</td>
				<td>For current details see: <a href="http://www.imt.liu.se/mi/ehr/ ">http://www.imt.liu.se/mi/ehr/ </a>
				<br/>
				Project examples:
				<ul>
					<li>Exploration of archetype-based approaches to the EHR</li>
					<li>Creation of the Java based LiU Archetype Editor</li>
				</ul>
				[2012]</td>
			</tr>
			<tr>
				<td>Karolinska Institutet</td>
				<td>Nadim Anani,<br/>
				Rong Chen,<br/>
				Sabine Koch</td>
				<td>Ongoing PhD program to explore how semantic EHR technology, openEHR in
				particular, can be extended to support distributed clinical processes. This will
				be done by exploring how to incorporate clinical practice guidelines and
				clinical pathways into openEHR, using guidelines from the clinical domain of
				stroke care.<br/>
				[Mar 2012]</td>
			</tr>
			<tr>
				<td><img src="/files/who_is_using_openehr/uk_S.gif" alt="Flag of United Kingdom" title="Flag of United Kingdom" style="width:80px;"><p>UK</p></td>
				<td><a href="http://www.chime.ucl.ac.uk/">CHIME (Centre for
				Health Informatics and Multi-professional Education),<br/>
				University College London</a></td>
				<td><a href="http://www.openehr.org/wiki/display/%7Eserefarikan">Seref Arikan</a>,<br/>
				Professor David Ingram</td>
				<td><a href="http://opereffa.chime.ucl.ac.uk">Opereffa</a> is a proof of concept
				implementation of key aspects of openEHR specification. Its initial version
				explores the key requirements of implementation, all the way from a web based UI
				to a RDMS based back end. It includes some Eclipse plugins and Eclipse BIRT
				(Business Intelligence and Reporting Tools) integration.<br/>
				[Mar 2012]</td>
			</tr>
			</tbody>
			</table>

<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>