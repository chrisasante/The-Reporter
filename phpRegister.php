<?php
	

	$server = "localhost";
$username = "id3948101_chrisas52";
$password = "august";
$database = "id3948101_reporter";

$con = mysql_connect($server, $username, $password) or die ("Could not connect: " . mysql_error());

mysql_select_db($database, $con);


$username = mysql_real_escape_string($_POST["uname"]);
$pass = mysql_real_escape_string($_POST["passwd"]);
$email = mysql_real_escape_string($_POST["email"]);
$phNum = mysql_real_escape_string($_POST["pNum"]);
$age = mysql_real_escape_string($_POST["age"]);

$sql = "INSERT INTO user_info(username, password, email, phone_number, age) ";
$sql .= "VALUES('$username', '$pass',  '$email', '$phNum', '$age')";

if (!mysql_query($sql, $con)) {
	die('Error: ' . mysql_error());
} else {
	echo "User added";
	header('Location:homepage.html');
}

mysql_close($con);
  
echo('Added Successfully');



	// 	$username = '';
	// 	$email = '';
	// 	$pass = '';
	// 	$phNum = '';
	// 	$age = '';
	// 	$ok = true;

	//     	if (!isset($_POST['uname']) || $_POST['uname'] === '') 
	//     	{
	//         	$ok = false;
	//     	}	 

	//     	else 
	//     	{
	//         	$username = mysql_real_escape_string($_POST['uname']);
	//     	}

	//     	if (!isset( $_POST['passwd']) || $_POST['passwd'] === '') 
	//     	{
	//         	$ok = false;
	//     	}	 

	//     	else 
	//     	{
	//         	$pass = mysql_real_escape_string($_POST['passwd']);
	//     	}

                      

 //            if (!isset($_POST['email']) || $_POST['email'] === '') 
 //            {
 //                $ok = false;
 //            } 

 //            else 
 //            {
 //                $email = mysql_real_escape_string($_POST['email']);
 //            } 
	    
	//     	if (!isset($_POST['pNum']) || $_POST['pNum'] === '') 
 //            {
 //                $ok = false;
 //            } 

 //            else 
 //            {
 //                $phNum = mysql_real_escape_string($_POST['pNum']);
 //            } 

 //            if (!isset($_POST['age']) || $_POST['age'] === '') 
 //            {
 //                $ok = false;
 //            } 

 //            else 
 //            {
 //                $age = mysql_real_escape_string($_POST['age']);
 //            } 


	//     	if (!$ok) 
	//     	{
 //         	echo "Check error";	
	// 		}

	// 		else
	// 			  	
	

	// // code to check if username exists

	// 	//code to check if username already exist
	// 	$sqlQuery = "SELECT * FROM user_info WHERE username = '$username'";

 //    	// execution of query to insert the query
 //      	$output = mysql_query($sqlQuery, $con);

	// 	if ($output){
	// 		echo "Username already exists";
	// 	}

	// 	//if username does not exist run the register function
	// 	else


 //    	// query to insert data into the database
 //      	$my_query = "INSERT INTO user_info(username, password, email, phone_number, age) ";
		// $my_query .= "VALUES('$username', '$pass',  '$email', '$phNum', '$age')";

		// if (!mysql_query($my_query, $con)) {
		// 	die('Error: ' . mysql_error());
		// } else {
		// 	echo "User added";
		// 	header('Location:homepage.html');
		// }

		// mysql_close($con);
	// }


?>