<?php
$pageOn = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Content-Language" content="en">
  <title>openEHR - Localisation Program</title>
  <meta name="description"
  content="openEHR provides open source specifications and reference implementations of future proof EHR systems">
  <meta name="keywords"
  content="archetypes, openEHR, EHR, electronic health record, electronic medical record, ADL, reference model, clinical models, healthcare, health informatics, medical informatics, EHR standards, ISO 18308, CEN 13606, health care software, open source software, knowledge modelling, patient-centric">
  <meta name="author" content="Sam Heard, Thomas Beale">
  <meta name="copyright" content="The openEHR Foundation">
  <meta name="design" content="Adriana Danilakova">
  <meta name="distribution" content="Global">
  <meta name="rating" content="General">
  <meta name="robots" content="All">
  <meta name="revisit-after" content="15 days">
  <meta name="viewport" content="1024">
  <link rel="stylesheet" href="../../styles/basic.css" type="text/css">
  <link rel="stylesheet" href="../../styles/programs.css" type="text/css">
  <link rel="stylesheet" href="../../styles/menu.css" type="text/css">
  <link rel="home" href="http://www.openehr.org">
  <link rel="bookmark" href="http://www.openehr.org" title="openEHR - Homepage">
  <link rel="index" href="http://www.openehr.org/sitemap">
  <script type="text/javascript" src="../../menu/dropdown.js">
  </script>
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

<div id="MainArea" style="height:450px;">

<div id="SideMenu">
<?php include 'menu/localisationmenu.php' ?>
</div>

<div id="TextArea">
<!-- ----------------------Here starts the content section ---------------------------------->

<h1>Localisation Programme</h1>

<p>The Localisation Programme is aimed at reaching out and supporting local
openEHR communities worldwide in order to bring about more effective and
concerted dissemination of the openEHR vision and methods. Work typically
involves translation and adaptation of specifications and related artifacts or
creating of their extensions as well as development of new content. The
Programme also includes activities related to promotion, education and
training, research and seeking funding. </p>

<p></p>

<h3><strong>Goals of the Programme are:</strong></h3>
<ul>
  <li>Create awareness and enthusiasm at all levels (e.g. vendor, government,
    academia and individuals) in every corner of the world</li>
  <li>Work with other local organisations (especially SDOs) by adopting a
    culture of openness and collaboration</li>
  <li>Increase adoption of openEHR in national, regional and specific
    initiatives</li>
  <li>Provide leadership and support to local communities</li>
  <li>Translate and adapt openEHR artefacts in order to suit local needs</li>
  <li>Feed local learnings back to openEHR and add more great people and
    organisations to the larger openEHR community</li>
</ul>

<p></p>

<h3>Responsibilities of the Programme are:</h3>
<ul>
  <li>Help establish local presence and representation</li>
  <li>Provide communication between local community and the openEHR
  Foundation</li>
  <li>Provide coordination with other Programmes</li>
  <li>Maintain a well balanced group of Qualified Members to undertake various
    activities </li>
  <li>Support local communities to reach their goals</li>
</ul>

<p></p>

<p>The details of the Programme is given in the Terms of Reference.</p>

<p> </p>
<!-- ----------------------Here ends the content section ---------------------------------->
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
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});</script>
</body>
</html>
