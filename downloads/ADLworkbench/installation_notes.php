<?php
$PageName = 'ADL Workbench: Installation Notes';
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
			<?php include 'menu.php' ?>
		</div>

		<div id="TextArea">
			
			<h1>Installation Notes</h1>
			
			<h2><a name="mac"></a>Mac OS X</h2>
			<p>Various prerequisite software is needed for the Mac version of ADL Workbench. There are two ways of obtaining this - MacPorts and HomeBrew.
				Once you have completed one of these steps, download and install the appropriate version of ADL Workbench for your Mac.</p>
			<h3><a name="macPorts"></a>MacPorts method</h3>
            <ul>
				<li>Confirm what version of Mac OS X you have. You can check this under the <em>Apple</em> menu at the top left of the screen, by selecting <em>About this Mac</em>.</li>
				<li>Install the latest version of <a href="http://developer.apple.com/technologies/xcode.html">Xcode Tools</a> for your Mac.</li>
				<li>Install the latest version of <a href="http://www.macports.org/install.php" rel="nofollow">MacPorts</a>.</li>
				<li>When MacPorts is installed, install <em>gtk2</em>:
				<ul>
					<li>Open a window in the Finder and go to the <em>Applications/Utilities</em> folder.</li>
					<li>Double-click <em>Terminal</em>. You now have a Terminal window open.</li>
					<li>Type the following command: <em>sudo port install gtk2 xorg-libXtst</em>.</li>
					<li>Press <em>Return</em>.</li>
					<li>When it asks you for a password, type in your administrator password.</li>
					<li>MacPorts will then install the <em>gtk2</em> library. (This will take some time, depending on the speed of your Mac.)</li>
				</ul>
			</ul>
			<p>ADL Workbench will be installed in your <em>Applications</em> folder, under a folder called <em>openEHR</em>.</p>
			<p>When you double-click the <em>ADL Workbench</em> icon, it will start up inside <em>X11</em> or <em>XQuartz</em>.</p>
		  
			<h3><a name="homebrew"></a>HomeBrew method</h3>
			<p>[The following help kindly provided by Patrick Langford @ InterMountain Healthcare]</p>
            <ul>
				<p>Make sure XQuartz is installed.  To install it follow the instructions <a href="http://xquartz.macosforge.org/landing/">here</a>.</p>
				<p>Make sure you don't have macports installed.  To uninstall macports follow the instructions <a href="http://guide.macports.org/chunked/installing.macports.uninstalling.html">here</a>.</p>
				<p>Install homebrew by following the instructions <a href="http://mxcl.github.io/homebrew/">here (at the bottom of the page)</a>.</p>
				<p>Install the unix tools and libraries that ADL Workbench has as dependencies.  (I believe these installs meet all the requirements.  I already had some of these installed so I'm guessing a bit here.)</p>
<pre>
	brew install gtk+
	brew install gettext
	brew link gettext
	brew install freetype
	brew install cairo
</pre>
				<p>ADL Workbench expects the macport libraries we create the links it wants:</p>
<pre>
	mkdir /opt/local /opt/local/lib
	cd /opt/local/lib
	ln -s /usr/X11/lib/libX11.6.dylib
	ln -s /usr/X11/lib/libXcomposite.1.dylib
	ln -s /usr/X11/lib/libXcursor.1.dylib
	ln -s /usr/X11/lib/libXdamage.1.dylib
	ln -s /usr/X11/lib/libXext.6.dylib
	ln -s /usr/X11/lib/libXfixes.3.dylib
	ln -s /usr/X11/lib/libXi.6.dylib
	ln -s /usr/X11/lib/libXinerama.1.dylib
	ln -s /usr/X11/lib/libXrandr.2.dylib
	ln -s /usr/X11/lib/libXrender.1.dylib
	ln -s /usr/local/lib/libatk-1.0.0.dylib
	ln -s /usr/X11/lib/libcairo.2.dylib
	ln -s /usr/X11/lib/libfontconfig.1.dylib
	ln -s /usr/local/lib/libfreetype.6.dylib
	ln -s /usr/local/lib/libgtk-x11-2.0.0.dylib
	ln -s /usr/local/opt/gettext/lib/libintl.8.dylib
</pre>
		  
			<h2><a name="linux"></a>Linux installation</h2>
			<p>The Linux version of ADL Workbench requires GTK+ 2.4.0 or above. You can check by typing this command: <em>pkg-config --modversion gtk+-2.0</em> The command should succeed and the version number of GTK+ should appear. If it is not 2.4.0 or above then you need to install GTK+ 2.4.0.</p>
			<p>After downloading, create a directory, extract the contents of the archive, and run <em>adl_workbench</em>.</p>
		
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
