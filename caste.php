	<?php
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$servername = "localhost";
	$username = "id1138298_emitra";
    $password = "emitra";
	
	// Create connection
	$conn = mysqli_connect($servername, $username, $password) or die("Failed to connect to MySQL: " . mysql_error()); 
	// Check database
	$db=mysqli_select_db($conn,"id1138298_emitra") or die("Failed to connect to MySQL_DATABASE: " . mysql_error());

//image upload 
$target_dir = "user-imgs-caste/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
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
if ($_FILES["image"]["size"] > 500000) {
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
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
      
		$image="/user-imgs-caste/". basename( $_FILES["image"]["name"]) ;
		
    } else {
        echo "Sorry, your file was not uploaded.";
    }
}
	
//c_sign upload 
$target_dir = "user-imgs-caste/";
$target_file = $target_dir . basename($_FILES["sign"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["sign"]["tmp_name"]);
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
if ($_FILES["sign"]["size"] > 500000) {
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
    if (move_uploaded_file($_FILES["sign"]["tmp_name"], $target_file)) {
       
		$sign="/user-imgs-caste/". basename( $_FILES["sign"]["name"]) ;
		
    } else {
        echo "Sorry, your file was not uploaded.";
    }
}



	$sql = "INSERT INTO certificate (cname,cfname,c_add,p_add,c_place,c_tehsil,c_district, c_dob, c_birthplace,c_age,c_gender, c_rel,c_caste,c_subcaste,domicile,contact,dt,place,image,sign)
			VALUES ('".$_POST['cname']."','".$_POST['cfname']."','".$_POST['c_add']."','".$_POST['p_add']."','".$_POST['c_place']."','".$_POST['c_tehsil']."','".$_POST['c_district']."','".$_POST['c_dob']."','".$_POST['c_birthplace']."','".$_POST['c_age']."','".$_POST['c_gender']."','".$_POST['c_rel']."','".$_POST['c_caste']."','".$_POST['c_subcaste']."','".$_POST['domicile']."','".$_POST['contact']."','".$_POST['dt']."','".$_POST['place']."','" . $image . "','" . $sign . "')";

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