<?php
		
		
$servername = "localhost";
$username = "bradenborman1";
$password = "BBorman";
$dbname = "athletes_in_lyrics";

date_default_timezone_set("America/Chicago");
$DateSet = date("y/m/d");

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
	$sql = "SELECT * FROM  `Songs` ORDER BY  `Songs`.`song_lyrics` ASC";	
	$results = $conn->query($sql);
	
}
		
		
		
		
		while ($row = mysqli_fetch_array($results))
		{
			echo '<div class="song '.$row['song_sport'].'.">';
  				echo '<div class="row lineTop">';
    					echo '<div class="col-lg-3">'.$row['song_artist'].':</div>';
					echo '<div class="col-lg-4">'.$row['song_name'].'</div>';
					echo '<div class="col-lg-5 info hidden-xs">Athlete: '.$row['song_player'].'</div>';
  				echo '</div>';
  				echo '<div class="row lineBottom">';
					echo '<div class="col-sm-12">"'.$row['song_lyrics'].'"</div>';
  				echo '</div>';
			echo '</div>';
		}
?>