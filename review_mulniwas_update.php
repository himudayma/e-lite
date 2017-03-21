<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$servername = "localhost";
	$username = "id1138298_emitra";
    $password = "emitra";
	session_start();
	// Create connection
	$conn = mysqli_connect($servername, $username, $password) or die("Failed to connect to MySQL: " . mysql_error()); 
	// Check database
	$db=mysqli_select_db($conn,"id1138298_emitra") or die("Failed to connect to MySQL_DATABASE: " . mysql_error());
	$cname = $_SESSION['cname'];
	$sql = "UPDATE bonafide 
			SET cname = '".$_POST['cname']."',
			cfname = '".$_POST['cfname']."',
			cadd = '".$_POST['cadd']."',
			cf_add = '".$_POST['cf_add']."',
			cf_busi = '".$_POST['cf_busi']."',
			cf_busi_add = '".$_POST['cf_busi_add']."',
			c_dob = '".$_POST['c_dob']."',
			c_date = '".$_POST['c_date']."',
			c19name = '".$_POST['c19name']."',
			c19place = '".$_POST['c19place']."',
			c10name = '".$_POST['c10name']."',
			c10place = '".$_POST['c10place']."',
			c12name = '".$_POST['c12name']."',
			c12place = '".$_POST['c12place']."',
			c_higheduname = '".$_POST['c_higheduname']."',
			c_higheduplace = '".$_POST['c_higheduplace']."',
			c_othername = '".$_POST['c_othername']."',
			c_otherplace = '".$_POST['c_otherplace']."',
			c_achal = '".$_POST['c_achal']."',
			c_list = '".$_POST['c_list']."',
			c_years = '".$_POST['c_years']."',
			c_contact = '".$_POST['c_contact']."',
			c_marriage = '".$_POST['c_marriage']."',
			c_husbandname = '".$_POST['c_husbandname']."',
			c_residence = '".$_POST['c_residence']."',
			c_mar_year = '".$_POST['c_mar_year']."',
			c1_verify = '".$_POST['c1_verify']."',
			c2_verify = '".$_POST['c2_verify']."',
			c3_verify = '".$_POST['c3_verify']."',
			c_image = '".$_POST['c_image']."',
			c_sign = '".$_POST['c_sign']."'
			WHERE cname = '$cname'";
	if (mysqli_multi_query($conn, $sql)) {
		$message = "SUCCESSFULLY DONE";
		echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
		$message = "NOT DONE" . mysql_error();
	echo "<script type='text/javascript'>alert('$message');</script>";
	}
	}
	include('index.html');
?>