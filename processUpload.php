<?php
	

	$server = "localhost";
$username = "id3948101_chrisas52";
$password = "august";
$database = "id3948101_reporter";

$con = mysql_connect($server, $username, $password) or die ("Could not connect: " . mysql_error());

mysql_select_db($database, $con);


$subject = mysql_real_escape_string($_POST["subj"]);
$message = mysql_real_escape_string($_POST["mess"]);
$category = mysql_real_escape_string($_POST["category"]);
$input = convImage('userPic');
date_default_timezone_set('GMT');

$date = date('Y-m-d H:i:s');


$sql = "INSERT INTO image_info(image, subject, message, category, date_added) ";
$sql .= "VALUES('$input', '$subject',  '$message', '$category', '$date')";

if (!mysql_query($sql, $con)) {
	die('Error: ' . mysql_error());
} else {
	echo "Image added";
	header('Location:homepage.html');
}

mysql_close($con);
  
echo('Added Successfully');

	function convImage($input)
	{
		$tempname = addslashes($_FILES[$input]['tmp_name']);
		$name = addslashes($_FILES[$input]['name']);
		$getimage = addslashes(file_get_contents($tempname));
		$image = base64_encode($getimage);
		return $image;
	}



?>