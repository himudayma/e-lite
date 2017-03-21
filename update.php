<!doctype html>
<html>
<head>
<meta charset="UTF-8">
  <title>EDIT_ACCOUNT</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
  
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans'>

      <link rel="stylesheet" href="../css/style.css">

  
</head>

<body>
	<?php
	session_start();
	include 'C:\xampp\htdocs\projects\water_bill\menu.html';
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["acc_no"]) OR empty($_POST['div_code']) OR empty($_POST['scheme_code']) OR empty($_POST['emitra_key']) OR empty($_POST['acc_no_old']) OR empty($_POST['ser_no']) OR empty($_POST['add1']) OR empty($_POST['add2']) OR empty($_POST['add3']) OR empty($_POST['mtr_no']) OR empty($_POST['mtr_size']) OR empty($_POST['mtr_owner']) OR empty($_POST['c_type']) OR empty($_POST['sline_cd']) OR empty($_POST['average']) OR empty($_POST['flatrate']) OR empty($_POST['total_consumption']) OR empty($_POST['cur_reading'])) {
	$message = "All Fields are required";
	echo "<script type='text/javascript'>alert('$message');</script>";
	} else {
	$servername = "localhost";
	$username = "root";
	$password = "jsuthar1019";
	
	// Create connection
	$conn = mysqli_connect($servername, $username, $password) or die("Failed to connect to MySQL: " . mysql_error()); 
	// Check database
	$user=$_SESSION['user'];
	$db=mysqli_select_db($conn,$user) or die("Failed to connect to MySQL_DATABASE: " . mysql_error());
	
	$sql = "UPDATE login 
			SET acc_no = '".$_POST['acc_no']."',
			div_code = '".$_POST['div_code']."',
			scheme_code = '".$_POST['scheme_code']."',
			emitra_key = '".$_POST['emitra_key']."',
			acc_no_old = '".$_POST['acc_no_old']."',
			ser_no = '".$_POST['ser_no']."',
			name = '".$_POST['name']."',
			add1 = '".$_POST['add1']."',
			add2 = '".$_POST['add2']."',
			add3 = '".$_POST['add3']."',
			mtr_no = '".$_POST['mtr_no']."',
			mtr_size = '".$_POST['mtr_size']."',
			mtr_owner = '".$_POST['mtr_owner']."',
			c_type = '".$_POST['c_type']."',
			sline_cd = '".$_POST['sline_cd']."',
			average = '".$_POST['average']."',
			flatrate = '".$_POST['flatrate']."',
			total_consumption = '".$_POST['total_consumption']."',
			cur_reading = '".$_POST['cur_reading']."'
			WHERE acc_no = '".$_SESSION['acc_no']."'";
	if (mysqli_multi_query($conn, $sql)) {
		$message = "SUCCESSFULLY DONE";
		echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
		$message = "NOT DONE";
	echo "<script type='text/javascript'>alert('$message');</script>";
	}	
	}
	}
    ?>
	<div class="cont">
  	<div class="demo" style="height:53rem;width:100rem;background: rgba(0, 0, 0, 0.5);top: 50%;  left: 25%;  margin-left: -15rem;  margin-top: -26.5rem;">
    	<div style="font-size:30px;color:white;top: 2rem;position: absolute;  left: 1.5rem;">
        	<p>Details</p>
        </div>
        <div class="app__icon search svg-icon" style="font-size:30px;color:white;">
        	<p><?php echo $_SESSION['user']; ?></p>
        </div>
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div style="font-size:22px;color:white; background-color:transparent; padding-left:10%; padding-top:15%;">
          	<ul style="background-color:transparent; width:800px; height:250px;; display:block;">
				<li id="li_edit">Account Number       : <input type="text" class="login__input name" name="acc_no" value="<?php echo $_SESSION['acc_no']; ?>"/></li>
				<li id="li_edit">Division Code        : <input type="text" class="login__input name" name="div_code" value="<?php echo $_SESSION['div_code']; ?>"/></li>
				<li id="li_edit">Scheme Code          : <input type="text" class="login__input name" name="scheme_code" value="<?php echo $_SESSION['scheme_code']; ?>"/></li>
				<li id="li_edit">Emitra Key           : <input type="text" class="login__input name" name="emitra_key" value="<?php echo $_SESSION['emitra_key']; ?>"/></li>
				<li id="li_edit">Account_no_Old       : <input type="text" class="login__input name" name="acc_no_old" value="<?php echo $_SESSION['acc_no_old']; ?>"/></li>
				<li id="li_edit">Serial Number        : <input type="text" class="login__input name" name="ser_no" value="<?php echo $_SESSION['ser_no']; ?>"/></li>
				<li id="li_edit">Name                 : <input type="text" class="login__input name" name="name" value="<?php echo $_SESSION['name']; ?>"/></li>
				<li id="li_edit">Address 1            : <input type="text" class="login__input name" name="add1" value="<?php echo $_SESSION['add1']; ?>"/></li>
				<li id="li_edit">Address 2            : <input type="text" class="login__input name" name="add2" value="<?php echo $_SESSION['add2']; ?>"/></li>
				<li id="li_edit">Address 3            : <input type="text" class="login__input name" name="add3" value="<?php echo $_SESSION['add3']; ?>"/></li>
				<li id="li_edit">Meter Number         : <input type="text" class="login__input name" name="mtr_no" value="<?php echo $_SESSION['mtr_no']; ?>"/></li>
				<li id="li_edit">Meter Size           : <input type="text" class="login__input name" name="mtr_size" value="<?php echo $_SESSION['mtr_size']; ?>"/></li>
				<li id="li_edit">Meter Owner          : <input type="text" class="login__input name" name="mtr_owner" value="<?php echo $_SESSION['mtr_owner']; ?>"/></li>
				<li id="li_edit">C_type               : <input type="text" class="login__input name" name="c_type" value="<?php echo $_SESSION['c_type']; ?>"/></li>
				<li id="li_edit">Sline_cd             : <input type="text" class="login__input name" name="sline_cd" value="<?php echo $_SESSION['sline_cd']; ?>"/></li>
				<li id="li_edit">Average              : <input type="text" class="login__input name" name="average" value="<?php echo $_SESSION['average']; ?>"/></li>
				<li id="li_edit">Flatrate             : <input type="text" class="login__input name" name="flatrate" value="<?php echo $_SESSION['flatrate']; ?>"/></li>
				<li id="li_edit">Total Consumption    : <input type="text" class="login__input name" name="total_consumption" value="<?php echo $_SESSION['total_consumption']; ?>"/></li>
				<li id="li_edit">Current Reading      : <input type="text" class="login__input name" name="cur_reading" value="<?php echo $_SESSION['cur_reading']; ?>"/></li>
			</ul>
            </div>
            <ul style="background-color:transparent;float:right;">
            <li style="width:200px;">
				<button type="submit" class="login__submit">SUBMIT</button>
            </li>
            </ul>
			</form>
        </div>
    </div>
    <script type="text/javascript">history.pushState(null, null, document.title);
window.addEventListener('popstate', function () {
    history.pushState(null, null, document.title);
});
   </script>
</body>
</html>
