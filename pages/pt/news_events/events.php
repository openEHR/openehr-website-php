<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/templates/_functions.php');

//Change page name here:
$PageName = 'Eventos';

require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_header.php');
?>

		<div id="Content">
<!-- - - - - - - - - - - - - - - - - - - - - - - Content starts here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<?php
			//Connect to the database
			require_once ($_SERVER['DOCUMENT_ROOT'].'/functions/meta_db_conn.php');
			
			if ( (isset($_GET['id'])) && (is_numeric($_GET['id'])) ) {
				$news_id = intval($_GET['id']);
				
				//Retrieve the release information
				$q = "SELECT title, text, DATE_FORMAT(date, '%M %d, %Y') AS dr, resources, coordinates, first_name, surname FROM news_items, users WHERE category='events' AND news_items.item_id=$news_id AND news_items.user_id=users.user_id";		
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
					echo "\n\t\t\t" . '<p><a href="events">>> Back to Events</a></p>';
				}
				else { //Not valid item id
					echo '<p>Sorry, this page doesn\'t exist.</p>';
				}
				
			}
			else {
				//Retrieve releases information summary
				$q = "SELECT item_id, title, summary, coordinates FROM news_items WHERE category='events' ORDER BY item_id DESC";
				$r = @mysqli_query ($conx, $q);
				
				//Count the number of the rows
				$num = mysqli_num_rows($r);
				
				if ($num > 0) { //everything went ok, display results
					
					//Fetch and print all releases:
					while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
						echo '<a href="events.php?id=' . $row['item_id'] . '">'.$row['title'].'</a><br/><h6>'
							. $row['coordinates'] . '</h6>
							<p>' . $row['summary'] . '</p><br/>';
					}
					mysqli_free_result ($r); //Free up the resources
				}
				else { //if it didnt run ok
					echo '<p>There are currently no events.</p>';
				} 
			}
			
			mysqli_close($conx);
			?>
					
<!-- - - - - - - - - - - - - - - - - - - - - - - Content ends here - - - - - - - - - - - - - - - - - - - - - - - - - -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/templates/pt/_footer.php');?>
