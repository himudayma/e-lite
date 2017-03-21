	<!doctype html>
<html>
<head>
<meta charset="UTF-8">
  <title>DETAILS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
  
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
	
	<div class="cont">
<table style="width=100%; border-collapse:collapse;" border="1"; >
    	<tr style=" font-size:22px; border:solid #000000; border-collapse:collapse;">
			<th ><p>Application Key</p></th>
			<th ><p>Username</p></th>
			<th><p>Fathername</p></th>
            <th><p>Service</p></th>
			<th><p>Status</p></th>											
		</tr>
	<?php
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$servername = "localhost";
	$username = "id1138298_emitra";
    $password = "emitra";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password) or die("Failed to connect to MySQL: " . mysql_error()); 
	// Check database
	$db=mysqli_select_db($conn,"id1138298_emitra") or die("Failed to connect to MySQL_DATABASE: " . mysql_error());
	$name = $_POST['cname'];
	$cat = $_POST['category'];
	$query = mysqli_query($conn,"SELECT * FROM $cat WHERE cname='$name'") or die("Error " . mysql_error());
			
			if(mysqli_num_rows($query) > 0) {
						while($row = mysqli_fetch_array($query)) {				
							echo "<tr style='font-size:18px; border:solid #000000; border-collapse:collapse;'>";
							echo "<td>" . $row['category'] . "-" . $row['id'] ."</td>";
							echo "<td>" . $row['cname'] . "</td>";
							echo "<td>" . $row['cfname'] . "</td>";
							echo "<td>" . $_POST['category'] . "</td>";
							echo "<td>Within 3 Days</td>";
							echo "</tr>";	
										
						}
									}
						else
				echo "nothing";
	}
	?>
	
</div>
</body>
</html>