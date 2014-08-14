<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'About ADL 1.5';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header_english.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>Overview</h2>
			<p>The 1.5 release of the ADL (Archetype Definition Language) formalism, and its object model counterpart, the AOM (Archetype Object Model) is a major advance on the previous 1.4 release. It fixes a number of problems with ADL/AOM 1.4, provides a unified formalism for both archetypes and templates, and adds a number of useful new features. These help pages don't attempt to provide the pedagogic basis of the formalism, which can be found in the specifications, rather it illustrates each feature of the ADL/AOM 1.5 formalism with real examples you can see for yourself. The specifications are found in the following locations.</p>
			<ul>
				<li><a href="https://github.com/openEHR/specifications/blob/master/publishing/architecture/am/adl1.5.pdf" target="_blank">The Archetype Definition Language 1.5 (draft)</a></li>
				<li><a href="https://github.com/openEHR/specifications/blob/master/publishing/architecture/am/aom1.5.pdf" target="_blank">The Archetype Object Model 1.5 (draft)</a></li>
				<li><a href="https://github.com/openEHR/specifications/blob/master/publishing/architecture/am/dist_dev_model.pdf" target="_blank">openEHR Distributed Knowledge Development (draft)</a></li>
				<li><a href="https://github.com/openEHR/specifications/blob/master/publishing/architecture/am/knowledge_id_system.pdf" target="_blank">openEHR Distributed Artefact Identification System (draft)</a></li>
			</ul>
			<p>One question you may have is: what if I am not interested in the ADL syntax? You might be using XML archetypes for example. It is important to understand the various roles of ADL, XML and the AOM. These are explained in some detail in the specifications (see below). Briefly, the ADL workbench performs most of its work using AOM structures. It also has an ADL parser and serialiser, and in the near future, will have a parser and serialiser for XML archetypes. Apart from some syntax basics, nearly all the validation carried out by the AWB is on AOM structures and has nothing to do with the ADL syntax. Additionally, ADL is a human readable syntax good for understanding the concepts and examples. However, it does not have to be used in archetype authoring or production systems - the XML form is completely equivalent.</p>

			<h3>Specifications Status</h3>
			<p>These specifications will be released in early 2014 as stable Trial Specifications. Although most of the principal features have been determined and implemented, there remain a number of details which could be changed; these are indicated in the text below. Your feedback on any aspect of the specification is encouraged, and can be reported on the <a href="http://www.openehr.org/issues/browse/SPECPR" target="_blank">openEHR SPEC_PR Jira project</a>. Please create new issues with the 'ADL 1.5' component specified.</p>
			<p>The remainder of this page describes the configuration of the tool for viewing the examples, and then describes in turn each of the features of ADL/AOM 1.5 grouped in the categories 'New features' and
			'Changes'.</p>

			
			<h2>ADL/AOM 1.5 - New features</h2>

			<h3>New internal coding system</h3>
			<p>The coding system used in ADL 1.4 archetypes used at-codes to identify everything, apart from occasional ac-codes to identify external value sets. This has been replaced by a new coding system in which id-codes identify all archetype nodes, at-codes identify terminology values and ac-codes identify terminology value sets, internal and external. The new system is described <a href="http://www.openehr.org/wiki/pages/viewpage.action?pageId=49053703">here</a></p>

			<h3>Tuples replace domain-specific syntax</h3>
			<p>The syntax used to represent DV_QUANTITY, DV_ORDINAL and CODE_PHRASE constraints for openEHR archetypes is now replaced by a standard 'tuple' syntax that enables any co-varying constraint to be expressed, including the afore-mentioned types. Details <a href="http://www.openehr.org/wiki/display/spec/ADL+1.5+Power+Syntax+Proposals">here</a></p>

			<h3>Terminology value-set constraints moved to terminology section</h3>
			<p>Value sets used to be constrained inline. They are now moved to the terminology, in the form of a new 'value-set' construct, described <a href="http://www.openehr.org/wiki/display/spec/ADL+1.5+-+where+to+define+value+sets">here</a>.</p>

			<h3>Terminology bindings are URIs</h3>
			<p>All bindings from internal codes to external entities are done using IHTSDO-style URIs. This enables the archetype terminology bindings structure to be simplified into one list.</p>

			<h3>artefact_type marker</h3>
			<p>A new attribute has been added to the ARCHETYPE class to enable various instantiations of the AOM to be designated as having different design intention - 'archetype', 'template', 'template_component', 'operational_template'. This allows ADL/AOM being used for archetypes, and various forms of templates.</p>
			<p>You can see this feature as follows:</p>
			<ul>
				<li>Choose the <em>openEHR_Examples</em> profile</li>
				<li>In the archetype explorer, navigate to any archetype, e.g. CLUSTER/person_additional_data_br</li>
				<li>Choose the 'Differential' tab (top set of tabs)</li>
				<li>Choose the 'Source' tab (second row of tabs); the keyword 'archetype' appears at the start of the first line of the file.</li>
				<li>Now navigate to the PERSON.t_patient_simple template in the template explorer</li>
				<li>When it has compiled, you will see the 'template' keyword in its source view</li>
				<li>Navigate to one of its children. You will see the keyword 'template_component' in its source view.</li>
			</ul>
			<p>Via the above method, you have been viewing the archetype and template ADL source files. Of course normally you don't need to do this to understand what kind of artefact you are looking at - the explorer icons are specific to each type.</p>

			<h3>Path-based constraints for specialised archetypes and templates</h3>
			<p>All specialised archetypes and templates state their constraints in a 'differential form' whereby new or changed elements of an archetype are defined using blocks of ADL (or XML, in the XML format) under a path. The following example is typical:</p>
        <pre>
            EVALUATION[at0000.1] matches { -- Diagnosis
                /data/items[at0002.1]/value matches
                    DV_CODED_TEXT matches {...}
                }
             }
		</pre>

			<p>This deceptively simple enhancement to ADL/AOM ensures that specialised archetypes and templates can now be properly represented and maintained by tools, compared to the previous situation where specialised archetypes contain copies of elements from the parent artefact. You can see some examples of this, as follows.</p>
			<ul>
				<li>Select the <em>CKM</em> profile</li>
				<li>Navigate in the archetype explorer to CONTENT_ITEM/CARE_ENTRY/EVALUATION/problem/diagnosis, and select the diagnosis node, which corresponds to the archetype openEHR-EHR-EVALUATION.problem-diagnosis.v1</li>
				<li>Select the 'Differential' tab, and below it, in the 'Definition' tab, you should see <a href="images/problem-diagnosis_diff_view.png">this</a></li>
				<li>You will see that below the top 'Diagnosis' node, the path '/data[at0001]/items' appears, and below that, one redefined object node and two new object node constraints.</li>
				<li>Now select the 'flat' tab, to see how these constraints have been correctly integrated into the structure defined by the parent archetype openEHR-EHR-EVALUATION.problem.v1, as shown <a href="images/problem-diagnosis_flat_view.png"> here</a>.</li>
			</ul>
			<p>You can also use the 'Source' tab to see the path-based constraints in their source form. You can now navigate through the hierarchies in the archetype explorer, looking for specialised archetypes (any archetype whose parent is another archetype rather than a class), whose constraints all use the path-based definition method illustrated above. The CONTENT_ITEM/CARE_ENTRY/OBSERVATION/lab-test hierarchy for example contains numerous specialised archetypes.</p>

			<h3>'before' and 'after' keywords for item ordering in containers</h3>
			<p>The 'before' and 'after' keywords can be used to specify the ordering of elements added to a container in a specialised archetype or template. This ensures authors can maintain ordering of all items within container attributes, including over specialisation.</p>
			<p>If you refer back to the problem-diagnosis example above in the <a href="images/problem-diagnosis_diff_view.png"> differential form</a>, you will see that the second two nodes include 'before' and 'after' markers respectively. The former is 'before [at0003]' and the latter 'after [at0031]', indicating the nodes from the parent archetype with respect to which the new nodes should be situated. If you now choose the Flat view, with RM visibility (radio buttons on the right) set to '+ class names', you will see that these two nodes are indeed situation in the correct positions with respect to the referenced nodes, as seen <a href="images/problem-diagnosis_flat+RM_view.png">here</a>.</p>

			<h3>'generated' marker</h3>
			<p>Used to indicate that the artefact was generated by software, rather than authored by hand. This flag will appear on any differential (.adls file extension) archetype converted from a legacy (pre-1.5) archetype (.adl extension). In addition, any generated flat form archetype (.adlf file) carries this marker. The flag primarily allows tools to detect that a source form archetype (i.e. any .adls file or its XML equivalent) was generated from a legacy file rather than an authored artefact.</p>
			<p>Most archetypes in the CKM repository when viewed in their Differential Source form (Differential and Source tabs) include the 'generated' marked in the top line. By contrast, none of the archetypes in the ADL_1.5_test or openEHR_example repositories contain differential archetypes with the 'generated' marker.</p>

			<h3>Exclusion of object constraints</h3>
			<p>Object constraints can be excluded, enabling templates to choose which constraints to retain for the use case of the template. Exclusion is also legal for archetypes, but is likely to be unexpected, and it is recommended that tools either prevent it or include a very clear confirmation dialog for the author. There are three ways to effect exclusion. For the examples in the following, select the <em>openEHR_examples</em> profile in the usual manner.</p>
			<ul>
				<li><em>Any attribute - complete removal</em>: if the attribute in the flat parent has existence matches {0..1}, then it is optional and can be completely removed in a specialised child. To see an example of this, follow these steps:
				<ul>
					<li>Navigate to the PERSON.t_patient_simple template in the template explorer and select it (click once).</li>
					<li>Select Differential View, Definition tab. You should see <a href="images/existence_redef_diff.png">this</a>. You will see that the final 'relationships' attribute has been removed by setting its existence to {0}.</li>
					<li>Now select the Source view (second row of tabs), and you will see <a href="images/existence_redef_source.png">this</a>, the ADL source form of the existence exclusion constraint.</li>
				</ul>
				</li>
				<li>
				<em>Single-valued attribute - remove alternative(s)</em>: if a single-valued attribute has multiple
				alternative optional constraints defined in the flat parent archetype (occurrences matches {0..1}, {0..*}
				etc), any of these may be redefined to {0}, i.e. occurrences of zero. To see an example of this, follow
				these steps:
				<ul>
					<li><font color="#FF0000">TBD</font></li>
				</ul>
				</li>
				<li><em>Multiply-valued attribute - remove child</em>: in exactly the same way as for single-valued attributes, any optional child of a multiply-valued (container) attribute may be removed by redefining its occurrences to {0}. To see an example of this, follow these steps:
				<ul>
					<li>Navigate to the PERSON.t_patient_simple template in the template explorer and select it (click once).</li>
					<li>Still in the template explorer, open out the first sub-part of the template (the one marked /details[at0001]/items) and select the child CLUSTER.t_birth_data. You can now view the exclusions in various ways:
					<ul>
						<li>In the central archetype view area, select the 'Differential' select Definition tab with RM visibility = 'Hide', you should see <a href="images/occ_redef_0_simple_view.png">this</a></li>
						<li>Now change the RM visibility to '+ classes', you should see <a href="images/occ_redef_0_RM_view.png">this</a></li>
						<li>Now select the 'Source' view you should see <a href="images/occ_redef_0_source_view.png">this</a></li>
					</ul>
					</li>
				</ul>
				</li>
			</ul>

			<h3>Negation operator for primitive type exclusions (Not yet implemented)</h3>
			<p>In specialised archetypes and templates, unneeded elements from primitive type ranges / value sets in the parent artefact can be logically removed using the !matches (&notin;) operator. This provides a convenient way to remove a small number of items from a large list.</p>

			<h3>Archetype - archetype external reference</h3>
			<p>The new C_ARCHETYPE_ROOT class in the AOM allows an archetype to refer to another archetype, without having to use a slot. To see an example, follow these steps:</p>
			<ul>
				<li>Select the ADL_1.5_test profile</li>
				<li>Navigate to and select the COMPOSITION.t_ext_ref template</li>
				<li>Select Differential View, Definition tab, and you will see <a href="images/ext_ref_diff.png">this</a>, which shows the use of the use_archetype statement to select two archetypes to be used under the attribute /content</li>
				<li>Now choose the Source view, and you will see <a href="images/ext_ref_source.png">this</a>, showing the ADL source expression. Note that the use_archetype statements mention archetype ids, but no slot identifiers (at-codes) because there was no slot defined at this point.</li>
			</ul>

			<h3>Slot redefinition semantics, including slot-filling</h3>
			<p>The semantics of redefining archetype slots in specialised archetypes and templates is defined in ADL/AOM 1.5. Slot-filling is regarded as a part of redefinition within a specialised archetype or template. A slot can be redefined by any of the following:</p>
			<ul>
				<li>specify slot-fillers;</li>
				<li>specialise the slot definition itself, for example, to reduce the set of allowable archetypes;</li>
				<li>close the slot, i.e. prevent any further slot-filling.</li>
			</ul>
			<p>Slot-filling and slot closing can be seen as follows.</p>
			<ul>
				<li>Select the <em>openEHR_examples</em> profile in the usual manner.</li>
				<li>Navigate to and select the PERSON.t_patient_simple template in the template explorer.</li>
				<li>Select Differential View, Source tabs to see <a href="images/slot_filling.png">this</a>.</li>
			</ul>

			<a name="annotations"></a><h3>Annotations section</h3>
			<p>Annotations can now be added on a per-node basis, with each annotation having one or more facets (representation = Hash&lt;T&gt;). This supports fine-grained documentation of elements of archetypes and templates. A typical annotations section looks as follows:</p>
		<pre>
annotations
  items = &lt;
    ["en"] = &lt;
      items = &lt;
        ["/data[at0001]/items[at0.8]"] = &lt;
          items = &lt;
            ["design note"] = &lt;"this is a design note on allergic reaction"&gt;
            ["requirements note"] = &lt;"this is a requirements note on allergic reaction"&gt;
            ["medline ref"] = &lt;"this is a medline ref on allergic reaction"&gt;
          &gt;
        &gt;
        ["/data[at0001]/items[at0.10]"] = &lt;
          items = &lt;
            ["design note"] = &lt;"this is a design note on intelerance"&gt;
            ["requirements note"] = &lt;"this is a requirements note on intolerance"&gt;
            ["national data dictionary"] = &lt;"NDD ref for intoleranance"&gt;
          &gt;
        &gt;
      &gt;
    &gt;
  &gt;
	</pre>
			<p>Annotations can also be added to an archetype for non-archetyped RM paths, e.g. to indicate the use or meaning of the corresponding data items within the context of that archetype.</p>
    <pre>
annotations
  items = &lt;
    ["en"] = &lt;
      items = &lt;
        ["/context/location"] = &lt;
          items = &lt;
            ["design note"] = &lt;"Note on use of the non-archteyped context/location RM element in this data"&gt;
          &gt;
        &gt;
        ["/context/health_care_facility/name"] = &lt;
          items = &lt;
            ["design note"] = &lt;"Note on use of non-archteyped context/health_care_facility/name RM element in this data"&gt;
          &gt;
        &gt;
      &gt;
    &gt;
  &gt;
	</pre>
			<p>Currently, the annotations feature implements a simple Hash of Strings, with plain String keys. Other more complex alternatives are available, e.g. where the keys are coded using at-codes, and then bound to globally standard codes within SNOMED CT or some other terminology. A discussion of these possibilities can be found <a href="http://www.openehr.org/mailarchives/openehr-technical/msg05523.html" target="_blank">here</a>.</p>
			<p>Annotations can be viewed in the Annotations tab in either differential or flat form. The example archetypes <a href="https://github.com/openEHR/adl-archetypes/tree/master/ADL15-reference/validity/annotations/" target="_blank">here</a>, are displayed in a grid, as in <a href="images/annotations_tab.png">this screenshot.</a></p>

			<h3>Default values (Not yet implemented)</h3>
			<p>The AOM now allows default values to be included on any node. This feature supports default value setting in templates.</p>

			<h3>Passthrough node flag (Not yet implemented)</h3>
			<p>The AOM now includes a 'passthrough' flag on C_COMPLEX_OBJECT indicating that this node is not significant in terms of display. This allows nodes required for structuring data but otherwise redundant for screen display and reporting to be detected by rendering software.</p>

			<h3>Reference model subtype matching semantics</h3>
			<p>Specialised archetypes and templates can now redefine the reference model type of a node, e.g. DV_TEXT into DV_CODED_TEXT. This allows free text constraints to be changed to coded-only constraints.</p>

			<h3>Node congruence &amp; conformance semantics</h3>
			<p>Rules have now been defined for determining if a node in a specialised artefact is conformant (consistent) or congruent (the same as) a corresponding node in the parent. This allows proper validation of specialised archetypes and templates to be implemented.</p>

			<h3>Operational template object model</h3>
			<p>The object model of an operational template is now defined. A formal specification is now available for tooling to use, and for use in software environments.</p>

			<h3>Flattening semantics for operational templates</h3>
			<p>The rules for generating an operational template from source template &amp; archetypes are now defined. This means that tools can implement a reliable transform from source artefacts to the operational artefact.</p>

			<h3>Group construct (Not yet implemented)</h3>
			<p>This feature supports groups within container attributes. Original proposal on <a href="http://www.openehr.org/wiki/display/spec/Ordering+and+choice+in+archetypes+and+templates" target="_blank">this page</a>.</p>

			
			<h2>Changes</h2>

			<h3>Existence and cardinality are now optional</h3>
			<p>Due to reference model checking, the ADL 1.4 semantics of mandatory defaults for existence and cardinality have been removed; now the reference model is always used to determine the underlying existence and cardinality of an attribute. Archetypes and templates now only carry existence and cardinality if it is different from the reference model.</p>

			<h3>Rules for at-codes</h3>
			<p>Rules have been stated for when at-codes need to be specialised, according to the changes stated in the specialised artefact. Editing tools can determine correct node ids in specialised artefacts.</p>

			<h3>Invariants and declarations merged into rules</h3>
			<p>A single 'rules' section is now used to contain invariant and declaration statements, which define constraints over multiple nodes in the artefact. The formalism and model of rules has been substantially improved. Simplifies overall artefact structure; allows constraints to refer to external entities, such as patient data, time etc.</p>

			<h3>Terminology_extract section added to Ontology (Not yet implemented)</h3>
			<p>A terminology_extract sub-section is now included in the terminology section of an archetype, enabling codes &amp; rubrics from terminology to be included. Mostly used for templates. Templates can directly include small extracts of external terminologies, making them standalone for such value-sets.</p>

			<h3>Representation for ref set reference (Not yet implemented)</h3>
			<p>A final addition is needed to either the AOM or the openEHR Profile model, of a class that defines how to represent a resolved reference to an external terminology; this class would replace a CONSTRAINT_REF node from a source template in an operational template. The benefit is that external ref-set references will be resolved in an operational template.</p>

			<h3>Semantic slot type (Not yet implemented)</h3>
			<p>See this sub-page for a discussion on the advanced semantics of slots, and how it simplifies templates.</p>

			<h3>Rules syntax (Xpath-based) (TODO)</h3>
			<p>TBD</p>

			<h3>Node_id optionality</h3>
			<p>Currently node_id is specified as mandatory on all nodes. However, this is not semantically needed, andcreates unnecessarily long paths which don't map cleanly to the equivalent XML Xpaths. ADL 1.5 defines precise rules for when node_ids are mandatory.</p>
					
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>
