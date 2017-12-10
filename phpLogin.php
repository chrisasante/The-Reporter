<?php
	

	$server = "localhost";
$username = "id3948101_chrisas52";
$password = "august";
$database = "id3948101_reporter";

$con = mysql_connect($server, $username, $password) or die ("Could not connect: " . mysql_error());

mysql_select_db($database, $con);


$username = mysql_real_escape_string($_POST["uname"]);
$pass = mysql_real_escape_string($_POST["passwd"]);

$sql = "SELECT * FROM user_info WHERE username = '$username'";
$output = mysql_query($sql, $con);

if (!$output) {
	die('Error: ' . mysql_error());
} 

else 
{
	$row = mysqli_fetch_assoc($this->output);

	if ($row['pwd'] == $pass)
	{
		echo "Login Successful";
	}

	else
		echo "Password Incorrect";
	die('Error: ' . mysql_error());
}

mysql_close($con);
  
echo('Added Successfully');






?>