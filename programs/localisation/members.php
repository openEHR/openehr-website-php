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
<p>The details of membership to the Localisation Programme is explained in the
Terms of Reference, but basicaly these are:</p>

<p>1) Qualified Members: these are the people who will do the actual work with
substantial understanding of openEHR, experience and skill set. Current members
are:</p>
<ul>
  <li>Shinji Kobayashi (Japan / Ehime University)</li>
  <li>Eizen Kimura (Japan / Ehime University)</li>
  <li>Erik Sundvall (Sweden / Linköping University)</li>
  <li>Rong Chen (Sweden / Cambio Systems)</li>
  <li>Pablo Pazos (Uruguay / Independent ICT)</li>
  <li>Jussara Rötzsch (Brazil / Independent Consultant and Ministry of
  Health)</li>
  <li>Nuno Miguel Monteiro (Portugal / Critical Software)</li>
  <li>Ricardo Correia (Portugal / University of Porto)</li>
  <li>Sergio Carmona (Chile / Obstetrics &amp; Gynecology MD)</li>
  <li>Ian McNicoll (UK / Ocean Informatics)</li>
  <li>Thomas Beale (UK / Ocean Informatics )</li>
  <li>Sebastian Garde (Germany / Ocean Informatics)</li>
  <li>Shahla Fozonkhah (Australia / Ocean Informatics)</li>
  <li>Sam Heard (Australia / Ocean Informatics)</li>
  <li>Alastair Kenworthy (New Zealand / Ministry of Health)</li>
  <li>Chris Paton (New Zealand / University of Auckland)</li>
  <li>David Hay (New Zealand / Orion Health &amp; HL7 NZ)</li>
  <li>Jim Warren (New Zealand / University of Auckland)</li>
  <li>Koray Atalag (New Zealand / University of Auckland)</li>
  <li>Rowena Cullen (New Zealand / Victoria University of Wellington)</li>
</ul>

<p>2) Local Members: these are enthusiastic individuals in a particular locale
who have an interest in and potential to contribute to openEHR. They will be
under each country in the Countries page.</p>

<p>3) Programme Committe: qualified and elected members with decision making
responsibility ( between 5 and 9 individuals)</p>
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
