<?php
header('Content-type: text/html; charset=utf-8');
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Management Board';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
			
			<h1><?php echo "$PageName";?></h1>
			
			<h2 id="bogrep">Board of Governors representative</h2>

			<h3 style="margin-left:1em;">Dr. Sam Heard (Australia) [CHAIR]</h3>
			<table class="TableInvisible">
			<tbody>
			<tr>
				<td style="text-align:center;"><img src="/files/about/SHeard.png"></td>
				<td width="650px">
				<p>Sam Heard (MBBS, MRCGP, FRACGP, FACHI) is a practicing clinician who has worked throughout his career in inner London (UK) and the Northern Territory (Australia) to assist the standardisation of health information to empower clinicians and their patients to improve health care and outcomes.</p>
				<p>This work began with the Good European Health Record in the early 90s, continued through a long collaboration with Thomas Beale and CHIME at UCL, the establishment of Ocean Informatics as a commercial vehicle to assist in the vision and culminating in setting up the openEHR Foundation in London in 2002.</p>
				<p>The work has continued as a Director of the openEHR Foundation, CEO until 2012 and now as Chairman of Ocean Informatics and most recently as Chairman of the openEHR Foundation. Sam was a foundation co-Chair of the HL7 EHR Technical Committee and has worked extensively with the UK and Australian national programs to utilise and refine the openEHR method.</p>
				<p>Member since Feb 2015.</p>
				</td>
			</tr>
			</tbody>
			</table>
			
			<h2 id="industrypartners">Industry Partner representatives</h2>

			<h3 style="margin-left:1em;">Rong Chen (Sweden)</h3>
			<table class="TableInvisible">
			<tbody>
			<tr>
				<td style="text-align:center;"><img src="/files/about/RChen.png"></td>
				<td width="650px">
				<p>Rong Chen, MD PhD, is the Chief Medical Informatics Officer and the head of Medical Informatics Group at Cambio Healthcare Systems, Sweden. <p>He’s responsible for the research and development in clinical decision support and knowledge management at Cambio.</p>
				Rong holds a PhD degree in health informatics on the subject of EHR semantic interoperability from Linköping University, Sweden. He is an associated researcher at the Health Informatics Centre at Karolinska Institutet, where he lectures and supervises PhD and master students.</p>
				<p>Rong has contributed to several core openEHR design specifications, and has for many years led the openEHR Reference Java Implementation of openEHR. Rong is the lead author of Guideline Definition Language (GDL), which is designed to express clinical logic for scalable decision support with openEHR underpinning.</p>
				<p>Elected Feb 2015.</p>
				</td>
			</tr>
			</tbody>
			</table>
			<br/>
			
			<h3 style="margin-left:1em;">TomaÂž Gornik (Slovenia)</h3>
			<table class="TableInvisible">
			<tbody>
			<tr>
				<td style="text-align:center;"><img src="/files/about/TomazGornik.png"></td>
				<td width="650px">
				<p>TomaÂž is the co-founder of Marand d.o.o. (Slovenia), and is a director and experienced manager of a large group of developers building world-class software products for more than 20 years. He is always challenging his team to build better software using state-of-the-art technology, architectures and processes. He has a deep understanding of software platforms, architecture, deployment and business models.</p>
				<p>TomaÂž has a proven track record delivering innovative turn-key solutions for large clients in telecommunications, finance and healthcare. He has been speaker at conferences including TeleManagement Forum, HIMSS and Health 2.0.</p>
				<p>Elected Feb 2015.</p>
				</td>
			</tr>
			</tbody>
			</table>
			<br/>
			
			<h2 id="memberreps">Membership representatives</h2>

			<h3 style="margin-left:1em;">Dr. Koray Atalag - Localisation Program (New Zealand)</h3>
			<table class="TableInvisible">
			<tbody>
			<tr>
				<td style="text-align:center;"><img src="/files/about/KAtalag"></td>
				<td width="650px">
				<p>Having trained in Medicine and completing PhD in Information Systems, Koray's main focus is on Electronic Health Records (EHR). He has led development of a number of successful applications. The most prominent one is the <a href="http://pathos-web.sourceforge.net">PATHOS-WEB Project</a> for reporting and analysis in anatomical pathology. Installed in some 25 large laboratories in Turkey, more than two million records have been collected since 1996. In order for health informatics to be recognised as an academic discipline he played a key role during establishment of the Department of Medical Education and Informatics at Hacettepe University. Koray then led work for the development of health informatics curriculum and a graduate program in health informatics.</p>
				<p><a href="http://openehrnz.wordpress.com/author/atalagk/">Blog</a>.</p>
				<p>Elected Feb 2015.</p>
				</td>
			</tr>
			</tbody>
			</table>
			
			<h3 style="margin-left:1em;">Dr. Ian McNicoll (United Kingdom)</h3>
			<table class="TableInvisible">
			<tbody>
			<tr>
				<td style="text-align:center;"><img src="/files/about/IMcnicoll.png"></td>
				<td width="650px">
				<p>Ian McNicoll was for many years a Glasgow GP and an Honorary Senior Research Associate with CHIME, UCL and an independent clinical informatics consultant, primarily working with Ocean Informatics on openEHR-based projects across Europe. He is a member of the NHS Scotland SCIMP Working Group and serves on the committee of the BCS Primary Health Care Specialist Group.</p>
				<p>Elected Feb 2015.</p>
				</td>
			</tr>
			</tbody>
			</table>
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
