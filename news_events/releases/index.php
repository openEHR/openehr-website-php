<?php
session_start();
$PageName = 'Releases';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

	<?php include '../../panel/headpanel.php' ?>
	
</head>

<body>

<div id="MainFrame">
	
	<div id="TopPanel">
		<?php include '../../panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu">
		
		<div class="nav">
			<?php include '../../menu/topmenu.php' ?>
		</div>
		
	</div> 

	<div id="MainArea">
	
		<div id="SideMenu">
			<?php include '../menu.php' ?>
		</div>
		
		<div id="TextArea">
			
			<h1><?php echo "$PageName";?></h1>
			
			<?php
			//Connect to the database
			require_once ('../../../con_real.php');
			
			if ( (isset($_GET['id'])) && (is_numeric($_GET['id'])) ) {
				$news_id = intval($_GET['id']);
				
				//Retrieve the release information
				$q = "SELECT title, text, DATE_FORMAT(date, '%M %d, %Y') AS dr, resources, coordinates, first_name, surname FROM news_items, users WHERE category='releases' AND news_items.item_id=$news_id AND news_items.user_id=users.user_id";		
				$r = @mysqli_query ($conx, $q);
				
				if (mysqli_num_rows($r) === 1) { //Valid id for one item
					
					//Get the item information
					$row = mysqli_fetch_array ($r, MYSQLI_ASSOC);
					
					//Formating the information
					echo '<h2>' . $row['title'] . '</h2>' . "\n\t\t\t";
					echo '<h6>' . $row['dr'] . '&nbsp; | &nbsp;from: ' . $row['first_name']. ' ' . $row['surname']. '</h6><br/>' . "\n\t\t\t";
					echo '<div class="news_article">' . "\n\t\t\t\t" . $row['text'] . '<br/>';
					if ($row['resources'] != '') {
						echo "\n\t\t\t\t" . '<p><em>Other resources:</em> ' . $row['resources']. '</p><br/>';
					}
					if ($row['coordinates'] != '') {
						echo "\n\t\t\t\t" . '<p><em>Date, time and place:</em> ' . $row['coordinates']. '</p><br/>';
					}
					echo "\n\t\t\t</div>";
					echo "\n\t\t\t" . '<p><a href="../releases">>> Back to Releases</a></p>';
				}
				else { //Not valid item id
					echo '<p>Sorry, this page doesn\'t exist.</p>';
				}
				
			}
			else {
				//Retrieve releases information summary
				$q = "SELECT item_id, title, summary, DATE_FORMAT(date, '%M %d, %Y') AS dr FROM news_items WHERE category='releases' ORDER BY date DESC";
				$r = @mysqli_query ($conx, $q);
				
				//Count the number of the rows
				$num = mysqli_num_rows($r);
				echo '<br/>';
				
				if ($num > 0) { //everything went ok, display results
					
					//Fetch and print all releases:
					while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
						echo '<a href="index.php?id=' . $row['item_id'] . '">'.$row['title'].'</a><br/><h6>'
							. $row['dr'] . '</h6>
							<p>' . $row['summary'] . '</p><br/>';
					}
					mysqli_free_result ($r); //Free up the resources
				}
				else { //if it didnt run ok
					echo '<p>There are currently no releases.</p>';
				} 
			}
			
			mysqli_close($conx);
			?>
					
		</div>
			
	</div>

	<div id="BottomMenu">
		<?php include '../../menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
		<?php include '../../panel/bottompanel.php' ?>	
	</div>

</div>
	
<?php include '../../panel/scriptpanel.php' ?>

</body>

</html>