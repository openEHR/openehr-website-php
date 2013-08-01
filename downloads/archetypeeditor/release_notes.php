<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'Release Notes';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2><a name="ArchetypeEditorReleases-CurrentBetaRelease"></a>Current Beta Release</h2>

			<h3><a name="ArchetypeEditorReleases-ArchetypeEditor2.2"></a><span><a href="https://github.com/openEHR/arch_ed-dotnet" rel="nofollow">Archetype Editor 2.2.905</a></span> 27 February 2013</h3>

			<h4><a name="ArchetypeEditorReleases-KnownIssues"></a>Known Issues</h4>
			<ul>
				<li>ADL Parser is slow loading first Archetype file.</li>
				<li>When saving to XML, if the option to save ADL automatically is on, then the ADL definition section is deleted.</li>
				<li>The Help documentation is out of date.</li>
			</ul>

			<h4><a name="ArchetypeEditorReleases-ReleaseChanges"></a>Release Changes</h4>
			<ul>
				<li>An <em>openEHR installer</em> is now available. (Previous releases were only available from Ocean Informatics.)</li>
				<li>The option to report an issue goes to the problem tracker on openEHR rather than Ocean Informatics.</li>
				<li>The <em>Help</em> is now online as well as being installed.</li>
				<li>Archetypes can be copied to and from ADL and XML, in batch mode from the command line.</li>
				<li>On creating a new archetype, the 'short concept label' is inserted as the default 'Concept' label.</li>
				<li>On creating a new archetype, an appropriate structure is preselected (usually 'Tree').</li>
				<li><em>&lt;Ctrl+F6&gt;</em> and <em>&lt;Ctrl+Shift+F6&gt;</em> keyboard shortcuts move between the main tabs.</li>
				<li>Exporting to <em>XML</em> now formats nicely with newlines and indenting.</li>
				<li>The <em>Display</em> tab no longer has its own "Save" button.</li>
				<li>The <em>Display</em> tab can now search for text.</li>
				<li>A new <em>Display</em> menu improves the usability of the Display tab.</li>
				<li>The <em>uid</em> attribute is now loaded and saved in archetypes where it is present.</li>
				<li>The proportion constraint control hides the denominator for unitary and percentage types.</li>
				<li>Data value choices are restricted to those that are unique.</li>
				<li>The default <em>cardinality of clusters and sections</em> is 1..*.</li>
				<li><em>ACTION</em> archetypes now show the <em>Planned</em> state, not <em>Initial</em> which was not truly a state.</li>
				<li>In <em>ACTION</em> archetypes, <em>ISM_TRANSITION</em> now has an at-code.</li>
				<li>Allow re-ordering of care flow steps within a state of <em>ACTION</em> archetypes.</li>
				<li>Allow non-standard ontology items in addition to "text", "description" and "comment".</li>
				<li>Allow <em>specialising of events</em> in OBSERVATION archetypes.</li>
				<li>Allow multiple constraints on <em>maths_functions</em>.</li>
				<li>Allow the order of <em>internal codes</em> to be changed.</li>
				<li>Allow <em>internal codes</em> to be copied and pasted.</li>
				<li>Allow an individual <em>internal code</em> to be copied in a format like 'local::at0071::meconium'.</li>
				<li>Allow <em>constraint bindings</em> to be edited directly at the node definition.</li>
				<li>Allow <em>constraint bindings</em> and <em>term bindings</em> to use and browse any terminology.</li>
				<li>Allow <em>assumed value</em> to be set in any data, not just on patient state.</li>
				<li>Allow <em>assumed value</em> to be deleted.</li>
				<li>Allow each <em>contributor</em> to be edited.</li>
				<li>Allow the <em>copyright</em> to be edited.</li>
				<li>Allow the <em>current contact</em> to be recorded.</li>
				<li>Allow <em>DV_PARSABLE</em> to be viewed on the Interface tab.</li>
				<li>Named <em>slots</em> now show the Details tab, allowing comments, annotations and bindings to be added.</li>
				<li>The active <em>language</em> is now displayed in the title bar.</li>
				<li>The at-code and description of <em>internal codes</em> are now shown.</li>
				<li>HTML displays the <em>copyright</em> from the archetype.</li>
				<li>The <em>Authorship</em> date defaults to YYYY-MM-DD format.</li>
				<li>Prevent changing the structure of specialised archetypes.</li>
				<li>Prevent editing of non-specialised nodes on the Definition tab of specialised archetypes.</li>
				<li>When specialising a multiple-occurrence node, the node is cloned only if the user requests.</li>
				<li>When specialising a cluster by cloning, all of the cluster's children are copied too.</li>
				<li>Changing the data type of elements at the same specialisation level as the archetype is always allowed.</li>
				<li>Specialised <em>XML</em> archetypes preserve all term codes inherited from the parent archetype.</li>
				<li>Added g/m2.7 and 10^x property units.</li>
				<li>Added <em>Rate of Change - Pressure</em> property units (daPa/s).</li>
				<li>Added <em>Rate of Change - Frequency</em> property units (Hz/s).</li>
				<li>Added more <em>Japanese</em> translations.</li>
				<li>Added <em>Russian</em> translations.</li>
				<li>Internationalised many parts of the user interface, ready for translation into other languages.</li>
				<li>Fixed the file recovery dialog to appear when appropriate during start-up.</li>
				<li>Fixed specialising of <em>XML</em> archetypes.</li>
				<li>Fixed saving name constraints of <em>XML ELEMENT</em> archetypes.</li>
				<li>Fixed several exceptions with <em>XML</em> archetypes.</li>
				<li>Fixed specialising of of a node more than 10 times in ADL archetypes.</li>
				<li>Fixed drag and drop in <em>SECTION</em> archetypes.</li>
				<li>Fixed action patterns in <em>XML INSTRUCTION</em> archetypes.</li>
				<li>Fixed loading math_function, width, fixed interval and offset in <em>OBSERVATION</em> archetypes.</li>
				<li>Fixed loading occurrences of sub-sections in <em>SECTION</em> archetypes.</li>
				<li>Fixed error when loading an empty <em>resource_package_uri</em> from ADL.</li>
				<li>Fixed errors when loading <em>term bindings</em> and <em>constraint bindings</em>.</li>
				<li>Fixed some problems editing the <em>Term Bindings</em> Complex tab.</li>
				<li>Fixed displaying <em>URI</em> constraints within a <em>choice</em> element.</li>
				<li>Fixed usability problems with <em>assumed value</em> for <em>DV_QUANTITY</em>.</li>
				<li>Fixed changing the data type of an element to a slot.</li>
				<li>Fixed saving a <em>choice</em> with an interval of date or time.</li>
				<li>Fixed saving a <em>choice</em> with a slot.</li>
				<li>Fixed saving a <em>Single</em> or <em>Table</em> structure with a slot.</li>
				<li>Fixed saving of <em>assumed value</em> for <em>DV_CODED_TEXT</em> internal codes.</li>
				<li>Fixed saving of <em>assumed value</em> for <em>DV_PROPORTION</em>.</li>
				<li>Fixed saving of <em>assumed value</em> for <em>DV_DURATION</em>.</li>
				<li>Fixed saving of <em>DV_QUANTITY</em> or <em>DV_PROPORTION</em> with a non-zero precision.</li>
				<li>Fixed saving to XML of <em>is_integral</em> for <em>DV_PROPORTION</em>.</li>
				<li>Fixed saving <em>COMPOSITION</em> archetypes with a <em>Table</em> structure.</li>
				<li>Fixed saving <em>Participation</em> occurrences in <em>COMPOSITION</em> archetypes.</li>
				<li>Fixed invalid occurrences of embedded archetypes.</li>
				<li>Fixed mistranslations in the <em>Japanese</em> terminology.</li>
				<li>Fixed errors that occurred when the computer's language is <em>Norwegian</em>.</li>
				<li>Fixed saving of edits done on the Terminology tab.</li>
				<li>Fixed saving the correct order of <em>internal reference</em> elements.</li>
				<li>Fixed "Person State with Event Series" to be initially enabled in <em>OBSERVATION</em> archetypes.</li>
				<li>Fixed the "-" button to be enabled whenever appropriate to remove cluster and slot elements.</li>
				<li>Fixed garbled text on the Header and Display tabs in some languages.</li>
			</ul>
			<br/>

			
			<h2><a name="ArchetypeEditorReleases-CurrentStableRelease"></a>Current Stable Release</h2>

			<h3><a name="ArchetypeEditorReleases-ArchetypeEditor2.1.583"></a><span><a href="https://github.com/openEHR/arch_ed-dotnet/tree/BlueChina" rel="nofollow">Archetype Editor 2.1.583</a></span> 2 July 2009</h3>

			<h4><a name="ArchetypeEditorReleases-KnownIssues"></a>Known Issues</h4>
			<ul>
				<li>Saving an archetype containing a <em>choice</em> with an interval of date or time (except in the first position) either crashes or corrupts the ADL.</li>
				<li>ADL Parser is slow loading first Archetype file.</li>
				<li>When saving to XML, if the option to save ADL automatically is on, then the ADL definition section is deleted.</li>
				<li>Cardinality "optional not repeating 0..1" cannot be saved.</li>
				<li>The Help documentation is out of date.</li>
			</ul>


			<h4><a name="ArchetypeEditorReleases-ReleaseChanges"></a>Release Changes</h4>
			<ul>
				<li>Old spellings of the following are still accepted, but it now saves the ADL with the correct spelling:
				<ul>
					<li><em>null_flavor</em> is now called <em>null_flavour</em>.</li>
					<li><em>term_binding</em> is now called <em>term_bindings</em>.</li>
					<li><em>constraint_binding</em> is now called <em>constraint_bindings</em>.</li>
				</ul>
				</li>
				<li>An <em>MD5 hash</em> digest of the Archetype Model is saved in <em>other_details</em>, for canonical Archetype Model integrity check hashes.</li>
				<li>Updated existence statements for optional attributes such as protocol, state and value.</li>
				<li>Fixed several ADL/XML archetype file consistency issues.</li>
				<li><em>Interval events</em> may have no maths aggregate function.</li>
				<li><em>DV_PARSABLE</em> is now supported.</li>
				<li><em>Slots</em> show archetypes of all types (XML and ADL).</li>
				<li>Added the correct calculated existence values for <em>Protocol</em> and <em>State</em>.</li>
				<li>The label on the Data tab now reflects the structure when it is changed.</li>
				<li>Updated Flow (Mass) property units.</li>
				<li>Rationalised terminology to remove references to translations and include HL7 OIDs.</li>
				<li>Fixed XML in <em>DV_DURATION</em>, which was not saving the format.</li>
				<li>Ensured <em>ARCHETYPE_INTERNAL_REF.target_path</em> is provided in the archetype XML.</li>
				<li>Ensured the parent concept of the specialised archetype root concept is included in the list of referenced terms in XML.</li>
				<li>Ensured <em>original_author</em> name is mandatory in description.</li>
				<li>Ensured that existing archetypes containing <em>DV_TEXT.value</em> constraints do not silently lose those constraints.</li>
				<li>Included <em>T</em> delimiter in <em>C_DATE_TIME</em> patterns.</li>
				<li>Serialised <em>DV_QUANTITY</em> with default precision, for the "Explicitly specify default value" canonical AM rule.</li>
				<li>Showed compound units in Quantity in the current language.</li>
				<li><em>DV_ORDINAL</em> assumed values are better supported.</li>
			</ul>
			<br/>

			
			<h2><a name="ArchetypeEditorReleases-PreviousReleases"></a>Previous Releases</h2>

			<h3><a name="ArchetypeEditorReleases-ArchetypeEditor2.0.582"></a><span><a href="https://github.com/openEHR/arch_ed-dotnet/tree/Nitrogen" rel="nofollow">Archetype Editor 2.0.582</a></span> 2 July 2009</h3>

			<h4><a name="ArchetypeEditorReleases-KnownIssues"></a>Known Issues</h4>
			<ul>
				<li>ADL Parser is slow loading first Archetype file.</li>
				<li>When saving to XML, if the option to save ADL automatically is on, then the ADL definition section is deleted.</li>
				<li>Cardinality "optional not repeating 0..1" cannot be saved.</li>
				<li>The documentation is out of date.</li>
				<li>The ADL term_binding and constraint_binding are still in the singular (changed in ADL 1.5).</li>
			</ul>

			<h4><a name="ArchetypeEditorReleases-ReleaseChanges"></a>Release Changes</h4>
			<ul>
				<li><em>Slots</em> can now be named.</li>
				<li><em>Slots</em> can now be constrained to an abstract type (<em>Item</em>, <em>Entry</em>, etc.).</li>
				<li><em>Slot patterns</em> now specify the full archetype id, not just the concept and version.</li>
				<li><em>Slot patterns</em> in XML archetypes are no longer surrounding by slashes.</li>
				<li>The web source of archetypes is now <em><span><a href="http://openehr.org/knowledge" rel="nofollow">CKM</a></span></em>.</li>
				<li>Installs a reduced set of <em>sample archetypes</em>, clearly named as samples.</li>
				<li><em>XML</em> archetypes are now valid against the schema.</li>
				<li><em>HTML</em> generation has an updated user-configurable XSLT script.</li>
				<li><em>Ctrl+L</em> keyboard shortcut toggles between two languages.</li>
				<li>Added <em>Japanese</em> terminology.</li>
				<li>Added <em>ICD Oncology (3)</em> terminology.</li>
				<li>Added new unit <em>time fraction</em>.</li>
				<li><em>Internal references</em> are now commented in the ADL, like other nodes already were.</li>
				<li>Prevented duplicate term codes in <em>coded text</em> and <em>ordinals</em>.</li>
				<li><em>Term Bindings</em> save the Release field.</li>
				<li>The terminology look-up has several usability improvements.</li>
				<li><em>Translation</em> saves the Accreditation field.</li>
				<li><em>Copyright</em> details are not discarded.</li>
				<li>The <em>Links</em> button is hidden, unless an option is set.</li>
				<li>Removed the <em>File &#124; Close</em> menu item.</li>
				<li><em>Save As</em> now always regenerates the ADL.</li>
				<li>Changing the archetype id and then saving to the new name sometimes instead overwrote the old .adl file.</li>
				<li>If an <em>embedded</em> archetype is not found, the user can locate its directory.</li>
				<li>Fixed several problems with <em>embedded</em> archetypes, including taking into account the parent archetype's language.</li>
				<li>Fixed loading <em>Quantity</em> minimum and maximum, which were rounding to a whole number.</li>
				<li>Fixed mishandling of "openehr" term codes as "local".</li>
				<li>Fixed an "Incorrect format" error when saving an INSTRUCTION with a <em>Protocol</em>.</li>
				<li>Fixed several exceptions when changing the Structure Type.</li>
				<li>Fixed several exceptions on the Interface tab.</li>
				<li>Fixed exceptions opening an XML archetype containing a <em>DV_EHR_URI</em>.</li>
				<li>Fixed problems saving to ADL:
				<ul>
					<li>Double-quotes were wrongly converted to single quotes. (Saving to XML had the same problem.)</li>
					<li>Backslashes were saved in a way that could cause parsing of the archetype to fail.</li>
					<li>The Purpose, Use, Misuse and Reference fields were saved with extra carriage returns.</li>
				</ul>
				</li>
				<li>Fixed problems introduced in version 1.0.1246:
				<ul>
					<li>An exception occurred when <em>specialising</em> a node.</li>
					<li><em>Save As</em> left the <em>Save</em> button visible.</li>
					<li>Saving as an invalid file name corrected the name silently. It now advises that this is happening.</li>
				</ul>
				</li>
			</ul>

			
			<h3><a name="ArchetypeEditorReleases-ArchetypeEditor1.0.1248"></a><span><a href="https://github.com/openEHR/arch_ed-dotnet/commit/8b240c79cba195ced3463823a5af104597363015" rel="nofollow">Archetype Editor 1.0.1248.332</a></span> 12 May 2008</h3>

			<h4><a name="ArchetypeEditorReleases-KnownIssues"></a>Known Issues</h4>
			<ul>
				<li>ADL Parser is slow loading first Archetype file.</li>
				<li>When saving to XML, if the option to save ADL automatically is on, then the ADL definition section is deleted.</li>
				<li>An exception occurs when trying to specialise a node.</li>
				<li>The user can add duplicate internal codes although it displays only once. The work around is to remove the code until it disappears from the list and then add it back once.</li>
				<li>Cardinality "optional not repeating 0..1" cannot be saved.</li>
				<li>Embedded archetype doesn't take into account the parent archetype's language.</li>
				<li>The Protocol tab causes an "Incorrect format" error.</li>
				<li>Some key details are missing from the HTML for SECTION, INSTRUCTION and ACTION.</li>
				<li>The documentation is out of date.</li>
			</ul>

			<h4><a name="ArchetypeEditorReleases-ReleaseChanges"></a>Release Changes</h4>
			<ul>
				<li>Fixed loading of attributes such as <em>QUANTITY.precision</em> from the ADL file. (This error was introduced in version 1.0.1243.)</li>
				<li>Fixed wrong image being displayed for Clusters.</li>
			</ul>

			
			<h3><a name="ArchetypeEditorReleases-ArchetypeEditor1.0.1247"></a><span><a href="https://github.com/openEHR/arch_ed-dotnet/commit/6457065e019d174145ec120279559eebd05a1877" rel="nofollow">Archetype Editor 1.0.1247.327</a></span> 6 May 2008</h3>

			<h4><a name="ArchetypeEditorReleases-KnownIssues"></a>Known Issues</h4>
			<ul>
				<li>ADL Parser is slow loading first Archetype file.</li>
				<li>When saving to XML, if the option to save ADL automatically is on, then the ADL definition section is deleted.</li>
				<li>Some attributes (e.g. QUANTITY.precision) are always loaded as zero from the ADL file.</li>
				<li>Wrong image is being displayed for Clusters.</li>
				<li>An exception occurs when trying to specialise a node.</li>
				<li>The user can add duplicate internal codes although it displays only once.</li>
				<li>Cardinality "optional not repeating 0..1" cannot be saved.</li>
				<li>Embedded archetype doesn't take into account the parent archetype's language.</li>
				<li>The Protocol tab causes an "Incorrect format" error.</li>
				<li>The documentation is out of date.</li>
			</ul>

			<h4><a name="ArchetypeEditorReleases-ReleaseChanges"></a>Release Changes</h4>
			<ul>
				<li><em>DV_IDENTIFIER</em> is now supported.</li>
				<li><em>Participations</em> can now be saved within a COMPOSITION archetype.</li>
				<li>Fixed saving of <em>Slots</em> to ADL, which often had an invalid include or exclude pattern.</li>
				<li>Fixed several "Unhandled Exception" error messages.</li>
			</ul>

			
			<h3><a name="ArchetypeEditorReleases-ArchetypeEditor1.0.1246"></a><span><a href="https://github.com/openEHR/arch_ed-dotnet/commit/61598f0d47401c43d6352bb985bbc11ef1f0f6ce" rel="nofollow">Archetype Editor 1.0.1246.315</a></span> 29 April 2008</h3>

			<h4><a name="ArchetypeEditorReleases-KnownIssues"></a>Known Issues</h4>
			<ul>
				<li>ADL Parser is slow loading first Archetype file.</li>
				<li>When saving to XML, if the option to save ADL automatically is on, then the ADL definition section is deleted.</li>
				<li>Slots are saved to ADL with an invalid include or exclude pattern.</li>
				<li>Some attributes (e.g. QUANTITY.precision) are always loaded as zero from the ADL file.</li>
				<li>Participations do not save for COMPOSITION or if only Occurrences is set.</li>
				<li>An exception when occurs trying to specialise a node.</li>
				<li>The user can add duplicate internal codes although it displays only once.</li>
				<li>Cardinality "optional not repeating 0..1" cannot be saved.</li>
				<li>Embedded archetype doesn't take into account the parent archetype's language.</li>
				<li>The Protocol tab causes an "Incorrect format" error.</li>
				<li>The documentation is out of date.</li>
			</ul>

			<h4><a name="ArchetypeEditorReleases-ReleaseChanges"></a>Release Changes</h4>
			<ul>
				<li>The installer now associates Archetype Editor with the <em>.adl</em> file extension.</li>
				<li>The installer now sets up the same sample archetypes directory as Template Designer.</li>
				<li>When saving an archetype, a dialog warns if the file name does not match the id.</li>
				<li>The <em>HTML</em> display is now optionally generated via a user-configurable XSLT script.</li>
				<li>On the <em>Header</em> tab:
				<ul>
				<li>There is a new <em>Links</em> button.</li>
				<li>Right-clicking the archetype id pops up a <em>Copy</em> menu.</li>
				</ul>
				</li>
				<li>The <em>New</em> button on the toolbar is now always visible.</li>
				<li>Changing the <em>Structure</em> type now scrolls so you can see its combo box.</li>
				<li>Adding <em>Quantity Units</em> no longer adds the Property as a Unit when you cancel.</li>
				<li>Adding a <em>Slot</em> pattern now gives the option to match specialisations.</li>
				<li>Fixed the <em>Save As</em> dialog's <em>HTML</em> option, which did nothing when you selected it.</li>
				<li>Fixed various problems with <em>reference</em> elements.</li>
				<li>Fixed errors reloading two of the <em>date-time</em> constraint formats.</li>
				<li>Fixed some mistakes in the display of <em>date-time</em> constraint fields on the <em>Interface</em> tab.</li>
				<li>Fixed saving of the <em>Duration min</em> constraint.</li>
				<li>Fixed an "Error creating window handle" after frequently switching to the <em>Interface</em> tab of a large archetype.</li>
				<li>Fixed several "Unhandled Exception" error messages.</li>
			</ul>


			<h3><a name="ArchetypeEditorReleases-ArchetypeEditor1.0.1245.279"></a><span><a href="https://github.com/openEHR/arch_ed-dotnet/commit/6a5b1e3b75aca222e8db2d0290c05d8e3bbfc79c" rel="nofollow">Archetype Editor 1.0.1245.279</a></span> 26 March 2008</h3>

			<h4><a name="ArchetypeEditorReleases-KnownIssues"></a>Known Issues</h4>
			<ul>
				<li>ADL Parser is slow loading first Archetype file.</li>
				<li>When saving to XML, if the option to save ADL automatically is on, then the ADL definition section is deleted.</li>
				<li>The user can add duplicate internal codes although it displays only once.</li>
				<li>Some attributes (e.g. QUANTITY.precision) are always loaded as zero from the ADL file.</li>
				<li>Cardinality "optional not repeating 0..1" cannot be saved.</li>
				<li>Embedded archetype doesn't take into account the parent archetype's language.</li>
				<li>The Protocol tab causes an "Incorrect format" error.</li>
				<li>Some key details are missing from the HTML for SECTION, INSTRUCTION and ACTION.</li>
				<li>The documentation is out of date.</li>
			</ul>

			<h4><a name="ArchetypeEditorReleases-ReleaseChanges"></a>Release Changes</h4>
			<ul>
				<li>The old 'A' icon has been removed everywhere, in favour of the 'Oi' icon, similar to the Ocean Template Designer.</li>
				<li>The overall appearance makes better use of Windows XP and Vista visual themes, most noticeably in the <em>Open from Web</em> dialog.</li>
				<li>A new option allows <em>automatic saving to XML</em> whenever an archetype is saved as ADL; and also <em>automatic saving to ADL</em> whenever an archetype is saved as XML.</li>
				<li>An unhandled exception has been fixed, when opening an embedded archetype if the repository path does not have a "structures" subdirectory.</li>
				<li><em>XML</em> was exported with the wrong <em>adl_version</em> (e.g., "v1"). It is now correct (i.e., "1.4").</li>
			</ul>


			<h3><a name="ArchetypeEditorReleases-ArchetypeEditor1.0.1244.250"></a><span><a href="https://github.com/openEHR/arch_ed-dotnet/commit/6876ede017e87eeafcd378ffd4d524d417a54554" rel="nofollow">Archetype Editor 1.0.1244.250</a></span> 30 November 2007</h3>

			<h4><a name="ArchetypeEditorReleases-KnownIssues"></a>Known Issues</h4>
			<ul>
				<li>ADL Parser is slow loading first Archetype file.</li>
				<li>The user can add duplicate internal codes although it displays only once.</li>
				<li>Some attributes (e.g. QUANTITY.precision) are always loaded as zero from the ADL file.</li>
				<li>Cardinality "optional not repeating 0..1" cannot be saved.</li>
				<li>Unhandled exception when the repository is one directory above where it should be.</li>
				<li>Embedded archetype doesn't take into account the parent archetype's language.</li>
				<li>The Protocol tab causes an "Incorrect format" error.</li>
				<li>Some key details are missing from the HTML for SECTION, INSTRUCTION and ACTION.</li>
				<li>The documentation is out of date.</li>
			</ul>

			<h4><a name="ArchetypeEditorReleases-ReleaseChanges"></a>Release Changes</h4>
			<ul>
				<li>New option to <em>open an archetype from the web</em>.</li>
				<li>The Options window is now under a Windows-standard <em>Tools</em> menu.</li>
				<li>The version number now has a fourth part, identifying the revision from which it was built.</li>
				<li>Removed the XML and ADL radio buttons on the start-up dialog.</li>
				<li>Fixed the DURATION constraint, which could not be set if no pattern or range were specified.</li>
				<li>Fixed several "Unhandled Exception" error messages.</li>
				<li>Fixed a problem that it sometimes silently failed to save to XML.</li>
				<li>Fixed term_bindings in the XML, which did not have a code_string element value, and instead placed it wrongly in the terminology_id.</li>
				<li>Fixed a rare case where the specialisation part of an archetype ID could be lost when renaming it.</li>
				<li>Fixed the size of the Participations controls so that they are fully visible.</li>
				<li>Added scroll bars in several places, to improve usability on very small screens.</li>
				<li>The Pathway tab is more user-friendly.</li>
				<li>Added new units for pressure and impedance/immitance.</li>
				<li>Changing the Structure now works with Single, even if no object has been selected.</li>
			</ul>


			<h3><a name="ArchetypeEditorReleases-ArchetypeEditor1.0.1243"></a>Archetype Editor 1.0.1243 26 October 2007</h3>

			<h4><a name="ArchetypeEditorReleases-KnownIssues"></a>Known Issues</h4>
			<ul>
				<li>ADL Parser is slow loading first Archetype file.</li>
				<li>The user can add duplicate internal codes although it displays only once.</li>
				<li>Some attributes (e.g. QUANTITY.precision) are always loaded as zero from the ADL file.</li>
				<li>If an archetype contains references on the Description tab, exporting to XML silently fails to write to the XML file.</li>
			</ul>

			<h4><a name="ArchetypeEditorReleases-ReleaseChanges"></a>Release Changes</h4>
			<ul>
				<li>Now runs on both 64- and 32-bit versions of Windows.</li>
				<li>Updated the problem reporting to use Jira rather than Mantis.</li>
				<li>No longer writes to the "Program Files" directory, so it will work for non-administrative users, in a student lab setting, etc.</li>
				<li>An auto-backup is created at a configurable time interval.</li>
				<li>Improved validation of the Short Concept part of the Archetype ID.</li>
				<li>Fixed various bugs on saving XML.</li>
				<li>Fixed a lot of "Unhandled Exception" error messages.</li>
				<li>Fixed HTML-generation of archetypes with Table structure.</li>
				<li>Fixed the order of OK and Cancel buttons to conform to Windows standards.</li>
				<li>Fixed the tab order in many places.</li>
				<li>Minimum duration range of zero retains the correct units: it is no longer forced to "0S".</li>
				<li>Changes to "Limit decimal places" are now saved, even if "Set min. value" and/or "Set max. value" is not set.</li>
				<li>The default setting for a Text attribute is now "Free text/coded".</li>
				<li>Changing the Structure now works with Table and Single, not just List and Tree.</li>
			</ul>


			<h3><a name="ArchetypeEditorReleases-ArchetypeEditor1.0.1241"></a>Archetype Editor 1.0.1241 1 June 2007</h3>

			<h4><a name="ArchetypeEditorReleases-ReleaseChanges"></a>Release Changes</h4>
			<ul>
				<li>ADL Parser is slow loading first Archetype file.</li>
				<li>Fixed bug on saving XML.</li>
				<li>Catches error on loading chained archetypes.</li>
				<li>Corrected error in HTML display.</li>
				<li>Fixed bug in display of Duration data type.</li>
				<li>Fixed bug on addressing list of internal codes when double-click on list.</li>
				<li>Fixed bug with load from command line.</li>
				<li>Fixed bug with typing property into quantity.</li>
				<li>Fixed bug with duration in weeks.</li>
				<li>Full Release 1.0.1 compliance with XML archetypes.</li>
			</ul>


			<h3><a name="ArchetypeEditorReleases-ArchetypeEditor1.0.1240"></a>Archetype Editor 1.0.1240 11 May 2007</h3>

			
			<h3><a name="ArchetypeEditorReleases-ArchetypeEditor1.0.123819March2007"></a>Archetype Editor 1.0.1238 19 March 2007</h3>

			<h4><a name="ArchetypeEditorReleases-ReleaseChanges"></a>Release Changes</h4>
			<ul>
				<li>Fixed bug with load from command line.</li>
				<li>Fixed bug with typing property into quantity.</li>
				<li>Fixed bug with duration in weeks.</li>
			</ul>


			<h3><a name="ArchetypeEditorReleases-ArchetypeEditor0.99.8Beta25October2006"></a>Archetype Editor 0.99.8 Beta 25 October 2006</h3>

			<h4><a name="ArchetypeEditorReleases-ReleaseChanges"></a>Release Changes</h4>
			<ul>
				<li>Major changes to align with release 1.0 of the reference model.</li>
				<li>New Action class archetypes, altered instruction model.</li>
				<li>Allows embedded editing of structures within entries (allows instruction and action to share activity description specifications).</li>
				<li>Date representation fully ISO compliant.</li>
				<li>Many bugs and GUI issues fixed for working in other languages (GUI support for German, Turkish and Farsi added).</li>
			</ul>


			<h3><a name="ArchetypeEditorReleases-ArchetypeEditor0.99.825September2006"></a>Archetype Editor 0.99.8 25 September 2006</h3>

			<h4><a name="ArchetypeEditorReleases-ReleaseChanges"></a>Release Changes</h4>
			<ul>
				<li>Further alignment with the 1.0 reference model. Main change is that State data is now represented on one event and referenced from other events. Many minor bug fixes.</li>
				<li>Quantity properties are now sorted and it is possible to add a unit first (setting the property based on the unit).</li>
				<li>A lot of work on the Terminology bindings and constraint bindings.</li>
			</ul>


			<h3><a name="ArchetypeEditorReleases-ArchetypeEditor0.99.7f28August2006"></a>Archetype Editor 0.99.7f 28 August 2006</h3>

			<h4><a name="ArchetypeEditorReleases-ReleaseChanges"></a>Release Changes</h4>
			<ul>
				<li>Bug fixes - working in languages which do not have translations of the openEHR termset.</li>
				<li>This release fixes many issues with term and constraint bindings - enabling binding of terms that are not archetype nodes.</li>
			</ul>


			<h3><a name="ArchetypeEditorReleases-ArchetypeEditor0.99.7e11July2006"></a>Archetype Editor 0.99.7e 11 July 2006</h3>

			<h4><a name="ArchetypeEditorReleases-ReleaseChanges"></a>Release Changes</h4>
			<ul>
				<li>Full alignment with openEHR Foundation archetypes.</li>
			</ul>


			<h3><a name="ArchetypeEditorReleases-ArchetypeEditor0.99.7d15June2006"></a>Archetype Editor 0.99.7d 15 June 2006</h3>

			<h4><a name="ArchetypeEditorReleases-ReleaseChanges"></a>Release Changes</h4>
			<ul>
				<li>Fixed bug - not recording Quantity.Property.</li>
			</ul>


			<h3><a name="ArchetypeEditorReleases-ArchetypeEditor0.99.7c6June2006"></a>Archetype Editor 0.99.7c 6 June 2006</h3>

			<h4><a name="ArchetypeEditorReleases-ReleaseChanges"></a>Release Changes</h4>
			<ul>
				<li>Fixed bug with Section archetypes.</li>
				<li>Handling of single data structure error corrected.</li>
			</ul>


			<h3><a name="ArchetypeEditorReleases-ArchetypeEditor0.99.7b25May2006"></a>Archetype Editor 0.99.7b 25 May 2006</h3>

			<h4><a name="ArchetypeEditorReleases-ReleaseChanges"></a>Release Changes</h4>
			<ul>
				<li>Parser updated to handle carriage returns in text and description.</li>
				<li>Constraint bindings to terminologies are now saved, though no standardisation of this has yet been agreed.</li>
				<li>Contributors and keywords are now handled properly.</li>
				<li>Right to left script handling now almost universal.</li>
				<li>Date time representation is now fully ISO compliant - backward compatibility has been maintained.</li>
				<li>'b' corrects parser error removing excessive codes during cleanup.</li>
			</ul>


			<h3><a name="ArchetypeEditorReleases-ArchetypeEditor0.99.6a11May2006"></a>Archetype Editor 0.99.6a 11 May 2006</h3>

			<h4><a name="ArchetypeEditorReleases-ReleaseChanges"></a>Release Changes</h4>
			<ul>
				<li>Build 0.99.6 saved when working in Farsi which gave default menus in Farsi. More additions for handling right-to-left scripts.</li>
				<li>Bug fixed in loading descriptions.</li>
			</ul>


			<h3><a name="ArchetypeEditorReleases-ArchetypeEditor0.99.68May2006"></a>Archetype Editor 0.99.6 8 May 2006</h3>

			<h4><a name="ArchetypeEditorReleases-ReleaseChanges"></a>Release Changes</h4>
			<ul>
				<li>Further GUI support for other languages, comprehensive testing.</li>
				<li>Minor bug fixes.</li>
			</ul>


			<h3><a name="ArchetypeEditorReleases-ArchetypeEditor0.99.5d23April2006"></a>Archetype Editor 0.99.5d 23 April 2006</h3>

			<h4><a name="ArchetypeEditorReleases-ReleaseChanges"></a>Release Changes</h4>
			<ul>
				<li>Minor bug fixes from alpha testing - ordinals display in embedded archetypes, correct file save on changing occurrences with embedded archetypes.</li>
			</ul>


			<h3><a name="ArchetypeEditorReleases-ArchetypeEditor0.99.5c22April2006"></a>Archetype Editor 0.99.5c 22 April 2006</h3>

			<h4><a name="ArchetypeEditorReleases-ReleaseChanges"></a>Release Changes</h4>
			<ul>
				<li>Minor changes to ADL processing, instruction.activity.action_archetype_id as regular expression.</li>
				<li>Bug fix with archetype naming.</li>
			</ul>


			<h3><a name="ArchetypeEditorReleases-ArchetypeEditor0.99.5b17April2006"></a>Archetype Editor 0.99.5b 17 April 2006</h3>

			<h4><a name="ArchetypeEditorReleases-ReleaseChanges"></a>Release Changes</h4>
			<ul>
				<li>Fixed bugs with drag and drop, more interface translation, embedding archetypes.</li>
				<li>Fixed bug in structure archetypes archetype ID name.</li>
			</ul>


			<h3><a name="ArchetypeEditorReleases-ArchetypeEditor0.99.5a9April2006"></a>Archetype Editor 0.99.5a 9 April 2006</h3>

			<h4><a name="ArchetypeEditorReleases-ReleaseChanges"></a>Release Changes</h4>
			<ul>
				<li>Major rework to allow embedded archetypes, added Action archetypes, fixed bugs with language translation and GUI, added archetype Description.</li>
				<li>Comes with sample archetypes which are release 1.0 compatible, installed in archetype subdirectory.</li>
			</ul>


			<h3><a name="ArchetypeEditorReleases-ArchetypeEditor0.99.2a8June2005"></a>Archetype Editor 0.99.2a 8 June 2005</h3>

			<h4><a name="ArchetypeEditorReleases-ReleaseChanges"></a>Release Changes</h4>
			<ul>
				<li>Add display of further data types, find in ADL view, fixed various minor bugs and over-write bug if new archetype created twice.</li>
			</ul>


			<h3><a name="ArchetypeEditorReleases-ArchetypeEditor0.99.1a17May2005"></a>Archetype Editor 0.99.1a 17 May 2005</h3>

			<h4><a name="ArchetypeEditorReleases-ReleaseChanges"></a>Release Changes</h4>
			<ul>
				<li>Fix translate to local language on load, allow edit of archetype ID, multiple datatype now called choice.</li>
			</ul>


			<h3><a name="ArchetypeEditorReleases-ArchetypeEditor0.995May2005"></a>Archetype Editor 0.99 5 May 2005</h3>

			<h4><a name="ArchetypeEditorReleases-ReleaseChanges"></a>Release Changes</h4>
			<ul>
				<li>Added quantity ratio (count only at this stage) and assumed values.</li>
			</ul>


			<h3><a name="ArchetypeEditorReleases-ArchetypeEditor0.98.925April2005"></a>Archetype Editor 0.98.9 25 April 2005</h3>

			<h4><a name="ArchetypeEditorReleases-ReleaseChanges"></a>Release Changes</h4>
			<ul>
				<li>Added control of cluster cardinality, debugged specialisations, cluster drag/drop.</li>
			</ul>


			<h3><a name="ArchetypeEditorReleases-ArchetypeEditor0.98.813April2005"></a>Archetype Editor 0.98.8 13 April 2005</h3>

			<h4><a name="ArchetypeEditorReleases-ReleaseChanges"></a>Release Changes</h4>
			<ul>
				<li>Refined HTML display, fixed bug with display of URI in interface.</li>
			</ul>


			<h3><a name="ArchetypeEditorReleases-ArchetypeEditor0.98.730March2005"></a>Archetype Editor 0.98.7 30 March 2005</h3>

			<h4><a name="ArchetypeEditorReleases-ReleaseChanges"></a>Release Changes</h4>
			<ul>
				<li>Early version of HTML display, fixed bug with dates.</li>
			</ul>


			<h3><a name="ArchetypeEditorReleases-ArchetypeEditor0.98.619March2005"></a>Archetype Editor 0.98.6 19 March 2005</h3>

			<h4><a name="ArchetypeEditorReleases-ReleaseChanges"></a>Release Changes</h4>
			<ul>
				<li>Updated to work with ADL 1.2 ready for openEHR 1.0 release later in the year.</li>
			</ul>


			<h3><a name="ArchetypeEditorReleases-ArchetypeEditor0.98.58February2005"></a>Archetype Editor 0.98.5 8 February 2005</h3>

			<h4><a name="ArchetypeEditorReleases-ReleaseChanges"></a>Release Changes</h4>
			<ul>
				<li>Minor bug fixes with translation of ordinals.</li>
				<li>Added ability to edit description of ordinal terms.</li>
			</ul>
        
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>