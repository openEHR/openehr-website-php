<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'List of Specifications';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<h2>Overview</h2>
			<p>The following tables define deliverables of Specification Program.</p>
			
			
			<h2>Core</h2>
			<table class="TableBasic">
			<tbody>
				<tr>
					<th> Component</th>
					<th> Documentary Specification </th>
					<th> Description </th>
				</tr>
				<tr>
					<td colspan=3> <b>Requirements</b> </td>
				</tr>
				<tr>
					<td> Standards conformance </td>
					<td> ISO 18308 Conformance statement </td>
					<td> Document describing conformance of openEHR architecture to ISO TS 18308, &quot;Requirements for EHR Architectures&quot;. </td>
				</tr>
				<tr>
					<td colspan=3> <b>Architecture</b> </td>
				</tr>
				<tr>
					<td> Architecture <br class="atl-forced-newline" /> </td>
					<td> Architecture Overview <br class="atl-forced-newline" /> </td>
					<td> &quot;Read me first&quot; document for the whole architecture. provides a summary of the reference, archetype and service models, and describes global semantics. </td>
				</tr>
				<tr>
					<td> Reference Model</td>
					<td> EHR IM</td>
					<td> The information model of the openEHR EHR. </td>
				</tr>
				<tr>
					<td> &nbsp;</td>
					<td> EHR Extract IM</td>
					<td> The information model of the EHR Extract, which is a serilialisation of content from an EHR. </td>
				</tr>
				<tr>
					<td> &nbsp;</td>
					<td> Common IM </td>
					<td> Information model containing common concepts, including the archetype-enabling LOCATABLE class, party references, audits and attestations, change control, and authored resources. </td>
				</tr>
				<tr>
					<td> &nbsp;</td>
					<td> Data Structures IM </td>
					<td> Information model of data structures, incuding a powerful model of HISTORY and EVENT. </td>
				</tr>
				<tr>
					<td> &nbsp;</td>
					<td> Data Types IM </td>
					<td> Information model of data types, including quantities, date/times, plain and coded text, time specification, multimedia and URIs. </td>
				</tr>
				<tr>
					<td> &nbsp;</td>
					<td> Support IM </td>
					<td> Support model defining identifiers, assumed types, and terminology interface specification used in the rest of the specifications. </td>
				</tr>
				<tr>
					<td> Archetype Model  </td>
					<td> ADL 1.4  </td>
					<td> Abstract syntax specification for archetypes 1.4 edition of language (used in ISO 13606-2). </td>
				</tr>
				<tr>
					<td> &nbsp;</td>
					<td> AOM 1.4 </td>
					<td> Object model of archetypes corresponding to ADL 1.4. </td>
				</tr>
				<tr>
					<td> &nbsp;</td>
					<td> ADL 1.5 </td>
					<td> ADL 1.5 draft: ADL now includes dedicated section on specialisation, many  new examples, improved descriptions and corrections of errors. </td>
				</tr>
				<tr>
					<td> &nbsp;</td>
					<td> AOM 1.5 </td>
					<td> AOM 1.5 draft - the AOM description now includes uniquely identified  formally testable validity conditions (suitable for output by  compilers), revised primitive types, improved ontology section, and constraint model extended to represent differential archetypes. </td>
				</tr>
				<tr>
					<td> &nbsp;</td>
					<td> Template model </td>
					<td> Object model of templates. </td>
				</tr>
				<tr>
					<td> Service Model  </td>
					<td> EHR Service, etc  </td>
					<td> &nbsp;</td>
				</tr>
				<tr>
					<td> Terminology </td>
					<td> openEHR Vocabulary  </td>
					<td> Documentary form of the&nbsp;openEHR terminology, which is a set of vocabularies and code sets used by the reference and archetype models. </td>
				</tr>
				<tr>
					<td> Querying  </td>
					<td> Archetype Query Language, a-path  </td>
					<td> &nbsp;</td>
				</tr>
				<tr>
					<td> Guidelines and&nbsp; Decision Support </td>
					<td> Guideline Definition Language (GDL) </td>
					<td> A language for expressing computable guidelines for use with decision support components.</td>
				</tr>
				</tbody>
			</table>

			<br />
			
			
			<h2>Non-core</h2>
			<table class="TableBasic">
			<tbody>
				<tr>
					<th> Component  </th>
					<th> Documentary Specification  </th>
					<th> Description  </th>
				</tr>
				<tr>
					<td colspan=3> <b>Implementation</b>  </td>
				</tr>
				<tr>
					<td> XML  </td>
					<td> XML development guide  </td>
					<td> &nbsp;</td>
				</tr>
				<tr>
					<td> &nbsp;</td>
					<td> TDS (XSD) specification </td>
					<td> &nbsp;</td>
				</tr>
				<tr>
					<td> Java </td>
					<td> Java development guide  </td>
					<td> Guide to java implementation of openEHR.</td>
				</tr>
				<tr>
					<td> &nbsp;</td>
					<td> TDO specification </td>
					<td> &nbsp;</td>
				</tr>
				<tr>
					<td> &nbsp;</td>
					<td> Lightweight JSON specification </td>
					<td> &nbsp;</td>
				</tr>
				<tr>
					<td> .Net  </td>
					<td> .Net development guide  </td>
					<td> &nbsp;</td>
				</tr>
				<tr>
					<td> &nbsp;</td>
					<td> TDO specification </td>
					<td> &nbsp;</td>
				</tr>
				<tr>
					<td> Form languages  </td>
					<td> Form generation specification  </td>
					<td> &nbsp;</td>
				</tr>
				<tr>
					<td> &nbsp;</td>
					<td> User interface specifications  </td>
					<td> &nbsp;</td>
				</tr>
				<tr>
					<td colspan=3> <b>Education</b>  </td>
				</tr>
				<tr>
					<td> Software Development </td>
					<td> TBD  </td>
					<td> &nbsp;</td>
				</tr>
				<tr>
					<td colspan=3> <b>Standards Interfaces</b>  </td>
				</tr>
				<tr>
					<td> ISO 13606  </td>
					<td> standardised mapping / converged model  </td>
					<td> &nbsp;</td>
				</tr>
				<tr>
					<td> HL7v2  </td>
					<td> Standard openEHR template library for message interfacing  </td>
					<td> &nbsp;</td>
				</tr>
				<tr>
					<td> HL7 CDA  </td>
					<td> Transformationalgorithms  </td>
					<td> &nbsp;</td>
				</tr>
				<tr>
					<td> ASTM CCR  </td>
					<td> Standard archetype / template expression.  </td>
					<td> &nbsp;</td>
				</tr>
			</tbody>
			</table>
		
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>