<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
<link href='https://fonts.googleapis.com/css?family=Kdam Thmor' rel='stylesheet'>
</head>

<body>
	<div class="jumbotron">
		<div class="container"> 
				<h1>Athletes in songs</h1>  
		</div>
	</div>
<div class="container">
<p id="leaderboard"></p>
</div>


<script>
load()

setInterval(function() {
load()
}, 3000);


function load() {
   var xhttp;
  if (window.XMLHttpRequest) {
    // code for modern browsers
    xhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("leaderboard").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "fetchSongs.php", true);
  xhttp.send();
}

</script>



</body>
</html>