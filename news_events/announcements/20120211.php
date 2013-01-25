<?php
$PageName = 'Announcements';
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

	<div id="MainArea">
	
		<div id="SideMenu">
			<?php include '../menu.php' ?>
		</div>
		
		<div id="TextArea">
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>Interim board announces new openEHR Program groups</h2>
			<h6>11. February 2012 | from: Sam Heard, Chair of Interim Board of Directors</h6>
			<br/>
			
			<p>openEHR is now being used in a range of environments and languages. Using it effectively has a steep learning curve but the benefits of having clinical content specified independent of the implementation environment or the format for sharing (web services, message etc) is beginning to make sense as people start to really try to share more complex health information. The real advantages are more obvious once there is a shared health record as that involves a leap of complexity: lists have to be maintained; actions recorded against instructions etc.</p>
			<p>We live in a world that uses a massive variety of technology and it is diversifying. Government has faith in SDOs in so far as it has faith in anything, which means we will see ISO, CEN and HL7 specifications being pushed from that quarter for some time. Open specifications like openEHR are of interest in some less centralised societies like Brazil and those pursuing the European approach of CEN 13606.</p>
			<p>To really provide value, openEHR’s content specifications need to work for all eHealth communications. One key challenge is to enable knowledge repositories to use openEHR models and Reference Model (RM) to deliver de jure standard message and document formats such as HL7 CDA. This is useful as it would allow SNOMED and other terminologies to work with a relatively straightforward expression of the information model.</p>
			<p>The interim board has now established 4 programs: <em>Specifications, Software, Clinical Modelling and Localisation</em>. Each Program has a Committee which will grow to up to 9 members and a list of Qualified Members to support each committee. Each group is beginning to work on the appropriate processes to support their activities. The program leaders are respectively Thomas Beale, Erik Sundvall, Heather Leslie and Koray Atalag. Each has a small seed group as the committee and a slightly larger group of initial qualified members.</p>
			<p>The <a href="../../community/mailinglists">mailing lists</a> will begin to reflect the work of each program with the Technical list focusing on specifications, the Implementers list focusing on software, the clinical list focusing on Clinical Modelling and a new list for Localisation being established.</p>
			<p>We have invited key knowledgeable people from the <a href="http://informatics.mayo.edu/CIMI/index.php/Main_Page">CIMI forum</a> as well as those on the lists to get broad input from the outset. You can go to <a href="http://groups.openehrfoundation.org">groups</a> to see the lists which will be used only for administrative purposes. It is possible to request Qualified status for one or more of the lists but it is up to the Committee to grant this. As qualification will mean participation at a more responsible level within a program and will be based on criteria developed by each Program Committee in consultation with the seed Qualified members, it is probably best to hold back requests for the moment
			and concentrate on how people become qualified and what their role is within that program once qualification is granted.</p>
			<p>Please use the appropriate list to discuss issues. General responses to this email should go to the Clinical and Technical lists to ensure they are seen by all.</p>
			<br/>
			
			<p><i>Sam Heard<br/>
			Chair of Interim Board of Directors</i></p>
			
			<br/>
			<a href="../announcements">>> Back to <?php echo "$PageName";?></a>
			
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