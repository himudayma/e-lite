	<?php
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$servername = "localhost";
	$username = "id1138298_emitra";
    $password = "emitra";
	
	// Create connection
	$conn = mysqli_connect($servername, $username, $password) or die("Failed to connect to MySQL: " . mysql_error()); 
	// Check database
	$db=mysqli_select_db($conn,"id1138298_emitra") or die("Failed to connect to MySQL_DATABASE: " . mysql_error());

//c_image upload 
$target_dir = "user-imgs-domicile/";
$target_file = $target_dir . basename($_FILES["c_image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["c_image"]["tmp_name"]);
    if($check !== false) {
        
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["c_image"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["c_image"]["tmp_name"], $target_file)) {
      
		$c_image="/user-imgs-domicile/". basename( $_FILES["c_image"]["name"]) ;
		
    } else {
        echo "Sorry, your file was not uploaded.";
    }
}
	
//c_sign upload 
$target_dir = "user-imgs-domicile/";
$target_file = $target_dir . basename($_FILES["c_sign"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["c_sign"]["tmp_name"]);
    if($check !== false) {
        
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["c_sign"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["c_sign"]["tmp_name"], $target_file)) {
       
		$c_sign="/user-imgs-domicile/". basename( $_FILES["c_sign"]["name"]) ;
		
    } else {
        echo "Sorry, your file was not uploaded.";
    }
}
	
//c1_verify upload 
$target_dir = "user-imgs-domicile/";
$target_file = $target_dir . basename($_FILES["c1_verify"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["c1_verify"]["tmp_name"]);
    if($check !== false) {
        
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["c1_verify"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["c1_verify"]["tmp_name"], $target_file)) {
       
		$c1_verify="/user-imgs-domicile/". basename( $_FILES["c1_verify"]["name"]) ;
		
    } else {
        echo "Sorry, your file was not uploaded.";
    }
}
	
//c2_verify upload 
$target_dir = "user-imgs-domicile/";
$target_file = $target_dir . basename($_FILES["c2_verify"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["c2_verify"]["tmp_name"]);
    if($check !== false) {
        
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["c2_verify"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["c2_verify"]["tmp_name"], $target_file)) {
       
		$c2_verify="/user-imgs-domicile/". basename( $_FILES["c2_verify"]["name"]) ;
		
    } else {
        echo "Sorry, your file was not uploaded.";
    }
}

//c3_verify upload 
$target_dir = "user-imgs-domicile/";
$target_file = $target_dir . basename($_FILES["c3_verify"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["c3_verify"]["tmp_name"]);
    if($check !== false) {
        
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["c3_verify"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["c3_verify"]["tmp_name"], $target_file)) {
       
		$c3_verify="/user-imgs-domicile/". basename( $_FILES["c3_verify"]["name"]) ;
		
    } else {
        echo "Sorry, your file was not uploaded.";
    }
}


	$sql = "INSERT INTO bonafide (cname,cfname,cadd,cf_add,cf_busi,cf_busi_add,c_dob,c_date,c19name,c19place,c10name,c10place,c12name,c12place,c_higheduname,c_higheduplace,c_othername,c_otherplace,c_achal,c_list,c_years,c_contact,c_marriage,c_husbandname,
	c_residence,c_mar_year,c1_verify,c2_verify,c3_verify,c_image,c_sign)
			VALUES ('".$_POST['cname']."','".$_POST['cfname']."','".$_POST['cadd']."','".$_POST['cf_add']."','".$_POST['cf_busi']."','".$_POST['cf_busi_add']."','".$_POST['c_dob']."','".$_POST['c_date']."','".$_POST['c19name']."','".$_POST['c19place']."','".$_POST['c10name']."','".$_POST['c10place']."','".$_POST['c12name']."','".$_POST['c12place']."','".$_POST['c_higheduname']."','".$_POST['c_higheduplace']."','".$_POST['c_othername']."','".$_POST['c_otherplace']."','".$_POST['c_achal']."','".$_POST['c_list']."','".$_POST['c_years']."','".$_POST['c_contact']."','".$_POST['c_marriage']."','".$_POST['c_husbandname']."','".$_POST['c_residence']."','".$_POST['c_mar_year']."','" . $c1_verify . "','" . $c2_verify . "','" . $c3_verify . "','" . $c_image . "','" . $c_sign . "')";

	if (mysqli_query($conn, $sql)) {
		$message = "SUCCESSFULLY DONE";
		echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
		$message = "NOT DONE " . mysql_error();
	echo "<script type='text/javascript'>alert('$message');</script>";
	}	
	}
	include('index.html');
    ?>
	