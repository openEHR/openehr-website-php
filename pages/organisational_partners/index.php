<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'openEHR Organisational Partners';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------ Content starts here ----------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			<p>The openEHR Organisational Partners support the openEHR Foundation in order to participate strategically in the community for the benefit of patients and health professionals in their jurisdictions.</p>
			<table class="TableInvisible">
			<tbody>

			<!-- Norway -->
			<tr>
				<td><a href="/organisational_partners/norway"><img src="/files/who_is_using_openehr/Flag_of_Norway.png"></a></td>
				<td><h2>Norwegian Nasjonal IKT</h2>
				<p>xxx</p>
				<a href="/organisational_partners/norway">Learn more</a></td>
			</tr>

			</tbody>
			</table>
		
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
