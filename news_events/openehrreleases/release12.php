<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

	<title>openEHR - Releases</title>
	<link rel="bookmark" href="http://www.openehr.org/news_events/releases/release12" title="openEHR - Releases">
	<?php include '../../panel/headpanel.php' ?>
	
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

	<div id="MainArea">
	
		<div id="SideMenu">
			<?php $current = 3; include '../menu/newsmenu.php' ?>
		</div>
		
		<div id="TextArea">
		
			<h1>Releases</h1>
			
			<h2>Opereffa - initial release</h2>
			<h6>10. June 2009 | from: Tony Shannon</h6>
			<br/>
			
			<p>The openEHR Foundation is pleased to announce the early release of <em>Opereffa</em> &ndash; openEHR REFerence Framework and Application, under development at UCL.&nbsp;</p>
			<p>As healthcare systems are under increasing pressure, internationally, they
			are exploring improvements in health information systems, as a key way to
			survive and thrive in the 21st century. As a means to support these efforts,
			members now working under the umbrella of the openEHR Foundation have
			been developing and implementing open specifications for an Electronic Health
			Record for many years, and these have since formed the basis of the ISO and CEN
			13606 archetype standard.</p>
			<p>In response to a recent exploration of the openEHR international
			clinical community&rsquo;s requirements, by the openEHR Clinical Review Board
			Chair Dr Tony Shannon, an open source clinical reference application, focused on
			early clinical benefit and usability, was deemed to be an important next step
			for the community.</p>
			<p>This important clinical requirement has been taken up by a UCL team headed by Seref Arikan, working with Professor David Ingram, the
			chair of openEHR, and Tony Shannon. Seref brings considerable
			industrial experience of implementing health systems and has led the design and
			development of this open source Java based, Web 2.0 ready framework and clinical
			application, to tackle the challenge. This is being built in Eclipse with
			ongoing tooling support.</p>
			<p>We have started with the goal of demonstrating the potential and flexibility
			of an archetype-enabled Electronic Health Record. The reference clinical
			application is being developed with the following achievements in mind:</p>
			<ul>
				<li>to explore the all important interplay between clinicians using an EHR
				(including the user interface) and the technical underpinning&nbsp;of future proof,
				openEHR architecture;</li>
				<li>to allow clinicians to manage the three core aspects of an EHR; namely
				clinical data entry, navigation around the record, and clinical data review. We
				have adopted a basic minimalist set of archetypes which begin to support the
				SOAP style of clinical documentation, as a starting point.</li>
				<li>to develop good practice, disseminate and continuously improve upon
				clinically useful archetypes.</li>
			</ul>
			<p>We are targeting a collaborative community driven process to realize these
			goals, with the guidance of both the clinical and technical communities of
			openEHR.</p>
			<p>The application is built in Eclipse as an extension of the Java
			openEHR implementation led by Rong Chen of Cambio, Sweden. Design
			studies and pilot implementation have been undertaken to explore requirements
			for its integration as a clinical content layer within existing open source
			clinical record systems.</p>
			<p>Though mindful that this announcement is early news of a quite early release,
			it is deliberately so, in the spirit of &ldquo;release early, release often&rdquo;. We want
			to encourage people to share the multiple challenges with us, in the best spirit
			of collaborative endeavour, and get involved. The aim of this openEHR
			CRB led initiative is not to stimulate hypothetical debate on the right way to
			do things, but to begin to evolve and develop, iteratively, an openEHR
			clinical reference application that is of value to clinical and technical
			communities, public servants and commercial partners, alike.</p>
			<p>We encourage anyone who is working to address the clinical and technical
			challenges of implementing the EHR to explore the very early online demo
			available now,
			here&nbsp;(<a href="http://opereffa.chime.ucl.ac.uk/">http://opereffa.chime.ucl.ac.uk</a>).
			You are encouraged to download and explore this in the context of your own local
			challenges and how the framework may help with your needs.</p>
			<p>We look forward to your interest and involvement in the project, which will be overseen by Dr Tony Shannon and the
			openEHR Clinical Review Board.</p>
			<p>The Opereffa project will be using the openEHR wiki to create a
			knowledge base. openEHR lists
			(<a href="http://www.chime.ucl.ac.uk/mailman/listinfo/openehr-implementers">implementers
			mail list</a> for technical issues and
			<a href="http://www.chime.ucl.ac.uk/mailman/listinfo/openehr-clinical">clinical
			mail list</a> for domain discussions)&nbsp;will host community discussions about the
			project.</p>
			<p>The Opereffa project homepage (http://opereffa.chime.ucl.ac.uk) contains
			introductory information, and a live demo of the current work.&nbsp;The downloads
			related to Opereffa can be found at http://sourceforge.net/projects/opereffa/,
			These include multiple options for exploring the framework, including source and
			binary downloads and a live DVD with full development environment and demo
			server setup. There is an SVN repository at
			<a href="http://www.openehr.org/svn/opereffa">http://www.openehr.org/svn/opereffa</a>
			for the latest source code. Again, details for using these resources are given
			in the Opereffa home page.</p>
			<p>There is also a Jira project setup at
			<a href="http://www.openehr.org/issues/browse/OPFPR">http://www.openehr.org/issues/browse/OPFPR</a>
			for the community to report issues and requests.</p>
			<p>Opereffa is released under <a href="http://www.mozilla.org/MPL/">Mozilla open source tri-license</a>.</p>
			<p>Further information about the openEHR Foundation is available at
			http://www.openehr.org.</p>
			<br/>

			<p>Dr. Tony Shannon</p>
			<p>Professor David Ingram</p>
			<p>Seref Arikan</p>
			
			<br/>
			<a href="../releases">>> Back to Releases</a>
			
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
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>