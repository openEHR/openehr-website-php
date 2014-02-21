<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'Getting Started';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>Overview</h2>
			<p>Two resources need to be configured at first time used of the ADL Workbench. The first is the 'reference models' (RMs) which are imported in the form of schema files expressed in the openEHR 'basic meta-model' (BMM) format. Multiple RMs can be imported, enabling comparison of models, classes as well as archetypes based on different models.</p>
			<p>The second resource that must be configured is the 'profiles' that define where archetypes and templates are to be found.</p>
			
			
			<h2>Download archetypes</h2>
			<p>For first-time use, you will be asked to provide paths to archetypes. It helps to have already downloaded some archetypes! See <a href="obtaining_archetypes">here</a> how to do this.</p>
			
			
			<h2>Basic Configuration</h2>
			
			<h3>Setting RM Schemas</h3>
			<p>At installation, the AWB is normally set up to point to a set of reference model schemas copied from the <a href="https://github.com/openEHR/reference-models" target="_blank">openEHR reference models Git repository</a>. You may want to check which Reference Model schemas are enabled initially. Choose RM Schemas &gt; Configure Schemas to do this. The dialog looks as follows.</p>
			<p><a href="images/options_rm_schema_config.png"><img border="0" alt="Options dialog" src="images/tn_options_rm_schema_config.jpg" width="200" height="187"/> </a></p>
			<p>You can check all RM schemas that apply to archetypes in any repository you might define. The only time you would leave a schema unchecked is if you have more than one version of the same schema and you want to choose a specific one. Several RM schemas are provided with the AWB, which are copies of the controlled versions found in the <a href="https://github.com/openEHR/adl-archetypes" target="_blank">openEHR/adl-archetypes GitHub repository</a>. See the <a href="tool_configuration#rmschemaconfiguration">Tool Configuration section</a> for details on configuring RM schemas.</p>
         
			<h3>Setting and changing repository profiles</h3>
			<p>The first time you start the tool if you are a new user, you will be asked for a repository. The screen will look like this:<br/></p>
			<p><a href="images/startup_repository.png"><img border="0" alt="Repository dialog at startup" src="images/tn_startup_repository.jpg" width="200" height="151"/> </a></p>
			<p>The repository dialog is used to define the location of a repository of archetypes/templates. The 'profile' is a logical name for a 'reference' repository, and optionally, a 'work' repository. You can create as many profiles as you like. The 'reference' repository is a directory containing archetypes that you will use, but not modify, such as the CKM archetypes, or a national library. These archetypes will be shown with blue icons. The optional 'work' repository is to indicate the directory under which you have archetypes/templates you are working on. The latter can include specialisations of the archetypes found in the reference location. These archetypes will be shown with green icons.</p>
			<p>The files in each repository area can be arranged in any manner - e.g. the traditional 'openEHR' structure, or even a single directory. When the files are read by the AWB, they are classified under the class structure of the reference model on which each archetype is based.</p>
		  
		  
			<h2>Using the Tool</h2>
			
			<h3>Docking</h3>
			<p>The AWB layout is docking-based, which means that the key components are all dockable 'tools'. This <a href="images/docking_overview.png">screenshot</a> shows multiple editor tabs, the Catalog tool, and various minimised tools at the bottom and right hand side. Docking can be used to arrange editor tools <em>side by side</em>, as shown <a href="images/docking_side_by_side_definitions.png">here</a>, and to 'pop' a tool out into an independent window, as shown <a href="images/template_compiled.png">here</a>.</p>
			<p>In general, docking is controlled in the normal way for the platform you are working on, e.g Windows, or the various GUI toolkits used on Linux and MacOS. </p>
          
			<h3>General layout</h3>
			<p>The AWB has two facilities, the archetype compiler/viewer and the 'tester'. The main form shows the compiler/viewer, while the tester is normally minimised to the right. The Viewer looks as follows.</p>
			
            <table style="BACKGROUND-COLOR: #ffffff" border="0" cellspacing="2" cellpadding="2" width="70%">
            <tbody>
			<tr valign="top">
				<td style="BORDER-RIGHT-WIDTH: 0px; BORDER-TOP-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px">
				<a href="images/overview.png">
					<img border="0" alt="Expanded view in explorer" src="images/tn_overview.jpg" width="104" height="200"/> </a>
				<p><em>Overview</em></p>
				</td>
				<td style="BORDER-RIGHT-WIDTH: 0px; BORDER-TOP-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px">
				<a href="images/RM_icons_overview.png">
					<img border="0" alt="Initial view in explorer" src="images/tn_RM_icons_overview.jpg" width="110" height="200"/> </a>
				<p><em>Overview with RM icons</em></p>
			  </td>
			</tr>
            </tbody>
			</table>
        
			<h3>Archetype and Template Catalog</h3>
			<p>On the left side of the tool are two <a href="images/explorers.png">explorers</a>, making up the 'Catalog' tool in AWB. The upper one is used to navigate all archetypes and templates, within the class hierarchy of the reference model on which the archetypes are based. Reference and working repository artefacts are merged in this view, and colourised so that the origin remains visible. The 'show entire ontology' option on the options panel can be used to force all classes in the hierarchy to be shown rather than just those which have archetypes in the current repository. Archetypes that appear below other archetypes are either specialisations, templates or template components. (Remember that the latter artefact types are technically just specialised archetypes.)</p>
			<p>The lower explorer is used exclusively for templates and template components, and shows compositional relationships due to slot-filling, rather than specialisation in its hierarchy. The two explorers are linked, so that choosing an artefact node in the lower one automatically chooses the same artefact in the upper one, allowing its lineage to be visible.</p>
			  
			<h3>Reference Model Browser</h3>
			<p>A second tool available on the left side of the main screen is the Reference Model (RM) browser. This enables multiple reference models to be visualised and explored in detail. Each reference model that is loaded has its package and class structure shown as a tree. Since RM schemas can be nested, classes may come from different schemas. Right-clicking on a class enables the original schema in which a class was defined to be edited.</p>
			<p><a href="images/rm_schema_tool.png"><img border="0" alt="Archetype Tool" src="images/rm_schema_tool.png" height=500/></a></p><br/>
			<p>Classes can be viewed from different reference models, in a side-by-side fashion by using the docking controls, as shown <a href="images/rm_schema_tool_duplex_classes.png">here</a>.</p>

			<h3>Reference Model Tool</h3>
			<p>In the Reference Model schema browser, the context menu of each schema includes an option for viewing the schema. When selected, this view shows the schema meta-data in a tool in the same area as the Archetype and Class Tools.</p>

			<h3>The Address Bar</h3>
			<p>At the top of the tool is an <a href="images/address_bar.png">address bar</a> that can be used to search for either elements of reference models, e.g. classes, or archetypes, depending on which of the Archetype/template catalog or RM browser is in focus.</p>

			<h3>Archetype and Class Tool area</h3>
			<p>The middle area of the screen is dedicated to viewing archetypes, templates and browsing the reference model. Two types of tool are used for this - the Archetype Tool and the Class Tool. Any number of each tool can be launched. The first Archetype Tool starts just by left clicking on an archetype or template in the Catalog. New Archetype Tools are launched by right-clicking and selecting 'New Tool' from the context menu. The same applies to starting a Class Tool - just left or right-click on a Class in the Catalog area.</p>

			<h3>The Archetype Tool</h3>
			<p>The Archetype Tool enables a single archetype to be visualised in many ways.	In the toolbar, the 'view' controls (to the right of the Archetype id text box) allow selection of differential and flat views. With one of these selected, the notebook tab controls allow viewing of the following aspects of an archetype:</p>
			<p><a href="images/archetype_view_controls.png"> <img border="0" alt="Archetype Tool" src="images/archetype_view_controls.png" width=500/></a></p><br/>
			<ul>
				<li><em>Description view</em>: the Administrative and Descriptive meta-data of the archetype, as well as the terminology binding summary;</li>
				<li><em>Definition view</em>: a 'node map' visualising the formal definition of the archetype, including various controls on the right side;</li>
				<li><em>Paths view</em>: all paths extracted from the archetype, with various controls for fine-tuning the view;</li>
				<li><em>Slots view</em>: a two-part view, consisting of:
				<ul>
					<li>the slots in the archetype, with the archetypes from the rest of the repository that match the slot constraints;</li>
					<li>other archetypes whose slots the current archetype can fill;</li>
				</ul>
				</li>
				<li><em>Terminology view</em>: a structured view of the ontology section of the archetype or template, including term bindings and ref set bindings;</li>
				<li><em>Annotations view</em>: a structured view of archetype annotations, for those archetypes that include them;</li>
				<li><em>ADL view</em>: a view showing the ADL text in either the source differential form or of the generated flat archetype.</li>
			</ul>
		   
			<h3>The Class Tool</h3>
			<p>The class tool is designed to allow the user to explore the reference model starting from a given class. It provides 4 views: properties, ancestors, descendants and closure. The <em>Properties</em> view shows all properties defined in the class and its ancestors, grouped on the basis of the class in which each property was declared in. This is known as the 'flat' view of the class.</p>
			<p>The <em>Ancestors</em> and <em>Descendants</em> views show the inheritance tree above and below the focal class, including multiple inheritance.</p>
			<p>The <em>Closure</em> view displays the properties and allowing the user to navigate through the entire property reachability closure by clicking open attributes at will. Because this computation is resource-intensive, the user can regulate the depth of the closure to explore. This means that the closure will in general only be partially computed, and it is up to the user to right click on terminal nodes they want to expand.</p>
			<p>Since the reference model includes numerous attributes whose static type is either abstract or otherwise has descandants, the Closure view allows the user to choose to display these by right-clicking on a node.</p>
		  
            <table style="BACKGROUND-COLOR: #ffffff" border="0" cellspacing="2" cellpadding="2" width="70%">
            <tbody>
            <tr valign="top">
				<td style="BORDER-RIGHT-WIDTH: 0px; BORDER-TOP-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px">
				<p><a href="images/class_tool.png">
					<img border="0" alt="Class Tool properties view" src="images/tn_class_tool.jpg"/></a></p>
				<p><em>Properties</em></p>
				</td>
				<td style="BORDER-RIGHT-WIDTH: 0px; BORDER-TOP-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px; padding-left:4em;">
				<p><a href="images/class_tool_ancestors.png">
					<img border="0" alt="Ancestors view" src="images/tn_class_tool_ancestors.jpg"/> </a></p>
				<p><em>Ancestors</em></p>
				</td>
			</tr>
			<tr>
				<td style="BORDER-RIGHT-WIDTH: 0px; BORDER-TOP-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px">
				<p><a href="images/class_tool_descendants.png">
					<img border="0" alt="Descendants view" src="images/tn_class_tool_descendants.jpg"/> </a></p>
				<p><em>Descendants</em></p>
				</td>
				<td style="BORDER-RIGHT-WIDTH: 0px; BORDER-TOP-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px; padding-left:4em;">
				<p><a href="images/class_tool_closure.png">
					<img border="0" alt="Closure view" src="images/tn_class_tool_closure.jpg"/> </a></p>
				<p><em>Closure</em></p>
				</td>
			</tr>
            </tbody>
            </table>
		  
			<h3>Using the ADL Workbench with the Archetype Editor</h3>
			<p>You can use the ADL Workbench as a convenient way to launch the <a href="images/AWB_plus_AE.png">Archetype Editor</a> on individual archetypes. The AWB provides an easy way to see all archetypes, as well as performing ADL 1.5 validation, not currently available in the Archetype Editor. Firstly, <a href="http://www.openehr.org/downloads/archetypeeditor/home">download the Archetype Editor</a>, and then configure it as the editor for archetypes, as described <a href = "tool_configuration#archedconfig">here</a>.</p>


			<h2>Artefact overview</h2>
			<p>The ADL Workbench is designed to parse and validate archetypes. Technically speaking, 'archetypes' are any artefact conforming to the openEHR Archetype Definition Language (ADL) and Archetype Object Model (AOM) specifications (see lower part of the <a href="http://www.openehr.org/programs/specification/releases/currentbaseline">specifications page</a>), or the older EN13606-2 specification, which is a snapshot of the openEHR AOM 1.4 specification. The latest <a href="https://github.com/openEHR/specifications/blob/master/publishing/architecture/am/aom1.5.pdf?raw=true">ADL 1.5 specification</a> defines 4 logical kinds of artefact. These include three kinds of archetype, and the 'operational template'. The latter is generated from a template, and is used as the basis for all further downstream transformations. The various artefact types and their file formats are shown below.</p>
            
			<table class="TableBasic">
            <tbody>
			<tr>
				<th>Artefact type</th>
				<th>Description</th>
				<th>Source file types</th>
				<th>Flat file type</th>
			</tr>
			<tr>
				<td> <b>archetype</b> </td>
				<td>a theme-based definition of multiple data points/groups, using the archetype constraint formalism</td>
				<td>.adls (ADL 1.5)<br/>.adl (ADL 1.4)</td>
				<td>.adlf</td>
			</tr>
			<tr>
				<td> <b>template</b> </td>
				<td>a use-case specific definition of content, consisting of data items from various archetypes</td>
				<td>.adls</td>
				<td><br/></td>
			</tr>
			<tr>
				<td> <b>template_component</b> </td>
				<td>a component of a template</td>
				<td>.adls</td>
				<td><br/></td>
			</tr>
			<tr>
				<td> <b>operational_template</b> </td>
				<td>the inheritance-flattened form of a template, used as the basis for all further transformations</td>
				<td><br/></td>
				<td>.opt</td>
			</tr>
            </tbody>
            </table>

<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>