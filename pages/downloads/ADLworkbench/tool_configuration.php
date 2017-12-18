<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Tool Configuration';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header_english.php');
?>

		<div id="Content">
<!-- - - ----------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>Set-up</h2>
			<p>In order to work with the examples described below, the following configuration is advised. Experienced users may skip this step.</p>
			
			<a name="rmschemaconfiguration"></a><h3>RM Schema configuration</h3>
			<p>Reference Model (RM) Schemas are used by the ADL Workbench to validate archetypes and templates. Schemas are expressed as ODIN (was 'dADL') files and have a '.bmm' (basic meta-model) extension. These schemas are defined in a nested way, with most files visible here being used as component schemas for a small number of top-level schemas representing the openEHR Reference Model, EN13606 model and so on. The ADL Workbench comes with schemas for various reference models bundled.</p>
			<p>If you want access to RM schemas not yet bundled with the workbench, they can be found <a href="https://github.com/openEHR/reference-models" target="_blank">here</a>. Clone this repository in the normal way, and use the RM Schemas dialog to point to this location instead of the bundled schemas location.</p>
			<p>Whether using the bundled or Github repository schemas, you will need to have all the relevant RM schemas selected within the workbench, for your archetypes to work. This is done as follows:</p>
			<ul>
				<li>Select the RM Schemas menu &gt; Configure Schemas...</li>
				<li>Ensure that the schemas you require are checked, as shown <a href="images/options_rm_schema_config.png">here</a>.</li>
				<li>Save the configuration.</li>
			</ul>
			<p>You can use <a href="images/profile_combo.png">the profile combo selector above the archetype explorer</a> to switch between the libraries. The remaining sections below describe how to see the ADL/AOM 2 changes using the archetypes you have configured above.</p>
			
			<a name="cfgfile"></a><h2>The .cfg file</h2>
			<h3>Setting options in the workbench</h3>
			<p>Normally, all tool options are set from within the workbench, from the Options Dialog, reached from the Tools menu. It looks like this.</p>
		<p><img src="images/options_dialog.png"></p>
			<h3>Location on various Platforms</h3>
			<p>Options for the ADL workbench, and also the command line tool adlc are located in a .cfg file named after the particular tool e.g. adl_workbench.cfg, adlc.cfg. This file will be in the standard application configuration area for your operating system. For adl_workbench for example, it will be in a location like the following:</p>
			<ul>
				<li><em>Windows XP / Vista</em>: <br/>C:\Documents and Settings\%username%\AppData\Local\openEHR\adl_workbench\adl_workbench.cfg</li>
				<li><em>Windows 7 / 8</em>: C:\Users\%username%\AppData\Local\openEHR\adl_workbench\adl_workbench.cfg</li>
				<li><em>Mac OSX</em>: $HOME/openEHR/adl_workbench/adl_workbench.cfg</li>
				<li><em>Linux:</em> $HOME/openEHR/adl_workbench/adl_workbench.cfg</li>
			</ul>
			<p>Although each tool normally has its own .cfg file, the file adl_workbench.cfg is assumed to be the default. This means for example that if there is no adlc/adlc.cfg, but an adl_workbench.cfg file is found, it will be used.</p>
			<h3>Contents</h3>
			<p>The ADL .cfg file is in ODIN format, and will typically include lines such as the following example (Windows), corresponding to the above configuration.</p>
<pre>
	file_system = &lt;
		terminology_directory = &lt;"C:\\dev\\openEHR\\terminology\\openEHR_RM\\RM\\Release-1.0.2"&gt;
		aom_profile_directory = &lt;"C:\\dev\\openEHR\\adl-tools\\apps\\resources\\aom_profiles"&gt;
		export_directory = &lt;"C:\\Users\\Thomas\\AppData\\Local\\openEHR\\adl_workbench\\export"&gt;
		last_user_selected_directory = &lt;"C:\\dev\\Ocean\\demographic"&gt;
		compiler_gen_directory = &lt;"C:\\Users\\Thomas\\AppData\\Local\\openEHR\\adl_workbench\\gen"&gt;
		test_diff_directory = &lt;"C:\\Users\\Thomas\\AppData\\Local\\openEHR\\adl_workbench\\diff_test"&gt;
		current_work_directory = &lt;"C:\\dev\\openEHR\\adl-archetypes\\ADL15-reference\\features\\flattening"&gt;
		rm_schema_directory = &lt;"C:\\dev\\openEHR\\reference-models\\models"&gt;
	&gt;
	rm_schemas = &lt;
		load_list = &lt;"openehr_adltest_1.0.2", "openehr_ehr_extract_1.1.0", "cdisc_core_0.5.0", "cimi_rm_2.0.2", "hl7_fhir_dstu", "cen_en13606_0.95"&gt;
	&gt;
	gui = &lt;
		app_width = &lt;1616&gt;
		app_height = &lt;916&gt;
		app_x_position = &lt;-8&gt;
		app_y_position = &lt;-8&gt;
		app_maximised = &lt;True&gt;
		test_split_position = &lt;442&gt;
		default_tool_tab = &lt;0&gt;
		show_flat_form = &lt;True&gt;
		show_rm_multiplicities = &lt;True&gt;
		show_rm_inheritance = &lt;True&gt;
		show_codes = &lt;True&gt;
		show_technical_view = &lt;False&gt;
		expand_node_tree = &lt;False&gt;
		show_line_numbers = &lt;False&gt;
		display_archetype_source = &lt;False&gt;
		use_rm_pixmaps = &lt;True&gt;
		show_entire_ontology = &lt;False&gt;
	&gt;
	exec = &lt;
		app_version = &lt;"2.0.5.2594"&gt;
	&gt;
	repositories = &lt;
		locations = &lt;
			["openEHR-reference repository"] = &lt;"C:\\dev\\openEHR\\adl-archetypes"&gt;
			["CIMI-CIMI archetypes"] = &lt;"C:\\dev\\CIMI\\archetypes"&gt;
			["xxxxx-xxxxx-4"] = &lt;"C:\\dev\\Ocean\\demographic"&gt;
		&gt;
		current_library_name = &lt;"openEHR-ADLref"&gt;
	&gt;
	commands = &lt;
		text_editor_command = &lt;"C:\\Program Files (x86)\\Vim\\vim74\\gvim.exe"&gt;
		editor_app_command = &lt;"cmd /q /d /c start \"\" /b"&gt;
		difftool_command = &lt;"C:\\Program Files (x86)\\WinMerge\\WinMergeU.exe /e /u /f *.*"&gt;
	&gt;
	general = &lt;
		archetype_view_language = &lt;"en"&gt;
		error_reporting_level = &lt;9002&gt;
	&gt;
	compiler = &lt;
		adl_15_roundtripping = &lt;False&gt;
		validation_strict = &lt;False&gt;
		rm_flattening = &lt;False&gt;
	&gt;
	namespace_table = &lt;
		namespaces = &lt;
			["oe"] = &lt;"org.openehr"&gt;
		&gt;
	&gt;
	terminology_settings = &lt;
		uri_templates = &lt;
			["snomedct"] = &lt;"http://snomed.info/id/$code_string"&gt;
			["snomed-ct"] = &lt;"http://snomed.info/id/$code_string"&gt;
			["snomed"] = &lt;"http://snomed.info/id/$code_string"&gt;
			["openehr"] = &lt;"http://openehr.org/id/$code_string"&gt;
			["loinc"] = &lt;"http://loinc.org/id/$code_string"&gt;
		&gt;
	&gt;
	authoring = &lt;
		author_name = &lt;"Thomas Beale &lt;thomas.beale@oceaninformatics.com&gt;"&gt;
		author_org = &lt;"Ocean Informatics &lt;http://www.oceaninformatics.com&gt;"&gt;
		author_copyright = &lt;"Copyright (c) 2014 Thomas Beale"&gt;
	&gt;
</pre>
		
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
