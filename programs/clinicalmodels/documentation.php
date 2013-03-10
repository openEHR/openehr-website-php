<?php
$PageName = "Documentation";
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

	<?php include '../../panel/headpanel.php' ?>
	
</head>

<body>

<div id="MainFrame">
	
	<div id="TopPanel">
		<?php include '../../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu">
	
		<div class="nav">
			<?php include '../../menu/topmenu.php' ?>
		</div>
		
	</div> 

	<div id="MainArea" style="height:450px;">
	
		<div id="SideMenu">
			<?php include 'menu.php' ?>
		</div>

		<div id="TextArea">
		
			<h1><?php echo "$PageName";?></h1>
			<br/>
			<p>The openEHR Clinical Knowledge Manager (CKM) is an international, online clinical knowledge resource. It has gathered an active Web 2.0 community of interested and motivated individuals focused on furthering an open and international approach to clinical informatics - an application- and message-independent lingua franca for sharing health information between individuals, clinicians and organisations; between applications, and across regional and national borders. All contributions to CKM is on a voluntary basis, and all CKM content is open source and freely available under a Creative Commons licence.</p>
			<p>See the live instance of CKM <a href="http://openehr.org/knowledge">here</a>.</p>
			<p>The latest release of CKM:</p>
			<ul>
				<li>is a library of clinical knowledge artefacts - currently openEHR archetypes and templates;</li>
				<li>supports the full life cycle management of openEHR archetypes through a review and publication process;</li>
				<li>provides governance of the knowledge artefacts.</li>
			</ul>
			<p>In the near future we anticipate a complementary repository for other related artefacts including terminology subsets.</p>
			<p>The Clinical Knowledge Manager provides the opportunity and means for users interested in modelling clinical content to become participate in the creation and/or enhancement of an international set of archetypes, and these in turn have the potential to provide the foundation for interoperable Electronic Health Records. </p>
			
		</div>
			
	</div>

	<div id="BottomMenu">
		<?php include '../../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
		<?php include '../../panel/bottompanel.php' ?>	
	</div>
	
</div>

<?php include '../../panel/scriptpanel.php' ?>

</body>

</html>