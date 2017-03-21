<?php
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$servername = "localhost";
	$username = "id1138298_emitra";
    $password = "emitra";
	$text = $_POST['ques'];
	// Create connection
	$conn = mysqli_connect($servername, $username, $password) or die("Failed to connect to MySQL: " . mysql_error()); 
	// Check database
	$db=mysqli_select_db($conn,"id1138298_emitra") or die("Failed to connect to MySQL_DATABASE: " . mysql_error());
	$sql = "INSERT INTO info (name,m_no,ques)
			VALUES ('".$_POST['name']."','".$_POST['m_no']."','$text')";
	if (mysqli_query($conn, $sql)) {
		$message = "SUCCESSFULLY DONE";
		echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
		$message = "NOT DONE " . mysql_error();
	echo "<script type='text/javascript'>alert('$message');</script>";
	}
}
?>
