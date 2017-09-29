<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'Browsing and Compiling';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header_english.php');
?>

		<div id="Content">
<!-- ------------------------------------------ Content starts here - ----------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>The Archetype and Template Catalogues</h2>
			<p>As soon as you have specified a profile (Repository &gt; Set repository), the left-hand side explorer controls will populate and you will initially see the explorer with the reference model (RM) class hierarchy. If you have selected 'Show entire terminology in explorer?' in the Options dialog, you will see all classes from all loaded RM schemas. This can be useful for understanding the reference models. Normally you will probably not use this option. At any time, you can select a class node in the explorer, and its Reference Model definition will be displayed in flat form, i.e. compressed through inheritance. </p>
			<br/>

            <table style="BACKGROUND-COLOR: #ffffff" border="0" cellspacing="2" cellpadding="2" width="70%">
            <tbody>
			<tr valign="top">
				<td style="BORDER-RIGHT-WIDTH: 0px; BORDER-TOP-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px">
                <a href="images/explorer_initial_view.png">
					<img border="0" alt="Initial view in explorer" src="images/explorer_initial_view.png" height="350"/> </a>
                <p><em>Initial view</em></p>
				</td>
				<td style="BORDER-RIGHT-WIDTH: 0px; BORDER-TOP-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px">
                <a href="images/explorer_spec.png">
					<img border="0" alt="Explorer showing specialisation" src="images/explorer_spec.png" height="350"/> </a>
                <p><em>Specialisation view</em></p>
				</td>
			</tr>
            </tbody>
            </table>
         
		 
			<h2>Compiling archetypes</h2>
			<p>When you start the ADL Workbench, archetypes are not compiled. The easiest way to compile them is to hit F7, which will compile all of the archetypes in the currently selected repository in one go. This can be interrupted with Shift-ESC.'Compiling' means parsing, validating and flattening. Archetypes can also be compiled individually by selecting them in the explorer. Other options under the repository menu allow you to compile archetypes in selected subtrees. If you select a specialised archetype, its specialisation parents will automatically compile.</p>
			<p>If your repository has templates in it, you can compile a template in the same way. If you select a template in the Template explorer tab, you will see that all its dependencies compile, i.e. all archetypes implicated in its slot-filling and specialisation statements.</p>
			<p>The compilation process performs validation on every archetype and reports errors. Errors fall into two categories: syntactic, denoted with codes starting with 'S', and validity errors, denoted with 'V' codes. The errors are shown both in the status tab and the errors tab at the bottom. The status window is shown below.</p>
			
			<table style="BACKGROUND-COLOR: #ffffff" border="0" cellspacing="2" cellpadding="2" width="70%">
			<tbody>
			<tr valign="top">
				<td style="BORDER-RIGHT-WIDTH: 0px; BORDER-TOP-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px">
				<a href="images/compile_1.png">
					<img border="0" alt="Status window" src="images/compile_1.png" width="360"/> </a>
				<p><em>Compilation feedback</em></p>
				</td>
				<td style="BORDER-RIGHT-WIDTH: 0px; BORDER-TOP-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px">
				<a href="images/compile_2.png">
					<img border="0" alt="Status window" src="images/compile_2.png" width="360"/> </a>
				<p><em>Compilation errors</em></p>
				</td>
			</tr>
			</tbody>
			</table>
			
			<p>The compilation errors can also be seen in the Errors tab at the bottom, classified according to type, as shown below.</p>
			<a href="images/errors_2.png"><p><img border="0" alt="Error tree" src="images/errors_2.png" width="750"/> </a></p>
		  
			<h3>Metrics Report</h3>
			<p>The 'Metrics' tab provides a report of counts of archetypes, compiled archetypes, specialised archetypes and so on, for the current repository.</p>
			<p><a href="images/catalogue_metrics.png"> <img border="0" alt="Repository metrics" src="images/catalogue_metrics.png"/> </a></p>
			<p>The 'Statistics' tab provides a statistical report of the use of RM types and prperties in archetypes, as well as terminology definitions and bindings.</p>
			<p><a href="images/catalogue_statistics.png"> <img border="0" alt="Repository statistics" src="images/catalogue_statistics.png"/> </a></p><br/>
			
			
			<h2>Viewing an archetype</h2>
			<p>This section describes the various ways of viewing a successfully compiled archetype.</p>
			
			<h3>Descriptive meta-data</h3>
			<p>All archetypes have a number of header sections containing descriptive meta-data about the archetype. The Description tab shows all of these sections, including author details, translation information, keywords, purpose, use, misuse and so on.</p>
			<table style="BACKGROUND-COLOR: #ffffff" border="0" cellspacing="2" cellpadding="0" width="70%">
			<tbody>
			<tr valign="top">
				<td style="BORDER-RIGHT-WIDTH: 0px; BORDER-TOP-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px">
				<a href="images/description_1.png">
					<img border="0" alt="Archetype description" src="images/description_1.png" width="360"/> </a>
				<p><em>Description sections</em></p>
				</td>
				<td style="BORDER-RIGHT-WIDTH: 0px; BORDER-TOP-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px">
				<a href="images/description_unicode.png">
					<img border="0" alt="Description unicode" src="images/description_unicode.png" width="360"/> </a>
				<p><em>Description (unicode example)</em></p>
				</td>
			</tr>
			</tbody>
			</table>
		  
			<h3>Source (differential) and flat forms</h3>
			<p>A key point to understand is that in most views, the archetype is visible in either source (differential) or flat form.
			For non-specialised archetypes, the two forms are structurally the same. For specialised archetypes and templates,
			the source form is the same idea as for object-oriented class files (e.g. in Java, .NET, etc), i.e. it contains only
			differences with respect to the immediate specialisation parent. For both, the source form is the 'authored' form.
			The flat form is the result of 'compressing' an archetype through its specialisation lineage, i.e. the 'operational'
			form of the archetype at runtime. This 'flattening' is the same thing that happens in all object-oriented programming technologies.
			Due to flattening, we often speak of the 'flat parent' with respect to a differential archetype, which denotes all constraints so far in the lineage.</p>
			<p>From the point of view of the AWB, you can see both the differential and flat forms of an archetype visualised.
			Most of the views below can be seen in differential and flat form. Use the Differential and Flat View tabs at the top to switch.</p>

			<h3>Node map</h3>
			<p>The node map is a way of viewing the definition part of the archetype structurally.
			The definition section contains the main definitional statements of the archetype,
			and can be thought of as a visualisation of an AOM structure, that is to say, each node corresponds to an AOM node type.
			In the differential form, the node map shows only those constraints introduced by the archetype on its own.
			If it is a non-specialised archetype, these constraints are in addition to constraints implied by the reference model (cardinality,
			types etc). For a specialised archetype, the constraints are in addition to the 'flat parent',
			i.e. the notional sum of constraints so far in the specialisation lineage.
			You will notice in particular that specialised archetypes have constraints whose parent attributes are not 
			just a single attribute name like 'items', but are a path, like '/protocol', '/data/events[at0010]/items[at0023]' and so on.</p>
			
			<table style="BACKGROUND-COLOR: #ffffff" border="0" cellspacing="2" cellpadding="0" width="70%">
			<tbody>
			<tr valign="top">
				<td style="BORDER-RIGHT-WIDTH: 0px; BORDER-TOP-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px">
				<a href="images/node_map_diff_spec_no_RM.png">
					<img border="0" alt="Differential, specialised, no RM classes" src="images/node_map_diff_spec_no_RM.png" width="360"/> </a>
				<p><em>Differential, specialised, domain view</em></p>
				</td>
				<td style="BORDER-RIGHT-WIDTH: 0px; BORDER-TOP-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px; padding-left:4em;">
				<a href="images/node_map_diff_spec_RM_classes.png">
					<img border="0" alt="Node map, differential, specialised, RM classes" src="images/node_map_diff_spec_RM_classes.png" width="360"/> </a>
				<p><em>Node map, differential, specialised, technical view (includes RM classes)</em></p>
				</td>
			</tr>
			<tr valign="top">
				<td style="BORDER-RIGHT-WIDTH: 0px; BORDER-TOP-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px">
				<a href="images/node_map_flat_spec_no_RM.png">
					<img border="0" alt="Flat, specialised, no RM" src="images/node_map_flat_spec_no_RM.png" width="360"/> </a>
				<p><em>Flat, specialised, technical view</em></p>
				</td>
				<td style="BORDER-RIGHT-WIDTH: 0px; BORDER-TOP-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px; padding-left:4em;">
				<a href="images/node_map_unicode.png">
					<img border="0" alt="Node map, unicode" src="images/node_map_unicode.png" width="360"/> </a>
				<p><em>Node map, unicode</em></p>
				</td>
			</tr>
			</tbody>
			</table>
		  
			<p>Each node map node is shown in three possible forms. If the node is coloured, it is defined new within the current archetype. If it is coloured, with a yellow border, it redefines an existing node from the flat parent. If it is solid yellow/grey, it is purely inherited.</p>
			<p>You can use the radio button controls on the right to show each node in more or less detail. The 'RM visibility' radio button controls enable three categories of reference model attribute that have not been archetyped to be seen. These are as follows:</p>
			<ul>
				<li><em>Data Properties</em>: properties from the reference model that are part of the clinical data, and could be archetyped;</li>
				<li><em>Runtime Properties</em>: properties from the reference model whose values are set at runtime, and for which no useful constraint could be set in an archetype (includes all dates and times);</li>
				<li><em>Infrastructure Properties</em>: properties from the reference model that do not represent clinical data, but are used to manage data representation, identification, versioning etc.</li>
			</ul>
		  
			<p>The classifications of RM properties are defined in the reference model schemas and can be modified independently of the tool or any particular archetype.</p>
			<table style="BACKGROUND-COLOR: #ffffff" border="0" cellspacing="2" cellpadding="0" width="70%">
			<tbody>
				<tr valign="top">
					<td style="BORDER-RIGHT-WIDTH: 0px; BORDER-TOP-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px">
					<a href="images/rm_differential.png">
						<img border="0" alt="RM properties, differential form" src="images/tn_rm_differential.jpg"/> </a>
					<p><em>RM properties (differential form)</em></p>
					</td>
					<td style="BORDER-RIGHT-WIDTH: 0px; BORDER-TOP-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px; padding-left:4em;">
					<a href="images/rm_flat.png">
						<img border="0" alt="RM properties, flat form" src="images/tn_rm_flat.jpg"/> </a>
					<p><em>RM properties (flat form)</em></p>
					</td>
				</tr>
			</tbody>
			</table>
		  
			<h3>Interface</h3>
			<p>Archetype definitions are inherently hierarchical structures, and as a consequence various types of 'interface' can be extracted from any archetype. The most obvious is a 'path map', which is the basis for all queries written in AQL or a-path. Every node in an archetype is guaranteed to have a unique path. If you select the path map in the differential and flat forms, you will see the larger number of paths being extracted from the latter. There is also a tab for 'Interface tags', which shows a standard transform from paths to single string tags usable in XSDs and TDO APIs - in any language.</p>
			<table style="BACKGROUND-COLOR: #ffffff" border="0" cellspacing="2" cellpadding="0" width="70%">
			<tbody>
			<tr valign="top">
				<td style="BORDER-RIGHT-WIDTH: 0px; BORDER-TOP-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px">
				<a href="images/paths_body_temp_diff_nat_lang.png">
					<img border="0" alt="Paths, natural language" src="images/paths_body_temp_diff_nat_lang.png" width="360" height="106"/> </a>
				<p><em>Path map, natural language paths</em></p>
				</td>
				<td style="BORDER-RIGHT-WIDTH: 0px; BORDER-TOP-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px">
				<a href="images/paths_body_temp_diff_machine.png">
					<img border="0" alt="Path map, machine codes" src="images/paths_body_temp_diff_machine.png" width="360" height="111"/> </a>
				<p><em>Path map, machine paths</em></p>
				</td>
			</tr>
			<tr valign="top">
				<td style="BORDER-RIGHT-WIDTH: 0px; BORDER-TOP-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px">
				<a href="images/paths_diff_heart_rate_machine.png">
					<img border="0" alt="Path map diff parent" src="images/paths_diff_heart_rate_machine.png" width="360" height="137"/> </a>
				<p><em>Path map, parent archetype</em></p>
				</td>
				<td style="BORDER-RIGHT-WIDTH: 0px; BORDER-TOP-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px">
				<a href="images/paths_heart_rate-pulse_flat_machine.png">
					<img border="0" alt="Path map, flat child" src="images/paths_heart_rate-pulse_flat_machine.png" width="360" height="134"/> </a>
				<p><em>Path map, flat child archetype</em></p>
				</td>
			</tr>
			</tbody>
			</table>
			
			<p>Paths are crucial to manipulating archetypes at runtime, and also to building queries. The path syntax is a slightly reduced form of XPath syntax, and can be converted to standard XPath for XML-based processing.</p>
			<p>For specialised archetypes, the Path Map under the differential view shows only paths in structures introduced in the specialised archetype, while the path map in the flat view shows paths due to all inherited nodes as well.</p>
			<p>The columns of the display can be controlled using the check boxes on the right, and are as follows:</p>
			<ul>
				<li>physical paths: paths containing [atnnnn] codes, used by the software </li>
				<li>logical paths: paths with [atnnnn] codes replaced by the human-readable values from the terminology </li>
				<li>RM Type: the Reference Model type constrained by the node corresponding to the displayed path </li>
				<li>AOM Type: Archetype Object Model type - this is the type of the archetype node, usually only of interest to implementers </li>
			</ul>
			<p>Paths can be selected and saved to the clipboard for use in other tools, by selecting rows (including multiple rows, by using the Ctrl key) and then using Ctrl+C (copy) to copy to the clipboard. The clipboard contents can be viewed from the Edit menu.</p>
          
			<h3>Slot map</h3>
			<p>Some archetypes contain slots, which are joining points to other archetypes. A slot is defined as a constraint that specifies the possible archetypes that may be used at this point. We can think of the archetypes that could fill the slot as 'suppliers', i.e. archetypes that this archetype uses, and archetypes having slots which the current archetype matches as 'clients'. The ADL Workbench evaluates the slots and displays both of these lists, as shown below.</p>
			<p><a href="images/slots_1.png"><img border="0" src="images/slots_1.png" width="400"/> </a></p>
			
			<h3>Terminology</h3>
			<p>All archetypes contain an internal terminology, consisting of 'id-codes' (node identifiers), 'at-codes' (identifying coded values) and 'ac-codes' (identifying value sets). They may also include bindings between any of these and external terminologies and other terminology resources. These elements are found in the 'terminology' section of the archetype, such as shown here.</p>
			<table style="BACKGROUND-COLOR: #ffffff" border="0" cellspacing="2" cellpadding="0" width="70%">
				<tbody>
					<tr valign="top">
						<td style="BORDER-RIGHT-WIDTH: 0px; BORDER-TOP-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px">
						<a href="images/terminology.png">
							<img border="0" alt="Terminology - id codes" width="350" src="images/terminology.png"/> </a>
						<p><em>Terminology - id codes</em></p>
						</td>
						<td style="BORDER-RIGHT-WIDTH: 0px; BORDER-TOP-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px; padding-left:4em;">
						<a href="images/terminology2.png">
							<img border="0" alt="Terminology - at/ac codes and value sets" width="350" src="images/terminology2.png"/> </a>
						<p><em>Terminology - at/ac codes and value sets</em></p>
						</td>
					</tr>
				</tbody>
			</table>
			
			<h3>ADL view</h3>
			<p>The ADL source of an archetype can be viewed in the 'ADL' tab, regardless of whether it has compiled successfully or not. The 'ADL 1.4' and 'ADL 2' source sub-tabs are editable, and changes made can be saved using ctrl-S or the 'Save' button, which will cause an immediate re-compile.</p>
			<p><a href="images/archetype_source_view.png"><img border="0" src="images/archetype_source_view.png" width="760"/></a></p>
			
			<h3>Serialised views: ADL, ODIN, XML, JSON</h3>
			<p>Compiled archetypes can be viewed in various serialised formats, which can be used for testing ADL, XML, JSON and other software components. In both differential and flat forms, any compiled archetype can be viewed as ADL, ODIN, XML and JSON. The ODIN form is equivalent to a DOM tree in XML, but more regular.</p>
			<p><a href="images/source_1.png"><img border="0" src="images/source_1.png" width="400"/></a></p>
			<p>The output in the XML view can be controlled by a set of rules accessible from the XML menu.</p>
			
			<h3>Validity report</h3>
			<p>The 'Validity' tab displays any compiler messages for the archetype.</p>
			
			<h3>Statistics report</h3>
			<p>The 'Statistics' tab displays a statistics report for RM class and terminology usage in the archetype.</p>
			<p><a href="images/archetype_statistics.png"><img border="0" src="images/archetype_statistics.png" width="760"/></a></p>
		
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>
