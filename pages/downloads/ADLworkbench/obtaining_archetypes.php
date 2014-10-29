<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'Obtaining Archetypes';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header_english.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
		<h2><a name="user-content-repository-and-library-configuration" class="anchor" href="#repository-and-library-configuration"></a>Repository and Library Configuration</h2>

		<p>The ADL Workbench uses a system of 'repositories' and 'libraries' to locate archetypes. A 'repository' is a physical file system location, e.g. a Git or SVN checkout area, and archetypes are found below this, in individual 'libraries'. The root point is identified with a special _repo.idx file, and each library root point contains a _repo_lib.idx file. These files only have to be written once in the repository, and effectively make the repositories self-describing.</p>

		<p>The user now only has to specify the repository root points, for existing repositories, and the libraries will be read by the tool. This is made easier by additions to the workbench which allow it to use DVCS tools like Git and Subversion to clone, update and read repositories on the user's computer. Further, the URLs of 3 well-known Git repositories are known by the tool to enable easy initial installation.</p>

		<p>When a user first installs this new version of the tool, the following screen is seen:</p>

		<p><img src="images/repositories_screen_1.png"></p>

		<p>The three rows correspond to 2 openEHR and one CIMI repositories. Any of these repositories can be 'installed' by hitting the install link, which will result in the following dialog:</p>

		<p><img src="images/repositories_screen_install.png"></p>

		<p>There are two possibilities here:</p>

		<ul>
		<li>choose an existing checkout of the repository, which you may already have;</li>
		<li>create a new clone of the repository, in which case choose a parent directory.</li>
		</ul>

		<p>Doing either with the 'adl-archetypes' reference repository enables the archetype libraries to be read in and used. They are shown on the repository dialog as follows:</p>

		<p><img src="images/repositories_screen_installed.png" width="860"></p>

		<p>You can add a completely new repository as well, by using the 'Browse' button at the bottom of the dialog. If you choose a directory that is not already set up as an Archetype repository, the workbench will create the necessary control files for you, and save them. The result of doing this looks as follows:</p>

		<p><img src="images/repositories_add_new.png" width="860"></p>

		<p>Hitting the icon in the 'edit' column results in the text editor being launched, and you can edit the new repository meta-data, e.g.:</p>

		<p><img src="images/repositories_add_new_edit.png" width="860"></p>

		<p>When you save and quit the editor, you will see the new repository details updated in the main dialog:</p>

		<p><img src="images/repositories_add_new_edited.png" width="860"></p>

		<p>The next step in this add-new case is to define some libraries below the repository root point. All you are doing in fact is asking the tool to create _repo_lib.idx control files. You can do this in two ways:</p>

		<ul>
		<li>just create one control file at the root - 'add new library here' option, OR</li>
		<li>create one or more control files at various points below the root - 'add new library' option.</li>
		</ul>

		<p>These options are available on right click on the new repository node:</p>

		<p><img src="images/repositories_add_new_lib.png"></p>

		<p>Choosing either of these will result in a library row being added to the repository dialog view:</p>

		<p><img src="images/repositories_new_lib_added.png" width="860"></p>

		<p>Once repositories and libraries have been set up as desired, the repository dialog can be dismissed, and the library selector can be used as in previous versions to select the desired repository. The effect of the repository setup activities causes just the repository root directories to be recorded in the .cfg file (you can see this via Tools &gt; Options &gt; Edit file).</p>

<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>
