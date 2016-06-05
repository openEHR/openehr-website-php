<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Proyectos de Investigación Financiados';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
				
			<p>The following table indicates known funded research projects using openEHR. Please <a href="/about/contacts">contact us</a>, to notify of other projects.</p>
			
			<table class="TableBasic">
			<tbody>
			<tr>
				<th>Location</th>
				<th>Project</th>
				<th>Description</th>
				<th>Vendor(s) / consortium</th>
				<th>Status</th>
			</tr>
			<tr>
				<td rowspan="2"><img src="/files/who_is_using_openehr/Flag_of_Europe.svg.png" alt="EU flag" title="EU flag" style="width:80px;"><p>European Union</p></td>
				<td><a href="http://www.chiron-project.eu/">CHIRON</a><br/>Integrated Healthcare approach for home, mobile and clinical environments.<br/>
				CHIRON is a European Research Project co-financed by the ARTEMIS Joint Undertaking (call 2009 - Artemis Sub-program ASP2: Person-centric Healthcare).<br/>
				27 partners.</td>
				<td>The CHIRON project intends to combine state-of-the art technologies and innovative solutions into an integrated framework designed for an 
				effective and person-centric health management along the complete care cycle. Will monitor 100 patients with atrial fibrillation during 2013.</td>
				<td><a href="http://www.medvision360.com/?lang=en">MedVision360 (Zorg Gemak), Netherlands</a></td>
				<td>March 2010 - end 2013</td>
			</tr>
			<tr>
				<td><a href="http://www.mobiguide-project.eu/">MOBIGUIDE</a><br/>MobiGuide (FP7-287811) is a supported project under the European 
				Commission Seventh Framework Programme (2007-2013).<br/>
				13 partners.</td>
				<td>The aim of the MobiGuide project is to develop an intelligent decision-support system for patients with chronic illnesses. The system accompanies 
				the patients wherever they go and helps them and their care providers in managing their illness,
				whether they are at home, at work, out and about or travelling abroad on holiday or for business.</td>
				<td><a href="http://www.medvision360.com/?lang=en">MedVision360 (Zorg Gemak), Netherlands</a></td>
				<td>ends 2013</td>
			</tr>
			</tbody>
			</table>

<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/es/_footer.php');?>