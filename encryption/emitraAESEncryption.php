<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script
  src="https://code.jquery.com/jquery-3.2.0.slim.min.js"
  integrity="sha256-qLAv0kBAihcHZLI3fv3WITKeRsUX27hd6upBBa0MSow="
  crossorigin="anonymous">
  </script>
</head>
	<body>
<?php
$str = "{\"SRVID\":\"".$_POST['SRVID']."\",\"searchKey\":\"".$_POST['searchKey']."\",\"SSOID\":\"".$_POST['SSOID']."\"}";
echo $str;

?>
		<form name="test" action="http://emitrauat.rajasthan.gov.in/webServicesRepositoryUat/emitraAESEncryption" method="post">
			<input type="hidden" name="toBeEncrypt" value="<?php echo htmlspecialchars($str); ?>"/>
			<input type="submit" id="sub" value="submit"/>
		</form>t
		
		 
	</body>
</html>