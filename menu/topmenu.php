<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); ?>
			<ul id="menu" class="menu">
			
				<li><a href="/home">Home</a></li>
				
       			<li><a href="/openehr_programs">Programs</a>
					<ul>
                		<li><a href="/programs/specification">&nbsp; Specification Program</a></li>
               			<li><a href="/programs/clinicalmodels">&nbsp; Clinical Models Program</a></li>
                		<li><a href="/programs/software">&nbsp; Software Program</a></li>
						<li><a href="/programs/localisation">&nbsp; Localisation Program</a></li>
					</ul>
        		</li>
				
       			<li><span>Entry Points</span>
            		 <ul>
               			<li><span>&nbsp; Getting started</span>
							<ul>
								<li><a href="/entry_points/getting_started/vendors_developers">&nbsp; Vendors / Developers</a></li>
								<li><a href="/entry_points/getting_started/governmentbodies_programmes">&nbsp; Government Bodies</a></li>
								<li><a href="/entry_points/getting_started/providers_clinicians">&nbsp; Providers / Clinicians</a></li>
								<li><a href="/entry_points/getting_started/universities_researchcentres">&nbsp; Universities / Research</a></li>
							</ul>
						</li>
						<li><span>&nbsp; I am working on</span>
							<ul>
								<li><a href="/entry_points/i_am_working_on/clinical_standardisation">&nbsp; Clinical Standardisation</a></li>
								<li><a href="/entry_points/i_am_working_on/government_programme">&nbsp; Government Programme</a></li>
								<li><a href="/entry_points/i_am_working_on/medical_research">&nbsp; Medical Research</a></li>
								<li><a href="/entry_points/i_am_working_on/building_solutions">&nbsp; Building Solutions</a></li>
								<li><a href="/entry_points/i_am_working_on/obtaining_solutions">&nbsp; Obtaining Solutions</a></li>
							</ul>
						</li>
            		 </ul>
       			</li>
				
				<li><?php include "$root/downloads/menu.php"?>
       			</li>
				
        		<li><?php include "$root/news_events/menu.php"?>
       			</li>
        	
				<li><?php include "$root/about/menu.php"?>
        		</li>

    		</ul>

