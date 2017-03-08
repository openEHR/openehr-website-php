<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'openEHR in China 2016';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_header_english.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
		<h1><?php echo "$PageName";?></h1>
		<h2 id="openEHRinChina2016">Summary</h2>
		<p>After the successful "First Workshop on Using and Promoting openEHR in China in 2016" in April, more and more domain experts, hospitals and vendors in China are interested in openEHR.  To make more people know openEHR in China, OpenEHR technical committee had developed an <a href="http://www.openehr.org.cn:8080/MyOpenEHRWeb/index.jsp">official website</a>, including contents of news, notification, forum, cases and program. And several other organizations and companies has joined in the working groups led by Zhejiang University (ZJU) to start localization of archetypes in China. More and more projects have used openEHR as the basic model of the system.</p>
	
		<p>Under this background, in order to deeply facilitate openEHR adoption and implementation in China, openEHR technical committee organized second workshop in November 25, 2016, as the sattelite meeting of CAMDI Medical Software Yearly Conference. The workshop has totally over 50 people participated, including university professors, vendor representatives, hospital managers and standard researchers. This workshop consisted of two sessions: openEHR modeling and openEHR technical implementation.</p>

		<p>Prof. Huilong Duan, the Chairman of the Conference and China openEHR Ambassador, gave an opening speech on the purpose of the workshop and emphased the importance of using openEHR to improve interoperability especially in the big data era. He is currently one of the leaders of the national project of “Standard Development for Precision Medical Big Data Processing &amp; Utilization”, and openEHR can possibly be selected as a basis for the standard development.</p>
		<img src="2016_11_25_openehr_china-photo1.png" alt="Prof. Huilong Duan" width="800"> 

		<p>In the first session, Prof. Xudong Lu gave a presentation of "openEHR information modelling".  He introduced the principle of openEHR two-level modelling approach and explained the progress of openEHR information modelling development in China. So far over 60 archetypes have been newly created and 25 archytypes have been modified according to the local requirements in China.  He also presented the openEHR China website, and the collaborative modelling environment for domain experts defining archetypes and templates. The Prof. Lei Liu from Fudan University, Prof. Siwei Yu from Wuhan University, and Ping Wang from Infinitte Co., Ltd. have joined in the discussion, and suggested to open working groups for modelling on special interesting sub-domains such as Health Monitoring Data modelling, Omics Data modelling, etc.</p>
		<img src="2016_11_25_openehr_china-photo2.png" alt="openEHR information modelling" width="800"> 

		<p>In the second session of openEHR technical implementation, two presenters show their different ways of implementation. Dr. Baogang Liu, CEO from Trend Health Technologies (Beijing) Co., Ltd. gave a representation to introduce their openEHR technical implementation on Graph DB. Dr.  Lingtong Min from Zhejiang University gave a representation to introduce the implementation of an openEHR-based CDR on relational databases. The audience has discussed thoroughly on the benefits and drawbacks of these two methods.</p>
		<img src="2016_11_25_openehr_china-photo3.png" alt="openEHR implementations in China" width="800"> 

		<p>In the second session of openEHR technical implementation, two presenters show their different ways of implementation. Dr. Baogang Liu, CEO from Trend Health Technologies (Beijing) Co., Ltd. gave a representation to introduce their openEHR technical implementation on Graph DB. Dr.  Lingtong Min from Zhejiang University gave a representation to introduce the implementation of an openEHR-based CDR on relational databases. The audience has discussed thoroughly on the benefits and drawbacks of these two methods.</p>

		<p>At last, the workshop had a 20 minutes free discussion about the openEHR modelling and technology promotion in China. The audience has show their great interests on openEHR and many good advices were proposed:</p>
		<ol>
			<li>Prof. Siwei Yu has suggested the openEHR China to collaborate with OMAHA in China, which is a non-for- profit organization to promote sharable personal health record.</li>
			<li>Prof. Lei Liu from Fudan University has leading a national project of “Precision Medicine Knowledge Bases”, he has proposed to collaborate on modelling of omics data.</li>
			<li>Several experts from companies and hospitals have show their eagerness of using openEHR in their project, the committee can promote further collaborations on data modeling and system implementation between corresponding parties.</li>
		</ol>

<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_footer.php');?>
