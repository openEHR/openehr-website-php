<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = '2014-09-16 Meeting Report';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			<h2 id="openEHR2014roadmapmeetingreport-Summary">Summary</h2>
			<p>On September 16 and 17 a general openEHR meeting was held in Lillestrom, near Oslo, with the intention of developing the roadmap for various key activities.<br />
		Thanks to DIPS asa, Norway, for organising and providing meeting rooms, catering and IT support. <br />
		<br />
		Over 30 attendees included participants from 5 current openEHR vendor companies, new vendors, Norwegian and Swedish health organisations and universities, and various other organisations.<br />
		<br />
		The meeting followed an agenda covering the following topics (details <a href="http://www.openehr.org/wiki/display/oecom/September+2014+Roadmap+Meeting" rel="nofollow">here</a>
		):</p>
		<ul><li>specifications - physical format,</li>
		<li>clinical modelling industry sprint</li>
		<li>professionalism - training and certification</li>
		<li>conformance and product accreditation</li>
		<li>Community infrastructure, website</li>
		<li>working with the openEHR Foundation: governance and membership</li>
		<li>tooling, including next generation archetype / template / terminology editor</li>
		</ul>
		<p>The meeting was very successful in terms of information sharing, discussions, and proposals.</p>
		<h2 id="openEHR2014roadmapmeetingreport-Outcomes">Outcomes</h2><h3 id="openEHR2014roadmapmeetingreport-Overallpriorities">Overall priorities</h3><p>During the opening discussion, the following priorities were particularly mentioned:</p>
		<ul><li>Entry level openEHR - getting started is too hard for newcomers</li>
		<li>Deal with licensing FUD - better address wrong perceptions about openEHR licences, which are all in fact either &quot;Apache 2&quot; or &quot;Creative Commons&quot;, and thus more open than most alternatives/standards.</li>
		<li>Support for localisation, affiliate groups</li>
		<li>Restarting specifications release work</li>
		<li>Better tooling - the existing modelling tools are showing their age and need comprehensive renewal</li>
		</ul>
		<h3 id="openEHR2014roadmapmeetingreport-Keypresentations">Key presentations</h3><ul><li>Thomas Beale provided a <a href="http://www.openehr.org/wiki/download/attachments/49054537/openEHR%202014.pdf?version=1&amp;modificationDate=1410858997000&amp;api=v2" rel="nofollow">brief scene-setting introduction</a>
		, based on the concept of 'investible standards' from a <a href="http://www.openehr.org/wiki/download/attachments/49054537/openEHR%202014.pdf?version=1&amp;modificationDate=1410858997000&amp;api=v2" rel="nofollow">recent blog post</a>
		.</li>
		<li>Ian McNicoll presented on 'working with the Foundation', which led to a lively discussion on the need for clearer governance of the foundation, including clearer membership rules and statutes (by-laws).<ul><li>Gunnar Klein provided <a href="/wiki/display/oecom/Some+proposals+for+the+formalisation+of+the+openEHR+governance">documentary material relating to improving governance</a>
		</li>
		</ul>
		</li>
		<li>Heather Leslie and Ian McNicoll presented the '<a href="http://www.openehr.org/wiki/pages/viewpage.action?pageId=51511354" rel="nofollow">industry sprint</a>
		', a funded archetype development activity to create 69 published archetypes on a short time frame in 2014/2015.</li>
		<li>Ian McNicoll <a href="http://www.openehr.org/wiki/download/attachments/49054537/Spain.pptx?version=1&amp;modificationDate=1410971787000&amp;api=v2" rel="nofollow">presented on the UK HANDI-HOPD activity</a>
		, an openEHR-based health apps demonstration and learning space backed by the NHS.</li>
		<li>Rong and Iago presented on <a href="/wiki/download/attachments/51511578/GDL_update_Oslo_2014.pdf?version=1&amp;modificationDate=1412083856000&amp;api=v2">Guideline Definition Language (GDL)</a>
		, an ADL-like language for representing guidelines that Cambio has implemented.</li>
		<li>A <a href="http://www.openehr.org/wiki/display/oecom/openEHR+2014+Roadmap+-+Product+and+Market" rel="nofollow">brainstorm </a>
		on conformance specification and methods was undertaken.</li>
		<li>Marand presented on <a href="http://www.openehr.org/wiki/download/attachments/49054537/OpenEHR2014-Oslo_InterOp-Marand.pdf?version=1&amp;modificationDate=1410971787000&amp;api=v2" rel="nofollow">IHE and FHIR in openEHR</a>
		.</li>
		<li>A <a href="http://www.openehr.org/wiki/display/oecom/openEHR+2014+Roadmap+-+Website%2C+e-presence" rel="nofollow">brainstorm </a>
		on the openEHR web presence was undertaken.</li>
		<li>Various people provided <a href="http://www.openehr.org/wiki/display/oecom/openEHR+Country+Updates+2014" rel="nofollow">country updates </a>
		for openEHR activity.</li>
		<li>We ran out of time for a planned presentation on Localisaiton by Shinji Kobayashi, but he provided notes stating 3 issues: need for endorsement of local openEHR activities by openEHR Foundation; need for framework and rules for autonomous running of openEHR Affiliates, need for more active leadership on localisation from the centre.</li>
		</ul>
		<h3 id="openEHR2014roadmapmeetingreport-Agreementsandactions">Agreements and actions</h3><ul><li>The industry partners present endorsed the archetype industry sprint</li>
		<li>A <strong>next generation </strong>
		<strong>archetype tooling project </strong>
		will be commenced.</li>
		<ul><li>A technical group will develop an outline architecture and project proposal in the next 3 weeks. Erik Sundvall has set up <a href="http://www.openehr.org/wiki/display/dev/Online+archetype+and+template+tools">a wiki page for this project</a>.</li>
		<li>The project will be open source, and be open to use by developers from any organisation using archetypes.</li>
		<li>Most end users (e.g. clinicians) should be able to use main parts of the tooling via modern web-browsers, without needing to install extra software locally. (Some functionality might require access server-based components though.)</li>
		<li>We will aim for a combined project that covers the needs of openEHR, 13606, CIMI and any other archetype user community.</li>
		</ul>
		<li>Specifications:</li>
		<ul><li><strong>review specifications governance </strong>
		- Thomas Beale, Erik Sundvall, Gunnar Klein<ul><li>related: determine whether <strong>specifications should be easily forkable</strong>
		 in the future, and if the current &quot;ND&quot; in <a href="https://creativecommons.org/licenses/by-nd/3.0/" class="external-link" rel="nofollow">CC-BY-ND licence</a>
		 makes this unnecessarily hard.</li>
		</ul>
		</li>
		<li>GDL and AQL will become formal specifications</li>
		<li><strong>rename ADL 1.5 to ADL 2.0</strong>
		 and develop a plan for creating 'interior versions'</li>
		<li>all existing <strong>specifications will be </strong>
		<strong>converted to a new text-based form </strong>
		and publishing toolchain; new specifications will be developed in the new format; <ul><li>Asciidoc proposed as candidate - Bjørn Næss, Bostjan Lah, Borut Fabjan, Thomas Beale to research and provide a proposal</li>
		</ul>
		</li>
		<li><strong>specifications work will start</strong>
		 as soon as the new openEHR.org server is up and running, and may commence with a simplified change process, by common consent of committer group.</li>
		</ul>
		<li>Conformance</li>
		<ul><li>a technical group will get together and <strong>develop a conformance approach </strong>
		based on the brainstorm:<ul><li>Borut Fabjan, Bostjan Lah (Marand), DIPS, Rong (Cambio), Code24, Thomas Beale (Ocean)</li>
		</ul>
		</li>
		</ul>
		<li>Infrastructure and website</li>
		<ul><li>the <strong>industry partners will fund new hosting </strong>
		and related infrastructure ASAP</li>
		<li>a <strong>web committee </strong>
		self-nominated to manage the web presence, including incorporating the numerous suggestions from the brainstorm: Jon Tysdahl, Silje Ljosland Bakke, Shinji Kobayashi, Gunnar Klein, Martin van der Meer, Vebjørn Arntzen, Luis Marco, Adriana Danilakova</li>
		</ul>
		<li>Governance<ul><li>It was agreed that we seek to work with the board on a <strong>clearer set of organisational rules and governance procedures</strong>
		, reflecting increased influence of members, particularly industry partners, and the need for a 'lighter touch' management.</li>
		<li>All governance-related material, including statutes/by-laws should be publicly available on the web.</li>
		<li>Investigate if it is possible and better to incorporate the Foundation as a self-standing international organisation, with no specific link to any large owning organisation, as is the case with UCL currently.<ul><li>Gunnar Klein volunteered to research possible organisational improvements, based on existing organisations such as <a href="http://www.eurorec.org/" class="external-link" rel="nofollow">Eurorec</a>
		, <a href="http://www.efmi.org/" class="external-link" rel="nofollow">EFMI (European Federation of Medical Informatics)</a>
		 etc.</li>
		</ul>
		</li>
		</ul>
		</li>
		</ul>
		<h2 id="openEHR2014roadmapmeetingreport-Attendees">Attendees</h2><p>Rong Chen MD, PhD, Cambio Health Systems, Sweden<br />
		Iago Corbal, Cambio Health Systems, Sweden<br />
		<br />
		Martin van der Meer, Code24<br />
		Sebastian Iancu, Code24<br />
		<br />
		Bjørn Næss, DIPS<br />
		Sigurd From, DIPS<br />
		Krister Jom Skoglund, DIPS<br />
		Tomas Nordheim Alme MD, DIPS<br />
		Kjetil Jorgensen, DIPS<br />
		<br />
		Tomaz Gornik, Marand<br />
		Borut Fabjan, Marand<br />
		Bostjan Lah, Marand<br />
		<br />
		Thomas Beale, Ocean Informatics UK<br />
		Adriana Danilakova, Ocean Informatics UK<br />
		Hugh Leslie MD, Ocean Informatics<br />
		Heather Leslie MD, Ocean Informatics<br />
		<br />
		Erik Sundvall PhD, County Council of Östergötland and Linköping University, Sweden<br />
		<br />
		Ian McNicoll MD, FreshEhr.com<br />
		<br />
		Jonas Andersson, Raysearch Labs<br />
		Per Larsson, Raysearch Labs<br />
		<br />
		Luis Marco Ruiz, Norwegian Center for Integrated Care and Telemedicine, Tromsø, Norway<br />
		David Moner, IBIME, Polytechnic University Valencia, Spain<br />
		<br />
		Shinji Kobayashi MD, Kyoto University, Japan<br />
		<br />
		Vebjørn Arntzen, Oslo University Hospital, Norway<br />
		Hallvard Lærum MD, CMIO, Oslo University Hospital, Norway<br />
		Arve Kaaresen, Oslo University Hospital, Norway<br />
		<br />
		Silje Ljosland Bakke RN, National ICT/Bergen Hospital Trust, Norway<br />
		<br />
		Andreas Haandlykken, codeo.no<br />
		<br />
		Gunnar Klein MD, Örebro University School of Business, Sweden<br />
		<br />
		Jon Tysdahl, Fürst, Norway<br />
		Leif Arne Grønlund, Fürst, Norway</p>
	
		
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>
