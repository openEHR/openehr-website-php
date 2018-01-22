<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Latest Releases';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header.php');
?>

		<div id="Content">
<!-- ================================= Content starts here ============================== -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<table class="TableBasic">
				<tbody>
					<tr>
						<th> Release </th>
						<th> Date</th>
						<th> Description </th>
					</tr>

					<tr>
						<td> <a href="/releases/ITS/Release-0.9.0/docs/index" target="_blank">ITS Release 0.9.0</a></td>
						<td> 22 January 2018 </td>
						<td> <a href="https://openehr.atlassian.net/projects/SPECITS/versions/12509" target="_blank">Initial publishing</a>
						</td>
					</tr>

					<tr>
						<td> <a href="/releases/PROC/Release-1.0.0/docs/index" target="_blank">PROC Release 1.0.0</a></td>
						<td> 1 December 2017 </td>
						<td> <a href="https://openehr.atlassian.net/projects/SPECPROC/versions/12500" target="_blank">Initial publishing</a>;
							 <a href="https://openehr.atlassian.net/projects/SPECPR/versions/12501" target="_blank">0 Problems</a>
						</td>
					</tr>

					<tr>
						<td> <a href="/releases/QUERY/Release-1.0.0/docs/index" target="_blank">QUERY Release 1.0.0</a></td>
						<td> 15 November 2017 </td>
						<td> <a href="https://openehr.atlassian.net/projects/SPECTERM/versions/11260" target="_blank">Initial publishing; <br>1 Change made</a>; 
							 <a href="https://openehr.atlassian.net/projects/SPECPR/versions/11564" target="_blank">1 Problem fixed</a>
						</td>
					</tr>

					<tr>
						<td> <a href="/releases/TERM/Release-2.1.0/docs/index" target="_blank">TERM Release 2.1.0</a></td>
						<td> 08 November 2017 </td>
						<td> <a href="https://openehr.atlassian.net/projects/SPECTERM/versions/12502" target="_blank">1 Change made</a>; 
							 <a href="https://openehr.atlassian.net/projects/SPECPR/versions/12504" target="_blank">1 Problem fixed</a>
					    </td>
					</tr>

					<tr>
						<td> <a href="/releases/AM/Release-2.0.6/docs/index" target="_blank">AM Release 2.0.6</a></td>
						<td> 07 January 2017 </td>
						<td> <a href="https://openehr.atlassian.net/projects/SPECAM/versions/10963" target="_blank">26 Changes made</a>; 
							 <a href="https://openehr.atlassian.net/projects/SPECPR/versions/11073" target="_blank">23 Problems fixed</a>
						</td>
					</tr>

					<tr>
						<td> <a href="/releases/RM/Release-1.0.3/docs/index" target="_blank">RM Release 1.0.3</a></td>
						<td> 15 December 2015 </td>
						<td> <a href="https://openehr.atlassian.net/projects/SPECRM/versions/10860" target="_blank">23 Changes made</a>; 
							 <a href="https://openehr.atlassian.net/projects/SPECPR/versions/10060" target="_blank">29 Problems fixed</a>
						</td>
					</tr>

					<tr>
						<td> <a href="/releases/BASE/Release-1.0.3/docs/index" target="_blank">BASE Release 1.0.3</a></td>
						<td> 15 December 2015 </td>
						<td> <a href="https://openehr.atlassian.net/projects/SPECBASE/versions/11360" target="_blank">2 Changes made</a>; 
							 <a href="https://openehr.atlassian.net/issues/?filter=11112" target="_blank">5 Problems fixed</a>
						</td>
					</tr>
				</tbody>
			</table>

<!-- =========================================== Content ends here =============================================== -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
