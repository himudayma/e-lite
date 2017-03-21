<!doctype html>
<html>
<head>
<link rel="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
  <link rel="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js">
<meta charset="UTF-8">
  <title>MOOLNIWAS FORM</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
  
  <link rel="stylesheet prefetch" href="http://fonts.googleapis.com/css?family=Open+Sans">
	<link href="css/baapucss.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
  
</head>

<body>
<?php
	$servername = "localhost";
	$username = "id1138298_emitra";
    $password = "emitra";
	session_start();
	// Create connection
	$conn = mysqli_connect($servername, $username, $password) or die("Failed to connect to MySQL: " . mysql_error()); 
	// Check database
	$db=mysqli_select_db($conn,"id1138298_emitra") or die("Failed to connect to MySQL_DATABASE: " . mysql_error());
	$cname = $_POST['cname'];
	$_SESSION['cname'] = $_POST['cname'];
	$query = mysqli_query($conn,"SELECT * FROM bonafide WHERE cname='$cname'") or die("Error " . mysql_error());
	if(mysqli_num_rows($query) > 0) {
		$row = mysqli_fetch_array($query);
		$_SESSION['cname'] = $row['cname'];
		$_SESSION['cfname'] = $row['cfname'];
		$_SESSION['cadd'] = $row['cadd'];
		$_SESSION['cf_add'] = $row['cf_add'];
		$_SESSION['cf_busi'] = $row['cf_busi'];
		$_SESSION['cf_busi_add'] = $row['cf_busi_add'];
		$_SESSION['c_dob'] = $row['c_dob'];
		$_SESSION['c_date'] = $row['c_date'];
		$_SESSION['c19name'] = $row['c19name'];
		$_SESSION['c19place'] = $row['c19place'];
		$_SESSION['c10name'] = $row['c10name'];
		$_SESSION['c10place'] = $row['c10place'];
		$_SESSION['c12name'] = $row['c12name'];
		$_SESSION['c12place'] = $row['c12place'];
		$_SESSION['c_higheduname'] = $row['c_higheduname'];
		$_SESSION['c_higheduplace'] = $row['c_higheduplace'];
		$_SESSION['c_othername'] = $row['c_othername'];
		$_SESSION['c_otherplace'] = $row['c_otherplace'];
		$_SESSION['c_achal'] = $row['c_achal'];
		$_SESSION['c_list'] = $row['c_list'];
		$_SESSION['c_years'] = $row['c_years'];
		$_SESSION['c_contact'] = $row['c_contact'];
		$_SESSION['c_marriage'] = $row['c_marriage'];
		$_SESSION['c_husbandname'] = $row['c_husbandname'];
		$_SESSION['c_residence'] = $row['c_residence'];
		$_SESSION['c_mar_year'] = $row['c_mar_year'];
		$_SESSION['c1_verify'] = $row['c1_verify'];
		$_SESSION['c2_verify'] = $row['c2_verify'];
		$_SESSION['c3_verify'] = $row['c3_verify'];
		$_SESSION['c_image'] = $row['c_image'];
		$_SESSION['c_sign'] = $row['c_sign'];
	}
?>
<div class="container" style="padding-top:5px"><a href="index.html"><button class=" previous">Back (पीछे)</button></a></div>
    	<div class="text-center"><h1>Bonafied </h1></div>
		<form method="POST" action="review_mulniwas_update.php">
        <div style="font-size:22px;color:black; background-color:white;">
          	<ul>
				<li >Name                 : <input type="text" class="login__input name" name="cname" value="<?php echo $_SESSION['cname'];?>"></li>
				<li >Father Name          : <input type="text" class="login__input name" name="cfname" value="<?php echo $_SESSION['cfname'];?>"></li>
				<li >Address              : <input type="text" class="login__input name" name="cadd" value="<?php echo $_SESSION['cadd'];?>"></li>
				<li >Father Address       : <input type="text" class="login__input name" name="cf_add" value="<?php echo $_SESSION['cf_add'];?>"></li>
				<li >Father Business      : <input type="text" class="login__input name" name="cf_busi" value="<?php echo $_SESSION['cf_busi'];?>"></li>
				<li >Father Business Address: <input type="text" class="login__input name" name="cf_busi_add" value="<?php echo $_SESSION['cf_busi_add'];?>"></li>
				<li >Date of Birth        : <input type="date" class="login__input name" name="c_dob" value="<?php echo $_SESSION['c_dob'];?>"></li>
				<li >Birth Date           : <input type="date" class="login__input name" name="c_date" value="<?php echo $_SESSION['c_date'];?>"></li>
				<li >Class 1-9            : <input type="text" class="login__input name" name="c19name" value="<?php echo $_SESSION['c19name'];?>"><input type="text" class="login__input name" name="c19place" value="<?php echo $_SESSION['c19place'];?>"/></li>
				<li >Class 10             : <input type="text" class="login__input name" name="c10name" value="<?php echo $_SESSION['c10name'];?>"><input type="text" class="login__input name" name="c10place" value="<?php echo $_SESSION['c10place'];?>"></li>
				<li >Class 12             : <input type="text" class="login__input name" name="c12name" value="<?php echo $_SESSION['c12name'];?>"><input type="text" class="login__input name" name="c12place" value="<?php echo $_SESSION['c12place'];?>"></li>
				<li >Higher Education     : <input type="text" class="login__input name" name="c_higheduname" value="<?php echo $_SESSION['c_higheduname'];?>"><input type="text" class="login__input name" name="c_higheduplace" value="<?php echo $_SESSION['c_higheduplace'];?>"></li>
				<li >Other                : <input type="text" class="login__input name" name="c_othername" value="<?php echo $_SESSION['c_othername'];?>"><input type="text" class="login__input name" name="c_otherplace" value="<?php echo $_SESSION['c_otherplace'];?>"></li>
				<li >Real Address         : <input type="text" class="login__input name" name="c_achal" value="<?php echo $_SESSION['c_achal'];?>"/></li>
				<li >Contact               : <input type="text" class="login__input name" name="c_contact" value="<?php echo $_SESSION['c_contact'];?>"/></li>
				<li >Do you registered for voting card or not         : <input type="text" class="login__input name" name="c_list" value="<?php echo $_SESSION['c_list'];?>"/></li>
				<li >From how many years you live in Rajasthan        : <input type="text" class="login__input name" name="c_years" value="<?php echo $_SESSION['c_years'];?>"/></li>
				<h6>For Womens:</h6>
				<li >Married            : <input type="text" class="login__input name" name="c_marriage" value="<?php echo $_SESSION['c_marriage'];?>"/></li>
				<li >Husband Name                : <input type="text" class="login__input name" name="c_husbandname" value="<?php echo $_SESSION['c_husbandname'];?>"/></li>
				<li >Residence    : <input type="text" class="login__input name" name="c_residence" value="<?php echo $_SESSION['c_residence'];?>"/></li>
				<li >Marriage Year      : <input type="text" class="login__input name" name="c_mar_year" value="<?php echo $_SESSION['c_mar_year'];?>"/></li>

				<li >User Profile Pic      : <input type="file" value="<?php echo $_SESSION[''];?>" name="c_image" ></li>
				<li >User Signature      : <input type="file" class="login__input name" name="c_sign"  value="<?php echo $_SESSION['c_sign'];?>"/></li>

				<h6>User Verification Process</h6>
				
				<li > <p>Attach previous domicile certifiacte of any family member </p>      : <input  value="<?php echo $_SESSION['c1_verify'];?>" type="file" class="login__input name" name="c1_verify" /></li>

				<li >	<p>10 Year proof of the permanent address</p>      : <input type="file"  value="<?php echo $_SESSION['c2_verify'];?>" class="login__input name" name="c2_verify" /></li>

				<li ><p>Rent-Agreement proof of 10 years or more</p>      : <input type="file"  value="<?php echo $_SESSION['c3_verify'];?>" class="login__input name" name="c3_verify" /></li>


			</ul>
            </div>
            <ul style="background-color:white;float:center;color:black;">
            <li style="width:200px;">
				<button name="submit" value="submit"  type="submit" class="login__submit">Submit</button>
            </li>
            </ul>
		</form>
    
</body>
</html>