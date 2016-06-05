<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Logos';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
			
			<h1><?php echo "$PageName";?></h1>
			
			<p>There are various versoins of the openEHR logo in use as shown below.</p>
			
			
			<h2>Specification for fonts</h2>
			<p>Lucida Sans Italic and Lucida Sans Demibold</p>
			
			
			<h2>Specification for fonts</h2>
			<p>Orange: RGB = 222, 125, 71 [de7d47]; HSV = 21, 68, 87</p>
			<p>Blue: RGB = 18, 63, 109 [123f6d]; HSV = 210, 83, 43</p>
			
			<table class="TableBasic">
			<tbody>
			<tr>
				<th>&nbsp;</th>
				<th>Technical specification</th>
				<th>Uses</th>
			</tr>
			<tr> 
				<td><a href="/gui/Logo.jpg"><img src="/gui/Logo.jpg"></a></td>
				<td>JPG (min. width: 100px)</td>
				<td>Documents, mainly for web publishing, ok for basic printing</td>
			</tr>
			<tr>
				<td><a href="/gui/Logo.png"><img src="/gui/Logo.png"></a></td>
				<td>PNG (min. width: 75px)</td>
				<td>Web sites</td>
			</tr>
			</tbody>
			</table>
			
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
