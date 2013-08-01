<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'Logos';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
			
			<h1><?php echo "$PageName";?></h1>
			
			<p>There are various versoins of the openEHR logo in use as shown below.</p>
			
			
			<h2>Specification for fonts</h2>
			<p>Lucida Sans Italic and Lucida Sans Demibold</p>
			
			
			<h2>Specification for fonts</h2>
			<p>Orange: RGB = 250, 151, 57 [FA9739]; HSV = 29, 77, 98</p>
			<p>Blue: RGB = 0, 53, 95 [00355F]; HSV = 206, 100, 37</p>
			
			<table class="TableMain">
			<tbody>
			<tr>
				<th class="TableMainT">&nbsp;</th>
				<th class="TableMainT">Technical specification</th>
				<th class="TableMainT">Uses</th>
			</tr>
			<tr> 
				<th class="TableMainC"><img src="/files/about/logodoc.jpeg"></th>
				<td class="TableMainC">457x155 PNG</td>
				<td class="TableMainC">Documents, mainly for web publishing, ok for basic printing</td>
			</tr>
			<tr>
				<th class="TableMainC"><img src="/files/about/logoweb.png"></td>
				<th class="TableMainC">150x50 PNG</td>
				<th class="TableMainC">Web sites</td>
			</tr>
			</tbody>
			</table>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>