<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'Installation Notes';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header_english.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2><a name="mac"></a>Mac OS X</h2>
			<p>ADL Workbench will be installed in your <em>Applications</em> folder, under a folder called <em>openEHR</em>.</p>
			<p>When you double-click the <em>ADL Workbench</em> icon, it will start up inside <em>X11</em> or <em>XQuartz</em>.</p>
		  
			<h2><a name="linux"></a>Linux installation</h2>
			<p>The Linux version of ADL Workbench requires GTK+ 2.4.0 or above. You can check by typing this command: <em>pkg-config --modversion gtk+-2.0</em> The command should succeed and the version number of GTK+ should appear. If it is not 2.4.0 or above then you need to install GTK+ 2.4.0.</p>
			<p>After downloading, create a directory, extract the contents of the archive, and run <em>adl_workbench</em>.</p>
				
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>
