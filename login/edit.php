<?php
	// The user is redirected here from my_news.php.

	session_start();
	
	// If no session is present, redirect the user:
	if (!isset($_SESSION['user_id'])) {

		// Need the functions to create an absolute URL:
		require_once ('login_functions.php');
		$url = absolute_url();
		header("Location: $url");
		exit(); // Quit the script.
	}
	else {
		$usr_id = (int)$_SESSION['user_id'];
		if(!isset($_GET['nid']) && !isset($_POST['submitted'])) {
		
			// Need the functions to create an absolute URL:
			require_once ('login_functions.php');
			$url = absolute_url();
			header("Location: $url");
			exit(); // Quit the script.
		}
	}
	
	
	//List of characters to get rid of
	$new_line = array("<p>&nbsp;</p>","<p></p>");
	$empty = '';
	$char1old = '<script';
	$char1new = '&lt;script';
	$char2old = '</script>';
	$char2new = '&lt;/script&gt;';
	
?>
<?php
$PageName = 'Edit News Items';
?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/_header_login.php' ?>

	<div id="MainArea" style=" margin-left:30px; width:900px; ">
		
		<div id="Content" style="left:0px; width:900px; ">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->

			<h1><?php echo $PageName;?></h1>
			
				<?php
				include 'getpost_functions.php';
				
				//use GET parameter to fetch the news from db
				if(isset($_GET['nid']) && empty($_POST)){
					
					//select the post from db
					$newsid = (int)$_GET['nid'];
					$array_data = getPost($newsid);
				}
				
				elseif(isset($_POST['submitted'])) {
					//Connect to the database
					require_once('../../con_real.php'); 
					
					//Initialise an error array
					$errors = array(); 

					//Check for the category
					if (empty($_POST['category'])) {
						$errors[] = 'You forgot to set the category.';
					}
					else {
						$cnt = trim($_POST['category']);
						$cnt = htmlentities($cnt);
						$ct = mysqli_real_escape_string($conx, $cnt);
					}

					//Check for the title
					if (empty($_POST['title'])) {
						$errors[] = 'You forgot to insert news title.';
					}
					else {
						$tnl = trim($_POST['title']);
						$tnl = htmlentities($tnl);
						$tl = mysqli_real_escape_string($conx, $tnl);
					}

					//Check for the summary
					if (empty($_POST['summary'])) {
						$errors[] = 'You forgot to insert news summary.';
					}
					else {
						$snu = trim ($_POST['summary']);
						$snu = htmlentities($snu);
						$su = mysqli_real_escape_string($conx, $snu);
					}

					//Check for the text
					if (empty($_POST['text'])) {
						$errors[] = 'You forgot to insert news text.';
					}
					else {
						$tnx = trim($_POST['text']);
						$tnx = str_replace($new_line, $empty, $tnx);
						$tnx = str_replace($char1old, $char1new, $tnx);
						$tnx = str_replace($char2old, $char2new, $tnx);
						$tx = mysqli_real_escape_string($conx, $tnx);
					}
					
					//Check for the other resources
					if (empty($_POST['resources'])) {
						$rs = '';
					}
					else {
						$rns = trim ($_POST['resources']);
						$rns = str_replace($new_line, $empty, $rns);
						$rns = str_replace($char1old, $char1new, $rns);
						$rns = str_replace($char2old, $char2new, $rns);
						$rs = mysqli_real_escape_string($conx, $rns);
					}
					
					//Check for the coordinates
					if (empty($_POST['coordinates'])) {
						$co = '';
					}
					else {
						$cno = trim ($_POST['coordinates']);
						$cno = htmlentities($cno);
						$co = mysqli_real_escape_string($conx, $cno);
					}
					
					//Check for the user id
					if (empty($_POST['user_id'])) {
						$errors[] = 'Your login has expired. Sign in again.';
					}
					else {
						$ind = trim ($_POST['user_id']);
						$ind = htmlentities($ind);
						$id = mysqli_real_escape_string($conx, $ind);
					}
					
					//Check for the user id
					if (empty($_POST['item_id'])) {
						$errors[] = 'Your news cannot be currently updated due system error. Please contact administrator.';
					}
					else {
						$iind = trim ($_POST['item_id']);
						$iind = htmlentities($iind);
						$iid = mysqli_real_escape_string($conx, $iind);
					}
					
					//If everything is OK
					
					if (empty($errors)) {
						
						//Insert news in the database

						//Make query
						$q = "UPDATE news_items 
							SET
								category = '$ct',
								title = '$tl',
								summary = '$su',
								text = '$tx',
								resources = '$rs',
								coordinates = '$co',
								user_id = '$id'
							WHERE item_id='$iind'
							";
						$r = @mysqli_query ($conx, $q); //Run the query

						if ($r) { 
							echo '<h2>Thank you!</h2> <p>Your news have been updated.</p><br/>';
							echo '<p><a href="user_home">>> Back to User Home</a></p>';
						}
						else {
							echo '<h2>System error</h2> <p>Your news have not been updated due system error. We apologize for any inconvenience. Please try again later or contact site administrator.</p><br/>';
							echo '<p><a href="user_home">>> Back to User Home</a></p>';
						}
						echo "\n\t\t".'</div>';
						include ('../templates/_footer.php');
						exit();
						
					}
					else {
						echo '<h2>Missing entries</h2>
						<p>The following entries are missing:<br/>';

						foreach ($errors as $msg) {
							echo " - $msg<br>\n";
						}
						echo '<p>Please try again</p>';
					}

					mysqli_close($conx);
				}

				?>

				<form id="news_form" action="edit.php" method="post">
				<p>News category: <select name="category"><option value="foundation_news" <?php if($array_data['category']== 'foundation_news') { echo 'selected';} ?>>Foundation News</option><option value="community_news" <?php if($array_data['category']== 'community_news') { echo 'selected';} ?>>Community News</option><option value="industry_news" <?php if($array_data['category']== 'industry_news') { echo 'selected';} ?>>Industry News</option><option value="events" <?php if($array_data['category']== 'events') { echo 'selected';} ?>>Events</option><option value="releases" <?php if($array_data['category']== 'releases') { echo 'selected';} ?>>Releases</option></select></p>
				<p>&#42; News title: <input type="text" name="title" size="20" maxlength="80" class="input" value="<?php if(isset($array_data['title'])) echo $array_data['title']; ?>" /></p>
				<p>&#42; News summary: <input type="text" name="summary" size="40" maxlength="300" class="input" value="<?php if(isset($array_data['summary'])) echo $array_data['summary']; ?>" /></p>
				<p>&#42; News text: <textarea name="text" rows="20" cols="80"><?php if(isset($array_data['text'])) echo $array_data['text']; ?></textarea></p>
				<p>Other resources: <textarea name="resources" rows="5" cols="80"><?php if(isset($array_data['resources'])) echo $array_data['resources']; ?></textarea></p>
				<p>Date and place: <input type="text" name="coordinates" size="40" maxlength="300" class="input" value="<?php if(isset($_POST['coordinates'])) echo $_POST['coordinates']; ?>" /></p>
				<!--<p><input type="submit" name="submit" value="Update" /></p>-->
				<input type="hidden" name="item_id" value="<?php echo $newsid;?>" />
				<input type="hidden" name="user_id" value="<?php echo $usr_id;?>" />
				<input type="hidden" name="submitted" value="TRUE" />
				</form>
				
				<br/>
				<p><i>* Mandatory fields</i></p>
				<br/>
				<p><a href="user_home">>> Back to User Home</a></p>
			
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
			</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer_login.php');?>